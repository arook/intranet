<?php
// $Id: modulesadmin.php 2411 2008-11-14 21:01:07Z julionc $
// _LANGCODE: tw
// _CHARSET : UTF-8
// Translator: �I��U�q���u�@�� http://ck2tw.net/

//%%%%%%	File Name  modulesadmin.php 	%%%%%
define("_MD_AM_MODADMIN","�Ҳպ޲z��");
define("_MD_AM_MODULE","�ҲզW��");
define("_MD_AM_VERSION","����");
define("_MD_AM_LASTUP","�̫��s������ɶ�");
define("_MD_AM_DEACTIVATED","����");
define("_MD_AM_ACTION","�ާ@");
define("_MD_AM_DEACTIVATE","����");
define("_MD_AM_ACTIVATE","�ҥ�");
define("_MD_AM_UPDATE","��s");
define("_MD_AM_DUPEN","��Ʈw���Ҳժ������Ʊ��ءI");
define("_MD_AM_DEACTED","��w���Ҳդw�Q���ΡA�{�b�z�i�H�w���a�Ϧw�˦��ҲաC");
define("_MD_AM_ACTED","	��w���Ҳդw�ҥΡI");
define("_MD_AM_UPDTED","��w���Ҳդw��s�I");
define("_MD_AM_SYSNO","�t�μҲդ��ఱ�ΡC");
define("_MD_AM_STRTNO","���Ҳդw�]�w���w�]�������A�г]�w�A�X�z�������C");

// added in RC2
define("_MD_AM_PCMFM","�нT�{�G");

// added in RC3
define("_MD_AM_ORDER","����");
define("_MD_AM_ORDER0","�]0 = ���á^");
define("_MD_AM_ACTIVE","�ҥ�");
define("_MD_AM_INACTIVE","���ҥ�");
define("_MD_AM_NOTINSTALLED","�S���w��");
define("_MD_AM_NOCHANGE","�L�ܤ�");
define("_MD_AM_INSTALL","�w��");
define("_MD_AM_UNINSTALL","�Ϧw��");
define("_MD_AM_SUBMIT","�e�X");
define("_MD_AM_CANCEL","����");
define("_MD_AM_DBUPDATE","��Ƨ�s���\�I");
define("_MD_AM_BTOMADMIN","��^�Ҳպ޲z��");

// %s represents module name
define("_MD_AM_FAILINS","�L�k�w�� %s ");
define("_MD_AM_FAILACT","�L�k�ҥ� %s ");
define("_MD_AM_FAILDEACT","�L�k���� %s ");
define("_MD_AM_FAILUPD","�L�k��s %s ");
define("_MD_AM_FAILUNINS","�L�k�Ϧw�� %s ");
define("_MD_AM_FAILORDER","�L�k���s�ƦC %s ");
define("_MD_AM_FAILWRITE","�L�k�g�J�D���C");
define("_MD_AM_ALEXISTS","�Ҳ� %s �w�s�b�C");
define("_MD_AM_ERRORSC", "���~(s)�G");
define("_MD_AM_OKINS","�Ҳ� %s �w�˦��\�C");
define("_MD_AM_OKACT","�Ҳ� %s �ҥΦ��\�C");
define("_MD_AM_OKDEACT","�Ҳ� %s ���Φ��\�C");
define("_MD_AM_OKUPD","�Ҳ� %s ��s���\�C");
define("_MD_AM_OKUNINS","�Ҳ� %s �Ϧw�˦��\�C");
define("_MD_AM_OKORDER","�Ҳ� %s ��令�\�C");

define('_MD_AM_RUSUREINS', '�I��H�U���s�w�˦��Ҳ�');
define('_MD_AM_RUSUREUPD', '�I��H�U���s��s���Ҳ�');
define('_MD_AM_RUSUREUNINS', '�z�O�_�T��Q�Ϧw�˦��ҲաH');
define('_MD_AM_LISTUPBLKS', '�H�U�϶��N�@�_��s�C<br />��ܭn��s���϶����e�]�榡�^�N�@�_��s�C<br />');
define('_MD_AM_NEWBLKS', '�s�϶�');
define('_MD_AM_DEPREBLKS', '����s�϶�');

