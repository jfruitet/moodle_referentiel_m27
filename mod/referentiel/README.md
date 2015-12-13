moodle_referentiel_m27
======================

Referentiel plugin (mod / block / report) for Moodle 

## Module Moodle - Référentiel / Skills repository - Documentation

jean.fruitet@univ-nantes.fr

2007/2015

Type: Activity Module

Requires: Moodle 2.7

Avalaible: 

 Moodle 2.7, 2.8  https://github.com/jfruitet/moodle_referentiel_m27

 Moodle 2.9, 3.0  https://github.com/jfruitet/moodle_referentiel

Status: Contributed

Maintainer(s): jean.fruitet@free.fr

### PRESENTATION (English)

Skills repository ("referentiel") is a Moodle module for skill certification.

You can:

* specify a repository or import it
* declare activities linked with competencies
* follow students declarations
* propose tasks (a mission, list of competencies, linked documents...)
* export an print certificates
* If your site enables Outcomes (also known as Competencies, Goals, Standards or Criteria), you can now export a list of Outcomes from referentiel module then grade things using
that scale (forum, database, assigments, etc.) throughout the site. Then these evaluations will be integrated in the Referentiel instance of the course.

#### Documentation

English: https://docs.moodle.org/30/en/mod/referentiel/view

French : https://docs.moodle.org/2x/fr/mod/referentiel/view

#### Installation

Install all referentiel components in is directory

./mod/referentiel

./blocks/referentiel

./report/referentiel


##### The following steps should get you up and running with this module code.

1. Unzip the archive in a temporary directory.

	Move sub-directory  "./mod/referentiel" to YOUR_MOODLE_DIR/mod/
	
	Language data files may be let in  "YOUR_MOODLE_DIR/mod/referentiel/lang/"

	Move sub-directory "./blocks/referentiel" to YOUR_MOODLE_DIR/blocks/

	Move sub-directory  "./project/referentiel" to YOUR_MOODLE_DIR/project/
	
	Languages files can be left in the moodle/{mod|blocks|project}/referentiel/lang/ directory.

2. log on with admin role

3. install new modules as usual (admin Notification)

4. Set module parameters

Administration / Plugins / Activity / Skills repository (referentiel)

Unmask Administration / Plugins / Blocks / Skills repository (referentiel)

If you use scales for skill evaluation, read on referentiel documentation:

https://docs.moodle.org/30/en/mod/referentiel/bareme


### PRESENTATION (Français)

"referentiel" est un module Moodle destiné à implanter une activitée type certification
de compétences.

Ce module permet :

* de spécifier un référentiel de compétences (ou de le télécharger) ;
* de déclarer des activités et d'associer celles-ci aux compétences du référentiel ;
* de gérer l'accompagnement ;
* de définir des tâches (mission, consignes, liste de compétences mobilisées pour accomplir la tâche, documents attachés) ;
* d'émettre des certificats basés sur le dit référentiel ;
* Si le site active les Objectifs, vous pouvez exporter le référentiel sous forme d'une
liste d'objectifs qui serviront alors à évaluer toute forme d'activité(forum, BD, devoir, etc.).
Ces notations sont récupérées dans le module référentiel sous forme de compétences validées dans des déclaration d'activité.

#### Pour utiliser pleinement cette version installez les composants suivants dans leurs dossiers respectifs

./mod/referentiel

./blocks/referentiel

./report/referentiel

Lisez la [documentation d'installation] (http://moodlemoot2012.unimes.fr/course/view.php?id=33 "Installation")


### Blog
[Les Référentiels de compétence] (http://jfreferentiels.blogspot.fr/)
