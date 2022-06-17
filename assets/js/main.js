new WOW().init();

lazyLoading(800);
function lazyLoading(distance) {
  const imgElems = document.querySelectorAll("[data-src]");
  const windowHeight = window.innerHeight;

  window.addEventListener("scroll", setSRC);

  setSRC();
  function setSRC() {
    for (let i = 0; i < imgElems.length; i++) {
      let img = imgElems[i];
      const top = img.getBoundingClientRect().top;

      if (top - windowHeight <= distance && img.src == "") {
        img.setAttribute("src", img.dataset.src);
      }
    }
  }
}

function sendFormData() {
  // Функция вызывается при валидной форме
}

//#region PlatformDetect
// Get os class for body. It used to fix macos scrollbar issue
let os = "Unknown";
if (navigator.appVersion.indexOf("Win") != -1) os = "windows";
if (navigator.appVersion.indexOf("Mac") != -1) os = "macos";
if (navigator.appVersion.indexOf("X11") != -1) os = "unix";
if (navigator.appVersion.indexOf("Linux") != -1) os = "linux";
document.body.classList.add("os-" + os);
//#endregion PlatformDetect

function bodyLock(con) {
  const scrollFix = window.innerWidth - document.body.clientWidth + "px";
  if (con === true) {
    document.body.classList.add("_lock");
    document.body.style.paddingRight = scrollFix;
  } else if (con === false) {
    document.body.classList.remove("_lock");
    document.body.style.paddingRight = 0;
  } else if (con === undefined) {
    if (!body.classList.contains("_lock")) {
      document.body.classList.add("_lock");
      document.body.style.paddingRight = scrollFix;
    } else {
      document.body.classList.remove("_lock");
      document.body.style.paddingRight = 0;
    }
  } else {
    console.error("Неопределенный аргумент у функции bodyLock()");
  }
}

/**
 *
 * @param {string} modal.button
 * @param {string} modal.modal 'css class selector'
 * @param {string} modal.closer 'css class selector
 * @param {string} modal.isSnack if true, there is no modal closing on click beyond modal
 * @param {string} modal.buttonOpenedClass
 * @param {string} modal.openedClass
 *
 */
function modalToggler(modal) {
  const pop = document.querySelector(modal.modal);
  const closer = pop.querySelector(modal.closer);
  const buttons = document.querySelectorAll(modal.button);

  let methods = {
    toggleModal() {
      pop.classList.toggle(modal.openedClass);
    },
    openModal() {
      pop.classList.add(modal.openedClass);
    },
    closeModal() {
      pop.classList.remove(modal.openedClass);
    },
  };

  closer.addEventListener("click", () => {
    methods.closeModal();
  });

  if (!modal.isSnack) {
    window.addEventListener("click", () => {
      Array.from(pop.children).forEach((child) => {
        if (event.target != child) {
          methods.closeModal();
        }
      });
    });
  }

  if (modal.buttonOpenedClass) {
    buttons.forEach((button) => {
      button.addEventListener("click", () => {
        button.classList.toggle(modal.buttonOpenedClass);
      });
    });
    closer.addEventListener("click", () => {
      buttons.forEach((button) => {
        button.classList.remove(modal.buttonOpenedClass);
      });
    });
  }

  buttons.forEach((button) => {
    button.addEventListener("click", () => {
      methods.toggleModal();
    });
  });
  return methods;
}

let callbackPop = modalToggler({
  isSnack: true,
  button: ".callback-fixed__button",
  buttonOpenedClass: "callback-fixed__button--opened",
  modal: ".callback-fixed__form",
  closer: ".callback-fixed__close",
  openedClass: "callback-fixed__form--visible",
});

let thanksPopup = modalToggler({
  modal: ".popups-thanks__wrapper",
  closer: ".popups-thanks__close",
  openedClass: "popups-thanks--visible",
});
const fixedCalbackButton = document.querySelector(".callback-fixed__button");
fixedCalbackButton.addEventListener("click", () => {
  document.querySelector(".callback-fixed__input").focus();
});

/**
 * @quiz
 */
