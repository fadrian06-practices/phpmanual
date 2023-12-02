# NaN

Algunas operaciones numéricas pueden resultar en un valor representado por
la constante **NAN**. Este resultado representa un valor no definido o no
representable mediante cálculos de punto flotante. Cualquier comparación,
ya sea estricta o no, de este valor con cualquier otro valor,
incluido él mismo, pero excepto **true**, tendrá un resultado de **false**.

Ya que **NAN** representa cualquier número de diferentes valores,
**NAN** no debería compararse con otros valores, incluido él mismo;
en su lugar debería comprobarse usando la función [is_nan()](is_nan).
