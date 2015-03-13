#!/bin/bash

#atribui as variáveis para configuração do site
dominio="ww2.teste5.ufrpe.br"
sigla="teste5"
senha="123456"
#brasao=$4
nome=`echo "teste5" | base64 -d`
conf='$conf'
sigla="teste5"
#siteName=${sigla^^}

#cria o diretório do novo site dentro da pasta sites
cd sites
mkdir ww2.teste5.ufrpe.br
chmod 777 ww2.teste5.ufrpe.br

#copia e altera o settings.php
sed -e "s/'database' => 'prppg'/'database' => '$sigla'/g" \
    -e "s/'username' => 'root'/'username' => '$sigla'/g" \
    -e "s/'password' => ''/'password' => '$senha'/g" ww2.prppg.ufrpe.br/settings.php > ww2.teste5.ufrpe.br/settings.php

#escreve no settings.php o nome do novo site
echo "
#Informações sobre o site 
global $conf; 
$conf['site_name'] = '$nome'; 
$conf['site_slogan'] = 'Pró-Reitoria de Pesquisa e Pós-Graduação';" >> ww2.teste5.ufrpe.br/settings.php

chmod 777 ww2.teste5.ufrpe.br/settings.php

#copia os temas e arquivos para o novo site
cp -R ww2.prppg.ufrpe.br/files ww2.teste5.ufrpe.br/files
chown www-data files
chmod 755 ww2.teste5.ufrpe.br/files

#copia a base de dados padrao para a base de dados do novo site
mysqldump -u root prppg > prppg.dump
mysqladmin -u root create "$sigla"
mysql -u root "$sigla" < prppg.dump

mysql -u root -e "GRANT SELECT, INSERT, UPDATE, DELETE, CREATE, DROP, INDEX, ALTER, LOCK TABLES, CREATE TEMPORARY TABLES ON $sigla.* TO '$sigla'@'localhost' IDENTIFIED BY '$senha'; FLUSH PRIVILEGES;"

#cria o virtualhost
echo -e "127.0.0.1\t\tww2.${sigla,,}.ufrpe.br" >> /etc/hosts
echo "<VirtualHost *:80>
	DocumentRoot "/var/www/prppg/"
	ServerName ww2.teste5,,}.ufrpe.br
</VirtualHost>" >> /etc/apache2/sites-available/"teste5,,}.conf"
a2ensite "${sigla,,}"
/etc/init.d/apache2 reload

#cd $dominio
#mkdir files
#chmod 777 files
