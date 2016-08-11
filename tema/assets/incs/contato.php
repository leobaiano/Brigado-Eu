<section id="contato" class="contact-section">
      <div class="container">
        <div class="section-intro text-center">
          <h2>Contato</h2>
          <hr class="colored">
          <p>Collaboratively disseminate wireless innovation with standards compliant e-business.<br> Phosfluorescently expedite functional products via premium action items.</p>
        </div>

        <form class="text-center" name="contact-form" id="contactForm" action="sendemail.php" method="POST">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                      <label class="sr-only" for="name">Nome</label>
                      <input type="text" name="name" class="form-control" id="name" placeholder="Nome">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                      <label class="sr-only" for="email">E-mail</label>
                      <input type="email" name="email" class="form-control" id="email" placeholder="E-mail">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                      <label class="sr-only" for="subject">Assunto</label>
                      <input type="text" name="subject" class="form-control" id="subject" placeholder="Assunto">
                    </div>
                </div>
            </div>

            <div class="form-group">
              <label class="sr-only" for="message">Mensagem</label>
              <textarea name="message" class="form-control" id="message" placeholder="Digite uma mensagem"></textarea>
            </div>

            <button type="submit" name="submit" class="btn btn-primary btn-lg">Enviar</button>
        </form>

      </div>
    </section>