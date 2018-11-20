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
    ENV=$PWD/.env
    if [ -e $ENV ]
    then
        echo ".env ok..."
    else
        echo ".env adicionado..."
        cp $PWD/inc/.env.example $ENV
    fi
    GITIGNORE=$PWD/.gitignore
    if [ -e $GITIGNORE ]
    then
        echo ".gitignore ok..."
    else
        echo ".gitignore adicionado..."
        cp $PWD/inc/.gitignore.example $GITIGNORE
    fi
    MAKE=$PWD/make
    if [ -e $MAKE ]
    then
        echo "make ok..."
    else
        echo "make adicionado..."
        cp $PWD/inc/make.example $MAKE
    fi
	composer require basic/migration ^2.1
	composer require fastfeed/fastfeed 0.4.0
	composer require vlucas/phpdotenv 2.5.1
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
