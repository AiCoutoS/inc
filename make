#!/bin/bash
clear

atualizar() {
    cd inc
    echo "atualizando..."
    git pull origin master
    cd ..
    echo "pronto"
}

freesh() {
    if [ -e $PWD/free.sh ]
    then
        . $PWD/free.sh
    else
        nano $PWD/free.sh
    fi
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
        echo "2) atualizar"
        echo "3) executar o free.sh"
        printf "Opção número "
        read opt
    else
        opt=$1
fi

case $opt
in
    1) instalar ;;
    2) atualizar ;;
    3) freesh ;;
    *) echo "opção inválida" ;;
esac


