<?php
/*************************************************************************************
 * autoit.php
 * --------
 * Author: big_daddy (robert.i.anthony@gmail.com)
 * Copyright: (c) 2006 and to GESHi ;)
 * Release Version: 1.0.8.11
 * Date Started: 2006/01/26
 *
 * AutoIT language file for GeSHi.
 *
 * CHANGES
 * -------
 * Release 1.0.8.1 (2008/09/15)
 * - Updated on 22.03.2008 By Tlem (tlem@tuxolem.fr)
 * - The link on functions will now correctly re-direct to
 * - http://www.autoitscript.com/autoit3/docs/functions/{FNAME}.htm
 * - Updated whith au3.api (09.02.2008).
 * - Updated - 16 Mai 2008 - v3.2.12.0
 * - Updated - 12 June 2008 - v3.2.12.1
 * Release 1.0.7.20 (2006/01/26)
 * - First Release
 *
 * Current bugs & todo:
 * ----------
 * - not sure how to get sendkeys to work " {!}, {SPACE} etc... "
 * - just copyied the regexp for variable from php so this HAVE to be checked and fixed to a better one ;)
 *
 * Reference: http://www.autoitscript.com/autoit3/docs/
 *************************************************************************************
 *
 *     This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License,
or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not,
write to the Free Software
 *   Foundation,
Inc.,
59 Temple Place,
Suite 330,
Boston,
MA  02111-1307  USA
 *
 ************************************************************************************/