// #region quiz and validators
let quizSlider = new Swiper(".quiz__steps", {
  allowSlideNext: false,
  allowSlidePrev: false,
});
function quizSetProgress(quizSlider) {
  let progress = quizSlider.progress;
  let progressBar = document.querySelector(".quiz__progress-value");
  progressBar.style.width = progress * 100 + "%";
}
function getCurrentQuizPageElement(quizSlider) {
  const currnetIndex = quizSlider.activeIndex;
  const totalSlides = quizSlider.slides;

  const currentSlide = totalSlides[currnetIndex];
  return currentSlide;
}
function validateTextField() {
  const currentSlide = getCurrentQuizPageElement(quizSlider);
  const textFields = currentSlide.querySelectorAll(".input");
  const errorText = currentSlide.querySelector(".error-text");

  let errors = [];
  textFields.forEach((input) => {
    if (input.value == "") {
      input.classList.add("input--invalid");
      errorText.classList.add("error-text--visible");
      errors.push({ input });
    } else {
      input.classList.remove("input--invalid");
      errorText.classList.remove("error-text--visible");
    }
  });
  if (errors.length == 0) {
    textFields.forEach((input) => {
      input.classList.remove("error-text--visible");
    });
    return true;
  } else {
    return false;
  }
}

function validateInputText(input) {
  if (input.value == "") {
    input.classList.add("input--invalid");
    if (input.parentElement.querySelector(".error-text")) {
      input.parentElement
        .querySelector(".error-text")
        .classList.add("error-text--visible");
    }
    return false;
  } else {
    input.classList.remove("input--invalid");
    if (input.parentElement.querySelector(".error-text")) {
      input.parentElement
        .querySelector(".error-text")
        .classList.remove("error-text--visible");
    }
    return true;
  }
}
const textInputs = document.querySelectorAll('.input[type="text"]');
textInputs.forEach((input) => {
  input.addEventListener("input", () => {
    validateInputText(input);
  });
});

function validateFormCheckboxes(currentForm) {
  const checkboxesTotal = currentForm.querySelectorAll("input[type=checkbox]");
  const checkboxes = currentForm.querySelectorAll(
    "input[type=checkbox]:checked"
  );
  const errorTextCount = currentForm.querySelectorAll(".error-text").length;

  if (checkboxesTotal.length === 0) {
    return true;
  }

  if (checkboxes.length == 0) {
    errorTextCount > 1 ? false : errorText.classList.add("error-text--visible");
    if (checkboxesTotal.length === 1) {
      checkboxesTotal[0].parentElement.classList.add("input--invalid");
    }
    return false;
  } else {
    errorTextCount > 1
      ? false
      : errorText.classList.remove("error-text--visible");
    if (checkboxesTotal.length === 1) {
      checkboxesTotal[0].parentElement.classList.remove("input--invalid");
    }
    return true;
  }
}

function validateCheckbox(checkbox) {
  if (checkbox.checked) {
    checkbox.parentElement.classList.remove("input--invalid");
    return true;
  } else {
    checkbox.parentElement.classList.add("input--invalid");
    return false;
  }
}
document.querySelectorAll('input[type="checkbox"]').forEach((checkbox) => {
  checkbox.addEventListener("change", function () {
    validateCheckbox(checkbox);
  });
});

function validateCheckboxes(currentSlideElement) {
  const checkboxesTotal = currentSlideElement.querySelectorAll(
    "input[type=checkbox]"
  );
  const checkboxes = currentSlideElement.querySelectorAll(
    "input[type=checkbox]:checked"
  );
  const errorText = currentSlideElement.querySelector(".error-text");
  const errorTextCount =
    currentSlideElement.querySelectorAll(".error-text").length;

  if (checkboxesTotal.length === 0) {
    return true;
  }

  if (checkboxes.length == 0) {
    errorTextCount > 1 ? false : errorText.classList.add("error-text--visible");
    if (checkboxesTotal.length === 1) {
      checkboxesTotal[0].parentElement.classList.add("input--invalid");
    }
    return false;
  } else {
    errorTextCount > 1
      ? false
      : errorText.classList.remove("error-text--visible");
    if (checkboxesTotal.length === 1) {
      checkboxesTotal[0].parentElement.classList.remove("input--invalid");
    }
    return true;
  }
}

