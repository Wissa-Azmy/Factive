<?php
/*************************************************************************************
 * mapbasic.php
 * ------
 * Author: Tomasz Berus (t.berus@gisodkuchni.pl)
 * Copyright: (c) 2009 Tomasz Berus (http://sourceforge.net/projects/mbsyntax/)
 * Release Version: 1.0.8.11
 * Date Started: 2008/11/25
 *
 * MapBasic language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2009/09/17 (1.0.1)
 *  -  Replaced all tabs with spaces
 *  -  Fixed 'URLS' array
 * 2008/11/25 (1.0.0)
 *  -  First Release (MapBasic v9.5)
 *
 * TODO (updated 2008/11/25)
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
    'LANG_NAME' => 'MapBasic',
    'COMMENT_SINGLE' => array(1 => "'"),
    'COMMENT_MULTI' => array(),
    'COMMENT_REGEXP' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
/*
        1 - Statements + Clauses + Data Types + Logical Operators, Geographical Operators + SQL
        2 - Special Procedures
        3 - Functions
        4 - Constants
        5 - Extended keywords (case sensitive)
*/
        1 => array(
            'Add', 'Alias', 'All', 'Alter', 'And', 'Any', 'Application', 'Arc',
            'Area', 'As', 'AutoLabel', 'Bar', 'Beep', 'Begin', 'Bind',
            'Browse', 'Brush', 'BrushPicker', 'Button', 'ButtonPad',
            'ButtonPads', 'BY', 'Call', 'CancelButton', 'Cartographic', 'Case',
            'CharSet', 'Check', 'CheckBox', 'Clean', 'Close', 'Collection',
            'Column', 'Combine', 'Command', 'Commit', 'Connection',
            'ConnectionNumber', 'Contains', 'Continue', 'Control', 'CoordSys',
            'Create', 'Cutter', 'Date', 'Datum', 'DDEExecute', 'DDEPoke',
            'DDETerminate', 'DDETerminateAll', 'Declare', 'Default', 'Define',
            'Delete', 'Dialog', 'Digitizer', 'Dim', 'Disaggregate',
            'Disconnect', 'Distance', 'Do', 'Document', 'DocumentWindow',
            'Drag', 'Drop', 'EditText', 'Ellipse', 'Enclose', 'End', 'Entire',
            'Entirely', 'Erase', 'Error', 'Event', 'Exit', 'Export',
            'Farthest', 'Fetch', 'File', 'Find', 'Float', 'FME', 'Font',
            'FontPicker', 'For', 'Format', 'Frame', 'From', 'Function',
            'Geocode', 'Get', 'Global', 'Goto', 'Graph', 'Grid', 'GROUP',
            'GroupBox', 'Handler', 'If', 'Import', 'In', 'Include', 'Index',
            'Info', 'Input', 'Insert', 'Integer', 'Intersect', 'Intersects',
            'INTO', 'Isogram', 'Item', 'Kill', 'Layout', 'Legend', 'Line',
            'Link', 'ListBox', 'Logical', 'Loop', 'Map', 'Map3D', 'MapInfo',
            'MapInfoDialog', 'Menu', 'Merge', 'Metadata', 'Method', 'Mod',
            'Move', 'MultiListBox', 'MultiPoint', 'MWS', 'Nearest', 'Next',
            'NOSELECT', 'Not', 'Note', 'Object', 'Objects', 'Offset',
            'OKButton', 'OnError', 'Open', 'Or', 'ORDER', 'Overlay', 'Pack',
            'Paper', 'Part', 'Partly', 'Pen', 'PenPicker', 'Pline', 'Point',
            'PopupMenu', 'Preserve', 'Print', 'PrintWin', 'PrismMap',
            'Processing', 'Program', 'ProgressBar', 'ProgressBars', 'Put',
            'RadioGroup', 'Randomize', 'Ranges', 'Rect', 'ReDim',
            'Redistricter', 'Refresh', 'Region', 'Register', 'Relief',
            'Reload', 'Remove', 'Rename', 'Report', 'Reproject', 'Resolution',
            'Resume', 'Rollback', 'RoundRect', 'RowID', 'Run', 'Save', 'Seek',
            'Select', 'Selection', 'Server', 'Set', 'Shade', 'SmallInt',
            'Snap', 'Split', 'StaticText', 'StatusBar', 'Stop', 'String',
            'Style', 'Styles', 'Sub', 'Symbol', 'SymbolPicker', 'Symbols',
            'Table', 'Target', 'Terminate', 'Text', 'Then', 'Threshold',
            'Timeout', 'To', 'Transaction', 'Transform', 'Type', 'UnDim',
            'Units', 'Unlink', 'Update', 'Using', 'VALUES', 'Version',
            'Versioning', 'Wend', 'WFS', 'WHERE', 'While', 'Window', 'Within',
            'Workspace', 'Write'
            ),
        2 => array(
            'EndHandler', 'ForegroundTaskSwitchHandler', 'Main',
            'RemoteMapGenHandler', 'RemoteMsgHandler', 'SelChangedHandler',
            'ToolHandler', 'WinChangedHandler', 'WinClosedHandler',
            'WinFocusChangedHandler'
            ),
        3 => array(
            'Abs', 'Acos', 'ApplicationDirectory$', 'AreaOverlap', 'Asc',
            'Asin', 'Ask', 'Atn', 'Avg', 'Buffer', 'ButtonPadInfo',
            'CartesianArea', 'CartesianBuffer', 'CartesianConnectObjects',
            'CartesianDistance', 'CartesianObjectDistance',
            'CartesianObjectLen', 'CartesianOffset', 'CartesianOffsetXY',
            'CartesianPerimeter', 'Centroid', 'CentroidX', 'CentroidY',
            'ChooseProjection$', 'Chr$', 'ColumnInfo', 'CommandInfo',
            'ConnectObjects', 'ControlPointInfo', 'ConvertToPline',
            'ConvertToRegion', 'ConvexHull', 'CoordSysName$', 'Cos', 'Count',
            'CreateCircle', 'CreateLine', 'CreatePoint', 'CreateText',
            'CurDate', 'CurrentBorderPen', 'CurrentBrush', 'CurrentFont',
            'CurrentLinePen', 'CurrentPen', 'CurrentSymbol', 'DateWindow',
            'Day', 'DDEInitiate', 'DDERequest$', 'DeformatNumber$', 'EOF',
            'EOT', 'EPSGToCoordSysString$', 'Err', 'Error$', 'Exp',
            'ExtractNodes', 'FileAttr', 'FileExists', 'FileOpenDlg',
            'FileSaveAsDlg', 'Fix', 'Format$', 'FormatDate$', 'FormatNumber$',
            'FrontWindow', 'GeocodeInfo', 'GetFolderPath$', 'GetGridCellValue',
            'GetMetadata$', 'GetSeamlessSheet', 'GridTableInfo',
            'HomeDirectory$', 'InStr', 'Int', 'IntersectNodes',
            'IsGridCellNull', 'IsogramInfo', 'IsPenWidthPixels',
            'LabelFindByID', 'LabelFindFirst', 'LabelFindNext', 'LabelInfo',
            'LayerInfo', 'LCase$', 'Left$', 'LegendFrameInfo', 'LegendInfo',
            'LegendStyleInfo', 'Len', 'Like', 'LocateFile$', 'LOF', 'Log',
            'LTrim$', 'MakeBrush', 'MakeCustomSymbol', 'MakeFont',
            'MakeFontSymbol', 'MakePen', 'MakeSymbol', 'Map3DInfo',
            'MapperInfo', 'Max', 'Maximum', 'MBR', 'MenuItemInfoByHandler',
            'MenuItemInfoByID', 'MGRSToPoint', 'MICloseContent',
            'MICloseFtpConnection', 'MICloseFtpFileFind',
            'MICloseHttpConnection', 'MICloseHttpFile', 'MICloseSession',
            'MICreateSession', 'MICreateSessionFull', 'Mid$', 'MidByte$',
            'MIErrorDlg', 'MIFindFtpFile', 'MIFindNextFtpFile', 'MIGetContent',
            'MIGetContentBuffer', 'MIGetContentLen', 'MIGetContentString',
            'MIGetContentToFile', 'MIGetContentType',
            'MIGetCurrentFtpDirectory', 'MIGetErrorCode', 'MIGetErrorMessage',
            'MIGetFileURL', 'MIGetFtpConnection', 'MIGetFtpFile',
            'MIGetFtpFileFind', 'MIGetFtpFileName', 'MIGetHttpConnection',
            'MIIsFtpDirectory', 'MIIsFtpDots', 'Min', 'Minimum',
            'MIOpenRequest', 'MIOpenRequestFull', 'MIParseURL', 'MIPutFtpFile',
            'MIQueryInfo', 'MIQueryInfoStatusCode', 'MISaveContent',
            'MISendRequest', 'MISendSimpleRequest', 'MISetCurrentFtpDirectory',
            'MISetSessionTimeout', 'MIXmlAttributeListDestroy',
            'MIXmlDocumentCreate', 'MIXmlDocumentDestroy',
            'MIXmlDocumentGetNamespaces', 'MIXmlDocumentGetRootNode',
            'MIXmlDocumentLoad', 'MIXmlDocumentLoadXML',
            'MIXmlDocumentLoadXMLString', 'MIXmlDocumentSetProperty',
            'MIXmlGetAttributeList', 'MIXmlGetChildList',
            'MIXmlGetNextAttribute', 'MIXmlGetNextNode', 'MIXmlNodeDestroy',
            'MIXmlNodeGetAttributeValue', 'MIXmlNodeGetFirstChild',
            'MIXmlNodeGetName', 'MIXmlNodeGetParent', 'MIXmlNodeGetText',
            'MIXmlNodeGetValue', 'MIXmlNodeListDestroy', 'MIXmlSCDestroy',
            'MIXmlSCGetLength', 'MIXmlSCGetNamespace', 'MIXmlSelectNodes',
            'MIXmlSelectSingleNode', 'Month', 'NumAllWindows', 'NumberToDate',
            'NumCols', 'NumTables', 'NumWindows', 'ObjectDistance',
            'ObjectGeography', 'ObjectInfo', 'ObjectLen', 'ObjectNodeHasM',
            'ObjectNodeHasZ', 'ObjectNodeM', 'ObjectNodeX', 'ObjectNodeY',
            'ObjectNodeZ', 'OffsetXY', 'Overlap', 'OverlayNodes',
            'PathToDirectory$', 'PathToFileName$', 'PathToTableName$',
            'PenWidthToPoints', 'Perimeter', 'PointsToPenWidth',
            'PointToMGRS$', 'PrismMapInfo', 'ProgramDirectory$', 'Proper$',
            'ProportionOverlap', 'RasterTableInfo', 'ReadControlValue',
            'RegionInfo', 'RemoteQueryHandler', 'RGB', 'Right$', 'Rnd',
            'Rotate', 'RotateAtPoint', 'Round', 'RTrim$', 'SearchInfo',
            'SearchPoint', 'SearchRect', 'SelectionInfo', 'Server_ColumnInfo',
            'Server_Connect', 'Server_ConnectInfo', 'Server_DriverInfo',
            'Server_EOT', 'Server_Execute', 'Server_GetODBCHConn',
            'Server_GetODBCHStmt', 'Server_NumCols', 'Server_NumDrivers',
            'SessionInfo', 'Sgn', 'Sin', 'Space$', 'SphericalArea',
            'SphericalConnectObjects', 'SphericalDistance',
            'SphericalObjectDistance', 'SphericalObjectLen', 'SphericalOffset',
            'SphericalOffsetXY', 'SphericalPerimeter', 'Sqr', 'Str$',
            'String$', 'StringCompare', 'StringCompareIntl', 'StringToDate',
            'StyleAttr', 'Sum', 'SystemInfo', 'TableInfo', 'Tan',
            'TempFileName$', 'TextSize', 'Time', 'Timer', 'TriggerControl',
            'TrueFileName$', 'UBound', 'UCase$', 'UnitAbbr$', 'UnitName$',
            'Val', 'Weekday', 'WindowID', 'WindowInfo', 'WtAvg', 'Year'
            ),
        4 => array(
            'BLACK', 'BLUE', 'BRUSH_BACKCOLOR', 'BRUSH_FORECOLOR',
            'BRUSH_PATTERN', 'BTNPAD_INFO_FLOATING', 'BTNPAD_INFO_NBTNS',
            'BTNPAD_INFO_WIDTH', 'BTNPAD_INFO_WINID', 'BTNPAD_INFO_X',
            'BTNPAD_INFO_Y', 'CLS', 'CMD_INFO_CTRL', 'CMD_INFO_CUSTOM_OBJ',
            'CMD_INFO_DLG_DBL', 'CMD_INFO_DLG_OK', 'CMD_INFO_EDIT_ASK',
            'CMD_INFO_EDIT_DISCARD', 'CMD_INFO_EDIT_SAVE',
            'CMD_INFO_EDIT_STATUS', 'CMD_INFO_EDIT_TABLE', 'CMD_INFO_FIND_RC',
            'CMD_INFO_FIND_ROWID', 'CMD_INFO_HL_FILE_NAME',
            'CMD_INFO_HL_LAYER_ID', 'CMD_INFO_HL_ROWID',
            'CMD_INFO_HL_TABLE_NAME', 'CMD_INFO_HL_WINDOW_ID',
            'CMD_INFO_INTERRUPT', 'CMD_INFO_MENUITEM', 'CMD_INFO_MSG',
            'CMD_INFO_ROWID', 'CMD_INFO_SELTYPE', 'CMD_INFO_SHIFT',
            'CMD_INFO_STATUS', 'CMD_INFO_TASK_SWITCH', 'CMD_INFO_TOOLBTN',
            'CMD_INFO_WIN', 'CMD_INFO_X', 'CMD_INFO_X2', 'CMD_INFO_XCMD',
            'CMD_INFO_Y', 'CMD_INFO_Y2', 'COL_INFO_DECPLACES',
            'COL_INFO_EDITABLE', 'COL_INFO_INDEXED', 'COL_INFO_NAME',
            'COL_INFO_NUM', 'COL_INFO_TYPE', 'COL_INFO_WIDTH', 'COL_TYPE_CHAR',
            'COL_TYPE_DATE', 'COL_TYPE_DATETIME', 'COL_TYPE_DECIMAL',
            'COL_TYPE_FLOAT', 'COL_TYPE_GRAPHIC', 'COL_TYPE_INTEGER',
            'COL_TYPE_LOGICAL', 'COL_TYPE_SMALLINT', 'COL_TYPE_TIME', 'CYAN',
            'DATE_WIN_CURPROG', 'DATE_WIN_SESSION', 'DEG_2_RAD',
            'DICTIONARY_ADDRESS_ONLY', 'DICTIONARY_ALL',
            'DICTIONARY_PREFER_ADDRESS', 'DICTIONARY_PREFER_USER',
            'DICTIONARY_USER_ONLY', 'DM_CUSTOM_CIRCLE', 'DM_CUSTOM_ELLIPSE',
            'DM_CUSTOM_LINE', 'DM_CUSTOM_POINT', 'DM_CUSTOM_POLYGON',
            'DM_CUSTOM_POLYLINE', 'DM_CUSTOM_RECT', 'DMPAPER_10X11',
            'DMPAPER_10X14', 'DMPAPER_11X17', 'DMPAPER_12X11', 'DMPAPER_15X11',
            'DMPAPER_9X11', 'DMPAPER_A_PLUS', 'DMPAPER_A2', 'DMPAPER_A3',
            'DMPAPER_A3_EXTRA', 'DMPAPER_A3_EXTRA_TRANSVERSE',
            'DMPAPER_A3_ROTATED', 'DMPAPER_A3_TRANSVERSE', 'DMPAPER_A4',
            'DMPAPER_A4_EXTRA', 'DMPAPER_A4_PLUS', 'DMPAPER_A4_ROTATED',
            'DMPAPER_A4_TRANSVERSE', 'DMPAPER_A4SMALL', 'DMPAPER_A5',
            'DMPAPER_A5_EXTRA', 'DMPAPER_A5_ROTATED', 'DMPAPER_A5_TRANSVERSE',
            'DMPAPER_A6', 'DMPAPER_A6_ROTATED', 'DMPAPER_B_PLUS', 'DMPAPER_B4',
            'DMPAPER_B4_JIS_ROTATED', 'DMPAPER_B5', 'DMPAPER_B5_EXTRA',
            'DMPAPER_B5_JIS_ROTATED', 'DMPAPER_B5_TRANSVERSE',
            'DMPAPER_B6_JIS', 'DMPAPER_B6_JIS_ROTATED', 'DMPAPER_CSHEET',
            'DMPAPER_DBL_JAPANESE_POSTCARD',
            'DMPAPER_DBL_JAPANESE_POSTCARD_ROTATED', 'DMPAPER_DSHEET',
            'DMPAPER_ENV_10', 'DMPAPER_ENV_11', 'DMPAPER_ENV_12',
            'DMPAPER_ENV_14', 'DMPAPER_ENV_9', 'DMPAPER_ENV_B4',
            'DMPAPER_ENV_B5', 'DMPAPER_ENV_B6', 'DMPAPER_ENV_C3',
            'DMPAPER_ENV_C4', 'DMPAPER_ENV_C5', 'DMPAPER_ENV_C6',
            'DMPAPER_ENV_C65', 'DMPAPER_ENV_DL', 'DMPAPER_ENV_INVITE',
            'DMPAPER_ENV_ITALY', 'DMPAPER_ENV_MONARCH', 'DMPAPER_ENV_PERSONAL',
            'DMPAPER_ESHEET', 'DMPAPER_EXECUTIVE',
            'DMPAPER_FANFOLD_LGL_GERMAN', 'DMPAPER_FANFOLD_STD_GERMAN',
            'DMPAPER_FANFOLD_US', 'DMPAPER_FIRST', 'DMPAPER_FOLIO',
            'DMPAPER_ISO_B4', 'DMPAPER_JAPANESE_POSTCARD',
            'DMPAPER_JAPANESE_POSTCARD_ROTATED', 'DMPAPER_JENV_CHOU3',
            'DMPAPER_JENV_CHOU3_ROTATED', 'DMPAPER_JENV_CHOU4',
            'DMPAPER_JENV_CHOU4_ROTATED', 'DMPAPER_JENV_KAKU2',
            'DMPAPER_JENV_KAKU2_ROTATED', 'DMPAPER_JENV_KAKU3',
            'DMPAPER_JENV_KAKU3_ROTATED', 'DMPAPER_JENV_YOU4',
            'DMPAPER_JENV_YOU4_ROTATED', 'DMPAPER_LEDGER', 'DMPAPER_LEGAL',
            'DMPAPER_LEGAL_EXTRA', 'DMPAPER_LETTER', 'DMPAPER_LETTER_EXTRA',
            'DMPAPER_LETTER_EXTRA_TRANSVERSE', 'DMPAPER_LETTER_PLUS',
            'DMPAPER_LETTER_ROTATED', 'DMPAPER_LETTER_TRANSVERSE',
            'DMPAPER_LETTERSMALL', 'DMPAPER_NOTE', 'DMPAPER_P16K',
            'DMPAPER_P16K_ROTATED', 'DMPAPER_P32K', 'DMPAPER_P32K_ROTATED',
            'DMPAPER_P32KBIG', 'DMPAPER_P32KBIG_ROTATED', 'DMPAPER_PENV_1',
            'DMPAPER_PENV_1_ROTATED', 'DMPAPER_PENV_10',
            'DMPAPER_PENV_10_ROTATED', 'DMPAPER_PENV_2',
            'DMPAPER_PENV_2_ROTATED', 'DMPAPER_PENV_3',
            'DMPAPER_PENV_3_ROTATED', 'DMPAPER_PENV_4',
            'DMPAPER_PENV_4_ROTATED', 'DMPAPER_PENV_5',
            'DMPAPER_PENV_5_ROTATED', 'DMPAPER_PENV_6',
            'DMPAPER_PENV_6_ROTATED', 'DMPAPER_PENV_7',
            'DMPAPER_PENV_7_ROTATED', 'DMPAPER_PENV_8',
            'DMPAPER_PENV_8_ROTATED', 'DMPAPER_PENV_9',
            'DMPAPER_PENV_9_ROTATED', 'DMPAPER_QUARTO', 'DMPAPER_RESERVED_48',
            'DMPAPER_RESERVED_49', 'DMPAPER_STATEMENT', 'DMPAPER_TABLOID',
            'DMPAPER_TABLOID_EXTRA', 'DMPAPER_USER', 'ERR_BAD_WINDOW',
            'ERR_BAD_WINDOW_NUM', 'ERR_CANT_ACCESS_FILE',
            'ERR_CANT_INITIATE_LINK', 'ERR_CMD_NOT_SUPPORTED',
            'ERR_FCN_ARG_RANGE', 'ERR_FCN_INVALID_FMT',
            'ERR_FCN_OBJ_FETCH_FAILED', 'ERR_FILEMGR_NOTOPEN',
            'ERR_FP_MATH_LIB_DOMAIN', 'ERR_FP_MATH_LIB_RANGE',
            'ERR_INVALID_CHANNEL', 'ERR_INVALID_READ_CONTROL',
            'ERR_INVALID_TRIG_CONTROL', 'ERR_NO_FIELD',
            'ERR_NO_RESPONSE_FROM_APP', 'ERR_NULL_SELECTION',
            'ERR_PROCESS_FAILED_IN_APP', 'ERR_TABLE_NOT_FOUND',
            'ERR_WANT_MAPPER_WIN', 'FALSE', 'FILE_ATTR_FILESIZE',
            'FILE_ATTR_MODE', 'FILTER_ALL_DIRECTIONS_1',
            'FILTER_ALL_DIRECTIONS_2', 'FILTER_DIAGONALLY',
            'FILTER_HORIZONTALLY', 'FILTER_VERTICALLY',
            'FILTER_VERTICALLY_AND_HORIZONTALLY', 'FOLDER_APPDATA',
            'FOLDER_COMMON_APPDATA', 'FOLDER_COMMON_DOCS',
            'FOLDER_LOCAL_APPDATA', 'FOLDER_MI_APPDATA',
            'FOLDER_MI_COMMON_APPDATA', 'FOLDER_MI_LOCAL_APPDATA',
            'FOLDER_MI_PREFERENCE', 'FOLDER_MYDOCS', 'FOLDER_MYPICS',
            'FONT_BACKCOLOR', 'FONT_FORECOLOR', 'FONT_NAME', 'FONT_POINTSIZE',
            'FONT_STYLE', 'FRAME_INFO_BORDER_PEN', 'FRAME_INFO_COLUMN',
            'FRAME_INFO_HEIGHT', 'FRAME_INFO_LABEL', 'FRAME_INFO_MAP_LAYER_ID',
            'FRAME_INFO_NUM_STYLES', 'FRAME_INFO_POS_X', 'FRAME_INFO_POS_Y',
            'FRAME_INFO_REFRESHABLE', 'FRAME_INFO_SUBTITLE',
            'FRAME_INFO_SUBTITLE_FONT', 'FRAME_INFO_TITLE',
            'FRAME_INFO_TITLE_FONT', 'FRAME_INFO_TYPE', 'FRAME_INFO_VISIBLE',
            'FRAME_INFO_WIDTH', 'FRAME_TYPE_STYLE', 'FRAME_TYPE_THEME',
            'GEO_CONTROL_POINT_X', 'GEO_CONTROL_POINT_Y', 'GEOCODE_BATCH_SIZE',
            'GEOCODE_COUNT_GEOCODED', 'GEOCODE_COUNT_NOTGEOCODED',
            'GEOCODE_COUNTRY_SUBDIVISION', 'GEOCODE_COUNTRY_SUBDIVISION2',
            'GEOCODE_DICTIONARY', 'GEOCODE_FALLBACK_GEOGRAPHIC',
            'GEOCODE_FALLBACK_POSTAL', 'GEOCODE_MAX_BATCH_SIZE',
            'GEOCODE_MIXED_CASE', 'GEOCODE_MUNICIPALITY',
            'GEOCODE_MUNICIPALITY2', 'GEOCODE_OFFSET_CENTER',
            'GEOCODE_OFFSET_CENTER_UNITS', 'GEOCODE_OFFSET_END',
            'GEOCODE_OFFSET_END_UNITS', 'GEOCODE_PASSTHROUGH',
            'GEOCODE_POSTAL_CODE', 'GEOCODE_RESULT_MARK_MULTIPLE',
            'GEOCODE_STREET_NAME', 'GEOCODE_STREET_NUMBER',
            'GEOCODE_UNABLE_TO_CONVERT_DATA', 'GREEN',
            'GRID_TAB_INFO_HAS_HILLSHADE', 'GRID_TAB_INFO_MAX_VALUE',
            'GRID_TAB_INFO_MIN_VALUE', 'HOTLINK_INFO_ENABLED',
            'HOTLINK_INFO_EXPR', 'HOTLINK_INFO_MODE', 'HOTLINK_INFO_RELATIVE',
            'HOTLINK_MODE_BOTH', 'HOTLINK_MODE_LABEL', 'HOTLINK_MODE_OBJ',
            'IMAGE_CLASS_BILEVEL', 'IMAGE_CLASS_GREYSCALE',
            'IMAGE_CLASS_PALETTE', 'IMAGE_CLASS_RGB', 'IMAGE_TYPE_GRID',
            'IMAGE_TYPE_RASTER', 'INCL_ALL', 'INCL_COMMON', 'INCL_CROSSINGS',
            'ISOGRAM_AMBIENT_SPEED_DIST_UNIT',
            'ISOGRAM_AMBIENT_SPEED_TIME_UNIT', 'ISOGRAM_BANDING',
            'ISOGRAM_BATCH_SIZE', 'ISOGRAM_DEFAULT_AMBIENT_SPEED',
            'ISOGRAM_MAJOR_POLYGON_ONLY', 'ISOGRAM_MAJOR_ROADS_ONLY',
            'ISOGRAM_MAX_BANDS', 'ISOGRAM_MAX_BATCH_SIZE',
            'ISOGRAM_MAX_DISTANCE', 'ISOGRAM_MAX_DISTANCE_UNITS',
            'ISOGRAM_MAX_OFFROAD_DIST', 'ISOGRAM_MAX_OFFROAD_DIST_UNITS',
            'ISOGRAM_MAX_TIME', 'ISOGRAM_MAX_TIME_UNITS',
            'ISOGRAM_POINTS_ONLY', 'ISOGRAM_PROPAGATION_FACTOR',
            'ISOGRAM_RECORDS_INSERTED', 'ISOGRAM_RECORDS_NOTINSERTED',
            'ISOGRAM_RETURN_HOLES', 'ISOGRAM_SIMPLIFICATION_FACTOR',
            'LABEL_INFO_ANCHORX', 'LABEL_INFO_ANCHORY', 'LABEL_INFO_DRAWN',
            'LABEL_INFO_EDIT', 'LABEL_INFO_EDIT_ANCHOR',
            'LABEL_INFO_EDIT_ANGLE', 'LABEL_INFO_EDIT_FONT',
            'LABEL_INFO_EDIT_OFFSET', 'LABEL_INFO_EDIT_PEN',
            'LABEL_INFO_EDIT_POSITION', 'LABEL_INFO_EDIT_TEXT',
            'LABEL_INFO_EDIT_TEXTARROW', 'LABEL_INFO_EDIT_TEXTLINE',
            'LABEL_INFO_EDIT_VISIBILITY', 'LABEL_INFO_OBJECT',
            'LABEL_INFO_OFFSET', 'LABEL_INFO_ORIENTATION',
            'LABEL_INFO_POSITION', 'LABEL_INFO_ROWID', 'LABEL_INFO_SELECT',
            'LABEL_INFO_TABLE', 'LAYER_INFO_ARROWS', 'LAYER_INFO_CENTROIDS',
            'LAYER_INFO_COSMETIC', 'LAYER_INFO_DISPLAY',
            'LAYER_INFO_DISPLAY_GLOBAL', 'LAYER_INFO_DISPLAY_GRAPHIC',
            'LAYER_INFO_DISPLAY_OFF', 'LAYER_INFO_DISPLAY_VALUE',
            'LAYER_INFO_EDITABLE', 'LAYER_INFO_HOTLINK_COUNT',
            'LAYER_INFO_HOTLINK_EXPR', 'LAYER_INFO_HOTLINK_MODE',
            'LAYER_INFO_HOTLINK_RELATIVE', 'LAYER_INFO_LABEL_ALPHA',
            'LAYER_INFO_LABEL_ORIENT_CURVED',
            'LAYER_INFO_LABEL_ORIENT_HORIZONTAL',
            'LAYER_INFO_LABEL_ORIENT_PARALLEL', 'LAYER_INFO_LAYER_ALPHA',
            'LAYER_INFO_LAYER_TRANSLUCENCY', 'LAYER_INFO_LBL_AUTODISPLAY',
            'LAYER_INFO_LBL_CURFONT', 'LAYER_INFO_LBL_DUPLICATES',
            'LAYER_INFO_LBL_EXPR', 'LAYER_INFO_LBL_FONT', 'LAYER_INFO_LBL_LT',
            'LAYER_INFO_LBL_LT_ARROW', 'LAYER_INFO_LBL_LT_NONE',
            'LAYER_INFO_LBL_LT_SIMPLE', 'LAYER_INFO_LBL_MAX',
            'LAYER_INFO_LBL_OFFSET', 'LAYER_INFO_LBL_ORIENTATION',
            'LAYER_INFO_LBL_OVERLAP', 'LAYER_INFO_LBL_PARALLEL',
            'LAYER_INFO_LBL_PARTIALSEGS', 'LAYER_INFO_LBL_POS',
            'LAYER_INFO_LBL_POS_BC', 'LAYER_INFO_LBL_POS_BL',
            'LAYER_INFO_LBL_POS_BR', 'LAYER_INFO_LBL_POS_CC',
            'LAYER_INFO_LBL_POS_CL', 'LAYER_INFO_LBL_POS_CR',
            'LAYER_INFO_LBL_POS_TC', 'LAYER_INFO_LBL_POS_TL',
            'LAYER_INFO_LBL_POS_TR', 'LAYER_INFO_LBL_VIS_OFF',
            'LAYER_INFO_LBL_VIS_ON', 'LAYER_INFO_LBL_VIS_ZOOM',
            'LAYER_INFO_LBL_VISIBILITY', 'LAYER_INFO_LBL_ZOOM_MAX',
            'LAYER_INFO_LBL_ZOOM_MIN', 'LAYER_INFO_NAME', 'LAYER_INFO_NODES',
            'LAYER_INFO_OVR_BRUSH', 'LAYER_INFO_OVR_FONT',
            'LAYER_INFO_OVR_LINE', 'LAYER_INFO_OVR_PEN',
            'LAYER_INFO_OVR_SYMBOL', 'LAYER_INFO_PATH',
            'LAYER_INFO_SELECTABLE', 'LAYER_INFO_TYPE',
            'LAYER_INFO_TYPE_COSMETIC', 'LAYER_INFO_TYPE_GRID',
            'LAYER_INFO_TYPE_IMAGE', 'LAYER_INFO_TYPE_NORMAL',
            'LAYER_INFO_TYPE_THEMATIC', 'LAYER_INFO_TYPE_WMS',
            'LAYER_INFO_ZOOM_LAYERED', 'LAYER_INFO_ZOOM_MAX',
            'LAYER_INFO_ZOOM_MIN', 'LEGEND_INFO_MAP_ID',
            'LEGEND_INFO_NUM_FRAMES', 'LEGEND_INFO_ORIENTATION',
            'LEGEND_INFO_STYLE_SAMPLE_SIZE', 'LEGEND_STYLE_INFO_FONT',
            'LEGEND_STYLE_INFO_OBJ', 'LEGEND_STYLE_INFO_TEXT',
            'LOCATE_ABB_FILE', 'LOCATE_CLR_FILE', 'LOCATE_CUSTSYMB_DIR',
            'LOCATE_DEF_WOR', 'LOCATE_FNT_FILE', 'LOCATE_GEOCODE_SERVERLIST',
            'LOCATE_GRAPH_DIR', 'LOCATE_LAYOUT_TEMPLATE_DIR',
            'LOCATE_MNU_FILE', 'LOCATE_PEN_FILE', 'LOCATE_PREF_FILE',
            'LOCATE_PRJ_FILE', 'LOCATE_ROUTING_SERVERLIST',
            'LOCATE_THMTMPLT_DIR', 'LOCATE_WFS_SERVERLIST',
            'LOCATE_WMS_SERVERLIST', 'M_3DMAP_CLONE_VIEW',
            'M_3DMAP_PREVIOUS_VIEW', 'M_3DMAP_PROPERTIES',
            'M_3DMAP_REFRESH_GRID_TEXTURE', 'M_3DMAP_VIEW_ENTIRE_GRID',
            'M_3DMAP_VIEWPOINT_CONTROL', 'M_3DMAP_WIREFRAME',
            'M_ANALYZE_CALC_STATISTICS', 'M_ANALYZE_CUSTOMIZE_LEGEND',
            'M_ANALYZE_FIND', 'M_ANALYZE_FIND_SELECTION',
            'M_ANALYZE_INVERTSELECT', 'M_ANALYZE_SELECT',
            'M_ANALYZE_SELECTALL', 'M_ANALYZE_SHADE', 'M_ANALYZE_SQLQUERY',
            'M_ANALYZE_UNSELECT', 'M_BROWSE_EDIT', 'M_BROWSE_GRID',
            'M_BROWSE_NEW_RECORD', 'M_BROWSE_OPTIONS', 'M_BROWSE_PICK_FIELDS',
            'M_DBMS_OPEN_ODBC', 'M_EDIT_CLEAR', 'M_EDIT_CLEAROBJ',
            'M_EDIT_COPY', 'M_EDIT_CUT', 'M_EDIT_GETINFO', 'M_EDIT_NEW_ROW',
            'M_EDIT_PASTE', 'M_EDIT_PREFERENCES', 'M_EDIT_PREFERENCES_COUNTRY',
            'M_EDIT_PREFERENCES_FILE', 'M_EDIT_PREFERENCES_IMAGE_PROC',
            'M_EDIT_PREFERENCES_LAYOUT', 'M_EDIT_PREFERENCES_LEGEND',
            'M_EDIT_PREFERENCES_MAP', 'M_EDIT_PREFERENCES_OUTPUT',
            'M_EDIT_PREFERENCES_PATH', 'M_EDIT_PREFERENCES_PRINTER',
            'M_EDIT_PREFERENCES_STYLES', 'M_EDIT_PREFERENCES_SYSTEM',
            'M_EDIT_PREFERENCES_WEBSERVICES', 'M_EDIT_RESHAPE', 'M_EDIT_UNDO',
            'M_FILE_ABOUT', 'M_FILE_ADD_WORKSPACE', 'M_FILE_CLOSE',
            'M_FILE_CLOSE_ALL', 'M_FILE_CLOSE_ODBC', 'M_FILE_EXIT',
            'M_FILE_HELP', 'M_FILE_NEW', 'M_FILE_OPEN', 'M_FILE_OPEN_ODBC',
            'M_FILE_OPEN_ODBC_CONN', 'M_FILE_OPEN_UNIVERSAL_DATA',
            'M_FILE_OPEN_WFS', 'M_FILE_OPEN_WMS', 'M_FILE_PAGE_SETUP',
            'M_FILE_PRINT', 'M_FILE_PRINT_SETUP', 'M_FILE_REVERT',
            'M_FILE_RUN', 'M_FILE_SAVE', 'M_FILE_SAVE_COPY_AS',
            'M_FILE_SAVE_QUERY', 'M_FILE_SAVE_WINDOW_AS',
            'M_FILE_SAVE_WORKSPACE', 'M_FORMAT_CUSTOM_COLORS',
            'M_FORMAT_PICK_FILL', 'M_FORMAT_PICK_FONT', 'M_FORMAT_PICK_LINE',
            'M_FORMAT_PICK_SYMBOL', 'M_GRAPH_3D_VIEWING_ANGLE',
            'M_GRAPH_FORMATING', 'M_GRAPH_GENERAL_OPTIONS',
            'M_GRAPH_GRID_SCALES', 'M_GRAPH_LABEL_AXIS',
            'M_GRAPH_SAVE_AS_TEMPLATE', 'M_GRAPH_SERIES',
            'M_GRAPH_SERIES_OPTIONS', 'M_GRAPH_TITLES', 'M_GRAPH_TYPE',
            'M_GRAPH_VALUE_AXIS', 'M_HELP_ABOUT', 'M_HELP_CHECK_FOR_UPDATE',
            'M_HELP_CONNECT_MIFORUM', 'M_HELP_CONTENTS',
            'M_HELP_CONTEXTSENSITIVE', 'M_HELP_HELPMODE',
            'M_HELP_MAPINFO_3DGRAPH_HELP', 'M_HELP_MAPINFO_CONNECT_SERVICES',
            'M_HELP_MAPINFO_WWW', 'M_HELP_MAPINFO_WWW_STORE',
            'M_HELP_MAPINFO_WWW_TUTORIAL', 'M_HELP_SEARCH',
            'M_HELP_TECHSUPPORT', 'M_HELP_USE_HELP', 'M_LAYOUT_ACTUAL',
            'M_LAYOUT_ALIGN', 'M_LAYOUT_AUTOSCROLL_ONOFF',
            'M_LAYOUT_BRING2FRONT', 'M_LAYOUT_CHANGE_VIEW',
            'M_LAYOUT_DISPLAYOPTIONS', 'M_LAYOUT_DROPSHADOWS',
            'M_LAYOUT_ENTIRE', 'M_LAYOUT_LAYOUT_SIZE', 'M_LAYOUT_PREVIOUS',
            'M_LAYOUT_SEND2BACK', 'M_LEGEND_ADD_FRAMES', 'M_LEGEND_DELETE',
            'M_LEGEND_PROPERTIES', 'M_LEGEND_REFRESH', 'M_MAP_AUTOLABEL',
            'M_MAP_AUTOSCROLL_ONOFF', 'M_MAP_CHANGE_VIEW',
            'M_MAP_CLEAR_COSMETIC', 'M_MAP_CLEAR_CUSTOM_LABELS',
            'M_MAP_CLIP_REGION_ONOFF', 'M_MAP_CLONE_MAPPER',
            'M_MAP_CREATE_3DMAP', 'M_MAP_CREATE_LEGEND',
            'M_MAP_CREATE_PRISMMAP', 'M_MAP_ENTIRE_LAYER',
            'M_MAP_LAYER_CONTROL', 'M_MAP_MODIFY_THEMATIC', 'M_MAP_OPTIONS',
            'M_MAP_PREVIOUS', 'M_MAP_PROJECTION', 'M_MAP_SAVE_COSMETIC',
            'M_MAP_SET_CLIP_REGION', 'M_MAP_SETUNITS', 'M_MAP_SETUPDIGITIZER',
            'M_MAP_THEMATIC', 'M_MAPBASIC_CLEAR', 'M_MAPBASIC_SAVECONTENTS',
            'M_OBJECTS_BREAKPOLY', 'M_OBJECTS_BUFFER',
            'M_OBJECTS_CHECK_REGIONS', 'M_OBJECTS_CLEAN',
            'M_OBJECTS_CLEAR_TARGET', 'M_OBJECTS_COMBINE',
            'M_OBJECTS_CONVEX_HULL', 'M_OBJECTS_CVT_PGON',
            'M_OBJECTS_CVT_PLINE', 'M_OBJECTS_DISAGG',
            'M_OBJECTS_DRIVE_REGION', 'M_OBJECTS_ENCLOSE', 'M_OBJECTS_ERASE',
            'M_OBJECTS_ERASE_OUT', 'M_OBJECTS_MERGE', 'M_OBJECTS_OFFSET',
            'M_OBJECTS_OVERLAY', 'M_OBJECTS_POLYLINE_SPLIT',
            'M_OBJECTS_POLYLINE_SPLIT_AT_NODE', 'M_OBJECTS_RESHAPE',
            'M_OBJECTS_ROTATE', 'M_OBJECTS_SET_TARGET', 'M_OBJECTS_SMOOTH',
            'M_OBJECTS_SNAP', 'M_OBJECTS_SPLIT', 'M_OBJECTS_UNSMOOTH',
            'M_OBJECTS_VORONOI', 'M_ORACLE_CREATE_WORKSPACE',
            'M_ORACLE_DELETE_WORKSPACE', 'M_ORACLE_MERGE_PARENT',
            'M_ORACLE_REFRESH_FROM_PARENT', 'M_ORACLE_VERSION_ENABLE_OFF',
            'M_ORACLE_VERSION_ENABLE_ON', 'M_QUERY_CALC_STATISTICS',
            'M_QUERY_FIND', 'M_QUERY_FIND_ADDRESS', 'M_QUERY_FIND_SELECTION',
            'M_QUERY_FIND_SELECTION_CURRENT_MAP', 'M_QUERY_INVERTSELECT',
            'M_QUERY_SELECT', 'M_QUERY_SELECTALL', 'M_QUERY_SQLQUERY',
            'M_QUERY_UNSELECT', 'M_REDISTRICT_ADD', 'M_REDISTRICT_ASSIGN',
            'M_REDISTRICT_DELETE', 'M_REDISTRICT_OPTIONS',
            'M_REDISTRICT_TARGET', 'M_SENDMAIL_CURRENTWINDOW',
            'M_SENDMAIL_WORKSPACE', 'M_TABLE_APPEND', 'M_TABLE_BUFFER',
            'M_TABLE_CHANGESYMBOL', 'M_TABLE_CREATE_POINTS', 'M_TABLE_DELETE',
            'M_TABLE_DRIVE_REGION', 'M_TABLE_EXPORT', 'M_TABLE_GEOCODE',
            'M_TABLE_IMPORT', 'M_TABLE_MAKEMAPPABLE',
            'M_TABLE_MERGE_USING_COLUMN', 'M_TABLE_MODIFY_STRUCTURE',
            'M_TABLE_PACK', 'M_TABLE_RASTER_REG', 'M_TABLE_RASTER_STYLE',
            'M_TABLE_REFRESH', 'M_TABLE_RENAME',
            'M_TABLE_UNIVERSAL_DATA_REFRESH', 'M_TABLE_UNLINK',
            'M_TABLE_UPDATE_COLUMN', 'M_TABLE_VORONOI', 'M_TABLE_WEB_GEOCODE',
            'M_TABLE_WFS_PROPS', 'M_TABLE_WFS_REFRESH', 'M_TABLE_WMS_PROPS',
            'M_TOOLS_ADD_NODE', 'M_TOOLS_ARC', 'M_TOOLS_CRYSTAL_REPORTS_NEW',
            'M_TOOLS_CRYSTAL_REPORTS_OPEN', 'M_TOOLS_DRAGWINDOW',
            'M_TOOLS_ELLIPSE', 'M_TOOLS_EXPAND', 'M_TOOLS_FRAME',
            'M_TOOLS_HOTLINK', 'M_TOOLS_LABELER', 'M_TOOLS_LINE',
            'M_TOOLS_MAPBASIC', 'M_TOOLS_PNT_QUERY', 'M_TOOLS_POINT',
            'M_TOOLS_POLYGON', 'M_TOOLS_POLYLINE', 'M_TOOLS_RASTER_REG',
            'M_TOOLS_RECENTER', 'M_TOOLS_RECTANGLE', 'M_TOOLS_ROUNDEDRECT',
            'M_TOOLS_RULER', 'M_TOOLS_RUN', 'M_TOOLS_SEARCH_BOUNDARY',
            'M_TOOLS_SEARCH_POLYGON', 'M_TOOLS_SEARCH_RADIUS',
            'M_TOOLS_SEARCH_RECT', 'M_TOOLS_SELECTOR', 'M_TOOLS_SHRINK',
            'M_TOOLS_TEXT', 'M_TOOLS_TOOL_MANAGER', 'M_WINDOW_ARRANGEICONS',
            'M_WINDOW_BROWSE', 'M_WINDOW_BUTTONPAD', 'M_WINDOW_CASCADE',
            'M_WINDOW_EXPORT_WINDOW', 'M_WINDOW_FIRST', 'M_WINDOW_GRAPH',
            'M_WINDOW_LAYOUT', 'M_WINDOW_LEGEND', 'M_WINDOW_MAP',
            'M_WINDOW_MAPBASIC', 'M_WINDOW_MORE', 'M_WINDOW_REDISTRICT',
            'M_WINDOW_REDRAW', 'M_WINDOW_STATISTICS', 'M_WINDOW_STATUSBAR',
            'M_WINDOW_TILE', 'M_WINDOW_TOOL_PALETTE', 'MAGENTA',
            'MAP3D_INFO_BACKGROUND', 'MAP3D_INFO_CAMERA_CLIP_FAR',
            'MAP3D_INFO_CAMERA_CLIP_NEAR', 'MAP3D_INFO_CAMERA_FOCAL_X',
            'MAP3D_INFO_CAMERA_FOCAL_Y', 'MAP3D_INFO_CAMERA_FOCAL_Z',
            'MAP3D_INFO_CAMERA_VPN_1', 'MAP3D_INFO_CAMERA_VPN_2',
            'MAP3D_INFO_CAMERA_VPN_3', 'MAP3D_INFO_CAMERA_VU_1',
            'MAP3D_INFO_CAMERA_VU_2', 'MAP3D_INFO_CAMERA_VU_3',
            'MAP3D_INFO_CAMERA_X', 'MAP3D_INFO_CAMERA_Y',
            'MAP3D_INFO_CAMERA_Z', 'MAP3D_INFO_LIGHT_COLOR',
            'MAP3D_INFO_LIGHT_X', 'MAP3D_INFO_LIGHT_Y', 'MAP3D_INFO_LIGHT_Z',
            'MAP3D_INFO_RESOLUTION_X', 'MAP3D_INFO_RESOLUTION_Y',
            'MAP3D_INFO_SCALE', 'MAP3D_INFO_UNITS', 'MAPPER_INFO_AREAUNITS',
            'MAPPER_INFO_CENTERX', 'MAPPER_INFO_CENTERY',
            'MAPPER_INFO_CLIP_DISPLAY_ALL', 'MAPPER_INFO_CLIP_DISPLAY_POLYOBJ',
            'MAPPER_INFO_CLIP_OVERLAY', 'MAPPER_INFO_CLIP_REGION',
            'MAPPER_INFO_CLIP_TYPE', 'MAPPER_INFO_COORDSYS_CLAUSE',
            'MAPPER_INFO_COORDSYS_CLAUSE_WITH_BOUNDS',
            'MAPPER_INFO_COORDSYS_NAME', 'MAPPER_INFO_DISPLAY',
            'MAPPER_INFO_DISPLAY_DECIMAL', 'MAPPER_INFO_DISPLAY_DEGMINSEC',
            'MAPPER_INFO_DISPLAY_DMS', 'MAPPER_INFO_DISPLAY_MGRS',
            'MAPPER_INFO_DISPLAY_POSITION', 'MAPPER_INFO_DISPLAY_SCALE',
            'MAPPER_INFO_DISPLAY_ZOOM', 'MAPPER_INFO_DIST_CALC_TYPE',
            'MAPPER_INFO_DIST_CARTESIAN', 'MAPPER_INFO_DIST_SPHERICAL',
            'MAPPER_INFO_DISTUNITS', 'MAPPER_INFO_EDIT_LAYER',
            'MAPPER_INFO_LAYERS', 'MAPPER_INFO_MAXX', 'MAPPER_INFO_MAXY',
            'MAPPER_INFO_MERGE_MAP', 'MAPPER_INFO_MINX', 'MAPPER_INFO_MINY',
            'MAPPER_INFO_MOVE_DUPLICATE_NODES', 'MAPPER_INFO_NUM_THEMATIC',
            'MAPPER_INFO_REPROJECTION', 'MAPPER_INFO_RESAMPLING',
            'MAPPER_INFO_SCALE', 'MAPPER_INFO_SCROLLBARS',
            'MAPPER_INFO_XYUNITS', 'MAPPER_INFO_ZOOM', 'MAX_STRING_LENGTH',
            'MENUITEM_INFO_ACCELERATOR', 'MENUITEM_INFO_CHECKABLE',
            'MENUITEM_INFO_CHECKED', 'MENUITEM_INFO_ENABLED',
            'MENUITEM_INFO_HANDLER', 'MENUITEM_INFO_HELPMSG',
            'MENUITEM_INFO_ID', 'MENUITEM_INFO_SHOWHIDEABLE',
            'MENUITEM_INFO_TEXT', 'MI_CURSOR_ARROW', 'MI_CURSOR_CHANGE_WIDTH',
            'MI_CURSOR_CROSSHAIR', 'MI_CURSOR_DRAG_OBJ',
            'MI_CURSOR_FINGER_LEFT', 'MI_CURSOR_FINGER_UP',
            'MI_CURSOR_GRABBER', 'MI_CURSOR_IBEAM', 'MI_CURSOR_IBEAM_CROSS',
            'MI_CURSOR_ZOOM_IN', 'MI_CURSOR_ZOOM_OUT', 'MI_ICON_ADD_NODE',
            'MI_ICON_ARC', 'MI_ICON_ARROW', 'MI_ICON_ARROW_1',
            'MI_ICON_ARROW_10', 'MI_ICON_ARROW_11', 'MI_ICON_ARROW_12',
            'MI_ICON_ARROW_13', 'MI_ICON_ARROW_14', 'MI_ICON_ARROW_15',
            'MI_ICON_ARROW_16', 'MI_ICON_ARROW_17', 'MI_ICON_ARROW_18',
            'MI_ICON_ARROW_19', 'MI_ICON_ARROW_2', 'MI_ICON_ARROW_20',
            'MI_ICON_ARROW_21', 'MI_ICON_ARROW_3', 'MI_ICON_ARROW_4',
            'MI_ICON_ARROW_5', 'MI_ICON_ARROW_6', 'MI_ICON_ARROW_7',
            'MI_ICON_ARROW_8', 'MI_ICON_ARROW_9', 'MI_ICON_CLIP_MODE',
            'MI_ICON_CLIP_REGION', 'MI_ICON_CLOSE_ALL',
            'MI_ICON_COMMUNICATION_1', 'MI_ICON_COMMUNICATION_10',
            'MI_ICON_COMMUNICATION_11', 'MI_ICON_COMMUNICATION_12',
            'MI_ICON_COMMUNICATION_2', 'MI_ICON_COMMUNICATION_3',
            'MI_ICON_COMMUNICATION_4', 'MI_ICON_COMMUNICATION_5',
            'MI_ICON_COMMUNICATION_6', 'MI_ICON_COMMUNICATION_7',
            'MI_ICON_COMMUNICATION_8', 'MI_ICON_COMMUNICATION_9',
            'MI_ICON_COMPASS_CIRCLE_TA', 'MI_ICON_COMPASS_CONTRACT',
            'MI_ICON_COMPASS_EXPAND', 'MI_ICON_COMPASS_POLY_TA',
            'MI_ICON_COMPASS_TAG', 'MI_ICON_COMPASS_UNTAG', 'MI_ICON_COPY',
            'MI_ICON_CROSSHAIR', 'MI_ICON_CUT', 'MI_ICON_DISTRICT_MANY',
            'MI_ICON_DISTRICT_SAME', 'MI_ICON_DRAG_HANDLE', 'MI_ICON_ELLIPSE',
            'MI_ICON_EMERGENCY_1', 'MI_ICON_EMERGENCY_10',
            'MI_ICON_EMERGENCY_11', 'MI_ICON_EMERGENCY_12',
            'MI_ICON_EMERGENCY_13', 'MI_ICON_EMERGENCY_14',
            'MI_ICON_EMERGENCY_15', 'MI_ICON_EMERGENCY_16',
            'MI_ICON_EMERGENCY_17', 'MI_ICON_EMERGENCY_18',
            'MI_ICON_EMERGENCY_2', 'MI_ICON_EMERGENCY_3',
            'MI_ICON_EMERGENCY_4', 'MI_ICON_EMERGENCY_5',
            'MI_ICON_EMERGENCY_6', 'MI_ICON_EMERGENCY_7',
            'MI_ICON_EMERGENCY_8', 'MI_ICON_EMERGENCY_9', 'MI_ICON_GRABBER',
            'MI_ICON_GRAPH_SELECT', 'MI_ICON_HELP', 'MI_ICON_HOT_LINK',
            'MI_ICON_INFO', 'MI_ICON_INVERTSELECT', 'MI_ICON_LABEL',
            'MI_ICON_LAYERS', 'MI_ICON_LEGEND', 'MI_ICON_LETTERS_A',
            'MI_ICON_LETTERS_B', 'MI_ICON_LETTERS_C', 'MI_ICON_LETTERS_D',
            'MI_ICON_LETTERS_E', 'MI_ICON_LETTERS_F', 'MI_ICON_LETTERS_G',
            'MI_ICON_LETTERS_H', 'MI_ICON_LETTERS_I', 'MI_ICON_LETTERS_J',
            'MI_ICON_LETTERS_K', 'MI_ICON_LETTERS_L', 'MI_ICON_LETTERS_M',
            'MI_ICON_LETTERS_N', 'MI_ICON_LETTERS_O', 'MI_ICON_LETTERS_P',
            'MI_ICON_LETTERS_Q', 'MI_ICON_LETTERS_R', 'MI_ICON_LETTERS_S',
            'MI_ICON_LETTERS_T', 'MI_ICON_LETTERS_U', 'MI_ICON_LETTERS_V',
            'MI_ICON_LETTERS_W', 'MI_ICON_LETTERS_X', 'MI_ICON_LETTERS_Y',
            'MI_ICON_LETTERS_Z', 'MI_ICON_LINE', 'MI_ICON_LINE_STYLE',
            'MI_ICON_MAPSYMB_1', 'MI_ICON_MAPSYMB_10', 'MI_ICON_MAPSYMB_11',
            'MI_ICON_MAPSYMB_12', 'MI_ICON_MAPSYMB_13', 'MI_ICON_MAPSYMB_14',
            'MI_ICON_MAPSYMB_15', 'MI_ICON_MAPSYMB_16', 'MI_ICON_MAPSYMB_17',
            'MI_ICON_MAPSYMB_18', 'MI_ICON_MAPSYMB_19', 'MI_ICON_MAPSYMB_2',
            'MI_ICON_MAPSYMB_20', 'MI_ICON_MAPSYMB_21', 'MI_ICON_MAPSYMB_22',
            'MI_ICON_MAPSYMB_23', 'MI_ICON_MAPSYMB_24', 'MI_ICON_MAPSYMB_25',
            'MI_ICON_MAPSYMB_26', 'MI_ICON_MAPSYMB_3', 'MI_ICON_MAPSYMB_4',
            'MI_ICON_MAPSYMB_5', 'MI_ICON_MAPSYMB_6', 'MI_ICON_MAPSYMB_7',
            'MI_ICON_MAPSYMB_8', 'MI_ICON_MAPSYMB_9', 'MI_ICON_MARITIME_1',
            'MI_ICON_MARITIME_10', 'MI_ICON_MARITIME_2', 'MI_ICON_MARITIME_3',
            'MI_ICON_MARITIME_4', 'MI_ICON_MARITIME_5', 'MI_ICON_MARITIME_6',
            'MI_ICON_MARITIME_7', 'MI_ICON_MARITIME_8', 'MI_ICON_MARITIME_9',
            'MI_ICON_MB_1', 'MI_ICON_MB_10', 'MI_ICON_MB_11', 'MI_ICON_MB_12',
            'MI_ICON_MB_13', 'MI_ICON_MB_14', 'MI_ICON_MB_2', 'MI_ICON_MB_3',
            'MI_ICON_MB_4', 'MI_ICON_MB_5', 'MI_ICON_MB_6', 'MI_ICON_MB_7',
            'MI_ICON_MB_8', 'MI_ICON_MB_9', 'MI_ICON_MISC_1',
            'MI_ICON_MISC_10', 'MI_ICON_MISC_11', 'MI_ICON_MISC_12',
            'MI_ICON_MISC_13', 'MI_ICON_MISC_14', 'MI_ICON_MISC_15',
            'MI_ICON_MISC_16', 'MI_ICON_MISC_17', 'MI_ICON_MISC_18',
            'MI_ICON_MISC_19', 'MI_ICON_MISC_2', 'MI_ICON_MISC_20',
            'MI_ICON_MISC_21', 'MI_ICON_MISC_22', 'MI_ICON_MISC_23',
            'MI_ICON_MISC_24', 'MI_ICON_MISC_25', 'MI_ICON_MISC_26',
            'MI_ICON_MISC_27', 'MI_ICON_MISC_28', 'MI_ICON_MISC_29',
            'MI_ICON_MISC_3', 'MI_ICON_MISC_30', 'MI_ICON_MISC_31',
            'MI_ICON_MISC_4', 'MI_ICON_MISC_5', 'MI_ICON_MISC_6',
            'MI_ICON_MISC_7', 'MI_ICON_MISC_8', 'MI_ICON_MISC_9',
            'MI_ICON_NEW_DOC', 'MI_ICON_NUMBERS_1', 'MI_ICON_NUMBERS_10',
            'MI_ICON_NUMBERS_11', 'MI_ICON_NUMBERS_12', 'MI_ICON_NUMBERS_13',
            'MI_ICON_NUMBERS_14', 'MI_ICON_NUMBERS_15', 'MI_ICON_NUMBERS_16',
            'MI_ICON_NUMBERS_17', 'MI_ICON_NUMBERS_18', 'MI_ICON_NUMBERS_19',
            'MI_ICON_NUMBERS_2', 'MI_ICON_NUMBERS_20', 'MI_ICON_NUMBERS_21',
            'MI_ICON_NUMBERS_22', 'MI_ICON_NUMBERS_23', 'MI_ICON_NUMBERS_24',
            'MI_ICON_NUMBERS_25', 'MI_ICON_NUMBERS_26', 'MI_ICON_NUMBERS_27',
            'MI_ICON_NUMBERS_28', 'MI_ICON_NUMBERS_29', 'MI_ICON_NUMBERS_3',
            'MI_ICON_NUMBERS_30', 'MI_ICON_NUMBERS_31', 'MI_ICON_NUMBERS_32',
            'MI_ICON_NUMBERS_4', 'MI_ICON_NUMBERS_5', 'MI_ICON_NUMBERS_6',
            'MI_ICON_NUMBERS_7', 'MI_ICON_NUMBERS_8', 'MI_ICON_NUMBERS_9',
            'MI_ICON_ODBC_DISCONNECT', 'MI_ICON_ODBC_MAPPABLE',
            'MI_ICON_ODBC_OPEN', 'MI_ICON_ODBC_REFRESH', 'MI_ICON_ODBC_SYMBOL',
            'MI_ICON_ODBC_UNLINK', 'MI_ICON_OPEN_FILE', 'MI_ICON_OPEN_WOR',
            'MI_ICON_OPENWFS', 'MI_ICON_OPENWMS', 'MI_ICON_PASTE',
            'MI_ICON_POLYGON', 'MI_ICON_POLYLINE', 'MI_ICON_PRINT',
            'MI_ICON_REALESTATE_1', 'MI_ICON_REALESTATE_10',
            'MI_ICON_REALESTATE_11', 'MI_ICON_REALESTATE_12',
            'MI_ICON_REALESTATE_13', 'MI_ICON_REALESTATE_14',
            'MI_ICON_REALESTATE_15', 'MI_ICON_REALESTATE_16',
            'MI_ICON_REALESTATE_17', 'MI_ICON_REALESTATE_18',
            'MI_ICON_REALESTATE_19', 'MI_ICON_REALESTATE_2',
            'MI_ICON_REALESTATE_20', 'MI_ICON_REALESTATE_21',
            'MI_ICON_REALESTATE_22', 'MI_ICON_REALESTATE_23',
            'MI_ICON_REALESTATE_3', 'MI_ICON_REALESTATE_4',
            'MI_ICON_REALESTATE_5', 'MI_ICON_REALESTATE_6',
            'MI_ICON_REALESTATE_7', 'MI_ICON_REALESTATE_8',
            'MI_ICON_REALESTATE_9', 'MI_ICON_RECT', 'MI_ICON_REGION_STYLE',
            'MI_ICON_RESHAPE', 'MI_ICON_ROUND_RECT', 'MI_ICON_RULER',
            'MI_ICON_RUN', 'MI_ICON_SAVE_FILE', 'MI_ICON_SAVE_WIN',
            'MI_ICON_SAVE_WOR', 'MI_ICON_SEARCH_BDY', 'MI_ICON_SEARCH_POLYGON',
            'MI_ICON_SEARCH_RADIUS', 'MI_ICON_SEARCH_RECT', 'MI_ICON_SIGNS_1',
            'MI_ICON_SIGNS_10', 'MI_ICON_SIGNS_11', 'MI_ICON_SIGNS_12',
            'MI_ICON_SIGNS_13', 'MI_ICON_SIGNS_14', 'MI_ICON_SIGNS_15',
            'MI_ICON_SIGNS_16', 'MI_ICON_SIGNS_17', 'MI_ICON_SIGNS_18',
            'MI_ICON_SIGNS_19', 'MI_ICON_SIGNS_2', 'MI_ICON_SIGNS_3',
            'MI_ICON_SIGNS_4', 'MI_ICON_SIGNS_5', 'MI_ICON_SIGNS_6',
            'MI_ICON_SIGNS_7', 'MI_ICON_SIGNS_8', 'MI_ICON_SIGNS_9',
            'MI_ICON_STATISTICS', 'MI_ICON_SYMBOL', 'MI_ICON_SYMBOL_STYLE',
            'MI_ICON_TEXT', 'MI_ICON_TEXT_STYLE', 'MI_ICON_TRANSPORT_1',
            'MI_ICON_TRANSPORT_10', 'MI_ICON_TRANSPORT_11',
            'MI_ICON_TRANSPORT_12', 'MI_ICON_TRANSPORT_13',
            'MI_ICON_TRANSPORT_14', 'MI_ICON_TRANSPORT_15',
            'MI_ICON_TRANSPORT_16', 'MI_ICON_TRANSPORT_17',
            'MI_ICON_TRANSPORT_18', 'MI_ICON_TRANSPORT_19',
            'MI_ICON_TRANSPORT_2', 'MI_ICON_TRANSPORT_20',
            'MI_ICON_TRANSPORT_21', 'MI_ICON_TRANSPORT_22',
            'MI_ICON_TRANSPORT_23', 'MI_ICON_TRANSPORT_24',
            'MI_ICON_TRANSPORT_25', 'MI_ICON_TRANSPORT_26',
            'MI_ICON_TRANSPORT_27', 'MI_ICON_TRANSPORT_3',
            'MI_ICON_TRANSPORT_4', 'MI_ICON_TRANSPORT_5',
            'MI_ICON_TRANSPORT_6', 'MI_ICON_TRANSPORT_7',
            'MI_ICON_TRANSPORT_8', 'MI_ICON_TRANSPORT_9', 'MI_ICON_UNDO',
            'MI_ICON_UNSELECT_ALL', 'MI_ICON_WINDOW_FRAME', 'MI_ICON_WRENCH',
            'MI_ICON_ZOOM_IN', 'MI_ICON_ZOOM_OUT', 'MI_ICON_ZOOM_QUESTION',
            'MI_ICONS_MAPS_1', 'MI_ICONS_MAPS_10', 'MI_ICONS_MAPS_11',
            'MI_ICONS_MAPS_12', 'MI_ICONS_MAPS_13', 'MI_ICONS_MAPS_14',
            'MI_ICONS_MAPS_15', 'MI_ICONS_MAPS_2', 'MI_ICONS_MAPS_3',
            'MI_ICONS_MAPS_4', 'MI_ICONS_MAPS_5', 'MI_ICONS_MAPS_6',
            'MI_ICONS_MAPS_7', 'MI_ICONS_MAPS_8', 'MI_ICONS_MAPS_9',
            'MIPLATFORM_HP', 'MIPLATFORM_MAC68K', 'MIPLATFORM_POWERMAC',
            'MIPLATFORM_SPECIAL', 'MIPLATFORM_SUN', 'MIPLATFORM_WIN16',
            'MIPLATFORM_WIN32', 'MODE_APPEND', 'MODE_BINARY', 'MODE_INPUT',
            'MODE_OUTPUT', 'MODE_RANDOM', 'OBJ_ARC', 'OBJ_ELLIPSE',
            'OBJ_FRAME', 'OBJ_GEO_ARCBEGANGLE', 'OBJ_GEO_ARCENDANGLE',
            'OBJ_GEO_CENTROID', 'OBJ_GEO_LINEBEGX', 'OBJ_GEO_LINEBEGY',
            'OBJ_GEO_LINEENDX', 'OBJ_GEO_LINEENDY', 'OBJ_GEO_MAXX',
            'OBJ_GEO_MAXY', 'OBJ_GEO_MINX', 'OBJ_GEO_MINY', 'OBJ_GEO_POINTM',
            'OBJ_GEO_POINTX', 'OBJ_GEO_POINTY', 'OBJ_GEO_POINTZ',
            'OBJ_GEO_ROUNDRADIUS', 'OBJ_GEO_TEXTANGLE', 'OBJ_GEO_TEXTLINEX',
            'OBJ_GEO_TEXTLINEY', 'OBJ_INFO_BRUSH', 'OBJ_INFO_FILLFRAME',
            'OBJ_INFO_FRAMETITLE', 'OBJ_INFO_FRAMEWIN', 'OBJ_INFO_HAS_M',
            'OBJ_INFO_HAS_Z', 'OBJ_INFO_MPOINT', 'OBJ_INFO_NONEMPTY',
            'OBJ_INFO_NPNTS', 'OBJ_INFO_NPOLYGONS', 'OBJ_INFO_PEN',
            'OBJ_INFO_PLINE', 'OBJ_INFO_REGION', 'OBJ_INFO_SMOOTH',
            'OBJ_INFO_SYMBOL', 'OBJ_INFO_TEXTARROW', 'OBJ_INFO_TEXTFONT',
            'OBJ_INFO_TEXTJUSTIFY', 'OBJ_INFO_TEXTSPACING',
            'OBJ_INFO_TEXTSTRING', 'OBJ_INFO_TYPE', 'OBJ_INFO_Z_UNIT',
            'OBJ_INFO_Z_UNIT_SET', 'OBJ_LINE', 'OBJ_PLINE', 'OBJ_POINT',
            'OBJ_RECT', 'OBJ_REGION', 'OBJ_ROUNDRECT', 'OBJ_TEXT',
            'OBJ_TYPE_ARC', 'OBJ_TYPE_COLLECTION', 'OBJ_TYPE_ELLIPSE',
            'OBJ_TYPE_FRAME', 'OBJ_TYPE_LINE', 'OBJ_TYPE_MPOINT',
            'OBJ_TYPE_PLINE', 'OBJ_TYPE_POINT', 'OBJ_TYPE_RECT',
            'OBJ_TYPE_REGION', 'OBJ_TYPE_ROUNDRECT', 'OBJ_TYPE_TEXT',
            'ORIENTATION_CUSTOM', 'ORIENTATION_LANDSCAPE',
            'ORIENTATION_PORTRAIT', 'PEN_COLOR', 'PEN_INDEX',
            'PEN_INTERLEAVED', 'PEN_PATTERN', 'PEN_WIDTH', 'PLATFORM_MAC',
            'PLATFORM_MOTIF', 'PLATFORM_SPECIAL', 'PLATFORM_WIN',
            'PLATFORM_X11', 'PLATFORM_XOL', 'PRISMMAP_INFO_BACKGROUND',
            'PRISMMAP_INFO_CAMERA_CLIP_FAR', 'PRISMMAP_INFO_CAMERA_CLIP_NEAR',
            'PRISMMAP_INFO_CAMERA_FOCAL_X', 'PRISMMAP_INFO_CAMERA_FOCAL_Y',
            'PRISMMAP_INFO_CAMERA_FOCAL_Z', 'PRISMMAP_INFO_CAMERA_VPN_1',
            'PRISMMAP_INFO_CAMERA_VPN_2', 'PRISMMAP_INFO_CAMERA_VPN_3',
            'PRISMMAP_INFO_CAMERA_VU_1', 'PRISMMAP_INFO_CAMERA_VU_2',
            'PRISMMAP_INFO_CAMERA_VU_3', 'PRISMMAP_INFO_CAMERA_X',
            'PRISMMAP_INFO_CAMERA_Y', 'PRISMMAP_INFO_CAMERA_Z',
            'PRISMMAP_INFO_INFOTIP_EXPR', 'PRISMMAP_INFO_LIGHT_COLOR',
            'PRISMMAP_INFO_LIGHT_X', 'PRISMMAP_INFO_LIGHT_Y',
            'PRISMMAP_INFO_LIGHT_Z', 'PRISMMAP_INFO_SCALE', 'RAD_2_DEG',
            'RASTER_CONTROL_POINT_X', 'RASTER_CONTROL_POINT_Y',
            'RASTER_TAB_INFO_ALPHA', 'RASTER_TAB_INFO_BITS_PER_PIXEL',
            'RASTER_TAB_INFO_BRIGHTNESS', 'RASTER_TAB_INFO_CONTRAST',
            'RASTER_TAB_INFO_DISPLAY_TRANSPARENT', 'RASTER_TAB_INFO_GREYSCALE',
            'RASTER_TAB_INFO_HEIGHT', 'RASTER_TAB_INFO_IMAGE_CLASS',
            'RASTER_TAB_INFO_IMAGE_NAME', 'RASTER_TAB_INFO_IMAGE_TYPE',
            'RASTER_TAB_INFO_NUM_CONTROL_POINTS',
            'RASTER_TAB_INFO_TRANSPARENT_COLOR', 'RASTER_TAB_INFO_WIDTH',
            'RED', 'REGION_INFO_IS_CLOCKWISE', 'SEARCH_INFO_ROW',
            'SEARCH_INFO_TABLE', 'SECONDS_PER_DAY', 'SEL_INFO_NROWS',
            'SEL_INFO_SELNAME', 'SEL_INFO_TABLENAME',
            'SESSION_INFO_AREA_UNITS', 'SESSION_INFO_COORDSYS_CLAUSE',
            'SESSION_INFO_DISTANCE_UNITS', 'SESSION_INFO_PAPER_UNITS',
            'SRV_COL_INFO_ALIAS', 'SRV_COL_INFO_NAME',
            'SRV_COL_INFO_PRECISION', 'SRV_COL_INFO_SCALE',
            'SRV_COL_INFO_STATUS', 'SRV_COL_INFO_TYPE', 'SRV_COL_INFO_VALUE',
            'SRV_COL_INFO_WIDTH', 'SRV_COL_TYPE_BIN_STRING',
            'SRV_COL_TYPE_CHAR', 'SRV_COL_TYPE_DATE', 'SRV_COL_TYPE_DECIMAL',
            'SRV_COL_TYPE_FIXED_LEN_STRING', 'SRV_COL_TYPE_FLOAT',
            'SRV_COL_TYPE_INTEGER', 'SRV_COL_TYPE_LOGICAL',
            'SRV_COL_TYPE_NONE', 'SRV_COL_TYPE_SMALLINT',
            'SRV_CONNECT_INFO_DB_NAME', 'SRV_CONNECT_INFO_DRIVER_NAME',
            'SRV_CONNECT_INFO_DS_NAME', 'SRV_CONNECT_INFO_QUOTE_CHAR',
            'SRV_CONNECT_INFO_SQL_USER_ID', 'SRV_DRV_DATA_SOURCE',
            'SRV_DRV_INFO_NAME', 'SRV_DRV_INFO_NAME_LIST', 'SRV_ERROR',
            'SRV_FETCH_FIRST', 'SRV_FETCH_LAST', 'SRV_FETCH_NEXT',
            'SRV_FETCH_PREV', 'SRV_INVALID_HANDLE', 'SRV_NEED_DATA',
            'SRV_NO_MORE_DATA', 'SRV_NULL_DATA', 'SRV_SUCCESS',
            'SRV_SUCCESS_WITH_INFO', 'SRV_TRUNCATED_DATA',
            'SRV_WM_HIST_NO_OVERWRITE', 'SRV_WM_HIST_NONE',
            'SRV_WM_HIST_OVERWRITE', 'STR_EQ', 'STR_GT', 'STR_LT',
            'STYLE_SAMPLE_SIZE_LARGE', 'STYLE_SAMPLE_SIZE_SMALL',
            'SWITCHING_INTO_MAPINFO', 'SWITCHING_OUT_OF_MAPINFO',
            'SYMBOL_ANGLE', 'SYMBOL_CODE', 'SYMBOL_COLOR',
            'SYMBOL_CUSTOM_NAME', 'SYMBOL_CUSTOM_STYLE', 'SYMBOL_FONT_NAME',
            'SYMBOL_FONT_STYLE', 'SYMBOL_KIND', 'SYMBOL_KIND_CUSTOM',
            'SYMBOL_KIND_FONT', 'SYMBOL_KIND_VECTOR', 'SYMBOL_POINTSIZE',
            'SYS_INFO_APPIDISPATCH', 'SYS_INFO_APPLICATIONWND',
            'SYS_INFO_APPVERSION', 'SYS_INFO_CHARSET',
            'SYS_INFO_COPYPROTECTED', 'SYS_INFO_DATE_FORMAT',
            'SYS_INFO_DDESTATUS', 'SYS_INFO_DIG_INSTALLED',
            'SYS_INFO_DIG_MODE', 'SYS_INFO_MAPINFOWND',
            'SYS_INFO_MDICLIENTWND', 'SYS_INFO_MIBUILD_NUMBER',
            'SYS_INFO_MIPLATFORM', 'SYS_INFO_MIVERSION',
            'SYS_INFO_NUMBER_FORMAT', 'SYS_INFO_PLATFORM',
            'SYS_INFO_PRODUCTLEVEL', 'SYS_INFO_RUNTIME',
            'TAB_GEO_CONTROL_POINT_X', 'TAB_GEO_CONTROL_POINT_Y',
            'TAB_INFO_BROWSER_LIST', 'TAB_INFO_COORDSYS_CLAUSE',
            'TAB_INFO_COORDSYS_CLAUSE_WITHOUT_BOUNDS',
            'TAB_INFO_COORDSYS_MAXX', 'TAB_INFO_COORDSYS_MAXY',
            'TAB_INFO_COORDSYS_MINX', 'TAB_INFO_COORDSYS_MINY',
            'TAB_INFO_COORDSYS_NAME', 'TAB_INFO_EDITED', 'TAB_INFO_FASTEDIT',
            'TAB_INFO_MAPPABLE', 'TAB_INFO_MAPPABLE_TABLE', 'TAB_INFO_MAXX',
            'TAB_INFO_MAXY', 'TAB_INFO_MINX', 'TAB_INFO_MINY', 'TAB_INFO_NAME',
            'TAB_INFO_NCOLS', 'TAB_INFO_NREFS', 'TAB_INFO_NROWS',
            'TAB_INFO_NUM', 'TAB_INFO_READONLY', 'TAB_INFO_SEAMLESS',
            'TAB_INFO_SUPPORT_MZ', 'TAB_INFO_TABFILE', 'TAB_INFO_TEMP',
            'TAB_INFO_THEME_METADATA', 'TAB_INFO_TYPE', 'TAB_INFO_UNDO',
            'TAB_INFO_USERBROWSE', 'TAB_INFO_USERCLOSE',
            'TAB_INFO_USERDISPLAYMAP', 'TAB_INFO_USEREDITABLE',
            'TAB_INFO_USERMAP', 'TAB_INFO_USERREMOVEMAP', 'TAB_INFO_Z_UNIT',
            'TAB_INFO_Z_UNIT_SET', 'TAB_TYPE_BASE', 'TAB_TYPE_FME',
            'TAB_TYPE_IMAGE', 'TAB_TYPE_LINKED', 'TAB_TYPE_RESULT',
            'TAB_TYPE_VIEW', 'TAB_TYPE_WFS', 'TAB_TYPE_WMS', 'TRUE', 'WHITE',
            'WIN_3DMAP', 'WIN_BROWSER', 'WIN_BUTTONPAD', 'WIN_CART_LEGEND',
            'WIN_GRAPH', 'WIN_HELP', 'WIN_INFO', 'WIN_INFO_AUTOSCROLL',
            'WIN_INFO_CLONEWINDOW', 'WIN_INFO_ENHANCED_RENDERING',
            'WIN_INFO_EXPORT_ANTIALIASING', 'WIN_INFO_EXPORT_BORDER',
            'WIN_INFO_EXPORT_DITHER', 'WIN_INFO_EXPORT_FILTER',
            'WIN_INFO_EXPORT_MASKSIZE', 'WIN_INFO_EXPORT_THRESHOLD',
            'WIN_INFO_EXPORT_TRANSPRASTER', 'WIN_INFO_EXPORT_TRANSPVECTOR',
            'WIN_INFO_EXPORT_TRUECOLOR', 'WIN_INFO_HEIGHT',
            'WIN_INFO_LEGENDS_MAP', 'WIN_INFO_NAME', 'WIN_INFO_OPEN',
            'WIN_INFO_PRINTER_BORDER', 'WIN_INFO_PRINTER_BOTTOMMARGIN',
            'WIN_INFO_PRINTER_COPIES', 'WIN_INFO_PRINTER_DITHER',
            'WIN_INFO_PRINTER_LEFTMARGIN', 'WIN_INFO_PRINTER_METHOD',
            'WIN_INFO_PRINTER_NAME', 'WIN_INFO_PRINTER_ORIENT',
            'WIN_INFO_PRINTER_PAPERSIZE', 'WIN_INFO_PRINTER_RIGHTMARGIN',
            'WIN_INFO_PRINTER_SCALE_PATTERNS', 'WIN_INFO_PRINTER_TOPMARGIN',
            'WIN_INFO_PRINTER_TRANSPRASTER', 'WIN_INFO_PRINTER_TRANSPVECTOR',
            'WIN_INFO_PRINTER_TRUECOLOR', 'WIN_INFO_SMARTPAN',
            'WIN_INFO_SMOOTH_IMAGE', 'WIN_INFO_SMOOTH_TEXT',
            'WIN_INFO_SMOOTH_VECTOR', 'WIN_INFO_SNAPMODE',
            'WIN_INFO_SNAPTHRESHOLD', 'WIN_INFO_STATE',
            'WIN_INFO_SYSMENUCLOSE', 'WIN_INFO_TABLE', 'WIN_INFO_TOPMOST',
            'WIN_INFO_TYPE', 'WIN_INFO_WIDTH', 'WIN_INFO_WINDOWID',
            'WIN_INFO_WND', 'WIN_INFO_WORKSPACE', 'WIN_INFO_X', 'WIN_INFO_Y',
            'WIN_LAYOUT', 'WIN_LEGEND', 'WIN_MAPBASIC', 'WIN_MAPINFO',
            'WIN_MAPPER', 'WIN_MESSAGE', 'WIN_PENPICKER',
            'WIN_PRINTER_LANDSCAPE', 'WIN_PRINTER_PORTRAIT', 'WIN_RULER',
            'WIN_STATE_MAXIMIZED', 'WIN_STATE_MINIMIZED', 'WIN_STATE_NORMAL',
            'WIN_STATISTICS', 'WIN_STYLE_CHILD', 'WIN_STYLE_POPUP',
            'WIN_STYLE_POPUP_FULLCAPTION', 'WIN_STYLE_STANDARD',
            'WIN_SYMBOLPICKER', 'WIN_TOOLBAR', 'WIN_TOOLPICKER', 'YELLOW'
            ),
        5 => array(
            'Abbrs', 'Above', 'Access', 'Active', 'Address', 'Advanced',
            'Affine', 'Align', 'Alpha', 'alpha_value', 'Always', 'Angle',
            'Animate', 'Antialiasing', 'Append', 'Apply', 'ApplyUpdates',
            'Arrow', 'Ascending', 'ASCII', 'At', 'AttributeData', 'Auto',
            'Autoflip', 'Autokey', 'Automatic', 'Autoscroll', 'Axis',
            'Background', 'Banding', 'Batch', 'Behind', 'Below', 'Bend',
            'Binary', 'Blocks', 'Border', 'BorderPen', 'Bottom', 'Bounds',
            'ByteOrder', 'ByVal', 'Calling', 'Camera', 'Candidates',
            'Cartesian', 'Cell', 'Center', 'Change', 'Char', 'Circle',
            'Clipping', 'CloseMatchesOnly', 'ClosestAddr', 'Color', 'Columns',
            'Contents', 'ControlPoints', 'Copies', 'Copyright', 'Counter',
            'Country', 'CountrySecondarySubdivision', 'CountrySubdivision',
            'Cross', 'CubicConvolution', 'Cull', 'Cursor', 'Custom', 'Data',
            'DBF', 'DDE', 'Decimal', 'DecimalPlaces', 'DefaultAmbientSpeed',
            'DefaultPropagationFactor', 'DeformatNumber', 'Delimiter',
            'Density', 'DenyWrite', 'Descending', 'Destroy', 'Device',
            'Dictionary', 'DInfo', 'Disable', 'DiscardUpdates', 'Display',
            'Dither', 'DrawMode', 'DropKey', 'Droplines', 'Duplicates',
            'Dynamic', 'Earth', 'East', 'EditLayerPopup', 'Elevation', 'Else',
            'ElseIf', 'Emf', 'Enable', 'Envinsa', 'ErrorDiffusion', 'Extents',
            'Fallback', 'FastEdit', 'FillFrame', 'Filter', 'First', 'Fit',
            'Fixed', 'FocalPoint', 'Footnote', 'Force', 'FromMapCatalog',
            'Front', 'Gap', 'Geographic', 'Geography', 'Graduated', 'Graphic',
            'Gutter', 'Half', 'Halftone', 'Handles', 'Height', 'Help',
            'HelpMsg', 'Hide', 'Hierarchical', 'HIGHLOW', 'History', 'Icon',
            'ID', 'Ignore', 'Image', 'Inflect', 'Inset', 'Inside',
            'Interactive', 'Internal', 'Interpolate', 'IntersectingStreet',
            'Justify', 'Key', 'Label', 'Labels', 'Landscape', 'Large', 'Last',
            'Layer', 'Left', 'Lib', 'Light', 'LinePen', 'Lines', 'Linestyle',
            'Longitude', 'LOWHIGH', 'Major', 'MajorPolygonOnly',
            'MajorRoadsOnly', 'MapBounds', 'MapMarker', 'MapString', 'Margins',
            'MarkMultiple', 'MaskSize', 'Match', 'MaxOffRoadDistance',
            'Message', 'MICODE', 'Minor', 'MixedCase', 'Mode', 'ModifierKeys',
            'Modify', 'Multiple', 'MultiPolygonRgns', 'Municipality',
            'MunicipalitySubdivision', 'Name', 'NATIVE', 'NearestNeighbor',
            'NoCollision', 'Node', 'Nodes', 'NoIndex', 'None', 'Nonearth',
            'NoRefresh', 'Normalized', 'North', 'Number', 'ObjectType', 'ODBC',
            'Off', 'OK', 'OLE', 'On', 'Options', 'Orientation', 'OtherBdy',
            'Output', 'Outside', 'Overlapped', 'Overwrite', 'Pagebreaks',
            'Pan', 'Papersize', 'Parent', 'PassThrough', 'Password',
            'Patterns', 'Per', 'Percent', 'Percentage', 'Permanent',
            'PersistentCache', 'Pie', 'Pitch', 'Placename', 'PointsOnly',
            'PolyObj', 'Portrait', 'Position', 'PostalCode', 'Prefer',
            'Preferences', 'Prev', 'Printer', 'Projection', 'PushButton',
            'Quantile', 'Query', 'Random', 'Range', 'Raster', 'Read',
            'ReadOnly', 'Rec', 'Redraw', 'Refine', 'Regionstyle', 'RemoveData',
            'Replace', 'Reprojection', 'Resampling', 'Restore', 'ResultCode',
            'ReturnHoles', 'Right', 'Roll', 'ROP', 'Rotated', 'Row', 'Ruler',
            'Scale', 'ScrollBars', 'Seamless', 'SecondaryPostalCode',
            'SelfInt', 'Separator', 'Series', 'Service', 'SetKey',
            'SetTraverse', 'Shades', 'Show', 'Simple', 'SimplificationFactor',
            'Size', 'Small', 'Smart', 'Smooth', 'South', 'Spacing',
            'SPATIALWARE', 'Spherical', 'Square', 'Stacked', 'Step', 'Store',
            'Street', 'StreetName', 'StreetNumber', 'StyleType', 'Subtitle',
            'SysMenuClose', 'Thin', 'Tick', 'Title', 'TitleAxisY',
            'TitleGroup', 'Titles', 'TitleSeries', 'ToggleButton', 'Tolerance',
            'ToolbarPosition', 'ToolButton', 'Toolkit', 'Top', 'Translucency',
            'translucency_percent', 'Transparency', 'Transparent', 'Traverse',
            'TrueColor', 'Uncheck', 'Undo', 'Union', 'Unit', 'Until', 'URL',
            'Use', 'User', 'UserBrowse', 'UserClose', 'UserDisplayMap',
            'UserEdit', 'UserMap', 'UserRemoveMap', 'Value', 'Variable',
            'Vary', 'Vector', 'Versioned', 'View', 'ViewDisplayPopup',
            'VisibleOnly', 'VMDefault', 'VMGrid', 'VMRaster', 'Voronoi',
            'Warnings', 'Wedge', 'West', 'Width', 'With', 'XY', 'XYINDEX',
            'Yaw', 'Zoom'
            )
        ),
    'SYMBOLS' => array(
            //Numeric/String Operators + Comparison Operators
            '(', ')', '[', ']', '+', '-', '*', '/', '\\', '^', '&',
            '=', '<', '>'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        4 => false,
        5 => true
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #0000ff;',        //Statements + Clauses + Data Types + Logical Operators, Geographical Operators + SQL
            2 => 'color: #2391af;',        //Special Procedures
            3 => 'color: #2391af;',        //Functions
            4 => 'color: #c635cb;',        //Constants
            5 => 'color: #0000ff;'         //Extended keywords (case sensitive)
            ),
        'COMMENTS' => array(
            1 => 'color: #008000;',
            'MULTI' => 'color: #008000;'
            ),
        'BRACKETS' => array(
            0 => 'color: #000000;'
            ),
        'STRINGS' => array(
            0 => 'color: #a31515;'
            ),
        'NUMBERS' => array(
            0 => 'color: #000000;'
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #000000;'
            ),
        'ESCAPE_CHAR' => array(
            ),
        'SCRIPT' => array(
            ),
        'REGEXPS' => array(
            0 => 'color: #12198b;',            //Table Attributes
            1 => 'color: #2391af;'             //Data Types
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => '',
        4 => '',
        5 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
            //Table Attribute
            0 => "[\\.]{1}[a-zA-Z0-9_]+",
            //Data Type
            1 => "(?xi) \\s+ as \\s+ (Alias|Brush|Date|Float|Font|Integer|Logical|Object|Pen|SmallInt|String|Symbol)"
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
);

?>
