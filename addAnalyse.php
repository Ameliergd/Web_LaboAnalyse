<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hero - Free Bulma template</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Bulma Version 0.6.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css"
          integrity="sha256-HEtF7HLJZSC3Le1HcsWbz1hDYFPZCqDhZa9QsCgVUdw=" crossorigin="anonymous"/>
</head>

<body>
<div>
    <section class="hero is-info">
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title"> Ajouter une Analyse</h1>
            </div>
        </div>

    </section>


    <div class="section container">

        <div class="columns">
            <div class="column is-7 is-offset-3">


                <form methode="post" action="">
                    <div class="columns">
                      <div class="column">
                        <div class="field is-horizontal">
                            <div class="field-label">
                                <label class="label">Date</label>
                            </div>
                            <div class="field-body">
                                <div class="field">

<<<<<<< Updated upstream:addAnalyse.php
                                    <p class="control is-expended">
                                        <input class="input is-info" type="date" placeholder="Date-input" value="date">

                                    </p>
                                </div>
                            </div>
                          </div>

                          <div class="level">
                              <div class="level-left">
                                  <div class="level-item">
                                    <label class="label">Prelevement</label>
                                  </div>
                              </div>
                              <div class="level-right">
                                <div class="level-item">
                                  <div class="select is-info is-expended">
                                      <select>
                                          <option>---</option>
                                          <option>Sanguin</option>
                                          <option>Urinaire</option>
                                          <option>salivaire</option>

                                      </select>


                                  </div>
=======
                    <form methode="post" action="#">
                        <div class="columns">
                            <div class="field is-horizontal">
                                <div class="field-label">
                                    <label class="label">Date</label>
>>>>>>> Stashed changes:ajoutAnalyse.php
                                </div>

                              </div>



                      </div>
                    </div>

                        <div class="column">

                            <div class="level">
                                <div class="level-left">
                                    <div class="level-item">
                                      <label class="label">Analyse</label>
                                    </div>
                                </div>
                                <div class="level-right">
                                    <div class="field-item">
                                        <p class="control is-expanded">
                                            <input class="input is-info" type="text" placeholder="Analyse">
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="field is-horizontal">

                                <div class="field-label">
                                    <label class="label">Resultat</label>
                                </div>
                                <div class="field">
                                    <p class="control is-expanded">

                                        <input class="input is-info" type="text" placeholder="OK">

                                    </p>
                                </div>
                            </div>
                    </div>





                    </div>

                    <div class="field">
                        <div class="field-label">
                            <label class="label">Commentaire</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control is-expanded">
                                    <textarea class="textarea is-info" type="text" placeholder="Commentaire"></textarea>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="field is-horizontal">
                        <div class="field-label">
                            <!-- Left empty for spacing -->
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control is-pulled-right">
                                    <input type="submit" class="button is-success">
                                    <a class="button is-danger" href="Analyse.php">
                                        Annuler
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                </form>
            </div>
        </div>


    </div>


</div>


</body>

</html>
