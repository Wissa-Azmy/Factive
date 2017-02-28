<?php
/*************************************************************************************
 * oracle11.php
 * -----------
 * Author: Guy Wicks (Guy.Wicks@rbs.co.uk)
 * Contributions:
 * - Updated for 11i by Simon Redhead
 * Copyright: (c) 2004 Nigel McNie (http://qbnz.com/highlighter)
 * Release Version: 1.0.8.11
 * Date Started: 2004/06/04
 *
 * Oracle 11i language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2008/04/08 (1.0.8)
 *  -  SR changes to oracle8.php to support Oracle 11i reserved words.
 * 2005/01/29 (1.0.0)
 *  -  First Release
 *
 * TODO (updated 2004/11/27)
 * -------------------------
 *
 *************************************************************************************
 *
 *     This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ************************************************************************************/

$language_data = array (
    'LANG_NAME' => 'Oracle 11 SQL',
    'COMMENT_SINGLE' => array(1 => '--'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'CASE_KEYWORDS' => GESHI_CAPS_UPPER,
    'QUOTEMARKS' => array("'", '"', '`'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
//Put your package names here - e.g. select distinct ''''|| lower(name) || ''',' from user_source;
//        6 => array(
//            ),

//Put your table names here - e.g. select distinct ''''|| lower(table_name) || ''',' from user_tables;
//        5 => array(
//            ),

//Put your view names here - e.g. select distinct ''''|| lower(view_name) || ''',' from user_views;
//        4 => array(
//            ),

//Put your table field names here - e.g. select distinct ''''|| lower(column_name) || ''',' from user_tab_columns;
//        3 => array(
//            ),

        //Put ORACLE reserved keywords here (11i).  I like mine uppercase.
        1 => array(
            'ABS',
            'ACCESS',
            'ACOS',
            'ADD',
            'ADD_MONTHS',
            'ALL',
            'ALTER',
            'ANALYZE',
            'AND',
            'ANY',
            'APPENDCHILDXML',
            'ARRAY',
            'AS',
            'ASC',
            'ASCII',
            'ASCIISTR',
            'ASIN',
            'ASSOCIATE',
            'AT',
            'ATAN',
            'ATAN2',
            'AUDIT',
            'AUTHID',
            'AVG',
            'BEGIN',
            'BETWEEN',
            'BFILENAME',
            'BIN_TO_NUM',
            'BINARY_INTEGER',
            'BITAND',
            'BODY',
            'BOOLEAN',
            'BULK',
            'BY',
            'CALL',
            'CARDINALITY',
            'CASCADE',
            'CASE',
            'CAST',
            'CEIL',
            'CHAR',
            'CHAR_BASE',
            'CHARTOROWID',
            'CHECK',
            'CHR',
            'CLOSE',
            'CLUSTER',
            'CLUSTER_ID',
            'CLUSTER_PROBABILITY',
            'CLUSTER_SET',
            'COALESCE',
            'COLLECT',
            'COLUMN',
            'COMMENT',
            'COMMIT',
            'COMPOSE',
            'COMPRESS',
            'CONCAT',
            'CONNECT',
            'CONSTANT',
            'CONSTRAINT',
            'CONSTRAINTS',
            'CONTEXT',
            'CONTROLFILE',
            'CONVERT',
            'CORR',
            'CORR_K',
            'CORR_S',
            'COS',
            'COSH',
            'COST',
            'COUNT',
            'COVAR_POP',
            'COVAR_SAMP',
            'CREATE',
            'CUBE_TABLE',
            'CUME_DIST',
            'CURRENT',
            'CURRENT_DATE',
            'CURRENT_TIMESTAMP',
            'CURRVAL',
            'CURSOR',
            'CV',
            'DATABASE',
            'DATAOBJ_TO_PARTITION',
            'DATE',
            'DAY',
            'DBTIMEZONE',
            'DECIMAL',
            'DECLARE',
            'DECODE',
            'DECOMPOSE',
            'DEFAULT',
            'DELETE',
            'DELETEXML',
            'DENSE_RANK',
            'DEPTH',
            'DEREF',
            'DESC',
            'DIMENSION',
            'DIRECTORY',
            'DISASSOCIATE',
            'DISTINCT',
            'DO',
            'DROP',
            'DUMP',
            'ELSE',
            'ELSIF',
            'EMPTY_BLOB',
            'EMPTY_CLOB',
            'END',
            'EXCEPTION',
            'EXCLUSIVE',
            'EXEC',
            'EXECUTE',
            'EXISTS',
            'EXISTSNODE',
            'EXIT',
            'EXP',
            'EXPLAIN',
            'EXTENDS',
            'EXTRACT',
            'EXTRACTVALUE',
            'FALSE',
            'FEATURE_ID',
            'FEATURE_SET',
            'FEATURE_VALUE',
            'FETCH',
            'FILE',
            'FIRST',
            'FIRST_VALUE',
            'FLOAT',
            'FLOOR',
            'FOR',
            'FORALL',
            'FROM',
            'FROM_TZ',
            'FUNCTION',
            'GOTO',
            'GRANT',
            'GREATEST',
            'GROUP',
            'GROUP_ID',
            'GROUPING',
            'GROUPING_ID',
            'HAVING',
            'HEAP',
            'HEXTORAW',
            'HOUR',
            'IDENTIFIED',
            'IF',
            'IMMEDIATE',
            'IN',
            'INCREMENT',
            'INDEX',
            'INDEXTYPE',
            'INDICATOR',
            'INITCAP',
            'INITIAL',
            'INSERT',
            'INSERTCHILDXML',
            'INSERTXMLBEFORE',
            'INSTR',
            'INSTRB',
            'INTEGER',
            'INTERFACE',
            'INTERSECT',
            'INTERVAL',
            'INTO',
            'IS',
            'ISOLATION',
            'ITERATION_NUMBER',
            'JAVA',
            'KEY',
            'LAG',
            'LAST',
            'LAST_DAY',
            'LAST_VALUE',
            'LEAD',
            'LEAST',
            'LENGTH',
            'LENGTHB',
            'LEVEL',
            'LIBRARY',
            'LIKE',
            'LIMITED',
            'LINK',
            'LN',
            'LNNVL',
            'LOCALTIMESTAMP',
            'LOCK',
            'LOG',
            'LONG',
            'LOOP',
            'LOWER',
            'LPAD',
            'LTRIM',
            'MAKE_REF',
            'MATERIALIZED',
            'MAX',
            'MAXEXTENTS',
            'MEDIAN',
            'MIN',
            'MINUS',
            'MINUTE',
            'MLSLABEL',
            'MOD',
            'MODE',
            'MODIFY',
            'MONTH',
            'MONTHS_BETWEEN',
            'NANVL',
            'NATURAL',
            'NATURALN',
            'NCHR',
            'NEW',
            'NEW_TIME',
            'NEXT_DAY',
            'NEXTVAL',
            'NLS_CHARSET_DECL_LEN',
            'NLS_CHARSET_ID',
            'NLS_CHARSET_NAME',
            'NLS_INITCAP',
            'NLS_LOWER',
            'NLS_UPPER',
            'NLSSORT',
            'NOAUDIT',
            'NOCOMPRESS',
            'NOCOPY',
            'NOT',
            'NOWAIT',
            'NTILE',
            'NULL',
            'NULLIF',
            'NUMBER',
            'NUMBER_BASE',
            'NUMTODSINTERVAL',
            'NUMTOYMINTERVAL',
            'NVL',
            'NVL2',
            'OCIROWID',
            'OF',
            'OFFLINE',
            'ON',
            'ONLINE',
            'OPAQUE',
            'OPEN',
            'OPERATOR',
            'OPTION',
            'OR',
            'ORA_HASH',
            'ORDER',
            'ORGANIZATION',
            'OTHERS',
            'OUT',
            'OUTLINE',
            'PACKAGE',
            'PARTITION',
            'PATH',
            'PCTFREE',
            'PERCENT_RANK',
            'PERCENTILE_CONT',
            'PERCENTILE_DISC',
            'PLAN',
            'PLS_INTEGER',
            'POSITIVE',
            'POSITIVEN',
            'POWER',
            'POWERMULTISET',
            'POWERMULTISET_BY_CARDINALITY',
            'PRAGMA',
            'PREDICTION',
            'PREDICTION_BOUNDS',
            'PREDICTION_COST',
            'PREDICTION_DETAILS',
            'PREDICTION_PROBABILITY',
            'PREDICTION_SET',
            'PRESENTNNV',
            'PRESENTV',
            'PREVIOUS',
            'PRIMARY',
            'PRIOR',
            'PRIVATE',
            'PRIVILEGES',
            'PROCEDURE',
            'PROFILE',
            'PUBLIC',
            'RAISE',
            'RANGE',
            'RANK',
            'RATIO_TO_REPORT',
            'RAW',
            'RAWTOHEX',
            'RAWTONHEX',
            'REAL',
            'RECORD',
            'REF',
            'REFTOHEX',
            'REGEXP_COUNT',
            'REGEXP_INSTR',
            'REGEXP_REPLACE',
            'REGEXP_SUBSTR',
            'REGR_AVGX',
            'REGR_AVGY',
            'REGR_COUNT',
            'REGR_INTERCEPT',
            'REGR_R2',
            'REGR_SLOPE',
            'REGR_SXX',
            'REGR_SXY',
            'REGR_SYY',
            'RELEASE',
            'REMAINDER',
            'RENAME',
            'REPLACE',
            'RESOURCE',
            'RETURN',
            'RETURNING',
            'REVERSE',
            'REVOKE',
            'ROLE',
            'ROLLBACK',
            'ROUND',
            'ROW',
            'ROW_NUMBER',
            'ROWID',
            'ROWIDTOCHAR',
            'ROWIDTONCHAR',
            'ROWNUM',
            'ROWS',
            'ROWTYPE',
            'RPAD',
            'RTRIM',
            'SAVEPOINT',
            'SCHEMA',
            'SCN_TO_TIMESTAMP',
            'SECOND',
            'SEGMENT',
            'SELECT',
            'SEPERATE',
            'SEQUENCE',
            'SESSION',
            'SESSIONTIMEZONE',
            'SET',
            'SHARE',
            'SIGN',
            'SIN',
            'SINH',
            'SIZE',
            'SMALLINT',
            'SOUNDEX',
            'SPACE',
            'SQL',
            'SQLCODE',
            'SQLERRM',
            'SQRT',
            'START',
            'STATISTICS',
            'STATS_BINOMIAL_TEST',
            'STATS_CROSSTAB',
            'STATS_F_TEST',
            'STATS_KS_TEST',
            'STATS_MODE',
            'STATS_MW_TEST',
            'STATS_ONE_WAY_ANOVA',
            'STATS_T_TEST_INDEP',
            'STATS_T_TEST_INDEPU',
            'STATS_T_TEST_ONE',
            'STATS_T_TEST_PAIRED',
            'STATS_WSR_TEST',
            'STDDEV',
            'STDDEV_POP',
            'STDDEV_SAMP',
            'STOP',
            'SUBSTR',
            'SUBSTRB',
            'SUBTYPE',
            'SUCCESSFUL',
            'SUM',
            'SYNONYM',
            'SYS_CONNECT_BY_PATH',
            'SYS_CONTEXT',
            'SYS_DBURIGEN',
            'SYS_EXTRACT_UTC',
            'SYS_GUID',
            'SYS_TYPEID',
            'SYS_XMLAGG',
            'SYS_XMLGEN',
            'SYSDATE',
            'SYSTEM',
            'SYSTIMESTAMP',
            'TABLE',
            'TABLESPACE',
            'TAN',
            'TANH',
            'TEMPORARY',
            'THEN',
            'TIME',
            'TIMESTAMP',
            'TIMESTAMP_TO_SCN',
            'TIMEZONE_ABBR',
            'TIMEZONE_HOUR',
            'TIMEZONE_MINUTE',
            'TIMEZONE_REGION',
            'TIMING',
            'TO',
            'TO_BINARY_DOUBLE',
            'TO_BINARY_FLOAT',
            'TO_CHAR',
            'TO_CLOB',
            'TO_DATE',
            'TO_DSINTERVAL',
            'TO_LOB',
            'TO_MULTI_BYTE',
            'TO_NCHAR',
            'TO_NCLOB',
            'TO_NUMBER',
            'TO_SINGLE_BYTE',
            'TO_TIMESTAMP',
            'TO_TIMESTAMP_TZ',
            'TO_YMINTERVAL',
            'TRANSACTION',
            'TRANSLATE',
            'TREAT',
            'TRIGGER',
            'TRIM',
            'TRUE',
            'TRUNC',
            'TRUNCATE',
            'TYPE',
            'TZ_OFFSET',
            'UI',
            'UID',
            'UNION',
            'UNIQUE',
            'UNISTR',
            'UPDATE',
            'UPDATEXML',
            'UPPER',
            'USE',
            'USER',
            'USERENV',
            'USING',
            'VALIDATE',
            'VALUE',
            'VALUES',
            'VAR_POP',
            'VAR_SAMP',
            'VARCHAR',
            'VARCHAR2',
            'VARIANCE',
            'VIEW',
            'VSIZE',
            'WHEN',
            'WHENEVER',
            'WHERE',
            'WHILE',
            'WIDTH_BUCKET',
            'WITH',
            'WORK',
            'WRITE',
            'XMLAGG',
            'XMLCAST',
            'XMLCDATA',
            'XMLCOLATTVAL',
            'XMLCOMMENT',
            'XMLCONCAT',
            'XMLDIFF',
            'XMLELEMENT',
            'XMLEXISTS',
            'XMLFOREST',
            'XMLPARSE',
            'XMLPATCH',
            'XMLPI',
            'XMLQUERY',
            'XMLROOT',
            'XMLSEQUENCE',
            'XMLSERIALIZE',
            'XMLTABLE',
            'XMLTRANSFORM',
            'YEAR',
            'ZONE'
            )
        ),
    'SYMBOLS' => array(
        '(', ')', '=', '<', '>', '|', '+', '-', '*', '/', ','
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
//        3 => false,
//        4 => false,
//        5 => false,
//        6 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #993333; font-weight: bold; text-transform: uppercase;'
            ),
        'COMMENTS' => array(
            1 => 'color: #808080; font-style: italic;',
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #66cc66;'
            ),
        'STRINGS' => array(
            0 => 'color: #ff0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #cc66cc;'
            ),
        'METHODS' => array(
            1 => 'color: #ff0000;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #66cc66;'
            ),
        'SCRIPT' => array(
            ),
        'REGEXPS' => array(
            )
        ),
    'URLS' => array(
        1 => '',
//        3 => '',
//        4 => '',
//        5 => '',
//        6 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        )
);

?>
