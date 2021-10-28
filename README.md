### PHP Exercise 28/10/2021 - 29/10/2021
<br/>

# Title: OOP: Blackjack Game

## The Mission
First dive into OOP (Object Oriented Programming). Let's make a game in PHP: Blackjack! A game of chance and luck!

## Blackjack Rules
- Cards are between 1-11 points.
    - Faces are worth 10
    - Ace is always worth 11
- Getting more than 21 points, means that you lose.
- To win, you need to have more points than the dealer, but not more than 21.
- The dealer is obligated to keep taking cards until they have at least 15 points.
- We are not playing with blackjack rules on the first turn (having 21 on first turn) - we leave this up to you as a nice to have.

## Flow
  - A new deck is shuffled.
  - Player and dealer get 2 random cards.
  - Dealer shows first card he drew to player.
  - Player either keeps getting hit (asks for more cards), or stands down.
  - If the player at any point goes above 21, he automatically loses.
  - Once the player is done the dealer keeps taking cards until he has at least 15 points. If he hits above 21 he automatically loses.
  - At the end display the winner.

<br/>
    
# Nice to have
- Implement a betting system
    - Every new player (new session) starts with 100 chips.
    - After the player gets his 2 first cards every round ask how much he wants to bet. He needs to bet at least 5 chips. 
     - If the player wins the bet he gains double the amount of chips.
- Implement the blackjack first turn rule: if the player draws 21 the first turn: he directly wins. If the dealer draws 21 the first turn, he wins. If both draw it, it is a tie. 
    - When you implement both nice to have features, a blackjack means an auto win of 10 chips, a blackjack of the dealer a loss of 5 chips for the player.

<br/>

# To Do

- [x] Create Player Class.
- [x] Create Blackjack Class.
- [ ] Create Dealer Class.
- [ ] Add the logic in empty Player methods.
    - [x] Player Class.
    - [x] Blackjack Class.
    - [ ] Dealer Class
- [ ] index.php 
    - [x] Require all the files with the classes.
    - [x] Start the PHP session.
    - [ ] Use buttons or links to send to the index.php page what the player's action is (i.e. hit/stand/surrender).
        <i>Note: Functions display just once at the moment.</i>
- [ ] Implement a betting system.
- [ ] Implement the blackjack first turn rule.