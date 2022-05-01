<!DOCTYPE html>
<html>
    <head>
    <title>stats</title>
    <style>
        body {
            background-color: rgb(255, 243, 225);
        }
        ul {
            color: rgb(71, 91, 112);
        }
        h2 {
            background-color: rgb(71, 91, 112);
            color: rgb(255, 243, 225);
        }
    </style>
    </head>
    <body>
        
        <h2>This is the statistic page</h2>
        <ul>
            <li>Total number of registrated users: {{$userCount}}</li>
            <li>Total number of commissions: {{$commissionCount}}</li>
            <li>Total number of commissions with female characters: {{$commissionFemChar}}</li>
            <li>Total number of commissions with male characters: {{$commissionMaleChar}}</li>
            <li>Total number of commissions with unknown gender characters: {{$commissionUnkChar}}</li>
            <li>Total number of commissions with other gender characters: {{$commissionOtherChar}}</li>
        </ul>
        
    </body>

</html>