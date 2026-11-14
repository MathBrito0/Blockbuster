window.addEventListener("pageshow", function (event) {
    const formLogin = document.getElementById("form-login");
    if (formLogin) {
        formLogin.reset();
    }
});

document.addEventListener("DOMContentLoaded", () => {

    const formLogin = document.getElementById("form-login");
    const formCadastro = document.getElementById("form-cadastro");
    const mensagem = document.getElementById("mensagem");

    
    if (formCadastro) {
        formCadastro.addEventListener("submit", async (e) => {
            
            e.preventDefault();         // Impede o envio do form
            
            const formData = new FormData(e.target);

            const senha = formData.get("senha");
            const confirmarSenha = formData.get("confirmar_senha");


            if (senha !== confirmarSenha) {
                mensagem.textContent = "As senhas não estão batendo!";
                mensagem.style.color = "#ff6b6b";
                return;
            }

            mensagem.textContent = "Cadastrando...";
            mensagem.style.color = "yellow";

            const corpo = new URLSearchParams(formData);


            try {

                const resposta = await fetch("api/cadastro.php", {
                    method: "POST",
                    headers: {"Content-Type": "application/x-www-form-urlencoded"},
                    body: corpo
                });


                const dados = await resposta.json();        // Convertendo a resposta para .JSON


                if (!resposta.ok) {
                    mensagem.textContent = dados.erro;
                    mensagem.style.color = "#ff6b6b";
                    return;
                }


                mensagem.textContent = dados.mensagem;
                mensagem.style.color = "#a8ff60";
                setTimeout(() => {

                    window.location.href = "login.html";        // Redirecionando o usuário para a tela de login
                }, 1500);
            
            } catch (erro) {
                console.error("Erro:", erro);
                mensagem.textContent = "Erro de conexão com o servidor";
                mensagem.style.color = "#ff6b6b";
            }
        });
    }





    // PÁGINA DO LOGIN


    if (formLogin) {
        formLogin.addEventListener("submit", async (e) => {
            e.preventDefault();
            mensagem.textContent = "Entrando...";
            mensagem.style.color = "yellow";

            
            const formData = new FormData(e.target);
            const corpo = new URLSearchParams(formData);



            try {
                const resposta = await fetch("api/login.php", {
                    method: "POST",
                    headers: {"Content-Type": "application/x-www-form-urlencoded"},
                    body: corpo
                });


                const dados = await resposta.json();


                if (!resposta.ok) {
                    mensagem.textContent = dados.erro;
                    mensagem.style.color = "#ff6b6b";
                    return;
                }


                mensagem.textContent = dados.mensagem;
                mensagem.style.color = "#a8ff60";
                
                setTimeout(() => {
                    window.location.href = "index.php";        // Redireciona para a página principal do catálogo dos filmes
                }, 1000);
            } catch (erro) {
                console.error("Erro:", erro);
                mensagem.textContent = "Erro de conexão com o nosso servidor";
                mensagem.style.color = "#ff6b6b";
            }
        });
    }
});