<?php 

namespace App;

class EloCalculator
{
	private static function getTransformed(Image $img)
	{
		return (Integer) round(10**($img->elo/400), 0);
	}

	private static function getExpected(Image $img1, Image $img2)
	{
		$img1_trans = EloCalculator::getTransformed($img1);
		$img2_trans = EloCalculator::getTransformed($img2);

		return round($img1_trans/($img1_trans + $img2_trans), 3);
	}

	private static function eloChange($current_elo, $expected_winloss, $actual_winloss)
	{
		return (Integer) round($current_elo + 32*($actual_winloss - $expected_winloss)) - $current_elo;
	}

	public static function calculateElo(Image $winner, Image $loser)
	{
		// expected win probability
		$winner_exp = EloCalculator::getExpected($winner, $loser);
		$loser_exp = 1 - $winner_exp;

		// change in elo
		$winner_change = EloCalculator::eloChange($winner->elo, $winner_exp, 1);
		$loser_change = EloCalculator::eloChange($loser->elo, $loser_exp, 0);

		// updated
		$winner_updated = $winner->elo + $winner_change;
		$loser_updated = $loser->elo + $loser_change;

		$data = [
			'winner' => [
				'change' => $winner_change,
				'updated' => $winner_updated
			],
			'loser' => [
				'change' => $loser_change,
				'updated' => $loser_updated
			]
		];

		return $data;
	}

}