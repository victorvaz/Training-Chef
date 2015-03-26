/**
 * Função para validar o formulário de novo prato.
 * @param {form} form
 * @returns {Boolean} Resultado da validação.
 */
function validaForm(form)
{
    nome = form.nome;
    receita = form.receita;
    
    if (nome.value.length < 3)
    {
        alert("O nome informado não é válido!");
        nome.focus();
        return false;
    }
    else if (receita.value.length < 3)
    {
        alert("A receita informada não é válida!");
        receita.focus();
        return false;
    }
    
    return true;
}