function validateQuizStep(quiz) {
  const currentQuestion = getCurrentQuizPageElement(quiz.slider);
  const isChecboxesValid = validateCheckboxes(currentQuestion);
  const isTextFieldsNotEmpty = validateTextField(currentQuestion);
  return isChecboxesValid && isTextFieldsNotEmpty;
}

const quizNext = quizSlider.el.querySelector(".quiz__button-next");
quizNext.addEventListener("click", () => {
  let isQuizValid = validateQuizStep({
    slider: quizSlider,
  });
  if (isQuizValid) {
    quizSlider.allowSlideNext = true;
    quizSlider.slideNext();
    quizSetProgress(quizSlider);
    quizSlider.allowSlideNext = false;
  }
});

const quizPrev = quizSlider.el.querySelector(".quiz__button-prev ");
quizPrev.addEventListener("click", () => {
  let isQuizValid = validateQuizStep({
    slider: quizSlider,
  });
  quizSlider.allowSlidePrev = true;
  quizSlider.slidePrev();
  quizSetProgress(quizSlider);
  quizSlider.allowSlidePrev = false;
});

quizSlider.on("slideChange", function () {
  let currentSlide = quizSlider.activeIndex;
  const quizSteps =
    document.querySelector(".quiz__steps-wrap ").childElementCount;
  const quizState = document.querySelector(".quiz__counter");
  const buttonNext = document.querySelector(".quiz__button-next");
  if (currentSlide + 1 < quizSteps) {
    quizState.innerText = `${currentSlide + 1}/${quizSteps - 1}`;
  }

  let lastText = buttonNext.dataset.lastText;
  let regularText = buttonNext.dataset.regularText;
  if (currentSlide + 1 == quizSteps - 1) {
    buttonNext.innerText = lastText;
  } else if (currentSlide + 1 < quizSteps - 1) {
    buttonNext.innerText = regularText;
  }

  const buttonSubmit = document.querySelector(".quiz__button-submit");
  if (currentSlide == quizSteps - 1) {
    buttonNext.classList.add("button--hidden");
    buttonSubmit.classList.add("quiz__button-submit--visible");
  } else {
    buttonNext.classList.remove("button--hidden");
    buttonSubmit.classList.remove("quiz__button-submit--visible");
  }
});
// #endregion quiz and validators

// #region phone
const telephoneInputs = document.querySelectorAll('input[type="tel"]');
const prefixNumber = (str) => {
  if (str === "7") {
    return "7 (";
  }
  if (str === "8") {
    return "8 (";
  }
  if (str === "9") {
    return "7 (9";
  }
  return "7 (";
};
telephoneInputs.forEach(function (input) {
  input.addEventListener("input", (e) => {
    const value = input.value.replace(/\D+/g, "");
    const numberLength = 11;

    let result;
    if (input.value.includes("+8") || input.value[0] === "8") {
      result = "";
    } else {
      result = "+";
    }

    for (let i = 0; i < value.length && i < numberLength; i++) {
      switch (i) {
        case 0:
          result += prefixNumber(value[i]);
          continue;
        case 4:
          result += ") ";
          break;
        case 7:
          result += "-";
          break;
        case 9:
          result += "-";
          break;
        default:
          break;
      }
      result += value[i];
    }
    //
    input.value = result;
  });
  input.addEventListener("input", (e) => {
    if (input.value.length == 18) {
      validatePhone(input);
    }
  });
});
function validatePhone(phoneInput) {
  let regex = /^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/;
  if (!regex.test(phoneInput.value)) {
    if (phoneInput.parentElement.querySelector(".error-text")) {
      phoneInput.parentElement
        .querySelector(".error-text")
        .classList.add("error-text--visible");
    }
    phoneInput.classList.add("input--invalid");
    console.log("phone invalid");
    return false;
  } else {
    if (phoneInput.parentElement.querySelector(".error-text")) {
      phoneInput.parentElement
        .querySelector(".error-text")
        .classList.remove("error-text--visible");
    }
    phoneInput.classList.remove("input--invalid");
    console.log("phone valid");
    return true;
  }
}
// #endregion phone

