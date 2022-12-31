# Desafio

##  O desafio consiste em implementar uma simples aplicação WEB de **perguntas e respostas**.

São 3 Modelos:

1. **Pergunta**
2. **Resposta**
3. **Usuário**

- Uma *pergunta* pode ter **uma ou mais** *respostas* e pode ser privada.
- Cada *resposta* pertence a **uma** *pergunta*.
- Cada *pergunta* tem um Perguntador (*Usuário*).
- Cada *resposta* tem um Respondedor (*Usuário*).

## Você precisa realizar as seguintes tarefas

- Criar um repositório privado temporário no [Github](https://github.com/)
- Liberar acesso ao usuário: `andreysmattos`
- Fazer commits periódicos com a descrição do que está sendo enviado.
- Telas:
- - Login
- - Listagem de perguntas (ocultando as privadas)
- - Criar pergunta
- - Responder uma pergunta
- - Visualizar respostas de uma pergunta


# Meu ponto de visita


- Vou começar dizendo que eu não sabia nada de laravel mas entendia php, html, css e o mvc,
entender o fremowork no começo foi meio embaraçoso mas com um documentação muito delicinha e
videos no youtube consegui fazer esse dasafio em 3 semanas.

Como eu usei linux pq meu windows deu pau e eu não tinha tempo para bootar um pendrive windows

Me ajudou muito esse video 
https://www.youtube.com/watch?v=TKH4S4_d9PA&t=2108s

junto com a documentação do laravel BEM intuitivo e alguns stack overflow e claro.
https://laravel.com/


Descrição do que foi feito no projeto

De começo tenho que falar que nunca mexi com laravel mas já tive experiências com php, 
html  e css. passei um pouco de trabalho para entender como funciona mas no final deu tudo certo 

## Começo 

- Comecei tentando entender a estrutura, já tinha uma base mvc então entendia +- 
mas tinha muitas pastas que eu não sabiam o  por que estavam ali, ao fazer o ambiente
acabou quebrando nas migrate onde foi um dos meus primeiros problemas, mas com acompanhamento
da documentação, stackoverflow e alguns vídeos tudo se esclareceu, No começo estava meio copie,
cole e entenda, mas com passar dos dias foi 'desenrolado ’.

## Meio 

- Ao passar das semanas eu fui entendendo como cada parte se comunicava, que dá view ia para
router e da router para controller onde fazia contato com o banco, tive uma dificuldade para
entender a view por que era em blade.php  que é  um tipo de Framework front-end para php mas
seguindo conforme os dias, fui entendendo os “blocos” e @ no php.

## FIm 

- Chegando aqui eu travei numa parte, sentia que eu precisava estruturar melhor o banco
para poder ter uma clareza na hora que fosse fazer as query no php resolvi refazer o banco
com um  diagrama EER  que me deu uma ampla clareza, após isso foi de vento em popa eu queria 
add algo eu conseguia  tranquilamente,  mas ainda sim não ficou um clean code, pois eu 
acho que o controle além de direcionar as view e injetar os dados ficou com a parte de query,
que acho que era o papel de outra classe, que teorizo que seja às factory ou  seeds , até
poderia correr atrás para aprender mas isso demoraria mais tempo virando assim um mês.

## Gif mostrando como ficou.
![](Peek.gif)
