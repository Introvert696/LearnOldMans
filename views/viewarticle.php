<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../assets/style.css" />
  <title>Статьи</title>
</head>

<body>
  <header>
    <div class="logo">
      <p>
        Повышение информационной <br />
        грамотности пенсионеров
      </p>
    </div>
    <div class="header-links">
      <a href="/">Главная</a>
      <a href="/articles">Статьи</a>
      <a href="/profile">Профиль</a>
    </div>
  </header>

  <section class="article-view">
    <div class="section-title">
      <p><?php echo $article['title'] ?></p>
    </div>
    <?php if ($article['video_link'] != null) { ?>
      <iframe class="video" src="<?php echo $article['video_link'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <?php } ?>
    <div class="main-text">
      <p>
        <?php echo $article['content'] ?>
      </p>
    </div>
    <div class="section-title">
      <p>Тесты</p>
    </div>
    <?php foreach ($nowTests as $test) { ?>
      <div class="test">

        <p class="test-title"><?php echo $test['title'] ?></p>

        <div class="test-answer">
          <?php if ($test['hasResult']) { ?>
            <?php if ($test['response'] == 0) { ?>
              <p>Вы ответили неверно</p>
            <?php } ?>
            <?php if ($test['response'] == 1) { ?>
              <p>Вы ответили верно</p>
            <?php } ?>

        </div>
      <?php } ?>
      <form action="/test" method="post">
        <div class="test-input">
          <input type="hidden" name="id" value="<?php echo $test["id"]; ?>" />
          <div>
            <div class="variant">
              <input type="radio" name="answer" id="one_answer<?php echo $test["id"]; ?>" value="1" />
              <label for="one_answer<?php echo $test["id"]; ?>"><?php echo $test["one_answer"]; ?></label>
            </div>
            <div class="variant">
              <input type="radio" name="answer" id="two_answer<?php echo $test["id"]; ?>" value="2" />
              <label for="two_answer<?php echo $test["id"]; ?>"><?php echo $test["two_answer"]; ?></label>
            </div>
          </div>
          <div>
            <div class="variant">
              <input type="radio" name="answer" id="three_answer<?php echo $test["id"]; ?>" value="3" />
              <label for="three_answer<?php echo $test["id"]; ?>"><?php echo $test["three_answer"]; ?></label>
            </div>
            <div class="variant">
              <input type="radio" name="answer" id="four_answer<?php echo $test["id"]; ?>" value="4" />
              <label for="four_answer<?php echo $test["id"]; ?>"><?php echo $test["four_answer"]; ?></label>
            </div>
          </div>
        </div>

        <!-- <button type="submit" class="select-test">Проверить ответ</button> -->
      </form>
      </div>
    <?php } ?>
    <div style="margin: auto; text-align:center;">
      <button id="checkBtn" class="select-test">Проверить все ответы</button>
    </div>
  </section>
  <script>
    let checker_btn = document.getElementById("checkBtn");
    checker_btn.addEventListener("click", () => {

      let forms = document.getElementsByTagName("form");
      forms = [...forms];
      let userAnswers = [];

      forms.forEach((form) => {

        let formData = {};
        let inputs = form.getElementsByTagName("input");
        inputs = [...inputs];
        formData["testId"] = inputs[0].value;
        inputs.forEach((input) => {
          if (input.checked) {

            formData["value"] = input.value;
          }
        });
        let encodedData = Object.keys(formData).map(function(k) {
          return encodeURIComponent(k) + '=' + encodeURIComponent(formData[k])
        }).join('&');

        console.log(encodedData);

        sendAnswer(encodedData);



      });


    });

    async function sendAnswer(userAnswers) {
      let response = await fetch("/test", {


        method: "POST",
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: userAnswers,
      });
      let result = await response.text();
      location.reload();
    }
  </script>
</body>

</html>