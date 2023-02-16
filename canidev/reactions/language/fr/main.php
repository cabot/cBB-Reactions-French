<?php
/**
 * [French [Fr]]
 * French translation by cabot (https://cabotweb.fr)
 * 
 * @package cBB Reactions
 * @version 1.0.1 15/01/2023
 * 
 * @copyright (c) 2023 CaniDev
 * @license https://creativecommons.org/licenses/by-nc/4.0/
 */

// DO NOT CHANGE
if(!defined('IN_PHPBB'))
{
	exit;
}

if(empty($lang) || !is_array($lang))
{
	$lang = [];
}

//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, [
	'NO_ATTACH_REACTION'	=> 'Vous devez réagir à ce message pour pouvoir visualiser ses pièces jointes.',
	'NO_POST_REACTION'		=> 'Vous devez réagir au premier message du sujet pour pouvoir répondre.',

	'REACTIONS_NOTIFICATION_POST'		=> [
		1	=> '%s a réagi à un message que vous avez publié',
		2	=> '%s ont réagi à un message que vous avez publié',
	],

	'REACTIONS_NOTIFICATION_TYPE_POST'	=> 'Quelqu’un a réagi à un message que vous avez publié',

	'REACTION_SCORE_LABEL_SIMPLE'			=> '%1$s',
	'REACTION_SCORE_LABEL_COUNT_ONE'		=> '%1$s and other user',
	'REACTION_SCORE_LABEL_COUNT_MULTIPLE'	=> '%1$s and other %2$d users',
	
	'REACTIONS'			=> 'Réactions',
	'REACTIONS_ALL'		=> 'All',
	'REACTIONS_SCORE'	=> 'Score',
	'TOTAL_REACTIONS'	=> 'Réactions',

	'REACTION_ANGRY'	=> 'Grrr',
	'REACTION_ENJOY'	=> 'Haha',
	'REACTION_LIKE'		=> 'J’aime',
	'REACTION_LOVE'		=> 'J’adore',
	'REACTION_MATTER'	=> 'Solidaire',
	'REACTION_SAD'		=> 'Triste',
	'REACTION_SURPRISE'	=> 'Wouah',
]);