<!-- Creiamo un array 'matches' contenente altri array i quali rappresentano
delle partite di basket di un’ipotetica tappa del calendario.
Ogni array della partita avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema: Olimpia Milano - Cantù | 55-60 -->

<?php
$matches = [
  [
    "casa" => "Juve",
    "ospiti" => "Milan",
    "goal_casa" => 2,
    "goal_ospiti" => 3,
  ],

  [
    "casa" => "Napoli",
    "ospiti" => "Inter",
    "goal_casa" => 1,
    "goal_ospiti" => 0,
  ],

  [
    "casa" => "Lazio",
    "ospiti" => "Roma",
    "goal_casa" => 4,
    "goal_ospiti" => 2,
  ],

  [
    "casa" => "Bologna",
    "ospiti" => "Sampdoria",
    "goal_casa" => 1,
    "goal_ospiti" => 3,
  ],
];
?>

<ul>
  <?php for ($i=0; $i < count($matches); $i++) { ?>
    <?php $this_match = $matches[$i]; ?>
    <li> <?php echo $this_match["casa"] ?>  - <?php echo $this_match["ospiti"] ?> |
    <?php echo $this_match["goal_casa"] ?> - <?php echo $this_match["goal_ospiti"] ?></li>
  <?php } ?>
</ul>
