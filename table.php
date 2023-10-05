<?php require __DIR__ . '/data.php' ?>


<body>
  <table>



    <tr>
      <th>Team</th>
      <th>League</th>
      <th>Champions</th>
      <th>City</th>
      <th>Link</th>
    </tr>


    <tr>
      <td> <?php echo $teamName1; ?> </td>
      <td> <?php echo $arsenal['league']; ?> </td>
      <td> <?php echo $arsenal['last-time-champions']; ?> </td>
      <td> <?php echo $arsenal['city']; ?> </td>
      <td> <a href="<?php echo $arsenal['url']; ?>">url</a> </td>
    </tr>

    <tr>
      <td> <?php echo $teamName2; ?></td>
      <td> <?php echo $astonVilla['league']; ?> </td>
      <td> <?php echo $astonVilla['last-time-champions']; ?> </td>
      <td> <?php echo $astonVilla['city']; ?> </td>
      <td> <a href="<?php echo $astonVilla['url']; ?>">url</a> </td>
    </tr>

    <tr>
      <td> <?php echo $teamName3; ?></td>
      <td> <?php echo $manchesterCity['league']; ?> </td>
      <td> <?php echo $manchesterCity['last-time-champions']; ?> </td>
      <td> <?php echo $manchesterCity['city']; ?> </td>
      <td> <a href="<?php echo $manchesterCity['url']; ?>">url</a> </td>
    </tr>

    <tr>
      <td> <?php echo $teamName4; ?></td>
      <td> <?php echo $newcastle['league']; ?> </td>
      <td> <?php echo $newcastle['last-time-champions']; ?> </td>
      <td> <?php echo $newcastle['city']; ?> </td>
      <td> <a href="<?php echo $newcastle['url']; ?>">url</a> </td>
    </tr>

    <tr>
      <td> <?php echo $teamName5; ?></td>
      <td> <?php echo $chelsea['league']; ?> </td>
      <td> <?php echo $chelsea['last-time-champions']; ?> </td>
      <td> <?php echo $chelsea['city']; ?> </td>
      <td> <a href="<?php echo $chelsea['url']; ?>">url</a> </td>
    </tr>

    <tr>
      <td> <?php echo $teamName6; ?></td>
      <td> <?php echo $watford['league']; ?> </td>
      <td> <?php echo $watford['last-time-champions']; ?> </td>
      <td> <?php echo $watford['city']; ?> </td>
      <td> <a href="<?php echo $watford['url']; ?>">url</a> </td>
    </tr>

    <tr>
      <td> <?php echo $teamName7; ?></td>
      <td> <?php echo $brighton['league']; ?> </td>
      <td> <?php echo $brighton['last-time-champions']; ?> </td>
      <td> <?php echo $brighton['city']; ?> </td>
      <td> <a href="<?php echo $brighton['url']; ?>">url</a> </td>
    </tr>

    <tr>
      <th class="yellow"> <?php require __DIR__ . '/numberofteams.php' ?> </th>
      <th></th>
      <th></th>
      <th class="yellow"><?php require __DIR__ . '/uniquecities.php' ?> </th>
      <th></th>
    </tr>

  </table>
</body>

</html>