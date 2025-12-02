# calculadoraIMC
Calculadora web en PHP que determina el Índice de Masa Corporal (IMC). Incluye formulario para ingresar nombre, año de nacimiento, peso y altura. Valida si el usuario es mayor de edad, calcula el IMC y clasifica el resultado en categorías como "Peso normal" o "Sobrepeso". Muestra errores si hay campos vacíos o datos inválidos.

SUITE DE HERRAMIENTAS PHP - CALCULADORA IMC

Aplicacion web completa desarrollada en PHP que calcula el Indice de Masa Corporal (IMC) con validacion de datos y control de acceso por edad. Proyecto estructurado profesionalmente para demostrar habilidades tecnicas en desarrollo backend.

CARACTERISTICAS PRINCIPALES

Calculo preciso del IMC con formula peso/altura²

Validacion de edad: acceso restringido a mayores de 18 años

Clasificacion automatica en categorias de peso (Insuficiente, Normal, Sobrepeso, Obesidad)

Sistema robusto de validacion de formularios

Manejo de errores y mensajes informativos al usuario

Estructura de archivos organizada y modular

ESTRUCTURA DEL PROYECTO

CALCULADORA_IMC/
├── index.php - Pagina principal con formulario
├── imc_page.php - Procesamiento y resultados
├── assets/css/style.css - Estilos CSS
├── includes/ - Componentes HTML reutilizables
│ ├── header.html - Cabecera de la aplicacion
│ ├── form.html - Formulario de entrada de datos
│ └── footer.html - Pie de pagina con informacion de contacto
└── utils/functions.php - Funciones PHP de logica de negocio

FUNCIONES PHP IMPLEMENTADAS

mayor_edad($year): Calcula la edad del usuario basandose en el año de nacimiento

calculo_imc($peso, $altura): Calcula el IMC con validacion de datos y conversion de unidades

imc_status($imc): Determina la categoria de peso segun el valor del IMC

VALIDACIONES Y SEGURIDAD

Verificacion de campos obligatorios completos

Validacion de formato numerico para peso y altura

Conversion automatica de altura en cm a metros cuando sea necesario

Sanitizacion de entradas para prevenir errores de formato

Control de acceso por edad mediante logica condicional

TECNOLOGIAS UTILIZADAS

PHP 7+ para logica del servidor y procesamiento

HTML5 para estructura semantica

CSS3 para estilos y diseño responsive

Metodo POST para envio seguro de formularios

Funciones include/require para modularidad

HABILIDADES DEMOSTRADAS

Desarrollo de aplicaciones web completas con PHP

Estructuracion profesional de proyectos (MVC basico)

Validacion y sanitizacion de datos de usuario

Manejo de formularios y sesiones HTTP

Implementacion de logica de negocio compleja

Creacion de interfaces de usuario intuitivas

Gestion de errores y excepciones

Separacion de preocupaciones (logica/presentacion)

FLUJO DE LA APLICACION

Usuario ingresa datos personales en el formulario

Sistema valida que todos los campos esten completos

Verifica que el usuario sea mayor de 18 años

Calcula el IMC con los datos proporcionados

Clasifica el resultado en categorias medicas estandar

Presenta resultados claros con recomendaciones

CASOS ESPECIALES MANEJADOS

Altura ingresada en centimetros (conversion automatica a metros)

Valores decimales en peso y altura

Entradas con comas como separador decimal

Usuarios menores de edad (acceso denegado)

Datos invalidos o fuera de rango

USO E INSTALACION

Clonar repositorio en servidor con PHP habilitado

Acceder a index.php desde navegador web

Completar formulario con datos personales

Ver resultados procesados en tiempo real

EJEMPLO DE ENTRADA/SALIDA

Entrada: Nombre: "Juan", Año: 1990, Peso: 75, Altura: 175
Proceso: Calcula edad (34 años), convierte altura (1.75m), calcula IMC (24.49)
Salida: "Tu IMC es 24.49. Considerado como Peso normal"

APLICACIONES PRACTICAS

Herramienta para profesionales de la salud

Calculadora personal para seguimiento de salud

Ejemplo educativo de aplicacion web con PHP

Base para sistemas mas complejos de gestion de salud

NOTAS DEL DESARROLLADOR

Este proyecto fue desarrollado como demostracion de habilidades tecnicas para procesos de seleccion laboral. Muestra capacidad para:

Seguir especificaciones tecnicas detalladas

Implementar logicas de negocio complejas

Crear codigo mantenible y bien documentado

Diseñar interfaces de usuario funcionales y accesibles
