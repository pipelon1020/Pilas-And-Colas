PILAS Y COLAS en php

1. Codigo de Colas
Este código muestra cómo funciona una cola (estructura FIFO: First In, First Out)

Se usa un arreglo ($Cola) para almacenar los elementos.
Agregar elementos (array_push) En el ejemplo, se agregan los números del 1 al 7 en orden.
array_shift($Cola) remueve el primer elemento de la cola (el más antiguo).
En el ejemplo, se elimina el 1 (el primero en entrar).
Se imprime el valor eliminado ($Borrar).

Se muestra el contenido restante de la cola (print_r).

2.Codigo de Pilas
Este código muestra cómo funciona una pila (estructura LIFO: Last In, First Out)

Se usa un arreglo ($Pila) para almacenar los elementos.
Agregar elementos (array_push)
En el ejemplo, se agregan los números del 1 al 5 en orden.
array_pop($Pila) remueve el último elemento de la pila (el más reciente). En el ejemplo, se elimina el 5 (el último en entrar).
Agregar un nuevo elemento
Se añade el número 6 con array_push.
Se imprime el último elemento eliminado ($Elemento).

Se muestra el contenido actual de la pila (print_r).
