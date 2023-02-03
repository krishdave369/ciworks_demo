{name|lower} <br>
{address|upper}  <br>
<hr>
<br>
{dob}
<br>
{dob|date(Y-m-d)}
<br>
{dob|date(l dS F Y)}
<br>
{dob|date_modify(+5days)|date(l dS F Y)}
<br>
<hr>
<br>
{price|local_currency(INR)|highlight_code}
<br>
{lorem|limit_chars(25)}

<br>
<hr>
<h1>Custom Filter</h1>

Mobie No : {mobile|hideNumbers}
<br>
<br>
Lorem Contains {lorem|countVowels} Vowels


