moodle_referentiel_m27
======================

referentiel plugin (mod / block / report) for Moodle 2.7 and further

By Jean FRUITET (jean.fruitet@univ-nantes.fr / jean.fruitet@free.fr)

2007/2014

Type: Activity Module
Requires: Moodle 2.7
Status: Contributed
Maintainer(s): jean.fruitet@univ-nantes.fr

== Documentation
    * French MoodleMoot2009 : http://moodlemoot2009.insa-lyon.fr/course/view.php?id=24
    * French MoodleMoot2010 : http://moodlemoot2010.utt.fr/course/view.php?id=33
    * French MoodleMoot2012 : http://moodlemoot2012.unimes.fr/course/view.php?id=33


== PRESENTATION (Franþais)

"referentiel" est un module Moodle destinÚ Ó implanter une activitÚ de type certification de compÚtences.

Ce module permet :

- de spÚcifier un rÚfÚrentiel de compÚtences (ou de le tÚlÚcharger) ;
- de dÚclarer des activitÚs et d'associer celles-ci aux compÚtences du rÚfÚrentiel ;
- de gÚrer l'accompagnement ;
- de dÚfinir des tÔches (mission, consignes, liste de compÚtences mobilisÚes pour accomplir la tÔche, documents attachÚs) ;
- d'Úmettre des certificats basÚs sur le dit rÚfÚrentiel ;

- Si le site active les Objectifs, vous pouvez exporter le rÚfÚrentiel sous forme d'une
liste d'objectifs qui serviront alors Ó Úvaluer toute forme d'activitÚ
(forum, BD, devoir, etc.)

Ces notations sont rÚcupÚrÚes dans le module rÚfÚrentiel sous forme de compÚtences
validÚes dans des dÚclaration d'activitÚ.

== PRESENTATION (English)

Skills repository ("referentiel") is a Moodle module for skill certification.
You can:
- specify a repository or import it
- declare activities linked with competencies
- follow students declarations
- propose tasks (a mission, list of competencies, linked documents...)
- export an print certificates

- If your site enables Outcomes (also known as Competencies, Goals, Standards or Criteria),
you can now export a list of Outcomes from referentiel module then grade things using
that scale (forum, database, assigments, etc.) throughout the site.
These grades will be integrated in Referentiel module.

== INSTALLATION (Franþais)

Ce plugin ets constituÚ de tros modules :

Le module activitÚ RÚfÚrentie qui doit Ûtre intÚgrÚ dans le rÚpertoire ./mod/ d'un serveur Moodle

Le bloc RÚfÚrentiel qui doit Ûtre intÚgrÚ dans le rÚpertoire ./blocks/ du serveur

Le rapport RÚfÚrentie qui doit Ûtre intÚgrÚ dans le rÚpertoire ./report/ du serveur

La procÚdure suivante s'applique Ó toute installation Moodle

VOTRE_DOSSIER_MOODLE = le nom du dossier o¨ est placÚ votre moodle, en gÚnÚral "moodle"

URL_SERVEUR_MOODLE = le nom de votre serveur moodle, en gÚnÚral "http://machine.domaine.fr/moodle/"


1.

A) DÚcomprimer l'archive "referentiel-mod.zip" dans le dossier "VOTRE_DOSSIER_MOODLE/mod/"

Les fichiers de langue peuvent Ûtre laissÚs dans le dossier

"VOTRE_DOSSIER_MOODLE/mod/referentiel/lang/"

B) DÚcomprimer l'archive "referentiel-block.zip" dans le dossier "VOTRE_DOSSIER_MOODLE/blocks/"

Les fichiers de langue peuvent Ûtre laissÚs dans le dossier "VOTRE_DOSSIER_MOODLE/blocks/referentiel/lang/"

C) DÚcomprimer l'archive "referentiel-report.zip" dans le dossier "VOTRE_DOSSIER_MOODLE/report/"

Les fichiers de langue peuvent Ûtre laissÚs dans le dossier "VOTRE_DOSSIER_MOODLE/report/referentiel/lang/"

2. se loger avec le role admin sur "URL_SERVEUR_MOODLE"

3. Installer les diffÚrents ÚlÚments (ou les mises Ó jour) en passant par la rubrique

Administration / Notification

S'il y a des messages d'erreur m'avertir aussit¶t par mail en m'envoyant une copie d'Úcran du message d'erreur.

4. paramÚtrer le module au niveau du site en passant par la rubrique

Administration du site / Plugins / ActivitÚs / RÚfÚrentiel

Administration du site / Plugins / Bloc / RÚfÚrentiel (rendre visible le bloc)

Administration du site / Plugins / Rapport / RÚfÚrentiel



== INSTALLATION (English)

The following steps should get you up and running with this module code.

1. Unzip the archive referentiel-mod in moodle/mod/ directory

Unzip the archive referentiel-block in moodle/blocks/ directory

Unzip the archive referentiel-report in moodle/report/ directory

Languages files can be left in the ./referentiel/lang/ directories.

2. log on with admin role

3. install new module as usual (admin Notification)

4. Set module parameters

Administration / Plugins / Activity / Skills repository

Administration / Plugins / Blocks / Skills repository (make the block visible)

Administration / Plugins / Report / Skills repository


Referentiel Report functions

Functionnality "Skills repository report" (Referentiel report) for administrators
gives to administrators the opportunity to manage occurrences and instances of the referentiel module
and make archives of users numerical data

Unzip referentiel-report.zip
in 
YOUR_MOODLE/report/
 

