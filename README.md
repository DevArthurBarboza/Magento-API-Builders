# Factories

O presente módulo se trata de um módulo para estudo e aplicação do design pattern Builder.

Supondo que haja necessidade de desenvolver um model para conexão com uma api utilizando o método GET e outro model para conectar com outra api utilizando o método POST, podemos abstrair a atribuição das informações das respectivas APIs para seus builders, estes que são controlados pelo model Director o qual realiza a leitura das informações configuradas no admin e as informa aos builders.