// added in 2.3 - julionc
define('_MD_AM_INSTALLING', '���b�w��');
define('_MD_AM_TABLE_RESERVED', '%s �O�@�ӹw�d��ƪ�I');
define('_MD_AM_CREATE_TABLES', '���b�s�ظ�ƪ�K');
define('_MD_AM_TABLE_CREATED', ' %s �s�ظ�ƪ��\ ');
define('_MD_AM_INSERT_DATA', '&nbsp;&nbsp; ��Ƥw���J���ƪ� %s');
define('_MD_AM_INSERT_DATA_FAILD', ' %s ���ഡ�J���Ʈw��');
define('_MD_AM_INSERT_DATA_DONE', '�Ҳո�Ʒs�W���\ ');
define('_MD_AM_MODULEID', ' �Ҳ� ID�G%s');
define('_MD_AM_SQL_FOUND', '�b %s ���o�{ SQL ���');
define('_MD_AM_SQL_NOT_FOUND', '�b %s ���S���o�{ SQL ���');
define('_MD_AM_SQL_NOT_CREATE', '�X���G����s�� %s');
define('_MD_AM_SQL_NOT_VALID', '%s ���O�i�Ϊ� SQL�I');

define('_MD_AM_GROUP_ID', ' �s�� ID�G%s ');
define('_MD_AM_NAME', ' �W�١G');
define('_MD_AM_VALUE', ' �ȡG');

/* Templates */
define('_MD_AM_TEMPLATES_ADD', '���b�s�W�˪O�K');
define('_MD_AM_TEMPLATES_DELETE', '���b�R���˪O�K');
define('_MD_AM_TEMPLATES_UPDATE', '���b��s�K');

define('_MD_AM_TEMPLATE_ID', '�˪O ID�G%s ');

define('_MD_AM_TEMPLATE_ADD_DATA', '�˪O %s �w�s�W���Ʈw');
define('_MD_AM_TEMPLATE_ADD_ERROR', '���~�G�˪O %s �S���s�W���Ʈw��');
define('_MD_AM_TEMPLATE_COMPILED', '�˪O %s �sĶ���\ ');
define('_MD_AM_TEMPLATE_COMPILED_FAILED', '���~�G�˪O %s �S���sĶ���\ ');
define('_MD_AM_TEMPLATE_DELETE_DATA', '�˪O %s �w�q��Ʈw���R��');
define('_MD_AM_TEMPLATE_DELETE_DATA_FAILD', '���~�G�˪O %s �S���q��Ʈw���R��');
define('_MD_AM_TEMPLATE_INSERT_DATA', '�˪O %s �w�s�W���Ʈw��');
define('_MD_AM_TEMPLATE_RECOMPILE', '�˪O %s ���s�sĶ');
define('_MD_AM_TEMPLATE_RECOMPILE_FAILD', '���~�G�˪O %s ���s�sĶ����');
define('_MD_AM_TEMPLATE_RECOMPILE_ERROR', '���~�G���୫�s�sĶ�˪O %s');
define('_MD_AM_TEMPLATE_DELETE_OLD_ERROR', '���~�G�S���R���ª��˪O %s�A�w����s�����');
define('_MD_AM_TEMPLATE_UPDATE', '�˪O %s ��s���\ ');
define('_MD_AM_TEMPLATE_UPDATE_ERROR', '���~�G�S����s %s �˪O');

/* Blocks */
define('_MD_AM_BLOCKS_ADD', '���b�s�W�϶��K');
define('_MD_AM_BLOCKS_DELETE', '���b�R���϶��K');
define('_MD_AM_BLOCKS_REBUILD', '���b���ذ϶��K');

define('_MD_AM_BLOCK_ID', ' �϶� ID�G%s ');

