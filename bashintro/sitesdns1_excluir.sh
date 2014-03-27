#!/bin/bash

#atribui as variáveis para configuração do site
sigla="${1^^}"
dominio="ww2.${sigla,,}.ufrpe.br"

#remove o diretório do novo site dentro da pasta sites
cd /opt/lampp/htdocs/prppg/sites
rm -rf $dominio

#Remove o banco de dados
/opt/lampp/bin/mysqladmin -u root DROP $sigla
/opt/lampp/bin/mysql -Bse "DELETE FROM sites WHERE sigla = '$sigla'" prppg

#apaga o virtualhost
sed -i "/127.0.0.1\tww2.${sigla,,}.ufrpe.br/d" /etc/hosts

#sed -i "/$sigla/d" /opt/lampp/etc/extra/httpd-vhosts.conf

