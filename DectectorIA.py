from DetectorIA import pipeline # type: ignore

# Cargar el modelo pre-entrenado para la detección de IA
classifier = pipeline("text-classification", model="roberta-base-openai-detector")

def detectar_ia(texto):
  """
  Detecta si un texto ha sido generado por IA.

  Args:
    texto: El texto a analizar.

  Returns:
    Un diccionario con las probabilidades de que el texto sea generado por IA o por un humano.
  """
  resultado = classifier(texto)
  return resultado[0]

# Ejemplo de uso
texto = "Este es un ejemplo de texto para probar el detector de IA."
resultado = detectar_ia(texto)

print(f"Probabilidad de que el texto sea generado por IA: {resultado['score']}")
print(f"Etiqueta predicha: {resultado['label']}")