$language_data = array (
    'LANG_NAME' => 'AutoIt',
    'COMMENT_SINGLE' => array(';'),
    'COMMENT_MULTI' => array(
        '#comments-start' => '#comments-end',
        '#cs' => '#ce'),
    'COMMENT_REGEXP' => array(
        0 => '/(?<!#)#(\s.*)?$/m',
        1 => '/(?<=include)\s+<.*?>/'
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        1 => array(
            'And','ByRef','Case','Const','ContinueCase','ContinueLoop',
            'Default','Dim','Do','Else','ElseIf','EndFunc','EndIf','EndSelect',
            'EndSwitch','EndWith','Enum','Exit','ExitLoop','False','For','Func',
            'Global','If','In','Local','Next','Not','Or','ReDim','Return',
            'Select','Step','Switch','Then','To','True','Until','WEnd','While',
            'With'
            ),
        2 => array(
            '@AppDataCommonDir','@AppDataDir','@AutoItExe','@AutoItPID',
            '@AutoItUnicode','@AutoItVersion','@AutoItX64','@COM_EventObj',
            '@CommonFilesDir','@Compiled','@ComputerName','@ComSpec','@CR',
            '@CRLF','@DesktopCommonDir','@DesktopDepth','@DesktopDir',
            '@DesktopHeight','@DesktopRefresh','@DesktopWidth',
            '@DocumentsCommonDir','@error','@exitCode','@exitMethod',
            '@extended','@FavoritesCommonDir','@FavoritesDir','@GUI_CtrlHandle',
            '@GUI_CtrlId','@GUI_DragFile','@GUI_DragId','@GUI_DropId',
            '@GUI_WinHandle','@HomeDrive','@HomePath','@HomeShare',
            '@HotKeyPressed','@HOUR','@InetGetActive','@InetGetBytesRead',
            '@IPAddress1','@IPAddress2','@IPAddress3','@IPAddress4','@KBLayout',
            '@LF','@LogonDNSDomain','@LogonDomain','@LogonServer','@MDAY',
            '@MIN','@MON','@MyDocumentsDir','@NumParams','@OSBuild','@OSLang',
            '@OSServicePack','@OSTYPE','@OSVersion','@ProcessorArch',
            '@ProgramFilesDir','@ProgramsCommonDir','@ProgramsDir','@ScriptDir',
            '@ScriptFullPath','@ScriptLineNumber','@ScriptName','@SEC',
            '@StartMenuCommonDir','@StartMenuDir','@StartupCommonDir',
            '@StartupDir','@SW_DISABLE','@SW_ENABLE','@SW_HIDE','@SW_LOCK',
            '@SW_MAXIMIZE','@SW_MINIMIZE','@SW_RESTORE','@SW_SHOW',
            '@SW_SHOWDEFAULT','@SW_SHOWMAXIMIZED','@SW_SHOWMINIMIZED',
            '@SW_SHOWMINNOACTIVE','@SW_SHOWNA','@SW_SHOWNOACTIVATE',
            '@SW_SHOWNORMAL','@SW_UNLOCK','@SystemDir','@TAB','@TempDir',
            '@TRAY_ID','@TrayIconFlashing','@TrayIconVisible','@UserName',
            '@UserProfileDir','@WDAY','@WindowsDir','@WorkingDir','@YDAY',
            '@YEAR'
            ),
        3 => array(
            'Abs','ACos','AdlibDisable','AdlibEnable','Asc','AscW','ASin',
            'Assign','ATan','AutoItSetOption','AutoItWinGetTitle',
            'AutoItWinSetTitle','Beep','Binary','BinaryLen','BinaryMid',
            'BinaryToString','BitAND','BitNOT','BitOR','BitRotate','BitShift',
            'BitXOR','BlockInput','Break','Call','CDTray','Ceiling','Chr',
            'ChrW','ClipGet','ClipPut','ConsoleRead','ConsoleWrite',
            'ConsoleWriteError','ControlClick','ControlCommand',
            'ControlDisable','ControlEnable','ControlFocus','ControlGetFocus',
            'ControlGetHandle','ControlGetPos','ControlGetText','ControlHide',
            'ControlListView','ControlMove','ControlSend','ControlSetText',
            'ControlShow','ControlTreeView','Cos','Dec','DirCopy','DirCreate',
            'DirGetSize','DirMove','DirRemove','DllCall','DllCallbackFree',
            'DllCallbackGetPtr','DllCallbackRegister','DllClose','DllOpen',
            'DllStructCreate','DllStructGetData','DllStructGetPtr',
            'DllStructGetSize','DllStructSetData','DriveGetDrive',
            'DriveGetFileSystem','DriveGetLabel','DriveGetSerial',
            'DriveGetType','DriveMapAdd','DriveMapDel','DriveMapGet',
            'DriveSetLabel','DriveSpaceFree','DriveSpaceTotal','DriveStatus',
            'EnvGet','EnvSet','EnvUpdate','Eval','Execute','Exp',
            'FileChangeDir','FileClose','FileCopy','FileCreateNTFSLink',
            'FileCreateShortcut','FileDelete','FileExists','FileFindFirstFile',
            'FileFindNextFile','FileGetAttrib','FileGetLongName',
            'FileGetShortcut','FileGetShortName','FileGetSize','FileGetTime',
            'FileGetVersion','FileInstall','FileMove','FileOpen',
            'FileOpenDialog','FileRead','FileReadLine','FileRecycle',
            'FileRecycleEmpty','FileSaveDialog','FileSelectFolder',
            'FileSetAttrib','FileSetTime','FileWrite','FileWriteLine','Floor',
            'FtpSetProxy','GUICreate','GUICtrlCreateAvi','GUICtrlCreateButton',
            'GUICtrlCreateCheckbox','GUICtrlCreateCombo',
            'GUICtrlCreateContextMenu','GUICtrlCreateDate','GUICtrlCreateDummy',
            'GUICtrlCreateEdit','GUICtrlCreateGraphic','GUICtrlCreateGroup',
            'GUICtrlCreateIcon','GUICtrlCreateInput','GUICtrlCreateLabel',
            'GUICtrlCreateList','GUICtrlCreateListView',
            'GUICtrlCreateListViewItem','GUICtrlCreateMenu',
            'GUICtrlCreateMenuItem','GUICtrlCreateMonthCal','GUICtrlCreateObj',
            'GUICtrlCreatePic','GUICtrlCreateProgress','GUICtrlCreateRadio',
            'GUICtrlCreateSlider','GUICtrlCreateTab','GUICtrlCreateTabItem',
            'GUICtrlCreateTreeView','GUICtrlCreateTreeViewItem',
            'GUICtrlCreateUpdown','GUICtrlDelete','GUICtrlGetHandle',
            'GUICtrlGetState','GUICtrlRead','GUICtrlRecvMsg',
            'GUICtrlRegisterListViewSort','GUICtrlSendMsg','GUICtrlSendToDummy',
            'GUICtrlSetBkColor','GUICtrlSetColor','GUICtrlSetCursor',
            'GUICtrlSetData','GUICtrlSetFont','GUICtrlSetDefColor',
            'GUICtrlSetDefBkColor','GUICtrlSetGraphic','GUICtrlSetImage',
            'GUICtrlSetLimit','GUICtrlSetOnEvent','GUICtrlSetPos',
            'GUICtrlSetResizing','GUICtrlSetState','GUICtrlSetStyle',
            'GUICtrlSetTip','GUIDelete','GUIGetCursorInfo','GUIGetMsg',
            'GUIGetStyle','GUIRegisterMsg','GUISetAccelerators()',
            'GUISetBkColor','GUISetCoord','GUISetCursor','GUISetFont',
            'GUISetHelp','GUISetIcon','GUISetOnEvent','GUISetState',
            'GUISetStyle','GUIStartGroup','GUISwitch','Hex','HotKeySet',
            'HttpSetProxy','HWnd','InetGet','InetGetSize','IniDelete','IniRead',
            'IniReadSection','IniReadSectionNames','IniRenameSection',
            'IniWrite','IniWriteSection','InputBox','Int','IsAdmin','IsArray',
            'IsBinary','IsBool','IsDeclared','IsDllStruct','IsFloat','IsHWnd',
            'IsInt','IsKeyword','IsNumber','IsObj','IsPtr','IsString','Log',
            'MemGetStats','Mod','MouseClick','MouseClickDrag','MouseDown',
            'MouseGetCursor','MouseGetPos','MouseMove','MouseUp','MouseWheel',
            'MsgBox','Number','ObjCreate','ObjEvent','ObjGet','ObjName','Opt',
            'Ping','PixelChecksum','PixelGetColor','PixelSearch','PluginClose',
            'PluginOpen','ProcessClose','ProcessExists','ProcessGetStats',
            'ProcessList','ProcessSetPriority','ProcessWait','ProcessWaitClose',
            'ProgressOff','ProgressOn','ProgressSet','Ptr','Random','RegDelete',
            'RegEnumKey','RegEnumVal','RegRead','RegWrite','Round','Run',
            'RunAs','RunAsWait','RunWait','Send','SendKeepActive','SetError',
            'SetExtended','ShellExecute','ShellExecuteWait','Shutdown','Sin',
            'Sleep','SoundPlay','SoundSetWaveVolume','SplashImageOn',
            'SplashOff','SplashTextOn','Sqrt','SRandom','StatusbarGetText',
            'StderrRead','StdinWrite','StdioClose','StdoutRead','String',
            'StringAddCR','StringCompare','StringFormat','StringInStr',
            'StringIsAlNum','StringIsAlpha','StringIsASCII','StringIsDigit',
            'StringIsFloat','StringIsInt','StringIsLower','StringIsSpace',
            'StringIsUpper','StringIsXDigit','StringLeft','StringLen',
            'StringLower','StringMid','StringRegExp','StringRegExpReplace',
            'StringReplace','StringRight','StringSplit','StringStripCR',
            'StringStripWS','StringToBinary','StringTrimLeft','StringTrimRight',
            'StringUpper','Tan','TCPAccept','TCPCloseSocket','TCPConnect',
            'TCPListen','TCPNameToIP','TCPRecv','TCPSend','TCPShutdown',
            'TCPStartup','TimerDiff','TimerInit','ToolTip','TrayCreateItem',
            'TrayCreateMenu','TrayGetMsg','TrayItemDelete','TrayItemGetHandle',
            'TrayItemGetState','TrayItemGetText','TrayItemSetOnEvent',
            'TrayItemSetState','TrayItemSetText','TraySetClick','TraySetIcon',
            'TraySetOnEvent','TraySetPauseIcon','TraySetState','TraySetToolTip',
            'TrayTip','UBound','UDPBind','UDPCloseSocket','UDPOpen','UDPRecv',
            'UDPSend','UDPShutdown','UDPStartup','VarGetType','WinActivate',
            'WinActive','WinClose','WinExists','WinFlash','WinGetCaretPos',
            'WinGetClassList','WinGetClientSize','WinGetHandle','WinGetPos',
            'WinGetProcess','WinGetState','WinGetText','WinGetTitle','WinKill',
            'WinList','WinMenuSelectItem','WinMinimizeAll','WinMinimizeAllUndo',
            'WinMove','WinSetOnTop','WinSetState','WinSetTitle','WinSetTrans',
            'WinWait','WinWaitActive','WinWaitClose','WinWaitNotActive'
            ),
        4 => array(
            'ArrayAdd','ArrayBinarySearch','ArrayConcatenate','ArrayDelete',
            'ArrayDisplay','ArrayFindAll','ArrayInsert','ArrayMax',
            'ArrayMaxIndex','ArrayMin','ArrayMinIndex','ArrayPop','ArrayPush',
            'ArrayReverse','ArraySearch','ArraySort','ArraySwap','ArrayToClip',
            'ArrayToString','ArrayTrim','ChooseColor','ChooseFont',
            'ClipBoard_ChangeChain','ClipBoard_Close','ClipBoard_CountFormats',
            'ClipBoard_Empty','ClipBoard_EnumFormats','ClipBoard_FormatStr',
            'ClipBoard_GetData','ClipBoard_GetDataEx','ClipBoard_GetFormatName',
            'ClipBoard_GetOpenWindow','ClipBoard_GetOwner',
            'ClipBoard_GetPriorityFormat','ClipBoard_GetSequenceNumber',
            'ClipBoard_GetViewer','ClipBoard_IsFormatAvailable',
            'ClipBoard_Open','ClipBoard_RegisterFormat','ClipBoard_SetData',
            'ClipBoard_SetDataEx','ClipBoard_SetViewer','ClipPutFile',
            'ColorConvertHSLtoRGB','ColorConvertRGBtoHSL','ColorGetBlue',
            'ColorGetGreen','ColorGetRed','Date_Time_CompareFileTime',
            'Date_Time_DOSDateTimeToArray','Date_Time_DOSDateTimeToFileTime',
            'Date_Time_DOSDateTimeToStr','Date_Time_DOSDateToArray',
            'Date_Time_DOSDateToStr','Date_Time_DOSTimeToArray',
            'Date_Time_DOSTimeToStr','Date_Time_EncodeFileTime',
            'Date_Time_EncodeSystemTime','Date_Time_FileTimeToArray',
            'Date_Time_FileTimeToDOSDateTime',
            'Date_Time_FileTimeToLocalFileTime','Date_Time_FileTimeToStr',
            'Date_Time_FileTimeToSystemTime','Date_Time_GetFileTime',
            'Date_Time_GetLocalTime','Date_Time_GetSystemTime',
            'Date_Time_GetSystemTimeAdjustment',
            'Date_Time_GetSystemTimeAsFileTime',
            'Date_Time_GetSystemTimes','Date_Time_GetTickCount',
            'Date_Time_GetTimeZoneInformation',
            'Date_Time_LocalFileTimeToFileTime','Date_Time_SetFileTime',
            'Date_Time_SetLocalTime','Date_Time_SetSystemTime',
            'Date_Time_SetSystemTimeAdjustment',
            'Date_Time_SetTimeZoneInformation','Date_Time_SystemTimeToArray',
            'Date_Time_SystemTimeToDateStr','Date_Time_SystemTimeToDateTimeStr',
            'Date_Time_SystemTimeToFileTime','Date_Time_SystemTimeToTimeStr',
            'Date_Time_SystemTimeToTzSpecificLocalTime',
            'Date_Time_TzSpecificLocalTimeToSystemTime','DateAdd',
            'DateDayOfWeek','DateDaysInMonth','DateDiff','DateIsLeapYear',
            'DateIsValid','DateTimeFormat','DateTimeSplit','DateToDayOfWeek',
            'DateToDayOfWeekISO','DateToDayValue','DateToMonth',
            'DayValueToDate','DebugBugReportEnv','DebugOut','DebugSetup',
            'Degree','EventLog__Backup','EventLog__Clear','EventLog__Close',
            'EventLog__Count','EventLog__DeregisterSource','EventLog__Full',
            'EventLog__Notify','EventLog__Oldest','EventLog__Open',
            'EventLog__OpenBackup','EventLog__Read','EventLog__RegisterSource',
            'EventLog__Report','FileCountLines','FileCreate','FileListToArray',
            'FilePrint','FileReadToArray','FileWriteFromArray',
            'FileWriteLog','FileWriteToLine','GDIPlus_ArrowCapCreate',
            'GDIPlus_ArrowCapDispose','GDIPlus_ArrowCapGetFillState',
            'GDIPlus_ArrowCapGetHeight','GDIPlus_ArrowCapGetMiddleInset',
            'GDIPlus_ArrowCapGetWidth','GDIPlus_ArrowCapSetFillState',
            'GDIPlus_ArrowCapSetHeight','GDIPlus_ArrowCapSetMiddleInset',
            'GDIPlus_ArrowCapSetWidth','GDIPlus_BitmapCloneArea',
            'GDIPlus_BitmapCreateFromFile','GDIPlus_BitmapCreateFromGraphics',
            'GDIPlus_BitmapCreateFromHBITMAP',
            'GDIPlus_BitmapCreateHBITMAPFromBitmap','GDIPlus_BitmapDispose',
            'GDIPlus_BitmapLockBits','GDIPlus_BitmapUnlockBits',
            'GDIPlus_BrushClone','GDIPlus_BrushCreateSolid',
            'GDIPlus_BrushDispose','GDIPlus_BrushGetType',
            'GDIPlus_CustomLineCapDispose','GDIPlus_Decoders',
            'GDIPlus_DecodersGetCount','GDIPlus_DecodersGetSize',
            'GDIPlus_Encoders','GDIPlus_EncodersGetCLSID',
            'GDIPlus_EncodersGetCount','GDIPlus_EncodersGetParamList',
            'GDIPlus_EncodersGetParamListSize','GDIPlus_EncodersGetSize',
            'GDIPlus_FontCreate','GDIPlus_FontDispose',
            'GDIPlus_FontFamilyCreate','GDIPlus_FontFamilyDispose',
            'GDIPlus_GraphicsClear','GDIPlus_GraphicsCreateFromHDC',
            'GDIPlus_GraphicsCreateFromHWND','GDIPlus_GraphicsDispose',
            'GDIPlus_GraphicsDrawArc','GDIPlus_GraphicsDrawBezier',
            'GDIPlus_GraphicsDrawClosedCurve','GDIPlus_GraphicsDrawCurve',
            'GDIPlus_GraphicsDrawEllipse','GDIPlus_GraphicsDrawImage',
            'GDIPlus_GraphicsDrawImageRect','GDIPlus_GraphicsDrawImageRectRect',
            'GDIPlus_GraphicsDrawLine','GDIPlus_GraphicsDrawPie',
            'GDIPlus_GraphicsDrawPolygon','GDIPlus_GraphicsDrawRect',
            'GDIPlus_GraphicsDrawString','GDIPlus_GraphicsDrawStringEx',
            'GDIPlus_GraphicsFillClosedCurve','GDIPlus_GraphicsFillEllipse',
            'GDIPlus_GraphicsFillPie','GDIPlus_GraphicsFillRect',
            'GDIPlus_GraphicsGetDC','GDIPlus_GraphicsGetSmoothingMode',
            'GDIPlus_GraphicsMeasureString','GDIPlus_GraphicsReleaseDC',
            'GDIPlus_GraphicsSetSmoothingMode','GDIPlus_GraphicsSetTransform',
            'GDIPlus_ImageDispose','GDIPlus_ImageGetGraphicsContext',
            'GDIPlus_ImageGetHeight','GDIPlus_ImageGetWidth',
            'GDIPlus_ImageLoadFromFile','GDIPlus_ImageSaveToFile',
            'GDIPlus_ImageSaveToFileEx','GDIPlus_MatrixCreate',
            'GDIPlus_MatrixDispose','GDIPlus_MatrixRotate','GDIPlus_ParamAdd',
            'GDIPlus_ParamInit','GDIPlus_PenCreate','GDIPlus_PenDispose',
            'GDIPlus_PenGetAlignment','GDIPlus_PenGetColor',
            'GDIPlus_PenGetCustomEndCap','GDIPlus_PenGetDashCap',
            'GDIPlus_PenGetDashStyle','GDIPlus_PenGetEndCap',
            'GDIPlus_PenGetWidth','GDIPlus_PenSetAlignment',
            'GDIPlus_PenSetColor','GDIPlus_PenSetCustomEndCap',
            'GDIPlus_PenSetDashCap','GDIPlus_PenSetDashStyle',
            'GDIPlus_PenSetEndCap','GDIPlus_PenSetWidth','GDIPlus_RectFCreate',
            'GDIPlus_Shutdown','GDIPlus_Startup','GDIPlus_StringFormatCreate',
            'GDIPlus_StringFormatDispose','GetIP','GUICtrlAVI_Close',
            'GUICtrlAVI_Create','GUICtrlAVI_Destroy','GUICtrlAVI_Open',
            'GUICtrlAVI_OpenEx','GUICtrlAVI_Play','GUICtrlAVI_Seek',
            'GUICtrlAVI_Show','GUICtrlAVI_Stop','GUICtrlButton_Click',
            'GUICtrlButton_Create','GUICtrlButton_Destroy',
            'GUICtrlButton_Enable','GUICtrlButton_GetCheck',
            'GUICtrlButton_GetFocus','GUICtrlButton_GetIdealSize',
            'GUICtrlButton_GetImage','GUICtrlButton_GetImageList',
            'GUICtrlButton_GetState','GUICtrlButton_GetText',
            'GUICtrlButton_GetTextMargin','GUICtrlButton_SetCheck',
            'GUICtrlButton_SetFocus','GUICtrlButton_SetImage',
            'GUICtrlButton_SetImageList','GUICtrlButton_SetSize',
            'GUICtrlButton_SetState','GUICtrlButton_SetStyle',
            'GUICtrlButton_SetText','GUICtrlButton_SetTextMargin',
            'GUICtrlButton_Show','GUICtrlComboBox_AddDir',
            'GUICtrlComboBox_AddString','GUICtrlComboBox_AutoComplete',
            'GUICtrlComboBox_BeginUpdate','GUICtrlComboBox_Create',
            'GUICtrlComboBox_DeleteString','GUICtrlComboBox_Destroy',
            'GUICtrlComboBox_EndUpdate','GUICtrlComboBox_FindString',
            'GUICtrlComboBox_FindStringExact','GUICtrlComboBox_GetComboBoxInfo',
            'GUICtrlComboBox_GetCount','GUICtrlComboBox_GetCurSel',
            'GUICtrlComboBox_GetDroppedControlRect',
            'GUICtrlComboBox_GetDroppedControlRectEx',
            'GUICtrlComboBox_GetDroppedState','GUICtrlComboBox_GetDroppedWidth',
            'GUICtrlComboBox_GetEditSel','GUICtrlComboBox_GetEditText',
            'GUICtrlComboBox_GetExtendedUI',
            'GUICtrlComboBox_GetHorizontalExtent',
            'GUICtrlComboBox_GetItemHeight','GUICtrlComboBox_GetLBText',
            'GUICtrlComboBox_GetLBTextLen','GUICtrlComboBox_GetList',
            'GUICtrlComboBox_GetListArray','GUICtrlComboBox_GetLocale',
            'GUICtrlComboBox_GetLocaleCountry','GUICtrlComboBox_GetLocaleLang',
            'GUICtrlComboBox_GetLocalePrimLang',
            'GUICtrlComboBox_GetLocaleSubLang','GUICtrlComboBox_GetMinVisible',
            'GUICtrlComboBox_GetTopIndex','GUICtrlComboBox_InitStorage',
            'GUICtrlComboBox_InsertString','GUICtrlComboBox_LimitText',
            'GUICtrlComboBox_ReplaceEditSel','GUICtrlComboBox_ResetContent',
            'GUICtrlComboBox_SelectString','GUICtrlComboBox_SetCurSel',
            'GUICtrlComboBox_SetDroppedWidth','GUICtrlComboBox_SetEditSel',
            'GUICtrlComboBox_SetEditText','GUICtrlComboBox_SetExtendedUI',
            'GUICtrlComboBox_SetHorizontalExtent',
            'GUICtrlComboBox_SetItemHeight','GUICtrlComboBox_SetMinVisible',
            'GUICtrlComboBox_SetTopIndex','GUICtrlComboBox_ShowDropDown',
            'GUICtrlComboBoxEx_AddDir','GUICtrlComboBoxEx_AddString',
            'GUICtrlComboBoxEx_BeginUpdate','GUICtrlComboBoxEx_Create',
            'GUICtrlComboBoxEx_CreateSolidBitMap',
            'GUICtrlComboBoxEx_DeleteString','GUICtrlComboBoxEx_Destroy',
            'GUICtrlComboBoxEx_EndUpdate','GUICtrlComboBoxEx_FindStringExact',
            'GUICtrlComboBoxEx_GetComboBoxInfo',
            'GUICtrlComboBoxEx_GetComboControl','GUICtrlComboBoxEx_GetCount',
            'GUICtrlComboBoxEx_GetCurSel',
            'GUICtrlComboBoxEx_GetDroppedControlRect',
            'GUICtrlComboBoxEx_GetDroppedControlRectEx',
            'GUICtrlComboBoxEx_GetDroppedState',
            'GUICtrlComboBoxEx_GetDroppedWidth',
            'GUICtrlComboBoxEx_GetEditControl','GUICtrlComboBoxEx_GetEditSel',
            'GUICtrlComboBoxEx_GetEditText',
            'GUICtrlComboBoxEx_GetExtendedStyle',
            'GUICtrlComboBoxEx_GetExtendedUI','GUICtrlComboBoxEx_GetImageList',
            'GUICtrlComboBoxEx_GetItem','GUICtrlComboBoxEx_GetItemEx',
            'GUICtrlComboBoxEx_GetItemHeight','GUICtrlComboBoxEx_GetItemImage',
            'GUICtrlComboBoxEx_GetItemIndent',
            'GUICtrlComboBoxEx_GetItemOverlayImage',
            'GUICtrlComboBoxEx_GetItemParam',
            'GUICtrlComboBoxEx_GetItemSelectedImage',
            'GUICtrlComboBoxEx_GetItemText','GUICtrlComboBoxEx_GetItemTextLen',
            'GUICtrlComboBoxEx_GetList','GUICtrlComboBoxEx_GetListArray',
            'GUICtrlComboBoxEx_GetLocale','GUICtrlComboBoxEx_GetLocaleCountry',
            'GUICtrlComboBoxEx_GetLocaleLang',
            'GUICtrlComboBoxEx_GetLocalePrimLang',
            'GUICtrlComboBoxEx_GetLocaleSubLang',
            'GUICtrlComboBoxEx_GetMinVisible','GUICtrlComboBoxEx_GetTopIndex',
            'GUICtrlComboBoxEx_InitStorage','GUICtrlComboBoxEx_InsertString',
            'GUICtrlComboBoxEx_LimitText','GUICtrlComboBoxEx_ReplaceEditSel',
            'GUICtrlComboBoxEx_ResetContent','GUICtrlComboBoxEx_SetCurSel',
            'GUICtrlComboBoxEx_SetDroppedWidth','GUICtrlComboBoxEx_SetEditSel',
            'GUICtrlComboBoxEx_SetEditText',
            'GUICtrlComboBoxEx_SetExtendedStyle',
            'GUICtrlComboBoxEx_SetExtendedUI','GUICtrlComboBoxEx_SetImageList',
            'GUICtrlComboBoxEx_SetItem','GUICtrlComboBoxEx_SetItemEx',
            'GUICtrlComboBoxEx_SetItemHeight','GUICtrlComboBoxEx_SetItemImage',
            'GUICtrlComboBoxEx_SetItemIndent',
            'GUICtrlComboBoxEx_SetItemOverlayImage',
            'GUICtrlComboBoxEx_SetItemParam',
            'GUICtrlComboBoxEx_SetItemSelectedImage',
            'GUICtrlComboBoxEx_SetMinVisible','GUICtrlComboBoxEx_SetTopIndex',
            'GUICtrlComboBoxEx_ShowDropDown','GUICtrlDTP_Create',
            'GUICtrlDTP_Destroy','GUICtrlDTP_GetMCColor','GUICtrlDTP_GetMCFont',
            'GUICtrlDTP_GetMonthCal','GUICtrlDTP_GetRange',
            'GUICtrlDTP_GetRangeEx','GUICtrlDTP_GetSystemTime',
            'GUICtrlDTP_GetSystemTimeEx','GUICtrlDTP_SetFormat',
            'GUICtrlDTP_SetMCColor','GUICtrlDTP_SetMCFont',
            'GUICtrlDTP_SetRange','GUICtrlDTP_SetRangeEx',
            'GUICtrlDTP_SetSystemTime','GUICtrlDTP_SetSystemTimeEx',
            'GUICtrlEdit_AppendText','GUICtrlEdit_BeginUpdate',
            'GUICtrlEdit_CanUndo','GUICtrlEdit_CharFromPos',
            'GUICtrlEdit_Create','GUICtrlEdit_Destroy',
            'GUICtrlEdit_EmptyUndoBuffer','GUICtrlEdit_EndUpdate',
            'GUICtrlEdit_Find','GUICtrlEdit_FmtLines',
            'GUICtrlEdit_GetFirstVisibleLine','GUICtrlEdit_GetLimitText',
            'GUICtrlEdit_GetLine','GUICtrlEdit_GetLineCount',
            'GUICtrlEdit_GetMargins','GUICtrlEdit_GetModify',
            'GUICtrlEdit_GetPasswordChar','GUICtrlEdit_GetRECT',
            'GUICtrlEdit_GetRECTEx','GUICtrlEdit_GetSel','GUICtrlEdit_GetText',
            'GUICtrlEdit_GetTextLen','GUICtrlEdit_HideBalloonTip',
            'GUICtrlEdit_InsertText','GUICtrlEdit_LineFromChar',
            'GUICtrlEdit_LineIndex','GUICtrlEdit_LineLength',
            'GUICtrlEdit_LineScroll','GUICtrlEdit_PosFromChar',
            'GUICtrlEdit_ReplaceSel','GUICtrlEdit_Scroll',
            'GUICtrlEdit_SetLimitText','GUICtrlEdit_SetMargins',
            'GUICtrlEdit_SetModify','GUICtrlEdit_SetPasswordChar',
            'GUICtrlEdit_SetReadOnly','GUICtrlEdit_SetRECT',
            'GUICtrlEdit_SetRECTEx','GUICtrlEdit_SetRECTNP',
            'GUICtrlEdit_SetRectNPEx','GUICtrlEdit_SetSel',
            'GUICtrlEdit_SetTabStops','GUICtrlEdit_SetText',
            'GUICtrlEdit_ShowBalloonTip','GUICtrlEdit_Undo',
            'GUICtrlHeader_AddItem','GUICtrlHeader_ClearFilter',
            'GUICtrlHeader_ClearFilterAll','GUICtrlHeader_Create',
            'GUICtrlHeader_CreateDragImage','GUICtrlHeader_DeleteItem',
            'GUICtrlHeader_Destroy','GUICtrlHeader_EditFilter',
            'GUICtrlHeader_GetBitmapMargin','GUICtrlHeader_GetImageList',
            'GUICtrlHeader_GetItem','GUICtrlHeader_GetItemAlign',
            'GUICtrlHeader_GetItemBitmap','GUICtrlHeader_GetItemCount',
            'GUICtrlHeader_GetItemDisplay','GUICtrlHeader_GetItemFlags',
            'GUICtrlHeader_GetItemFormat','GUICtrlHeader_GetItemImage',
            'GUICtrlHeader_GetItemOrder','GUICtrlHeader_GetItemParam',
            'GUICtrlHeader_GetItemRect','GUICtrlHeader_GetItemRectEx',
            'GUICtrlHeader_GetItemText','GUICtrlHeader_GetItemWidth',
            'GUICtrlHeader_GetOrderArray','GUICtrlHeader_GetUnicodeFormat',
            'GUICtrlHeader_HitTest','GUICtrlHeader_InsertItem',
            'GUICtrlHeader_Layout','GUICtrlHeader_OrderToIndex',
            'GUICtrlHeader_SetBitmapMargin',
            'GUICtrlHeader_SetFilterChangeTimeout',
            'GUICtrlHeader_SetHotDivider','GUICtrlHeader_SetImageList',
            'GUICtrlHeader_SetItem','GUICtrlHeader_SetItemAlign',
            'GUICtrlHeader_SetItemBitmap','GUICtrlHeader_SetItemDisplay',
            'GUICtrlHeader_SetItemFlags','GUICtrlHeader_SetItemFormat',
            'GUICtrlHeader_SetItemImage','GUICtrlHeader_SetItemOrder',
            'GUICtrlHeader_SetItemParam','GUICtrlHeader_SetItemText',
            'GUICtrlHeader_SetItemWidth','GUICtrlHeader_SetOrderArray',
            'GUICtrlHeader_SetUnicodeFormat','GUICtrlIpAddress_ClearAddress',
            'GUICtrlIpAddress_Create','GUICtrlIpAddress_Destroy',
            'GUICtrlIpAddress_Get','GUICtrlIpAddress_GetArray',
            'GUICtrlIpAddress_GetEx','GUICtrlIpAddress_IsBlank',
            'GUICtrlIpAddress_Set','GUICtrlIpAddress_SetArray',
            'GUICtrlIpAddress_SetEx','GUICtrlIpAddress_SetFocus',
            'GUICtrlIpAddress_SetFont','GUICtrlIpAddress_SetRange',
            'GUICtrlIpAddress_ShowHide','GUICtrlListBox_AddFile',
            'GUICtrlListBox_AddString','GUICtrlListBox_BeginUpdate',
            'GUICtrlListBox_Create','GUICtrlListBox_DeleteString',
            'GUICtrlListBox_Destroy','GUICtrlListBox_Dir',
            'GUICtrlListBox_EndUpdate','GUICtrlListBox_FindInText',
            'GUICtrlListBox_FindString','GUICtrlListBox_GetAnchorIndex',
            'GUICtrlListBox_GetCaretIndex','GUICtrlListBox_GetCount',
            'GUICtrlListBox_GetCurSel','GUICtrlListBox_GetHorizontalExtent',
            'GUICtrlListBox_GetItemData','GUICtrlListBox_GetItemHeight',
            'GUICtrlListBox_GetItemRect','GUICtrlListBox_GetItemRectEx',
            'GUICtrlListBox_GetListBoxInfo','GUICtrlListBox_GetLocale',
            'GUICtrlListBox_GetLocaleCountry','GUICtrlListBox_GetLocaleLang',
            'GUICtrlListBox_GetLocalePrimLang',
            'GUICtrlListBox_GetLocaleSubLang','GUICtrlListBox_GetSel',
            'GUICtrlListBox_GetSelCount','GUICtrlListBox_GetSelItems',
            'GUICtrlListBox_GetSelItemsText','GUICtrlListBox_GetText',
            'GUICtrlListBox_GetTextLen','GUICtrlListBox_GetTopIndex',
            'GUICtrlListBox_InitStorage','GUICtrlListBox_InsertString',
            'GUICtrlListBox_ItemFromPoint','GUICtrlListBox_ReplaceString',
            'GUICtrlListBox_ResetContent','GUICtrlListBox_SelectString',
            'GUICtrlListBox_SelItemRange','GUICtrlListBox_SelItemRangeEx',
            'GUICtrlListBox_SetAnchorIndex','GUICtrlListBox_SetCaretIndex',
            'GUICtrlListBox_SetColumnWidth','GUICtrlListBox_SetCurSel',
            'GUICtrlListBox_SetHorizontalExtent','GUICtrlListBox_SetItemData',
            'GUICtrlListBox_SetItemHeight','GUICtrlListBox_SetLocale',
            'GUICtrlListBox_SetSel','GUICtrlListBox_SetTabStops',
            'GUICtrlListBox_SetTopIndex','GUICtrlListBox_Sort',
            'GUICtrlListBox_SwapString','GUICtrlListBox_UpdateHScroll',
            'GUICtrlListView_AddArray','GUICtrlListView_AddColumn',
            'GUICtrlListView_AddItem','GUICtrlListView_AddSubItem',
            'GUICtrlListView_ApproximateViewHeight',
            'GUICtrlListView_ApproximateViewRect',
            'GUICtrlListView_ApproximateViewWidth','GUICtrlListView_Arrange',
            'GUICtrlListView_BeginUpdate','GUICtrlListView_CancelEditLabel',
            'GUICtrlListView_ClickItem','GUICtrlListView_CopyItems',
            'GUICtrlListView_Create','GUICtrlListView_CreateDragImage',
            'GUICtrlListView_CreateSolidBitMap',
            'GUICtrlListView_DeleteAllItems','GUICtrlListView_DeleteColumn',
            'GUICtrlListView_DeleteItem','GUICtrlListView_DeleteItemsSelected',
            'GUICtrlListView_Destroy','GUICtrlListView_DrawDragImage',
            'GUICtrlListView_EditLabel','GUICtrlListView_EnableGroupView',
            'GUICtrlListView_EndUpdate','GUICtrlListView_EnsureVisible',
            'GUICtrlListView_FindInText','GUICtrlListView_FindItem',
            'GUICtrlListView_FindNearest','GUICtrlListView_FindParam',
            'GUICtrlListView_FindText','GUICtrlListView_GetBkColor',
            'GUICtrlListView_GetBkImage','GUICtrlListView_GetCallbackMask',
            'GUICtrlListView_GetColumn','GUICtrlListView_GetColumnCount',
            'GUICtrlListView_GetColumnOrder',
            'GUICtrlListView_GetColumnOrderArray',
            'GUICtrlListView_GetColumnWidth','GUICtrlListView_GetCounterPage',
            'GUICtrlListView_GetEditControl',
            'GUICtrlListView_GetExtendedListViewStyle',
            'GUICtrlListView_GetGroupInfo',
            'GUICtrlListView_GetGroupViewEnabled','GUICtrlListView_GetHeader',
            'GUICtrlListView_GetHotCursor','GUICtrlListView_GetHotItem',
            'GUICtrlListView_GetHoverTime','GUICtrlListView_GetImageList',
            'GUICtrlListView_GetISearchString','GUICtrlListView_GetItem',
            'GUICtrlListView_GetItemChecked','GUICtrlListView_GetItemCount',
            'GUICtrlListView_GetItemCut','GUICtrlListView_GetItemDropHilited',
            'GUICtrlListView_GetItemEx','GUICtrlListView_GetItemFocused',
            'GUICtrlListView_GetItemGroupID','GUICtrlListView_GetItemImage',
            'GUICtrlListView_GetItemIndent','GUICtrlListView_GetItemParam',
            'GUICtrlListView_GetItemPosition',
            'GUICtrlListView_GetItemPositionX',
            'GUICtrlListView_GetItemPositionY','GUICtrlListView_GetItemRect',
            'GUICtrlListView_GetItemRectEx','GUICtrlListView_GetItemSelected',
            'GUICtrlListView_GetItemSpacing','GUICtrlListView_GetItemSpacingX',
            'GUICtrlListView_GetItemSpacingY','GUICtrlListView_GetItemState',
            'GUICtrlListView_GetItemStateImage','GUICtrlListView_GetItemText',
            'GUICtrlListView_GetItemTextArray',
            'GUICtrlListView_GetItemTextString','GUICtrlListView_GetNextItem',
            'GUICtrlListView_GetNumberOfWorkAreas','GUICtrlListView_GetOrigin',
            'GUICtrlListView_GetOriginX','GUICtrlListView_GetOriginY',
            'GUICtrlListView_GetOutlineColor',
            'GUICtrlListView_GetSelectedColumn',
            'GUICtrlListView_GetSelectedCount',
            'GUICtrlListView_GetSelectedIndices',
            'GUICtrlListView_GetSelectionMark','GUICtrlListView_GetStringWidth',
            'GUICtrlListView_GetSubItemRect','GUICtrlListView_GetTextBkColor',
            'GUICtrlListView_GetTextColor','GUICtrlListView_GetToolTips',
            'GUICtrlListView_GetTopIndex','GUICtrlListView_GetUnicodeFormat',
            'GUICtrlListView_GetView','GUICtrlListView_GetViewDetails',
            'GUICtrlListView_GetViewLarge','GUICtrlListView_GetViewList',
            'GUICtrlListView_GetViewRect','GUICtrlListView_GetViewSmall',
            'GUICtrlListView_GetViewTile','GUICtrlListView_HideColumn',
            'GUICtrlListView_HitTest','GUICtrlListView_InsertColumn',
            'GUICtrlListView_InsertGroup','GUICtrlListView_InsertItem',
            'GUICtrlListView_JustifyColumn','GUICtrlListView_MapIDToIndex',
            'GUICtrlListView_MapIndexToID','GUICtrlListView_RedrawItems',
            'GUICtrlListView_RegisterSortCallBack',
            'GUICtrlListView_RemoveAllGroups','GUICtrlListView_RemoveGroup',
            'GUICtrlListView_Scroll','GUICtrlListView_SetBkColor',
            'GUICtrlListView_SetBkImage','GUICtrlListView_SetCallBackMask',
            'GUICtrlListView_SetColumn','GUICtrlListView_SetColumnOrder',
            'GUICtrlListView_SetColumnOrderArray',
            'GUICtrlListView_SetColumnWidth',
            'GUICtrlListView_SetExtendedListViewStyle',
            'GUICtrlListView_SetGroupInfo','GUICtrlListView_SetHotItem',
            'GUICtrlListView_SetHoverTime','GUICtrlListView_SetIconSpacing',
            'GUICtrlListView_SetImageList','GUICtrlListView_SetItem',
            'GUICtrlListView_SetItemChecked','GUICtrlListView_SetItemCount',
            'GUICtrlListView_SetItemCut','GUICtrlListView_SetItemDropHilited',
            'GUICtrlListView_SetItemEx','GUICtrlListView_SetItemFocused',
            'GUICtrlListView_SetItemGroupID','GUICtrlListView_SetItemImage',
            'GUICtrlListView_SetItemIndent','GUICtrlListView_SetItemParam',
            'GUICtrlListView_SetItemPosition',
            'GUICtrlListView_SetItemPosition32',
            'GUICtrlListView_SetItemSelected','GUICtrlListView_SetItemState',
            'GUICtrlListView_SetItemStateImage','GUICtrlListView_SetItemText',
            'GUICtrlListView_SetOutlineColor',
            'GUICtrlListView_SetSelectedColumn',
            'GUICtrlListView_SetSelectionMark','GUICtrlListView_SetTextBkColor',
            'GUICtrlListView_SetTextColor','GUICtrlListView_SetToolTips',
            'GUICtrlListView_SetUnicodeFormat','GUICtrlListView_SetView',
            'GUICtrlListView_SetWorkAreas','GUICtrlListView_SimpleSort',
            'GUICtrlListView_SortItems','GUICtrlListView_SubItemHitTest',
            'GUICtrlListView_UnRegisterSortCallBack',
            'GUICtrlMenu_AddMenuItem','GUICtrlMenu_AppendMenu',
            'GUICtrlMenu_CheckMenuItem','GUICtrlMenu_CheckRadioItem',
            'GUICtrlMenu_CreateMenu','GUICtrlMenu_CreatePopup',
            'GUICtrlMenu_DeleteMenu','GUICtrlMenu_DestroyMenu',
            'GUICtrlMenu_DrawMenuBar','GUICtrlMenu_EnableMenuItem',
            'GUICtrlMenu_FindItem','GUICtrlMenu_FindParent',
            'GUICtrlMenu_GetItemBmp','GUICtrlMenu_GetItemBmpChecked',
            'GUICtrlMenu_GetItemBmpUnchecked','GUICtrlMenu_GetItemChecked',
            'GUICtrlMenu_GetItemCount','GUICtrlMenu_GetItemData',
            'GUICtrlMenu_GetItemDefault','GUICtrlMenu_GetItemDisabled',
            'GUICtrlMenu_GetItemEnabled','GUICtrlMenu_GetItemGrayed',
            'GUICtrlMenu_GetItemHighlighted','GUICtrlMenu_GetItemID',
            'GUICtrlMenu_GetItemInfo','GUICtrlMenu_GetItemRect',
            'GUICtrlMenu_GetItemRectEx','GUICtrlMenu_GetItemState',
            'GUICtrlMenu_GetItemStateEx','GUICtrlMenu_GetItemSubMenu',
            'GUICtrlMenu_GetItemText','GUICtrlMenu_GetItemType',
            'GUICtrlMenu_GetMenu','GUICtrlMenu_GetMenuBackground',
            'GUICtrlMenu_GetMenuBarInfo','GUICtrlMenu_GetMenuContextHelpID',
            'GUICtrlMenu_GetMenuData','GUICtrlMenu_GetMenuDefaultItem',
            'GUICtrlMenu_GetMenuHeight','GUICtrlMenu_GetMenuInfo',
            'GUICtrlMenu_GetMenuStyle','GUICtrlMenu_GetSystemMenu',
            'GUICtrlMenu_InsertMenuItem','GUICtrlMenu_InsertMenuItemEx',
            'GUICtrlMenu_IsMenu','GUICtrlMenu_LoadMenu',
            'GUICtrlMenu_MapAccelerator','GUICtrlMenu_MenuItemFromPoint',
            'GUICtrlMenu_RemoveMenu','GUICtrlMenu_SetItemBitmaps',
            'GUICtrlMenu_SetItemBmp','GUICtrlMenu_SetItemBmpChecked',
            'GUICtrlMenu_SetItemBmpUnchecked','GUICtrlMenu_SetItemChecked',
            'GUICtrlMenu_SetItemData','GUICtrlMenu_SetItemDefault',
            'GUICtrlMenu_SetItemDisabled','GUICtrlMenu_SetItemEnabled',
            'GUICtrlMenu_SetItemGrayed','GUICtrlMenu_SetItemHighlighted',
            'GUICtrlMenu_SetItemID','GUICtrlMenu_SetItemInfo',
            'GUICtrlMenu_SetItemState','GUICtrlMenu_SetItemSubMenu',
            'GUICtrlMenu_SetItemText','GUICtrlMenu_SetItemType',
            'GUICtrlMenu_SetMenu','GUICtrlMenu_SetMenuBackground',
            'GUICtrlMenu_SetMenuContextHelpID','GUICtrlMenu_SetMenuData',
            'GUICtrlMenu_SetMenuDefaultItem','GUICtrlMenu_SetMenuHeight',
            'GUICtrlMenu_SetMenuInfo','GUICtrlMenu_SetMenuStyle',
            'GUICtrlMenu_TrackPopupMenu','GUICtrlMonthCal_Create',
            'GUICtrlMonthCal_Destroy','GUICtrlMonthCal_GetColor',
            'GUICtrlMonthCal_GetColorArray','GUICtrlMonthCal_GetCurSel',
            'GUICtrlMonthCal_GetCurSelStr','GUICtrlMonthCal_GetFirstDOW',
            'GUICtrlMonthCal_GetFirstDOWStr','GUICtrlMonthCal_GetMaxSelCount',
            'GUICtrlMonthCal_GetMaxTodayWidth',
            'GUICtrlMonthCal_GetMinReqHeight','GUICtrlMonthCal_GetMinReqRect',
            'GUICtrlMonthCal_GetMinReqRectArray',
            'GUICtrlMonthCal_GetMinReqWidth','GUICtrlMonthCal_GetMonthDelta',
            'GUICtrlMonthCal_GetMonthRange','GUICtrlMonthCal_GetMonthRangeMax',
            'GUICtrlMonthCal_GetMonthRangeMaxStr',
            'GUICtrlMonthCal_GetMonthRangeMin',
            'GUICtrlMonthCal_GetMonthRangeMinStr',
            'GUICtrlMonthCal_GetMonthRangeSpan','GUICtrlMonthCal_GetRange',
            'GUICtrlMonthCal_GetRangeMax','GUICtrlMonthCal_GetRangeMaxStr',
            'GUICtrlMonthCal_GetRangeMin','GUICtrlMonthCal_GetRangeMinStr',
            'GUICtrlMonthCal_GetSelRange','GUICtrlMonthCal_GetSelRangeMax',
            'GUICtrlMonthCal_GetSelRangeMaxStr',
            'GUICtrlMonthCal_GetSelRangeMin',
            'GUICtrlMonthCal_GetSelRangeMinStr','GUICtrlMonthCal_GetToday',
            'GUICtrlMonthCal_GetTodayStr','GUICtrlMonthCal_GetUnicodeFormat',
            'GUICtrlMonthCal_HitTest','GUICtrlMonthCal_SetColor',
            'GUICtrlMonthCal_SetCurSel','GUICtrlMonthCal_SetDayState',
            'GUICtrlMonthCal_SetFirstDOW','GUICtrlMonthCal_SetMaxSelCount',
            'GUICtrlMonthCal_SetMonthDelta','GUICtrlMonthCal_SetRange',
            'GUICtrlMonthCal_SetSelRange','GUICtrlMonthCal_SetToday',
            'GUICtrlMonthCal_SetUnicodeFormat','GUICtrlRebar_AddBand',
            'GUICtrlRebar_AddToolBarBand','GUICtrlRebar_BeginDrag',
            'GUICtrlRebar_Create','GUICtrlRebar_DeleteBand',
            'GUICtrlRebar_Destroy','GUICtrlRebar_DragMove',
            'GUICtrlRebar_EndDrag','GUICtrlRebar_GetBandBackColor',
            'GUICtrlRebar_GetBandBorders','GUICtrlRebar_GetBandBordersEx',
            'GUICtrlRebar_GetBandChildHandle','GUICtrlRebar_GetBandChildSize',
            'GUICtrlRebar_GetBandCount','GUICtrlRebar_GetBandForeColor',
            'GUICtrlRebar_GetBandHeaderSize','GUICtrlRebar_GetBandID',
            'GUICtrlRebar_GetBandIdealSize','GUICtrlRebar_GetBandLength',
            'GUICtrlRebar_GetBandLParam','GUICtrlRebar_GetBandMargins',
            'GUICtrlRebar_GetBandMarginsEx','GUICtrlRebar_GetBandRect',
            'GUICtrlRebar_GetBandRectEx','GUICtrlRebar_GetBandStyle',
            'GUICtrlRebar_GetBandStyleBreak',
            'GUICtrlRebar_GetBandStyleChildEdge',
            'GUICtrlRebar_GetBandStyleFixedBMP',
            'GUICtrlRebar_GetBandStyleFixedSize',
            'GUICtrlRebar_GetBandStyleGripperAlways',
            'GUICtrlRebar_GetBandStyleHidden',
            'GUICtrlRebar_GetBandStyleHideTitle',
            'GUICtrlRebar_GetBandStyleNoGripper',
            'GUICtrlRebar_GetBandStyleTopAlign',
            'GUICtrlRebar_GetBandStyleUseChevron',
            'GUICtrlRebar_GetBandStyleVariableHeight',
            'GUICtrlRebar_GetBandText','GUICtrlRebar_GetBarHeight',
            'GUICtrlRebar_GetBKColor','GUICtrlRebar_GetColorScheme',
            'GUICtrlRebar_GetRowCount','GUICtrlRebar_GetRowHeight',
            'GUICtrlRebar_GetTextColor','GUICtrlRebar_GetToolTips',
            'GUICtrlRebar_GetUnicodeFormat','GUICtrlRebar_HitTest',
            'GUICtrlRebar_IDToIndex','GUICtrlRebar_MaximizeBand',
            'GUICtrlRebar_MinimizeBand','GUICtrlRebar_MoveBand',
            'GUICtrlRebar_SetBandBackColor','GUICtrlRebar_SetBandForeColor',
            'GUICtrlRebar_SetBandHeaderSize','GUICtrlRebar_SetBandID',
            'GUICtrlRebar_SetBandIdealSize','GUICtrlRebar_SetBandLength',
            'GUICtrlRebar_SetBandLParam','GUICtrlRebar_SetBandStyle',
            'GUICtrlRebar_SetBandStyleBreak',
            'GUICtrlRebar_SetBandStyleChildEdge',
            'GUICtrlRebar_SetBandStyleFixedBMP',
            'GUICtrlRebar_SetBandStyleFixedSize',
            'GUICtrlRebar_SetBandStyleGripperAlways',
            'GUICtrlRebar_SetBandStyleHidden',
            'GUICtrlRebar_SetBandStyleHideTitle',
            'GUICtrlRebar_SetBandStyleNoGripper',
            'GUICtrlRebar_SetBandStyleTopAlign',
            'GUICtrlRebar_SetBandStyleUseChevron',
            'GUICtrlRebar_SetBandStyleVariableHeight',
            'GUICtrlRebar_SetBandText','GUICtrlRebar_SetBKColor',
            'GUICtrlRebar_SetColorScheme','GUICtrlRebar_SetTextColor',
            'GUICtrlRebar_SetToolTips','GUICtrlRebar_SetUnicodeFormat',
            'GUICtrlRebar_ShowBand','GUICtrlSlider_ClearSel',
            'GUICtrlSlider_ClearTics','GUICtrlSlider_Create',
            'GUICtrlSlider_Destroy','GUICtrlSlider_GetBuddy',
            'GUICtrlSlider_GetChannelRect','GUICtrlSlider_GetLineSize',
            'GUICtrlSlider_GetNumTics','GUICtrlSlider_GetPageSize',
            'GUICtrlSlider_GetPos','GUICtrlSlider_GetPTics',
            'GUICtrlSlider_GetRange','GUICtrlSlider_GetRangeMax',
            'GUICtrlSlider_GetRangeMin','GUICtrlSlider_GetSel',
            'GUICtrlSlider_GetSelEnd','GUICtrlSlider_GetSelStart',
            'GUICtrlSlider_GetThumbLength','GUICtrlSlider_GetThumbRect',
            'GUICtrlSlider_GetThumbRectEx','GUICtrlSlider_GetTic',
            'GUICtrlSlider_GetTicPos','GUICtrlSlider_GetToolTips',
            'GUICtrlSlider_GetUnicodeFormat','GUICtrlSlider_SetBuddy',
            'GUICtrlSlider_SetLineSize','GUICtrlSlider_SetPageSize',
            'GUICtrlSlider_SetPos','GUICtrlSlider_SetRange',
            'GUICtrlSlider_SetRangeMax','GUICtrlSlider_SetRangeMin',
            'GUICtrlSlider_SetSel','GUICtrlSlider_SetSelEnd',
            'GUICtrlSlider_SetSelStart','GUICtrlSlider_SetThumbLength',
            'GUICtrlSlider_SetTic','GUICtrlSlider_SetTicFreq',
            'GUICtrlSlider_SetTipSide','GUICtrlSlider_SetToolTips',
            'GUICtrlSlider_SetUnicodeFormat','GUICtrlStatusBar_Create',
            'GUICtrlStatusBar_Destroy','GUICtrlStatusBar_EmbedControl',
            'GUICtrlStatusBar_GetBorders','GUICtrlStatusBar_GetBordersHorz',
            'GUICtrlStatusBar_GetBordersRect','GUICtrlStatusBar_GetBordersVert',
            'GUICtrlStatusBar_GetCount','GUICtrlStatusBar_GetHeight',
            'GUICtrlStatusBar_GetIcon','GUICtrlStatusBar_GetParts',
            'GUICtrlStatusBar_GetRect','GUICtrlStatusBar_GetRectEx',
            'GUICtrlStatusBar_GetText','GUICtrlStatusBar_GetTextFlags',
            'GUICtrlStatusBar_GetTextLength','GUICtrlStatusBar_GetTextLengthEx',
            'GUICtrlStatusBar_GetTipText','GUICtrlStatusBar_GetUnicodeFormat',
            'GUICtrlStatusBar_GetWidth','GUICtrlStatusBar_IsSimple',
            'GUICtrlStatusBar_Resize','GUICtrlStatusBar_SetBkColor',
            'GUICtrlStatusBar_SetIcon','GUICtrlStatusBar_SetMinHeight',
            'GUICtrlStatusBar_SetParts','GUICtrlStatusBar_SetSimple',
            'GUICtrlStatusBar_SetText','GUICtrlStatusBar_SetTipText',
            'GUICtrlStatusBar_SetUnicodeFormat','GUICtrlStatusBar_ShowHide',
            'GUICtrlTab_Create','GUICtrlTab_DeleteAllItems',
            'GUICtrlTab_DeleteItem','GUICtrlTab_DeselectAll',
            'GUICtrlTab_Destroy','GUICtrlTab_FindTab','GUICtrlTab_GetCurFocus',
            'GUICtrlTab_GetCurSel','GUICtrlTab_GetDisplayRect',
            'GUICtrlTab_GetDisplayRectEx','GUICtrlTab_GetExtendedStyle',
            'GUICtrlTab_GetImageList','GUICtrlTab_GetItem',
            'GUICtrlTab_GetItemCount','GUICtrlTab_GetItemImage',
            'GUICtrlTab_GetItemParam','GUICtrlTab_GetItemRect',
            'GUICtrlTab_GetItemRectEx','GUICtrlTab_GetItemState',
            'GUICtrlTab_GetItemText','GUICtrlTab_GetRowCount',
            'GUICtrlTab_GetToolTips','GUICtrlTab_GetUnicodeFormat',
            'GUICtrlTab_HighlightItem','GUICtrlTab_HitTest',
            'GUICtrlTab_InsertItem','GUICtrlTab_RemoveImage',
            'GUICtrlTab_SetCurFocus','GUICtrlTab_SetCurSel',
            'GUICtrlTab_SetExtendedStyle','GUICtrlTab_SetImageList',
            'GUICtrlTab_SetItem','GUICtrlTab_SetItemImage',
            'GUICtrlTab_SetItemParam','GUICtrlTab_SetItemSize',
            'GUICtrlTab_SetItemState','GUICtrlTab_SetItemText',
            'GUICtrlTab_SetMinTabWidth','GUICtrlTab_SetPadding',
            'GUICtrlTab_SetToolTips','GUICtrlTab_SetUnicodeFormat',
            'GUICtrlToolbar_AddBitmap','GUICtrlToolbar_AddButton',
            'GUICtrlToolbar_AddButtonSep','GUICtrlToolbar_AddString',
            'GUICtrlToolbar_ButtonCount','GUICtrlToolbar_CheckButton',
            'GUICtrlToolbar_ClickAccel','GUICtrlToolbar_ClickButton',
            'GUICtrlToolbar_ClickIndex','GUICtrlToolbar_CommandToIndex',
            'GUICtrlToolbar_Create','GUICtrlToolbar_Customize',
            'GUICtrlToolbar_DeleteButton','GUICtrlToolbar_Destroy',
            'GUICtrlToolbar_EnableButton','GUICtrlToolbar_FindToolbar',
            'GUICtrlToolbar_GetAnchorHighlight','GUICtrlToolbar_GetBitmapFlags',
            'GUICtrlToolbar_GetButtonBitmap','GUICtrlToolbar_GetButtonInfo',
            'GUICtrlToolbar_GetButtonInfoEx','GUICtrlToolbar_GetButtonParam',
            'GUICtrlToolbar_GetButtonRect','GUICtrlToolbar_GetButtonRectEx',
            'GUICtrlToolbar_GetButtonSize','GUICtrlToolbar_GetButtonState',
            'GUICtrlToolbar_GetButtonStyle','GUICtrlToolbar_GetButtonText',
            'GUICtrlToolbar_GetColorScheme',
            'GUICtrlToolbar_GetDisabledImageList',
            'GUICtrlToolbar_GetExtendedStyle','GUICtrlToolbar_GetHotImageList',
            'GUICtrlToolbar_GetHotItem','GUICtrlToolbar_GetImageList',
            'GUICtrlToolbar_GetInsertMark','GUICtrlToolbar_GetInsertMarkColor',
            'GUICtrlToolbar_GetMaxSize','GUICtrlToolbar_GetMetrics',
            'GUICtrlToolbar_GetPadding','GUICtrlToolbar_GetRows',
            'GUICtrlToolbar_GetString','GUICtrlToolbar_GetStyle',
            'GUICtrlToolbar_GetStyleAltDrag',
            'GUICtrlToolbar_GetStyleCustomErase','GUICtrlToolbar_GetStyleFlat',
            'GUICtrlToolbar_GetStyleList','GUICtrlToolbar_GetStyleRegisterDrop',
            'GUICtrlToolbar_GetStyleToolTips',
            'GUICtrlToolbar_GetStyleTransparent',
            'GUICtrlToolbar_GetStyleWrapable','GUICtrlToolbar_GetTextRows',
            'GUICtrlToolbar_GetToolTips','GUICtrlToolbar_GetUnicodeFormat',
            'GUICtrlToolbar_HideButton','GUICtrlToolbar_HighlightButton',
            'GUICtrlToolbar_HitTest','GUICtrlToolbar_IndexToCommand',
            'GUICtrlToolbar_InsertButton','GUICtrlToolbar_InsertMarkHitTest',
            'GUICtrlToolbar_IsButtonChecked','GUICtrlToolbar_IsButtonEnabled',
            'GUICtrlToolbar_IsButtonHidden',
            'GUICtrlToolbar_IsButtonHighlighted',
            'GUICtrlToolbar_IsButtonIndeterminate',
            'GUICtrlToolbar_IsButtonPressed','GUICtrlToolbar_LoadBitmap',
            'GUICtrlToolbar_LoadImages','GUICtrlToolbar_MapAccelerator',
            'GUICtrlToolbar_MoveButton','GUICtrlToolbar_PressButton',
            'GUICtrlToolbar_SetAnchorHighlight','GUICtrlToolbar_SetBitmapSize',
            'GUICtrlToolbar_SetButtonBitMap','GUICtrlToolbar_SetButtonInfo',
            'GUICtrlToolbar_SetButtonInfoEx','GUICtrlToolbar_SetButtonParam',
            'GUICtrlToolbar_SetButtonSize','GUICtrlToolbar_SetButtonState',
            'GUICtrlToolbar_SetButtonStyle','GUICtrlToolbar_SetButtonText',
            'GUICtrlToolbar_SetButtonWidth','GUICtrlToolbar_SetCmdID',
            'GUICtrlToolbar_SetColorScheme',
            'GUICtrlToolbar_SetDisabledImageList',
            'GUICtrlToolbar_SetDrawTextFlags','GUICtrlToolbar_SetExtendedStyle',
            'GUICtrlToolbar_SetHotImageList','GUICtrlToolbar_SetHotItem',
            'GUICtrlToolbar_SetImageList','GUICtrlToolbar_SetIndent',
            'GUICtrlToolbar_SetIndeterminate','GUICtrlToolbar_SetInsertMark',
            'GUICtrlToolbar_SetInsertMarkColor','GUICtrlToolbar_SetMaxTextRows',
            'GUICtrlToolbar_SetMetrics','GUICtrlToolbar_SetPadding',
            'GUICtrlToolbar_SetParent','GUICtrlToolbar_SetRows',
            'GUICtrlToolbar_SetStyle','GUICtrlToolbar_SetStyleAltDrag',
            'GUICtrlToolbar_SetStyleCustomErase','GUICtrlToolbar_SetStyleFlat',
            'GUICtrlToolbar_SetStyleList','GUICtrlToolbar_SetStyleRegisterDrop',
            'GUICtrlToolbar_SetStyleToolTips',
            'GUICtrlToolbar_SetStyleTransparent',
            'GUICtrlToolbar_SetStyleWrapable','GUICtrlToolbar_SetToolTips',
            'GUICtrlToolbar_SetUnicodeFormat','GUICtrlToolbar_SetWindowTheme',
            'GUICtrlTreeView_Add','GUICtrlTreeView_AddChild',
            'GUICtrlTreeView_AddChildFirst','GUICtrlTreeView_AddFirst',
            'GUICtrlTreeView_BeginUpdate','GUICtrlTreeView_ClickItem',
            'GUICtrlTreeView_Create','GUICtrlTreeView_CreateDragImage',
            'GUICtrlTreeView_CreateSolidBitMap','GUICtrlTreeView_Delete',
            'GUICtrlTreeView_DeleteAll','GUICtrlTreeView_DeleteChildren',
            'GUICtrlTreeView_Destroy','GUICtrlTreeView_DisplayRect',
            'GUICtrlTreeView_DisplayRectEx','GUICtrlTreeView_EditText',
            'GUICtrlTreeView_EndEdit','GUICtrlTreeView_EndUpdate',
            'GUICtrlTreeView_EnsureVisible','GUICtrlTreeView_Expand',
            'GUICtrlTreeView_ExpandedOnce','GUICtrlTreeView_FindItem',
            'GUICtrlTreeView_FindItemEx','GUICtrlTreeView_GetBkColor',
            'GUICtrlTreeView_GetBold','GUICtrlTreeView_GetChecked',
            'GUICtrlTreeView_GetChildCount','GUICtrlTreeView_GetChildren',
            'GUICtrlTreeView_GetCount','GUICtrlTreeView_GetCut',
            'GUICtrlTreeView_GetDropTarget','GUICtrlTreeView_GetEditControl',
            'GUICtrlTreeView_GetExpanded','GUICtrlTreeView_GetFirstChild',
            'GUICtrlTreeView_GetFirstItem','GUICtrlTreeView_GetFirstVisible',
            'GUICtrlTreeView_GetFocused','GUICtrlTreeView_GetHeight',
            'GUICtrlTreeView_GetImageIndex',
            'GUICtrlTreeView_GetImageListIconHandle',
            'GUICtrlTreeView_GetIndent','GUICtrlTreeView_GetInsertMarkColor',
            'GUICtrlTreeView_GetISearchString','GUICtrlTreeView_GetItemByIndex',
            'GUICtrlTreeView_GetItemHandle','GUICtrlTreeView_GetItemParam',
            'GUICtrlTreeView_GetLastChild','GUICtrlTreeView_GetLineColor',
            'GUICtrlTreeView_GetNext','GUICtrlTreeView_GetNextChild',
            'GUICtrlTreeView_GetNextSibling','GUICtrlTreeView_GetNextVisible',
            'GUICtrlTreeView_GetNormalImageList',
            'GUICtrlTreeView_GetParentHandle','GUICtrlTreeView_GetParentParam',
            'GUICtrlTreeView_GetPrev','GUICtrlTreeView_GetPrevChild',
            'GUICtrlTreeView_GetPrevSibling','GUICtrlTreeView_GetPrevVisible',
            'GUICtrlTreeView_GetScrollTime','GUICtrlTreeView_GetSelected',
            'GUICtrlTreeView_GetSelectedImageIndex',
            'GUICtrlTreeView_GetSelection','GUICtrlTreeView_GetSiblingCount',
            'GUICtrlTreeView_GetState','GUICtrlTreeView_GetStateImageIndex',
            'GUICtrlTreeView_GetStateImageList','GUICtrlTreeView_GetText',
            'GUICtrlTreeView_GetTextColor','GUICtrlTreeView_GetToolTips',
            'GUICtrlTreeView_GetTree','GUICtrlTreeView_GetUnicodeFormat',
            'GUICtrlTreeView_GetVisible','GUICtrlTreeView_GetVisibleCount',
            'GUICtrlTreeView_HitTest','GUICtrlTreeView_HitTestEx',
            'GUICtrlTreeView_HitTestItem','GUICtrlTreeView_Index',
            'GUICtrlTreeView_InsertItem','GUICtrlTreeView_IsFirstItem',
            'GUICtrlTreeView_IsParent','GUICtrlTreeView_Level',
            'GUICtrlTreeView_SelectItem','GUICtrlTreeView_SelectItemByIndex',
            'GUICtrlTreeView_SetBkColor','GUICtrlTreeView_SetBold',
            'GUICtrlTreeView_SetChecked','GUICtrlTreeView_SetCheckedByIndex',
            'GUICtrlTreeView_SetChildren','GUICtrlTreeView_SetCut',
            'GUICtrlTreeView_SetDropTarget','GUICtrlTreeView_SetFocused',
            'GUICtrlTreeView_SetHeight','GUICtrlTreeView_SetIcon',
            'GUICtrlTreeView_SetImageIndex','GUICtrlTreeView_SetIndent',
            'GUICtrlTreeView_SetInsertMark',
            'GUICtrlTreeView_SetInsertMarkColor',
            'GUICtrlTreeView_SetItemHeight','GUICtrlTreeView_SetItemParam',
            'GUICtrlTreeView_SetLineColor','GUICtrlTreeView_SetNormalImageList',
            'GUICtrlTreeView_SetScrollTime','GUICtrlTreeView_SetSelected',
            'GUICtrlTreeView_SetSelectedImageIndex','GUICtrlTreeView_SetState',
            'GUICtrlTreeView_SetStateImageIndex',
            'GUICtrlTreeView_SetStateImageList','GUICtrlTreeView_SetText',
            'GUICtrlTreeView_SetTextColor','GUICtrlTreeView_SetToolTips',
            'GUICtrlTreeView_SetUnicodeFormat','GUICtrlTreeView_Sort',
            'GUIImageList_Add','GUIImageList_AddBitmap','GUIImageList_AddIcon',
            'GUIImageList_AddMasked','GUIImageList_BeginDrag',
            'GUIImageList_Copy','GUIImageList_Create','GUIImageList_Destroy',
            'GUIImageList_DestroyIcon','GUIImageList_DragEnter',
            'GUIImageList_DragLeave','GUIImageList_DragMove',
            'GUIImageList_Draw','GUIImageList_DrawEx','GUIImageList_Duplicate',
            'GUIImageList_EndDrag','GUIImageList_GetBkColor',
            'GUIImageList_GetIcon','GUIImageList_GetIconHeight',
            'GUIImageList_GetIconSize','GUIImageList_GetIconSizeEx',
            'GUIImageList_GetIconWidth','GUIImageList_GetImageCount',
            'GUIImageList_GetImageInfoEx','GUIImageList_Remove',
            'GUIImageList_ReplaceIcon','GUIImageList_SetBkColor',
            'GUIImageList_SetIconSize','GUIImageList_SetImageCount',
            'GUIImageList_Swap','GUIScrollBars_EnableScrollBar',
            'GUIScrollBars_GetScrollBarInfoEx','GUIScrollBars_GetScrollBarRect',
            'GUIScrollBars_GetScrollBarRGState',
            'GUIScrollBars_GetScrollBarXYLineButton',
            'GUIScrollBars_GetScrollBarXYThumbBottom',
            'GUIScrollBars_GetScrollBarXYThumbTop',
            'GUIScrollBars_GetScrollInfo','GUIScrollBars_GetScrollInfoEx',
            'GUIScrollBars_GetScrollInfoMax','GUIScrollBars_GetScrollInfoMin',
            'GUIScrollBars_GetScrollInfoPage','GUIScrollBars_GetScrollInfoPos',
            'GUIScrollBars_GetScrollInfoTrackPos','GUIScrollBars_GetScrollPos',
            'GUIScrollBars_GetScrollRange','GUIScrollBars_Init',
            'GUIScrollBars_ScrollWindow','GUIScrollBars_SetScrollInfo',
            'GUIScrollBars_SetScrollInfoMax','GUIScrollBars_SetScrollInfoMin',
            'GUIScrollBars_SetScrollInfoPage','GUIScrollBars_SetScrollInfoPos',
            'GUIScrollBars_SetScrollRange','GUIScrollBars_ShowScrollBar',
            'GUIToolTip_Activate','GUIToolTip_AddTool','GUIToolTip_AdjustRect',
            'GUIToolTip_BitsToTTF','GUIToolTip_Create','GUIToolTip_DelTool',
            'GUIToolTip_Destroy','GUIToolTip_EnumTools',
            'GUIToolTip_GetBubbleHeight','GUIToolTip_GetBubbleSize',
            'GUIToolTip_GetBubbleWidth','GUIToolTip_GetCurrentTool',
            'GUIToolTip_GetDelayTime','GUIToolTip_GetMargin',
            'GUIToolTip_GetMarginEx','GUIToolTip_GetMaxTipWidth',
            'GUIToolTip_GetText','GUIToolTip_GetTipBkColor',
            'GUIToolTip_GetTipTextColor','GUIToolTip_GetTitleBitMap',
            'GUIToolTip_GetTitleText','GUIToolTip_GetToolCount',
            'GUIToolTip_GetToolInfo','GUIToolTip_HitTest',
            'GUIToolTip_NewToolRect','GUIToolTip_Pop','GUIToolTip_PopUp',
            'GUIToolTip_SetDelayTime','GUIToolTip_SetMargin',
            'GUIToolTip_SetMaxTipWidth','GUIToolTip_SetTipBkColor',
            'GUIToolTip_SetTipTextColor','GUIToolTip_SetTitle',
            'GUIToolTip_SetToolInfo','GUIToolTip_SetWindowTheme',
            'GUIToolTip_ToolExists','GUIToolTip_ToolToArray',
            'GUIToolTip_TrackActivate','GUIToolTip_TrackPosition',
            'GUIToolTip_TTFToBits','GUIToolTip_Update',
            'GUIToolTip_UpdateTipText','HexToString','IE_Example',
            'IE_Introduction','IE_VersionInfo','IEAction','IEAttach',
            'IEBodyReadHTML','IEBodyReadText','IEBodyWriteHTML','IECreate',
            'IECreateEmbedded','IEDocGetObj','IEDocInsertHTML',
            'IEDocInsertText','IEDocReadHTML','IEDocWriteHTML',
            'IEErrorHandlerDeRegister','IEErrorHandlerRegister','IEErrorNotify',
            'IEFormElementCheckBoxSelect','IEFormElementGetCollection',
            'IEFormElementGetObjByName','IEFormElementGetValue',
            'IEFormElementOptionSelect','IEFormElementRadioSelect',
            'IEFormElementSetValue','IEFormGetCollection','IEFormGetObjByName',
            'IEFormImageClick','IEFormReset','IEFormSubmit',
            'IEFrameGetCollection','IEFrameGetObjByName','IEGetObjById',
            'IEGetObjByName','IEHeadInsertEventScript','IEImgClick',
            'IEImgGetCollection','IEIsFrameSet','IELinkClickByIndex',
            'IELinkClickByText','IELinkGetCollection','IELoadWait',
            'IELoadWaitTimeout','IENavigate','IEPropertyGet','IEPropertySet',
            'IEQuit','IETableGetCollection','IETableWriteToArray',
            'IETagNameAllGetCollection','IETagNameGetCollection','Iif',
            'INetExplorerCapable','INetGetSource','INetMail','INetSmtpMail',
            'IsPressed','MathCheckDiv','Max','MemGlobalAlloc','MemGlobalFree',
            'MemGlobalLock','MemGlobalSize','MemGlobalUnlock','MemMoveMemory',
            'MemMsgBox','MemShowError','MemVirtualAlloc','MemVirtualAllocEx',
            'MemVirtualFree','MemVirtualFreeEx','Min','MouseTrap',
            'NamedPipes_CallNamedPipe','NamedPipes_ConnectNamedPipe',
            'NamedPipes_CreateNamedPipe','NamedPipes_CreatePipe',
            'NamedPipes_DisconnectNamedPipe',
            'NamedPipes_GetNamedPipeHandleState','NamedPipes_GetNamedPipeInfo',
            'NamedPipes_PeekNamedPipe','NamedPipes_SetNamedPipeHandleState',
            'NamedPipes_TransactNamedPipe','NamedPipes_WaitNamedPipe',
            'Net_Share_ConnectionEnum','Net_Share_FileClose',
            'Net_Share_FileEnum','Net_Share_FileGetInfo','Net_Share_PermStr',
            'Net_Share_ResourceStr','Net_Share_SessionDel',
            'Net_Share_SessionEnum','Net_Share_SessionGetInfo',
            'Net_Share_ShareAdd','Net_Share_ShareCheck','Net_Share_ShareDel',
            'Net_Share_ShareEnum','Net_Share_ShareGetInfo',
            'Net_Share_ShareSetInfo','Net_Share_StatisticsGetSvr',
            'Net_Share_StatisticsGetWrk','Now','NowCalc','NowCalcDate',
            'NowDate','NowTime','PathFull','PathMake','PathSplit',
            'ProcessGetName','ProcessGetPriority','Radian',
            'ReplaceStringInFile','RunDOS','ScreenCapture_Capture',
            'ScreenCapture_CaptureWnd','ScreenCapture_SaveImage',
            'ScreenCapture_SetBMPFormat','ScreenCapture_SetJPGQuality',
            'ScreenCapture_SetTIFColorDepth','ScreenCapture_SetTIFCompression',
            'Security__AdjustTokenPrivileges','Security__GetAccountSid',
            'Security__GetLengthSid','Security__GetTokenInformation',
            'Security__ImpersonateSelf','Security__IsValidSid',
            'Security__LookupAccountName','Security__LookupAccountSid',
            'Security__LookupPrivilegeValue','Security__OpenProcessToken',
            'Security__OpenThreadToken','Security__OpenThreadTokenEx',
            'Security__SetPrivilege','Security__SidToStringSid',
            'Security__SidTypeStr','Security__StringSidToSid','SendMessage',
            'SendMessageA','SetDate','SetTime','Singleton','SoundClose',
            'SoundLength','SoundOpen','SoundPause','SoundPlay','SoundPos',
            'SoundResume','SoundSeek','SoundStatus','SoundStop',
            'SQLite_Changes','SQLite_Close','SQLite_Display2DResult',
            'SQLite_Encode','SQLite_ErrCode','SQLite_ErrMsg','SQLite_Escape',
            'SQLite_Exec','SQLite_FetchData','SQLite_FetchNames',
            'SQLite_GetTable','SQLite_GetTable2d','SQLite_LastInsertRowID',
            'SQLite_LibVersion','SQLite_Open','SQLite_Query',
            'SQLite_QueryFinalize','SQLite_QueryReset','SQLite_QuerySingleRow',
            'SQLite_SaveMode','SQLite_SetTimeout','SQLite_Shutdown',
            'SQLite_SQLiteExe','SQLite_Startup','SQLite_TotalChanges',
            'StringAddComma','StringBetween','StringEncrypt','StringInsert',
            'StringProper','StringRepeat','StringReverse','StringSplit',
            'StringToHex','TCPIpToName','TempFile','TicksToTime','Timer_Diff',
            'Timer_GetTimerID','Timer_Init','Timer_KillAllTimers',
            'Timer_KillTimer','Timer_SetTimer','TimeToTicks','VersionCompare',
            'viClose','viExecCommand','viFindGpib','viGpibBusReset','viGTL',
            'viOpen','viSetAttribute','viSetTimeout','WeekNumberISO',
            'WinAPI_AttachConsole','WinAPI_AttachThreadInput','WinAPI_Beep',
            'WinAPI_BitBlt','WinAPI_CallNextHookEx','WinAPI_Check',
            'WinAPI_ClientToScreen','WinAPI_CloseHandle',
            'WinAPI_CommDlgExtendedError','WinAPI_CopyIcon',
            'WinAPI_CreateBitmap','WinAPI_CreateCompatibleBitmap',
            'WinAPI_CreateCompatibleDC','WinAPI_CreateEvent',
            'WinAPI_CreateFile','WinAPI_CreateFont','WinAPI_CreateFontIndirect',
            'WinAPI_CreateProcess','WinAPI_CreateSolidBitmap',
            'WinAPI_CreateSolidBrush','WinAPI_CreateWindowEx',
            'WinAPI_DefWindowProc','WinAPI_DeleteDC','WinAPI_DeleteObject',
            'WinAPI_DestroyIcon','WinAPI_DestroyWindow','WinAPI_DrawEdge',
            'WinAPI_DrawFrameControl','WinAPI_DrawIcon','WinAPI_DrawIconEx',
            'WinAPI_DrawText','WinAPI_EnableWindow','WinAPI_EnumDisplayDevices',
            'WinAPI_EnumWindows','WinAPI_EnumWindowsPopup',
            'WinAPI_EnumWindowsTop','WinAPI_ExpandEnvironmentStrings',
            'WinAPI_ExtractIconEx','WinAPI_FatalAppExit','WinAPI_FillRect',
            'WinAPI_FindExecutable','WinAPI_FindWindow','WinAPI_FlashWindow',
            'WinAPI_FlashWindowEx','WinAPI_FloatToInt',
            'WinAPI_FlushFileBuffers','WinAPI_FormatMessage','WinAPI_FrameRect',
            'WinAPI_FreeLibrary','WinAPI_GetAncestor','WinAPI_GetAsyncKeyState',
            'WinAPI_GetClassName','WinAPI_GetClientHeight',
            'WinAPI_GetClientRect','WinAPI_GetClientWidth',
            'WinAPI_GetCurrentProcess','WinAPI_GetCurrentProcessID',
            'WinAPI_GetCurrentThread','WinAPI_GetCurrentThreadId',
            'WinAPI_GetCursorInfo','WinAPI_GetDC','WinAPI_GetDesktopWindow',
            'WinAPI_GetDeviceCaps','WinAPI_GetDIBits','WinAPI_GetDlgCtrlID',
            'WinAPI_GetDlgItem','WinAPI_GetFileSizeEx','WinAPI_GetFocus',
            'WinAPI_GetForegroundWindow','WinAPI_GetIconInfo',
            'WinAPI_GetLastError','WinAPI_GetLastErrorMessage',
            'WinAPI_GetModuleHandle','WinAPI_GetMousePos','WinAPI_GetMousePosX',
            'WinAPI_GetMousePosY','WinAPI_GetObject','WinAPI_GetOpenFileName',
            'WinAPI_GetOverlappedResult','WinAPI_GetParent',
            'WinAPI_GetProcessAffinityMask','WinAPI_GetSaveFileName',
            'WinAPI_GetStdHandle','WinAPI_GetStockObject','WinAPI_GetSysColor',
            'WinAPI_GetSysColorBrush','WinAPI_GetSystemMetrics',
            'WinAPI_GetTextExtentPoint32','WinAPI_GetWindow',
            'WinAPI_GetWindowDC','WinAPI_GetWindowHeight',
            'WinAPI_GetWindowLong','WinAPI_GetWindowRect',
            'WinAPI_GetWindowText','WinAPI_GetWindowThreadProcessId',
            'WinAPI_GetWindowWidth','WinAPI_GetXYFromPoint',
            'WinAPI_GlobalMemStatus','WinAPI_GUIDFromString',
            'WinAPI_GUIDFromStringEx','WinAPI_HiWord','WinAPI_InProcess',
            'WinAPI_IntToFloat','WinAPI_InvalidateRect','WinAPI_IsClassName',
            'WinAPI_IsWindow','WinAPI_IsWindowVisible','WinAPI_LoadBitmap',
            'WinAPI_LoadImage','WinAPI_LoadLibrary','WinAPI_LoadLibraryEx',
            'WinAPI_LoadShell32Icon','WinAPI_LoadString','WinAPI_LocalFree',
            'WinAPI_LoWord','WinAPI_MakeDWord','WinAPI_MAKELANGID',
            'WinAPI_MAKELCID','WinAPI_MakeLong','WinAPI_MessageBeep',
            'WinAPI_Mouse_Event','WinAPI_MoveWindow','WinAPI_MsgBox',
            'WinAPI_MulDiv','WinAPI_MultiByteToWideChar',
            'WinAPI_MultiByteToWideCharEx','WinAPI_OpenProcess',
            'WinAPI_PointFromRect','WinAPI_PostMessage','WinAPI_PrimaryLangId',
            'WinAPI_PtInRect','WinAPI_ReadFile','WinAPI_ReadProcessMemory',
            'WinAPI_RectIsEmpty','WinAPI_RedrawWindow',
            'WinAPI_RegisterWindowMessage','WinAPI_ReleaseCapture',
            'WinAPI_ReleaseDC','WinAPI_ScreenToClient','WinAPI_SelectObject',
            'WinAPI_SetBkColor','WinAPI_SetCapture','WinAPI_SetCursor',
            'WinAPI_SetDefaultPrinter','WinAPI_SetDIBits','WinAPI_SetEvent',
            'WinAPI_SetFocus','WinAPI_SetFont','WinAPI_SetHandleInformation',
            'WinAPI_SetLastError','WinAPI_SetParent',
            'WinAPI_SetProcessAffinityMask','WinAPI_SetSysColors',
            'WinAPI_SetTextColor','WinAPI_SetWindowLong','WinAPI_SetWindowPos',
            'WinAPI_SetWindowsHookEx','WinAPI_SetWindowText',
            'WinAPI_ShowCursor','WinAPI_ShowError','WinAPI_ShowMsg',
            'WinAPI_ShowWindow','WinAPI_StringFromGUID','WinAPI_SubLangId',
            'WinAPI_SystemParametersInfo','WinAPI_TwipsPerPixelX',
            'WinAPI_TwipsPerPixelY','WinAPI_UnhookWindowsHookEx',
            'WinAPI_UpdateLayeredWindow','WinAPI_UpdateWindow',
            'WinAPI_ValidateClassName','WinAPI_WaitForInputIdle',
            'WinAPI_WaitForMultipleObjects','WinAPI_WaitForSingleObject',
            'WinAPI_WideCharToMultiByte','WinAPI_WindowFromPoint',
            'WinAPI_WriteConsole','WinAPI_WriteFile',
            'WinAPI_WriteProcessMemory','WinNet_AddConnection',
            'WinNet_AddConnection2','WinNet_AddConnection3',
            'WinNet_CancelConnection','WinNet_CancelConnection2',
            'WinNet_CloseEnum','WinNet_ConnectionDialog',
            'WinNet_ConnectionDialog1','WinNet_DisconnectDialog',
            'WinNet_DisconnectDialog1','WinNet_EnumResource',
            'WinNet_GetConnection','WinNet_GetConnectionPerformance',
            'WinNet_GetLastError','WinNet_GetNetworkInformation',
            'WinNet_GetProviderName','WinNet_GetResourceInformation',
            'WinNet_GetResourceParent','WinNet_GetUniversalName',
            'WinNet_GetUser','WinNet_OpenEnum','WinNet_RestoreConnection',
            'WinNet_UseConnection','Word_VersionInfo','WordAttach','WordCreate',
            'WordDocAdd','WordDocAddLink','WordDocAddPicture','WordDocClose',
            'WordDocFindReplace','WordDocGetCollection',
            'WordDocLinkGetCollection','WordDocOpen','WordDocPrint',
            'WordDocPropertyGet','WordDocPropertySet','WordDocSave',
            'WordDocSaveAs','WordErrorHandlerDeRegister',
            'WordErrorHandlerRegister','WordErrorNotify','WordMacroRun',
            'WordPropertyGet','WordPropertySet','WordQuit'
            ),
        5 => array(
            'ce','comments-end','comments-start','cs','include','include-once',
            'NoTrayIcon','RequireAdmin'
            ),
        6 => array(
            'AutoIt3Wrapper_Au3Check_Parameters',
            'AutoIt3Wrapper_Au3Check_Stop_OnWarning',
            'AutoIt3Wrapper_Change2CUI','AutoIt3Wrapper_Compression',
            'AutoIt3Wrapper_cvsWrapper_Parameters','AutoIt3Wrapper_Icon',
            'AutoIt3Wrapper_Outfile','AutoIt3Wrapper_Outfile_Type',
            'AutoIt3Wrapper_Plugin_Funcs','AutoIt3Wrapper_Res_Comment',
            'AutoIt3Wrapper_Res_Description','AutoIt3Wrapper_Res_Field',
            'AutoIt3Wrapper_Res_File_Add','AutoIt3Wrapper_Res_Fileversion',
            'AutoIt3Wrapper_Res_FileVersion_AutoIncrement',
            'AutoIt3Wrapper_Res_Icon_Add','AutoIt3Wrapper_Res_Language',
            'AutoIt3Wrapper_Res_LegalCopyright',
            'AutoIt3Wrapper_res_requestedExecutionLevel',
            'AutoIt3Wrapper_Res_SaveSource','AutoIt3Wrapper_Run_After',
            'AutoIt3Wrapper_Run_Au3check','AutoIt3Wrapper_Run_Before',
            'AutoIt3Wrapper_Run_cvsWrapper','AutoIt3Wrapper_Run_Debug_Mode',
            'AutoIt3Wrapper_Run_Obfuscator','AutoIt3Wrapper_Run_Tidy',
            'AutoIt3Wrapper_Tidy_Stop_OnError','AutoIt3Wrapper_UseAnsi',
            'AutoIt3Wrapper_UseUpx','AutoIt3Wrapper_UseX64',
            'AutoIt3Wrapper_Version','EndRegion','forceref',
            'Obfuscator_Ignore_Funcs','Obfuscator_Ignore_Variables',
            'Obfuscator_Parameters','Region','Tidy_Parameters'
            )
        ),
    'SYMBOLS' => array(
        '(',')','[',']',
        '+','-','*','/','&','^',
        '=','+=','-=','*=','/=','&=',
        '==','<','<=','>','>=',
        ',','.'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        4 => false,
        5 => false,
        6 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #0000FF; font-weight: bold;',
            2 => 'color: #800000; font-weight: bold;',
            3 => 'color: #000080; font-style: italic; font-weight: bold;',
            4 => 'color: #0080FF; font-style: italic; font-weight: bold;',
            5 => 'color: #F000FF; font-style: italic;',
            6 => 'color: #A00FF0; font-style: italic;'
            ),
        'COMMENTS' => array(
            'MULTI' => 'font-style: italic; color: #669900;',
            0 => 'font-style: italic; color: #009933;',
            1 => 'font-style: italic; color: #9977BB;',
            ),
        'ESCAPE_CHAR' => array(
            0 => ''
            ),
        'BRACKETS' => array(
            0 => 'color: #FF0000; font-weight: bold;'
            ),
        'STRINGS' => array(
            0 => 'font-weight: bold; color: #9977BB;'
            ),
        'NUMBERS' => array(
            0 => 'color: #AC00A9; font-style: italic; font-weight: bold;'
            ),
        'METHODS' => array(
            1 => 'color: #0000FF; font-style: italic; font-weight: bold;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #FF0000; font-weight: bold;'
            ),
        'REGEXPS' => array(
            0 => 'font-weight: bold; color: #AA0000;'
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => 'http://www.autoitscript.com/autoit3/docs/keywords.htm',
        2 => 'http://www.autoitscript.com/autoit3/docs/macros.htm',
        3 => 'http://www.autoitscript.com/autoit3/docs/functions/{FNAME}.htm',
        4 => '',
        5 => '',
        6 => ''
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '.'
        ),
    'REGEXPS' => array(
        //Variables
        0 => '[\\$%@]+[a-zA-Z_][a-zA-Z0-9_]*'
        ),
    'STRICT_MODE_APPLIES' => GESHI_MAYBE,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        0 => true,
        1 => true,
        2 => true,
        3 => true
        ),
    'PARSER_CONTROL' => array(
        'KEYWORDS' => array(
            4 => array(
                'DISALLOWED_BEFORE' => '(?<!\w)\_'
            ),
            5 => array(
                'DISALLOWED_BEFORE' => '(?<!\w)\#'
            ),
            6 => array(
                'DISALLOWED_BEFORE' => '(?<!\w)\#'
            )
        )
    )
);

?>