define('_MD_AM_BLOCK_ACCESS', '�s�W�϶��v��');
define('_MD_AM_BLOCK_ACCESS_ERROR', '���~�G����s�W�϶��v��');
define('_MD_AM_BLOCK_ADD', '�϶� %s �w�s�W');
define('_MD_AM_BLOCK_ADD_ERROR', '���~�G����s�W�϶� %s ���Ʈw���I');
define('_MD_AM_BLOCK_ADD_ERROR_DATABASE', '��Ʈw���~�G%s');
define('_MD_AM_BLOCK_CREATED', '�϶� %s �w�s��');
define('_MD_AM_BLOCK_DELETE', '�϶� %s �w�R��');
define('_MD_AM_BLOCK_DELETE_DATA', '�϶��˪O %s �w�q��Ʈw���R���C');
define('_MD_AM_BLOCK_DELETE_ERROR', '���~�G����R���϶�  %s');
define('_MD_AM_BLOCK_DELETE_TEMPLATE_ERROR', '���~�G����q��Ʈw���R���϶� %s�C');
define('_MD_AM_BLOCK_DEPRECATED', '�϶��˪O %s deprecated ');
define('_MD_AM_BLOCK_DEPRECATED_ERROR', '���~�GCould not remove deprecated block template.');
define('_MD_AM_BLOCK_UPDATE', '�϶� %s ��s���\ ');

/* Configs */
define('_MD_AM_GONFIG_ID', 'Config ID�G%s');
define('_MD_AM_MODULE_DATA_ADD', '���b�[�J�Ҳճ]�w��ơK');
define('_MD_AM_MODULE_DATA_DELETE', '���b�R���Ҳճ]�w��ơK');
define('_MD_AM_MODULE_DATA_UPDATE', '�Ҳո�Ƨ�s���\ ');

define('_MD_AM_CONFIG_ADD', 'Config option added');
define('_MD_AM_CONFIG_DATA_ADD', 'Config %s added to the database');
define('_MD_AM_CONFIG_DATA_ADD_ERROR', 'ERROR: Could not insert config %s to the database. ');
define('_MD_AM_GONFIG_DATA_DELETE', 'Config data deleted from the database. ');
define('_MD_AM_CONFIG_DATA_DELETE_ERROR', 'ERROR: Could not delete config data from the database');

/* Access */
define('_MD_AM_GROUP_SETTINGS_ADD', '���b�]�w�s���v���K');

define('_MD_AM_GROUP_PERMS_DELETE_ERROR', 'ERROR: Could not delete group permissions ');
define('_MD_AM_GROUP_PERMS_DELETED', 'Group permissions deleted ');

define('_MD_AM_ACCESS_ADMIN_ADD', 'Added admin access right for Group ID %s');
define('_MD_AM_ACCESS_ADMIN_ADD_ERROR', 'ERROR: Could not add admin access right for Group ID %s');
define('_MD_AM_ACCESS_USER_ADD_ERROR', 'Added user access right for Group ID: %s');
define('_MD_AM_ACCESS_USER_ADD_ERROR_ERROR', 'ERROR: Could not add user access right for Group ID: %s');

// execute module specific install script if any
define('_MD_AM_FAILED_EXECUTE', 'Failed to execute %s');
define('_MD_AM_FAILED_SUCESS', '%s executed successfully.');

define('_MD_AM_DELETE_ERROR', 'ERROR: Could not delete %s');
define('_MD_AM_UPDATE_ERROR', 'ERROR: Could not update %s');
define('_MD_AM_DELETE_MOD_TABLES', 'Deleting module tables...');

define('_MD_AM_COMMENTS_DELETE', 'Deleting comments...');
define('_MD_AM_COMMENTS_DELETE_ERROR', 'ERROR: Could not delete comments');
define('_MD_AM_COMMENTS_DELETED', 'Comments deleted');

define('_MD_AM_NOTIFICATIONS_DELETE', 'Deleting notifications...');
define('_MD_AM_NOTIFICATIONS_DELETE_ERROR', 'ERROR: Could not delete notifications');
define('_MD_AM_NOTIFICATIONS_DELETED', 'Notifications deleted');

define('_MD_AM_TABLE_DROPPED', '��ƪ� %s �R�����\�I');
define('_MD_AM_TABLE_DROPPED_ERROR', '���~�G����R����ƪ� %s');
define('_MD_AM_TABLE_DROPPED_FAILDED', 'ERROR: Not allowed to drop table %s !');

?>
