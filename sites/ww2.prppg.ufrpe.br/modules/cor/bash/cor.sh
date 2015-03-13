#!/bin/bash
#Atribuição de variáveis
hex_header=$1
hex_footer=$2
hex_grad1=$3
hex_grad2=$4
footer_str=$5

#Modifica a cor do nav-bar
sed -i '36 a\
#header-menu { background: '$hex_header'; border-top:1px solid #353535; border-bottom:1px solid #353535; }' /var/www/prppg/sites/all/themes/corporateclean/color/colors.css
sed -i '36d' /var/www/prppg/sites/all/themes/corporateclean/color/colors.css

#Modifica a cor do rodapé
sed -i '84 a\
#footer { background:'$hex_footer'; }' /var/www/prppg/sites/all/themes/corporateclean/color/colors.css
sed -i '84d' /var/www/prppg/sites/all/themes/corporateclean/color/colors.css

#Modifica a cor do gradativo do rodapé
sed -i '97 a\
background-image: -webkit-linear-gradient(top, '$hex_grad1' 0%, '$hex_grad2' 100%);' /var/www/prppg/sites/all/themes/corporateclean/color/colors.css
sed -i '97d' /var/www/prppg/sites/all/themes/corporateclean/color/colors.css

#Modifica a cor da string do rodapé
sed -i '96 a\
	color: '$footer_str';' /var/www/prppg/sites/all/themes/corporateclean/style.css
sed -i '96d' /var/www/prppg/sites/all/themes/corporateclean/style.css


#sed -e "s/'database' => 'prppg'/'database' => '$sigla'/g" \
#    -e "s/'username' => 'root'/'username' => '$sigla'/g" \
#    -e "s/'password' => ''/'password' => '$senha'/g" ww2.prppg.ufrpe.br/settings.php > $dominio/settings.php

#escreve no settings.php o nome do novo site
#echo "
#Informações sobre o site 
#global $conf; 
#$conf['site_name'] = '${sigla^^}'; 
#$conf['site_slogan'] = '$nome';" >> $dominio/settings.php
