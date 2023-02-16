<?php
/**
 * [French [Fr]]]
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
	'ACP_REACTIONS_CONFIG_EXPLAIN'	=> 'Configuration des options relatives aux réactions.',
	'ACP_REACTIONS_MANAGE_EXPLAIN'	=> 'Configuration des réactions disponibles sur le forum.',
	'ENABLE_DISABLE'				=> 'Activer/Désactiver',
	'ERROR_REACTION_NO_EXISTS'		=> 'La réaction sélectionnée n’existe pas',
	'ERROR_SCORE_INVALID'			=> 'La note définie n’est pas valide',
	'NO_REACTIONS' 					=> 'Aucune réaction ajoutée',
	'REACTION_ADD'					=> 'Ajouter une réaction',
	'REACTION_COLOR'				=> 'Couleur',
	'REACTION_COLOR_EXPLAIN'		=> 'Couleur associée à cette réaction.',
	'REACTION_ENABLED'				=> 'Activer',
	'REACTION_ENABLED_EXPLAIN'		=> 'Indiquez si la réaction peut être utilisée.',
	'REACTION_IMAGE'				=> 'Image',
	'REACTION_IMAGE_EXPLAIN'		=> 'Image/émoticône liée à cette réaction.',
	'REACTION_SCORE'				=> 'Note',
	'REACTION_SCORE_EXPLAIN'		=> 'Définissez l’impact (sous forme de notes) qu’aura cette réaction sur le message.',
	'REACTION_TITLE'				=> 'Titre',
	'REACTION_TITLE_EXPLAIN'		=> 'Nom ou titre de la réaction',
	
	'REACTIONS_ALLOW_CHANGE'			=> 'Permettre la modification de la réaction',
	'REACTIONS_ALLOW_CHANGE_EXPLAIN'	=> 'Définit si les utilisateurs peuvent modifier leur réaction aux messages.',
	'REACTIONS_ALLOW_MYSELF'			=> 'Autoriser les auto-réactions',
	'REACTIONS_ALLOW_MYSELF_EXPLAIN'	=> 'Si activé, les utilisateurs pourront réagir à leurs propres messages.',
	'REACTIONS_FORCE_ATTACH'			=> 'Forcer la réaction pour afficher les pièces jointes',
	'REACTIONS_FORCE_ATTACH_EXPLAIN'	=> 'Si activé, les utilisateurs devront réagir à un message pour voir ses pièces jointes.',
	'REACTIONS_FORCE_REPLY'				=> 'Forcer la réaction pour répondre',
	'REACTIONS_FORCE_REPLY_EXPLAIN'		=> 'Si activé, les utilisateurs devront réagir au premier message d’un sujet pour pouvoir y répondre.',
	'REACTIONS_LIST_ORDER'				=> 'Ordre d’affichage',
	'REACTIONS_LIST_ORDER_EXPLAIN'		=> 'Définissez les critères qui seront utilisés pour trier les utilisateurs dans la liste des réactions.',
	'REACTIONS_ORDER_TIME'				=> 'Date de la réaction',
	'REACTIONS_ORDER_USERNAME'			=> 'Nom d’utilisateur',
	'REACTIONS_ZONE_ALL'				=> 'Tous les messages',
	'REACTIONS_ZONE_ONLY_FIRST_POST'	=> 'Premier message uniquement',
	'REACTIONS_ZONE_ONLY_REPLIES'		=> 'Réponses uniquement',
	'REACTIONS_ZONES'					=> 'Messages auxquels il est possible de réagir',
	'REACTIONS_ZONES_EXPLAIN'			=> 'Définit les messages dans lesquels l’option de réaction sera affichée.<br>
		<em>L’option sélectionnée ici peut modifier/limiter le comportement d’une autre option de l’extension.</em>',

	'SCORE_CUSTOM'			=> 'Personnalisée',
	'SCORE_CUSTOM_VALUE'	=> 'Personnalisée (%s)',
	'SELECT_COLOUR'			=> 'Selectionnez une couleur',

	'scores' 	=> [
		1 		=> 'Positive (+1)',
		0 		=> 'Neutre',
		-1 		=> 'Négative (-1)',
	],
]);
