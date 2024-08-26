# Patrones de Diseño

## Inyección de dependencias

Se utiliza para inyectar las dependencias.

![Diagrama](https://raw.githubusercontent.com/shamandul/Patrones/main/img/diagrama.png)

## Patrón Builder

Nos permite crear componentes más complejo a través de setter o a través de pequeños pasos.

## Strategy

Nos permite crear distintas estrategias y nos pemite tener la diferentes estrategias implementada en sus propias clases facilita el testeoy que sea más facil de mantener.

## Cadena de responsabilidad

El patrón cadena de responsabilidad nos permite encadenar instancias y objetos entre sí para procesar una petición.

Cada eslabón de esta cadena puede procesar la petición, delegar el procesamiento a otro eslabón o terminar el procesamiento de la petición.

Básicamente existe tres conceptos para este patrón, el cliente que realiza la petición, la petición en sí y los manejadores que pueden ser uno o varios manejadores

![Diagrama 2](https://raw.githubusercontent.com/shamandul/Patrones/main/img/diagrama2.png)

Ejemplo

![Diagrama 3](https://raw.githubusercontent.com/shamandul/Patrones/main/img/diagrama3.png)

## Factory o factoría

Lo bueno de SimpleFactory es que puedes subclasificarlo para implementar diferentes formas de crear objetos.

Para casos simples, esta clase abstracta podría ser simplemente una interfaz.

Este patrón es un patrón de diseño “real” porque logra el principio de inversión de dependencia, también conocido como la “D” en los principios SOLID.

Esto significa que la clase FactoryMethod depende de abstracciones, no de clases concretas. Este es el verdadero truco en comparación con SimpleFactory o StaticFactory.

![Diagrama 4](https://raw.githubusercontent.com/shamandul/Patrones/main/img/diagrama4.png)

## Repository

Media entre el dominio y las capas de mapeo de datos utilizando una interfaz similar a una colección para acceder
a los objetos del dominio. El repositorio encapsula el conjunto de objetos persistentes en un almacén de datos y las
operaciones que se realizan sobre ellos, lo que proporciona una vista más orientada a objetos de la capa de persistencia.
El repositorio también respalda el objetivo de lograr una separación limpia y una dependencia unidireccional entre el
dominio y las capas de mapeo de datos.

![Diagrama 5](https://raw.githubusercontent.com/shamandul/Patrones/main/img/diagrama5.png)
