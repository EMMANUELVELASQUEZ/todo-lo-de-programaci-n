from sympy import integrate # type: ignore
from sympy.parsing.mathematica import parse_mathematica # type: ignore

def calcular_integral(funcion_mathematica, limite_inferior, limite_superior):
  """
  Calcula la integral definida de una función.

  Args:
    funcion_mathematica: La función a integrar, expresada en notación de Mathematica.
    limite_inferior: El límite inferior de integración.
    limite_superior: El límite superior de integración.

  Returns:
    El resultado de la integral, o un mensaje de error si no se puede calcular.
  """
  try:
    # Convertir la función de notación de Mathematica a SymPy
    funcion_sympy = parse_mathematica(funcion_mathematica)
    x = funcion_sympy.free_symbols.pop()  # Obtener la variable simbólica

    # Calcular la integral definida
    resultado = integrate(funcion_sympy, (x, limite_inferior, limite_superior))

    return resultado
  except Exception as e:
    return f"Error al calcular la integral: {e}"


if __name__ == "__main__":
  # Ejemplo de uso
  funcion_mathematica = "Sin[x^2] + Cos[1/x] - (x^3 + 2x^2 - 5x + 1)/(x^2 + 1)"
  limite_inferior = 1
  limite_superior = 10

  resultado = calcular_integral(funcion_mathematica, limite_inferior, limite_superior)

  print(f"Función: {funcion_mathematica}")
  print(f"Límites de integración: [{limite_inferior}, {limite_superior}]")
  print(f"Resultado: {resultado}")