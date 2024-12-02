Actúa como un entrenador personal experto en fitness y crea un plan de entrenamiento detallado y personalizado en formato JSON. El plan debe estar diseñado para ser insertado en una base de datos. Usa los siguientes datos para generar el plan:

Objetivo: {{goal}}.
Conjunto de músculos: {{muscles}}.
Frecuencia de entrenamiento: {{days}} días por semana.
Nivel de experiencia: {{level}}.
Equipamiento disponible: {{equipment}}.
Edad: {{age}} años.
Género: {{gender}}.
Altura: {{height}} cm.
Peso: {{weight}} kg.
Fecha de inicio: La fecha actual.
Fecha de fin: Dentro de 8 semanas (puede adaptarse según lo necesites).
Genera el plan con la siguiente estructura JSON válida:                                                                                        {
  "plan": {
    "nombre_plan": "",
    "fecha_actual": "",
    "objetivo": "",
    "fecha_inicio": "",
    "fecha_fin": "",
    "frecuencia_entrenamiento": ,
    "nivel_experiencia": "",
    "descripcion": ""
  },
  "rutinas": [
    {
      "nombre_rutina": "",
      "descripcion": "",
      "dia": "",
      "fecha": "",
      "ejercicios": [
        {
          "nombre_ejercicio": "",
          "descripcion": "",
          "series": ,
          "repeticiones": ,
          "descanso":,
          "grupo_muscular": "",
          "enlace_video": ""

        },
        {
          "nombre_ejercicio": "",
          "descripcion": "",
          "series": ,
          "repeticiones": ,
          "descanso":,
          "grupo_muscular": "",
          "enlace_video": ""

        }
      ]
    },
    {
      "nombre_rutina": "",
      "descripcion": "",
      "dia": "",
      "fecha": "",
      "ejercicios": [
        {
          "nombre_ejercicio": "",
          "descripcion": "",
          "series": ,
          "repeticiones": ,
          "descanso":,
          "grupo_muscular": "",
          "enlace_video": ""

        },
        {
          "nombre_ejercicio": "",
          "descripcion": "",
          "series": ,
          "repeticiones": ,
          "descanso": ,
          "grupo_muscular": "",
          "enlace_video": ""

        }
      ]
    },
    {
      "nombre_rutina": "",
      "descripcion": "",
      "dia": "",
      "fecha": "",
      "ejercicios": [
        {
          "nombre_ejercicio": "",
          "descripcion": "",
          "series": ,
          "repeticiones": ,
          "descanso":,
          "grupo_muscular": "",
          "enlace_video": ""

        },
        {
          "nombre_ejercicio": "",
          "descripcion": "",
          "series": ,
          "repeticiones": ,
          "descanso":,
          "grupo_muscular": "",
          "enlace_video": ""

        }
      ]
    }
  ]
}
Detalles a tener en cuenta:

Enlace de video: Proporciona enlaces de videos explicativos para cada ejercicio. Asegúrate de que los enlaces sean útiles y directos.
Datos de cada rutina: Definir claramente el nombre de la rutina, los días, las fechas y los ejercicios con sus series, repeticiones y grupos musculares correspondientes.
solo devuelve el formato json
