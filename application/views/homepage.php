<h1>Homepage</h1>
<br/><br/>

<h3>Flights Available</h3>
<br/><br/>

<table class="table">
    <thead>
      <tr>
          <th>Date</th>
          <th>Number of Flights available</th>
      </tr>
    </thead>
    {datearr}
      <tr>
          <td>{date}</td>
          <td>{count}</td>
      </tr>
    {/datearr}
</table>

<br/><br/>
<h3>Number of planes in the fleet : {sizeFleet}</h3>
<br/><br/>

<h3>Airports Flights go from/to</h3>
<br/><br/>
<table class="table">
    <thead>
      <tr>
          <th>Base Airport</th>
      </tr>
    </thead>
      <tr>
          <td>{baseAirport}</td>
      </tr>
</table>

<table class="table">
    <thead>
      <tr>
          <th>Destination Airports</th>
      </tr>
    </thead>
    {airports}
      <tr>
          <td>{to}</td>
      </tr>
    {/airports}      
</table>