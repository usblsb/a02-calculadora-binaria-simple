jQuery(document).ready(function($) {
    function jlm0_binaryOperation(operation, number1, number2) {
        var num1 = parseInt(number1, 2);
        var num2 = parseInt(number2, 2);
        var result;

        switch (operation) {
            case "sum":
                result = num1 + num2;
                break;
            case "subtract":
                result = num1 - num2;
                break;
            case "multiply":
                result = num1 * num2;
                break;
            case "divide":
                if (num2 === 0) {
                    return "No se puede dividir por cero";
                }
                result = num1 / num2;
                break;
            default:
                return "Operación no válida";
        }

        return result.toString(2);
    }

    function jlm0_isValidBinary(number) {
        return /^[01]+$/.test(number);
    }

    $(".jlm0_binary-calculator button").on("click", function() {
        var operation = $(this).attr("id").replace("jlm0_", "");
        if (operation === "clear") {
            $("#jlm0_number1, #jlm0_number2").val("");
            $("#jlm0_result").text("");
            return;
        }
        var number1 = $("#jlm0_number1").val();
        var number2 = $("#jlm0_number2").val();

        if (!jlm0_isValidBinary(number1) || !jlm0_isValidBinary(number2)) {
            $("#jlm0_result").text("Por favor, ingresa números binarios válidos (solo 1 y 0)");
            return;
        }

        var result = jlm0_binaryOperation(operation, number1, number2);
        $("#jlm0_result").text(result);
    });
});
