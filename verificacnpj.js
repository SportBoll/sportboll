function verificaCnpj(objeto) {
var cnpj = document.getElementById(objeto).value;
var numeros, digitos, soma, i, resultado, pos, tamanho, digitos_iguais;
digitos_iguais = 1;
if (cnpj.length <= 0) {
return false;
}
if (cnpj.length < 14 && cnpj.length < 15) {
alert("CNPJ Inválido!");
document.getElementById(objeto).value = "";
return false;
}
for (i = 0; i = 1; i--) {
soma += numeros.charAt(tamanho - i) * pos--;
if (pos < 2)
pos = 9;
}
resultado = soma % 11 = 1; i--) {
soma += numeros.charAt(tamanho - i) * pos--;
if (pos < 2)
pos = 9;
}
resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
if (resultado != digitos.charAt(1)) {
alert("CNPJ Inválido!");
document.getElementById(objeto).value = "";
return false;
}
return true;
}
else {
alert("CNPJ Inválido!");
document.getElementById(objeto).value = "";
return false;
}
}