// #region forms
const quizForm = document.querySelector(".quiz__form");

quizForm.addEventListener("submit", (event) => {
  event.preventDefault();

  let phone = quizForm.querySelector('.input[type="tel"]');
  let isCheckboxesValid = validateCheckboxes(
    getCurrentQuizPageElement(quizSlider)
  );

  let isTextValid = validateTextField(getCurrentQuizPageElement(quizSlider));
  let isPhoneValid = validatePhone(phone);
  if ((isCheckboxesValid, isTextValid, isPhoneValid)) {
    sendFormData();
    quizForm.classList.add("animate__animated");
    setTimeout(() => {
      quizForm.classList.add("quiz__form--hidden");
    }, 1);
    setTimeout(() => {
      document
        .querySelector(".quiz__thanks")
        .classList.add(
          "animate__zoomIn",
          "animate__animated",
          "thanks-message--visible"
        );
    }, 2);
  }
});

const snackForms = [".callback-fixed__form"];
const regularForms = [".pop-callback__form", ".consult__form"];
regularForms.forEach(function (form) {
  const formElement = document.querySelector(form);
  formElement.addEventListener("submit", (event) => {
    event.preventDefault();
    const textInputs = formElement.querySelectorAll('.input[type="text"]');
    let isTextValid = 1;
    textInputs.forEach((input) => {
      isTextValid *= validateInputText(input);
    });
    const isCheckboxesValid = validateFormCheckboxes(formElement);
    let phone = formElement.querySelector('.input[type="tel"]');
    const isPhoneValid = validatePhone(phone);
    // console.log(isCheckboxesValid, isTextValid, isPhoneValid);

    if (!(isCheckboxesValid && isTextValid && isPhoneValid)) {
      return;
    }
    sendFormData();
    formElement.classList.add("animate__animated");
    setTimeout(() => {
      formElement.classList.add("element--hidden");

      formElement.parentElement
        .querySelector(".thanks-message")
        .classList.add(
          "animate__zoomIn",
          "animate__animated",
          "thanks-message--visible"
        );
    }, 100);
    // const formData = new URLSearchParams(new FormData(formElement));
    // const formDataObj = {};
    // for (const pair of formData.entries()) {
    // 	formDataObj[pair[0]] = pair[1];
    // }
    // console.log(formDataObj);
  });
});

snackForms.forEach(function (form) {
  const formElement = document.querySelector(form);
  formElement.addEventListener("submit", (event) => {
    event.preventDefault();
    const textInputs = formElement.querySelectorAll('.input[type="text"]');
    let isTextValid = 1;
    textInputs.forEach((input) => {
      isTextValid *= validateInputText(input);
    });
    const isCheckboxesValid = validateFormCheckboxes(formElement);
    let phone = formElement.querySelector('.input[type="tel"]');
    const isPhoneValid = validatePhone(phone);
    // console.log(isCheckboxesValid, isTextValid, isPhoneValid);

    if (!(isCheckboxesValid && isTextValid && isPhoneValid)) {
      return;
    }
    if (formElement.parentElement.querySelector(".button--close")) {
      formElement.parentElement.querySelector(".button--close").click();
    }
    if (formElement.querySelector(".button--close")) {
      formElement.querySelector(".button--close").click();
    }

    sendFormData();
    thanksPopup.openModal();

    // const formData = new URLSearchParams(new FormData(formElement));
    // const formDataObj = {};
    // for (const pair of formData.entries()) {
    // 	formDataObj[pair[0]] = pair[1];
    // }
    // console.log(formDataObj);
  });
});
// #endregion forms

// @burger
const burger = document.querySelector(".header__burger");
const headerBurger = document.querySelector(".header-burger");
const headerBurgerContent = document.querySelector(".header-burger__content");
const burgerCloser = document.querySelector(".header-burger__close");
burger.addEventListener("click", () => {
  headerBurger.classList.add("header-burger--active");
  bodyLock(true);
});
burgerCloser.addEventListener("click", () => {
  headerBurger.classList.remove("header-burger--active");
  bodyLock(false);
});
headerBurger.addEventListener("click", (event) => {
  if (event.target.classList.contains("header-burger")) {
    headerBurger.classList.remove("header-burger--active");
    bodyLock(false);
  }
});

