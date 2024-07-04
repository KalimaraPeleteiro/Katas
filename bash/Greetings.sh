#!/bin/bash

echo "Qual o seu nome?"
read nome

echo "Qual a sua idade?"
read idade

if [ $idade -ge 18 ]; then
	echo "Você é maior de idade"
else
	echo "Você é menor de idade"
fi

echo "Seja bem vindo $nome, de $idade anos"
