<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <title>Formulário de candidatura</title>
 
</head>
  <body>
    <fieldset  id="fiel">
        <form class="row g-1" action="insert.php" method="post" name= insert.php >
            <div class="col-md-6">
              <br><br>
              <label for="validationServer01" class="form-label">Nome Completo*</label>
              <input type="text" class="form-control " id="nome" name="nome" required>
            </div>
            <div class="col-md-4">
              <br>
              <label for="validationServer02" class="form-label">Telefone*</label>  
              <input type="number" class="form-control" id="telefone" name="telefone" required> 
            </div>
            <div class="col-md-4">
              <br>
              <label for="validationServer02" class="form-label">Data De Nacismento*</label>  
              <input type="date" class="form-control" id="telefone" name="nascimento" required> 
            </div>
            <div class="col-md-4">
                <br>
                <label for="validationServer02" class="form-label">Idade*</label>  
                <input type="number" class="form-control" id="telefone" name="idade" required> 
            </div>
            <div class="col-md-4">
                  <br>
                  <label for="validationServerUsername" class="form-label">Email*</label>
                  <input type="text" class="form-control "  name="email"  aria-describedby="validationServer05Feedback" required>
             </div>
            <div class="col-md-4">
              <br>
              <label for="validationServer02" class="form-label">Nome Da Mãe*</label>  
              <input type="text" class="form-control" id="telefone" name="nomemae" required> 
            </div>
              <div class="col-md-3"><br>
                    <label for="validationServer04" class="form-label">Estado*</label>
                <select class="form-select " id="validationServer04"name="estado" aria-describedby="validationServer04Feedback" required>
                  <option selected disabled value="">meu estado é ...</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                    <option value="EX">Estrangeiro</option>
              
                </select>
            
            </div>
            <div class="col-md-3">
                 <br>
                <label for="validationServer05" class="form-label">CEP</label>
               <input type="number" class="form-control " id="validationServer05"  name="cep"aria-describedby="validationServer05Feedback" >
        
            </div>
             <div class="col-md-3">
                <br>
                <label for="validationServer03" class="form-label">Bairro*</label>
                  <input type="text" class="form-control" id="validationServer03"name="bairro" aria-describedby="validationServer03Feedback" required >
        
             </div><br>
             <div class="col-md-6">
               <label for="validationServer03" class="form-label">Rua*</label>
                <input type="text" class="form-control" id="validationServer03" name="rua" aria-describedby="validationServer03Feedback" required>
          
              </div>
        
          <div class="col-md-2"><br>
              <label for="validationServer03" class="form-label">N°</label>
              <input type="number" class="form-control" id="validationServer03" name="numero" aria-describedby="validationServer03Feedback" >
          
          </div> 

        </div>
      
            <div class="col-md-3"><br>
              <label id="cargo" for="validationServer04" class="form-label">Já trabalhou Conosco*</label>
              <select class="form-select " id="cargo" name="ja_trabalhou" aria-describedby="validationServer04Feedback" required>
                <option selected disabled value="">Selecione...</option>
                    <option value="SIM">Sim</option>
                    <option value="NÃO">Não</option>
                
                  </select>
                
                </div> 
                <div class="col-md-3"><br>
                  <label id="cargo" for="validationServer04" class="form-label">Possui Parentes na Emprensa?*</label>
                <select class="form-select " id="cargo" name="parentes" aria-describedby="validationServer04Feedback" required>
                    <option selected disabled value="">Selecione...</option>
                    <option value="SIM">Sim</option>
                    <option value="NÃO">Não</option>
                  </select>
                </div> 
                  <div class="col-md-6">
                        <br>
                        <label for="validationServer01" class="form-label">Nome do Parente</label>
                          <input type="text" class="form-control " id="nome" name="nomeparente" >
                  </div>
                  <div class="col-md-6">
                        <br>
                        <label for="validationServer01" class="form-label">Grau de Parentesco</label>
                          <input type="text" class="form-control " id="nome" name="grauparente" >
                  </div>
                  <div class="col-md-3"><br>
                    <label id="cargo" for="validationServer04" class="form-label">Foi Indicado Por Algum Funcionário??*</label>
                    <select class="form-select " id="cargo" name="indica" aria-describedby="validationServer04Feedback" required>
                      <option selected disabled value="">Selecione...</option>
                      <option value="SIM">Sim</option>
                      <option value="NÃO">Não</option>
                    </select>
                  </div>
                  <div class="col-md-3"><br>
                    <label id="cargo" for="validationServer04" class="form-label">Disponibilidade De Horário*</label>
                    <select class="form-select " id="cargo" name="disponibilidade" aria-describedby="validationServer04Feedback" required>
                      <option selected disabled value="">Selecione...</option>
                      <option value="Manhã">Manhã</option>
                      <option value="Tarde">Tarde</option>
                      <option value="Noite">Noite</option>
                    </select>
                  </div>
                  <div class="col-md-3"><br>
                    <label id="cargo" for="validationServer04" class="form-label">Há interesse em trabalhar a noite ?*</label>
                    <select class="form-select " id="cargo" name="trabalhanoite" aria-describedby="validationServer04Feedback" required>
                      <option selected disabled value="">Selecione...</option>
                      <option value="SIM">sim</option>
                      <option value="NÃO">não</option>
                   
                    </select>
                  </div>
                  <div class="col-md-3"><br>
                    <label id="cargo" for="validationServer04" class="form-label">Se houver a necessidade de mudança de horário?*</label>
                    <select class="form-select " id="cargo" name="mudahora" aria-describedby="validationServer04Feedback" required>
                      <option selected disabled value="">Selecione...</option>
                      <option value="ACEITA">Aceita</option>
                      <option value="NÃO ACEITA">Não Aceita</option>
                   
                    </select>
                  </div>
                  <div class="col-md-3"><br>
                    <label id="cargo" for="validationServer04" class="form-label">Formação Escolar?*</label>
                    <select class="form-select " id="cargo" name="formacaoescolar" aria-describedby="validationServer04Feedback" required>
                      <option selected disabled value="">Selecione...</option>
                      <option value="Ensino Fundamental">Ensino Fundamental</option>
                      <option value="Ensino Médio ">Ensino Médio</option>
                      <option value="Ensino Superior">Ensino Superior</option>
                    </select>
                  </div>
                  <div class="col-md-4">
                     <br>
                        <label for="validationServer02" class="form-label">Ano de conclusão*</label>  
                         <input type="date" class="form-control" id="telefone" name="ano"> 
                   </div>
                   <div class="col-md-3"><br>
                    <label id="cargo" for="validationServer04" class="form-label">Estuda Atualmente?*</label>
                    <select class="form-select " id="cargo" name="estuda" aria-describedby="validationServer04Feedback" required>
                      <option selected disabled value="">Selecione...</option>
                      <option value="SIM">sim</option>
                      <option value="NÃO ">não</option>
                  
                    </select>
                  </div>
                  <div class="col-md-4">
                  <div class="col-md-3"><br>
                    <label id="cargo" for="validationServer04" class="form-label">Horário de estudo*</label>
                    <select class="form-select " id="cargo" name="horario" aria-describedby="validationServer04Feedback"  required>
                      <option selected disabled value="">Selecione...</option>
                      <option value="MANHÃ">Manhã</option>
                      <option value="TARDE ">Tarde</option>
                      <option value="NOITE">Noite</option>
                      <option value="NÃO ESTUDO">Não Estudo</option>
                    </select>
                  </div>
                  <div class="col-md-4">
                  <div class="col-md-6">
                        <br>
                        <label for="validationServer01" class="form-label">Curso</label>
                          <input type="text" class="form-control " id="nome" name="curso" >
                  </div>

                <!-- CARGO -->
          <div class="col-md-3"><br>
            <label id="cargo" for="validationServer04" class="form-label">Cargo*</label>
            <select class="form-select " id="cargo" name="cargo" aria-describedby="validationServer04Feedback" required>
                <option selected disabled value="">Função...</option>
                  <option value="Ajudante Geral(Produção)">Ajudante Geral(Produção)</option>
                  <option value="Auxiliar De Expedição Junior">Auxiliar De Expedição Junior</option>
                  <option value="Auxiliar De Expedição Senior">Auxiliar De Expedição Senior</option>
                  <option value="Auxiliar De Limpeza">Auxiliar De Limpeza</option>
                  <option value="Auxiliar De Serviço gerais">Auxiliar De Serviço gerais</option>
                  <option value="Auxiliar De Produção ">Auxiliar De Produção</option>
                  <option value="Auxiliar administrativo I">Auxiliar administrativo 1</option>
                  <option value="Auxiliar administrativo II">Auxiliar administrativo 2</option>
                  <option value="Auxiliar administrativo III">Auxiliar administrativo 3</option>
                  <option value="Jovem Aprendiz">Jovem Aprendiz</option>
                  <option value="Conferente">Conferente</option>
                  <option value="Recepcionista">Recepcionista</option>
                <option value="Aprendiz De Tecelão">Aprendiz De Tecelão</option>
                <option value="Tecelão Junior">Tecelão Junior</option>
                <option value="Tecelão De Malhas">Tecelão De Malhas</option>
                <option value="Revisor de Tecidos Junior">Revisor de Tecidos Junior</option>
                <option value="Revisor de Tecidos Pleno">Revisor de Tecidos Pleno</option>
                <option value="Revisor de Tecidos Senior">Revisor de Tecidos Senior</option>
                <option value="Motorista De Caminhão">Motorista De Caminhão</option>
                <option value="Jardineiro">Jardineiro</option>
                <option value="Mecânico de Manutenção">Mecânico de Manutenção</option>
                <option value="Operador de Impilhadeira">Operador de Impilhadeira</option>
                <option value="Supervidor de Recursos Humanos">Supervidor de Recursos Humanos</option>
                <option value="Analista Contábil">Analista Contábil</option>
                <option value="Gerente Administrativo">Gerente Administrativo</option>
                <option value="Analista Administrativo">Analista Administrativo</option>
                <option value="Analista Comercial">Analista Comercial</option>
                <option value="Supervisor De Produção">Supervisor De Produção</option>
                <option value="Supervisor De Sistemas">Supervisor De Sistemas</option>
                <option value="Analista Fiscal">Analista Fiscal</option>
                <option value="Analista de PCP">Analista de PCP</option>
                <option value="Estagiário De Análise E Desenvolvimento De Sistemas">Estagiário De Análise E Desenvolvimento De Sistemas</option>
                <option value="Outra função">Outro Função</option>
              </select> 
         </div>

            <div class="col-md-3"><br>
              <label id="cargo" for="validationServer04" class="form-label">Sexo*</label>
              <select class="form-select "  name="sexo"  required>
                <option selected disabled value="">Selecione...</option>
                    <option value="masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                  </select>
            </div>
              <div class="col-md-3"><br>
                <label id="cargo" for="validationServer04" class="form-label">Estado Civil*</label>
                  <select class="form-select "  name="estadocivil"  required>
                    <option selected disabled value="">Selecione...</option>
                    <option value="Casado">Casado</option>
                    <option value="Divorciado">Divorciado</option>
                    <option value="União Estavel">União Estavel</option>
                    <option value="Solteiro">Solteiro</option>
                    <option value="Viuvo">Viuvo</option>
                  </select>
            </div>
       
        <div class="mb-3"><br>
            <label for="exampleFormControlTextarea1" class="form-label">Objetivo*</label>
            <textarea class="form-control" name="objetivo"id="exampleFormControlTextarea1" rows="3"required></textarea>
         </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Formação Acadêmica*</label>
            <textarea class="form-control"name="formacao" id="exampleFormControlTextarea1" rows="4"required></textarea>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Experiencia profisional*</label>
            <textarea class="form-control" name="experiencia" id="exampleFormControlTextarea1" rows="5"required></textarea>
          </div>
      
         <div class="col-12"><br><br>
           <center> <button class="btn btn-success" type="submit" id='botao' >Enviar Formulário</button></center>  
            <br><br>
          </div>
      </form>
</fieldset>
   
  </body>
</html>