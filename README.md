# usfx.busniesswebsite
## Project Brief
Tofi is a free online service that reads or scans barcodes on Books, CD’s, DVD’s, and games to determine their current market value. Users input or scan their “International Standard Book Number” or their “European Article Number” into the system to get a quote on how much the company is willing to purchase the specific item for. It is a buy and sell company so the business is quite cost intensive and making profits can be challenging.
We incur inventory cost- warehouse cost, tangible assets, and poor liquidity (cash) unless the
partner company (TWOO) has an agreement with us to buy all the books we are buying from
customers. To increase profits, we considered various strategies that would help us attract
customers, such as adding a rewards system, referring the website to a friend to get a free
book.
We also considered how our pickup service will negatively affect our cost, so we decided to
partner with UPS. Our partner will pick up the delivery up to 25kg and we will pay a commission.
This is a better option when compared to all the cost we would have incurred [mileage cost,
insurance, transport cost] doing it ourselves. The objective of an online company is to minimize
costs.

### Key features

1. Accessibility 
Mobile website (compatibility).
 
2. Home Page, Login Page:
Ability to login and register.
 
3. Sell Page: Bar Code & ISPN input 

  Each page that relies on database access has been blocked behind a login wall, this means that
  the user needs to be logged in to access the page, if they aren&#39;t logged in they will be redirected
  to the login page.
 
4. Message that tells the user details about the book or if the books are not required by the company. 
 
5. Ability to cancel trade or save for later.

6. For Customers: Reward system
 
7. Sustainability (Recycling)
 Agreement that the user is being honest (explains consequences).
 
8. Sell Page:
Minimum 10 – Maximum 100 per trade.
 
9. Quiz to determine book quality.
 Visual aids for the quiz.
 
10. User has to agree to a shorthand version of agreement.
 
11. View the pending trade and have the ability to cancel trade.

### Validation
In terms of validation few different forms, the form I removes the use of special
characters, this would eliminate the chance of SQL Injection and Cross Site Scripting. The other
use for the validation used on the forms is to eliminate characters that would cause errors in
later scripts (putting letters in a database when it only accepts Integers).

The other form of validation used was the user needed to have logged in to an account to
access various pages. validated SQL queries to check if they are correct and if they
connect to the database.


