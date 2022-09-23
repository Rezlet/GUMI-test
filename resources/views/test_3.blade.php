 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Kết quả test 3</title>
 </head>

 <body>
     <header style="font-weight: 600; text-align: center;">
         <h1> Kết quả người chơi giỏi nhất trong các game </h1>
     </header>

     <table style="margin: 0 auto; width: 500px">
         <thead>
             <tr  style="border: solid 1px #000;font-size: 24px; padding: 0 20px;">
                 <th style="border: solid 1px #000; padding: 8px 4px;text-align: left;">Người chơi</th>
                 <th style="border: solid 1px #000; padding: 8px 4px;text-align: left;">Trò chơi</th>
                 <th style="border: solid 1px #000; padding: 8px 4px;text-align: left;">Điểm số</th>
             </tr>
         </thead>

         <tbody>
             @foreach ($topGamePlayers as $topGamePlayer)
             <tr style="border: solid 1px #000;font-size: 20px; font-weight: 500">
                <td style="border: solid 1px #000;  padding: 8px 4px;">{{ $topGamePlayer->game->name }}</td>
                <td style="border: solid 1px #000;  padding: 8px 4px;">{{ $topGamePlayer->user->name }}</td>
                <td style="border: solid 1px #000;  padding: 8px 4px;">{{ $topGamePlayer->score }}</td>

             </tr>
             @endforeach
         </tbody>
     </table>


 </body>

 </html>
