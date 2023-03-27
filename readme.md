#Changes 

- First update the varchar of your SQL password field to varchar(150) its an hash password it ought to accommodate more character

- Also fixed your Reg Expression for strong password check to
 ^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$