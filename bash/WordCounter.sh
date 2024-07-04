#!/bin/bash

texto=$(cat "teste.txt")

palavras=$(echo "$texto" | tr '[:upper:]' '[:lower:]' | tr -sc 'a-z' '\n')

contagem=$(echo "$palavras\n" | grep -v "^$" | sort | uniq -c | sort -nr)

echo "Contagem de Palavras do Arquivo Teste.txt"
echo "$contagem" | awk '{ print $2 ": " $1}'
