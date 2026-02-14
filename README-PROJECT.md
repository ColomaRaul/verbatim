# 📚 Hemeroteca de Declaraciones Públicas

> **Archivo documental de palabras y declaraciones públicas de personas relevantes, verificadas y contextualizadas en el tiempo.**

---

## 🧠 ¿Qué es este proyecto?

Esta aplicación es una **hemeroteca de citas y declaraciones literales** realizadas por personas públicas (políticos, deportistas, empresarios, artistas, etc.), recopiladas a partir de **fuentes verificables** como entrevistas, comunicados oficiales, ruedas de prensa o medios de comunicación.

A diferencia de una hemeroteca tradicional de noticias, aquí **la unidad básica no es el artículo**, sino **la palabra dicha**:

- Qué se dijo exactamente
- Quién lo dijo
- Cuándo
- En qué contexto
- Y con qué fuente

El objetivo es crear un **archivo histórico consultable** que permita analizar discursos, posicionamientos y evolución de declaraciones a lo largo del tiempo.

---

## 🎯 ¿Qué NO es?

Este proyecto **no es**:

- Un agregador de noticias
- Un comparador de titulares
- Un sitio de opinión
- Un generador de contenido

No se copian artículos completos ni se reinterpretan declaraciones.  
Solo se documentan **citas breves**, siempre con referencia a su fuente original.

---

## 🔍 ¿Qué permite hacer?

- Buscar **citas** por texto libre
- Buscar por **persona**
- Buscar por **temas y etiquetas** (política, economía, fútbol, etc.)
- Descubrir **personas relacionadas** con un tema aunque el término no aparezca literalmente
- Navegar declaraciones por fecha y contexto
- Diferenciar citas **verificadas** de citas **atribuidas**

Ejemplos de búsquedas:
- `política`
- `futbolistas`
- `inflación`
- `Pedro Sánchez economía`
- `Cristiano Ronaldo futuro`

---

## 🏷️ Etiquetas y temas

El sistema utiliza **etiquetas editoriales** para enriquecer la búsqueda:

- Temas: política, economía, fútbol, sanidad…
- Roles: político, futbolista, empresario…
- Ámbitos: nacional, internacional, deportivo…

Las etiquetas se asignan principalmente a **personas**, y las citas heredan ese contexto, permitiendo búsquedas semánticas simples sin necesidad de IA.

---

## 🏗️ Arquitectura técnica

### Backend
- **Symfony** como framework principal
- **Doctrine ORM** como fuente de verdad
- **Symfony Messenger** para tareas asíncronas (scraping, indexado)

### Frontend
- **Twig**
- Interfaz sencilla, documental y orientada a la lectura
- Sin dependencias JS complejas

### Búsqueda
- **Elasticsearch** como motor de búsqueda
- Texto libre, filtros, agregaciones y relevancia
- Búsqueda por citas, personas y temas desde una única query

---

## 🗃️ Modelo de datos (simplificado)

- **Person**
    - Nombre
    - Profesión / ámbito
    - Etiquetas

- **Quote**
    - Texto literal
    - Fecha
    - Contexto
    - Persona
    - Fuente
    - Estado de verificación

- **Source**
    - Medio
    - URL
    - Tipo (entrevista, comunicado, noticia…)

- **Tag**
    - Nombre
    - Tipo (tema, rol, ámbito)

---

## 🔎 Elasticsearch: principio clave

Doctrine almacena datos **normalizados**.  
Elasticsearch indexa documentos **denormalizados**, optimizados para búsqueda.

La búsqueda es el núcleo del proyecto.

---

## ⚖️ Consideraciones legales y editoriales

- Se aplican criterios de **derecho de cita**
- Las citas son breves y contextualizadas
- Siempre se indica la fuente original
- No se reproducen textos completos
- No se realizan interpretaciones ni juicios

El proyecto se concibe como **archivo documental**, no como medio de opinión.

---

## 🚧 Estado del proyecto

Este proyecto está en fase inicial (MVP).

### Primeros objetivos:
1. Definir modelo de datos
2. CRUD básico de personas, citas y etiquetas
3. Integración con Elasticsearch
4. Buscador funcional
5. Inserción manual de datos
6. Automatización progresiva de recopilación

---

## 🚀 Visión a futuro

- Importación automatizada desde APIs de noticias
- Scraping controlado de fuentes públicas
- Sugerencia automática de temas
- Análisis temporal de discursos
- Visualización de evolución por persona o tema

Siempre manteniendo:
> **Rigor, trazabilidad y contexto.**

---

## 📝 Filosofía

> *Las palabras importan.  
> Y merecen ser recordadas con precisión.*
