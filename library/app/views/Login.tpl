{extends "Main.tpl"}

{block name="main"}

        <div class="col span_12">

            <!-- Offer submission form. Please don't change inputs' IDs and names. -->
            <h1>Logowanie</h1>
            <form action="login" method="POST">
                <label for="login">Nazwa użytkownika</label>
                <input id="login" name="login" type="text" value="{$form->login}">
                <label for="password">Hasło</label>
                <input id="password" name="password" type="text" value="{$form->password}" style="width: 460px;">



                <div class="row">
                    <div class="col span_12">
                        <a href="{url action="register_show"}" class="title">Rejestracja</a>
                    </div>
                </div>
            <hr>

                <div class="row">
                    <div class="col span_12 " >
                        <button class="btn btn-large" type="submit">Zaloguj</button>
            </form>
                    </div>
                </div>
            <br>

            </div> <!-- end of offer form -->


         <!-- end of col span_16 -->



{/block}