// #region topverstka modal
// Открытие модального окна, если в url указан его id
openModalHash();
function openModalHash() {
  if (window.location.hash) {
    const hash = window.location.hash.substring(1);
    const modal = document.querySelector(`.modal#${hash}`);

    if (modal) {
      modal.classList.add("_show");
      bodyLock(true);
      closeWhenClickingOnBg(`#${hash} .modal__content`, modal);
    }
  }
}

// Закрытие модальных окон при клике по крестику
closeModalWhenClickingOnCross();
function closeModalWhenClickingOnCross() {
  const modalElems = document.querySelectorAll(".modal");
  for (let i = 0; i < modalElems.length; i++) {
    const modal = modalElems[i];
    const closeThisModal = modal.querySelector(".modal__close");

    closeThisModal.addEventListener("click", () => {
      modal.classList.remove("_show");
      bodyLock(false);
      resetHash();
    });
  }
}

// Закрытие модальных окон при нажатии по клавише ESC
closeModalWhenClickingOnESC();
function closeModalWhenClickingOnESC() {
  const modalElems = document.querySelectorAll(".modal");
  for (let i = 0; i < modalElems.length; i++) {
    const modal = modalElems[i];

    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape") {
        modal.classList.remove("_show");
        bodyLock(false);
        resetHash();
      }
    });
  }
}

// Сброс id модального окна в url
function resetHash() {
  const windowTop = window.pageYOffset;
  window.location.hash = "";
  window.scrollTo(0, windowTop);
}

// Открытие модальных окон
openModal();
function openModal() {
  const btnsOpenModal = document.querySelectorAll("[data-modal-open]");

  for (let i = 0; i < btnsOpenModal.length; i++) {
    const btn = btnsOpenModal[i];

    btn.addEventListener("click", (e) => {
      const dataBtn = btn.dataset.modalOpen;
      const modalThatOpens = document.querySelector(`#${dataBtn}`);

      btn.classList.add("modal-show");
      modalThatOpens.classList.add("_show");
      bodyLock(true);
      closeWhenClickingOnBg(`#${dataBtn} .modal__content`, modalThatOpens);
      window.location.hash = dataBtn;
    });
  }
}

// Закрытие модального окна при клике по заднему фону
function closeWhenClickingOnBg(itemArray, itemParent, classShow = "_show") {
  document.addEventListener("click", (e) => {
    let itemElems = document.querySelectorAll(itemArray);

    for (let i = 0; i < itemElems.length; i++) {
      const item = itemElems[i];

      const target = e.target,
        itsItem = target == item || item.contains(target),
        itemIsShow = item.classList.contains(classShow);

      if (itemParent) {
        const itsItemParent =
            target == itemParent || itemParent.contains(target),
          itemParentIsShow = itemParent.classList.contains(classShow);

        if (!itsItem && itsItemParent && itemParentIsShow) {
          itemParent.classList.remove(classShow);

          if (body.classList.contains("_lock")) {
            bodyLock(false);
          }

          if (window.location.hash === "#" + itemParent.getAttribute("id")) {
            resetHash();
          }
        }
      } else {
        if (!itsItem && itemIsShow) {
          item.classList.remove(classShow);
          if (body.classList.contains("_lock")) {
            bodyLock(false);
          }

          if (window.location.hash === "#" + itemParent.getAttribute("id")) {
            resetHash();
          }
        }
      }
    }
  });
}
// #endregion

const scrollToTopButton = document.querySelector(".scroll__top");
if (scrollToTopButton) {
  scrollToTopButton.addEventListener("click", () => {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });
  window.addEventListener("scroll", () => {
    if (window.pageYOffset > 2000) {
      scrollToTopButton.classList.add("scroll__top--visible");
    } else {
      scrollToTopButton.classList.remove("scroll__top--visible");
    }
  });
}
