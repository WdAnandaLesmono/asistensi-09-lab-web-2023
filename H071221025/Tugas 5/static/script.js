let blackjackGame = {
    you: { scoreSpan: "#your-blackjack-result", div: "#your-box", score: 0 },
    dealer: {
      scoreSpan: "#dealer-blackjack-result",
      div: "#dealer-box",
      score: 0,
    },
    cards: ["2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K", "A"],
    cardsMap: {
      2: 2,
      3: 3,
      4: 4,
      5: 5,
      6: 6,
      7: 7,
      8: 8,
      9: 9,
      10: 10,
      J: 10,
      Q: 10,
      K: 10,
      A: [1, 11],
    },
    wins: 0,
    losses: 0,
    draws: 0,
    isStand: false,
    turnsOver: false,
    money: 5000,
    bet: 0,
  };
  
  const YOU = blackjackGame["you"];
  const DEALER = blackjackGame["dealer"];
  
  const delay = (ms) => new Promise((resolve) => setTimeout(resolve, ms));
  
  function startGame() {
    blackjackGame["bet"] = parseInt(document.querySelector("#bet").value);
    if (blackjackGame["bet"] <= 0 || isNaN(blackjackGame["bet"])) {
      alert("Please enter a valid bet amount.");
      return;
    }
  
    document.querySelector("#blackjack-hit-button").disabled = true;
    document.querySelector("#bet").disabled = true;
    document.querySelector("#blackjack-hit-button").disabled = false;
    document.querySelector("#blackjack-deal-button").disabled = false;
    document.querySelector("#money").textContent = blackjackGame["money"];
    blackjackDeal();
  }
  
  function reset() {
    blackjackGame = {
      you: { scoreSpan: "#your-blackjack-result", div: "#your-box", score: 0 },
      dealer: {
        scoreSpan: "#dealer-blackjack-result",
        div: "#dealer-box",
        score: 0,
      },
      cards: ["2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K", "A"],
      cardsMap: {
        2: 2,
        3: 3,
        4: 4,
        5: 5,
        6: 6,
        7: 7,
        8: 8,
        9: 9,
        10: 10,
        J: 10,
        Q: 10,
        K: 10,
        A: [1, 11],
      },
      wins: 0,
      losses: 0,
      draws: 0,
      isStand: false,
      turnsOver: false,
      money: 5000,
      bet: 0,
    };
  
    document.querySelector("#blackjack-hit-button").disabled = false;
    document.querySelector("#bet").disabled = false;
    document.querySelector("#blackjack-hit-button").disabled = true;
    document.querySelector("#blackjack-deal-button").disabled = true;
    document.querySelector("#your-blackjack-result").textContent = 0;
    document.querySelector("#dealer-blackjack-result").textContent = 0;
    document.querySelector("#money").textContent = blackjackGame["money"];
  }
  
  document
    .querySelector("#blackjack-hit-button")
    .addEventListener("click", startGame);
  document
    .querySelector("#blackjack-hit-button")
    .addEventListener("click", blackjackHit);
  document
    .querySelector("#blackjack-deal-button")
    .addEventListener("click", blackjackDeal);
  document
    .querySelector("#blackjack-stand-button")
    .addEventListener("click", dealerLogic);
  
  function blackjackHit() {
    blackjackGame["bet"] = parseInt(document.querySelector("#bet").value);
    if (blackjackGame["bet"] <= 0 || isNaN(blackjackGame["bet"])) {
      alert("Please enter a valid bet amount.");
      return;
    }
    if (blackjackGame["bet"] > 0 && blackjackGame["bet"] <= blackjackGame["money"]){
      var money = document.querySelector("#money");
      blackjackGame["money"]-= blackjackGame["bet"];
      money = money.innerText = blackjackGame["money"]
    }


    if (blackjackGame["isStand"] === false) {
      let card = randomCard();
      showCard(card, YOU);
      updateScore(card, YOU);
      showScore(YOU);
    }
  }
  
  function randomCard() {
    return blackjackGame["cards"][Math.floor(Math.random() * 13)];
  }
  
  function showCard(card, activePlayer) {
    if (activePlayer["score"] <= 21) {
      let cardImage = document.createElement("img");
      cardImage.src = `static/images/${card}.png`;
      document.querySelector(activePlayer["div"]).appendChild(cardImage);
    } else {
      console.log("BUST!");
    }
  }
  
  function blackjackDeal() {
    if (blackjackGame["turnsOver"] === true) {
      blackjackGame["isStand"] = false;
  
      let yourImages = document
        .querySelector("#your-box")
        .querySelectorAll("img");
      let dealerImages = document
        .querySelector("#dealer-box")
        .querySelectorAll("img");
  
      for (let i = 0; i < yourImages.length; i++) {
        yourImages[i].remove();
      }
  
      for (let i = 0; i < dealerImages.length; i++) {
        dealerImages[i].remove();
      }
  
      YOU["score"] = 0;
      DEALER["score"] = 0;
  
      document.querySelector("#your-blackjack-result").textContent = 0;
      document.querySelector("#your-blackjack-result").style.color = "white";
  
      document.querySelector("#dealer-blackjack-result").textContent = 0;
      document.querySelector("#dealer-blackjack-result").style.color = "white";
  
      document.querySelector("#blackjack-result").textContent = "Let's Play!";
      document.querySelector("#blackjack-result").style.color = "black";
  
      blackjackGame["turnsOver"] = true;
    }
  }
  
  function updateScore(card, activePlayer) { // digunakan untuk mempabarui dan menghitung skor pemain
    if (card === "A") {
      if (activePlayer["score"] + blackjackGame["cardsMap"][card][1] <= 21) {
        activePlayer["score"] += blackjackGame["cardsMap"][card][1];
      } else {
        activePlayer["score"] += blackjackGame["cardsMap"][card][0];
      }
    } else {
      activePlayer["score"] += blackjackGame["cardsMap"][card];
    }
  }
  
  function showScore(activePlayer) {
    if (activePlayer["score"] > 21) {
      document.querySelector(activePlayer["scoreSpan"]).textContent = "BUST!";
      document.querySelector(activePlayer["scoreSpan"]).style.color = "red";
    } else {
      document.querySelector(activePlayer["scoreSpan"]).textContent =
        activePlayer["score"];
    }
  }
  
  async function dealerLogic() {
    blackjackGame["isStand"] = true;
  
    let firstCard = randomCard();
    showCard(firstCard, DEALER);
    updateScore(firstCard, DEALER);
    showScore(DEALER);
  
    await delay(1000);
  
    while (DEALER["score"] < 16 && blackjackGame["isStand"] === true) {
      let card = randomCard();
      showCard(card, DEALER);
      updateScore(card, DEALER);
      showScore(DEALER);
      await delay(1000); // Tunggu sejenak sebelum menggambar kartu berikutnya
    }
  
    blackjackGame["turnsOver"] = true;
    showResult(computeWinner());
  }
  
  function computeWinner() {
    let winner;
  
    if (YOU["score"] <= 21) {
      if (YOU["score"] > DEALER["score"] || DEALER["score"] > 21) {
        winner = YOU;
        blackjackGame["money"] += 1.5 * blackjackGame["bet"];
      } else if (YOU["score"] < DEALER["score"]) {
        winner = DEALER;
        blackjackGame["money"] -= blackjackGame["bet"];
      } else if (YOU["score"] === DEALER["score"]) {
        blackjackGame["money"] += blackjackGame["bet"];
      }
    } else if (YOU["score"] > 21) {
      if (DEALER["score"] <= 21) {
        winner = DEALER;
        blackjackGame["money"] -= blackjackGame["bet"];
      } else if (DEALER["score"] > 21) {
        blackjackGame["money"] += blackjackGame["bet"];
      }
    }
  
    return winner;
  }
  
  function showResult(winner) {
    let message, messageColor;
  
    if (blackjackGame["turnsOver"] === true) {
      if (winner === YOU) {
        message = "You win!";
        messageColor = "green";
        money.innerText = blackjackGame["bet"]*6
        blackjackGame["money"] += blackjackGame["bet"];
        blackjackGame["wins"]++;
      } else if (winner === DEALER) {
        message = "You lost!";
        messageColor = "red";
        money.innerText -= blackjackGame["bet"];
        blackjackGame["losses"]++;
      } else {
        message = "You drew!";
        messageColor = "black";
        blackjackGame["draws"]++;
      }
  
      document.querySelector("#blackjack-result").textContent = message;
      document.querySelector("#blackjack-result").style.color = messageColor;
  
      document.querySelector("#wins").textContent = blackjackGame["wins"];
      document.querySelector("#losses").textContent = blackjackGame["losses"];
      document.querySelector("#draws").textContent = blackjackGame["draws"];
  
      document.querySelector("#money").textContent = blackjackGame["money"];
    }
  }
  
  