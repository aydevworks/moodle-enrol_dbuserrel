<?php
$string['pluginname'] = 'Affectation de role utilisateur';
$string['pluginname_desc'] = 'You can use an external database (of nearly any kind) to control your mentor role. It is assumed your external database contains at least a field containing a student username, a mentor role, and a field containing a mentor username. These are compared against fields that you choose in the local role and user tables.';
$string['dbtype'] = 'Type de base de donnee';
$string['dbtype_desc'] = 'Nom du pilote de ADOdb, type de l\'engind de la BD externe.';
$string['dbhost'] = 'Nom ou adresse IP du serveur externe';
$string['dbhost_desc'] = 'Entrez l\'adresse IP ou le nom du serveur';
$string['dbuser'] = 'Nom d\'utilisateur de la BD';
$string['dbpass'] = 'Mot de passe de la BD';
$string['dbname'] = 'Nom de la BD';
$string['dbtable'] = 'Table de la BD';
$string['dbencoding'] = 'Encodage de la BD';
$string['localrolefield'] = 'Champ role de Moodle';
$string['localsubjectuserfield'] = 'Champ utilisateur de Moodle pour le mentor';
$string['localobjectuserfield'] = 'Champ utilisateur de Moodle pour l\'eleve';
$string['localrolefield_desc'] = 'Nom du champs dans la table role de Moodle utilise pour identifier le role specifie dans la BD externe';
$string['localsubjectuserfield_desc'] = 'Nom du champs dans la table utilisateur de Moodle utilise pour identifier le mentor specifie dans la BD externe';
$string['localobjectuserfield_desc'] = 'Nom du champs dans la table utilisateur de Moodle utilise pour identifier l\'eleve specifie dans la BD externe';
$string['remote_fields_mapping'] = 'Association des champs de la BD';
$string['remoterolefield'] = 'Champ role de la BD externe';
$string['remotesubjectuserfield'] = 'Champ mentor de la BD externe';
$string['remoteobjectuserfield'] = 'Champ eleve de la BD externe';
$string['remoterolefield_desc'] = 'Nom du champ dans le BD externe qui contient le role';
The name of the field in the remote table that we are using to match entries in the roles table.';
$string['remotesubjectuserfield_desc'] = 'Nom du champ dans le BD externe qui contient l\identifiant du mentor';
$string['remoteobjectuserfield_desc'] = 'Nom du champ dans le BD externe qui contient l\identifiant de l\'eleve';
$string['server_settings'] = 'Configuration du serveur de la BD externe';
$string['settingsheaderdb'] = 'Connexion a la BD externe';
$string['remoteenroltable'] = 'Table de la BD externe';
$string['remoteenroltable_desc'] = 'Nom de la table de la BD externe qui contient les informations des roles a affecter.';
