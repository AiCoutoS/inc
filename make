#!/bin/bash
clear

atualizar() {
    cd inc
    echo "atualizando..."
    git pull origin master
    cd ..
    echo "pronto"
}

instalar() {
    clear
    echo "instalando..."
    cp $PWD/inc/.gitignore.example $PWD/.gitignore
    composer require basic/migration
    echo "pronto"
}

if [ -z "$1" ]
    then
        echo "Digite a opção:"
        echo "1) instalar"
        echo "2) make2"
        echo "3) atualizar"
        printf "Opção número "
        read opt
    else
        opt=$1
fi

case $opt
in
    1) instalar ;;
    2) . "$PWD/make2" ;;
    3) atualizar ;;
    *) echo "opção inválida" ;;
esac


