const form = document.querySelector(".form");
const btnSubmit = document.querySelector(".feedback__btn");
const feedbackRight = document.querySelector(".feedback__right");

const templateFeedbackErrorMessage = document.querySelector('#feedback-error-message');
const templateFeedbackSuccessMessage = document.querySelector('#feedback-success-message');

if (form && btnSubmit && feedbackRight && templateFeedbackErrorMessage && templateFeedbackSuccessMessage) {
  const input_name = form.querySelector("#form__name");
  const input_email = form.querySelector("#form__email");

  const feedbackMessage = feedbackRight.querySelector(".feedback__message");

  function email_test(input) {
    return !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(input.value);
  }

  function name_test(input) {
    return !/^[a-zA-Zа-яА-Я -]+$/i.test(input.value);
  }

  function validate_input(input, classValidate = "", testInput = true) {
    if (testInput) {
      input.parentNode.classList.add(classValidate);
    } else {
      input.parentNode.classList.remove(classValidate);
    }
  }

  input_name.addEventListener("focusout", () => {
    validate_input(input_name, "error1", name_test(input_name));
  });

  input_name.addEventListener("focus", () => {
    //input_name.closest(".form__input").classList.remove("validate1");
    input_name.parentNode.classList.remove("error1");
  });

  input_email.addEventListener("focusout", () => {
    validate_input(input_email, "error2", email_test(input_email));
  });

  input_email.addEventListener("focus", () => {
    input_email.parentNode.classList.remove("error2");
  });

  const sended = (error = true, message = '') => {
    feedbackRight.classList.add("hide");
    feedbackMessage.classList.add("active");

    if (message.length > 0) {
      feedbackMessage.innerHTML = message;
    } else {
      let contentFeedbackMessage;

      if (error) {
        contentFeedbackMessage = templateFeedbackErrorMessage.content.cloneNode(true);
      } else {
        contentFeedbackMessage = templateFeedbackSuccessMessage.content.cloneNode(true);
      }

      feedbackMessage.innerHTML = '';
      feedbackMessage.appendChild(contentFeedbackMessage);
    }

    btnSubmit
      .querySelectorAll("span")
      .forEach((item) => (item.textContent = (item.dataset.sendAgain ?? '')));
    form.dataset.full = 1;
  };

  const send = (data) => {
    const url = design_ajax.url ?? '';

    try {
      fetch(url, {
        method: "POST",
        credentials: 'same-origin',
        body: data
      })
        .then((response) => response.json())
        .then((response) => {
          if (response.success === true) {
            sended(false);

            console.log('Успех:', response);
          } else {
            sended();

            console.error('Ошибка:', response);
          }
        })
        .catch((error) => {
          sended();

          console.error('Ошибка:', error);
        });
    } catch (error) {
      sended();

      console.error('Ошибка:', error);
    }
  };

  btnSubmit.addEventListener("click", function (e) {
    if (form.dataset.full == 0) {
      if (!name_test(input_name) && !email_test(input_email)) {
        const data = new FormData(form);

        data.append('action', 'design_sendmail');

        data.append('security', design_ajax.nonce);

        // recaptcha (start)
        let noBot = 0;

        const siteKey = design_ajax.site_key ?? false;

        if (siteKey && grecaptcha) {
          grecaptcha.ready(function () {
            grecaptcha.execute(siteKey, { action: 'submit' }).then(function (token) {
              // console.log('grecaptcha is OK');

              noBot = 1;

              data.append('antibot', noBot);

              send(data);
            });
          });
        } else {
          noBot = 1;

          data.append('antibot', noBot);

          send(data);
        }
      } else {
        validate_input(input_name, "error1", name_test(input_name));
        validate_input(input_email, "error2", email_test(input_email));
      }
    } else {
      form.reset();
      feedbackRight.classList.remove("hide");
      feedbackMessage.classList.remove("active");

      btnSubmit
        .querySelectorAll("span")
        .forEach((item) => (item.textContent = (item.dataset.sendIt ?? '')));
      form.dataset.full = 0;
    }
  });
}
