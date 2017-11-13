<h1>Flight {id}</h1>
<form role="form" action="/flights/submit" method="post">
    {ffrom}<br/>
    {fto}<br/>
    {fdistance}<br/>
    {fdate}<br/>
    {fdeparture}<br/>
    {farrival}<br/>
    {faccode}<br/>
    {zsubmit}    
</form>
    {error}
<a href="/flights/cancel"><input type="button" value="Cancel the current edit"/></a>
<a href="/flights/delete"><input type="button" value="Delete Flight"/></a>