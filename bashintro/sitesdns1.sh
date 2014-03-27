#!/bin/bash

#atribui as variáveis para configuração do site
dominio=$1
sigla=$2
senha=$3
#brasao=$4
nome=`echo $4 | base64 -d`
conf='$conf'

#siteName=${sigla^^}

#cria o diretório do novo site dentro da pasta sites
cd sites
mkdir $dominio
chmod 777 $dominio

#copia e altera o settings.php
sed -e "s/'database' => 'prppg'/'database' => '$sigla'/g" \
    -e "s/'username' => 'root'/'username' => '$sigla'/g" \
    -e "s/'password' => ''/'password' => '$senha'/g" ww2.prppg.ufrpe.br/settings.php > $dominio/settings.php

#escreve no settings.php o nome do novo site
echo "
#Informações sobre o site 
global $conf; 
$conf['site_name'] = '$sigla'; 
$conf['site_slogan'] = '$nome';" >> $dominio/settings.php

chmod 777 $dominio/settings.php

#copia os temas e arquivos para o novo site
cp -R ww2.prppg.ufrpe.br/themes $dominio/themes
cp -R ww2.prppg.ufrpe.br/files $dominio/files
chown www-data files
chmod 755 $dominio/files

#copia os logos para o novo site
#cp ../../temp/$brasao $dominio/themes/PRPPG/images/brasao.png
#cp ../../temp/$brasao $dominio/themes/PRPPG_Azul/images/brasao.png
#cp ../../temp/$brasao $dominio/themes/PRPPG_Verde/images/brasao.png
#cp ../../temp/$brasao $dominio/themes/PRPPG_Blank/images/brasao.png

#cp ../../temp/$brasao $dominio/themes/PRPPG/favicon.ico
#cp ../../temp/$brasao $dominio/themes/PRPPG_Azul/favicon.ico
#cp ../../temp/$brasao $dominio/themes/PRPPG_Verde/favicon.ico
#cp ../../temp/$brasao $dominio/themes/PRPPG_Blank/favicon.ico

#copia a base de dados padrao para a base de dados do novo site
/opt/lampp/bin/mysqldump -u root prppg > prppg.dump
/opt/lampp/bin/mysqladmin -u root create $sigla
/opt/lampp/bin/mysql -u root $sigla < prppg.dump

/opt/lampp/bin/mysql -u root -e "GRANT SELECT, INSERT, UPDATE, DELETE, CREATE, DROP, INDEX, ALTER, LOCK TABLES, CREATE TEMPORARY TABLES ON $sigla.* TO '$sigla'@'localhost' IDENTIFIED BY '$senha'; FLUSH PRIVILEGES;"

#cria o virtualhost
echo -e "127.0.0.1\tww2.${sigla,,}.ufrpe.br" >> /etc/hosts
echo "
<VirtualHost *:80> #$sigla
	ServerName ww2.${sigla,,}.ufrpe.br
	DocumentRoot /opt/lampp/htdocs/prppg
</VirtualHost> #$sigla" >> /opt/lampp/etc/extra/httpd-vhosts.conf

#cd $dominio
#mkdir files
#chmod 777 files

#outra implementação para nginx server
#cd /opt/lampp/etc/extra
#echo "<VirtualHost *:80>
#    ServerName $dominio
#    DocumentRoot \"/opt/lampp/htdocs/prppg"
#</VirtualHost>" >> httpd-nvhosts.conf
