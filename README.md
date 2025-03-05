## Introdução
Este projeto foi desenvolvido com base no estudo sobre Dublês de Teste, um conceito abordado no livro Clean Craftsmanship, de Robert C. Martin. O autor sugere a criação de classes auxiliares para facilitar o desenvolvimento de testes unitários. O código foi implementado em PHP 8.4, com os testes sendo realizados utilizando o PHPUnit 12.0.

## Abordagem e Objetivos
O objetivo desta implementação é ilustrar o uso da metodologia Dublês de Teste em um projeto. Para simplificar a demonstração, alguns aspectos foram reduzidos, como a organização das classes, que foi consolidada em uma única classe com todos os tipos de Dublês de Teste, em vez de uma classe para cada tipo. Além disso, a implementação do Fake não foi incluída, e a quantidade de testes realizados foi reduzida.

## Dublês de Teste
A ideia central dos Dublês de Teste é substituir a implementação de uma classe ou serviço, utilizando polimorfismo ou suas interfaces, por outra classe fictícia. As classes de Dublês de Teste são classificadas em Dummy, Stub, Spy, Mock e Fake, cada uma com características distintas, conforme descrito abaixo:

- Dummy: O tipo mais simples de Double, que representa uma implementação que não realiza nenhuma ação. Seus métodos não processam nada e seu retorno é geralmente null ou 0. É utilizado quando a função que está sendo testada requer um objeto como argumento, mas a lógica do teste não depende da implementação desse objeto. No exemplo deste projeto, o Dummy é representado no teste `testLoginFromNonRegisteredEmail()`, validando se o usuário está cadastrado no sistema.

- Stub: O Stub é uma evolução do Dummy. Embora ainda seja uma implementação simples, ele retorna valores específicos que fazem sentido no contexto do teste, ao invés de retornar null ou 0. Esses valores são pré-definidos, mas não exigem uma lógica complexa. O exemplo desenvolvido neste projeto é o teste `testSaveLoginLogSuccess()`, que retorna os dados do usuário para popular a função `logLogin()`.

- Spy: O Spy é uma evolução do Stub. Ele permite o retorno de valores programáveis e oferece a possibilidade de monitorar o que acontece durante a execução do teste, registrando informações sobre as interações. O Spy apresenta o risco de alta acoplamento nos testes, mas oferece um controle maior sobre o que ocorreu. No exemplo do projeto, isso é ilustrado pelo parâmetro `$loginAttemptsCount`, nas classes, e o teste `testLoginAttempts()`.

- Mock: O Mock é uma evolução do Spy. Além de permitir o retorno de valores programáveis, ele permite definir expectativas sobre o comportamento da classe, validando se determinadas ações ocorreram durante o teste. O Mock pode causar falhas no teste caso as expectativas não sejam atendidas. O exemplo de Mock no projeto é o teste `testBlockUserAfterAttempts()`.

- Fake: O Fake se diferencia dos outros tipos de Dublês de Teste, pois simula um serviço implementando uma regra de negócio simplificada para os testes. À medida que o sistema cresce, a complexidade do Fake também aumenta. No entanto, neste projeto, não foi desenvolvido nenhum exemplo para esse tipo.

---

Translate:

## Introduction
This project was developed based on the study of Test Doubles, a concept discussed in the book Clean Craftsmanship by Robert C. Martin. The author suggests creating helper classes to facilitate the development of unit tests. The code was implemented in PHP 8.4, with tests being conducted using PHPUnit 12.0.

## Approach and Objectives
The goal of this implementation is to illustrate the use of the Test Doubles methodology in a project. To simplify the demonstration, some aspects were reduced, such as the organization of classes, which was consolidated into a single class with all types of Test Doubles, instead of having one class for each type. Additionally, the Fake implementation was not included, and the number of tests was reduced.

## Test Doubles
The core idea of Test Doubles is to replace the implementation of a class or service, using polymorphism or its interfaces, with another fictitious class. Test Doubles are classified into Dummy, Stub, Spy, Mock, and Fake, each with distinct characteristics as described below:

- Dummy: The simplest type of Double, representing an implementation that performs no action. Its methods do nothing, and its return is usually null or 0. It is used when the function being tested requires an object as an argument, but the logic of the test does not depend on the implementation of that object. In this project example, the Dummy is represented in the test `testLoginFromNonRegisteredEmail()`, validating whether the user is registered in the system.

- Stub: The Stub is an evolution of the Dummy. While still a simple implementation, it returns specific values that make sense in the context of the test, rather than returning null or 0. These values are predefined but do not require complex logic. The example developed in this project is the test `testSaveLoginLogSuccess()`, which returns the user's data to populate the `logLogin()` function.

- Spy: The Spy is an evolution of the Stub. It allows for returning programmable values and offers the possibility of monitoring what happens during the execution of the test by recording information about the interactions. The Spy presents the risk of high coupling in the tests but provides greater control over what happened. In this project example, this is illustrated by the parameter `$loginAttemptsCount` in the classes, and the test `testLoginAttempts()`.

- Mock: The Mock is an evolution of the Spy. In addition to allowing the return of programmable values, it allows for setting expectations about the behavior of the class, validating whether certain actions occurred during the test. The Mock can cause test failures if the expectations are not met. The Mock example in the project is the test `testBlockUserAfterAttempts()`.

- Fake: The Fake differs from other types of Test Doubles because it simulates a service by implementing a simplified business rule for the tests. As the system grows, the complexity of the Fake also increases. However, in this project, no example was developed for this type.
