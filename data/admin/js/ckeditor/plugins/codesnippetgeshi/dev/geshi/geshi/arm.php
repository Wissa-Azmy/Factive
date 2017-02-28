<?php
/*************************************************************************************
 * arm.php
 * -------
 * Author: Marat Dukhan (mdukhan3.at.gatech.dot.edu)
 * Copyright: (c) Marat Dukhan (mdukhan3.at.gatech.dot.edu)
 * Release Version: 1.0.8.11
 * Date Started: 2011/10/06
 *
 * ARM Assembler language file for GeSHi.
 * Based on the following documents:
 *   - "ARM Architecture Reference Manual: ARMv7-A and ARMv7-R edition"
 *   - "Intel XScale Technology: Intel Wireless MMX2 Coprocessor",
 *       Revision 1.5, July 2006
 *
 * CHANGES
 * -------
 * 2011/10/06
 *   -  First Release (supported UAL syntax for up to ARMv7 A/R, VFPv3, NEON, WMMX/WMMX2)
 *
 * TODO (updated 2011/10/06)
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
    'LANG_NAME' => 'ARM ASSEMBLER',
    'COMMENT_SINGLE' => array(
        1 => ';'
        ),
    'COMMENT_MULTI' => array(),
    //Line address prefix suppression
    'COMMENT_REGEXP' => array(
        2 => "/^(?:[0-9a-f]{0,4}:)?[0-9a-f]{4}(?:[0-9a-f]{4})?/mi"
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        /* Unconditional Data Processing Instructions */
        1 => array(
            /* Data Processing: Unconditional Addition & Subtraction */
            'adc.w','adcal.w',
            'adc','adcal',
            'add.w','addal.w',
            'add','addal',
            'addw','addwal',
            'rsb.w','rsbal.w',
            'rsb','rsbal',
            'rsc','rscal',
            'sbc.w','sbcal.w',
            'sbc','sbcal',
            'sub.w','subal.w',
            'sub','subal',
            'neg.w','negal.w',
            'neg','negal',
            'adr.w','adral.w',
            'adr','adral',
            /* Data Processing: Unconditional Logical */
            'and.w','andal.w',
            'and','andal',
            'bic.w','bical.w',
            'bic','bical',
            'orr.w','orral.w',
            'orr','orral',
            'orn.w','ornal.w',
            'orn','ornal',
            'eor.w','eoral.w',
            'eor','eoral',
            'mov.w','moval.w',
            'mov','moval',
            'movw','movwal',
            'movt','movtal',
            'cpy','cpyal',
            'mvn.w','mvnal.w',
            'mvn','mvnal',
            /* Data Processing: Unconditional Shifts and Rotates */
            'asr.w','asral.w',
            'asr','asral',
            'lsl.w','lslal.w',
            'lsl','lslal',
            'lsr.w','lsral.w',
            'lsr','lsral',
            'ror.w','roral.w',
            'ror','roral',
            'rrx','rrxal',
            /* Data Processing: Unconditional Word Multiply and Multiply-Add */
            'mul','mulal',
            'mla','mlaal',
            'mls','mlsal',
            'smull','smullal',
            'muls','mulsal',
            'umull','umullal',
            'smlal','smlalal',
            'umlal','umlalal',
            /* Data Processing: Unconditional Halfword Multiply and Multiply-Add (ARMv5TE) */
            'smulbb','smulbbal',
            'smulbt','smulbtal',
            'smultb','smultbal',
            'smultt','smulttal',
            'smulwb','smulwbal',
            'smulwt','smulwtal',
            'smlalbb','smlalbbal',
            'smlalbt','smlalbtal',
            'smlaltb','smlaltbal',
            'smlaltt','smlalttal',
            'smlabb','smlabbal',
            'smlabt','smlabtal',
            'smlatb','smlatbal',
            'smlatt','smlattal',
            'smlawb','smlawbal',
            'smlawt','smlawtal',
            /* Data Processing: Unconditional Bit Operations */
            'ubfx','ubfxal',
            'sbfx','sbfxal',
            'bfc','bfcal',
            'bfi','bfial',
            'clz','clzal',
            /* Data Processing: Unconditional Divide (ARMv7-R) */
            'sdiv','sdival',
            'udiv','udival'
            ),
        /* Conditional Data Processing Instructions */
        2 => array(
            /* Data Processing: Conditional Addition & Subtraction */
            'adceq.w','adcne.w','adccs.w','adchs.w','adccc.w','adclo.w','adcmi.w','adcpl.w','adcvs.w','adcvc.w','adchi.w','adcls.w','adcge.w','adclt.w','adcgt.w','adcle.w',
            'adceq','adcne','adccs','adchs','adccc','adclo','adcmi','adcpl','adcvs','adcvc','adchi','adcls','adcge','adclt','adcgt','adcle',
            'addeq.w','addne.w','addcs.w','addhs.w','addcc.w','addlo.w','addmi.w','addpl.w','addvs.w','addvc.w','addhi.w','addls.w','addge.w','addlt.w','addgt.w','addle.w',
            'addeq','addne','addcs','addhs','addcc','addlo','addmi','addpl','addvs','addvc','addhi','addls','addge','addlt','addgt','addle',
            'addweq','addwne','addwcs','addwhs','addwcc','addwlo','addwmi','addwpl','addwvs','addwvc','addwhi','addwls','addwge','addwlt','addwgt','addwle',
            'rsbeq.w','rsbne.w','rsbcs.w','rsbhs.w','rsbcc.w','rsblo.w','rsbmi.w','rsbpl.w','rsbvs.w','rsbvc.w','rsbhi.w','rsbls.w','rsbge.w','rsblt.w','rsbgt.w','rsble.w',
            'rsbeq','rsbne','rsbcs','rsbhs','rsbcc','rsblo','rsbmi','rsbpl','rsbvs','rsbvc','rsbhi','rsbls','rsbge','rsblt','rsbgt','rsble',
            'rsceq','rscne','rsccs','rschs','rsccc','rsclo','rscmi','rscpl','rscvs','rscvc','rschi','rscls','rscge','rsclt','rscgt','rscle',
            'sbceq.w','sbcne.w','sbccs.w','sbchs.w','sbccc.w','sbclo.w','sbcmi.w','sbcpl.w','sbcvs.w','sbcvc.w','sbchi.w','sbcls.w','sbcge.w','sbclt.w','sbcgt.w','sbcle.w',
            'sbceq','sbcne','sbccs','sbchs','sbccc','sbclo','sbcmi','sbcpl','sbcvs','sbcvc','sbchi','sbcls','sbcge','sbclt','sbcgt','sbcle',
            'subeq.w','subne.w','subcs.w','subhs.w','subcc.w','sublo.w','submi.w','subpl.w','subvs.w','subvc.w','subhi.w','subls.w','subge.w','sublt.w','subgt.w','suble.w',
            'subeq','subne','subcs','subhs','subcc','sublo','submi','subpl','subvs','subvc','subhi','subls','subge','sublt','subgt','suble',
            'negeq.w','negne.w','negcs.w','neghs.w','negcc.w','neglo.w','negmi.w','negpl.w','negvs.w','negvc.w','neghi.w','negls.w','negge.w','neglt.w','neggt.w','negle.w',
            'negeq','negne','negcs','neghs','negcc','neglo','negmi','negpl','negvs','negvc','neghi','negls','negge','neglt','neggt','negle',
            'adreq.w','adrne.w','adrcs.w','adrhs.w','adrcc.w','adrlo.w','adrmi.w','adrpl.w','adrvs.w','adrvc.w','adrhi.w','adrls.w','adrge.w','adrlt.w','adrgt.w','adrle.w',
            'adreq','adrne','adrcs','adrhs','adrcc','adrlo','adrmi','adrpl','adrvs','adrvc','adrhi','adrls','adrge','adrlt','adrgt','adrle',
            /* Data Processing: Conditional Logical */
            'andeq.w','andne.w','andcs.w','andhs.w','andcc.w','andlo.w','andmi.w','andpl.w','andvs.w','andvc.w','andhi.w','andls.w','andge.w','andlt.w','andgt.w','andle.w',
            'andeq','andne','andcs','andhs','andcc','andlo','andmi','andpl','andvs','andvc','andhi','andls','andge','andlt','andgt','andle',
            'biceq.w','bicne.w','biccs.w','bichs.w','biccc.w','biclo.w','bicmi.w','bicpl.w','bicvs.w','bicvc.w','bichi.w','bicls.w','bicge.w','biclt.w','bicgt.w','bicle.w',
            'biceq','bicne','biccs','bichs','biccc','biclo','bicmi','bicpl','bicvs','bicvc','bichi','bicls','bicge','biclt','bicgt','bicle',
            'orreq.w','orrne.w','orrcs.w','orrhs.w','orrcc.w','orrlo.w','orrmi.w','orrpl.w','orrvs.w','orrvc.w','orrhi.w','orrls.w','orrge.w','orrlt.w','orrgt.w','orrle.w',
            'orreq','orrne','orrcs','orrhs','orrcc','orrlo','orrmi','orrpl','orrvs','orrvc','orrhi','orrls','orrge','orrlt','orrgt','orrle',
            'orneq.w','ornne.w','orncs.w','ornhs.w','orncc.w','ornlo.w','ornmi.w','ornpl.w','ornvs.w','ornvc.w','ornhi.w','ornls.w','ornge.w','ornlt.w','orngt.w','ornle.w',
            'orneq','ornne','orncs','ornhs','orncc','ornlo','ornmi','ornpl','ornvs','ornvc','ornhi','ornls','ornge','ornlt','orngt','ornle',
            'eoreq.w','eorne.w','eorcs.w','eorhs.w','eorcc.w','eorlo.w','eormi.w','eorpl.w','eorvs.w','eorvc.w','eorhi.w','eorls.w','eorge.w','eorlt.w','eorgt.w','eorle.w',
            'eoreq','eorne','eorcs','eorhs','eorcc','eorlo','eormi','eorpl','eorvs','eorvc','eorhi','eorls','eorge','eorlt','eorgt','eorle',
            'moveq.w','movne.w','movcs.w','movhs.w','movcc.w','movlo.w','movmi.w','movpl.w','movvs.w','movvc.w','movhi.w','movls.w','movge.w','movlt.w','movgt.w','movle.w',
            'moveq','movne','movcs','movhs','movcc','movlo','movmi','movpl','movvs','movvc','movhi','movls','movge','movlt','movgt','movle',
            'movweq','movwne','movwcs','movwhs','movwcc','movwlo','movwmi','movwpl','movwvs','movwvc','movwhi','movwls','movwge','movwlt','movwgt','movwle',
            'movteq','movtne','movtcs','movths','movtcc','movtlo','movtmi','movtpl','movtvs','movtvc','movthi','movtls','movtge','movtlt','movtgt','movtle',
            'cpyeq','cpyne','cpycs','cpyhs','cpycc','cpylo','cpymi','cpypl','cpyvs','cpyvc','cpyhi','cpyls','cpyge','cpylt','cpygt','cpyle',
            'mvneq.w','mvnne.w','mvncs.w','mvnhs.w','mvncc.w','mvnlo.w','mvnmi.w','mvnpl.w','mvnvs.w','mvnvc.w','mvnhi.w','mvnls.w','mvnge.w','mvnlt.w','mvngt.w','mvnle.w',
            'mvneq','mvnne','mvncs','mvnhs','mvncc','mvnlo','mvnmi','mvnpl','mvnvs','mvnvc','mvnhi','mvnls','mvnge','mvnlt','mvngt','mvnle',
            /* Data Processing: Conditional Shifts and Rotates */
            'asreq.w','asrne.w','asrcs.w','asrhs.w','asrcc.w','asrlo.w','asrmi.w','asrpl.w','asrvs.w','asrvc.w','asrhi.w','asrls.w','asrge.w','asrlt.w','asrgt.w','asrle.w',
            'asreq','asrne','asrcs','asrhs','asrcc','asrlo','asrmi','asrpl','asrvs','asrvc','asrhi','asrls','asrge','asrlt','asrgt','asrle',
            'lsleq.w','lslne.w','lslcs.w','lslhs.w','lslcc.w','lsllo.w','lslmi.w','lslpl.w','lslvs.w','lslvc.w','lslhi.w','lslls.w','lslge.w','lsllt.w','lslgt.w','lslle.w',
            'lsleq','lslne','lslcs','lslhs','lslcc','lsllo','lslmi','lslpl','lslvs','lslvc','lslhi','lslls','lslge','lsllt','lslgt','lslle',
            'lsreq.w','lsrne.w','lsrcs.w','lsrhs.w','lsrcc.w','lsrlo.w','lsrmi.w','lsrpl.w','lsrvs.w','lsrvc.w','lsrhi.w','lsrls.w','lsrge.w','lsrlt.w','lsrgt.w','lsrle.w',
            'lsreq','lsrne','lsrcs','lsrhs','lsrcc','lsrlo','lsrmi','lsrpl','lsrvs','lsrvc','lsrhi','lsrls','lsrge','lsrlt','lsrgt','lsrle',
            'roreq.w','rorne.w','rorcs.w','rorhs.w','rorcc.w','rorlo.w','rormi.w','rorpl.w','rorvs.w','rorvc.w','rorhi.w','rorls.w','rorge.w','rorlt.w','rorgt.w','rorle.w',
            'roreq','rorne','rorcs','rorhs','rorcc','rorlo','rormi','rorpl','rorvs','rorvc','rorhi','rorls','rorge','rorlt','rorgt','rorle',
            'rrxeq','rrxne','rrxcs','rrxhs','rrxcc','rrxlo','rrxmi','rrxpl','rrxvs','rrxvc','rrxhi','rrxls','rrxge','rrxlt','rrxgt','rrxle',
            /* Data Processing: Conditional Word Multiply and Multiply-Add */
            'muleq','mulne','mulcs','mulhs','mulcc','mullo','mulmi','mulpl','mulvs','mulvc','mulhi','mulls','mulge','mullt','mulgt','mulle',
            'mlaeq','mlane','mlacs','mlahs','mlacc','mlalo','mlami','mlapl','mlavs','mlavc','mlahi','mlals','mlage','mlalt','mlagt','mlale',
            'mlseq','mlsne','mlscs','mlshs','mlscc','mlslo','mlsmi','mlspl','mlsvs','mlsvc','mlshi','mlsls','mlsge','mlslt','mlsgt','mlsle',
            'smulleq','smullne','smullcs','smullhs','smullcc','smulllo','smullmi','smullpl','smullvs','smullvc','smullhi','smullls','smullge','smulllt','smullgt','smullle',
            'mulseq','mulsne','mulscs','mulshs','mulscc','mulslo','mulsmi','mulspl','mulsvs','mulsvc','mulshi','mulsls','mulsge','mulslt','mulsgt','mulsle',
            'umulleq','umullne','umullcs','umullhs','umullcc','umulllo','umullmi','umullpl','umullvs','umullvc','umullhi','umullls','umullge','umulllt','umullgt','umullle',
            'smlaleq','smlalne','smlalcs','smlalhs','smlalcc','smlallo','smlalmi','smlalpl','smlalvs','smlalvc','smlalhi','smlalls','smlalge','smlallt','smlalgt','smlalle',
            'umlaleq','umlalne','umlalcs','umlalhs','umlalcc','umlallo','umlalmi','umlalpl','umlalvs','umlalvc','umlalhi','umlalls','umlalge','umlallt','umlalgt','umlalle',
            /* Data Processing: Conditional Halfword Multiply and Multiply-Add (ARMv5TE) */
            'smulbbeq','smulbbne','smulbbcs','smulbbhs','smulbbcc','smulbblo','smulbbmi','smulbbpl','smulbbvs','smulbbvc','smulbbhi','smulbbls','smulbbge','smulbblt','smulbbgt','smulbble',
            'smulbteq','smulbtne','smulbtcs','smulbths','smulbtcc','smulbtlo','smulbtmi','smulbtpl','smulbtvs','smulbtvc','smulbthi','smulbtls','smulbtge','smulbtlt','smulbtgt','smulbtle',
            'smultbeq','smultbne','smultbcs','smultbhs','smultbcc','smultblo','smultbmi','smultbpl','smultbvs','smultbvc','smultbhi','smultbls','smultbge','smultblt','smultbgt','smultble',
            'smultteq','smulttne','smulttcs','smultths','smulttcc','smulttlo','smulttmi','smulttpl','smulttvs','smulttvc','smultthi','smulttls','smulttge','smulttlt','smulttgt','smulttle',
            'smulwbeq','smulwbne','smulwbcs','smulwbhs','smulwbcc','smulwblo','smulwbmi','smulwbpl','smulwbvs','smulwbvc','smulwbhi','smulwbls','smulwbge','smulwblt','smulwbgt','smulwble',
            'smulwteq','smulwtne','smulwtcs','smulwths','smulwtcc','smulwtlo','smulwtmi','smulwtpl','smulwtvs','smulwtvc','smulwthi','smulwtls','smulwtge','smulwtlt','smulwtgt','smulwtle',
            'smlalbbeq','smlalbbne','smlalbbcs','smlalbbhs','smlalbbcc','smlalbblo','smlalbbmi','smlalbbpl','smlalbbvs','smlalbbvc','smlalbbhi','smlalbbls','smlalbbge','smlalbblt','smlalbbgt','smlalbble',
            'smlalbteq','smlalbtne','smlalbtcs','smlalbths','smlalbtcc','smlalbtlo','smlalbtmi','smlalbtpl','smlalbtvs','smlalbtvc','smlalbthi','smlalbtls','smlalbtge','smlalbtlt','smlalbtgt','smlalbtle',
            'smlaltbeq','smlaltbne','smlaltbcs','smlaltbhs','smlaltbcc','smlaltblo','smlaltbmi','smlaltbpl','smlaltbvs','smlaltbvc','smlaltbhi','smlaltbls','smlaltbge','smlaltblt','smlaltbgt','smlaltble',
            'smlaltteq','smlalttne','smlalttcs','smlaltths','smlalttcc','smlalttlo','smlalttmi','smlalttpl','smlalttvs','smlalttvc','smlaltthi','smlalttls','smlalttge','smlalttlt','smlalttgt','smlalttle',
            'smlabbeq','smlabbne','smlabbcs','smlabbhs','smlabbcc','smlabblo','smlabbmi','smlabbpl','smlabbvs','smlabbvc','smlabbhi','smlabbls','smlabbge','smlabblt','smlabbgt','smlabble',
            'smlabteq','smlabtne','smlabtcs','smlabths','smlabtcc','smlabtlo','smlabtmi','smlabtpl','smlabtvs','smlabtvc','smlabthi','smlabtls','smlabtge','smlabtlt','smlabtgt','smlabtle',
            'smlatbeq','smlatbne','smlatbcs','smlatbhs','smlatbcc','smlatblo','smlatbmi','smlatbpl','smlatbvs','smlatbvc','smlatbhi','smlatbls','smlatbge','smlatblt','smlatbgt','smlatble',
            'smlatteq','smlattne','smlattcs','smlatths','smlattcc','smlattlo','smlattmi','smlattpl','smlattvs','smlattvc','smlatthi','smlattls','smlattge','smlattlt','smlattgt','smlattle',
            'smlawbeq','smlawbne','smlawbcs','smlawbhs','smlawbcc','smlawblo','smlawbmi','smlawbpl','smlawbvs','smlawbvc','smlawbhi','smlawbls','smlawbge','smlawblt','smlawbgt','smlawble',
            'smlawteq','smlawtne','smlawtcs','smlawths','smlawtcc','smlawtlo','smlawtmi','smlawtpl','smlawtvs','smlawtvc','smlawthi','smlawtls','smlawtge','smlawtlt','smlawtgt','smlawtle',
            /* Data Processing: Conditional Bit Operations */
            'ubfxeq','ubfxne','ubfxcs','ubfxhs','ubfxcc','ubfxlo','ubfxmi','ubfxpl','ubfxvs','ubfxvc','ubfxhi','ubfxls','ubfxge','ubfxlt','ubfxgt','ubfxle',
            'sbfxeq','sbfxne','sbfxcs','sbfxhs','sbfxcc','sbfxlo','sbfxmi','sbfxpl','sbfxvs','sbfxvc','sbfxhi','sbfxls','sbfxge','sbfxlt','sbfxgt','sbfxle',
            'bfceq','bfcne','bfccs','bfchs','bfccc','bfclo','bfcmi','bfcpl','bfcvs','bfcvc','bfchi','bfcls','bfcge','bfclt','bfcgt','bfcle',
            'bfieq','bfine','bfics','bfihs','bficc','bfilo','bfimi','bfipl','bfivs','bfivc','bfihi','bfils','bfige','bfilt','bfigt','bfile',
            'clzeq','clzne','clzcs','clzhs','clzcc','clzlo','clzmi','clzpl','clzvs','clzvc','clzhi','clzls','clzge','clzlt','clzgt','clzle',
            /* ARMv7-R: Conditional Divide */
            'sdiveq','sdivne','sdivcs','sdivhs','sdivcc','sdivlo','sdivmi','sdivpl','sdivvs','sdivvc','sdivhi','sdivls','sdivge','sdivlt','sdivgt','sdivle',
            'udiveq','udivne','udivcs','udivhs','udivcc','udivlo','udivmi','udivpl','udivvs','udivvc','udivhi','udivls','udivge','udivlt','udivgt','udivle'
            ),
        /* Unconditional Memory Access */
        3 => array(
            /* Memory Access: Unconditional Memory Loads and Prefetches */
            'ldm.w','ldmal.w',
            'ldm','ldmal',
            'ldmda','ldmdaal',
            'ldmdb','ldmdbal',
            'ldmib','ldmibal',
            'ldmia','ldmiaal',
            'ldmea','ldmeaal',
            'ldmed','ldmedal',
            'ldmfa','ldmfaal',
            'ldmfd','ldmfdal',
            'ldrd','ldrdal',
            'ldr.w','ldral.w',
            'ldr','ldral',
            'ldrh.w','ldrhal.w',
            'ldrh','ldrhal',
            'ldrb.w','ldrbal.w',
            'ldrb','ldrbal',
            'ldrsh.w','ldrshal.w',
            'ldrsh','ldrshal',
            'ldrsb.w','ldrsbal.w',
            'ldrsb','ldrsbal',
            'ldrt','ldrtal',
            'ldrht','ldrhtal',
            'ldrbt','ldrbtal',
            'ldrsht','ldrshtal',
            'ldrsbt','ldrsbtal',
            'pop.w','popal.w',
            'pop','popal',
            'pld','pldal',
            'pldw','pldwal',
            'pli','plial',
            /* Memory Access: Unconditional Memory Stores */
            'stm.w','stmal.w',
            'stm','stmal',
            'stmda','stmdaal',
            'stmdb','stmdbal',
            'stmib','stmibal',
            'stmia','stmiaal',
            'stmea','stmeaal',
            'stmed','stmedal',
            'stdfa','stdfaal',
            'stdfd','stdfdal',
            'strd','strdal',
            'str.w','stral.w',
            'str','stral',
            'strh.w','strhal.w',
            'strh','strhal',
            'strb.w','strbal.w',
            'strb','strbal',
            'strt','strtal',
            'strht','strhtal',
            'strbt','strbtal',
            'push.w','pushal.w',
            'push','pushal'
            ),
        /* Conditional Memory Access */
        4 => array(
            /* Memory Access: Conditional Memory Loads and Prefetches */
            'ldmeq.w','ldmne.w','ldmcs.w','ldmhs.w','ldmcc.w','ldmlo.w','ldmmi.w','ldmpl.w','ldmvs.w','ldmvc.w','ldmhi.w','ldmls.w','ldmge.w','ldmlt.w','ldmgt.w','ldmle.w',
            'ldmeq','ldmne','ldmcs','ldmhs','ldmcc','ldmlo','ldmmi','ldmpl','ldmvs','ldmvc','ldmhi','ldmls','ldmge','ldmlt','ldmgt','ldmle',
            'ldmdaeq','ldmdane','ldmdacs','ldmdahs','ldmdacc','ldmdalo','ldmdami','ldmdapl','ldmdavs','ldmdavc','ldmdahi','ldmdals','ldmdage','ldmdalt','ldmdagt','ldmdale',
            'ldmdbeq','ldmdbne','ldmdbcs','ldmdbhs','ldmdbcc','ldmdblo','ldmdbmi','ldmdbpl','ldmdbvs','ldmdbvc','ldmdbhi','ldmdbls','ldmdbge','ldmdblt','ldmdbgt','ldmdble',
            'ldmibeq','ldmibne','ldmibcs','ldmibhs','ldmibcc','ldmiblo','ldmibmi','ldmibpl','ldmibvs','ldmibvc','ldmibhi','ldmibls','ldmibge','ldmiblt','ldmibgt','ldmible',
            'ldmiaeq','ldmiane','ldmiacs','ldmiahs','ldmiacc','ldmialo','ldmiami','ldmiapl','ldmiavs','ldmiavc','ldmiahi','ldmials','ldmiage','ldmialt','ldmiagt','ldmiale',
            'ldmeaeq','ldmeane','ldmeacs','ldmeahs','ldmeacc','ldmealo','ldmeami','ldmeapl','ldmeavs','ldmeavc','ldmeahi','ldmeals','ldmeage','ldmealt','ldmeagt','ldmeale',
            'ldmedeq','ldmedne','ldmedcs','ldmedhs','ldmedcc','ldmedlo','ldmedmi','ldmedpl','ldmedvs','ldmedvc','ldmedhi','ldmedls','ldmedge','ldmedlt','ldmedgt','ldmedle',
            'ldmfaeq','ldmfane','ldmfacs','ldmfahs','ldmfacc','ldmfalo','ldmfami','ldmfapl','ldmfavs','ldmfavc','ldmfahi','ldmfals','ldmfage','ldmfalt','ldmfagt','ldmfale',
            'ldmfdeq','ldmfdne','ldmfdcs','ldmfdhs','ldmfdcc','ldmfdlo','ldmfdmi','ldmfdpl','ldmfdvs','ldmfdvc','ldmfdhi','ldmfdls','ldmfdge','ldmfdlt','ldmfdgt','ldmfdle',
            'ldrdeq','ldrdne','ldrdcs','ldrdhs','ldrdcc','ldrdlo','ldrdmi','ldrdpl','ldrdvs','ldrdvc','ldrdhi','ldrdls','ldrdge','ldrdlt','ldrdgt','ldrdle',
            'ldreq.w','ldrne.w','ldrcs.w','ldrhs.w','ldrcc.w','ldrlo.w','ldrmi.w','ldrpl.w','ldrvs.w','ldrvc.w','ldrhi.w','ldrls.w','ldrge.w','ldrlt.w','ldrgt.w','ldrle.w',
            'ldreq','ldrne','ldrcs','ldrhs','ldrcc','ldrlo','ldrmi','ldrpl','ldrvs','ldrvc','ldrhi','ldrls','ldrge','ldrlt','ldrgt','ldrle',
            'ldrheq.w','ldrhne.w','ldrhcs.w','ldrhhs.w','ldrhcc.w','ldrhlo.w','ldrhmi.w','ldrhpl.w','ldrhvs.w','ldrhvc.w','ldrhhi.w','ldrhls.w','ldrhge.w','ldrhlt.w','ldrhgt.w','ldrhle.w',
            'ldrheq','ldrhne','ldrhcs','ldrhhs','ldrhcc','ldrhlo','ldrhmi','ldrhpl','ldrhvs','ldrhvc','ldrhhi','ldrhls','ldrhge','ldrhlt','ldrhgt','ldrhle',
            'ldrbeq.w','ldrbne.w','ldrbcs.w','ldrbhs.w','ldrbcc.w','ldrblo.w','ldrbmi.w','ldrbpl.w','ldrbvs.w','ldrbvc.w','ldrbhi.w','ldrbls.w','ldrbge.w','ldrblt.w','ldrbgt.w','ldrble.w',
            'ldrbeq','ldrbne','ldrbcs','ldrbhs','ldrbcc','ldrblo','ldrbmi','ldrbpl','ldrbvs','ldrbvc','ldrbhi','ldrbls','ldrbge','ldrblt','ldrbgt','ldrble',
            'ldrsheq.w','ldrshne.w','ldrshcs.w','ldrshhs.w','ldrshcc.w','ldrshlo.w','ldrshmi.w','ldrshpl.w','ldrshvs.w','ldrshvc.w','ldrshhi.w','ldrshls.w','ldrshge.w','ldrshlt.w','ldrshgt.w','ldrshle.w',
            'ldrsheq','ldrshne','ldrshcs','ldrshhs','ldrshcc','ldrshlo','ldrshmi','ldrshpl','ldrshvs','ldrshvc','ldrshhi','ldrshls','ldrshge','ldrshlt','ldrshgt','ldrshle',
            'ldrsbeq.w','ldrsbne.w','ldrsbcs.w','ldrsbhs.w','ldrsbcc.w','ldrsblo.w','ldrsbmi.w','ldrsbpl.w','ldrsbvs.w','ldrsbvc.w','ldrsbhi.w','ldrsbls.w','ldrsbge.w','ldrsblt.w','ldrsbgt.w','ldrsble.w',
            'ldrsbeq','ldrsbne','ldrsbcs','ldrsbhs','ldrsbcc','ldrsblo','ldrsbmi','ldrsbpl','ldrsbvs','ldrsbvc','ldrsbhi','ldrsbls','ldrsbge','ldrsblt','ldrsbgt','ldrsble',
            'ldrteq','ldrtne','ldrtcs','ldrths','ldrtcc','ldrtlo','ldrtmi','ldrtpl','ldrtvs','ldrtvc','ldrthi','ldrtls','ldrtge','ldrtlt','ldrtgt','ldrtle',
            'ldrhteq','ldrhtne','ldrhtcs','ldrhths','ldrhtcc','ldrhtlo','ldrhtmi','ldrhtpl','ldrhtvs','ldrhtvc','ldrhthi','ldrhtls','ldrhtge','ldrhtlt','ldrhtgt','ldrhtle',
            'ldrbteq','ldrbtne','ldrbtcs','ldrbths','ldrbtcc','ldrbtlo','ldrbtmi','ldrbtpl','ldrbtvs','ldrbtvc','ldrbthi','ldrbtls','ldrbtge','ldrbtlt','ldrbtgt','ldrbtle',
            'ldrshteq','ldrshtne','ldrshtcs','ldrshths','ldrshtcc','ldrshtlo','ldrshtmi','ldrshtpl','ldrshtvs','ldrshtvc','ldrshthi','ldrshtls','ldrshtge','ldrshtlt','ldrshtgt','ldrshtle',
            'ldrsbteq','ldrsbtne','ldrsbtcs','ldrsbths','ldrsbtcc','ldrsbtlo','ldrsbtmi','ldrsbtpl','ldrsbtvs','ldrsbtvc','ldrsbthi','ldrsbtls','ldrsbtge','ldrsbtlt','ldrsbtgt','ldrsbtle',
            'popeq.w','popne.w','popcs.w','pophs.w','popcc.w','poplo.w','popmi.w','poppl.w','popvs.w','popvc.w','pophi.w','popls.w','popge.w','poplt.w','popgt.w','pople.w',
            'popeq','popne','popcs','pophs','popcc','poplo','popmi','poppl','popvs','popvc','pophi','popls','popge','poplt','popgt','pople',
            'pldeq','pldne','pldcs','pldhs','pldcc','pldlo','pldmi','pldpl','pldvs','pldvc','pldhi','pldls','pldge','pldlt','pldgt','pldle',
            'pldweq','pldwne','pldwcs','pldwhs','pldwcc','pldwlo','pldwmi','pldwpl','pldwvs','pldwvc','pldwhi','pldwls','pldwge','pldwlt','pldwgt','pldwle',
            'plieq','pline','plics','plihs','plicc','plilo','plimi','plipl','plivs','plivc','plihi','plils','plige','plilt','pligt','plile',
            /* Memory Access: Conditional Memory Stores */
            'stmeq.w','stmne.w','stmcs.w','stmhs.w','stmcc.w','stmlo.w','stmmi.w','stmpl.w','stmvs.w','stmvc.w','stmhi.w','stmls.w','stmge.w','stmlt.w','stmgt.w','stmle.w',
            'stmeq','stmne','stmcs','stmhs','stmcc','stmlo','stmmi','stmpl','stmvs','stmvc','stmhi','stmls','stmge','stmlt','stmgt','stmle',
            'stmdaeq','stmdane','stmdacs','stmdahs','stmdacc','stmdalo','stmdami','stmdapl','stmdavs','stmdavc','stmdahi','stmdals','stmdage','stmdalt','stmdagt','stmdale',
            'stmdbeq','stmdbne','stmdbcs','stmdbhs','stmdbcc','stmdblo','stmdbmi','stmdbpl','stmdbvs','stmdbvc','stmdbhi','stmdbls','stmdbge','stmdblt','stmdbgt','stmdble',
            'stmibeq','stmibne','stmibcs','stmibhs','stmibcc','stmiblo','stmibmi','stmibpl','stmibvs','stmibvc','stmibhi','stmibls','stmibge','stmiblt','stmibgt','stmible',
            'stmiaeq','stmiane','stmiacs','stmiahs','stmiacc','stmialo','stmiami','stmiapl','stmiavs','stmiavc','stmiahi','stmials','stmiage','stmialt','stmiagt','stmiale',
            'stmeaeq','stmeane','stmeacs','stmeahs','stmeacc','stmealo','stmeami','stmeapl','stmeavs','stmeavc','stmeahi','stmeals','stmeage','stmealt','stmeagt','stmeale',
            'stmedeq','stmedne','stmedcs','stmedhs','stmedcc','stmedlo','stmedmi','stmedpl','stmedvs','stmedvc','stmedhi','stmedls','stmedge','stmedlt','stmedgt','stmedle',
            'stdfaeq','stdfane','stdfacs','stdfahs','stdfacc','stdfalo','stdfami','stdfapl','stdfavs','stdfavc','stdfahi','stdfals','stdfage','stdfalt','stdfagt','stdfale',
            'stdfdeq','stdfdne','stdfdcs','stdfdhs','stdfdcc','stdfdlo','stdfdmi','stdfdpl','stdfdvs','stdfdvc','stdfdhi','stdfdls','stdfdge','stdfdlt','stdfdgt','stdfdle',
            'strdeq','strdne','strdcs','strdhs','strdcc','strdlo','strdmi','strdpl','strdvs','strdvc','strdhi','strdls','strdge','strdlt','strdgt','strdle',
            'streq.w','strne.w','strcs.w','strhs.w','strcc.w','strlo.w','strmi.w','strpl.w','strvs.w','strvc.w','strhi.w','strls.w','strge.w','strlt.w','strgt.w','strle.w',
            'streq','strne','strcs','strhs','strcc','strlo','strmi','strpl','strvs','strvc','strhi','strls','strge','strlt','strgt','strle',
            'strheq.w','strhne.w','strhcs.w','strhhs.w','strhcc.w','strhlo.w','strhmi.w','strhpl.w','strhvs.w','strhvc.w','strhhi.w','strhls.w','strhge.w','strhlt.w','strhgt.w','strhle.w',
            'strheq','strhne','strhcs','strhhs','strhcc','strhlo','strhmi','strhpl','strhvs','strhvc','strhhi','strhls','strhge','strhlt','strhgt','strhle',
            'strbeq.w','strbne.w','strbcs.w','strbhs.w','strbcc.w','strblo.w','strbmi.w','strbpl.w','strbvs.w','strbvc.w','strbhi.w','strbls.w','strbge.w','strblt.w','strbgt.w','strble.w',
            'strbeq','strbne','strbcs','strbhs','strbcc','strblo','strbmi','strbpl','strbvs','strbvc','strbhi','strbls','strbge','strblt','strbgt','strble',
            'strteq','strtne','strtcs','strths','strtcc','strtlo','strtmi','strtpl','strtvs','strtvc','strthi','strtls','strtge','strtlt','strtgt','strtle',
            'strhteq','strhtne','strhtcs','strhths','strhtcc','strhtlo','strhtmi','strhtpl','strhtvs','strhtvc','strhthi','strhtls','strhtge','strhtlt','strhtgt','strhtle',
            'strbteq','strbtne','strbtcs','strbths','strbtcc','strbtlo','strbtmi','strbtpl','strbtvs','strbtvc','strbthi','strbtls','strbtge','strbtlt','strbtgt','strbtle',
            'pusheq.w','pushne.w','pushcs.w','pushhs.w','pushcc.w','pushlo.w','pushmi.w','pushpl.w','pushvs.w','pushvc.w','pushhi.w','pushls.w','pushge.w','pushlt.w','pushgt.w','pushle.w',
            'pusheq','pushne','pushcs','pushhs','pushcc','pushlo','pushmi','pushpl','pushvs','pushvc','pushhi','pushls','pushge','pushlt','pushgt','pushle'
            ),
        /* Unconditional Flags-Affecting Instructions */
        5 => array(
            /* Set Flags: Unconditional Addition and Subtraction */
            'adds.w','addsal.w',
            'adds','addsal',
            'subs.w','subsal.w',
            'subs','subsal',
            'rsbs.w','rsbsal.w',
            'rsbs','rsbsal',
            'negs.w','negsal.w',
            'negs','negsal',
            'adcs.w','adcsal.w',
            'adcs','adcsal',
            'sbcs.w','sbcsal.w',
            'sbcs','sbcsal',
            'rscs','rscsal',
            'cmp.w','cmpal.w',
            'cmp','cmpal',
            'cmn.w','cmnal.w',
            'cmn','cmnal',
            /* Set Flags: Unconditional Logical */
            'ands.w','andsal.w',
            'ands','andsal',
            'bics.w','bicsal.w',
            'bics','bicsal',
            'orrs.w','orrsal.w',
            'orrs','orrsal',
            'orns.w','ornsal.w',
            'orns','ornsal',
            'eors.w','eorsal.w',
            'eors','eorsal',
            'mvns.w','mvnsal.w',
            'mvns','mvnsal',
            'movs.w','movsal.w',
            'movs','movsal',
            'teq','teqal',
            'tst.w','tstal.w',
            'tst','tstal',
            'mrs','mrsal',
            'msr','msral',
            /* Set Flags: Unconditional Shifts and Rotates */
            'asrs.w','asrsal.w',
            'asrs','asrsal',
            'lsls.w','lslsal.w',
            'lsls','lslsal',
            'lsrs.w','lsrsal.w',
            'lsrs','lsrsal',
            'rors.w','rorsal.w',
            'rors','rorsal',
            'rrxs','rrxsal',
            /* Set Flags: Unconditional Multiply and Multiply-Add */
            'mlas','mlasal',
            'smulls','smullsal',
            'umulls','umullsal',
            'smlals','smlalsal',
            'umlals','umlalsal'
            ),
        /* Conditional Flags-Affecting Instructions */
        6 => array(
            /* Set Flags: Conditional Addition and Subtraction */
            'addseq.w','addsne.w','addscs.w','addshs.w','addscc.w','addslo.w','addsmi.w','addspl.w','addsvs.w','addsvc.w','addshi.w','addsls.w','addsge.w','addslt.w','addsgt.w','addsle.w',
            'addseq','addsne','addscs','addshs','addscc','addslo','addsmi','addspl','addsvs','addsvc','addshi','addsls','addsge','addslt','addsgt','addsle',
            'subseq.w','subsne.w','subscs.w','subshs.w','subscc.w','subslo.w','subsmi.w','subspl.w','subsvs.w','subsvc.w','subshi.w','subsls.w','subsge.w','subslt.w','subsgt.w','subsle.w',
            'subseq','subsne','subscs','subshs','subscc','subslo','subsmi','subspl','subsvs','subsvc','subshi','subsls','subsge','subslt','subsgt','subsle',
            'rsbseq.w','rsbsne.w','rsbscs.w','rsbshs.w','rsbscc.w','rsbslo.w','rsbsmi.w','rsbspl.w','rsbsvs.w','rsbsvc.w','rsbshi.w','rsbsls.w','rsbsge.w','rsbslt.w','rsbsgt.w','rsbsle.w',
            'rsbseq','rsbsne','rsbscs','rsbshs','rsbscc','rsbslo','rsbsmi','rsbspl','rsbsvs','rsbsvc','rsbshi','rsbsls','rsbsge','rsbslt','rsbsgt','rsbsle',
            'negseq.w','negsne.w','negscs.w','negshs.w','negscc.w','negslo.w','negsmi.w','negspl.w','negsvs.w','negsvc.w','negshi.w','negsls.w','negsge.w','negslt.w','negsgt.w','negsle.w',
            'negseq','negsne','negscs','negshs','negscc','negslo','negsmi','negspl','negsvs','negsvc','negshi','negsls','negsge','negslt','negsgt','negsle',
            'adcseq.w','adcsne.w','adcscs.w','adcshs.w','adcscc.w','adcslo.w','adcsmi.w','adcspl.w','adcsvs.w','adcsvc.w','adcshi.w','adcsls.w','adcsge.w','adcslt.w','adcsgt.w','adcsle.w',
            'adcseq','adcsne','adcscs','adcshs','adcscc','adcslo','adcsmi','adcspl','adcsvs','adcsvc','adcshi','adcsls','adcsge','adcslt','adcsgt','adcsle',
            'sbcseq.w','sbcsne.w','sbcscs.w','sbcshs.w','sbcscc.w','sbcslo.w','sbcsmi.w','sbcspl.w','sbcsvs.w','sbcsvc.w','sbcshi.w','sbcsls.w','sbcsge.w','sbcslt.w','sbcsgt.w','sbcsle.w',
            'sbcseq','sbcsne','sbcscs','sbcshs','sbcscc','sbcslo','sbcsmi','sbcspl','sbcsvs','sbcsvc','sbcshi','sbcsls','sbcsge','sbcslt','sbcsgt','sbcsle',
            'rscseq','rscsne','rscscs','rscshs','rscscc','rscslo','rscsmi','rscspl','rscsvs','rscsvc','rscshi','rscsls','rscsge','rscslt','rscsgt','rscsle',
            'cmpeq.w','cmpne.w','cmpcs.w','cmphs.w','cmpcc.w','cmplo.w','cmpmi.w','cmppl.w','cmpvs.w','cmpvc.w','cmphi.w','cmpls.w','cmpge.w','cmplt.w','cmpgt.w','cmple.w',
            'cmpeq','cmpne','cmpcs','cmphs','cmpcc','cmplo','cmpmi','cmppl','cmpvs','cmpvc','cmphi','cmpls','cmpge','cmplt','cmpgt','cmple',
            'cmneq.w','cmnne.w','cmncs.w','cmnhs.w','cmncc.w','cmnlo.w','cmnmi.w','cmnpl.w','cmnvs.w','cmnvc.w','cmnhi.w','cmnls.w','cmnge.w','cmnlt.w','cmngt.w','cmnle.w',
            'cmneq','cmnne','cmncs','cmnhs','cmncc','cmnlo','cmnmi','cmnpl','cmnvs','cmnvc','cmnhi','cmnls','cmnge','cmnlt','cmngt','cmnle',
            /* Set Flags: Conditional Logical */
            'andseq.w','andsne.w','andscs.w','andshs.w','andscc.w','andslo.w','andsmi.w','andspl.w','andsvs.w','andsvc.w','andshi.w','andsls.w','andsge.w','andslt.w','andsgt.w','andsle.w',
            'andseq','andsne','andscs','andshs','andscc','andslo','andsmi','andspl','andsvs','andsvc','andshi','andsls','andsge','andslt','andsgt','andsle',
            'bicseq.w','bicsne.w','bicscs.w','bicshs.w','bicscc.w','bicslo.w','bicsmi.w','bicspl.w','bicsvs.w','bicsvc.w','bicshi.w','bicsls.w','bicsge.w','bicslt.w','bicsgt.w','bicsle.w',
            'bicseq','bicsne','bicscs','bicshs','bicscc','bicslo','bicsmi','bicspl','bicsvs','bicsvc','bicshi','bicsls','bicsge','bicslt','bicsgt','bicsle',
            'orrseq.w','orrsne.w','orrscs.w','orrshs.w','orrscc.w','orrslo.w','orrsmi.w','orrspl.w','orrsvs.w','orrsvc.w','orrshi.w','orrsls.w','orrsge.w','orrslt.w','orrsgt.w','orrsle.w',
            'orrseq','orrsne','orrscs','orrshs','orrscc','orrslo','orrsmi','orrspl','orrsvs','orrsvc','orrshi','orrsls','orrsge','orrslt','orrsgt','orrsle',
            'ornseq.w','ornsne.w','ornscs.w','ornshs.w','ornscc.w','ornslo.w','ornsmi.w','ornspl.w','ornsvs.w','ornsvc.w','ornshi.w','ornsls.w','ornsge.w','ornslt.w','ornsgt.w','ornsle.w',
            'ornseq','ornsne','ornscs','ornshs','ornscc','ornslo','ornsmi','ornspl','ornsvs','ornsvc','ornshi','ornsls','ornsge','ornslt','ornsgt','ornsle',
            'eorseq.w','eorsne.w','eorscs.w','eorshs.w','eorscc.w','eorslo.w','eorsmi.w','eorspl.w','eorsvs.w','eorsvc.w','eorshi.w','eorsls.w','eorsge.w','eorslt.w','eorsgt.w','eorsle.w',
            'eorseq','eorsne','eorscs','eorshs','eorscc','eorslo','eorsmi','eorspl','eorsvs','eorsvc','eorshi','eorsls','eorsge','eorslt','eorsgt','eorsle',
            'mvnseq.w','mvnsne.w','mvnscs.w','mvnshs.w','mvnscc.w','mvnslo.w','mvnsmi.w','mvnspl.w','mvnsvs.w','mvnsvc.w','mvnshi.w','mvnsls.w','mvnsge.w','mvnslt.w','mvnsgt.w','mvnsle.w',
            'mvnseq','mvnsne','mvnscs','mvnshs','mvnscc','mvnslo','mvnsmi','mvnspl','mvnsvs','mvnsvc','mvnshi','mvnsls','mvnsge','mvnslt','mvnsgt','mvnsle',
            'movseq.w','movsne.w','movscs.w','movshs.w','movscc.w','movslo.w','movsmi.w','movspl.w','movsvs.w','movsvc.w','movshi.w','movsls.w','movsge.w','movslt.w','movsgt.w','movsle.w',
            'movseq','movsne','movscs','movshs','movscc','movslo','movsmi','movspl','movsvs','movsvc','movshi','movsls','movsge','movslt','movsgt','movsle',
            'teqeq','teqne','teqcs','teqhs','teqcc','teqlo','teqmi','teqpl','teqvs','teqvc','teqhi','teqls','teqge','teqlt','teqgt','teqle',
            'tsteq.w','tstne.w','tstcs.w','tsths.w','tstcc.w','tstlo.w','tstmi.w','tstpl.w','tstvs.w','tstvc.w','tsthi.w','tstls.w','tstge.w','tstlt.w','tstgt.w','tstle.w',
            'tsteq','tstne','tstcs','tsths','tstcc','tstlo','tstmi','tstpl','tstvs','tstvc','tsthi','tstls','tstge','tstlt','tstgt','tstle',
            'mrseq','mrsne','mrscs','mrshs','mrscc','mrslo','mrsmi','mrspl','mrsvs','mrsvc','mrshi','mrsls','mrsge','mrslt','mrsgt','mrsle',
            'msreq','msrne','msrcs','msrhs','msrcc','msrlo','msrmi','msrpl','msrvs','msrvc','msrhi','msrls','msrge','msrlt','msrgt','msrle',
            /* Set Flags: Conditional Shifts and Rotates */
            'asrseq.w','asrsne.w','asrscs.w','asrshs.w','asrscc.w','asrslo.w','asrsmi.w','asrspl.w','asrsvs.w','asrsvc.w','asrshi.w','asrsls.w','asrsge.w','asrslt.w','asrsgt.w','asrsle.w',
            'asrseq','asrsne','asrscs','asrshs','asrscc','asrslo','asrsmi','asrspl','asrsvs','asrsvc','asrshi','asrsls','asrsge','asrslt','asrsgt','asrsle',
            'lslseq.w','lslsne.w','lslscs.w','lslshs.w','lslscc.w','lslslo.w','lslsmi.w','lslspl.w','lslsvs.w','lslsvc.w','lslshi.w','lslsls.w','lslsge.w','lslslt.w','lslsgt.w','lslsle.w',
            'lslseq','lslsne','lslscs','lslshs','lslscc','lslslo','lslsmi','lslspl','lslsvs','lslsvc','lslshi','lslsls','lslsge','lslslt','lslsgt','lslsle',
            'lsrseq.w','lsrsne.w','lsrscs.w','lsrshs.w','lsrscc.w','lsrslo.w','lsrsmi.w','lsrspl.w','lsrsvs.w','lsrsvc.w','lsrshi.w','lsrsls.w','lsrsge.w','lsrslt.w','lsrsgt.w','lsrsle.w',
            'lsrseq','lsrsne','lsrscs','lsrshs','lsrscc','lsrslo','lsrsmi','lsrspl','lsrsvs','lsrsvc','lsrshi','lsrsls','lsrsge','lsrslt','lsrsgt','lsrsle',
            'rorseq.w','rorsne.w','rorscs.w','rorshs.w','rorscc.w','rorslo.w','rorsmi.w','rorspl.w','rorsvs.w','rorsvc.w','rorshi.w','rorsls.w','rorsge.w','rorslt.w','rorsgt.w','rorsle.w',
            'rorseq','rorsne','rorscs','rorshs','rorscc','rorslo','rorsmi','rorspl','rorsvs','rorsvc','rorshi','rorsls','rorsge','rorslt','rorsgt','rorsle',
            'rrxseq','rrxsne','rrxscs','rrxshs','rrxscc','rrxslo','rrxsmi','rrxspl','rrxsvs','rrxsvc','rrxshi','rrxsls','rrxsge','rrxslt','rrxsgt','rrxsle',
            /* Set Flags: Conditional Multiply and Multiply-Add */
            'mlaseq','mlasne','mlascs','mlashs','mlascc','mlaslo','mlasmi','mlaspl','mlasvs','mlasvc','mlashi','mlasls','mlasge','mlaslt','mlasgt','mlasle',
            'smullseq','smullsne','smullscs','smullshs','smullscc','smullslo','smullsmi','smullspl','smullsvs','smullsvc','smullshi','smullsls','smullsge','smullslt','smullsgt','smullsle',
            'umullseq','umullsne','umullscs','umullshs','umullscc','umullslo','umullsmi','umullspl','umullsvs','umullsvc','umullshi','umullsls','umullsge','umullslt','umullsgt','umullsle',
            'smlalseq','smlalsne','smlalscs','smlalshs','smlalscc','smlalslo','smlalsmi','smlalspl','smlalsvs','smlalsvc','smlalshi','smlalsls','smlalsge','smlalslt','smlalsgt','smlalsle',
            'umlalseq','umlalsne','umlalscs','umlalshs','umlalscc','umlalslo','umlalsmi','umlalspl','umlalsvs','umlalsvc','umlalshi','umlalsls','umlalsge','umlalslt','umlalsgt','umlalsle'
            ),
        /* Unconditional Flow Control Instructions */
        7 => array(
            /* Flow Control: Unconditional Branch and If-Then-Else */
            'b.w','bal.w',
            'b','bal',
            'bl','blal',
            'bx','bxal',
            'blx','blxal',
            'bxj','bxjal',
            'cbnz',
            'cbz',
            'tbb','tbbal',
            'tbh','tbhal',
            'it',
            'itt',
            'ite',
            'ittt',
            'itet',
            'itte',
            'itee',
            'itttt',
            'itett',
            'ittet',
            'iteet',
            'ittte',
            'itete',
            'ittee',
            'iteee'
            ),
        /* Conditional Flow Control Instructions */
        8 => array(
            /* Flow Control: Conditional Branch and If-Then-Else */
            'beq.w','bne.w','bcs.w','bhs.w','bcc.w','blo.w','bmi.w','bpl.w','bvs.w','bvc.w','bhi.w','bls.w','bge.w','blt.w','bgt.w','ble.w',
            'beq','bne','bcs','bhs','bcc','blo','bmi','bpl','bvs','bvc','bhi','bls','bge','blt','bgt','ble',
            'bleq','blne','blcs','blhs','blcc','bllo','blmi','blpl','blvs','blvc','blhi','blls','blge','bllt','blgt','blle',
            'bxeq','bxne','bxcs','bxhs','bxcc','bxlo','bxmi','bxpl','bxvs','bxvc','bxhi','bxls','bxge','bxlt','bxgt','bxle',
            'blxeq','blxne','blxcs','blxhs','blxcc','blxlo','blxmi','blxpl','blxvs','blxvc','blxhi','blxls','blxge','blxlt','blxgt','blxle',
            'bxjeq','bxjne','bxjcs','bxjhs','bxjcc','bxjlo','bxjmi','bxjpl','bxjvs','bxjvc','bxjhi','bxjls','bxjge','bxjlt','bxjgt','bxjle',
            'tbbeq','tbbne','tbbcs','tbbhs','tbbcc','tbblo','tbbmi','tbbpl','tbbvs','tbbvc','tbbhi','tbbls','tbbge','tbblt','tbbgt','tbble',
            'tbheq','tbhne','tbhcs','tbhhs','tbhcc','tbhlo','tbhmi','tbhpl','tbhvs','tbhvc','tbhhi','tbhls','tbhge','tbhlt','tbhgt','tbhle'
            ),
        /* Unconditional Syncronization Instructions */
        9 => array(
            /* Synchronization: Unconditional Loads, Stores and Barriers */
            'ldrexd','ldrexdal',
            'ldrex','ldrexal',
            'ldrexh','ldrexhal',
            'ldrexb','ldrexbal',
            'strexd','strexdal',
            'strex','strexal',
            'strexh','strexhal',
            'strexb','strexbal',
            'clrex','clrexal',
            'swp','swpal',
            'swpb','swpbal',
            'dbc','dbcal',
            'dsb','dsbal',
            'isb','isbal',
            'yield.w','yieldal.w',
            'yield','yieldal',
            'nop.w','nopal.w',
            'nop','nopal'
            ),
        /* Conditional Syncronization Instructions */
        10 => array(
            /* Synchronization: Conditional Loads, Stores and Barriers */
            'ldrexdeq','ldrexdne','ldrexdcs','ldrexdhs','ldrexdcc','ldrexdlo','ldrexdmi','ldrexdpl','ldrexdvs','ldrexdvc','ldrexdhi','ldrexdls','ldrexdge','ldrexdlt','ldrexdgt','ldrexdle',
            'ldrexeq','ldrexne','ldrexcs','ldrexhs','ldrexcc','ldrexlo','ldrexmi','ldrexpl','ldrexvs','ldrexvc','ldrexhi','ldrexls','ldrexge','ldrexlt','ldrexgt','ldrexle',
            'ldrexheq','ldrexhne','ldrexhcs','ldrexhhs','ldrexhcc','ldrexhlo','ldrexhmi','ldrexhpl','ldrexhvs','ldrexhvc','ldrexhhi','ldrexhls','ldrexhge','ldrexhlt','ldrexhgt','ldrexhle',
            'ldrexbeq','ldrexbne','ldrexbcs','ldrexbhs','ldrexbcc','ldrexblo','ldrexbmi','ldrexbpl','ldrexbvs','ldrexbvc','ldrexbhi','ldrexbls','ldrexbge','ldrexblt','ldrexbgt','ldrexble',
            'strexdeq','strexdne','strexdcs','strexdhs','strexdcc','strexdlo','strexdmi','strexdpl','strexdvs','strexdvc','strexdhi','strexdls','strexdge','strexdlt','strexdgt','strexdle',
            'strexeq','strexne','strexcs','strexhs','strexcc','strexlo','strexmi','strexpl','strexvs','strexvc','strexhi','strexls','strexge','strexlt','strexgt','strexle',
            'strexheq','strexhne','strexhcs','strexhhs','strexhcc','strexhlo','strexhmi','strexhpl','strexhvs','strexhvc','strexhhi','strexhls','strexhge','strexhlt','strexhgt','strexhle',
            'strexbeq','strexbne','strexbcs','strexbhs','strexbcc','strexblo','strexbmi','strexbpl','strexbvs','strexbvc','strexbhi','strexbls','strexbge','strexblt','strexbgt','strexble',
            'clrexeq','clrexne','clrexcs','clrexhs','clrexcc','clrexlo','clrexmi','clrexpl','clrexvs','clrexvc','clrexhi','clrexls','clrexge','clrexlt','clrexgt','clrexle',
            'swpeq','swpne','swpcs','swphs','swpcc','swplo','swpmi','swppl','swpvs','swpvc','swphi','swpls','swpge','swplt','swpgt','swple',
            'swpbeq','swpbne','swpbcs','swpbhs','swpbcc','swpblo','swpbmi','swpbpl','swpbvs','swpbvc','swpbhi','swpbls','swpbge','swpblt','swpbgt','swpble',
            'dbceq','dbcne','dbccs','dbchs','dbccc','dbclo','dbcmi','dbcpl','dbcvs','dbcvc','dbchi','dbcls','dbcge','dbclt','dbcgt','dbcle',
            'dsbeq','dsbne','dsbcs','dsbhs','dsbcc','dsblo','dsbmi','dsbpl','dsbvs','dsbvc','dsbhi','dsbls','dsbge','dsblt','dsbgt','dsble',
            'isbeq','isbne','isbcs','isbhs','isbcc','isblo','isbmi','isbpl','isbvs','isbvc','isbhi','isbls','isbge','isblt','isbgt','isble',
            'yieldeq.w','yieldne.w','yieldcs.w','yieldhs.w','yieldcc.w','yieldlo.w','yieldmi.w','yieldpl.w','yieldvs.w','yieldvc.w','yieldhi.w','yieldls.w','yieldge.w','yieldlt.w','yieldgt.w','yieldle.w',
            'yieldeq','yieldne','yieldcs','yieldhs','yieldcc','yieldlo','yieldmi','yieldpl','yieldvs','yieldvc','yieldhi','yieldls','yieldge','yieldlt','yieldgt','yieldle',
            'nopeq.w','nopne.w','nopcs.w','nophs.w','nopcc.w','noplo.w','nopmi.w','noppl.w','nopvs.w','nopvc.w','nophi.w','nopls.w','nopge.w','noplt.w','nopgt.w','nople.w',
            'nopeq','nopne','nopcs','nophs','nopcc','noplo','nopmi','noppl','nopvs','nopvc','nophi','nopls','nopge','noplt','nopgt','nople'
            ),
        /* Unconditional ARMv6 SIMD */
        11 => array(
            /* ARMv6 SIMD: Unconditional Addition, Subtraction & Saturation */
            'sadd16','sadd16al',
            'sadd8','sadd8al',
            'uadd16','uadd16al',
            'uadd8','uadd8al',
            'ssub16','ssub16al',
            'ssub8','ssub8al',
            'usub16','usub16al',
            'usub8','usub8al',
            'sasx','sasxal',
            'ssax','ssaxal',
            'uasx','uasxal',
            'usax','usaxal',
            'usad8','usad8al',
            'usada8','usada8al',
            /* ARMv6 SIMD: Unconditional Halving Addition & Subtraction */
            'shadd16','shadd16al',
            'shadd8','shadd8al',
            'uhadd16','uhadd16al',
            'uhadd8','uhadd8al',
            'shsub16','shsub16al',
            'shsub8','shsub8al',
            'uhsub16','uhsub16al',
            'uhsub8','uhsub8al',
            'shasx','shasxal',
            'shsax','shsaxal',
            'uhasx','uhasxal',
            'uhsax','uhsaxal',
            /* ARMv6 SIMD: Unconditional Saturating Operations */
            'qadd','qaddal',
            'qadd16','qadd16al',
            'qadd8','qadd8al',
            'uqadd16','uqadd16al',
            'uqadd8','uqadd8al',
            'qsub','qsubal',
            'qsub16','qsub16al',
            'qsub8','qsub8al',
            'uqsub16','uqsub16al',
            'uqsub8','uqsub8al',
            'qasx','qasxal',
            'qsax','qsaxal',
            'uqasx','uqasxal',
            'uqsax','uqsaxal',
            'qdadd','qdaddal',
            'qdsub','qdsubal',
            'ssat','ssatal',
            'ssat16','ssat16al',
            'usat','usatal',
            'usat16','usat16al',
            /* ARMv6 SIMD: Unconditional Permutation and Combine Operations */
            'sxtah','sxtahal',
            'sxtab','sxtabal',
            'sxtab16','sxtab16al',
            'uxtah','uxtahal',
            'uxtab','uxtabal',
            'uxtab16','uxtab16al',
            'sxth.w','sxthal.w',
            'sxth','sxthal',
            'sxtb.w','sxtbal.w',
            'sxtb','sxtbal',
            'sxtb16','sxtb16al',
            'uxth.w','uxthal.w',
            'uxth','uxthal',
            'uxtb.w','uxtbal.w',
            'uxtb','uxtbal',
            'uxtb16','uxtb16al',
            'pkhbt','pkhbtal',
            'pkhtb','pkhtbal',
            'rbit','rbital',
            'rev.w','reval.w',
            'rev','reval',
            'rev16.w','rev16al.w',
            'rev16','rev16al',
            'revsh.w','revshal.w',
            'revsh','revshal',
            'sel','selal',
            /* ARMv6 SIMD: Unconditional Multiply and Multiply-Add */
            'smlad','smladal',
            'smladx','smladxal',
            'smlsd','smlsdal',
            'smlsdx','smlsdxal',
            'smlald','smlaldal',
            'smlaldx','smlaldxal',
            'smlsld','smlsldal',
            'smlsldx','smlsldxal',
            'smmul','smmulal',
            'smmulr','smmulral',
            'smmla','smmlaal',
            'smmlar','smmlaral',
            'smmls','smmlsal',
            'smmlsr','smmlsral',
            'smuad','smuadal',
            'smuadx','smuadxal',
            'smusd','smusdal',
            'smusdx','smusdxal',
            'umaal','umaalal'
            ),
        /* Conditional ARMv6 SIMD */
        12 => array(
            /* ARMv6 SIMD: Conditional Addition, Subtraction & Saturation */
            'sadd16eq','sadd16ne','sadd16cs','sadd16hs','sadd16cc','sadd16lo','sadd16mi','sadd16pl','sadd16vs','sadd16vc','sadd16hi','sadd16ls','sadd16ge','sadd16lt','sadd16gt','sadd16le',
            'sadd8eq','sadd8ne','sadd8cs','sadd8hs','sadd8cc','sadd8lo','sadd8mi','sadd8pl','sadd8vs','sadd8vc','sadd8hi','sadd8ls','sadd8ge','sadd8lt','sadd8gt','sadd8le',
            'uadd16eq','uadd16ne','uadd16cs','uadd16hs','uadd16cc','uadd16lo','uadd16mi','uadd16pl','uadd16vs','uadd16vc','uadd16hi','uadd16ls','uadd16ge','uadd16lt','uadd16gt','uadd16le',
            'uadd8eq','uadd8ne','uadd8cs','uadd8hs','uadd8cc','uadd8lo','uadd8mi','uadd8pl','uadd8vs','uadd8vc','uadd8hi','uadd8ls','uadd8ge','uadd8lt','uadd8gt','uadd8le',
            'ssub16eq','ssub16ne','ssub16cs','ssub16hs','ssub16cc','ssub16lo','ssub16mi','ssub16pl','ssub16vs','ssub16vc','ssub16hi','ssub16ls','ssub16ge','ssub16lt','ssub16gt','ssub16le',
            'ssub8eq','ssub8ne','ssub8cs','ssub8hs','ssub8cc','ssub8lo','ssub8mi','ssub8pl','ssub8vs','ssub8vc','ssub8hi','ssub8ls','ssub8ge','ssub8lt','ssub8gt','ssub8le',
            'usub16eq','usub16ne','usub16cs','usub16hs','usub16cc','usub16lo','usub16mi','usub16pl','usub16vs','usub16vc','usub16hi','usub16ls','usub16ge','usub16lt','usub16gt','usub16le',
            'usub8eq','usub8ne','usub8cs','usub8hs','usub8cc','usub8lo','usub8mi','usub8pl','usub8vs','usub8vc','usub8hi','usub8ls','usub8ge','usub8lt','usub8gt','usub8le',
            'sasxeq','sasxne','sasxcs','sasxhs','sasxcc','sasxlo','sasxmi','sasxpl','sasxvs','sasxvc','sasxhi','sasxls','sasxge','sasxlt','sasxgt','sasxle',
            'ssaxeq','ssaxne','ssaxcs','ssaxhs','ssaxcc','ssaxlo','ssaxmi','ssaxpl','ssaxvs','ssaxvc','ssaxhi','ssaxls','ssaxge','ssaxlt','ssaxgt','ssaxle',
            'uasxeq','uasxne','uasxcs','uasxhs','uasxcc','uasxlo','uasxmi','uasxpl','uasxvs','uasxvc','uasxhi','uasxls','uasxge','uasxlt','uasxgt','uasxle',
            'usaxeq','usaxne','usaxcs','usaxhs','usaxcc','usaxlo','usaxmi','usaxpl','usaxvs','usaxvc','usaxhi','usaxls','usaxge','usaxlt','usaxgt','usaxle',
            'usad8eq','usad8ne','usad8cs','usad8hs','usad8cc','usad8lo','usad8mi','usad8pl','usad8vs','usad8vc','usad8hi','usad8ls','usad8ge','usad8lt','usad8gt','usad8le',
            'usada8eq','usada8ne','usada8cs','usada8hs','usada8cc','usada8lo','usada8mi','usada8pl','usada8vs','usada8vc','usada8hi','usada8ls','usada8ge','usada8lt','usada8gt','usada8le',
            /* ARMv6 SIMD: Conditional Halving Addition & Subtraction */
            'shadd16eq','shadd16ne','shadd16cs','shadd16hs','shadd16cc','shadd16lo','shadd16mi','shadd16pl','shadd16vs','shadd16vc','shadd16hi','shadd16ls','shadd16ge','shadd16lt','shadd16gt','shadd16le',
            'shadd8eq','shadd8ne','shadd8cs','shadd8hs','shadd8cc','shadd8lo','shadd8mi','shadd8pl','shadd8vs','shadd8vc','shadd8hi','shadd8ls','shadd8ge','shadd8lt','shadd8gt','shadd8le',
            'uhadd16eq','uhadd16ne','uhadd16cs','uhadd16hs','uhadd16cc','uhadd16lo','uhadd16mi','uhadd16pl','uhadd16vs','uhadd16vc','uhadd16hi','uhadd16ls','uhadd16ge','uhadd16lt','uhadd16gt','uhadd16le',
            'uhadd8eq','uhadd8ne','uhadd8cs','uhadd8hs','uhadd8cc','uhadd8lo','uhadd8mi','uhadd8pl','uhadd8vs','uhadd8vc','uhadd8hi','uhadd8ls','uhadd8ge','uhadd8lt','uhadd8gt','uhadd8le',
            'shsub16eq','shsub16ne','shsub16cs','shsub16hs','shsub16cc','shsub16lo','shsub16mi','shsub16pl','shsub16vs','shsub16vc','shsub16hi','shsub16ls','shsub16ge','shsub16lt','shsub16gt','shsub16le',
            'shsub8eq','shsub8ne','shsub8cs','shsub8hs','shsub8cc','shsub8lo','shsub8mi','shsub8pl','shsub8vs','shsub8vc','shsub8hi','shsub8ls','shsub8ge','shsub8lt','shsub8gt','shsub8le',
            'uhsub16eq','uhsub16ne','uhsub16cs','uhsub16hs','uhsub16cc','uhsub16lo','uhsub16mi','uhsub16pl','uhsub16vs','uhsub16vc','uhsub16hi','uhsub16ls','uhsub16ge','uhsub16lt','uhsub16gt','uhsub16le',
            'uhsub8eq','uhsub8ne','uhsub8cs','uhsub8hs','uhsub8cc','uhsub8lo','uhsub8mi','uhsub8pl','uhsub8vs','uhsub8vc','uhsub8hi','uhsub8ls','uhsub8ge','uhsub8lt','uhsub8gt','uhsub8le',
            'shasxeq','shasxne','shasxcs','shasxhs','shasxcc','shasxlo','shasxmi','shasxpl','shasxvs','shasxvc','shasxhi','shasxls','shasxge','shasxlt','shasxgt','shasxle',
            'shsaxeq','shsaxne','shsaxcs','shsaxhs','shsaxcc','shsaxlo','shsaxmi','shsaxpl','shsaxvs','shsaxvc','shsaxhi','shsaxls','shsaxge','shsaxlt','shsaxgt','shsaxle',
            'uhasxeq','uhasxne','uhasxcs','uhasxhs','uhasxcc','uhasxlo','uhasxmi','uhasxpl','uhasxvs','uhasxvc','uhasxhi','uhasxls','uhasxge','uhasxlt','uhasxgt','uhasxle',
            'uhsaxeq','uhsaxne','uhsaxcs','uhsaxhs','uhsaxcc','uhsaxlo','uhsaxmi','uhsaxpl','uhsaxvs','uhsaxvc','uhsaxhi','uhsaxls','uhsaxge','uhsaxlt','uhsaxgt','uhsaxle',
            /* ARMv6 SIMD: Conditional Saturating Operations */
            'qaddeq','qaddne','qaddcs','qaddhs','qaddcc','qaddlo','qaddmi','qaddpl','qaddvs','qaddvc','qaddhi','qaddls','qaddge','qaddlt','qaddgt','qaddle',
            'qadd16eq','qadd16ne','qadd16cs','qadd16hs','qadd16cc','qadd16lo','qadd16mi','qadd16pl','qadd16vs','qadd16vc','qadd16hi','qadd16ls','qadd16ge','qadd16lt','qadd16gt','qadd16le',
            'qadd8eq','qadd8ne','qadd8cs','qadd8hs','qadd8cc','qadd8lo','qadd8mi','qadd8pl','qadd8vs','qadd8vc','qadd8hi','qadd8ls','qadd8ge','qadd8lt','qadd8gt','qadd8le',
            'uqadd16eq','uqadd16ne','uqadd16cs','uqadd16hs','uqadd16cc','uqadd16lo','uqadd16mi','uqadd16pl','uqadd16vs','uqadd16vc','uqadd16hi','uqadd16ls','uqadd16ge','uqadd16lt','uqadd16gt','uqadd16le',
            'uqadd8eq','uqadd8ne','uqadd8cs','uqadd8hs','uqadd8cc','uqadd8lo','uqadd8mi','uqadd8pl','uqadd8vs','uqadd8vc','uqadd8hi','uqadd8ls','uqadd8ge','uqadd8lt','uqadd8gt','uqadd8le',
            'qsubeq','qsubne','qsubcs','qsubhs','qsubcc','qsublo','qsubmi','qsubpl','qsubvs','qsubvc','qsubhi','qsubls','qsubge','qsublt','qsubgt','qsuble',
            'qsub16eq','qsub16ne','qsub16cs','qsub16hs','qsub16cc','qsub16lo','qsub16mi','qsub16pl','qsub16vs','qsub16vc','qsub16hi','qsub16ls','qsub16ge','qsub16lt','qsub16gt','qsub16le',
            'qsub8eq','qsub8ne','qsub8cs','qsub8hs','qsub8cc','qsub8lo','qsub8mi','qsub8pl','qsub8vs','qsub8vc','qsub8hi','qsub8ls','qsub8ge','qsub8lt','qsub8gt','qsub8le',
            'uqsub16eq','uqsub16ne','uqsub16cs','uqsub16hs','uqsub16cc','uqsub16lo','uqsub16mi','uqsub16pl','uqsub16vs','uqsub16vc','uqsub16hi','uqsub16ls','uqsub16ge','uqsub16lt','uqsub16gt','uqsub16le',
            'uqsub8eq','uqsub8ne','uqsub8cs','uqsub8hs','uqsub8cc','uqsub8lo','uqsub8mi','uqsub8pl','uqsub8vs','uqsub8vc','uqsub8hi','uqsub8ls','uqsub8ge','uqsub8lt','uqsub8gt','uqsub8le',
            'qasxeq','qasxne','qasxcs','qasxhs','qasxcc','qasxlo','qasxmi','qasxpl','qasxvs','qasxvc','qasxhi','qasxls','qasxge','qasxlt','qasxgt','qasxle',
            'qsaxeq','qsaxne','qsaxcs','qsaxhs','qsaxcc','qsaxlo','qsaxmi','qsaxpl','qsaxvs','qsaxvc','qsaxhi','qsaxls','qsaxge','qsaxlt','qsaxgt','qsaxle',
            'uqasxeq','uqasxne','uqasxcs','uqasxhs','uqasxcc','uqasxlo','uqasxmi','uqasxpl','uqasxvs','uqasxvc','uqasxhi','uqasxls','uqasxge','uqasxlt','uqasxgt','uqasxle',
            'uqsaxeq','uqsaxne','uqsaxcs','uqsaxhs','uqsaxcc','uqsaxlo','uqsaxmi','uqsaxpl','uqsaxvs','uqsaxvc','uqsaxhi','uqsaxls','uqsaxge','uqsaxlt','uqsaxgt','uqsaxle',
            'qdaddeq','qdaddne','qdaddcs','qdaddhs','qdaddcc','qdaddlo','qdaddmi','qdaddpl','qdaddvs','qdaddvc','qdaddhi','qdaddls','qdaddge','qdaddlt','qdaddgt','qdaddle',
            'qdsubeq','qdsubne','qdsubcs','qdsubhs','qdsubcc','qdsublo','qdsubmi','qdsubpl','qdsubvs','qdsubvc','qdsubhi','qdsubls','qdsubge','qdsublt','qdsubgt','qdsuble',
            'ssateq','ssatne','ssatcs','ssaths','ssatcc','ssatlo','ssatmi','ssatpl','ssatvs','ssatvc','ssathi','ssatls','ssatge','ssatlt','ssatgt','ssatle',
            'ssat16eq','ssat16ne','ssat16cs','ssat16hs','ssat16cc','ssat16lo','ssat16mi','ssat16pl','ssat16vs','ssat16vc','ssat16hi','ssat16ls','ssat16ge','ssat16lt','ssat16gt','ssat16le',
            'usateq','usatne','usatcs','usaths','usatcc','usatlo','usatmi','usatpl','usatvs','usatvc','usathi','usatls','usatge','usatlt','usatgt','usatle',
            'usat16eq','usat16ne','usat16cs','usat16hs','usat16cc','usat16lo','usat16mi','usat16pl','usat16vs','usat16vc','usat16hi','usat16ls','usat16ge','usat16lt','usat16gt','usat16le',
            /* ARMv6 SIMD: Conditional Permutation and Combine Operations */
            'sxtaheq','sxtahne','sxtahcs','sxtahhs','sxtahcc','sxtahlo','sxtahmi','sxtahpl','sxtahvs','sxtahvc','sxtahhi','sxtahls','sxtahge','sxtahlt','sxtahgt','sxtahle',
            'sxtabeq','sxtabne','sxtabcs','sxtabhs','sxtabcc','sxtablo','sxtabmi','sxtabpl','sxtabvs','sxtabvc','sxtabhi','sxtabls','sxtabge','sxtablt','sxtabgt','sxtable',
            'sxtab16eq','sxtab16ne','sxtab16cs','sxtab16hs','sxtab16cc','sxtab16lo','sxtab16mi','sxtab16pl','sxtab16vs','sxtab16vc','sxtab16hi','sxtab16ls','sxtab16ge','sxtab16lt','sxtab16gt','sxtab16le',
            'uxtaheq','uxtahne','uxtahcs','uxtahhs','uxtahcc','uxtahlo','uxtahmi','uxtahpl','uxtahvs','uxtahvc','uxtahhi','uxtahls','uxtahge','uxtahlt','uxtahgt','uxtahle',
            'uxtabeq','uxtabne','uxtabcs','uxtabhs','uxtabcc','uxtablo','uxtabmi','uxtabpl','uxtabvs','uxtabvc','uxtabhi','uxtabls','uxtabge','uxtablt','uxtabgt','uxtable',
            'uxtab16eq','uxtab16ne','uxtab16cs','uxtab16hs','uxtab16cc','uxtab16lo','uxtab16mi','uxtab16pl','uxtab16vs','uxtab16vc','uxtab16hi','uxtab16ls','uxtab16ge','uxtab16lt','uxtab16gt','uxtab16le',
            'sxtheq.w','sxthne.w','sxthcs.w','sxthhs.w','sxthcc.w','sxthlo.w','sxthmi.w','sxthpl.w','sxthvs.w','sxthvc.w','sxthhi.w','sxthls.w','sxthge.w','sxthlt.w','sxthgt.w','sxthle.w',
            'sxtheq','sxthne','sxthcs','sxthhs','sxthcc','sxthlo','sxthmi','sxthpl','sxthvs','sxthvc','sxthhi','sxthls','sxthge','sxthlt','sxthgt','sxthle',
            'sxtbeq.w','sxtbne.w','sxtbcs.w','sxtbhs.w','sxtbcc.w','sxtblo.w','sxtbmi.w','sxtbpl.w','sxtbvs.w','sxtbvc.w','sxtbhi.w','sxtbls.w','sxtbge.w','sxtblt.w','sxtbgt.w','sxtble.w',
            'sxtbeq','sxtbne','sxtbcs','sxtbhs','sxtbcc','sxtblo','sxtbmi','sxtbpl','sxtbvs','sxtbvc','sxtbhi','sxtbls','sxtbge','sxtblt','sxtbgt','sxtble',
            'sxtb16eq','sxtb16ne','sxtb16cs','sxtb16hs','sxtb16cc','sxtb16lo','sxtb16mi','sxtb16pl','sxtb16vs','sxtb16vc','sxtb16hi','sxtb16ls','sxtb16ge','sxtb16lt','sxtb16gt','sxtb16le',
            'uxtheq.w','uxthne.w','uxthcs.w','uxthhs.w','uxthcc.w','uxthlo.w','uxthmi.w','uxthpl.w','uxthvs.w','uxthvc.w','uxthhi.w','uxthls.w','uxthge.w','uxthlt.w','uxthgt.w','uxthle.w',
            'uxtheq','uxthne','uxthcs','uxthhs','uxthcc','uxthlo','uxthmi','uxthpl','uxthvs','uxthvc','uxthhi','uxthls','uxthge','uxthlt','uxthgt','uxthle',
            'uxtbeq.w','uxtbne.w','uxtbcs.w','uxtbhs.w','uxtbcc.w','uxtblo.w','uxtbmi.w','uxtbpl.w','uxtbvs.w','uxtbvc.w','uxtbhi.w','uxtbls.w','uxtbge.w','uxtblt.w','uxtbgt.w','uxtble.w',
            'uxtbeq','uxtbne','uxtbcs','uxtbhs','uxtbcc','uxtblo','uxtbmi','uxtbpl','uxtbvs','uxtbvc','uxtbhi','uxtbls','uxtbge','uxtblt','uxtbgt','uxtble',
            'uxtb16eq','uxtb16ne','uxtb16cs','uxtb16hs','uxtb16cc','uxtb16lo','uxtb16mi','uxtb16pl','uxtb16vs','uxtb16vc','uxtb16hi','uxtb16ls','uxtb16ge','uxtb16lt','uxtb16gt','uxtb16le',
            'pkhbteq','pkhbtne','pkhbtcs','pkhbths','pkhbtcc','pkhbtlo','pkhbtmi','pkhbtpl','pkhbtvs','pkhbtvc','pkhbthi','pkhbtls','pkhbtge','pkhbtlt','pkhbtgt','pkhbtle',
            'pkhtbeq','pkhtbne','pkhtbcs','pkhtbhs','pkhtbcc','pkhtblo','pkhtbmi','pkhtbpl','pkhtbvs','pkhtbvc','pkhtbhi','pkhtbls','pkhtbge','pkhtblt','pkhtbgt','pkhtble',
            'rbiteq','rbitne','rbitcs','rbiths','rbitcc','rbitlo','rbitmi','rbitpl','rbitvs','rbitvc','rbithi','rbitls','rbitge','rbitlt','rbitgt','rbitle',
            'reveq.w','revne.w','revcs.w','revhs.w','revcc.w','revlo.w','revmi.w','revpl.w','revvs.w','revvc.w','revhi.w','revls.w','revge.w','revlt.w','revgt.w','revle.w',
            'reveq','revne','revcs','revhs','revcc','revlo','revmi','revpl','revvs','revvc','revhi','revls','revge','revlt','revgt','revle',
            'rev16eq.w','rev16ne.w','rev16cs.w','rev16hs.w','rev16cc.w','rev16lo.w','rev16mi.w','rev16pl.w','rev16vs.w','rev16vc.w','rev16hi.w','rev16ls.w','rev16ge.w','rev16lt.w','rev16gt.w','rev16le.w',
            'rev16eq','rev16ne','rev16cs','rev16hs','rev16cc','rev16lo','rev16mi','rev16pl','rev16vs','rev16vc','rev16hi','rev16ls','rev16ge','rev16lt','rev16gt','rev16le',
            'revsheq.w','revshne.w','revshcs.w','revshhs.w','revshcc.w','revshlo.w','revshmi.w','revshpl.w','revshvs.w','revshvc.w','revshhi.w','revshls.w','revshge.w','revshlt.w','revshgt.w','revshle.w',
            'revsheq','revshne','revshcs','revshhs','revshcc','revshlo','revshmi','revshpl','revshvs','revshvc','revshhi','revshls','revshge','revshlt','revshgt','revshle',
            'seleq','selne','selcs','selhs','selcc','sello','selmi','selpl','selvs','selvc','selhi','sells','selge','sellt','selgt','selle',
            /* ARMv6 SIMD: Conditional Multiply and Multiply-Add */
            'smladeq','smladne','smladcs','smladhs','smladcc','smladlo','smladmi','smladpl','smladvs','smladvc','smladhi','smladls','smladge','smladlt','smladgt','smladle',
            'smladxeq','smladxne','smladxcs','smladxhs','smladxcc','smladxlo','smladxmi','smladxpl','smladxvs','smladxvc','smladxhi','smladxls','smladxge','smladxlt','smladxgt','smladxle',
            'smlsdeq','smlsdne','smlsdcs','smlsdhs','smlsdcc','smlsdlo','smlsdmi','smlsdpl','smlsdvs','smlsdvc','smlsdhi','smlsdls','smlsdge','smlsdlt','smlsdgt','smlsdle',
            'smlsdxeq','smlsdxne','smlsdxcs','smlsdxhs','smlsdxcc','smlsdxlo','smlsdxmi','smlsdxpl','smlsdxvs','smlsdxvc','smlsdxhi','smlsdxls','smlsdxge','smlsdxlt','smlsdxgt','smlsdxle',
            'smlaldeq','smlaldne','smlaldcs','smlaldhs','smlaldcc','smlaldlo','smlaldmi','smlaldpl','smlaldvs','smlaldvc','smlaldhi','smlaldls','smlaldge','smlaldlt','smlaldgt','smlaldle',
            'smlaldxeq','smlaldxne','smlaldxcs','smlaldxhs','smlaldxcc','smlaldxlo','smlaldxmi','smlaldxpl','smlaldxvs','smlaldxvc','smlaldxhi','smlaldxls','smlaldxge','smlaldxlt','smlaldxgt','smlaldxle',
            'smlsldeq','smlsldne','smlsldcs','smlsldhs','smlsldcc','smlsldlo','smlsldmi','smlsldpl','smlsldvs','smlsldvc','smlsldhi','smlsldls','smlsldge','smlsldlt','smlsldgt','smlsldle',
            'smlsldxeq','smlsldxne','smlsldxcs','smlsldxhs','smlsldxcc','smlsldxlo','smlsldxmi','smlsldxpl','smlsldxvs','smlsldxvc','smlsldxhi','smlsldxls','smlsldxge','smlsldxlt','smlsldxgt','smlsldxle',
            'smmuleq','smmulne','smmulcs','smmulhs','smmulcc','smmullo','smmulmi','smmulpl','smmulvs','smmulvc','smmulhi','smmulls','smmulge','smmullt','smmulgt','smmulle',
            'smmulreq','smmulrne','smmulrcs','smmulrhs','smmulrcc','smmulrlo','smmulrmi','smmulrpl','smmulrvs','smmulrvc','smmulrhi','smmulrls','smmulrge','smmulrlt','smmulrgt','smmulrle',
            'smmlaeq','smmlane','smmlacs','smmlahs','smmlacc','smmlalo','smmlami','smmlapl','smmlavs','smmlavc','smmlahi','smmlals','smmlage','smmlalt','smmlagt','smmlale',
            'smmlareq','smmlarne','smmlarcs','smmlarhs','smmlarcc','smmlarlo','smmlarmi','smmlarpl','smmlarvs','smmlarvc','smmlarhi','smmlarls','smmlarge','smmlarlt','smmlargt','smmlarle',
            'smmlseq','smmlsne','smmlscs','smmlshs','smmlscc','smmlslo','smmlsmi','smmlspl','smmlsvs','smmlsvc','smmlshi','smmlsls','smmlsge','smmlslt','smmlsgt','smmlsle',
            'smmlsreq','smmlsrne','smmlsrcs','smmlsrhs','smmlsrcc','smmlsrlo','smmlsrmi','smmlsrpl','smmlsrvs','smmlsrvc','smmlsrhi','smmlsrls','smmlsrge','smmlsrlt','smmlsrgt','smmlsrle',
            'smuadeq','smuadne','smuadcs','smuadhs','smuadcc','smuadlo','smuadmi','smuadpl','smuadvs','smuadvc','smuadhi','smuadls','smuadge','smuadlt','smuadgt','smuadle',
            'smuadxeq','smuadxne','smuadxcs','smuadxhs','smuadxcc','smuadxlo','smuadxmi','smuadxpl','smuadxvs','smuadxvc','smuadxhi','smuadxls','smuadxge','smuadxlt','smuadxgt','smuadxle',
            'smusdeq','smusdne','smusdcs','smusdhs','smusdcc','smusdlo','smusdmi','smusdpl','smusdvs','smusdvc','smusdhi','smusdls','smusdge','smusdlt','smusdgt','smusdle',
            'smusdxeq','smusdxne','smusdxcs','smusdxhs','smusdxcc','smusdxlo','smusdxmi','smusdxpl','smusdxvs','smusdxvc','smusdxhi','smusdxls','smusdxge','smusdxlt','smusdxgt','smusdxle',
            'umaaleq','umaalne','umaalcs','umaalhs','umaalcc','umaallo','umaalmi','umaalpl','umaalvs','umaalvc','umaalhi','umaalls','umaalge','umaallt','umaalgt','umaalle'
            ),
        /* Unconditional Coprocessor Instructions */
        13 => array(
            /* Data Processing: Unconditional Coprocessor Instructions */
            'cdp','cdpal',
            'cdp2','cdp2al',
            'ldc','ldcal',
            'ldcl','ldclal',
            'ldc2','ldc2al',
            'ldc2l','ldc2lal',
            'stc','stcal',
            'stcl','stclal',
            'stc2','stc2al',
            'stc2l','stc2lal',
            'mcr','mcral',
            'mcr2','mcr2al',
            'mcrr','mcrral',
            'mcrr2','mcrr2al',
            'mrc','mrcal',
            'mrc2','mrc2al',
            'mrrc','mrrcal',
            'mrrc2','mrrc2al'
            ),
        /* Conditional Coprocessor Instructions */
        14 => array(
            /* Data Processing: Conditional Coprocessor Instructions */
            'cdpeq','cdpne','cdpcs','cdphs','cdpcc','cdplo','cdpmi','cdppl','cdpvs','cdpvc','cdphi','cdpls','cdpge','cdplt','cdpgt','cdple',
            'cdp2eq','cdp2ne','cdp2cs','cdp2hs','cdp2cc','cdp2lo','cdp2mi','cdp2pl','cdp2vs','cdp2vc','cdp2hi','cdp2ls','cdp2ge','cdp2lt','cdp2gt','cdp2le',
            'ldceq','ldcne','ldccs','ldchs','ldccc','ldclo','ldcmi','ldcpl','ldcvs','ldcvc','ldchi','ldcls','ldcge','ldclt','ldcgt','ldcle',
            'ldcleq','ldclne','ldclcs','ldclhs','ldclcc','ldcllo','ldclmi','ldclpl','ldclvs','ldclvc','ldclhi','ldclls','ldclge','ldcllt','ldclgt','ldclle',
            'ldc2eq','ldc2ne','ldc2cs','ldc2hs','ldc2cc','ldc2lo','ldc2mi','ldc2pl','ldc2vs','ldc2vc','ldc2hi','ldc2ls','ldc2ge','ldc2lt','ldc2gt','ldc2le',
            'ldc2leq','ldc2lne','ldc2lcs','ldc2lhs','ldc2lcc','ldc2llo','ldc2lmi','ldc2lpl','ldc2lvs','ldc2lvc','ldc2lhi','ldc2lls','ldc2lge','ldc2llt','ldc2lgt','ldc2lle',
            'stceq','stcne','stccs','stchs','stccc','stclo','stcmi','stcpl','stcvs','stcvc','stchi','stcls','stcge','stclt','stcgt','stcle',
            'stcleq','stclne','stclcs','stclhs','stclcc','stcllo','stclmi','stclpl','stclvs','stclvc','stclhi','stclls','stclge','stcllt','stclgt','stclle',
            'stc2eq','stc2ne','stc2cs','stc2hs','stc2cc','stc2lo','stc2mi','stc2pl','stc2vs','stc2vc','stc2hi','stc2ls','stc2ge','stc2lt','stc2gt','stc2le',
            'stc2leq','stc2lne','stc2lcs','stc2lhs','stc2lcc','stc2llo','stc2lmi','stc2lpl','stc2lvs','stc2lvc','stc2lhi','stc2lls','stc2lge','stc2llt','stc2lgt','stc2lle',
            'mcreq','mcrne','mcrcs','mcrhs','mcrcc','mcrlo','mcrmi','mcrpl','mcrvs','mcrvc','mcrhi','mcrls','mcrge','mcrlt','mcrgt','mcrle',
            'mcr2eq','mcr2ne','mcr2cs','mcr2hs','mcr2cc','mcr2lo','mcr2mi','mcr2pl','mcr2vs','mcr2vc','mcr2hi','mcr2ls','mcr2ge','mcr2lt','mcr2gt','mcr2le',
            'mcrreq','mcrrne','mcrrcs','mcrrhs','mcrrcc','mcrrlo','mcrrmi','mcrrpl','mcrrvs','mcrrvc','mcrrhi','mcrrls','mcrrge','mcrrlt','mcrrgt','mcrrle',
            'mcrr2eq','mcrr2ne','mcrr2cs','mcrr2hs','mcrr2cc','mcrr2lo','mcrr2mi','mcrr2pl','mcrr2vs','mcrr2vc','mcrr2hi','mcrr2ls','mcrr2ge','mcrr2lt','mcrr2gt','mcrr2le',
            'mrceq','mrcne','mrccs','mrchs','mrccc','mrclo','mrcmi','mrcpl','mrcvs','mrcvc','mrchi','mrcls','mrcge','mrclt','mrcgt','mrcle',
            'mrc2eq','mrc2ne','mrc2cs','mrc2hs','mrc2cc','mrc2lo','mrc2mi','mrc2pl','mrc2vs','mrc2vc','mrc2hi','mrc2ls','mrc2ge','mrc2lt','mrc2gt','mrc2le',
            'mrrceq','mrrcne','mrrccs','mrrchs','mrrccc','mrrclo','mrrcmi','mrrcpl','mrrcvs','mrrcvc','mrrchi','mrrcls','mrrcge','mrrclt','mrrcgt','mrrcle',
            'mrrc2eq','mrrc2ne','mrrc2cs','mrrc2hs','mrrc2cc','mrrc2lo','mrrc2mi','mrrc2pl','mrrc2vs','mrrc2vc','mrrc2hi','mrrc2ls','mrrc2ge','mrrc2lt','mrrc2gt','mrrc2le'
            ),
        /* Unconditional System Instructions */
        15 => array(
            /* System: Unconditional Debug and State-Change Instructions */
            'bkpt',
            'dbg','dbgal',
            'setend',
            'svc','svcal',
            'sev.w','seval.w',
            'sev','seval',
            'wfe.w','wfeal.w',
            'wfe','wfeal',
            'wfi.w','wfial.w',
            'wfi','wfial',
            /* System: Unconditional ThumbEE Instructions */
            'enterx',
            'leavex',
            'chka.n','chkaal.n',
            'chka','chkaal',
            'hb.n','hbal.n',
            'hb','hbal',
            'hbl.n','hblal.n',
            'hbl','hblal',
            'hblp.n','hblpal.n',
            'hblp','hblpal',
            'hbp.n','hbpal.n',
            'hbp','hbpal',
            /* System: Unconditional Privileged Instructions */
            'cpsie.n',
            'cpsie.w',
            'cpsie',
            'cpsid.n',
            'cpsid.w',
            'cpsid',
            'smc','smcal',
            'rfeda','rfedaal',
            'rfedb','rfedbal',
            'rfeia','rfeiaal',
            'rfeib','rfeibal',
            'srsda','srsdaal',
            'srsdb','srsdbal',
            'srsia','srsiaal',
            'srsib','srsibal'
            ),
        /* Conditional System Instructions */
        16 => array(
            /* System: Conditional Debug and State-Change Instructions */
            'dbgeq','dbgne','dbgcs','dbghs','dbgcc','dbglo','dbgmi','dbgpl','dbgvs','dbgvc','dbghi','dbgls','dbgge','dbglt','dbggt','dbgle',
            'svceq','svcne','svccs','svchs','svccc','svclo','svcmi','svcpl','svcvs','svcvc','svchi','svcls','svcge','svclt','svcgt','svcle',
            'seveq.w','sevne.w','sevcs.w','sevhs.w','sevcc.w','sevlo.w','sevmi.w','sevpl.w','sevvs.w','sevvc.w','sevhi.w','sevls.w','sevge.w','sevlt.w','sevgt.w','sevle.w',
            'seveq','sevne','sevcs','sevhs','sevcc','sevlo','sevmi','sevpl','sevvs','sevvc','sevhi','sevls','sevge','sevlt','sevgt','sevle',
            'wfeeq.w','wfene.w','wfecs.w','wfehs.w','wfecc.w','wfelo.w','wfemi.w','wfepl.w','wfevs.w','wfevc.w','wfehi.w','wfels.w','wfege.w','wfelt.w','wfegt.w','wfele.w',
            'wfeeq','wfene','wfecs','wfehs','wfecc','wfelo','wfemi','wfepl','wfevs','wfevc','wfehi','wfels','wfege','wfelt','wfegt','wfele',
            'wfieq.w','wfine.w','wfics.w','wfihs.w','wficc.w','wfilo.w','wfimi.w','wfipl.w','wfivs.w','wfivc.w','wfihi.w','wfils.w','wfige.w','wfilt.w','wfigt.w','wfile.w',
            'wfieq','wfine','wfics','wfihs','wficc','wfilo','wfimi','wfipl','wfivs','wfivc','wfihi','wfils','wfige','wfilt','wfigt','wfile',
            /* System: Conditional ThumbEE Instructions */
            'chkaeq.n','chkane.n','chkacs.n','chkahs.n','chkacc.n','chkalo.n','chkami.n','chkapl.n','chkavs.n','chkavc.n','chkahi.n','chkals.n','chkage.n','chkalt.n','chkagt.n','chkale.n',
            'chkaeq','chkane','chkacs','chkahs','chkacc','chkalo','chkami','chkapl','chkavs','chkavc','chkahi','chkals','chkage','chkalt','chkagt','chkale',
            'hbeq.n','hbne.n','hbcs.n','hbhs.n','hbcc.n','hblo.n','hbmi.n','hbpl.n','hbvs.n','hbvc.n','hbhi.n','hbls.n','hbge.n','hblt.n','hbgt.n','hble.n',
            'hbeq','hbne','hbcs','hbhs','hbcc','hblo','hbmi','hbpl','hbvs','hbvc','hbhi','hbls','hbge','hblt','hbgt','hble',
            'hbleq.n','hblne.n','hblcs.n','hblhs.n','hblcc.n','hbllo.n','hblmi.n','hblpl.n','hblvs.n','hblvc.n','hblhi.n','hblls.n','hblge.n','hbllt.n','hblgt.n','hblle.n',
            'hbleq','hblne','hblcs','hblhs','hblcc','hbllo','hblmi','hblpl','hblvs','hblvc','hblhi','hblls','hblge','hbllt','hblgt','hblle',
            'hblpeq.n','hblpne.n','hblpcs.n','hblphs.n','hblpcc.n','hblplo.n','hblpmi.n','hblppl.n','hblpvs.n','hblpvc.n','hblphi.n','hblpls.n','hblpge.n','hblplt.n','hblpgt.n','hblple.n',
            'hblpeq','hblpne','hblpcs','hblphs','hblpcc','hblplo','hblpmi','hblppl','hblpvs','hblpvc','hblphi','hblpls','hblpge','hblplt','hblpgt','hblple',
            'hbpeq.n','hbpne.n','hbpcs.n','hbphs.n','hbpcc.n','hbplo.n','hbpmi.n','hbppl.n','hbpvs.n','hbpvc.n','hbphi.n','hbpls.n','hbpge.n','hbplt.n','hbpgt.n','hbple.n',
            'hbpeq','hbpne','hbpcs','hbphs','hbpcc','hbplo','hbpmi','hbppl','hbpvs','hbpvc','hbphi','hbpls','hbpge','hbplt','hbpgt','hbple',
            /* System: Conditional Privileged Instructions */
            'smceq','smcne','smccs','smchs','smccc','smclo','smcmi','smcpl','smcvs','smcvc','smchi','smcls','smcge','smclt','smcgt','smcle',
            'rfedaeq','rfedane','rfedacs','rfedahs','rfedacc','rfedalo','rfedami','rfedapl','rfedavs','rfedavc','rfedahi','rfedals','rfedage','rfedalt','rfedagt','rfedale',
            'rfedbeq','rfedbne','rfedbcs','rfedbhs','rfedbcc','rfedblo','rfedbmi','rfedbpl','rfedbvs','rfedbvc','rfedbhi','rfedbls','rfedbge','rfedblt','rfedbgt','rfedble',
            'rfeiaeq','rfeiane','rfeiacs','rfeiahs','rfeiacc','rfeialo','rfeiami','rfeiapl','rfeiavs','rfeiavc','rfeiahi','rfeials','rfeiage','rfeialt','rfeiagt','rfeiale',
            'rfeibeq','rfeibne','rfeibcs','rfeibhs','rfeibcc','rfeiblo','rfeibmi','rfeibpl','rfeibvs','rfeibvc','rfeibhi','rfeibls','rfeibge','rfeiblt','rfeibgt','rfeible',
            'srsdaeq','srsdane','srsdacs','srsdahs','srsdacc','srsdalo','srsdami','srsdapl','srsdavs','srsdavc','srsdahi','srsdals','srsdage','srsdalt','srsdagt','srsdale',
            'srsdbeq','srsdbne','srsdbcs','srsdbhs','srsdbcc','srsdblo','srsdbmi','srsdbpl','srsdbvs','srsdbvc','srsdbhi','srsdbls','srsdbge','srsdblt','srsdbgt','srsdble',
            'srsiaeq','srsiane','srsiacs','srsiahs','srsiacc','srsialo','srsiami','srsiapl','srsiavs','srsiavc','srsiahi','srsials','srsiage','srsialt','srsiagt','srsiale',
            'srsibeq','srsibne','srsibcs','srsibhs','srsibcc','srsiblo','srsibmi','srsibpl','srsibvs','srsibvc','srsibhi','srsibls','srsibge','srsiblt','srsibgt','srsible'
            ),
        /* Unconditional WMMX/WMMX2 instructions */
        17 => array(
            /* Unconditional WMMX/WMMX2 SIMD Instructions */
            'tandcb','tandcbal',
            'tandch','tandchal',
            'tandcw','tandcwal',
            'tbcstb','tbcstbal',
            'tbcsth','tbcsthal',
            'tbcstw','tbcstwal',
            'textrcb','textrcbal',
            'textrch','textrchal',
            'textrcw','textrcwal',
            'textrmsb','textrmsbal',
            'textrmsh','textrmshal',
            'textrmsw','textrmswal',
            'textrmub','textrmubal',
            'textrmuh','textrmuhal',
            'textrmuw','textrmuwal',
            'tinsrb','tinsrbal',
            'tinsrh','tinsrhal',
            'tinsrw','tinsrwal',
            'tmcr','tmcral',
            'tmcrr','tmcrral',
            'tmia','tmiaal',
            'tmiaph','tmiaphal',
            'tmiabb','tmiabbal',
            'tmiabt','tmiabtal',
            'tmiatb','tmiatbal',
            'tmiatt','tmiattal',
            'tmovmskb','tmovmskbal',
            'tmovmskh','tmovmskhal',
            'tmovmskw','tmovmskwal',
            'tmrc','tmrcal',
            'tmrrc','tmrrcal',
            'torcb','torcbal',
            'torch','torchal',
            'torcw','torcwal',
            'torvscb','torvscbal',
            'torvsch','torvschal',
            'torvscw','torvscwal',
            'wabsb','wabsbal',
            'wabsh','wabshal',
            'wabsw','wabswal',
            'wabsdiffb','wabsdiffbal',
            'wabsdiffh','wabsdiffhal',
            'wabsdiffw','wabsdiffwal',
            'waccb','waccbal',
            'wacch','wacchal',
            'waccw','waccwal',
            'waddb','waddbal',
            'waddh','waddhal',
            'waddw','waddwal',
            'waddbc','waddbcal',
            'waddhc','waddhcal',
            'waddwc','waddwcal',
            'waddbss','waddbssal',
            'waddhss','waddhssal',
            'waddwss','waddwssal',
            'waddbus','waddbusal',
            'waddhus','waddhusal',
            'waddwus','waddwusal',
            'waddsubhx','waddsubhxal',
            'waligni','walignial',
            'walignr0','walignr0al',
            'walignr1','walignr1al',
            'walignr2','walignr2al',
            'walignr3','walignr3al',
            'wand','wandal',
            'wandn','wandnal',
            'wavg2b','wavg2bal',
            'wavg2h','wavg2hal',
            'wavg2br','wavg2bral',
            'wavg2hr','wavg2hral',
            'wavg4','wavg4al',
            'wavg4r','wavg4ral',
            'wcmpeqb','wcmpeqbal',
            'wcmpeqh','wcmpeqhal',
            'wcmpeqw','wcmpeqwal',
            'wcmpgtsb','wcmpgtsbal',
            'wcmpgtsh','wcmpgtshal',
            'wcmpgtsw','wcmpgtswal',
            'wcmpgtub','wcmpgtubal',
            'wcmpgtuh','wcmpgtuhal',
            'wcmpgtuw','wcmpgtuwal',
            'wldrb','wldrbal',
            'wldrh','wldrhal',
            'wldrw','wldrwal',
            'wldrd','wldrdal',
            'wmacs','wmacsal',
            'wmacu','wmacual',
            'wmacsz','wmacszal',
            'wmacuz','wmacuzal',
            'wmadds','wmaddsal',
            'wmaddu','wmaddual',
            'wmaddsx','wmaddsxal',
            'wmaddux','wmadduxal',
            'wmaddsn','wmaddsnal',
            'wmaddun','wmaddunal',
            'wmaxsb','wmaxsbal',
            'wmaxsh','wmaxshal',
            'wmaxsw','wmaxswal',
            'wmaxub','wmaxubal',
            'wmaxuh','wmaxuhal',
            'wmaxuw','wmaxuwal',
            'wmerge','wmergeal',
            'wmiabb','wmiabbal',
            'wmiabt','wmiabtal',
            'wmiatb','wmiatbal',
            'wmiatt','wmiattal',
            'wmiabbn','wmiabbnal',
            'wmiabtn','wmiabtnal',
            'wmiatbn','wmiatbnal',
            'wmiattn','wmiattnal',
            'wmiawbb','wmiawbbal',
            'wmiawbt','wmiawbtal',
            'wmiawtb','wmiawtbal',
            'wmiawtt','wmiawttal',
            'wmiawbbn','wmiawbbnal',
            'wmiawbtn','wmiawbtnal',
            'wmiawtbn','wmiawtbnal',
            'wmiawttn','wmiawttnal',
            'wminsb','wminsbal',
            'wminsh','wminshal',
            'wminsw','wminswal',
            'wminub','wminubal',
            'wminuh','wminuhal',
            'wminuw','wminuwal',
            'wmov','wmoval',
            'wmulsm','wmulsmal',
            'wmulsl','wmulslal',
            'wmulum','wmulumal',
            'wmulul','wmululal',
            'wmulsmr','wmulsmral',
            'wmulslr','wmulslral',
            'wmulumr','wmulumral',
            'wmululr','wmululral',
            'wmulwum','wmulwumal',
            'wmulwsm','wmulwsmal',
            'wmulwl','wmulwlal',
            'wmulwumr','wmulwumral',
            'wmulwsmr','wmulwsmral',
            'wor','woral',
            'wpackhss','wpackhssal',
            'wpackwss','wpackwssal',
            'wpackdss','wpackdssal',
            'wpackhus','wpackhusal',
            'wpackwus','wpackwusal',
            'wpackdus','wpackdusal',
            'wqmiabb','wqmiabbal',
            'wqmiabt','wqmiabtal',
            'wqmiatb','wqmiatbal',
            'wqmiatt','wqmiattal',
            'wqmiabbn','wqmiabbnal',
            'wqmiabtn','wqmiabtnal',
            'wqmiatbn','wqmiatbnal',
            'wqmiattn','wqmiattnal',
            'wqmulm','wqmulmal',
            'wqmulmr','wqmulmral',
            'wqmulwm','wqmulwmal',
            'wqmulwmr','wqmulwmral',
            'wrorh','wrorhal',
            'wrorw','wrorwal',
            'wrord','wrordal',
            'wrorhg','wrorhgal',
            'wrorwg','wrorwgal',
            'wrordg','wrordgal',
            'wsadb','wsadbal',
            'wsadh','wsadhal',
            'wsadbz','wsadbzal',
            'wsadhz','wsadhzal',
            'wshufh','wshufhal',
            'wsllh','wsllhal',
            'wsllw','wsllwal',
            'wslld','wslldal',
            'wsllhg','wsllhgal',
            'wsllwg','wsllwgal',
            'wslldg','wslldgal',
            'wsrah','wsrahal',
            'wsraw','wsrawal',
            'wsrad','wsradal',
            'wsrahg','wsrahgal',
            'wsrawg','wsrawgal',
            'wsradg','wsradgal',
            'wsrlh','wsrlhal',
            'wsrlw','wsrlwal',
            'wsrld','wsrldal',
            'wsrlhg','wsrlhgal',
            'wsrlwg','wsrlwgal',
            'wsrldg','wsrldgal',
            'wstrb','wstrbal',
            'wstrh','wstrhal',
            'wstrw','wstrwal',
            'wstrd','wstrdal',
            'wsubb','wsubbal',
            'wsubh','wsubhal',
            'wsubw','wsubwal',
            'wsubbss','wsubbssal',
            'wsubhss','wsubhssal',
            'wsubwss','wsubwssal',
            'wsubbus','wsubbusal',
            'wsubhus','wsubhusal',
            'wsubwus','wsubwusal',
            'wsubaddhx','wsubaddhxal',
            'wunpckehsb','wunpckehsbal',
            'wunpckehsh','wunpckehshal',
            'wunpckehsw','wunpckehswal',
            'wunpckehub','wunpckehubal',
            'wunpckehuh','wunpckehuhal',
            'wunpckehuw','wunpckehuwal',
            'wunpckihb','wunpckihbal',
            'wunpckihh','wunpckihhal',
            'wunpckihw','wunpckihwal',
            'wunpckelsb','wunpckelsbal',
            'wunpckelsh','wunpckelshal',
            'wunpckelsw','wunpckelswal',
            'wunpckelub','wunpckelubal',
            'wunpckeluh','wunpckeluhal',
            'wunpckeluw','wunpckeluwal',
            'wunpckilb','wunpckilbal',
            'wunpckilh','wunpckilhal',
            'wunpckilw','wunpckilwal',
            'wxor','wxoral',
            'wzero','wzeroal'
            ),
        /* Conditional WMMX/WMMX2 SIMD Instructions */
        18 => array(
            /* Conditional WMMX/WMMX2 SIMD Instructions */
            'tandcbeq','tandcbne','tandcbcs','tandcbhs','tandcbcc','tandcblo','tandcbmi','tandcbpl','tandcbvs','tandcbvc','tandcbhi','tandcbls','tandcbge','tandcblt','tandcbgt','tandcble',
            'tandcheq','tandchne','tandchcs','tandchhs','tandchcc','tandchlo','tandchmi','tandchpl','tandchvs','tandchvc','tandchhi','tandchls','tandchge','tandchlt','tandchgt','tandchle',
            'tandcweq','tandcwne','tandcwcs','tandcwhs','tandcwcc','tandcwlo','tandcwmi','tandcwpl','tandcwvs','tandcwvc','tandcwhi','tandcwls','tandcwge','tandcwlt','tandcwgt','tandcwle',
            'tbcstbeq','tbcstbne','tbcstbcs','tbcstbhs','tbcstbcc','tbcstblo','tbcstbmi','tbcstbpl','tbcstbvs','tbcstbvc','tbcstbhi','tbcstbls','tbcstbge','tbcstblt','tbcstbgt','tbcstble',
            'tbcstheq','tbcsthne','tbcsthcs','tbcsthhs','tbcsthcc','tbcsthlo','tbcsthmi','tbcsthpl','tbcsthvs','tbcsthvc','tbcsthhi','tbcsthls','tbcsthge','tbcsthlt','tbcsthgt','tbcsthle',
            'tbcstweq','tbcstwne','tbcstwcs','tbcstwhs','tbcstwcc','tbcstwlo','tbcstwmi','tbcstwpl','tbcstwvs','tbcstwvc','tbcstwhi','tbcstwls','tbcstwge','tbcstwlt','tbcstwgt','tbcstwle',
            'textrcbeq','textrcbne','textrcbcs','textrcbhs','textrcbcc','textrcblo','textrcbmi','textrcbpl','textrcbvs','textrcbvc','textrcbhi','textrcbls','textrcbge','textrcblt','textrcbgt','textrcble',
            'textrcheq','textrchne','textrchcs','textrchhs','textrchcc','textrchlo','textrchmi','textrchpl','textrchvs','textrchvc','textrchhi','textrchls','textrchge','textrchlt','textrchgt','textrchle',
            'textrcweq','textrcwne','textrcwcs','textrcwhs','textrcwcc','textrcwlo','textrcwmi','textrcwpl','textrcwvs','textrcwvc','textrcwhi','textrcwls','textrcwge','textrcwlt','textrcwgt','textrcwle',
            'textrmsbeq','textrmsbne','textrmsbcs','textrmsbhs','textrmsbcc','textrmsblo','textrmsbmi','textrmsbpl','textrmsbvs','textrmsbvc','textrmsbhi','textrmsbls','textrmsbge','textrmsblt','textrmsbgt','textrmsble',
            'textrmsheq','textrmshne','textrmshcs','textrmshhs','textrmshcc','textrmshlo','textrmshmi','textrmshpl','textrmshvs','textrmshvc','textrmshhi','textrmshls','textrmshge','textrmshlt','textrmshgt','textrmshle',
            'textrmsweq','textrmswne','textrmswcs','textrmswhs','textrmswcc','textrmswlo','textrmswmi','textrmswpl','textrmswvs','textrmswvc','textrmswhi','textrmswls','textrmswge','textrmswlt','textrmswgt','textrmswle',
            'textrmubeq','textrmubne','textrmubcs','textrmubhs','textrmubcc','textrmublo','textrmubmi','textrmubpl','textrmubvs','textrmubvc','textrmubhi','textrmubls','textrmubge','textrmublt','textrmubgt','textrmuble',
            'textrmuheq','textrmuhne','textrmuhcs','textrmuhhs','textrmuhcc','textrmuhlo','textrmuhmi','textrmuhpl','textrmuhvs','textrmuhvc','textrmuhhi','textrmuhls','textrmuhge','textrmuhlt','textrmuhgt','textrmuhle',
            'textrmuweq','textrmuwne','textrmuwcs','textrmuwhs','textrmuwcc','textrmuwlo','textrmuwmi','textrmuwpl','textrmuwvs','textrmuwvc','textrmuwhi','textrmuwls','textrmuwge','textrmuwlt','textrmuwgt','textrmuwle',
            'tinsrbeq','tinsrbne','tinsrbcs','tinsrbhs','tinsrbcc','tinsrblo','tinsrbmi','tinsrbpl','tinsrbvs','tinsrbvc','tinsrbhi','tinsrbls','tinsrbge','tinsrblt','tinsrbgt','tinsrble',
            'tinsrheq','tinsrhne','tinsrhcs','tinsrhhs','tinsrhcc','tinsrhlo','tinsrhmi','tinsrhpl','tinsrhvs','tinsrhvc','tinsrhhi','tinsrhls','tinsrhge','tinsrhlt','tinsrhgt','tinsrhle',
            'tinsrweq','tinsrwne','tinsrwcs','tinsrwhs','tinsrwcc','tinsrwlo','tinsrwmi','tinsrwpl','tinsrwvs','tinsrwvc','tinsrwhi','tinsrwls','tinsrwge','tinsrwlt','tinsrwgt','tinsrwle',
            'tmcreq','tmcrne','tmcrcs','tmcrhs','tmcrcc','tmcrlo','tmcrmi','tmcrpl','tmcrvs','tmcrvc','tmcrhi','tmcrls','tmcrge','tmcrlt','tmcrgt','tmcrle',
            'tmcrreq','tmcrrne','tmcrrcs','tmcrrhs','tmcrrcc','tmcrrlo','tmcrrmi','tmcrrpl','tmcrrvs','tmcrrvc','tmcrrhi','tmcrrls','tmcrrge','tmcrrlt','tmcrrgt','tmcrrle',
            'tmiaeq','tmiane','tmiacs','tmiahs','tmiacc','tmialo','tmiami','tmiapl','tmiavs','tmiavc','tmiahi','tmials','tmiage','tmialt','tmiagt','tmiale',
            'tmiapheq','tmiaphne','tmiaphcs','tmiaphhs','tmiaphcc','tmiaphlo','tmiaphmi','tmiaphpl','tmiaphvs','tmiaphvc','tmiaphhi','tmiaphls','tmiaphge','tmiaphlt','tmiaphgt','tmiaphle',
            'tmiabbeq','tmiabbne','tmiabbcs','tmiabbhs','tmiabbcc','tmiabblo','tmiabbmi','tmiabbpl','tmiabbvs','tmiabbvc','tmiabbhi','tmiabbls','tmiabbge','tmiabblt','tmiabbgt','tmiabble',
            'tmiabteq','tmiabtne','tmiabtcs','tmiabths','tmiabtcc','tmiabtlo','tmiabtmi','tmiabtpl','tmiabtvs','tmiabtvc','tmiabthi','tmiabtls','tmiabtge','tmiabtlt','tmiabtgt','tmiabtle',
            'tmiatbeq','tmiatbne','tmiatbcs','tmiatbhs','tmiatbcc','tmiatblo','tmiatbmi','tmiatbpl','tmiatbvs','tmiatbvc','tmiatbhi','tmiatbls','tmiatbge','tmiatblt','tmiatbgt','tmiatble',
            'tmiatteq','tmiattne','tmiattcs','tmiatths','tmiattcc','tmiattlo','tmiattmi','tmiattpl','tmiattvs','tmiattvc','tmiatthi','tmiattls','tmiattge','tmiattlt','tmiattgt','tmiattle',
            'tmovmskbeq','tmovmskbne','tmovmskbcs','tmovmskbhs','tmovmskbcc','tmovmskblo','tmovmskbmi','tmovmskbpl','tmovmskbvs','tmovmskbvc','tmovmskbhi','tmovmskbls','tmovmskbge','tmovmskblt','tmovmskbgt','tmovmskble',
            'tmovmskheq','tmovmskhne','tmovmskhcs','tmovmskhhs','tmovmskhcc','tmovmskhlo','tmovmskhmi','tmovmskhpl','tmovmskhvs','tmovmskhvc','tmovmskhhi','tmovmskhls','tmovmskhge','tmovmskhlt','tmovmskhgt','tmovmskhle',
            'tmovmskweq','tmovmskwne','tmovmskwcs','tmovmskwhs','tmovmskwcc','tmovmskwlo','tmovmskwmi','tmovmskwpl','tmovmskwvs','tmovmskwvc','tmovmskwhi','tmovmskwls','tmovmskwge','tmovmskwlt','tmovmskwgt','tmovmskwle',
            'tmrceq','tmrcne','tmrccs','tmrchs','tmrccc','tmrclo','tmrcmi','tmrcpl','tmrcvs','tmrcvc','tmrchi','tmrcls','tmrcge','tmrclt','tmrcgt','tmrcle',
            'tmrrceq','tmrrcne','tmrrccs','tmrrchs','tmrrccc','tmrrclo','tmrrcmi','tmrrcpl','tmrrcvs','tmrrcvc','tmrrchi','tmrrcls','tmrrcge','tmrrclt','tmrrcgt','tmrrcle',
            'torcbeq','torcbne','torcbcs','torcbhs','torcbcc','torcblo','torcbmi','torcbpl','torcbvs','torcbvc','torcbhi','torcbls','torcbge','torcblt','torcbgt','torcble',
            'torcheq','torchne','torchcs','torchhs','torchcc','torchlo','torchmi','torchpl','torchvs','torchvc','torchhi','torchls','torchge','torchlt','torchgt','torchle',
            'torcweq','torcwne','torcwcs','torcwhs','torcwcc','torcwlo','torcwmi','torcwpl','torcwvs','torcwvc','torcwhi','torcwls','torcwge','torcwlt','torcwgt','torcwle',
            'torvscbeq','torvscbne','torvscbcs','torvscbhs','torvscbcc','torvscblo','torvscbmi','torvscbpl','torvscbvs','torvscbvc','torvscbhi','torvscbls','torvscbge','torvscblt','torvscbgt','torvscble',
            'torvscheq','torvschne','torvschcs','torvschhs','torvschcc','torvschlo','torvschmi','torvschpl','torvschvs','torvschvc','torvschhi','torvschls','torvschge','torvschlt','torvschgt','torvschle',
            'torvscweq','torvscwne','torvscwcs','torvscwhs','torvscwcc','torvscwlo','torvscwmi','torvscwpl','torvscwvs','torvscwvc','torvscwhi','torvscwls','torvscwge','torvscwlt','torvscwgt','torvscwle',
            'wabsbeq','wabsbne','wabsbcs','wabsbhs','wabsbcc','wabsblo','wabsbmi','wabsbpl','wabsbvs','wabsbvc','wabsbhi','wabsbls','wabsbge','wabsblt','wabsbgt','wabsble',
            'wabsheq','wabshne','wabshcs','wabshhs','wabshcc','wabshlo','wabshmi','wabshpl','wabshvs','wabshvc','wabshhi','wabshls','wabshge','wabshlt','wabshgt','wabshle',
            'wabsweq','wabswne','wabswcs','wabswhs','wabswcc','wabswlo','wabswmi','wabswpl','wabswvs','wabswvc','wabswhi','wabswls','wabswge','wabswlt','wabswgt','wabswle',
            'wabsdiffbeq','wabsdiffbne','wabsdiffbcs','wabsdiffbhs','wabsdiffbcc','wabsdiffblo','wabsdiffbmi','wabsdiffbpl','wabsdiffbvs','wabsdiffbvc','wabsdiffbhi','wabsdiffbls','wabsdiffbge','wabsdiffblt','wabsdiffbgt','wabsdiffble',
            'wabsdiffheq','wabsdiffhne','wabsdiffhcs','wabsdiffhhs','wabsdiffhcc','wabsdiffhlo','wabsdiffhmi','wabsdiffhpl','wabsdiffhvs','wabsdiffhvc','wabsdiffhhi','wabsdiffhls','wabsdiffhge','wabsdiffhlt','wabsdiffhgt','wabsdiffhle',
            'wabsdiffweq','wabsdiffwne','wabsdiffwcs','wabsdiffwhs','wabsdiffwcc','wabsdiffwlo','wabsdiffwmi','wabsdiffwpl','wabsdiffwvs','wabsdiffwvc','wabsdiffwhi','wabsdiffwls','wabsdiffwge','wabsdiffwlt','wabsdiffwgt','wabsdiffwle',
            'waccbeq','waccbne','waccbcs','waccbhs','waccbcc','waccblo','waccbmi','waccbpl','waccbvs','waccbvc','waccbhi','waccbls','waccbge','waccblt','waccbgt','waccble',
            'waccheq','wacchne','wacchcs','wacchhs','wacchcc','wacchlo','wacchmi','wacchpl','wacchvs','wacchvc','wacchhi','wacchls','wacchge','wacchlt','wacchgt','wacchle',
            'waccweq','waccwne','waccwcs','waccwhs','waccwcc','waccwlo','waccwmi','waccwpl','waccwvs','waccwvc','waccwhi','waccwls','waccwge','waccwlt','waccwgt','waccwle',
            'waddbeq','waddbne','waddbcs','waddbhs','waddbcc','waddblo','waddbmi','waddbpl','waddbvs','waddbvc','waddbhi','waddbls','waddbge','waddblt','waddbgt','waddble',
            'waddheq','waddhne','waddhcs','waddhhs','waddhcc','waddhlo','waddhmi','waddhpl','waddhvs','waddhvc','waddhhi','waddhls','waddhge','waddhlt','waddhgt','waddhle',
            'waddweq','waddwne','waddwcs','waddwhs','waddwcc','waddwlo','waddwmi','waddwpl','waddwvs','waddwvc','waddwhi','waddwls','waddwge','waddwlt','waddwgt','waddwle',
            'waddbceq','waddbcne','waddbccs','waddbchs','waddbccc','waddbclo','waddbcmi','waddbcpl','waddbcvs','waddbcvc','waddbchi','waddbcls','waddbcge','waddbclt','waddbcgt','waddbcle',
            'waddhceq','waddhcne','waddhccs','waddhchs','waddhccc','waddhclo','waddhcmi','waddhcpl','waddhcvs','waddhcvc','waddhchi','waddhcls','waddhcge','waddhclt','waddhcgt','waddhcle',
            'waddwceq','waddwcne','waddwccs','waddwchs','waddwccc','waddwclo','waddwcmi','waddwcpl','waddwcvs','waddwcvc','waddwchi','waddwcls','waddwcge','waddwclt','waddwcgt','waddwcle',
            'waddbsseq','waddbssne','waddbsscs','waddbsshs','waddbsscc','waddbsslo','waddbssmi','waddbsspl','waddbssvs','waddbssvc','waddbsshi','waddbssls','waddbssge','waddbsslt','waddbssgt','waddbssle',
            'waddhsseq','waddhssne','waddhsscs','waddhsshs','waddhsscc','waddhsslo','waddhssmi','waddhsspl','waddhssvs','waddhssvc','waddhsshi','waddhssls','waddhssge','waddhsslt','waddhssgt','waddhssle',
            'waddwsseq','waddwssne','waddwsscs','waddwsshs','waddwsscc','waddwsslo','waddwssmi','waddwsspl','waddwssvs','waddwssvc','waddwsshi','waddwssls','waddwssge','waddwsslt','waddwssgt','waddwssle',
            'waddbuseq','waddbusne','waddbuscs','waddbushs','waddbuscc','waddbuslo','waddbusmi','waddbuspl','waddbusvs','waddbusvc','waddbushi','waddbusls','waddbusge','waddbuslt','waddbusgt','waddbusle',
            'waddhuseq','waddhusne','waddhuscs','waddhushs','waddhuscc','waddhuslo','waddhusmi','waddhuspl','waddhusvs','waddhusvc','waddhushi','waddhusls','waddhusge','waddhuslt','waddhusgt','waddhusle',
            'waddwuseq','waddwusne','waddwuscs','waddwushs','waddwuscc','waddwuslo','waddwusmi','waddwuspl','waddwusvs','waddwusvc','waddwushi','waddwusls','waddwusge','waddwuslt','waddwusgt','waddwusle',
            'waddsubhxeq','waddsubhxne','waddsubhxcs','waddsubhxhs','waddsubhxcc','waddsubhxlo','waddsubhxmi','waddsubhxpl','waddsubhxvs','waddsubhxvc','waddsubhxhi','waddsubhxls','waddsubhxge','waddsubhxlt','waddsubhxgt','waddsubhxle',
            'walignieq','walignine','walignics','walignihs','walignicc','walignilo','walignimi','walignipl','walignivs','walignivc','walignihi','walignils','walignige','walignilt','walignigt','walignile',
            'walignr0eq','walignr0ne','walignr0cs','walignr0hs','walignr0cc','walignr0lo','walignr0mi','walignr0pl','walignr0vs','walignr0vc','walignr0hi','walignr0ls','walignr0ge','walignr0lt','walignr0gt','walignr0le',
            'walignr1eq','walignr1ne','walignr1cs','walignr1hs','walignr1cc','walignr1lo','walignr1mi','walignr1pl','walignr1vs','walignr1vc','walignr1hi','walignr1ls','walignr1ge','walignr1lt','walignr1gt','walignr1le',
            'walignr2eq','walignr2ne','walignr2cs','walignr2hs','walignr2cc','walignr2lo','walignr2mi','walignr2pl','walignr2vs','walignr2vc','walignr2hi','walignr2ls','walignr2ge','walignr2lt','walignr2gt','walignr2le',
            'walignr3eq','walignr3ne','walignr3cs','walignr3hs','walignr3cc','walignr3lo','walignr3mi','walignr3pl','walignr3vs','walignr3vc','walignr3hi','walignr3ls','walignr3ge','walignr3lt','walignr3gt','walignr3le',
            'wandeq','wandne','wandcs','wandhs','wandcc','wandlo','wandmi','wandpl','wandvs','wandvc','wandhi','wandls','wandge','wandlt','wandgt','wandle',
            'wandneq','wandnne','wandncs','wandnhs','wandncc','wandnlo','wandnmi','wandnpl','wandnvs','wandnvc','wandnhi','wandnls','wandnge','wandnlt','wandngt','wandnle',
            'wavg2beq','wavg2bne','wavg2bcs','wavg2bhs','wavg2bcc','wavg2blo','wavg2bmi','wavg2bpl','wavg2bvs','wavg2bvc','wavg2bhi','wavg2bls','wavg2bge','wavg2blt','wavg2bgt','wavg2ble',
            'wavg2heq','wavg2hne','wavg2hcs','wavg2hhs','wavg2hcc','wavg2hlo','wavg2hmi','wavg2hpl','wavg2hvs','wavg2hvc','wavg2hhi','wavg2hls','wavg2hge','wavg2hlt','wavg2hgt','wavg2hle',
            'wavg2breq','wavg2brne','wavg2brcs','wavg2brhs','wavg2brcc','wavg2brlo','wavg2brmi','wavg2brpl','wavg2brvs','wavg2brvc','wavg2brhi','wavg2brls','wavg2brge','wavg2brlt','wavg2brgt','wavg2brle',
            'wavg2hreq','wavg2hrne','wavg2hrcs','wavg2hrhs','wavg2hrcc','wavg2hrlo','wavg2hrmi','wavg2hrpl','wavg2hrvs','wavg2hrvc','wavg2hrhi','wavg2hrls','wavg2hrge','wavg2hrlt','wavg2hrgt','wavg2hrle',
            'wavg4eq','wavg4ne','wavg4cs','wavg4hs','wavg4cc','wavg4lo','wavg4mi','wavg4pl','wavg4vs','wavg4vc','wavg4hi','wavg4ls','wavg4ge','wavg4lt','wavg4gt','wavg4le',
            'wavg4req','wavg4rne','wavg4rcs','wavg4rhs','wavg4rcc','wavg4rlo','wavg4rmi','wavg4rpl','wavg4rvs','wavg4rvc','wavg4rhi','wavg4rls','wavg4rge','wavg4rlt','wavg4rgt','wavg4rle',
            'wcmpeqbeq','wcmpeqbne','wcmpeqbcs','wcmpeqbhs','wcmpeqbcc','wcmpeqblo','wcmpeqbmi','wcmpeqbpl','wcmpeqbvs','wcmpeqbvc','wcmpeqbhi','wcmpeqbls','wcmpeqbge','wcmpeqblt','wcmpeqbgt','wcmpeqble',
            'wcmpeqheq','wcmpeqhne','wcmpeqhcs','wcmpeqhhs','wcmpeqhcc','wcmpeqhlo','wcmpeqhmi','wcmpeqhpl','wcmpeqhvs','wcmpeqhvc','wcmpeqhhi','wcmpeqhls','wcmpeqhge','wcmpeqhlt','wcmpeqhgt','wcmpeqhle',
            'wcmpeqweq','wcmpeqwne','wcmpeqwcs','wcmpeqwhs','wcmpeqwcc','wcmpeqwlo','wcmpeqwmi','wcmpeqwpl','wcmpeqwvs','wcmpeqwvc','wcmpeqwhi','wcmpeqwls','wcmpeqwge','wcmpeqwlt','wcmpeqwgt','wcmpeqwle',
            'wcmpgtsbeq','wcmpgtsbne','wcmpgtsbcs','wcmpgtsbhs','wcmpgtsbcc','wcmpgtsblo','wcmpgtsbmi','wcmpgtsbpl','wcmpgtsbvs','wcmpgtsbvc','wcmpgtsbhi','wcmpgtsbls','wcmpgtsbge','wcmpgtsblt','wcmpgtsbgt','wcmpgtsble',
            'wcmpgtsheq','wcmpgtshne','wcmpgtshcs','wcmpgtshhs','wcmpgtshcc','wcmpgtshlo','wcmpgtshmi','wcmpgtshpl','wcmpgtshvs','wcmpgtshvc','wcmpgtshhi','wcmpgtshls','wcmpgtshge','wcmpgtshlt','wcmpgtshgt','wcmpgtshle',
            'wcmpgtsweq','wcmpgtswne','wcmpgtswcs','wcmpgtswhs','wcmpgtswcc','wcmpgtswlo','wcmpgtswmi','wcmpgtswpl','wcmpgtswvs','wcmpgtswvc','wcmpgtswhi','wcmpgtswls','wcmpgtswge','wcmpgtswlt','wcmpgtswgt','wcmpgtswle',
            'wcmpgtubeq','wcmpgtubne','wcmpgtubcs','wcmpgtubhs','wcmpgtubcc','wcmpgtublo','wcmpgtubmi','wcmpgtubpl','wcmpgtubvs','wcmpgtubvc','wcmpgtubhi','wcmpgtubls','wcmpgtubge','wcmpgtublt','wcmpgtubgt','wcmpgtuble',
            'wcmpgtuheq','wcmpgtuhne','wcmpgtuhcs','wcmpgtuhhs','wcmpgtuhcc','wcmpgtuhlo','wcmpgtuhmi','wcmpgtuhpl','wcmpgtuhvs','wcmpgtuhvc','wcmpgtuhhi','wcmpgtuhls','wcmpgtuhge','wcmpgtuhlt','wcmpgtuhgt','wcmpgtuhle',
            'wcmpgtuweq','wcmpgtuwne','wcmpgtuwcs','wcmpgtuwhs','wcmpgtuwcc','wcmpgtuwlo','wcmpgtuwmi','wcmpgtuwpl','wcmpgtuwvs','wcmpgtuwvc','wcmpgtuwhi','wcmpgtuwls','wcmpgtuwge','wcmpgtuwlt','wcmpgtuwgt','wcmpgtuwle',
            'wldrbeq','wldrbne','wldrbcs','wldrbhs','wldrbcc','wldrblo','wldrbmi','wldrbpl','wldrbvs','wldrbvc','wldrbhi','wldrbls','wldrbge','wldrblt','wldrbgt','wldrble',
            'wldrheq','wldrhne','wldrhcs','wldrhhs','wldrhcc','wldrhlo','wldrhmi','wldrhpl','wldrhvs','wldrhvc','wldrhhi','wldrhls','wldrhge','wldrhlt','wldrhgt','wldrhle',
            'wldrweq','wldrwne','wldrwcs','wldrwhs','wldrwcc','wldrwlo','wldrwmi','wldrwpl','wldrwvs','wldrwvc','wldrwhi','wldrwls','wldrwge','wldrwlt','wldrwgt','wldrwle',
            'wldrdeq','wldrdne','wldrdcs','wldrdhs','wldrdcc','wldrdlo','wldrdmi','wldrdpl','wldrdvs','wldrdvc','wldrdhi','wldrdls','wldrdge','wldrdlt','wldrdgt','wldrdle',
            'wmacseq','wmacsne','wmacscs','wmacshs','wmacscc','wmacslo','wmacsmi','wmacspl','wmacsvs','wmacsvc','wmacshi','wmacsls','wmacsge','wmacslt','wmacsgt','wmacsle',
            'wmacueq','wmacune','wmacucs','wmacuhs','wmacucc','wmaculo','wmacumi','wmacupl','wmacuvs','wmacuvc','wmacuhi','wmaculs','wmacuge','wmacult','wmacugt','wmacule',
            'wmacszeq','wmacszne','wmacszcs','wmacszhs','wmacszcc','wmacszlo','wmacszmi','wmacszpl','wmacszvs','wmacszvc','wmacszhi','wmacszls','wmacszge','wmacszlt','wmacszgt','wmacszle',
            'wmacuzeq','wmacuzne','wmacuzcs','wmacuzhs','wmacuzcc','wmacuzlo','wmacuzmi','wmacuzpl','wmacuzvs','wmacuzvc','wmacuzhi','wmacuzls','wmacuzge','wmacuzlt','wmacuzgt','wmacuzle',
            'wmaddseq','wmaddsne','wmaddscs','wmaddshs','wmaddscc','wmaddslo','wmaddsmi','wmaddspl','wmaddsvs','wmaddsvc','wmaddshi','wmaddsls','wmaddsge','wmaddslt','wmaddsgt','wmaddsle',
            'wmaddueq','wmaddune','wmadducs','wmadduhs','wmadducc','wmaddulo','wmaddumi','wmaddupl','wmadduvs','wmadduvc','wmadduhi','wmadduls','wmadduge','wmaddult','wmaddugt','wmaddule',
            'wmaddsxeq','wmaddsxne','wmaddsxcs','wmaddsxhs','wmaddsxcc','wmaddsxlo','wmaddsxmi','wmaddsxpl','wmaddsxvs','wmaddsxvc','wmaddsxhi','wmaddsxls','wmaddsxge','wmaddsxlt','wmaddsxgt','wmaddsxle',
            'wmadduxeq','wmadduxne','wmadduxcs','wmadduxhs','wmadduxcc','wmadduxlo','wmadduxmi','wmadduxpl','wmadduxvs','wmadduxvc','wmadduxhi','wmadduxls','wmadduxge','wmadduxlt','wmadduxgt','wmadduxle',
            'wmaddsneq','wmaddsnne','wmaddsncs','wmaddsnhs','wmaddsncc','wmaddsnlo','wmaddsnmi','wmaddsnpl','wmaddsnvs','wmaddsnvc','wmaddsnhi','wmaddsnls','wmaddsnge','wmaddsnlt','wmaddsngt','wmaddsnle',
            'wmadduneq','wmaddunne','wmadduncs','wmaddunhs','wmadduncc','wmaddunlo','wmaddunmi','wmaddunpl','wmaddunvs','wmaddunvc','wmaddunhi','wmaddunls','wmaddunge','wmaddunlt','wmaddungt','wmaddunle',
            'wmaxsbeq','wmaxsbne','wmaxsbcs','wmaxsbhs','wmaxsbcc','wmaxsblo','wmaxsbmi','wmaxsbpl','wmaxsbvs','wmaxsbvc','wmaxsbhi','wmaxsbls','wmaxsbge','wmaxsblt','wmaxsbgt','wmaxsble',
            'wmaxsheq','wmaxshne','wmaxshcs','wmaxshhs','wmaxshcc','wmaxshlo','wmaxshmi','wmaxshpl','wmaxshvs','wmaxshvc','wmaxshhi','wmaxshls','wmaxshge','wmaxshlt','wmaxshgt','wmaxshle',
            'wmaxsweq','wmaxswne','wmaxswcs','wmaxswhs','wmaxswcc','wmaxswlo','wmaxswmi','wmaxswpl','wmaxswvs','wmaxswvc','wmaxswhi','wmaxswls','wmaxswge','wmaxswlt','wmaxswgt','wmaxswle',
            'wmaxubeq','wmaxubne','wmaxubcs','wmaxubhs','wmaxubcc','wmaxublo','wmaxubmi','wmaxubpl','wmaxubvs','wmaxubvc','wmaxubhi','wmaxubls','wmaxubge','wmaxublt','wmaxubgt','wmaxuble',
            'wmaxuheq','wmaxuhne','wmaxuhcs','wmaxuhhs','wmaxuhcc','wmaxuhlo','wmaxuhmi','wmaxuhpl','wmaxuhvs','wmaxuhvc','wmaxuhhi','wmaxuhls','wmaxuhge','wmaxuhlt','wmaxuhgt','wmaxuhle',
            'wmaxuweq','wmaxuwne','wmaxuwcs','wmaxuwhs','wmaxuwcc','wmaxuwlo','wmaxuwmi','wmaxuwpl','wmaxuwvs','wmaxuwvc','wmaxuwhi','wmaxuwls','wmaxuwge','wmaxuwlt','wmaxuwgt','wmaxuwle',
            'wmergeeq','wmergene','wmergecs','wmergehs','wmergecc','wmergelo','wmergemi','wmergepl','wmergevs','wmergevc','wmergehi','wmergels','wmergege','wmergelt','wmergegt','wmergele',
            'wmiabbeq','wmiabbne','wmiabbcs','wmiabbhs','wmiabbcc','wmiabblo','wmiabbmi','wmiabbpl','wmiabbvs','wmiabbvc','wmiabbhi','wmiabbls','wmiabbge','wmiabblt','wmiabbgt','wmiabble',
            'wmiabteq','wmiabtne','wmiabtcs','wmiabths','wmiabtcc','wmiabtlo','wmiabtmi','wmiabtpl','wmiabtvs','wmiabtvc','wmiabthi','wmiabtls','wmiabtge','wmiabtlt','wmiabtgt','wmiabtle',
            'wmiatbeq','wmiatbne','wmiatbcs','wmiatbhs','wmiatbcc','wmiatblo','wmiatbmi','wmiatbpl','wmiatbvs','wmiatbvc','wmiatbhi','wmiatbls','wmiatbge','wmiatblt','wmiatbgt','wmiatble',
            'wmiatteq','wmiattne','wmiattcs','wmiatths','wmiattcc','wmiattlo','wmiattmi','wmiattpl','wmiattvs','wmiattvc','wmiatthi','wmiattls','wmiattge','wmiattlt','wmiattgt','wmiattle',
            'wmiabbneq','wmiabbnne','wmiabbncs','wmiabbnhs','wmiabbncc','wmiabbnlo','wmiabbnmi','wmiabbnpl','wmiabbnvs','wmiabbnvc','wmiabbnhi','wmiabbnls','wmiabbnge','wmiabbnlt','wmiabbngt','wmiabbnle',
            'wmiabtneq','wmiabtnne','wmiabtncs','wmiabtnhs','wmiabtncc','wmiabtnlo','wmiabtnmi','wmiabtnpl','wmiabtnvs','wmiabtnvc','wmiabtnhi','wmiabtnls','wmiabtnge','wmiabtnlt','wmiabtngt','wmiabtnle',
            'wmiatbneq','wmiatbnne','wmiatbncs','wmiatbnhs','wmiatbncc','wmiatbnlo','wmiatbnmi','wmiatbnpl','wmiatbnvs','wmiatbnvc','wmiatbnhi','wmiatbnls','wmiatbnge','wmiatbnlt','wmiatbngt','wmiatbnle',
            'wmiattneq','wmiattnne','wmiattncs','wmiattnhs','wmiattncc','wmiattnlo','wmiattnmi','wmiattnpl','wmiattnvs','wmiattnvc','wmiattnhi','wmiattnls','wmiattnge','wmiattnlt','wmiattngt','wmiattnle',
            'wmiawbbeq','wmiawbbne','wmiawbbcs','wmiawbbhs','wmiawbbcc','wmiawbblo','wmiawbbmi','wmiawbbpl','wmiawbbvs','wmiawbbvc','wmiawbbhi','wmiawbbls','wmiawbbge','wmiawbblt','wmiawbbgt','wmiawbble',
            'wmiawbteq','wmiawbtne','wmiawbtcs','wmiawbths','wmiawbtcc','wmiawbtlo','wmiawbtmi','wmiawbtpl','wmiawbtvs','wmiawbtvc','wmiawbthi','wmiawbtls','wmiawbtge','wmiawbtlt','wmiawbtgt','wmiawbtle',
            'wmiawtbeq','wmiawtbne','wmiawtbcs','wmiawtbhs','wmiawtbcc','wmiawtblo','wmiawtbmi','wmiawtbpl','wmiawtbvs','wmiawtbvc','wmiawtbhi','wmiawtbls','wmiawtbge','wmiawtblt','wmiawtbgt','wmiawtble',
            'wmiawtteq','wmiawttne','wmiawttcs','wmiawtths','wmiawttcc','wmiawttlo','wmiawttmi','wmiawttpl','wmiawttvs','wmiawttvc','wmiawtthi','wmiawttls','wmiawttge','wmiawttlt','wmiawttgt','wmiawttle',
            'wmiawbbneq','wmiawbbnne','wmiawbbncs','wmiawbbnhs','wmiawbbncc','wmiawbbnlo','wmiawbbnmi','wmiawbbnpl','wmiawbbnvs','wmiawbbnvc','wmiawbbnhi','wmiawbbnls','wmiawbbnge','wmiawbbnlt','wmiawbbngt','wmiawbbnle',
            'wmiawbtneq','wmiawbtnne','wmiawbtncs','wmiawbtnhs','wmiawbtncc','wmiawbtnlo','wmiawbtnmi','wmiawbtnpl','wmiawbtnvs','wmiawbtnvc','wmiawbtnhi','wmiawbtnls','wmiawbtnge','wmiawbtnlt','wmiawbtngt','wmiawbtnle',
            'wmiawtbneq','wmiawtbnne','wmiawtbncs','wmiawtbnhs','wmiawtbncc','wmiawtbnlo','wmiawtbnmi','wmiawtbnpl','wmiawtbnvs','wmiawtbnvc','wmiawtbnhi','wmiawtbnls','wmiawtbnge','wmiawtbnlt','wmiawtbngt','wmiawtbnle',
            'wmiawttneq','wmiawttnne','wmiawttncs','wmiawttnhs','wmiawttncc','wmiawttnlo','wmiawttnmi','wmiawttnpl','wmiawttnvs','wmiawttnvc','wmiawttnhi','wmiawttnls','wmiawttnge','wmiawttnlt','wmiawttngt','wmiawttnle',
            'wminsbeq','wminsbne','wminsbcs','wminsbhs','wminsbcc','wminsblo','wminsbmi','wminsbpl','wminsbvs','wminsbvc','wminsbhi','wminsbls','wminsbge','wminsblt','wminsbgt','wminsble',
            'wminsheq','wminshne','wminshcs','wminshhs','wminshcc','wminshlo','wminshmi','wminshpl','wminshvs','wminshvc','wminshhi','wminshls','wminshge','wminshlt','wminshgt','wminshle',
            'wminsweq','wminswne','wminswcs','wminswhs','wminswcc','wminswlo','wminswmi','wminswpl','wminswvs','wminswvc','wminswhi','wminswls','wminswge','wminswlt','wminswgt','wminswle',
            'wminubeq','wminubne','wminubcs','wminubhs','wminubcc','wminublo','wminubmi','wminubpl','wminubvs','wminubvc','wminubhi','wminubls','wminubge','wminublt','wminubgt','wminuble',
            'wminuheq','wminuhne','wminuhcs','wminuhhs','wminuhcc','wminuhlo','wminuhmi','wminuhpl','wminuhvs','wminuhvc','wminuhhi','wminuhls','wminuhge','wminuhlt','wminuhgt','wminuhle',
            'wminuweq','wminuwne','wminuwcs','wminuwhs','wminuwcc','wminuwlo','wminuwmi','wminuwpl','wminuwvs','wminuwvc','wminuwhi','wminuwls','wminuwge','wminuwlt','wminuwgt','wminuwle',
            'wmoveq','wmovne','wmovcs','wmovhs','wmovcc','wmovlo','wmovmi','wmovpl','wmovvs','wmovvc','wmovhi','wmovls','wmovge','wmovlt','wmovgt','wmovle',
            'wmulsmeq','wmulsmne','wmulsmcs','wmulsmhs','wmulsmcc','wmulsmlo','wmulsmmi','wmulsmpl','wmulsmvs','wmulsmvc','wmulsmhi','wmulsmls','wmulsmge','wmulsmlt','wmulsmgt','wmulsmle',
            'wmulsleq','wmulslne','wmulslcs','wmulslhs','wmulslcc','wmulsllo','wmulslmi','wmulslpl','wmulslvs','wmulslvc','wmulslhi','wmulslls','wmulslge','wmulsllt','wmulslgt','wmulslle',
            'wmulumeq','wmulumne','wmulumcs','wmulumhs','wmulumcc','wmulumlo','wmulummi','wmulumpl','wmulumvs','wmulumvc','wmulumhi','wmulumls','wmulumge','wmulumlt','wmulumgt','wmulumle',
            'wmululeq','wmululne','wmululcs','wmululhs','wmululcc','wmulullo','wmululmi','wmululpl','wmululvs','wmululvc','wmululhi','wmululls','wmululge','wmulullt','wmululgt','wmululle',
            'wmulsmreq','wmulsmrne','wmulsmrcs','wmulsmrhs','wmulsmrcc','wmulsmrlo','wmulsmrmi','wmulsmrpl','wmulsmrvs','wmulsmrvc','wmulsmrhi','wmulsmrls','wmulsmrge','wmulsmrlt','wmulsmrgt','wmulsmrle',
            'wmulslreq','wmulslrne','wmulslrcs','wmulslrhs','wmulslrcc','wmulslrlo','wmulslrmi','wmulslrpl','wmulslrvs','wmulslrvc','wmulslrhi','wmulslrls','wmulslrge','wmulslrlt','wmulslrgt','wmulslrle',
            'wmulumreq','wmulumrne','wmulumrcs','wmulumrhs','wmulumrcc','wmulumrlo','wmulumrmi','wmulumrpl','wmulumrvs','wmulumrvc','wmulumrhi','wmulumrls','wmulumrge','wmulumrlt','wmulumrgt','wmulumrle',
            'wmululreq','wmululrne','wmululrcs','wmululrhs','wmululrcc','wmululrlo','wmululrmi','wmululrpl','wmululrvs','wmululrvc','wmululrhi','wmululrls','wmululrge','wmululrlt','wmululrgt','wmululrle',
            'wmulwumeq','wmulwumne','wmulwumcs','wmulwumhs','wmulwumcc','wmulwumlo','wmulwummi','wmulwumpl','wmulwumvs','wmulwumvc','wmulwumhi','wmulwumls','wmulwumge','wmulwumlt','wmulwumgt','wmulwumle',
            'wmulwsmeq','wmulwsmne','wmulwsmcs','wmulwsmhs','wmulwsmcc','wmulwsmlo','wmulwsmmi','wmulwsmpl','wmulwsmvs','wmulwsmvc','wmulwsmhi','wmulwsmls','wmulwsmge','wmulwsmlt','wmulwsmgt','wmulwsmle',
            'wmulwleq','wmulwlne','wmulwlcs','wmulwlhs','wmulwlcc','wmulwllo','wmulwlmi','wmulwlpl','wmulwlvs','wmulwlvc','wmulwlhi','wmulwlls','wmulwlge','wmulwllt','wmulwlgt','wmulwlle',
            'wmulwumreq','wmulwumrne','wmulwumrcs','wmulwumrhs','wmulwumrcc','wmulwumrlo','wmulwumrmi','wmulwumrpl','wmulwumrvs','wmulwumrvc','wmulwumrhi','wmulwumrls','wmulwumrge','wmulwumrlt','wmulwumrgt','wmulwumrle',
            'wmulwsmreq','wmulwsmrne','wmulwsmrcs','wmulwsmrhs','wmulwsmrcc','wmulwsmrlo','wmulwsmrmi','wmulwsmrpl','wmulwsmrvs','wmulwsmrvc','wmulwsmrhi','wmulwsmrls','wmulwsmrge','wmulwsmrlt','wmulwsmrgt','wmulwsmrle',
            'woreq','worne','worcs','worhs','worcc','worlo','wormi','worpl','worvs','worvc','worhi','worls','worge','worlt','worgt','worle',
            'wpackhsseq','wpackhssne','wpackhsscs','wpackhsshs','wpackhsscc','wpackhsslo','wpackhssmi','wpackhsspl','wpackhssvs','wpackhssvc','wpackhsshi','wpackhssls','wpackhssge','wpackhsslt','wpackhssgt','wpackhssle',
            'wpackwsseq','wpackwssne','wpackwsscs','wpackwsshs','wpackwsscc','wpackwsslo','wpackwssmi','wpackwsspl','wpackwssvs','wpackwssvc','wpackwsshi','wpackwssls','wpackwssge','wpackwsslt','wpackwssgt','wpackwssle',
            'wpackdsseq','wpackdssne','wpackdsscs','wpackdsshs','wpackdsscc','wpackdsslo','wpackdssmi','wpackdsspl','wpackdssvs','wpackdssvc','wpackdsshi','wpackdssls','wpackdssge','wpackdsslt','wpackdssgt','wpackdssle',
            'wpackhuseq','wpackhusne','wpackhuscs','wpackhushs','wpackhuscc','wpackhuslo','wpackhusmi','wpackhuspl','wpackhusvs','wpackhusvc','wpackhushi','wpackhusls','wpackhusge','wpackhuslt','wpackhusgt','wpackhusle',
            'wpackwuseq','wpackwusne','wpackwuscs','wpackwushs','wpackwuscc','wpackwuslo','wpackwusmi','wpackwuspl','wpackwusvs','wpackwusvc','wpackwushi','wpackwusls','wpackwusge','wpackwuslt','wpackwusgt','wpackwusle',
            'wpackduseq','wpackdusne','wpackduscs','wpackdushs','wpackduscc','wpackduslo','wpackdusmi','wpackduspl','wpackdusvs','wpackdusvc','wpackdushi','wpackdusls','wpackdusge','wpackduslt','wpackdusgt','wpackdusle',
            'wqmiabbeq','wqmiabbne','wqmiabbcs','wqmiabbhs','wqmiabbcc','wqmiabblo','wqmiabbmi','wqmiabbpl','wqmiabbvs','wqmiabbvc','wqmiabbhi','wqmiabbls','wqmiabbge','wqmiabblt','wqmiabbgt','wqmiabble',
            'wqmiabteq','wqmiabtne','wqmiabtcs','wqmiabths','wqmiabtcc','wqmiabtlo','wqmiabtmi','wqmiabtpl','wqmiabtvs','wqmiabtvc','wqmiabthi','wqmiabtls','wqmiabtge','wqmiabtlt','wqmiabtgt','wqmiabtle',
            'wqmiatbeq','wqmiatbne','wqmiatbcs','wqmiatbhs','wqmiatbcc','wqmiatblo','wqmiatbmi','wqmiatbpl','wqmiatbvs','wqmiatbvc','wqmiatbhi','wqmiatbls','wqmiatbge','wqmiatblt','wqmiatbgt','wqmiatble',
            'wqmiatteq','wqmiattne','wqmiattcs','wqmiatths','wqmiattcc','wqmiattlo','wqmiattmi','wqmiattpl','wqmiattvs','wqmiattvc','wqmiatthi','wqmiattls','wqmiattge','wqmiattlt','wqmiattgt','wqmiattle',
            'wqmiabbneq','wqmiabbnne','wqmiabbncs','wqmiabbnhs','wqmiabbncc','wqmiabbnlo','wqmiabbnmi','wqmiabbnpl','wqmiabbnvs','wqmiabbnvc','wqmiabbnhi','wqmiabbnls','wqmiabbnge','wqmiabbnlt','wqmiabbngt','wqmiabbnle',
            'wqmiabtneq','wqmiabtnne','wqmiabtncs','wqmiabtnhs','wqmiabtncc','wqmiabtnlo','wqmiabtnmi','wqmiabtnpl','wqmiabtnvs','wqmiabtnvc','wqmiabtnhi','wqmiabtnls','wqmiabtnge','wqmiabtnlt','wqmiabtngt','wqmiabtnle',
            'wqmiatbneq','wqmiatbnne','wqmiatbncs','wqmiatbnhs','wqmiatbncc','wqmiatbnlo','wqmiatbnmi','wqmiatbnpl','wqmiatbnvs','wqmiatbnvc','wqmiatbnhi','wqmiatbnls','wqmiatbnge','wqmiatbnlt','wqmiatbngt','wqmiatbnle',
            'wqmiattneq','wqmiattnne','wqmiattncs','wqmiattnhs','wqmiattncc','wqmiattnlo','wqmiattnmi','wqmiattnpl','wqmiattnvs','wqmiattnvc','wqmiattnhi','wqmiattnls','wqmiattnge','wqmiattnlt','wqmiattngt','wqmiattnle',
            'wqmulmeq','wqmulmne','wqmulmcs','wqmulmhs','wqmulmcc','wqmulmlo','wqmulmmi','wqmulmpl','wqmulmvs','wqmulmvc','wqmulmhi','wqmulmls','wqmulmge','wqmulmlt','wqmulmgt','wqmulmle',
            'wqmulmreq','wqmulmrne','wqmulmrcs','wqmulmrhs','wqmulmrcc','wqmulmrlo','wqmulmrmi','wqmulmrpl','wqmulmrvs','wqmulmrvc','wqmulmrhi','wqmulmrls','wqmulmrge','wqmulmrlt','wqmulmrgt','wqmulmrle',
            'wqmulwmeq','wqmulwmne','wqmulwmcs','wqmulwmhs','wqmulwmcc','wqmulwmlo','wqmulwmmi','wqmulwmpl','wqmulwmvs','wqmulwmvc','wqmulwmhi','wqmulwmls','wqmulwmge','wqmulwmlt','wqmulwmgt','wqmulwmle',
            'wqmulwmreq','wqmulwmrne','wqmulwmrcs','wqmulwmrhs','wqmulwmrcc','wqmulwmrlo','wqmulwmrmi','wqmulwmrpl','wqmulwmrvs','wqmulwmrvc','wqmulwmrhi','wqmulwmrls','wqmulwmrge','wqmulwmrlt','wqmulwmrgt','wqmulwmrle',
            'wrorheq','wrorhne','wrorhcs','wrorhhs','wrorhcc','wrorhlo','wrorhmi','wrorhpl','wrorhvs','wrorhvc','wrorhhi','wrorhls','wrorhge','wrorhlt','wrorhgt','wrorhle',
            'wrorweq','wrorwne','wrorwcs','wrorwhs','wrorwcc','wrorwlo','wrorwmi','wrorwpl','wrorwvs','wrorwvc','wrorwhi','wrorwls','wrorwge','wrorwlt','wrorwgt','wrorwle',
            'wrordeq','wrordne','wrordcs','wrordhs','wrordcc','wrordlo','wrordmi','wrordpl','wrordvs','wrordvc','wrordhi','wrordls','wrordge','wrordlt','wrordgt','wrordle',
            'wrorhgeq','wrorhgne','wrorhgcs','wrorhghs','wrorhgcc','wrorhglo','wrorhgmi','wrorhgpl','wrorhgvs','wrorhgvc','wrorhghi','wrorhgls','wrorhgge','wrorhglt','wrorhggt','wrorhgle',
            'wrorwgeq','wrorwgne','wrorwgcs','wrorwghs','wrorwgcc','wrorwglo','wrorwgmi','wrorwgpl','wrorwgvs','wrorwgvc','wrorwghi','wrorwgls','wrorwgge','wrorwglt','wrorwggt','wrorwgle',
            'wrordgeq','wrordgne','wrordgcs','wrordghs','wrordgcc','wrordglo','wrordgmi','wrordgpl','wrordgvs','wrordgvc','wrordghi','wrordgls','wrordgge','wrordglt','wrordggt','wrordgle',
            'wsadbeq','wsadbne','wsadbcs','wsadbhs','wsadbcc','wsadblo','wsadbmi','wsadbpl','wsadbvs','wsadbvc','wsadbhi','wsadbls','wsadbge','wsadblt','wsadbgt','wsadble',
            'wsadheq','wsadhne','wsadhcs','wsadhhs','wsadhcc','wsadhlo','wsadhmi','wsadhpl','wsadhvs','wsadhvc','wsadhhi','wsadhls','wsadhge','wsadhlt','wsadhgt','wsadhle',
            'wsadbzeq','wsadbzne','wsadbzcs','wsadbzhs','wsadbzcc','wsadbzlo','wsadbzmi','wsadbzpl','wsadbzvs','wsadbzvc','wsadbzhi','wsadbzls','wsadbzge','wsadbzlt','wsadbzgt','wsadbzle',
            'wsadhzeq','wsadhzne','wsadhzcs','wsadhzhs','wsadhzcc','wsadhzlo','wsadhzmi','wsadhzpl','wsadhzvs','wsadhzvc','wsadhzhi','wsadhzls','wsadhzge','wsadhzlt','wsadhzgt','wsadhzle',
            'wshufheq','wshufhne','wshufhcs','wshufhhs','wshufhcc','wshufhlo','wshufhmi','wshufhpl','wshufhvs','wshufhvc','wshufhhi','wshufhls','wshufhge','wshufhlt','wshufhgt','wshufhle',
            'wsllheq','wsllhne','wsllhcs','wsllhhs','wsllhcc','wsllhlo','wsllhmi','wsllhpl','wsllhvs','wsllhvc','wsllhhi','wsllhls','wsllhge','wsllhlt','wsllhgt','wsllhle',
            'wsllweq','wsllwne','wsllwcs','wsllwhs','wsllwcc','wsllwlo','wsllwmi','wsllwpl','wsllwvs','wsllwvc','wsllwhi','wsllwls','wsllwge','wsllwlt','wsllwgt','wsllwle',
            'wslldeq','wslldne','wslldcs','wslldhs','wslldcc','wslldlo','wslldmi','wslldpl','wslldvs','wslldvc','wslldhi','wslldls','wslldge','wslldlt','wslldgt','wslldle',
            'wsllhgeq','wsllhgne','wsllhgcs','wsllhghs','wsllhgcc','wsllhglo','wsllhgmi','wsllhgpl','wsllhgvs','wsllhgvc','wsllhghi','wsllhgls','wsllhgge','wsllhglt','wsllhggt','wsllhgle',
            'wsllwgeq','wsllwgne','wsllwgcs','wsllwghs','wsllwgcc','wsllwglo','wsllwgmi','wsllwgpl','wsllwgvs','wsllwgvc','wsllwghi','wsllwgls','wsllwgge','wsllwglt','wsllwggt','wsllwgle',
            'wslldgeq','wslldgne','wslldgcs','wslldghs','wslldgcc','wslldglo','wslldgmi','wslldgpl','wslldgvs','wslldgvc','wslldghi','wslldgls','wslldgge','wslldglt','wslldggt','wslldgle',
            'wsraheq','wsrahne','wsrahcs','wsrahhs','wsrahcc','wsrahlo','wsrahmi','wsrahpl','wsrahvs','wsrahvc','wsrahhi','wsrahls','wsrahge','wsrahlt','wsrahgt','wsrahle',
            'wsraweq','wsrawne','wsrawcs','wsrawhs','wsrawcc','wsrawlo','wsrawmi','wsrawpl','wsrawvs','wsrawvc','wsrawhi','wsrawls','wsrawge','wsrawlt','wsrawgt','wsrawle',
            'wsradeq','wsradne','wsradcs','wsradhs','wsradcc','wsradlo','wsradmi','wsradpl','wsradvs','wsradvc','wsradhi','wsradls','wsradge','wsradlt','wsradgt','wsradle',
            'wsrahgeq','wsrahgne','wsrahgcs','wsrahghs','wsrahgcc','wsrahglo','wsrahgmi','wsrahgpl','wsrahgvs','wsrahgvc','wsrahghi','wsrahgls','wsrahgge','wsrahglt','wsrahggt','wsrahgle',
            'wsrawgeq','wsrawgne','wsrawgcs','wsrawghs','wsrawgcc','wsrawglo','wsrawgmi','wsrawgpl','wsrawgvs','wsrawgvc','wsrawghi','wsrawgls','wsrawgge','wsrawglt','wsrawggt','wsrawgle',
            'wsradgeq','wsradgne','wsradgcs','wsradghs','wsradgcc','wsradglo','wsradgmi','wsradgpl','wsradgvs','wsradgvc','wsradghi','wsradgls','wsradgge','wsradglt','wsradggt','wsradgle',
            'wsrlheq','wsrlhne','wsrlhcs','wsrlhhs','wsrlhcc','wsrlhlo','wsrlhmi','wsrlhpl','wsrlhvs','wsrlhvc','wsrlhhi','wsrlhls','wsrlhge','wsrlhlt','wsrlhgt','wsrlhle',
            'wsrlweq','wsrlwne','wsrlwcs','wsrlwhs','wsrlwcc','wsrlwlo','wsrlwmi','wsrlwpl','wsrlwvs','wsrlwvc','wsrlwhi','wsrlwls','wsrlwge','wsrlwlt','wsrlwgt','wsrlwle',
            'wsrldeq','wsrldne','wsrldcs','wsrldhs','wsrldcc','wsrldlo','wsrldmi','wsrldpl','wsrldvs','wsrldvc','wsrldhi','wsrldls','wsrldge','wsrldlt','wsrldgt','wsrldle',
            'wsrlhgeq','wsrlhgne','wsrlhgcs','wsrlhghs','wsrlhgcc','wsrlhglo','wsrlhgmi','wsrlhgpl','wsrlhgvs','wsrlhgvc','wsrlhghi','wsrlhgls','wsrlhgge','wsrlhglt','wsrlhggt','wsrlhgle',
            'wsrlwgeq','wsrlwgne','wsrlwgcs','wsrlwghs','wsrlwgcc','wsrlwglo','wsrlwgmi','wsrlwgpl','wsrlwgvs','wsrlwgvc','wsrlwghi','wsrlwgls','wsrlwgge','wsrlwglt','wsrlwggt','wsrlwgle',
            'wsrldgeq','wsrldgne','wsrldgcs','wsrldghs','wsrldgcc','wsrldglo','wsrldgmi','wsrldgpl','wsrldgvs','wsrldgvc','wsrldghi','wsrldgls','wsrldgge','wsrldglt','wsrldggt','wsrldgle',
            'wstrbeq','wstrbne','wstrbcs','wstrbhs','wstrbcc','wstrblo','wstrbmi','wstrbpl','wstrbvs','wstrbvc','wstrbhi','wstrbls','wstrbge','wstrblt','wstrbgt','wstrble',
            'wstrheq','wstrhne','wstrhcs','wstrhhs','wstrhcc','wstrhlo','wstrhmi','wstrhpl','wstrhvs','wstrhvc','wstrhhi','wstrhls','wstrhge','wstrhlt','wstrhgt','wstrhle',
            'wstrweq','wstrwne','wstrwcs','wstrwhs','wstrwcc','wstrwlo','wstrwmi','wstrwpl','wstrwvs','wstrwvc','wstrwhi','wstrwls','wstrwge','wstrwlt','wstrwgt','wstrwle',
            'wstrdeq','wstrdne','wstrdcs','wstrdhs','wstrdcc','wstrdlo','wstrdmi','wstrdpl','wstrdvs','wstrdvc','wstrdhi','wstrdls','wstrdge','wstrdlt','wstrdgt','wstrdle',
            'wsubbeq','wsubbne','wsubbcs','wsubbhs','wsubbcc','wsubblo','wsubbmi','wsubbpl','wsubbvs','wsubbvc','wsubbhi','wsubbls','wsubbge','wsubblt','wsubbgt','wsubble',
            'wsubheq','wsubhne','wsubhcs','wsubhhs','wsubhcc','wsubhlo','wsubhmi','wsubhpl','wsubhvs','wsubhvc','wsubhhi','wsubhls','wsubhge','wsubhlt','wsubhgt','wsubhle',
            'wsubweq','wsubwne','wsubwcs','wsubwhs','wsubwcc','wsubwlo','wsubwmi','wsubwpl','wsubwvs','wsubwvc','wsubwhi','wsubwls','wsubwge','wsubwlt','wsubwgt','wsubwle',
            'wsubbsseq','wsubbssne','wsubbsscs','wsubbsshs','wsubbsscc','wsubbsslo','wsubbssmi','wsubbsspl','wsubbssvs','wsubbssvc','wsubbsshi','wsubbssls','wsubbssge','wsubbsslt','wsubbssgt','wsubbssle',
            'wsubhsseq','wsubhssne','wsubhsscs','wsubhsshs','wsubhsscc','wsubhsslo','wsubhssmi','wsubhsspl','wsubhssvs','wsubhssvc','wsubhsshi','wsubhssls','wsubhssge','wsubhsslt','wsubhssgt','wsubhssle',
            'wsubwsseq','wsubwssne','wsubwsscs','wsubwsshs','wsubwsscc','wsubwsslo','wsubwssmi','wsubwsspl','wsubwssvs','wsubwssvc','wsubwsshi','wsubwssls','wsubwssge','wsubwsslt','wsubwssgt','wsubwssle',
            'wsubbuseq','wsubbusne','wsubbuscs','wsubbushs','wsubbuscc','wsubbuslo','wsubbusmi','wsubbuspl','wsubbusvs','wsubbusvc','wsubbushi','wsubbusls','wsubbusge','wsubbuslt','wsubbusgt','wsubbusle',
            'wsubhuseq','wsubhusne','wsubhuscs','wsubhushs','wsubhuscc','wsubhuslo','wsubhusmi','wsubhuspl','wsubhusvs','wsubhusvc','wsubhushi','wsubhusls','wsubhusge','wsubhuslt','wsubhusgt','wsubhusle',
            'wsubwuseq','wsubwusne','wsubwuscs','wsubwushs','wsubwuscc','wsubwuslo','wsubwusmi','wsubwuspl','wsubwusvs','wsubwusvc','wsubwushi','wsubwusls','wsubwusge','wsubwuslt','wsubwusgt','wsubwusle',
            'wsubaddhxeq','wsubaddhxne','wsubaddhxcs','wsubaddhxhs','wsubaddhxcc','wsubaddhxlo','wsubaddhxmi','wsubaddhxpl','wsubaddhxvs','wsubaddhxvc','wsubaddhxhi','wsubaddhxls','wsubaddhxge','wsubaddhxlt','wsubaddhxgt','wsubaddhxle',
            'wunpckehsbeq','wunpckehsbne','wunpckehsbcs','wunpckehsbhs','wunpckehsbcc','wunpckehsblo','wunpckehsbmi','wunpckehsbpl','wunpckehsbvs','wunpckehsbvc','wunpckehsbhi','wunpckehsbls','wunpckehsbge','wunpckehsblt','wunpckehsbgt','wunpckehsble',
            'wunpckehsheq','wunpckehshne','wunpckehshcs','wunpckehshhs','wunpckehshcc','wunpckehshlo','wunpckehshmi','wunpckehshpl','wunpckehshvs','wunpckehshvc','wunpckehshhi','wunpckehshls','wunpckehshge','wunpckehshlt','wunpckehshgt','wunpckehshle',
            'wunpckehsweq','wunpckehswne','wunpckehswcs','wunpckehswhs','wunpckehswcc','wunpckehswlo','wunpckehswmi','wunpckehswpl','wunpckehswvs','wunpckehswvc','wunpckehswhi','wunpckehswls','wunpckehswge','wunpckehswlt','wunpckehswgt','wunpckehswle',
            'wunpckehubeq','wunpckehubne','wunpckehubcs','wunpckehubhs','wunpckehubcc','wunpckehublo','wunpckehubmi','wunpckehubpl','wunpckehubvs','wunpckehubvc','wunpckehubhi','wunpckehubls','wunpckehubge','wunpckehublt','wunpckehubgt','wunpckehuble',
            'wunpckehuheq','wunpckehuhne','wunpckehuhcs','wunpckehuhhs','wunpckehuhcc','wunpckehuhlo','wunpckehuhmi','wunpckehuhpl','wunpckehuhvs','wunpckehuhvc','wunpckehuhhi','wunpckehuhls','wunpckehuhge','wunpckehuhlt','wunpckehuhgt','wunpckehuhle',
            'wunpckehuweq','wunpckehuwne','wunpckehuwcs','wunpckehuwhs','wunpckehuwcc','wunpckehuwlo','wunpckehuwmi','wunpckehuwpl','wunpckehuwvs','wunpckehuwvc','wunpckehuwhi','wunpckehuwls','wunpckehuwge','wunpckehuwlt','wunpckehuwgt','wunpckehuwle',
            'wunpckihbeq','wunpckihbne','wunpckihbcs','wunpckihbhs','wunpckihbcc','wunpckihblo','wunpckihbmi','wunpckihbpl','wunpckihbvs','wunpckihbvc','wunpckihbhi','wunpckihbls','wunpckihbge','wunpckihblt','wunpckihbgt','wunpckihble',
            'wunpckihheq','wunpckihhne','wunpckihhcs','wunpckihhhs','wunpckihhcc','wunpckihhlo','wunpckihhmi','wunpckihhpl','wunpckihhvs','wunpckihhvc','wunpckihhhi','wunpckihhls','wunpckihhge','wunpckihhlt','wunpckihhgt','wunpckihhle',
            'wunpckihweq','wunpckihwne','wunpckihwcs','wunpckihwhs','wunpckihwcc','wunpckihwlo','wunpckihwmi','wunpckihwpl','wunpckihwvs','wunpckihwvc','wunpckihwhi','wunpckihwls','wunpckihwge','wunpckihwlt','wunpckihwgt','wunpckihwle',
            'wunpckelsbeq','wunpckelsbne','wunpckelsbcs','wunpckelsbhs','wunpckelsbcc','wunpckelsblo','wunpckelsbmi','wunpckelsbpl','wunpckelsbvs','wunpckelsbvc','wunpckelsbhi','wunpckelsbls','wunpckelsbge','wunpckelsblt','wunpckelsbgt','wunpckelsble',
            'wunpckelsheq','wunpckelshne','wunpckelshcs','wunpckelshhs','wunpckelshcc','wunpckelshlo','wunpckelshmi','wunpckelshpl','wunpckelshvs','wunpckelshvc','wunpckelshhi','wunpckelshls','wunpckelshge','wunpckelshlt','wunpckelshgt','wunpckelshle',
            'wunpckelsweq','wunpckelswne','wunpckelswcs','wunpckelswhs','wunpckelswcc','wunpckelswlo','wunpckelswmi','wunpckelswpl','wunpckelswvs','wunpckelswvc','wunpckelswhi','wunpckelswls','wunpckelswge','wunpckelswlt','wunpckelswgt','wunpckelswle',
            'wunpckelubeq','wunpckelubne','wunpckelubcs','wunpckelubhs','wunpckelubcc','wunpckelublo','wunpckelubmi','wunpckelubpl','wunpckelubvs','wunpckelubvc','wunpckelubhi','wunpckelubls','wunpckelubge','wunpckelublt','wunpckelubgt','wunpckeluble',
            'wunpckeluheq','wunpckeluhne','wunpckeluhcs','wunpckeluhhs','wunpckeluhcc','wunpckeluhlo','wunpckeluhmi','wunpckeluhpl','wunpckeluhvs','wunpckeluhvc','wunpckeluhhi','wunpckeluhls','wunpckeluhge','wunpckeluhlt','wunpckeluhgt','wunpckeluhle',
            'wunpckeluweq','wunpckeluwne','wunpckeluwcs','wunpckeluwhs','wunpckeluwcc','wunpckeluwlo','wunpckeluwmi','wunpckeluwpl','wunpckeluwvs','wunpckeluwvc','wunpckeluwhi','wunpckeluwls','wunpckeluwge','wunpckeluwlt','wunpckeluwgt','wunpckeluwle',
            'wunpckilbeq','wunpckilbne','wunpckilbcs','wunpckilbhs','wunpckilbcc','wunpckilblo','wunpckilbmi','wunpckilbpl','wunpckilbvs','wunpckilbvc','wunpckilbhi','wunpckilbls','wunpckilbge','wunpckilblt','wunpckilbgt','wunpckilble',
            'wunpckilheq','wunpckilhne','wunpckilhcs','wunpckilhhs','wunpckilhcc','wunpckilhlo','wunpckilhmi','wunpckilhpl','wunpckilhvs','wunpckilhvc','wunpckilhhi','wunpckilhls','wunpckilhge','wunpckilhlt','wunpckilhgt','wunpckilhle',
            'wunpckilweq','wunpckilwne','wunpckilwcs','wunpckilwhs','wunpckilwcc','wunpckilwlo','wunpckilwmi','wunpckilwpl','wunpckilwvs','wunpckilwvc','wunpckilwhi','wunpckilwls','wunpckilwge','wunpckilwlt','wunpckilwgt','wunpckilwle',
            'wxoreq','wxorne','wxorcs','wxorhs','wxorcc','wxorlo','wxormi','wxorpl','wxorvs','wxorvc','wxorhi','wxorls','wxorge','wxorlt','wxorgt','wxorle',
            'wzeroeq','wzerone','wzerocs','wzerohs','wzerocc','wzerolo','wzeromi','wzeropl','wzerovs','wzerovc','wzerohi','wzerols','wzeroge','wzerolt','wzerogt','wzerole'
            ),
        /* Unconditional VFPv3 & NEON SIMD Memory Access Instructions */
        19 => array(
            /* Unconditional VFPv3 & NEON SIMD Memory Access: Loads */
            'vld.8','vldal.8',
            'vld.16','vldal.16',
            'vld.32','vldal.32',
            'vld.64','vldal.64',

            'vld1.8','vld1al.8',
            'vld1.16','vld1al.16',
            'vld1.32','vld1al.32',

            'vld2.8','vld2al.8',
            'vld2.16','vld2al.16',
            'vld2.32','vld2al.32',

            'vld3.8','vld3al.8',
            'vld3.16','vld3al.16',
            'vld3.32','vld3al.32',

            'vld4.8','vld4al.8',
            'vld4.16','vld4al.16',
            'vld4.32','vld4al.32',

            'vldm','vldmal',
            'vldm.32','vldmal.32',
            'vldm.64','vldmal.64',

            'vldmia','vldmiaal',
            'vldmia.32','vldmiaal.32',
            'vldmia.64','vldmiaal.64',

            'vldmdb','vldmdbal',
            'vldmdb.32','vldmdbal.32',
            'vldmdb.64','vldmdbal.64',

            'vldr','vldral',
            'vldr.32','vldral.32',
            'vldr.64','vldral.64',

            'vpop','vpopal',
            'vpop.32','vpopal.32',
            'vpop.64','vpopal.64',

            /* Unconditional VFPv3 & NEON SIMD Memory Access: Stores */
            'vst1.8','vst1al.8',
            'vst1.16','vst1al.16',
            'vst1.32','vst1al.32',
            'vst1.64','vst1al.64',

            'vst2.8','vst2al.8',
            'vst2.16','vst2al.16',
            'vst2.32','vst2al.32',

            'vst3.8','vst3al.8',
            'vst3.16','vst3al.16',
            'vst3.32','vst3al.32',

            'vst4.8','vst4al.8',
            'vst4.16','vst4al.16',
            'vst4.32','vst4al.32',

            'vstm','vstmal',
            'vstm.32','vstmal.32',
            'vstm.64','vstmal.64',

            'vstmia','vstmiaal',
            'vstmia.32','vstmiaal.32',
            'vstmia.64','vstmiaal.64',

            'vstmdb','vstmdbal',
            'vstmdb.32','vstmdbal.32',
            'vstmdb.64','vstmdbal.64',

            'vstr','vstral',
            'vstr.32','vstral.32',
            'vstr.64','vstral.64',

            'vpush','vpushal',
            'vpush.32','vpushal.32',
            'vpush.64','vpushal.64'
            ),
        /* Unconditional NEON SIMD Logical Instructions */
        20 => array(
            'vand','vandal',
            'vand.i8','vandal.i8',
            'vand.i16','vandal.i16',
            'vand.i32','vandal.i32',
            'vand.i64','vandal.i64',
            'vand.s8','vandal.s8',
            'vand.s16','vandal.s16',
            'vand.s32','vandal.s32',
            'vand.s64','vandal.s64',
            'vand.u8','vandal.u8',
            'vand.u16','vandal.u16',
            'vand.u32','vandal.u32',
            'vand.u64','vandal.u64',
            'vand.f32','vandal.f32',
            'vand.f64','vandal.f64',

            'vbic','vbical',
            'vbic.i8','vbical.i8',
            'vbic.i16','vbical.i16',
            'vbic.i32','vbical.i32',
            'vbic.i64','vbical.i64',
            'vbic.s8','vbical.s8',
            'vbic.s16','vbical.s16',
            'vbic.s32','vbical.s32',
            'vbic.s64','vbical.s64',
            'vbic.u8','vbical.u8',
            'vbic.u16','vbical.u16',
            'vbic.u32','vbical.u32',
            'vbic.u64','vbical.u64',
            'vbic.f32','vbical.f32',
            'vbic.f64','vbical.f64',

            'vbif','vbifal',
            'vbif.i8','vbifal.i8',
            'vbif.i16','vbifal.i16',
            'vbif.i32','vbifal.i32',
            'vbif.i64','vbifal.i64',
            'vbif.s8','vbifal.s8',
            'vbif.s16','vbifal.s16',
            'vbif.s32','vbifal.s32',
            'vbif.s64','vbifal.s64',
            'vbif.u8','vbifal.u8',
            'vbif.u16','vbifal.u16',
            'vbif.u32','vbifal.u32',
            'vbif.u64','vbifal.u64',
            'vbif.f32','vbifal.f32',
            'vbif.f64','vbifal.f64',

            'vbit','vbital',
            'vbit.i8','vbital.i8',
            'vbit.i16','vbital.i16',
            'vbit.i32','vbital.i32',
            'vbit.i64','vbital.i64',
            'vbit.s8','vbital.s8',
            'vbit.s16','vbital.s16',
            'vbit.s32','vbital.s32',
            'vbit.s64','vbital.s64',
            'vbit.u8','vbital.u8',
            'vbit.u16','vbital.u16',
            'vbit.u32','vbital.u32',
            'vbit.u64','vbital.u64',
            'vbit.f32','vbital.f32',
            'vbit.f64','vbital.f64',

            'vbsl','vbslal',
            'vbsl.i8','vbslal.i8',
            'vbsl.i16','vbslal.i16',
            'vbsl.i32','vbslal.i32',
            'vbsl.i64','vbslal.i64',
            'vbsl.s8','vbslal.s8',
            'vbsl.s16','vbslal.s16',
            'vbsl.s32','vbslal.s32',
            'vbsl.s64','vbslal.s64',
            'vbsl.u8','vbslal.u8',
            'vbsl.u16','vbslal.u16',
            'vbsl.u32','vbslal.u32',
            'vbsl.u64','vbslal.u64',
            'vbsl.f32','vbslal.f32',
            'vbsl.f64','vbslal.f64',

            'veor','veoral',
            'veor.i8','veoral.i8',
            'veor.i16','veoral.i16',
            'veor.i32','veoral.i32',
            'veor.i64','veoral.i64',
            'veor.s8','veoral.s8',
            'veor.s16','veoral.s16',
            'veor.s32','veoral.s32',
            'veor.s64','veoral.s64',
            'veor.u8','veoral.u8',
            'veor.u16','veoral.u16',
            'veor.u32','veoral.u32',
            'veor.u64','veoral.u64',
            'veor.f32','veoral.f32',
            'veor.f64','veoral.f64',

            'vmov','vmoval',
            'vmov.8','vmoval.8',
            'vmov.16','vmoval.16',
            'vmov.32','vmoval.32',
            'vmov.i8','vmoval.i8',
            'vmov.i16','vmoval.i16',
            'vmov.i32','vmoval.i32',
            'vmov.i64','vmoval.i64',
            'vmov.f32','vmoval.f32',
            'vmov.f64','vmoval.f64',

            'vmvn','vmvnal',
            'vmvn.s8','vmvnal.s8',
            'vmvn.s16','vmvnal.s16',
            'vmvn.s32','vmvnal.s32',
            'vmvn.s64','vmvnal.s64',
            'vmvn.u8','vmvnal.u8',
            'vmvn.u16','vmvnal.u16',
            'vmvn.u32','vmvnal.u32',
            'vmvn.u64','vmvnal.u64',
            'vmvn.i8','vmvnal.i8',
            'vmvn.i16','vmvnal.i16',
            'vmvn.i32','vmvnal.i32',
            'vmvn.i64','vmvnal.i64',
            'vmvn.f32','vmvnal.f32',
            'vmvn.f64','vmvnal.f64',

            'vorn','vornal',
            'vorn.s8','vornal.s8',
            'vorn.s16','vornal.s16',
            'vorn.s32','vornal.s32',
            'vorn.s64','vornal.s64',
            'vorn.u8','vornal.u8',
            'vorn.u16','vornal.u16',
            'vorn.u32','vornal.u32',
            'vorn.u64','vornal.u64',
            'vorn.i8','vornal.i8',
            'vorn.i16','vornal.i16',
            'vorn.i32','vornal.i32',
            'vorn.i64','vornal.i64',
            'vorn.f32','vornal.f32',
            'vorn.f64','vornal.f64',

            'vorr','vorral',
            'vorr.s8','vorral.s8',
            'vorr.s16','vorral.s16',
            'vorr.s32','vorral.s32',
            'vorr.s64','vorral.s64',
            'vorr.u8','vorral.u8',
            'vorr.u16','vorral.u16',
            'vorr.u32','vorral.u32',
            'vorr.u64','vorral.u64',
            'vorr.i8','vorral.i8',
            'vorr.i16','vorral.i16',
            'vorr.i32','vorral.i32',
            'vorr.i64','vorral.i64',
            'vorr.f32','vorral.f32',
            'vorr.f64','vorral.f64',

            'vswp','vswpal',
            'vswp.s8','vswpal.s8',
            'vswp.s16','vswpal.s16',
            'vswp.s32','vswpal.s32',
            'vswp.s64','vswpal.s64',
            'vswp.u8','vswpal.u8',
            'vswp.u16','vswpal.u16',
            'vswp.u32','vswpal.u32',
            'vswp.u64','vswpal.u64',
            'vswp.i8','vswpal.i8',
            'vswp.i16','vswpal.i16',
            'vswp.i32','vswpal.i32',
            'vswp.i64','vswpal.i64',
            'vswp.f32','vswpal.f32',
            'vswp.f64','vswpal.f64'
            ),
        /* Unconditional NEON SIMD ARM Registers Interop Instructions */
        21 => array(
            'vmrs','vmrsal',
            'vmsr','vmsral'
            ),
        /* Unconditional NEON SIMD Bit/Byte-Level Instructions */
        22 => array(
            'vcnt.8','vcntal.8',
            'vdup.8','vdupal.8',

            'vdup.16','vdupal.16',
            'vdup.32','vdupal.32',

            'vext.8','vextal.8',
            'vext.16','vextal.16',

            'vext.32','vextal.32',
            'vext.64','vextal.64',

            'vrev16.8','vrev16al.8',
            'vrev32.8','vrev32al.8',
            'vrev32.16','vrev32al.16',
            'vrev64.8','vrev64al.8',
            'vrev64.16','vrev64al.16',
            'vrev64.32','vrev64al.32',

            'vsli.8','vslial.8',
            'vsli.16','vslial.16',
            'vsli.32','vslial.32',
            'vsli.64','vslial.64',

            'vsri.8','vsrial.8',
            'vsri.16','vsrial.16',
            'vsri.32','vsrial.32',
            'vsri.64','vsrial.64',

            'vtbl.8','vtblal.8',

            'vtbx','vtbxal',

            'vtrn.8','vtrnal.8',
            'vtrn.16','vtrnal.16',
            'vtrn.32','vtrnal.32',

            'vtst.8','vtstal.8',
            'vtst.16','vtstal.16',
            'vtst.32','vtstal.32',

            'vuzp.8','vuzpal.8',
            'vuzp.16','vuzpal.16',
            'vuzp.32','vuzpal.32',

            'vzip.8','vzipal.8',
            'vzip.16','vzipal.16',
            'vzip.32','vzipal.32',

            'vmull.p8','vmullal.p8'
            ),
        /* Unconditional NEON SIMD Universal Integer Instructions */
        23 => array(
            'vadd.i8','vaddal.i8',
            'vadd.i16','vaddal.i16',
            'vadd.i32','vaddal.i32',
            'vadd.i64','vaddal.i64',

            'vsub.i8','vsubal.i8',
            'vsub.i16','vsubal.i16',
            'vsub.i32','vsubal.i32',
            'vsub.i64','vsubal.i64',

            'vaddhn.i16','vaddhnal.i16',
            'vaddhn.i32','vaddhnal.i32',
            'vaddhn.i64','vaddhnal.i64',

            'vsubhn.i16','vsubhnal.i16',
            'vsubhn.i32','vsubhnal.i32',
            'vsubhn.i64','vsubhnal.i64',

            'vraddhn.i16','vraddhnal.i16',
            'vraddhn.i32','vraddhnal.i32',
            'vraddhn.i64','vraddhnal.i64',

            'vrsubhn.i16','vrsubhnal.i16',
            'vrsubhn.i32','vrsubhnal.i32',
            'vrsubhn.i64','vrsubhnal.i64',

            'vpadd.i8','vpaddal.i8',
            'vpadd.i16','vpaddal.i16',
            'vpadd.i32','vpaddal.i32',

            'vceq.i8','vceqal.i8',
            'vceq.i16','vceqal.i16',
            'vceq.i32','vceqal.i32',

            'vclz.i8','vclzal.i8',
            'vclz.i16','vclzal.i16',
            'vclz.i32','vclzal.i32',

            'vmovn.i16','vmovnal.i16',
            'vmovn.i32','vmovnal.i32',
            'vmovn.i64','vmovnal.i64',

            'vmla.s8','vmlaal.s8',
            'vmla.s16','vmlaal.s16',
            'vmla.s32','vmlaal.s32',
            'vmla.u8','vmlaal.u8',
            'vmla.u16','vmlaal.u16',
            'vmla.u32','vmlaal.u32',
            'vmla.i8','vmlaal.i8',
            'vmla.i16','vmlaal.i16',
            'vmla.i32','vmlaal.i32',

            'vmls.s8','vmlsal.s8',
            'vmls.s16','vmlsal.s16',
            'vmls.s32','vmlsal.s32',
            'vmls.u8','vmlsal.u8',
            'vmls.u16','vmlsal.u16',
            'vmls.u32','vmlsal.u32',
            'vmls.i8','vmlsal.i8',
            'vmls.i16','vmlsal.i16',
            'vmls.i32','vmlsal.i32',

            'vmul.s8','vmulal.s8',
            'vmul.s16','vmulal.s16',
            'vmul.s32','vmulal.s32',
            'vmul.u8','vmulal.u8',
            'vmul.u16','vmulal.u16',
            'vmul.u32','vmulal.u32',
            'vmul.i8','vmulal.i8',
            'vmul.i16','vmulal.i16',
            'vmul.i32','vmulal.i32',
            'vmul.p8','vmulal.p8',

            'vrshrn.i16','vrshrnal.i16',
            'vrshrn.i32','vrshrnal.i32',
            'vrshrn.i64','vrshrnal.i64',

            'vshrn.i16','vshrnal.i16',
            'vshrn.i32','vshrnal.i32',
            'vshrn.i64','vshrnal.i64',

            'vshl.i8','vshlal.i8',
            'vshl.i16','vshlal.i16',
            'vshl.i32','vshlal.i32',
            'vshl.i64','vshlal.i64',

            'vshll.i8','vshllal.i8',
            'vshll.i16','vshllal.i16',
            'vshll.i32','vshllal.i32'
            ),
        /* Unconditional NEON SIMD Signed Integer Instructions */
        24 => array(
            'vaba.s8','vabaal.s8',
            'vaba.s16','vabaal.s16',
            'vaba.s32','vabaal.s32',

            'vabal.s8','vabalal.s8',
            'vabal.s16','vabalal.s16',
            'vabal.s32','vabalal.s32',

            'vabd.s8','vabdal.s8',
            'vabd.s16','vabdal.s16',
            'vabd.s32','vabdal.s32',

            'vabs.s8','vabsal.s8',
            'vabs.s16','vabsal.s16',
            'vabs.s32','vabsal.s32',

            'vaddl.s8','vaddlal.s8',
            'vaddl.s16','vaddlal.s16',
            'vaddl.s32','vaddlal.s32',

            'vcge.s8','vcgeal.s8',
            'vcge.s16','vcgeal.s16',
            'vcge.s32','vcgeal.s32',

            'vcle.s8','vcleal.s8',
            'vcle.s16','vcleal.s16',
            'vcle.s32','vcleal.s32',

            'vcgt.s8','vcgtal.s8',
            'vcgt.s16','vcgtal.s16',
            'vcgt.s32','vcgtal.s32',

            'vclt.s8','vcltal.s8',
            'vclt.s16','vcltal.s16',
            'vclt.s32','vcltal.s32',

            'vcls.s8','vclsal.s8',
            'vcls.s16','vclsal.s16',
            'vcls.s32','vclsal.s32',

            'vaddw.s8','vaddwal.s8',
            'vaddw.s16','vaddwal.s16',
            'vaddw.s32','vaddwal.s32',

            'vhadd.s8','vhaddal.s8',
            'vhadd.s16','vhaddal.s16',
            'vhadd.s32','vhaddal.s32',

            'vhsub.s8','vhsubal.s8',
            'vhsub.s16','vhsubal.s16',
            'vhsub.s32','vhsubal.s32',

            'vmax.s8','vmaxal.s8',
            'vmax.s16','vmaxal.s16',
            'vmax.s32','vmaxal.s32',

            'vmin.s8','vminal.s8',
            'vmin.s16','vminal.s16',
            'vmin.s32','vminal.s32',

            'vmlal.s8','vmlalal.s8',
            'vmlal.s16','vmlalal.s16',
            'vmlal.s32','vmlalal.s32',

            'vmlsl.s8','vmlslal.s8',
            'vmlsl.s16','vmlslal.s16',
            'vmlsl.s32','vmlslal.s32',

            'vneg.s8','vnegal.s8',
            'vneg.s16','vnegal.s16',
            'vneg.s32','vnegal.s32',

            'vpadal.s8','vpadalal.s8',
            'vpadal.s16','vpadalal.s16',
            'vpadal.s32','vpadalal.s32',

            'vmovl.s8','vmovlal.s8',
            'vmovl.s16','vmovlal.s16',
            'vmovl.s32','vmovlal.s32',

            'vmull.s8','vmullal.s8',
            'vmull.s16','vmullal.s16',
            'vmull.s32','vmullal.s32',

            'vpaddl.s8','vpaddlal.s8',
            'vpaddl.s16','vpaddlal.s16',
            'vpaddl.s32','vpaddlal.s32',

            'vpmax.s8','vpmaxal.s8',
            'vpmax.s16','vpmaxal.s16',
            'vpmax.s32','vpmaxal.s32',

            'vpmin.s8','vpminal.s8',
            'vpmin.s16','vpminal.s16',
            'vpmin.s32','vpminal.s32',

            'vqabs.s8','vqabsal.s8',
            'vqabs.s16','vqabsal.s16',
            'vqabs.s32','vqabsal.s32',

            'vqadd.s8','vqaddal.s8',
            'vqadd.s16','vqaddal.s16',
            'vqadd.s32','vqaddal.s32',
            'vqadd.s64','vqaddal.s64',

            'vqdmlal.s16','vqdmlalal.s16',
            'vqdmlal.s32','vqdmlalal.s32',

            'vqdmlsl.s16','vqdmlslal.s16',
            'vqdmlsl.s32','vqdmlslal.s32',

            'vqdmulh.s16','vqdmulhal.s16',
            'vqdmulh.s32','vqdmulhal.s32',

            'vqdmull.s16','vqdmullal.s16',
            'vqdmull.s32','vqdmullal.s32',

            'vqmovn.s16','vqmovnal.s16',
            'vqmovn.s32','vqmovnal.s32',
            'vqmovn.s64','vqmovnal.s64',

            'vqmovun.s16','vqmovunal.s16',
            'vqmovun.s32','vqmovunal.s32',
            'vqmovun.s64','vqmovunal.s64',

            'vqneg.s8','vqnegal.s8',
            'vqneg.s16','vqnegal.s16',
            'vqneg.s32','vqnegal.s32',

            'vqrdmulh.s16','vqrdmulhal.s16',
            'vqrdmulh.s32','vqrdmulhal.s32',

            'vqrshl.s8','vqrshlal.s8',
            'vqrshl.s16','vqrshlal.s16',
            'vqrshl.s32','vqrshlal.s32',
            'vqrshl.s64','vqrshlal.s64',

            'vqrshrn.s16','vqrshrnal.s16',
            'vqrshrn.s32','vqrshrnal.s32',
            'vqrshrn.s64','vqrshrnal.s64',

            'vqrshrun.s16','vqrshrunal.s16',
            'vqrshrun.s32','vqrshrunal.s32',
            'vqrshrun.s64','vqrshrunal.s64',

            'vqshl.s8','vqshlal.s8',
            'vqshl.s16','vqshlal.s16',
            'vqshl.s32','vqshlal.s32',
            'vqshl.s64','vqshlal.s64',

            'vqshlu.s8','vqshlual.s8',
            'vqshlu.s16','vqshlual.s16',
            'vqshlu.s32','vqshlual.s32',
            'vqshlu.s64','vqshlual.s64',

            'vqshrn.s16','vqshrnal.s16',
            'vqshrn.s32','vqshrnal.s32',
            'vqshrn.s64','vqshrnal.s64',

            'vqshrun.s16','vqshrunal.s16',
            'vqshrun.s32','vqshrunal.s32',
            'vqshrun.s64','vqshrunal.s64',

            'vqsub.s8','vqsubal.s8',
            'vqsub.s16','vqsubal.s16',
            'vqsub.s32','vqsubal.s32',
            'vqsub.s64','vqsubal.s64',

            'vrhadd.s8','vrhaddal.s8',
            'vrhadd.s16','vrhaddal.s16',
            'vrhadd.s32','vrhaddal.s32',

            'vrshl.s8','vrshlal.s8',
            'vrshl.s16','vrshlal.s16',
            'vrshl.s32','vrshlal.s32',
            'vrshl.s64','vrshlal.s64',

            'vrshr.s8','vrshral.s8',
            'vrshr.s16','vrshral.s16',
            'vrshr.s32','vrshral.s32',
            'vrshr.s64','vrshral.s64',

            'vrsra.s8','vrsraal.s8',
            'vrsra.s16','vrsraal.s16',
            'vrsra.s32','vrsraal.s32',
            'vrsra.s64','vrsraal.s64',

            'vshl.s8','vshlal.s8',
            'vshl.s16','vshlal.s16',
            'vshl.s32','vshlal.s32',
            'vshl.s64','vshlal.s64',

            'vshll.s8','vshllal.s8',
            'vshll.s16','vshllal.s16',
            'vshll.s32','vshllal.s32',

            'vshr.s8','vshral.s8',
            'vshr.s16','vshral.s16',
            'vshr.s32','vshral.s32',
            'vshr.s64','vshral.s64',

            'vsra.s8','vsraal.s8',
            'vsra.s16','vsraal.s16',
            'vsra.s32','vsraal.s32',
            'vsra.s64','vsraal.s64',

            'vsubl.s8','vsublal.s8',
            'vsubl.s16','vsublal.s16',
            'vsubl.s32','vsublal.s32',

            'vsubh.s8','vsubhal.s8',
            'vsubh.s16','vsubhal.s16',
            'vsubh.s32','vsubhal.s32'
            ),
        /* Unconditional NEON SIMD Unsigned Integer Instructions */
        25 => array(
            'vaba.u8','vabaal.u8',
            'vaba.u16','vabaal.u16',
            'vaba.u32','vabaal.u32',

            'vabal.u8','vabalal.u8',
            'vabal.u16','vabalal.u16',
            'vabal.u32','vabalal.u32',

            'vabd.u8','vabdal.u8',
            'vabd.u16','vabdal.u16',
            'vabd.u32','vabdal.u32',

            'vaddl.u8','vaddlal.u8',
            'vaddl.u16','vaddlal.u16',
            'vaddl.u32','vaddlal.u32',

            'vsubl.u8','vsublal.u8',
            'vsubl.u16','vsublal.u16',
            'vsubl.u32','vsublal.u32',

            'vaddw.u8','vaddwal.u8',
            'vaddw.u16','vaddwal.u16',
            'vaddw.u32','vaddwal.u32',

            'vsubh.u8','vsubhal.u8',
            'vsubh.u16','vsubhal.u16',
            'vsubh.u32','vsubhal.u32',

            'vhadd.u8','vhaddal.u8',
            'vhadd.u16','vhaddal.u16',
            'vhadd.u32','vhaddal.u32',

            'vhsub.u8','vhsubal.u8',
            'vhsub.u16','vhsubal.u16',
            'vhsub.u32','vhsubal.u32',

            'vpadal.u8','vpadalal.u8',
            'vpadal.u16','vpadalal.u16',
            'vpadal.u32','vpadalal.u32',

            'vpaddl.u8','vpaddlal.u8',
            'vpaddl.u16','vpaddlal.u16',
            'vpaddl.u32','vpaddlal.u32',

            'vcge.u8','vcgeal.u8',
            'vcge.u16','vcgeal.u16',
            'vcge.u32','vcgeal.u32',

            'vcle.u8','vcleal.u8',
            'vcle.u16','vcleal.u16',
            'vcle.u32','vcleal.u32',

            'vcgt.u8','vcgtal.u8',
            'vcgt.u16','vcgtal.u16',
            'vcgt.u32','vcgtal.u32',

            'vclt.u8','vcltal.u8',
            'vclt.u16','vcltal.u16',
            'vclt.u32','vcltal.u32',

            'vmax.u8','vmaxal.u8',
            'vmax.u16','vmaxal.u16',
            'vmax.u32','vmaxal.u32',

            'vmin.u8','vminal.u8',
            'vmin.u16','vminal.u16',
            'vmin.u32','vminal.u32',

            'vmlal.u8','vmlalal.u8',
            'vmlal.u16','vmlalal.u16',
            'vmlal.u32','vmlalal.u32',

            'vmlsl.u8','vmlslal.u8',
            'vmlsl.u16','vmlslal.u16',
            'vmlsl.u32','vmlslal.u32',

            'vmull.u8','vmullal.u8',
            'vmull.u16','vmullal.u16',
            'vmull.u32','vmullal.u32',

            'vmovl.u8','vmovlal.u8',
            'vmovl.u16','vmovlal.u16',
            'vmovl.u32','vmovlal.u32',

            'vshl.u8','vshlal.u8',
            'vshl.u16','vshlal.u16',
            'vshl.u32','vshlal.u32',
            'vshl.u64','vshlal.u64',

            'vshll.u8','vshllal.u8',
            'vshll.u16','vshllal.u16',
            'vshll.u32','vshllal.u32',

            'vshr.u8','vshral.u8',
            'vshr.u16','vshral.u16',
            'vshr.u32','vshral.u32',
            'vshr.u64','vshral.u64',

            'vsra.u8','vsraal.u8',
            'vsra.u16','vsraal.u16',
            'vsra.u32','vsraal.u32',
            'vsra.u64','vsraal.u64',

            'vpmax.u8','vpmaxal.u8',
            'vpmax.u16','vpmaxal.u16',
            'vpmax.u32','vpmaxal.u32',

            'vpmin.u8','vpminal.u8',
            'vpmin.u16','vpminal.u16',
            'vpmin.u32','vpminal.u32',

            'vqadd.u8','vqaddal.u8',
            'vqadd.u16','vqaddal.u16',
            'vqadd.u32','vqaddal.u32',
            'vqadd.u64','vqaddal.u64',

            'vqsub.u8','vqsubal.u8',
            'vqsub.u16','vqsubal.u16',
            'vqsub.u32','vqsubal.u32',
            'vqsub.u64','vqsubal.u64',

            'vqmovn.u16','vqmovnal.u16',
            'vqmovn.u32','vqmovnal.u32',
            'vqmovn.u64','vqmovnal.u64',

            'vqshl.u8','vqshlal.u8',
            'vqshl.u16','vqshlal.u16',
            'vqshl.u32','vqshlal.u32',
            'vqshl.u64','vqshlal.u64',

            'vqshrn.u16','vqshrnal.u16',
            'vqshrn.u32','vqshrnal.u32',
            'vqshrn.u64','vqshrnal.u64',

            'vqrshl.u8','vqrshlal.u8',
            'vqrshl.u16','vqrshlal.u16',
            'vqrshl.u32','vqrshlal.u32',
            'vqrshl.u64','vqrshlal.u64',

            'vqrshrn.u16','vqrshrnal.u16',
            'vqrshrn.u32','vqrshrnal.u32',
            'vqrshrn.u64','vqrshrnal.u64',

            'vrhadd.u8','vrhaddal.u8',
            'vrhadd.u16','vrhaddal.u16',
            'vrhadd.u32','vrhaddal.u32',

            'vrshl.u8','vrshlal.u8',
            'vrshl.u16','vrshlal.u16',
            'vrshl.u32','vrshlal.u32',
            'vrshl.u64','vrshlal.u64',

            'vrshr.u8','vrshral.u8',
            'vrshr.u16','vrshral.u16',
            'vrshr.u32','vrshral.u32',
            'vrshr.u64','vrshral.u64',

            'vrsra.u8','vrsraal.u8',
            'vrsra.u16','vrsraal.u16',
            'vrsra.u32','vrsraal.u32',
            'vrsra.u64','vrsraal.u64'
            ),
        /* Unconditional VFPv3 & NEON SIMD Floating-Point Instructions */
        26 => array(
            'vabd.f32','vabdal.f32',

            'vabs.f32','vabsal.f32',
            'vabs.f64','vabsal.f64',

            'vacge.f32','vacgeal.f32',
            'vacgt.f32','vacgtal.f32',
            'vacle.f32','vacleal.f32',
            'vaclt.f32','vacltal.f32',

            'vadd.f32','vaddal.f32',
            'vadd.f64','vaddal.f64',

            'vceq.f32','vceqal.f32',
            'vcge.f32','vcgeal.f32',
            'vcle.f32','vcleal.f32',
            'vcgt.f32','vcgtal.f32',
            'vclt.f32','vcltal.f32',

            'vcmp.f32','vcmpal.f32',
            'vcmp.f64','vcmpal.f64',

            'vcmpe.f32','vcmpeal.f32',
            'vcmpe.f64','vcmpeal.f64',

            'vcvt.s16.f32','vcvtal.s16.f32',
            'vcvt.s16.f64','vcvtal.s16.f64',
            'vcvt.s32.f32','vcvtal.s32.f32',
            'vcvt.s32.f64','vcvtal.s32.f64',
            'vcvt.u16.f32','vcvtal.u16.f32',
            'vcvt.u16.f64','vcvtal.u16.f64',
            'vcvt.u32.f32','vcvtal.u32.f32',
            'vcvt.u32.f64','vcvtal.u32.f64',
            'vcvt.f16.f32','vcvtal.f16.f32',
            'vcvt.f32.s32','vcvtal.f32.s32',
            'vcvt.f32.u32','vcvtal.f32.u32',
            'vcvt.f32.f16','vcvtal.f32.f16',
            'vcvt.f32.f64','vcvtal.f32.f64',
            'vcvt.f64.s32','vcvtal.f64.s32',
            'vcvt.f64.u32','vcvtal.f64.u32',
            'vcvt.f64.f32','vcvtal.f64.f32',

            'vcvtr.s32.f32','vcvtral.s32.f32',
            'vcvtr.s32.f64','vcvtral.s32.f64',
            'vcvtr.u32.f32','vcvtral.u32.f32',
            'vcvtr.u32.f64','vcvtral.u32.f64',

            'vcvtb.f16.f32','vcvtbal.f16.f32',
            'vcvtb.f32.f16','vcvtbal.f32.f16',

            'vcvtt.f16.f32','vcvttal.f16.f32',
            'vcvtt.f32.f16','vcvttal.f32.f16',

            'vdiv.f32','vdival.f32',
            'vdiv.f64','vdival.f64',

            'vmax.f32','vmaxal.f32',
            'vmin.f32','vminal.f32',

            'vmla.f32','vmlaal.f32',
            'vmla.f64','vmlaal.f64',

            'vmls.f32','vmlsal.f32',
            'vmls.f64','vmlsal.f64',

            'vmul.f32','vmulal.f32',
            'vmul.f64','vmulal.f64',

            'vneg.f32','vnegal.f32',
            'vneg.f64','vnegal.f64',

            'vnmla.f32','vnmlaal.f32',
            'vnmla.f64','vnmlaal.f64',

            'vnmls.f32','vnmlsal.f32',
            'vnmls.f64','vnmlsal.f64',

            'vnmul.f64','vnmulal.f64',
            'vnmul.f32','vnmulal.f32',

            'vpadd.f32','vpaddal.f32',

            'vpmax.f32','vpmaxal.f32',
            'vpmin.f32','vpminal.f32',

            'vrecpe.u32','vrecpeal.u32',
            'vrecpe.f32','vrecpeal.f32',
            'vrecps.f32','vrecpsal.f32',

            'vrsqrte.u32','vrsqrteal.u32',
            'vrsqrte.f32','vrsqrteal.f32',
            'vrsqrts.f32','vrsqrtsal.f32',

            'vsqrt.f32','vsqrtal.f32',
            'vsqrt.f64','vsqrtal.f64',

            'vsub.f32','vsubal.f32',
            'vsub.f64','vsubal.f64'
            ),
        /* Conditional VFPv3 & NEON SIMD Memory Access Instructions */
        27 => array(
            /* Conditional VFPv3 & NEON SIMD Memory Access: Loads */
            'vldeq.8','vldne.8','vldcs.8','vldhs.8','vldcc.8','vldlo.8','vldmi.8','vldpl.8','vldvs.8','vldvc.8','vldhi.8','vldls.8','vldge.8','vldlt.8','vldgt.8','vldle.8',
            'vldeq.16','vldne.16','vldcs.16','vldhs.16','vldcc.16','vldlo.16','vldmi.16','vldpl.16','vldvs.16','vldvc.16','vldhi.16','vldls.16','vldge.16','vldlt.16','vldgt.16','vldle.16',
            'vldeq.32','vldne.32','vldcs.32','vldhs.32','vldcc.32','vldlo.32','vldmi.32','vldpl.32','vldvs.32','vldvc.32','vldhi.32','vldls.32','vldge.32','vldlt.32','vldgt.32','vldle.32',
            'vldeq.64','vldne.64','vldcs.64','vldhs.64','vldcc.64','vldlo.64','vldmi.64','vldpl.64','vldvs.64','vldvc.64','vldhi.64','vldls.64','vldge.64','vldlt.64','vldgt.64','vldle.64',

            'vld1eq.8','vld1ne.8','vld1cs.8','vld1hs.8','vld1cc.8','vld1lo.8','vld1mi.8','vld1pl.8','vld1vs.8','vld1vc.8','vld1hi.8','vld1ls.8','vld1ge.8','vld1lt.8','vld1gt.8','vld1le.8',
            'vld1eq.16','vld1ne.16','vld1cs.16','vld1hs.16','vld1cc.16','vld1lo.16','vld1mi.16','vld1pl.16','vld1vs.16','vld1vc.16','vld1hi.16','vld1ls.16','vld1ge.16','vld1lt.16','vld1gt.16','vld1le.16',
            'vld1eq.32','vld1ne.32','vld1cs.32','vld1hs.32','vld1cc.32','vld1lo.32','vld1mi.32','vld1pl.32','vld1vs.32','vld1vc.32','vld1hi.32','vld1ls.32','vld1ge.32','vld1lt.32','vld1gt.32','vld1le.32',

            'vld2eq.8','vld2ne.8','vld2cs.8','vld2hs.8','vld2cc.8','vld2lo.8','vld2mi.8','vld2pl.8','vld2vs.8','vld2vc.8','vld2hi.8','vld2ls.8','vld2ge.8','vld2lt.8','vld2gt.8','vld2le.8',
            'vld2eq.16','vld2ne.16','vld2cs.16','vld2hs.16','vld2cc.16','vld2lo.16','vld2mi.16','vld2pl.16','vld2vs.16','vld2vc.16','vld2hi.16','vld2ls.16','vld2ge.16','vld2lt.16','vld2gt.16','vld2le.16',
            'vld2eq.32','vld2ne.32','vld2cs.32','vld2hs.32','vld2cc.32','vld2lo.32','vld2mi.32','vld2pl.32','vld2vs.32','vld2vc.32','vld2hi.32','vld2ls.32','vld2ge.32','vld2lt.32','vld2gt.32','vld2le.32',

            'vld3eq.8','vld3ne.8','vld3cs.8','vld3hs.8','vld3cc.8','vld3lo.8','vld3mi.8','vld3pl.8','vld3vs.8','vld3vc.8','vld3hi.8','vld3ls.8','vld3ge.8','vld3lt.8','vld3gt.8','vld3le.8',
            'vld3eq.16','vld3ne.16','vld3cs.16','vld3hs.16','vld3cc.16','vld3lo.16','vld3mi.16','vld3pl.16','vld3vs.16','vld3vc.16','vld3hi.16','vld3ls.16','vld3ge.16','vld3lt.16','vld3gt.16','vld3le.16',
            'vld3eq.32','vld3ne.32','vld3cs.32','vld3hs.32','vld3cc.32','vld3lo.32','vld3mi.32','vld3pl.32','vld3vs.32','vld3vc.32','vld3hi.32','vld3ls.32','vld3ge.32','vld3lt.32','vld3gt.32','vld3le.32',

            'vld4eq.8','vld4ne.8','vld4cs.8','vld4hs.8','vld4cc.8','vld4lo.8','vld4mi.8','vld4pl.8','vld4vs.8','vld4vc.8','vld4hi.8','vld4ls.8','vld4ge.8','vld4lt.8','vld4gt.8','vld4le.8',
            'vld4eq.16','vld4ne.16','vld4cs.16','vld4hs.16','vld4cc.16','vld4lo.16','vld4mi.16','vld4pl.16','vld4vs.16','vld4vc.16','vld4hi.16','vld4ls.16','vld4ge.16','vld4lt.16','vld4gt.16','vld4le.16',
            'vld4eq.32','vld4ne.32','vld4cs.32','vld4hs.32','vld4cc.32','vld4lo.32','vld4mi.32','vld4pl.32','vld4vs.32','vld4vc.32','vld4hi.32','vld4ls.32','vld4ge.32','vld4lt.32','vld4gt.32','vld4le.32',

            'vldmeq','vldmne','vldmcs','vldmhs','vldmcc','vldmlo','vldmmi','vldmpl','vldmvs','vldmvc','vldmhi','vldmls','vldmge','vldmlt','vldmgt','vldmle',
            'vldmeq.32','vldmne.32','vldmcs.32','vldmhs.32','vldmcc.32','vldmlo.32','vldmmi.32','vldmpl.32','vldmvs.32','vldmvc.32','vldmhi.32','vldmls.32','vldmge.32','vldmlt.32','vldmgt.32','vldmle.32',
            'vldmeq.64','vldmne.64','vldmcs.64','vldmhs.64','vldmcc.64','vldmlo.64','vldmmi.64','vldmpl.64','vldmvs.64','vldmvc.64','vldmhi.64','vldmls.64','vldmge.64','vldmlt.64','vldmgt.64','vldmle.64',

            'vldmiaeq','vldmiane','vldmiacs','vldmiahs','vldmiacc','vldmialo','vldmiami','vldmiapl','vldmiavs','vldmiavc','vldmiahi','vldmials','vldmiage','vldmialt','vldmiagt','vldmiale',
            'vldmiaeq.32','vldmiane.32','vldmiacs.32','vldmiahs.32','vldmiacc.32','vldmialo.32','vldmiami.32','vldmiapl.32','vldmiavs.32','vldmiavc.32','vldmiahi.32','vldmials.32','vldmiage.32','vldmialt.32','vldmiagt.32','vldmiale.32',
            'vldmiaeq.64','vldmiane.64','vldmiacs.64','vldmiahs.64','vldmiacc.64','vldmialo.64','vldmiami.64','vldmiapl.64','vldmiavs.64','vldmiavc.64','vldmiahi.64','vldmials.64','vldmiage.64','vldmialt.64','vldmiagt.64','vldmiale.64',

            'vldmdbeq','vldmdbne','vldmdbcs','vldmdbhs','vldmdbcc','vldmdblo','vldmdbmi','vldmdbpl','vldmdbvs','vldmdbvc','vldmdbhi','vldmdbls','vldmdbge','vldmdblt','vldmdbgt','vldmdble',
            'vldmdbeq.32','vldmdbne.32','vldmdbcs.32','vldmdbhs.32','vldmdbcc.32','vldmdblo.32','vldmdbmi.32','vldmdbpl.32','vldmdbvs.32','vldmdbvc.32','vldmdbhi.32','vldmdbls.32','vldmdbge.32','vldmdblt.32','vldmdbgt.32','vldmdble.32',
            'vldmdbeq.64','vldmdbne.64','vldmdbcs.64','vldmdbhs.64','vldmdbcc.64','vldmdblo.64','vldmdbmi.64','vldmdbpl.64','vldmdbvs.64','vldmdbvc.64','vldmdbhi.64','vldmdbls.64','vldmdbge.64','vldmdblt.64','vldmdbgt.64','vldmdble.64',

            'vldreq','vldrne','vldrcs','vldrhs','vldrcc','vldrlo','vldrmi','vldrpl','vldrvs','vldrvc','vldrhi','vldrls','vldrge','vldrlt','vldrgt','vldrle',
            'vldreq.32','vldrne.32','vldrcs.32','vldrhs.32','vldrcc.32','vldrlo.32','vldrmi.32','vldrpl.32','vldrvs.32','vldrvc.32','vldrhi.32','vldrls.32','vldrge.32','vldrlt.32','vldrgt.32','vldrle.32',
            'vldreq.64','vldrne.64','vldrcs.64','vldrhs.64','vldrcc.64','vldrlo.64','vldrmi.64','vldrpl.64','vldrvs.64','vldrvc.64','vldrhi.64','vldrls.64','vldrge.64','vldrlt.64','vldrgt.64','vldrle.64',

            'vpopeq','vpopne','vpopcs','vpophs','vpopcc','vpoplo','vpopmi','vpoppl','vpopvs','vpopvc','vpophi','vpopls','vpopge','vpoplt','vpopgt','vpople',
            'vpopeq.32','vpopne.32','vpopcs.32','vpophs.32','vpopcc.32','vpoplo.32','vpopmi.32','vpoppl.32','vpopvs.32','vpopvc.32','vpophi.32','vpopls.32','vpopge.32','vpoplt.32','vpopgt.32','vpople.32',
            'vpopeq.64','vpopne.64','vpopcs.64','vpophs.64','vpopcc.64','vpoplo.64','vpopmi.64','vpoppl.64','vpopvs.64','vpopvc.64','vpophi.64','vpopls.64','vpopge.64','vpoplt.64','vpopgt.64','vpople.64',

            /* Conditional VFPv3 & NEON SIMD Memory Access: Stores */
            'vst1eq.8','vst1ne.8','vst1cs.8','vst1hs.8','vst1cc.8','vst1lo.8','vst1mi.8','vst1pl.8','vst1vs.8','vst1vc.8','vst1hi.8','vst1ls.8','vst1ge.8','vst1lt.8','vst1gt.8','vst1le.8',
            'vst1eq.16','vst1ne.16','vst1cs.16','vst1hs.16','vst1cc.16','vst1lo.16','vst1mi.16','vst1pl.16','vst1vs.16','vst1vc.16','vst1hi.16','vst1ls.16','vst1ge.16','vst1lt.16','vst1gt.16','vst1le.16',
            'vst1eq.32','vst1ne.32','vst1cs.32','vst1hs.32','vst1cc.32','vst1lo.32','vst1mi.32','vst1pl.32','vst1vs.32','vst1vc.32','vst1hi.32','vst1ls.32','vst1ge.32','vst1lt.32','vst1gt.32','vst1le.32',
            'vst1eq.64','vst1ne.64','vst1cs.64','vst1hs.64','vst1cc.64','vst1lo.64','vst1mi.64','vst1pl.64','vst1vs.64','vst1vc.64','vst1hi.64','vst1ls.64','vst1ge.64','vst1lt.64','vst1gt.64','vst1le.64',

            'vst2eq.8','vst2ne.8','vst2cs.8','vst2hs.8','vst2cc.8','vst2lo.8','vst2mi.8','vst2pl.8','vst2vs.8','vst2vc.8','vst2hi.8','vst2ls.8','vst2ge.8','vst2lt.8','vst2gt.8','vst2le.8',
            'vst2eq.16','vst2ne.16','vst2cs.16','vst2hs.16','vst2cc.16','vst2lo.16','vst2mi.16','vst2pl.16','vst2vs.16','vst2vc.16','vst2hi.16','vst2ls.16','vst2ge.16','vst2lt.16','vst2gt.16','vst2le.16',
            'vst2eq.32','vst2ne.32','vst2cs.32','vst2hs.32','vst2cc.32','vst2lo.32','vst2mi.32','vst2pl.32','vst2vs.32','vst2vc.32','vst2hi.32','vst2ls.32','vst2ge.32','vst2lt.32','vst2gt.32','vst2le.32',

            'vst3eq.8','vst3ne.8','vst3cs.8','vst3hs.8','vst3cc.8','vst3lo.8','vst3mi.8','vst3pl.8','vst3vs.8','vst3vc.8','vst3hi.8','vst3ls.8','vst3ge.8','vst3lt.8','vst3gt.8','vst3le.8',
            'vst3eq.16','vst3ne.16','vst3cs.16','vst3hs.16','vst3cc.16','vst3lo.16','vst3mi.16','vst3pl.16','vst3vs.16','vst3vc.16','vst3hi.16','vst3ls.16','vst3ge.16','vst3lt.16','vst3gt.16','vst3le.16',
            'vst3eq.32','vst3ne.32','vst3cs.32','vst3hs.32','vst3cc.32','vst3lo.32','vst3mi.32','vst3pl.32','vst3vs.32','vst3vc.32','vst3hi.32','vst3ls.32','vst3ge.32','vst3lt.32','vst3gt.32','vst3le.32',

            'vst4eq.8','vst4ne.8','vst4cs.8','vst4hs.8','vst4cc.8','vst4lo.8','vst4mi.8','vst4pl.8','vst4vs.8','vst4vc.8','vst4hi.8','vst4ls.8','vst4ge.8','vst4lt.8','vst4gt.8','vst4le.8',
            'vst4eq.16','vst4ne.16','vst4cs.16','vst4hs.16','vst4cc.16','vst4lo.16','vst4mi.16','vst4pl.16','vst4vs.16','vst4vc.16','vst4hi.16','vst4ls.16','vst4ge.16','vst4lt.16','vst4gt.16','vst4le.16',
            'vst4eq.32','vst4ne.32','vst4cs.32','vst4hs.32','vst4cc.32','vst4lo.32','vst4mi.32','vst4pl.32','vst4vs.32','vst4vc.32','vst4hi.32','vst4ls.32','vst4ge.32','vst4lt.32','vst4gt.32','vst4le.32',

            'vstmeq','vstmne','vstmcs','vstmhs','vstmcc','vstmlo','vstmmi','vstmpl','vstmvs','vstmvc','vstmhi','vstmls','vstmge','vstmlt','vstmgt','vstmle',
            'vstmeq.32','vstmne.32','vstmcs.32','vstmhs.32','vstmcc.32','vstmlo.32','vstmmi.32','vstmpl.32','vstmvs.32','vstmvc.32','vstmhi.32','vstmls.32','vstmge.32','vstmlt.32','vstmgt.32','vstmle.32',
            'vstmeq.64','vstmne.64','vstmcs.64','vstmhs.64','vstmcc.64','vstmlo.64','vstmmi.64','vstmpl.64','vstmvs.64','vstmvc.64','vstmhi.64','vstmls.64','vstmge.64','vstmlt.64','vstmgt.64','vstmle.64',

            'vstmiaeq','vstmiane','vstmiacs','vstmiahs','vstmiacc','vstmialo','vstmiami','vstmiapl','vstmiavs','vstmiavc','vstmiahi','vstmials','vstmiage','vstmialt','vstmiagt','vstmiale',
            'vstmiaeq.32','vstmiane.32','vstmiacs.32','vstmiahs.32','vstmiacc.32','vstmialo.32','vstmiami.32','vstmiapl.32','vstmiavs.32','vstmiavc.32','vstmiahi.32','vstmials.32','vstmiage.32','vstmialt.32','vstmiagt.32','vstmiale.32',
            'vstmiaeq.64','vstmiane.64','vstmiacs.64','vstmiahs.64','vstmiacc.64','vstmialo.64','vstmiami.64','vstmiapl.64','vstmiavs.64','vstmiavc.64','vstmiahi.64','vstmials.64','vstmiage.64','vstmialt.64','vstmiagt.64','vstmiale.64',

            'vstmdbeq','vstmdbne','vstmdbcs','vstmdbhs','vstmdbcc','vstmdblo','vstmdbmi','vstmdbpl','vstmdbvs','vstmdbvc','vstmdbhi','vstmdbls','vstmdbge','vstmdblt','vstmdbgt','vstmdble',
            'vstmdbeq.32','vstmdbne.32','vstmdbcs.32','vstmdbhs.32','vstmdbcc.32','vstmdblo.32','vstmdbmi.32','vstmdbpl.32','vstmdbvs.32','vstmdbvc.32','vstmdbhi.32','vstmdbls.32','vstmdbge.32','vstmdblt.32','vstmdbgt.32','vstmdble.32',
            'vstmdbeq.64','vstmdbne.64','vstmdbcs.64','vstmdbhs.64','vstmdbcc.64','vstmdblo.64','vstmdbmi.64','vstmdbpl.64','vstmdbvs.64','vstmdbvc.64','vstmdbhi.64','vstmdbls.64','vstmdbge.64','vstmdblt.64','vstmdbgt.64','vstmdble.64',

            'vstreq','vstrne','vstrcs','vstrhs','vstrcc','vstrlo','vstrmi','vstrpl','vstrvs','vstrvc','vstrhi','vstrls','vstrge','vstrlt','vstrgt','vstrle',
            'vstreq.32','vstrne.32','vstrcs.32','vstrhs.32','vstrcc.32','vstrlo.32','vstrmi.32','vstrpl.32','vstrvs.32','vstrvc.32','vstrhi.32','vstrls.32','vstrge.32','vstrlt.32','vstrgt.32','vstrle.32',
            'vstreq.64','vstrne.64','vstrcs.64','vstrhs.64','vstrcc.64','vstrlo.64','vstrmi.64','vstrpl.64','vstrvs.64','vstrvc.64','vstrhi.64','vstrls.64','vstrge.64','vstrlt.64','vstrgt.64','vstrle.64',

            'vpusheq','vpushne','vpushcs','vpushhs','vpushcc','vpushlo','vpushmi','vpushpl','vpushvs','vpushvc','vpushhi','vpushls','vpushge','vpushlt','vpushgt','vpushle',
            'vpusheq.32','vpushne.32','vpushcs.32','vpushhs.32','vpushcc.32','vpushlo.32','vpushmi.32','vpushpl.32','vpushvs.32','vpushvc.32','vpushhi.32','vpushls.32','vpushge.32','vpushlt.32','vpushgt.32','vpushle.32',
            'vpusheq.64','vpushne.64','vpushcs.64','vpushhs.64','vpushcc.64','vpushlo.64','vpushmi.64','vpushpl.64','vpushvs.64','vpushvc.64','vpushhi.64','vpushls.64','vpushge.64','vpushlt.64','vpushgt.64','vpushle.64'
            ),
        /* Conditional NEON SIMD Logical Instructions */
        28 => array(
            'vandeq','vandne','vandcs','vandhs','vandcc','vandlo','vandmi','vandpl','vandvs','vandvc','vandhi','vandls','vandge','vandlt','vandgt','vandle',
            'vandeq.i8','vandne.i8','vandcs.i8','vandhs.i8','vandcc.i8','vandlo.i8','vandmi.i8','vandpl.i8','vandvs.i8','vandvc.i8','vandhi.i8','vandls.i8','vandge.i8','vandlt.i8','vandgt.i8','vandle.i8',
            'vandeq.i16','vandne.i16','vandcs.i16','vandhs.i16','vandcc.i16','vandlo.i16','vandmi.i16','vandpl.i16','vandvs.i16','vandvc.i16','vandhi.i16','vandls.i16','vandge.i16','vandlt.i16','vandgt.i16','vandle.i16',
            'vandeq.i32','vandne.i32','vandcs.i32','vandhs.i32','vandcc.i32','vandlo.i32','vandmi.i32','vandpl.i32','vandvs.i32','vandvc.i32','vandhi.i32','vandls.i32','vandge.i32','vandlt.i32','vandgt.i32','vandle.i32',
            'vandeq.i64','vandne.i64','vandcs.i64','vandhs.i64','vandcc.i64','vandlo.i64','vandmi.i64','vandpl.i64','vandvs.i64','vandvc.i64','vandhi.i64','vandls.i64','vandge.i64','vandlt.i64','vandgt.i64','vandle.i64',
            'vandeq.s8','vandne.s8','vandcs.s8','vandhs.s8','vandcc.s8','vandlo.s8','vandmi.s8','vandpl.s8','vandvs.s8','vandvc.s8','vandhi.s8','vandls.s8','vandge.s8','vandlt.s8','vandgt.s8','vandle.s8',
            'vandeq.s16','vandne.s16','vandcs.s16','vandhs.s16','vandcc.s16','vandlo.s16','vandmi.s16','vandpl.s16','vandvs.s16','vandvc.s16','vandhi.s16','vandls.s16','vandge.s16','vandlt.s16','vandgt.s16','vandle.s16',
            'vandeq.s32','vandne.s32','vandcs.s32','vandhs.s32','vandcc.s32','vandlo.s32','vandmi.s32','vandpl.s32','vandvs.s32','vandvc.s32','vandhi.s32','vandls.s32','vandge.s32','vandlt.s32','vandgt.s32','vandle.s32',
            'vandeq.s64','vandne.s64','vandcs.s64','vandhs.s64','vandcc.s64','vandlo.s64','vandmi.s64','vandpl.s64','vandvs.s64','vandvc.s64','vandhi.s64','vandls.s64','vandge.s64','vandlt.s64','vandgt.s64','vandle.s64',
            'vandeq.u8','vandne.u8','vandcs.u8','vandhs.u8','vandcc.u8','vandlo.u8','vandmi.u8','vandpl.u8','vandvs.u8','vandvc.u8','vandhi.u8','vandls.u8','vandge.u8','vandlt.u8','vandgt.u8','vandle.u8',
            'vandeq.u16','vandne.u16','vandcs.u16','vandhs.u16','vandcc.u16','vandlo.u16','vandmi.u16','vandpl.u16','vandvs.u16','vandvc.u16','vandhi.u16','vandls.u16','vandge.u16','vandlt.u16','vandgt.u16','vandle.u16',
            'vandeq.u32','vandne.u32','vandcs.u32','vandhs.u32','vandcc.u32','vandlo.u32','vandmi.u32','vandpl.u32','vandvs.u32','vandvc.u32','vandhi.u32','vandls.u32','vandge.u32','vandlt.u32','vandgt.u32','vandle.u32',
            'vandeq.u64','vandne.u64','vandcs.u64','vandhs.u64','vandcc.u64','vandlo.u64','vandmi.u64','vandpl.u64','vandvs.u64','vandvc.u64','vandhi.u64','vandls.u64','vandge.u64','vandlt.u64','vandgt.u64','vandle.u64',
            'vandeq.f32','vandne.f32','vandcs.f32','vandhs.f32','vandcc.f32','vandlo.f32','vandmi.f32','vandpl.f32','vandvs.f32','vandvc.f32','vandhi.f32','vandls.f32','vandge.f32','vandlt.f32','vandgt.f32','vandle.f32',
            'vandeq.f64','vandne.f64','vandcs.f64','vandhs.f64','vandcc.f64','vandlo.f64','vandmi.f64','vandpl.f64','vandvs.f64','vandvc.f64','vandhi.f64','vandls.f64','vandge.f64','vandlt.f64','vandgt.f64','vandle.f64',

            'vbiceq','vbicne','vbiccs','vbichs','vbiccc','vbiclo','vbicmi','vbicpl','vbicvs','vbicvc','vbichi','vbicls','vbicge','vbiclt','vbicgt','vbicle',
            'vbiceq.i8','vbicne.i8','vbiccs.i8','vbichs.i8','vbiccc.i8','vbiclo.i8','vbicmi.i8','vbicpl.i8','vbicvs.i8','vbicvc.i8','vbichi.i8','vbicls.i8','vbicge.i8','vbiclt.i8','vbicgt.i8','vbicle.i8',
            'vbiceq.i16','vbicne.i16','vbiccs.i16','vbichs.i16','vbiccc.i16','vbiclo.i16','vbicmi.i16','vbicpl.i16','vbicvs.i16','vbicvc.i16','vbichi.i16','vbicls.i16','vbicge.i16','vbiclt.i16','vbicgt.i16','vbicle.i16',
            'vbiceq.i32','vbicne.i32','vbiccs.i32','vbichs.i32','vbiccc.i32','vbiclo.i32','vbicmi.i32','vbicpl.i32','vbicvs.i32','vbicvc.i32','vbichi.i32','vbicls.i32','vbicge.i32','vbiclt.i32','vbicgt.i32','vbicle.i32',
            'vbiceq.i64','vbicne.i64','vbiccs.i64','vbichs.i64','vbiccc.i64','vbiclo.i64','vbicmi.i64','vbicpl.i64','vbicvs.i64','vbicvc.i64','vbichi.i64','vbicls.i64','vbicge.i64','vbiclt.i64','vbicgt.i64','vbicle.i64',
            'vbiceq.s8','vbicne.s8','vbiccs.s8','vbichs.s8','vbiccc.s8','vbiclo.s8','vbicmi.s8','vbicpl.s8','vbicvs.s8','vbicvc.s8','vbichi.s8','vbicls.s8','vbicge.s8','vbiclt.s8','vbicgt.s8','vbicle.s8',
            'vbiceq.s16','vbicne.s16','vbiccs.s16','vbichs.s16','vbiccc.s16','vbiclo.s16','vbicmi.s16','vbicpl.s16','vbicvs.s16','vbicvc.s16','vbichi.s16','vbicls.s16','vbicge.s16','vbiclt.s16','vbicgt.s16','vbicle.s16',
            'vbiceq.s32','vbicne.s32','vbiccs.s32','vbichs.s32','vbiccc.s32','vbiclo.s32','vbicmi.s32','vbicpl.s32','vbicvs.s32','vbicvc.s32','vbichi.s32','vbicls.s32','vbicge.s32','vbiclt.s32','vbicgt.s32','vbicle.s32',
            'vbiceq.s64','vbicne.s64','vbiccs.s64','vbichs.s64','vbiccc.s64','vbiclo.s64','vbicmi.s64','vbicpl.s64','vbicvs.s64','vbicvc.s64','vbichi.s64','vbicls.s64','vbicge.s64','vbiclt.s64','vbicgt.s64','vbicle.s64',
            'vbiceq.u8','vbicne.u8','vbiccs.u8','vbichs.u8','vbiccc.u8','vbiclo.u8','vbicmi.u8','vbicpl.u8','vbicvs.u8','vbicvc.u8','vbichi.u8','vbicls.u8','vbicge.u8','vbiclt.u8','vbicgt.u8','vbicle.u8',
            'vbiceq.u16','vbicne.u16','vbiccs.u16','vbichs.u16','vbiccc.u16','vbiclo.u16','vbicmi.u16','vbicpl.u16','vbicvs.u16','vbicvc.u16','vbichi.u16','vbicls.u16','vbicge.u16','vbiclt.u16','vbicgt.u16','vbicle.u16',
            'vbiceq.u32','vbicne.u32','vbiccs.u32','vbichs.u32','vbiccc.u32','vbiclo.u32','vbicmi.u32','vbicpl.u32','vbicvs.u32','vbicvc.u32','vbichi.u32','vbicls.u32','vbicge.u32','vbiclt.u32','vbicgt.u32','vbicle.u32',
            'vbiceq.u64','vbicne.u64','vbiccs.u64','vbichs.u64','vbiccc.u64','vbiclo.u64','vbicmi.u64','vbicpl.u64','vbicvs.u64','vbicvc.u64','vbichi.u64','vbicls.u64','vbicge.u64','vbiclt.u64','vbicgt.u64','vbicle.u64',
            'vbiceq.f32','vbicne.f32','vbiccs.f32','vbichs.f32','vbiccc.f32','vbiclo.f32','vbicmi.f32','vbicpl.f32','vbicvs.f32','vbicvc.f32','vbichi.f32','vbicls.f32','vbicge.f32','vbiclt.f32','vbicgt.f32','vbicle.f32',
            'vbiceq.f64','vbicne.f64','vbiccs.f64','vbichs.f64','vbiccc.f64','vbiclo.f64','vbicmi.f64','vbicpl.f64','vbicvs.f64','vbicvc.f64','vbichi.f64','vbicls.f64','vbicge.f64','vbiclt.f64','vbicgt.f64','vbicle.f64',

            'vbifeq','vbifne','vbifcs','vbifhs','vbifcc','vbiflo','vbifmi','vbifpl','vbifvs','vbifvc','vbifhi','vbifls','vbifge','vbiflt','vbifgt','vbifle',
            'vbifeq.i8','vbifne.i8','vbifcs.i8','vbifhs.i8','vbifcc.i8','vbiflo.i8','vbifmi.i8','vbifpl.i8','vbifvs.i8','vbifvc.i8','vbifhi.i8','vbifls.i8','vbifge.i8','vbiflt.i8','vbifgt.i8','vbifle.i8',
            'vbifeq.i16','vbifne.i16','vbifcs.i16','vbifhs.i16','vbifcc.i16','vbiflo.i16','vbifmi.i16','vbifpl.i16','vbifvs.i16','vbifvc.i16','vbifhi.i16','vbifls.i16','vbifge.i16','vbiflt.i16','vbifgt.i16','vbifle.i16',
            'vbifeq.i32','vbifne.i32','vbifcs.i32','vbifhs.i32','vbifcc.i32','vbiflo.i32','vbifmi.i32','vbifpl.i32','vbifvs.i32','vbifvc.i32','vbifhi.i32','vbifls.i32','vbifge.i32','vbiflt.i32','vbifgt.i32','vbifle.i32',
            'vbifeq.i64','vbifne.i64','vbifcs.i64','vbifhs.i64','vbifcc.i64','vbiflo.i64','vbifmi.i64','vbifpl.i64','vbifvs.i64','vbifvc.i64','vbifhi.i64','vbifls.i64','vbifge.i64','vbiflt.i64','vbifgt.i64','vbifle.i64',
            'vbifeq.s8','vbifne.s8','vbifcs.s8','vbifhs.s8','vbifcc.s8','vbiflo.s8','vbifmi.s8','vbifpl.s8','vbifvs.s8','vbifvc.s8','vbifhi.s8','vbifls.s8','vbifge.s8','vbiflt.s8','vbifgt.s8','vbifle.s8',
            'vbifeq.s16','vbifne.s16','vbifcs.s16','vbifhs.s16','vbifcc.s16','vbiflo.s16','vbifmi.s16','vbifpl.s16','vbifvs.s16','vbifvc.s16','vbifhi.s16','vbifls.s16','vbifge.s16','vbiflt.s16','vbifgt.s16','vbifle.s16',
            'vbifeq.s32','vbifne.s32','vbifcs.s32','vbifhs.s32','vbifcc.s32','vbiflo.s32','vbifmi.s32','vbifpl.s32','vbifvs.s32','vbifvc.s32','vbifhi.s32','vbifls.s32','vbifge.s32','vbiflt.s32','vbifgt.s32','vbifle.s32',
            'vbifeq.s64','vbifne.s64','vbifcs.s64','vbifhs.s64','vbifcc.s64','vbiflo.s64','vbifmi.s64','vbifpl.s64','vbifvs.s64','vbifvc.s64','vbifhi.s64','vbifls.s64','vbifge.s64','vbiflt.s64','vbifgt.s64','vbifle.s64',
            'vbifeq.u8','vbifne.u8','vbifcs.u8','vbifhs.u8','vbifcc.u8','vbiflo.u8','vbifmi.u8','vbifpl.u8','vbifvs.u8','vbifvc.u8','vbifhi.u8','vbifls.u8','vbifge.u8','vbiflt.u8','vbifgt.u8','vbifle.u8',
            'vbifeq.u16','vbifne.u16','vbifcs.u16','vbifhs.u16','vbifcc.u16','vbiflo.u16','vbifmi.u16','vbifpl.u16','vbifvs.u16','vbifvc.u16','vbifhi.u16','vbifls.u16','vbifge.u16','vbiflt.u16','vbifgt.u16','vbifle.u16',
            'vbifeq.u32','vbifne.u32','vbifcs.u32','vbifhs.u32','vbifcc.u32','vbiflo.u32','vbifmi.u32','vbifpl.u32','vbifvs.u32','vbifvc.u32','vbifhi.u32','vbifls.u32','vbifge.u32','vbiflt.u32','vbifgt.u32','vbifle.u32',
            'vbifeq.u64','vbifne.u64','vbifcs.u64','vbifhs.u64','vbifcc.u64','vbiflo.u64','vbifmi.u64','vbifpl.u64','vbifvs.u64','vbifvc.u64','vbifhi.u64','vbifls.u64','vbifge.u64','vbiflt.u64','vbifgt.u64','vbifle.u64',
            'vbifeq.f32','vbifne.f32','vbifcs.f32','vbifhs.f32','vbifcc.f32','vbiflo.f32','vbifmi.f32','vbifpl.f32','vbifvs.f32','vbifvc.f32','vbifhi.f32','vbifls.f32','vbifge.f32','vbiflt.f32','vbifgt.f32','vbifle.f32',
            'vbifeq.f64','vbifne.f64','vbifcs.f64','vbifhs.f64','vbifcc.f64','vbiflo.f64','vbifmi.f64','vbifpl.f64','vbifvs.f64','vbifvc.f64','vbifhi.f64','vbifls.f64','vbifge.f64','vbiflt.f64','vbifgt.f64','vbifle.f64',

            'vbiteq','vbitne','vbitcs','vbiths','vbitcc','vbitlo','vbitmi','vbitpl','vbitvs','vbitvc','vbithi','vbitls','vbitge','vbitlt','vbitgt','vbitle',
            'vbiteq.i8','vbitne.i8','vbitcs.i8','vbiths.i8','vbitcc.i8','vbitlo.i8','vbitmi.i8','vbitpl.i8','vbitvs.i8','vbitvc.i8','vbithi.i8','vbitls.i8','vbitge.i8','vbitlt.i8','vbitgt.i8','vbitle.i8',
            'vbiteq.i16','vbitne.i16','vbitcs.i16','vbiths.i16','vbitcc.i16','vbitlo.i16','vbitmi.i16','vbitpl.i16','vbitvs.i16','vbitvc.i16','vbithi.i16','vbitls.i16','vbitge.i16','vbitlt.i16','vbitgt.i16','vbitle.i16',
            'vbiteq.i32','vbitne.i32','vbitcs.i32','vbiths.i32','vbitcc.i32','vbitlo.i32','vbitmi.i32','vbitpl.i32','vbitvs.i32','vbitvc.i32','vbithi.i32','vbitls.i32','vbitge.i32','vbitlt.i32','vbitgt.i32','vbitle.i32',
            'vbiteq.i64','vbitne.i64','vbitcs.i64','vbiths.i64','vbitcc.i64','vbitlo.i64','vbitmi.i64','vbitpl.i64','vbitvs.i64','vbitvc.i64','vbithi.i64','vbitls.i64','vbitge.i64','vbitlt.i64','vbitgt.i64','vbitle.i64',
            'vbiteq.s8','vbitne.s8','vbitcs.s8','vbiths.s8','vbitcc.s8','vbitlo.s8','vbitmi.s8','vbitpl.s8','vbitvs.s8','vbitvc.s8','vbithi.s8','vbitls.s8','vbitge.s8','vbitlt.s8','vbitgt.s8','vbitle.s8',
            'vbiteq.s16','vbitne.s16','vbitcs.s16','vbiths.s16','vbitcc.s16','vbitlo.s16','vbitmi.s16','vbitpl.s16','vbitvs.s16','vbitvc.s16','vbithi.s16','vbitls.s16','vbitge.s16','vbitlt.s16','vbitgt.s16','vbitle.s16',
            'vbiteq.s32','vbitne.s32','vbitcs.s32','vbiths.s32','vbitcc.s32','vbitlo.s32','vbitmi.s32','vbitpl.s32','vbitvs.s32','vbitvc.s32','vbithi.s32','vbitls.s32','vbitge.s32','vbitlt.s32','vbitgt.s32','vbitle.s32',
            'vbiteq.s64','vbitne.s64','vbitcs.s64','vbiths.s64','vbitcc.s64','vbitlo.s64','vbitmi.s64','vbitpl.s64','vbitvs.s64','vbitvc.s64','vbithi.s64','vbitls.s64','vbitge.s64','vbitlt.s64','vbitgt.s64','vbitle.s64',
            'vbiteq.u8','vbitne.u8','vbitcs.u8','vbiths.u8','vbitcc.u8','vbitlo.u8','vbitmi.u8','vbitpl.u8','vbitvs.u8','vbitvc.u8','vbithi.u8','vbitls.u8','vbitge.u8','vbitlt.u8','vbitgt.u8','vbitle.u8',
            'vbiteq.u16','vbitne.u16','vbitcs.u16','vbiths.u16','vbitcc.u16','vbitlo.u16','vbitmi.u16','vbitpl.u16','vbitvs.u16','vbitvc.u16','vbithi.u16','vbitls.u16','vbitge.u16','vbitlt.u16','vbitgt.u16','vbitle.u16',
            'vbiteq.u32','vbitne.u32','vbitcs.u32','vbiths.u32','vbitcc.u32','vbitlo.u32','vbitmi.u32','vbitpl.u32','vbitvs.u32','vbitvc.u32','vbithi.u32','vbitls.u32','vbitge.u32','vbitlt.u32','vbitgt.u32','vbitle.u32',
            'vbiteq.u64','vbitne.u64','vbitcs.u64','vbiths.u64','vbitcc.u64','vbitlo.u64','vbitmi.u64','vbitpl.u64','vbitvs.u64','vbitvc.u64','vbithi.u64','vbitls.u64','vbitge.u64','vbitlt.u64','vbitgt.u64','vbitle.u64',
            'vbiteq.f32','vbitne.f32','vbitcs.f32','vbiths.f32','vbitcc.f32','vbitlo.f32','vbitmi.f32','vbitpl.f32','vbitvs.f32','vbitvc.f32','vbithi.f32','vbitls.f32','vbitge.f32','vbitlt.f32','vbitgt.f32','vbitle.f32',
            'vbiteq.f64','vbitne.f64','vbitcs.f64','vbiths.f64','vbitcc.f64','vbitlo.f64','vbitmi.f64','vbitpl.f64','vbitvs.f64','vbitvc.f64','vbithi.f64','vbitls.f64','vbitge.f64','vbitlt.f64','vbitgt.f64','vbitle.f64',

            'vbsleq','vbslne','vbslcs','vbslhs','vbslcc','vbsllo','vbslmi','vbslpl','vbslvs','vbslvc','vbslhi','vbslls','vbslge','vbsllt','vbslgt','vbslle',
            'vbsleq.i8','vbslne.i8','vbslcs.i8','vbslhs.i8','vbslcc.i8','vbsllo.i8','vbslmi.i8','vbslpl.i8','vbslvs.i8','vbslvc.i8','vbslhi.i8','vbslls.i8','vbslge.i8','vbsllt.i8','vbslgt.i8','vbslle.i8',
            'vbsleq.i16','vbslne.i16','vbslcs.i16','vbslhs.i16','vbslcc.i16','vbsllo.i16','vbslmi.i16','vbslpl.i16','vbslvs.i16','vbslvc.i16','vbslhi.i16','vbslls.i16','vbslge.i16','vbsllt.i16','vbslgt.i16','vbslle.i16',
            'vbsleq.i32','vbslne.i32','vbslcs.i32','vbslhs.i32','vbslcc.i32','vbsllo.i32','vbslmi.i32','vbslpl.i32','vbslvs.i32','vbslvc.i32','vbslhi.i32','vbslls.i32','vbslge.i32','vbsllt.i32','vbslgt.i32','vbslle.i32',
            'vbsleq.i64','vbslne.i64','vbslcs.i64','vbslhs.i64','vbslcc.i64','vbsllo.i64','vbslmi.i64','vbslpl.i64','vbslvs.i64','vbslvc.i64','vbslhi.i64','vbslls.i64','vbslge.i64','vbsllt.i64','vbslgt.i64','vbslle.i64',
            'vbsleq.s8','vbslne.s8','vbslcs.s8','vbslhs.s8','vbslcc.s8','vbsllo.s8','vbslmi.s8','vbslpl.s8','vbslvs.s8','vbslvc.s8','vbslhi.s8','vbslls.s8','vbslge.s8','vbsllt.s8','vbslgt.s8','vbslle.s8',
            'vbsleq.s16','vbslne.s16','vbslcs.s16','vbslhs.s16','vbslcc.s16','vbsllo.s16','vbslmi.s16','vbslpl.s16','vbslvs.s16','vbslvc.s16','vbslhi.s16','vbslls.s16','vbslge.s16','vbsllt.s16','vbslgt.s16','vbslle.s16',
            'vbsleq.s32','vbslne.s32','vbslcs.s32','vbslhs.s32','vbslcc.s32','vbsllo.s32','vbslmi.s32','vbslpl.s32','vbslvs.s32','vbslvc.s32','vbslhi.s32','vbslls.s32','vbslge.s32','vbsllt.s32','vbslgt.s32','vbslle.s32',
            'vbsleq.s64','vbslne.s64','vbslcs.s64','vbslhs.s64','vbslcc.s64','vbsllo.s64','vbslmi.s64','vbslpl.s64','vbslvs.s64','vbslvc.s64','vbslhi.s64','vbslls.s64','vbslge.s64','vbsllt.s64','vbslgt.s64','vbslle.s64',
            'vbsleq.u8','vbslne.u8','vbslcs.u8','vbslhs.u8','vbslcc.u8','vbsllo.u8','vbslmi.u8','vbslpl.u8','vbslvs.u8','vbslvc.u8','vbslhi.u8','vbslls.u8','vbslge.u8','vbsllt.u8','vbslgt.u8','vbslle.u8',
            'vbsleq.u16','vbslne.u16','vbslcs.u16','vbslhs.u16','vbslcc.u16','vbsllo.u16','vbslmi.u16','vbslpl.u16','vbslvs.u16','vbslvc.u16','vbslhi.u16','vbslls.u16','vbslge.u16','vbsllt.u16','vbslgt.u16','vbslle.u16',
            'vbsleq.u32','vbslne.u32','vbslcs.u32','vbslhs.u32','vbslcc.u32','vbsllo.u32','vbslmi.u32','vbslpl.u32','vbslvs.u32','vbslvc.u32','vbslhi.u32','vbslls.u32','vbslge.u32','vbsllt.u32','vbslgt.u32','vbslle.u32',
            'vbsleq.u64','vbslne.u64','vbslcs.u64','vbslhs.u64','vbslcc.u64','vbsllo.u64','vbslmi.u64','vbslpl.u64','vbslvs.u64','vbslvc.u64','vbslhi.u64','vbslls.u64','vbslge.u64','vbsllt.u64','vbslgt.u64','vbslle.u64',
            'vbsleq.f32','vbslne.f32','vbslcs.f32','vbslhs.f32','vbslcc.f32','vbsllo.f32','vbslmi.f32','vbslpl.f32','vbslvs.f32','vbslvc.f32','vbslhi.f32','vbslls.f32','vbslge.f32','vbsllt.f32','vbslgt.f32','vbslle.f32',
            'vbsleq.f64','vbslne.f64','vbslcs.f64','vbslhs.f64','vbslcc.f64','vbsllo.f64','vbslmi.f64','vbslpl.f64','vbslvs.f64','vbslvc.f64','vbslhi.f64','vbslls.f64','vbslge.f64','vbsllt.f64','vbslgt.f64','vbslle.f64',

            'veoreq','veorne','veorcs','veorhs','veorcc','veorlo','veormi','veorpl','veorvs','veorvc','veorhi','veorls','veorge','veorlt','veorgt','veorle',
            'veoreq.i8','veorne.i8','veorcs.i8','veorhs.i8','veorcc.i8','veorlo.i8','veormi.i8','veorpl.i8','veorvs.i8','veorvc.i8','veorhi.i8','veorls.i8','veorge.i8','veorlt.i8','veorgt.i8','veorle.i8',
            'veoreq.i16','veorne.i16','veorcs.i16','veorhs.i16','veorcc.i16','veorlo.i16','veormi.i16','veorpl.i16','veorvs.i16','veorvc.i16','veorhi.i16','veorls.i16','veorge.i16','veorlt.i16','veorgt.i16','veorle.i16',
            'veoreq.i32','veorne.i32','veorcs.i32','veorhs.i32','veorcc.i32','veorlo.i32','veormi.i32','veorpl.i32','veorvs.i32','veorvc.i32','veorhi.i32','veorls.i32','veorge.i32','veorlt.i32','veorgt.i32','veorle.i32',
            'veoreq.i64','veorne.i64','veorcs.i64','veorhs.i64','veorcc.i64','veorlo.i64','veormi.i64','veorpl.i64','veorvs.i64','veorvc.i64','veorhi.i64','veorls.i64','veorge.i64','veorlt.i64','veorgt.i64','veorle.i64',
            'veoreq.s8','veorne.s8','veorcs.s8','veorhs.s8','veorcc.s8','veorlo.s8','veormi.s8','veorpl.s8','veorvs.s8','veorvc.s8','veorhi.s8','veorls.s8','veorge.s8','veorlt.s8','veorgt.s8','veorle.s8',
            'veoreq.s16','veorne.s16','veorcs.s16','veorhs.s16','veorcc.s16','veorlo.s16','veormi.s16','veorpl.s16','veorvs.s16','veorvc.s16','veorhi.s16','veorls.s16','veorge.s16','veorlt.s16','veorgt.s16','veorle.s16',
            'veoreq.s32','veorne.s32','veorcs.s32','veorhs.s32','veorcc.s32','veorlo.s32','veormi.s32','veorpl.s32','veorvs.s32','veorvc.s32','veorhi.s32','veorls.s32','veorge.s32','veorlt.s32','veorgt.s32','veorle.s32',
            'veoreq.s64','veorne.s64','veorcs.s64','veorhs.s64','veorcc.s64','veorlo.s64','veormi.s64','veorpl.s64','veorvs.s64','veorvc.s64','veorhi.s64','veorls.s64','veorge.s64','veorlt.s64','veorgt.s64','veorle.s64',
            'veoreq.u8','veorne.u8','veorcs.u8','veorhs.u8','veorcc.u8','veorlo.u8','veormi.u8','veorpl.u8','veorvs.u8','veorvc.u8','veorhi.u8','veorls.u8','veorge.u8','veorlt.u8','veorgt.u8','veorle.u8',
            'veoreq.u16','veorne.u16','veorcs.u16','veorhs.u16','veorcc.u16','veorlo.u16','veormi.u16','veorpl.u16','veorvs.u16','veorvc.u16','veorhi.u16','veorls.u16','veorge.u16','veorlt.u16','veorgt.u16','veorle.u16',
            'veoreq.u32','veorne.u32','veorcs.u32','veorhs.u32','veorcc.u32','veorlo.u32','veormi.u32','veorpl.u32','veorvs.u32','veorvc.u32','veorhi.u32','veorls.u32','veorge.u32','veorlt.u32','veorgt.u32','veorle.u32',
            'veoreq.u64','veorne.u64','veorcs.u64','veorhs.u64','veorcc.u64','veorlo.u64','veormi.u64','veorpl.u64','veorvs.u64','veorvc.u64','veorhi.u64','veorls.u64','veorge.u64','veorlt.u64','veorgt.u64','veorle.u64',
            'veoreq.f32','veorne.f32','veorcs.f32','veorhs.f32','veorcc.f32','veorlo.f32','veormi.f32','veorpl.f32','veorvs.f32','veorvc.f32','veorhi.f32','veorls.f32','veorge.f32','veorlt.f32','veorgt.f32','veorle.f32',
            'veoreq.f64','veorne.f64','veorcs.f64','veorhs.f64','veorcc.f64','veorlo.f64','veormi.f64','veorpl.f64','veorvs.f64','veorvc.f64','veorhi.f64','veorls.f64','veorge.f64','veorlt.f64','veorgt.f64','veorle.f64',

            'vmoveq','vmovne','vmovcs','vmovhs','vmovcc','vmovlo','vmovmi','vmovpl','vmovvs','vmovvc','vmovhi','vmovls','vmovge','vmovlt','vmovgt','vmovle',
            'vmoveq.8','vmovne.8','vmovcs.8','vmovhs.8','vmovcc.8','vmovlo.8','vmovmi.8','vmovpl.8','vmovvs.8','vmovvc.8','vmovhi.8','vmovls.8','vmovge.8','vmovlt.8','vmovgt.8','vmovle.8',
            'vmoveq.16','vmovne.16','vmovcs.16','vmovhs.16','vmovcc.16','vmovlo.16','vmovmi.16','vmovpl.16','vmovvs.16','vmovvc.16','vmovhi.16','vmovls.16','vmovge.16','vmovlt.16','vmovgt.16','vmovle.16',
            'vmoveq.32','vmovne.32','vmovcs.32','vmovhs.32','vmovcc.32','vmovlo.32','vmovmi.32','vmovpl.32','vmovvs.32','vmovvc.32','vmovhi.32','vmovls.32','vmovge.32','vmovlt.32','vmovgt.32','vmovle.32',
            'vmoveq.i8','vmovne.i8','vmovcs.i8','vmovhs.i8','vmovcc.i8','vmovlo.i8','vmovmi.i8','vmovpl.i8','vmovvs.i8','vmovvc.i8','vmovhi.i8','vmovls.i8','vmovge.i8','vmovlt.i8','vmovgt.i8','vmovle.i8',
            'vmoveq.i16','vmovne.i16','vmovcs.i16','vmovhs.i16','vmovcc.i16','vmovlo.i16','vmovmi.i16','vmovpl.i16','vmovvs.i16','vmovvc.i16','vmovhi.i16','vmovls.i16','vmovge.i16','vmovlt.i16','vmovgt.i16','vmovle.i16',
            'vmoveq.i32','vmovne.i32','vmovcs.i32','vmovhs.i32','vmovcc.i32','vmovlo.i32','vmovmi.i32','vmovpl.i32','vmovvs.i32','vmovvc.i32','vmovhi.i32','vmovls.i32','vmovge.i32','vmovlt.i32','vmovgt.i32','vmovle.i32',
            'vmoveq.i64','vmovne.i64','vmovcs.i64','vmovhs.i64','vmovcc.i64','vmovlo.i64','vmovmi.i64','vmovpl.i64','vmovvs.i64','vmovvc.i64','vmovhi.i64','vmovls.i64','vmovge.i64','vmovlt.i64','vmovgt.i64','vmovle.i64',
            'vmoveq.f32','vmovne.f32','vmovcs.f32','vmovhs.f32','vmovcc.f32','vmovlo.f32','vmovmi.f32','vmovpl.f32','vmovvs.f32','vmovvc.f32','vmovhi.f32','vmovls.f32','vmovge.f32','vmovlt.f32','vmovgt.f32','vmovle.f32',
            'vmoveq.f64','vmovne.f64','vmovcs.f64','vmovhs.f64','vmovcc.f64','vmovlo.f64','vmovmi.f64','vmovpl.f64','vmovvs.f64','vmovvc.f64','vmovhi.f64','vmovls.f64','vmovge.f64','vmovlt.f64','vmovgt.f64','vmovle.f64',

            'vmvneq','vmvnne','vmvncs','vmvnhs','vmvncc','vmvnlo','vmvnmi','vmvnpl','vmvnvs','vmvnvc','vmvnhi','vmvnls','vmvnge','vmvnlt','vmvngt','vmvnle',
            'vmvneq.s8','vmvnne.s8','vmvncs.s8','vmvnhs.s8','vmvncc.s8','vmvnlo.s8','vmvnmi.s8','vmvnpl.s8','vmvnvs.s8','vmvnvc.s8','vmvnhi.s8','vmvnls.s8','vmvnge.s8','vmvnlt.s8','vmvngt.s8','vmvnle.s8',
            'vmvneq.s16','vmvnne.s16','vmvncs.s16','vmvnhs.s16','vmvncc.s16','vmvnlo.s16','vmvnmi.s16','vmvnpl.s16','vmvnvs.s16','vmvnvc.s16','vmvnhi.s16','vmvnls.s16','vmvnge.s16','vmvnlt.s16','vmvngt.s16','vmvnle.s16',
            'vmvneq.s32','vmvnne.s32','vmvncs.s32','vmvnhs.s32','vmvncc.s32','vmvnlo.s32','vmvnmi.s32','vmvnpl.s32','vmvnvs.s32','vmvnvc.s32','vmvnhi.s32','vmvnls.s32','vmvnge.s32','vmvnlt.s32','vmvngt.s32','vmvnle.s32',
            'vmvneq.s64','vmvnne.s64','vmvncs.s64','vmvnhs.s64','vmvncc.s64','vmvnlo.s64','vmvnmi.s64','vmvnpl.s64','vmvnvs.s64','vmvnvc.s64','vmvnhi.s64','vmvnls.s64','vmvnge.s64','vmvnlt.s64','vmvngt.s64','vmvnle.s64',
            'vmvneq.u8','vmvnne.u8','vmvncs.u8','vmvnhs.u8','vmvncc.u8','vmvnlo.u8','vmvnmi.u8','vmvnpl.u8','vmvnvs.u8','vmvnvc.u8','vmvnhi.u8','vmvnls.u8','vmvnge.u8','vmvnlt.u8','vmvngt.u8','vmvnle.u8',
            'vmvneq.u16','vmvnne.u16','vmvncs.u16','vmvnhs.u16','vmvncc.u16','vmvnlo.u16','vmvnmi.u16','vmvnpl.u16','vmvnvs.u16','vmvnvc.u16','vmvnhi.u16','vmvnls.u16','vmvnge.u16','vmvnlt.u16','vmvngt.u16','vmvnle.u16',
            'vmvneq.u32','vmvnne.u32','vmvncs.u32','vmvnhs.u32','vmvncc.u32','vmvnlo.u32','vmvnmi.u32','vmvnpl.u32','vmvnvs.u32','vmvnvc.u32','vmvnhi.u32','vmvnls.u32','vmvnge.u32','vmvnlt.u32','vmvngt.u32','vmvnle.u32',
            'vmvneq.u64','vmvnne.u64','vmvncs.u64','vmvnhs.u64','vmvncc.u64','vmvnlo.u64','vmvnmi.u64','vmvnpl.u64','vmvnvs.u64','vmvnvc.u64','vmvnhi.u64','vmvnls.u64','vmvnge.u64','vmvnlt.u64','vmvngt.u64','vmvnle.u64',
            'vmvneq.i8','vmvnne.i8','vmvncs.i8','vmvnhs.i8','vmvncc.i8','vmvnlo.i8','vmvnmi.i8','vmvnpl.i8','vmvnvs.i8','vmvnvc.i8','vmvnhi.i8','vmvnls.i8','vmvnge.i8','vmvnlt.i8','vmvngt.i8','vmvnle.i8',
            'vmvneq.i16','vmvnne.i16','vmvncs.i16','vmvnhs.i16','vmvncc.i16','vmvnlo.i16','vmvnmi.i16','vmvnpl.i16','vmvnvs.i16','vmvnvc.i16','vmvnhi.i16','vmvnls.i16','vmvnge.i16','vmvnlt.i16','vmvngt.i16','vmvnle.i16',
            'vmvneq.i32','vmvnne.i32','vmvncs.i32','vmvnhs.i32','vmvncc.i32','vmvnlo.i32','vmvnmi.i32','vmvnpl.i32','vmvnvs.i32','vmvnvc.i32','vmvnhi.i32','vmvnls.i32','vmvnge.i32','vmvnlt.i32','vmvngt.i32','vmvnle.i32',
            'vmvneq.i64','vmvnne.i64','vmvncs.i64','vmvnhs.i64','vmvncc.i64','vmvnlo.i64','vmvnmi.i64','vmvnpl.i64','vmvnvs.i64','vmvnvc.i64','vmvnhi.i64','vmvnls.i64','vmvnge.i64','vmvnlt.i64','vmvngt.i64','vmvnle.i64',
            'vmvneq.f32','vmvnne.f32','vmvncs.f32','vmvnhs.f32','vmvncc.f32','vmvnlo.f32','vmvnmi.f32','vmvnpl.f32','vmvnvs.f32','vmvnvc.f32','vmvnhi.f32','vmvnls.f32','vmvnge.f32','vmvnlt.f32','vmvngt.f32','vmvnle.f32',
            'vmvneq.f64','vmvnne.f64','vmvncs.f64','vmvnhs.f64','vmvncc.f64','vmvnlo.f64','vmvnmi.f64','vmvnpl.f64','vmvnvs.f64','vmvnvc.f64','vmvnhi.f64','vmvnls.f64','vmvnge.f64','vmvnlt.f64','vmvngt.f64','vmvnle.f64',

            'vorneq','vornne','vorncs','vornhs','vorncc','vornlo','vornmi','vornpl','vornvs','vornvc','vornhi','vornls','vornge','vornlt','vorngt','vornle',
            'vorneq.s8','vornne.s8','vorncs.s8','vornhs.s8','vorncc.s8','vornlo.s8','vornmi.s8','vornpl.s8','vornvs.s8','vornvc.s8','vornhi.s8','vornls.s8','vornge.s8','vornlt.s8','vorngt.s8','vornle.s8',
            'vorneq.s16','vornne.s16','vorncs.s16','vornhs.s16','vorncc.s16','vornlo.s16','vornmi.s16','vornpl.s16','vornvs.s16','vornvc.s16','vornhi.s16','vornls.s16','vornge.s16','vornlt.s16','vorngt.s16','vornle.s16',
            'vorneq.s32','vornne.s32','vorncs.s32','vornhs.s32','vorncc.s32','vornlo.s32','vornmi.s32','vornpl.s32','vornvs.s32','vornvc.s32','vornhi.s32','vornls.s32','vornge.s32','vornlt.s32','vorngt.s32','vornle.s32',
            'vorneq.s64','vornne.s64','vorncs.s64','vornhs.s64','vorncc.s64','vornlo.s64','vornmi.s64','vornpl.s64','vornvs.s64','vornvc.s64','vornhi.s64','vornls.s64','vornge.s64','vornlt.s64','vorngt.s64','vornle.s64',
            'vorneq.u8','vornne.u8','vorncs.u8','vornhs.u8','vorncc.u8','vornlo.u8','vornmi.u8','vornpl.u8','vornvs.u8','vornvc.u8','vornhi.u8','vornls.u8','vornge.u8','vornlt.u8','vorngt.u8','vornle.u8',
            'vorneq.u16','vornne.u16','vorncs.u16','vornhs.u16','vorncc.u16','vornlo.u16','vornmi.u16','vornpl.u16','vornvs.u16','vornvc.u16','vornhi.u16','vornls.u16','vornge.u16','vornlt.u16','vorngt.u16','vornle.u16',
            'vorneq.u32','vornne.u32','vorncs.u32','vornhs.u32','vorncc.u32','vornlo.u32','vornmi.u32','vornpl.u32','vornvs.u32','vornvc.u32','vornhi.u32','vornls.u32','vornge.u32','vornlt.u32','vorngt.u32','vornle.u32',
            'vorneq.u64','vornne.u64','vorncs.u64','vornhs.u64','vorncc.u64','vornlo.u64','vornmi.u64','vornpl.u64','vornvs.u64','vornvc.u64','vornhi.u64','vornls.u64','vornge.u64','vornlt.u64','vorngt.u64','vornle.u64',
            'vorneq.i8','vornne.i8','vorncs.i8','vornhs.i8','vorncc.i8','vornlo.i8','vornmi.i8','vornpl.i8','vornvs.i8','vornvc.i8','vornhi.i8','vornls.i8','vornge.i8','vornlt.i8','vorngt.i8','vornle.i8',
            'vorneq.i16','vornne.i16','vorncs.i16','vornhs.i16','vorncc.i16','vornlo.i16','vornmi.i16','vornpl.i16','vornvs.i16','vornvc.i16','vornhi.i16','vornls.i16','vornge.i16','vornlt.i16','vorngt.i16','vornle.i16',
            'vorneq.i32','vornne.i32','vorncs.i32','vornhs.i32','vorncc.i32','vornlo.i32','vornmi.i32','vornpl.i32','vornvs.i32','vornvc.i32','vornhi.i32','vornls.i32','vornge.i32','vornlt.i32','vorngt.i32','vornle.i32',
            'vorneq.i64','vornne.i64','vorncs.i64','vornhs.i64','vorncc.i64','vornlo.i64','vornmi.i64','vornpl.i64','vornvs.i64','vornvc.i64','vornhi.i64','vornls.i64','vornge.i64','vornlt.i64','vorngt.i64','vornle.i64',
            'vorneq.f32','vornne.f32','vorncs.f32','vornhs.f32','vorncc.f32','vornlo.f32','vornmi.f32','vornpl.f32','vornvs.f32','vornvc.f32','vornhi.f32','vornls.f32','vornge.f32','vornlt.f32','vorngt.f32','vornle.f32',
            'vorneq.f64','vornne.f64','vorncs.f64','vornhs.f64','vorncc.f64','vornlo.f64','vornmi.f64','vornpl.f64','vornvs.f64','vornvc.f64','vornhi.f64','vornls.f64','vornge.f64','vornlt.f64','vorngt.f64','vornle.f64',

            'vorreq','vorrne','vorrcs','vorrhs','vorrcc','vorrlo','vorrmi','vorrpl','vorrvs','vorrvc','vorrhi','vorrls','vorrge','vorrlt','vorrgt','vorrle',
            'vorreq.s8','vorrne.s8','vorrcs.s8','vorrhs.s8','vorrcc.s8','vorrlo.s8','vorrmi.s8','vorrpl.s8','vorrvs.s8','vorrvc.s8','vorrhi.s8','vorrls.s8','vorrge.s8','vorrlt.s8','vorrgt.s8','vorrle.s8',
            'vorreq.s16','vorrne.s16','vorrcs.s16','vorrhs.s16','vorrcc.s16','vorrlo.s16','vorrmi.s16','vorrpl.s16','vorrvs.s16','vorrvc.s16','vorrhi.s16','vorrls.s16','vorrge.s16','vorrlt.s16','vorrgt.s16','vorrle.s16',
            'vorreq.s32','vorrne.s32','vorrcs.s32','vorrhs.s32','vorrcc.s32','vorrlo.s32','vorrmi.s32','vorrpl.s32','vorrvs.s32','vorrvc.s32','vorrhi.s32','vorrls.s32','vorrge.s32','vorrlt.s32','vorrgt.s32','vorrle.s32',
            'vorreq.s64','vorrne.s64','vorrcs.s64','vorrhs.s64','vorrcc.s64','vorrlo.s64','vorrmi.s64','vorrpl.s64','vorrvs.s64','vorrvc.s64','vorrhi.s64','vorrls.s64','vorrge.s64','vorrlt.s64','vorrgt.s64','vorrle.s64',
            'vorreq.u8','vorrne.u8','vorrcs.u8','vorrhs.u8','vorrcc.u8','vorrlo.u8','vorrmi.u8','vorrpl.u8','vorrvs.u8','vorrvc.u8','vorrhi.u8','vorrls.u8','vorrge.u8','vorrlt.u8','vorrgt.u8','vorrle.u8',
            'vorreq.u16','vorrne.u16','vorrcs.u16','vorrhs.u16','vorrcc.u16','vorrlo.u16','vorrmi.u16','vorrpl.u16','vorrvs.u16','vorrvc.u16','vorrhi.u16','vorrls.u16','vorrge.u16','vorrlt.u16','vorrgt.u16','vorrle.u16',
            'vorreq.u32','vorrne.u32','vorrcs.u32','vorrhs.u32','vorrcc.u32','vorrlo.u32','vorrmi.u32','vorrpl.u32','vorrvs.u32','vorrvc.u32','vorrhi.u32','vorrls.u32','vorrge.u32','vorrlt.u32','vorrgt.u32','vorrle.u32',
            'vorreq.u64','vorrne.u64','vorrcs.u64','vorrhs.u64','vorrcc.u64','vorrlo.u64','vorrmi.u64','vorrpl.u64','vorrvs.u64','vorrvc.u64','vorrhi.u64','vorrls.u64','vorrge.u64','vorrlt.u64','vorrgt.u64','vorrle.u64',
            'vorreq.i8','vorrne.i8','vorrcs.i8','vorrhs.i8','vorrcc.i8','vorrlo.i8','vorrmi.i8','vorrpl.i8','vorrvs.i8','vorrvc.i8','vorrhi.i8','vorrls.i8','vorrge.i8','vorrlt.i8','vorrgt.i8','vorrle.i8',
            'vorreq.i16','vorrne.i16','vorrcs.i16','vorrhs.i16','vorrcc.i16','vorrlo.i16','vorrmi.i16','vorrpl.i16','vorrvs.i16','vorrvc.i16','vorrhi.i16','vorrls.i16','vorrge.i16','vorrlt.i16','vorrgt.i16','vorrle.i16',
            'vorreq.i32','vorrne.i32','vorrcs.i32','vorrhs.i32','vorrcc.i32','vorrlo.i32','vorrmi.i32','vorrpl.i32','vorrvs.i32','vorrvc.i32','vorrhi.i32','vorrls.i32','vorrge.i32','vorrlt.i32','vorrgt.i32','vorrle.i32',
            'vorreq.i64','vorrne.i64','vorrcs.i64','vorrhs.i64','vorrcc.i64','vorrlo.i64','vorrmi.i64','vorrpl.i64','vorrvs.i64','vorrvc.i64','vorrhi.i64','vorrls.i64','vorrge.i64','vorrlt.i64','vorrgt.i64','vorrle.i64',
            'vorreq.f32','vorrne.f32','vorrcs.f32','vorrhs.f32','vorrcc.f32','vorrlo.f32','vorrmi.f32','vorrpl.f32','vorrvs.f32','vorrvc.f32','vorrhi.f32','vorrls.f32','vorrge.f32','vorrlt.f32','vorrgt.f32','vorrle.f32',
            'vorreq.f64','vorrne.f64','vorrcs.f64','vorrhs.f64','vorrcc.f64','vorrlo.f64','vorrmi.f64','vorrpl.f64','vorrvs.f64','vorrvc.f64','vorrhi.f64','vorrls.f64','vorrge.f64','vorrlt.f64','vorrgt.f64','vorrle.f64',

            'vswpeq','vswpne','vswpcs','vswphs','vswpcc','vswplo','vswpmi','vswppl','vswpvs','vswpvc','vswphi','vswpls','vswpge','vswplt','vswpgt','vswple',
            'vswpeq.s8','vswpne.s8','vswpcs.s8','vswphs.s8','vswpcc.s8','vswplo.s8','vswpmi.s8','vswppl.s8','vswpvs.s8','vswpvc.s8','vswphi.s8','vswpls.s8','vswpge.s8','vswplt.s8','vswpgt.s8','vswple.s8',
            'vswpeq.s16','vswpne.s16','vswpcs.s16','vswphs.s16','vswpcc.s16','vswplo.s16','vswpmi.s16','vswppl.s16','vswpvs.s16','vswpvc.s16','vswphi.s16','vswpls.s16','vswpge.s16','vswplt.s16','vswpgt.s16','vswple.s16',
            'vswpeq.s32','vswpne.s32','vswpcs.s32','vswphs.s32','vswpcc.s32','vswplo.s32','vswpmi.s32','vswppl.s32','vswpvs.s32','vswpvc.s32','vswphi.s32','vswpls.s32','vswpge.s32','vswplt.s32','vswpgt.s32','vswple.s32',
            'vswpeq.s64','vswpne.s64','vswpcs.s64','vswphs.s64','vswpcc.s64','vswplo.s64','vswpmi.s64','vswppl.s64','vswpvs.s64','vswpvc.s64','vswphi.s64','vswpls.s64','vswpge.s64','vswplt.s64','vswpgt.s64','vswple.s64',
            'vswpeq.u8','vswpne.u8','vswpcs.u8','vswphs.u8','vswpcc.u8','vswplo.u8','vswpmi.u8','vswppl.u8','vswpvs.u8','vswpvc.u8','vswphi.u8','vswpls.u8','vswpge.u8','vswplt.u8','vswpgt.u8','vswple.u8',
            'vswpeq.u16','vswpne.u16','vswpcs.u16','vswphs.u16','vswpcc.u16','vswplo.u16','vswpmi.u16','vswppl.u16','vswpvs.u16','vswpvc.u16','vswphi.u16','vswpls.u16','vswpge.u16','vswplt.u16','vswpgt.u16','vswple.u16',
            'vswpeq.u32','vswpne.u32','vswpcs.u32','vswphs.u32','vswpcc.u32','vswplo.u32','vswpmi.u32','vswppl.u32','vswpvs.u32','vswpvc.u32','vswphi.u32','vswpls.u32','vswpge.u32','vswplt.u32','vswpgt.u32','vswple.u32',
            'vswpeq.u64','vswpne.u64','vswpcs.u64','vswphs.u64','vswpcc.u64','vswplo.u64','vswpmi.u64','vswppl.u64','vswpvs.u64','vswpvc.u64','vswphi.u64','vswpls.u64','vswpge.u64','vswplt.u64','vswpgt.u64','vswple.u64',
            'vswpeq.i8','vswpne.i8','vswpcs.i8','vswphs.i8','vswpcc.i8','vswplo.i8','vswpmi.i8','vswppl.i8','vswpvs.i8','vswpvc.i8','vswphi.i8','vswpls.i8','vswpge.i8','vswplt.i8','vswpgt.i8','vswple.i8',
            'vswpeq.i16','vswpne.i16','vswpcs.i16','vswphs.i16','vswpcc.i16','vswplo.i16','vswpmi.i16','vswppl.i16','vswpvs.i16','vswpvc.i16','vswphi.i16','vswpls.i16','vswpge.i16','vswplt.i16','vswpgt.i16','vswple.i16',
            'vswpeq.i32','vswpne.i32','vswpcs.i32','vswphs.i32','vswpcc.i32','vswplo.i32','vswpmi.i32','vswppl.i32','vswpvs.i32','vswpvc.i32','vswphi.i32','vswpls.i32','vswpge.i32','vswplt.i32','vswpgt.i32','vswple.i32',
            'vswpeq.i64','vswpne.i64','vswpcs.i64','vswphs.i64','vswpcc.i64','vswplo.i64','vswpmi.i64','vswppl.i64','vswpvs.i64','vswpvc.i64','vswphi.i64','vswpls.i64','vswpge.i64','vswplt.i64','vswpgt.i64','vswple.i64',
            'vswpeq.f32','vswpne.f32','vswpcs.f32','vswphs.f32','vswpcc.f32','vswplo.f32','vswpmi.f32','vswppl.f32','vswpvs.f32','vswpvc.f32','vswphi.f32','vswpls.f32','vswpge.f32','vswplt.f32','vswpgt.f32','vswple.f32',
            'vswpeq.f64','vswpne.f64','vswpcs.f64','vswphs.f64','vswpcc.f64','vswplo.f64','vswpmi.f64','vswppl.f64','vswpvs.f64','vswpvc.f64','vswphi.f64','vswpls.f64','vswpge.f64','vswplt.f64','vswpgt.f64','vswple.f64'
            ),
        /* Conditional NEON SIMD ARM Registers Interop Instructions */
        29 => array(
            'vmrseq','vmrsne','vmrscs','vmrshs','vmrscc','vmrslo','vmrsmi','vmrspl','vmrsvs','vmrsvc','vmrshi','vmrsls','vmrsge','vmrslt','vmrsgt','vmrsle',
            'vmsreq','vmsrne','vmsrcs','vmsrhs','vmsrcc','vmsrlo','vmsrmi','vmsrpl','vmsrvs','vmsrvc','vmsrhi','vmsrls','vmsrge','vmsrlt','vmsrgt','vmsrle'
            ),
        /* Conditional NEON SIMD Bit/Byte-Level Instructions */
        30 => array(
            'vcnteq.8','vcntne.8','vcntcs.8','vcnths.8','vcntcc.8','vcntlo.8','vcntmi.8','vcntpl.8','vcntvs.8','vcntvc.8','vcnthi.8','vcntls.8','vcntge.8','vcntlt.8','vcntgt.8','vcntle.8',
            'vdupeq.8','vdupne.8','vdupcs.8','vduphs.8','vdupcc.8','vduplo.8','vdupmi.8','vduppl.8','vdupvs.8','vdupvc.8','vduphi.8','vdupls.8','vdupge.8','vduplt.8','vdupgt.8','vduple.8',

            'vdupeq.16','vdupne.16','vdupcs.16','vduphs.16','vdupcc.16','vduplo.16','vdupmi.16','vduppl.16','vdupvs.16','vdupvc.16','vduphi.16','vdupls.16','vdupge.16','vduplt.16','vdupgt.16','vduple.16',
            'vdupeq.32','vdupne.32','vdupcs.32','vduphs.32','vdupcc.32','vduplo.32','vdupmi.32','vduppl.32','vdupvs.32','vdupvc.32','vduphi.32','vdupls.32','vdupge.32','vduplt.32','vdupgt.32','vduple.32',

            'vexteq.8','vextne.8','vextcs.8','vexths.8','vextcc.8','vextlo.8','vextmi.8','vextpl.8','vextvs.8','vextvc.8','vexthi.8','vextls.8','vextge.8','vextlt.8','vextgt.8','vextle.8',
            'vexteq.16','vextne.16','vextcs.16','vexths.16','vextcc.16','vextlo.16','vextmi.16','vextpl.16','vextvs.16','vextvc.16','vexthi.16','vextls.16','vextge.16','vextlt.16','vextgt.16','vextle.16',

            'vexteq.32','vextne.32','vextcs.32','vexths.32','vextcc.32','vextlo.32','vextmi.32','vextpl.32','vextvs.32','vextvc.32','vexthi.32','vextls.32','vextge.32','vextlt.32','vextgt.32','vextle.32',
            'vexteq.64','vextne.64','vextcs.64','vexths.64','vextcc.64','vextlo.64','vextmi.64','vextpl.64','vextvs.64','vextvc.64','vexthi.64','vextls.64','vextge.64','vextlt.64','vextgt.64','vextle.64',

            'vrev16eq.8','vrev16ne.8','vrev16cs.8','vrev16hs.8','vrev16cc.8','vrev16lo.8','vrev16mi.8','vrev16pl.8','vrev16vs.8','vrev16vc.8','vrev16hi.8','vrev16ls.8','vrev16ge.8','vrev16lt.8','vrev16gt.8','vrev16le.8',
            'vrev32eq.8','vrev32ne.8','vrev32cs.8','vrev32hs.8','vrev32cc.8','vrev32lo.8','vrev32mi.8','vrev32pl.8','vrev32vs.8','vrev32vc.8','vrev32hi.8','vrev32ls.8','vrev32ge.8','vrev32lt.8','vrev32gt.8','vrev32le.8',
            'vrev32eq.16','vrev32ne.16','vrev32cs.16','vrev32hs.16','vrev32cc.16','vrev32lo.16','vrev32mi.16','vrev32pl.16','vrev32vs.16','vrev32vc.16','vrev32hi.16','vrev32ls.16','vrev32ge.16','vrev32lt.16','vrev32gt.16','vrev32le.16',
            'vrev64eq.8','vrev64ne.8','vrev64cs.8','vrev64hs.8','vrev64cc.8','vrev64lo.8','vrev64mi.8','vrev64pl.8','vrev64vs.8','vrev64vc.8','vrev64hi.8','vrev64ls.8','vrev64ge.8','vrev64lt.8','vrev64gt.8','vrev64le.8',
            'vrev64eq.16','vrev64ne.16','vrev64cs.16','vrev64hs.16','vrev64cc.16','vrev64lo.16','vrev64mi.16','vrev64pl.16','vrev64vs.16','vrev64vc.16','vrev64hi.16','vrev64ls.16','vrev64ge.16','vrev64lt.16','vrev64gt.16','vrev64le.16',
            'vrev64eq.32','vrev64ne.32','vrev64cs.32','vrev64hs.32','vrev64cc.32','vrev64lo.32','vrev64mi.32','vrev64pl.32','vrev64vs.32','vrev64vc.32','vrev64hi.32','vrev64ls.32','vrev64ge.32','vrev64lt.32','vrev64gt.32','vrev64le.32',

            'vslieq.8','vsline.8','vslics.8','vslihs.8','vslicc.8','vslilo.8','vslimi.8','vslipl.8','vslivs.8','vslivc.8','vslihi.8','vslils.8','vslige.8','vslilt.8','vsligt.8','vslile.8',
            'vslieq.16','vsline.16','vslics.16','vslihs.16','vslicc.16','vslilo.16','vslimi.16','vslipl.16','vslivs.16','vslivc.16','vslihi.16','vslils.16','vslige.16','vslilt.16','vsligt.16','vslile.16',
            'vslieq.32','vsline.32','vslics.32','vslihs.32','vslicc.32','vslilo.32','vslimi.32','vslipl.32','vslivs.32','vslivc.32','vslihi.32','vslils.32','vslige.32','vslilt.32','vsligt.32','vslile.32',
            'vslieq.64','vsline.64','vslics.64','vslihs.64','vslicc.64','vslilo.64','vslimi.64','vslipl.64','vslivs.64','vslivc.64','vslihi.64','vslils.64','vslige.64','vslilt.64','vsligt.64','vslile.64',

            'vsrieq.8','vsrine.8','vsrics.8','vsrihs.8','vsricc.8','vsrilo.8','vsrimi.8','vsripl.8','vsrivs.8','vsrivc.8','vsrihi.8','vsrils.8','vsrige.8','vsrilt.8','vsrigt.8','vsrile.8',
            'vsrieq.16','vsrine.16','vsrics.16','vsrihs.16','vsricc.16','vsrilo.16','vsrimi.16','vsripl.16','vsrivs.16','vsrivc.16','vsrihi.16','vsrils.16','vsrige.16','vsrilt.16','vsrigt.16','vsrile.16',
            'vsrieq.32','vsrine.32','vsrics.32','vsrihs.32','vsricc.32','vsrilo.32','vsrimi.32','vsripl.32','vsrivs.32','vsrivc.32','vsrihi.32','vsrils.32','vsrige.32','vsrilt.32','vsrigt.32','vsrile.32',
            'vsrieq.64','vsrine.64','vsrics.64','vsrihs.64','vsricc.64','vsrilo.64','vsrimi.64','vsripl.64','vsrivs.64','vsrivc.64','vsrihi.64','vsrils.64','vsrige.64','vsrilt.64','vsrigt.64','vsrile.64',

            'vtbleq.8','vtblne.8','vtblcs.8','vtblhs.8','vtblcc.8','vtbllo.8','vtblmi.8','vtblpl.8','vtblvs.8','vtblvc.8','vtblhi.8','vtblls.8','vtblge.8','vtbllt.8','vtblgt.8','vtblle.8',

            'vtbxeq','vtbxne','vtbxcs','vtbxhs','vtbxcc','vtbxlo','vtbxmi','vtbxpl','vtbxvs','vtbxvc','vtbxhi','vtbxls','vtbxge','vtbxlt','vtbxgt','vtbxle',

            'vtrneq.8','vtrnne.8','vtrncs.8','vtrnhs.8','vtrncc.8','vtrnlo.8','vtrnmi.8','vtrnpl.8','vtrnvs.8','vtrnvc.8','vtrnhi.8','vtrnls.8','vtrnge.8','vtrnlt.8','vtrngt.8','vtrnle.8',
            'vtrneq.16','vtrnne.16','vtrncs.16','vtrnhs.16','vtrncc.16','vtrnlo.16','vtrnmi.16','vtrnpl.16','vtrnvs.16','vtrnvc.16','vtrnhi.16','vtrnls.16','vtrnge.16','vtrnlt.16','vtrngt.16','vtrnle.16',
            'vtrneq.32','vtrnne.32','vtrncs.32','vtrnhs.32','vtrncc.32','vtrnlo.32','vtrnmi.32','vtrnpl.32','vtrnvs.32','vtrnvc.32','vtrnhi.32','vtrnls.32','vtrnge.32','vtrnlt.32','vtrngt.32','vtrnle.32',

            'vtsteq.8','vtstne.8','vtstcs.8','vtsths.8','vtstcc.8','vtstlo.8','vtstmi.8','vtstpl.8','vtstvs.8','vtstvc.8','vtsthi.8','vtstls.8','vtstge.8','vtstlt.8','vtstgt.8','vtstle.8',
            'vtsteq.16','vtstne.16','vtstcs.16','vtsths.16','vtstcc.16','vtstlo.16','vtstmi.16','vtstpl.16','vtstvs.16','vtstvc.16','vtsthi.16','vtstls.16','vtstge.16','vtstlt.16','vtstgt.16','vtstle.16',
            'vtsteq.32','vtstne.32','vtstcs.32','vtsths.32','vtstcc.32','vtstlo.32','vtstmi.32','vtstpl.32','vtstvs.32','vtstvc.32','vtsthi.32','vtstls.32','vtstge.32','vtstlt.32','vtstgt.32','vtstle.32',

            'vuzpeq.8','vuzpne.8','vuzpcs.8','vuzphs.8','vuzpcc.8','vuzplo.8','vuzpmi.8','vuzppl.8','vuzpvs.8','vuzpvc.8','vuzphi.8','vuzpls.8','vuzpge.8','vuzplt.8','vuzpgt.8','vuzple.8',
            'vuzpeq.16','vuzpne.16','vuzpcs.16','vuzphs.16','vuzpcc.16','vuzplo.16','vuzpmi.16','vuzppl.16','vuzpvs.16','vuzpvc.16','vuzphi.16','vuzpls.16','vuzpge.16','vuzplt.16','vuzpgt.16','vuzple.16',
            'vuzpeq.32','vuzpne.32','vuzpcs.32','vuzphs.32','vuzpcc.32','vuzplo.32','vuzpmi.32','vuzppl.32','vuzpvs.32','vuzpvc.32','vuzphi.32','vuzpls.32','vuzpge.32','vuzplt.32','vuzpgt.32','vuzple.32',

            'vzipeq.8','vzipne.8','vzipcs.8','vziphs.8','vzipcc.8','vziplo.8','vzipmi.8','vzippl.8','vzipvs.8','vzipvc.8','vziphi.8','vzipls.8','vzipge.8','vziplt.8','vzipgt.8','vziple.8',
            'vzipeq.16','vzipne.16','vzipcs.16','vziphs.16','vzipcc.16','vziplo.16','vzipmi.16','vzippl.16','vzipvs.16','vzipvc.16','vziphi.16','vzipls.16','vzipge.16','vziplt.16','vzipgt.16','vziple.16',
            'vzipeq.32','vzipne.32','vzipcs.32','vziphs.32','vzipcc.32','vziplo.32','vzipmi.32','vzippl.32','vzipvs.32','vzipvc.32','vziphi.32','vzipls.32','vzipge.32','vziplt.32','vzipgt.32','vziple.32',

            'vmulleq.p8','vmullne.p8','vmullcs.p8','vmullhs.p8','vmullcc.p8','vmulllo.p8','vmullmi.p8','vmullpl.p8','vmullvs.p8','vmullvc.p8','vmullhi.p8','vmullls.p8','vmullge.p8','vmulllt.p8','vmullgt.p8','vmullle.p8'
            ),
        /* Conditional NEON SIMD Universal Integer Instructions */
        31 => array(
            'vaddeq.i8','vaddne.i8','vaddcs.i8','vaddhs.i8','vaddcc.i8','vaddlo.i8','vaddmi.i8','vaddpl.i8','vaddvs.i8','vaddvc.i8','vaddhi.i8','vaddls.i8','vaddge.i8','vaddlt.i8','vaddgt.i8','vaddle.i8',
            'vaddeq.i16','vaddne.i16','vaddcs.i16','vaddhs.i16','vaddcc.i16','vaddlo.i16','vaddmi.i16','vaddpl.i16','vaddvs.i16','vaddvc.i16','vaddhi.i16','vaddls.i16','vaddge.i16','vaddlt.i16','vaddgt.i16','vaddle.i16',
            'vaddeq.i32','vaddne.i32','vaddcs.i32','vaddhs.i32','vaddcc.i32','vaddlo.i32','vaddmi.i32','vaddpl.i32','vaddvs.i32','vaddvc.i32','vaddhi.i32','vaddls.i32','vaddge.i32','vaddlt.i32','vaddgt.i32','vaddle.i32',
            'vaddeq.i64','vaddne.i64','vaddcs.i64','vaddhs.i64','vaddcc.i64','vaddlo.i64','vaddmi.i64','vaddpl.i64','vaddvs.i64','vaddvc.i64','vaddhi.i64','vaddls.i64','vaddge.i64','vaddlt.i64','vaddgt.i64','vaddle.i64',

            'vsubeq.i8','vsubne.i8','vsubcs.i8','vsubhs.i8','vsubcc.i8','vsublo.i8','vsubmi.i8','vsubpl.i8','vsubvs.i8','vsubvc.i8','vsubhi.i8','vsubls.i8','vsubge.i8','vsublt.i8','vsubgt.i8','vsuble.i8',
            'vsubeq.i16','vsubne.i16','vsubcs.i16','vsubhs.i16','vsubcc.i16','vsublo.i16','vsubmi.i16','vsubpl.i16','vsubvs.i16','vsubvc.i16','vsubhi.i16','vsubls.i16','vsubge.i16','vsublt.i16','vsubgt.i16','vsuble.i16',
            'vsubeq.i32','vsubne.i32','vsubcs.i32','vsubhs.i32','vsubcc.i32','vsublo.i32','vsubmi.i32','vsubpl.i32','vsubvs.i32','vsubvc.i32','vsubhi.i32','vsubls.i32','vsubge.i32','vsublt.i32','vsubgt.i32','vsuble.i32',
            'vsubeq.i64','vsubne.i64','vsubcs.i64','vsubhs.i64','vsubcc.i64','vsublo.i64','vsubmi.i64','vsubpl.i64','vsubvs.i64','vsubvc.i64','vsubhi.i64','vsubls.i64','vsubge.i64','vsublt.i64','vsubgt.i64','vsuble.i64',

            'vaddhneq.i16','vaddhnne.i16','vaddhncs.i16','vaddhnhs.i16','vaddhncc.i16','vaddhnlo.i16','vaddhnmi.i16','vaddhnpl.i16','vaddhnvs.i16','vaddhnvc.i16','vaddhnhi.i16','vaddhnls.i16','vaddhnge.i16','vaddhnlt.i16','vaddhngt.i16','vaddhnle.i16',
            'vaddhneq.i32','vaddhnne.i32','vaddhncs.i32','vaddhnhs.i32','vaddhncc.i32','vaddhnlo.i32','vaddhnmi.i32','vaddhnpl.i32','vaddhnvs.i32','vaddhnvc.i32','vaddhnhi.i32','vaddhnls.i32','vaddhnge.i32','vaddhnlt.i32','vaddhngt.i32','vaddhnle.i32',
            'vaddhneq.i64','vaddhnne.i64','vaddhncs.i64','vaddhnhs.i64','vaddhncc.i64','vaddhnlo.i64','vaddhnmi.i64','vaddhnpl.i64','vaddhnvs.i64','vaddhnvc.i64','vaddhnhi.i64','vaddhnls.i64','vaddhnge.i64','vaddhnlt.i64','vaddhngt.i64','vaddhnle.i64',

            'vsubhneq.i16','vsubhnne.i16','vsubhncs.i16','vsubhnhs.i16','vsubhncc.i16','vsubhnlo.i16','vsubhnmi.i16','vsubhnpl.i16','vsubhnvs.i16','vsubhnvc.i16','vsubhnhi.i16','vsubhnls.i16','vsubhnge.i16','vsubhnlt.i16','vsubhngt.i16','vsubhnle.i16',
            'vsubhneq.i32','vsubhnne.i32','vsubhncs.i32','vsubhnhs.i32','vsubhncc.i32','vsubhnlo.i32','vsubhnmi.i32','vsubhnpl.i32','vsubhnvs.i32','vsubhnvc.i32','vsubhnhi.i32','vsubhnls.i32','vsubhnge.i32','vsubhnlt.i32','vsubhngt.i32','vsubhnle.i32',
            'vsubhneq.i64','vsubhnne.i64','vsubhncs.i64','vsubhnhs.i64','vsubhncc.i64','vsubhnlo.i64','vsubhnmi.i64','vsubhnpl.i64','vsubhnvs.i64','vsubhnvc.i64','vsubhnhi.i64','vsubhnls.i64','vsubhnge.i64','vsubhnlt.i64','vsubhngt.i64','vsubhnle.i64',

            'vraddhneq.i16','vraddhnne.i16','vraddhncs.i16','vraddhnhs.i16','vraddhncc.i16','vraddhnlo.i16','vraddhnmi.i16','vraddhnpl.i16','vraddhnvs.i16','vraddhnvc.i16','vraddhnhi.i16','vraddhnls.i16','vraddhnge.i16','vraddhnlt.i16','vraddhngt.i16','vraddhnle.i16',
            'vraddhneq.i32','vraddhnne.i32','vraddhncs.i32','vraddhnhs.i32','vraddhncc.i32','vraddhnlo.i32','vraddhnmi.i32','vraddhnpl.i32','vraddhnvs.i32','vraddhnvc.i32','vraddhnhi.i32','vraddhnls.i32','vraddhnge.i32','vraddhnlt.i32','vraddhngt.i32','vraddhnle.i32',
            'vraddhneq.i64','vraddhnne.i64','vraddhncs.i64','vraddhnhs.i64','vraddhncc.i64','vraddhnlo.i64','vraddhnmi.i64','vraddhnpl.i64','vraddhnvs.i64','vraddhnvc.i64','vraddhnhi.i64','vraddhnls.i64','vraddhnge.i64','vraddhnlt.i64','vraddhngt.i64','vraddhnle.i64',

            'vrsubhneq.i16','vrsubhnne.i16','vrsubhncs.i16','vrsubhnhs.i16','vrsubhncc.i16','vrsubhnlo.i16','vrsubhnmi.i16','vrsubhnpl.i16','vrsubhnvs.i16','vrsubhnvc.i16','vrsubhnhi.i16','vrsubhnls.i16','vrsubhnge.i16','vrsubhnlt.i16','vrsubhngt.i16','vrsubhnle.i16',
            'vrsubhneq.i32','vrsubhnne.i32','vrsubhncs.i32','vrsubhnhs.i32','vrsubhncc.i32','vrsubhnlo.i32','vrsubhnmi.i32','vrsubhnpl.i32','vrsubhnvs.i32','vrsubhnvc.i32','vrsubhnhi.i32','vrsubhnls.i32','vrsubhnge.i32','vrsubhnlt.i32','vrsubhngt.i32','vrsubhnle.i32',
            'vrsubhneq.i64','vrsubhnne.i64','vrsubhncs.i64','vrsubhnhs.i64','vrsubhncc.i64','vrsubhnlo.i64','vrsubhnmi.i64','vrsubhnpl.i64','vrsubhnvs.i64','vrsubhnvc.i64','vrsubhnhi.i64','vrsubhnls.i64','vrsubhnge.i64','vrsubhnlt.i64','vrsubhngt.i64','vrsubhnle.i64',

            'vpaddeq.i8','vpaddne.i8','vpaddcs.i8','vpaddhs.i8','vpaddcc.i8','vpaddlo.i8','vpaddmi.i8','vpaddpl.i8','vpaddvs.i8','vpaddvc.i8','vpaddhi.i8','vpaddls.i8','vpaddge.i8','vpaddlt.i8','vpaddgt.i8','vpaddle.i8',
            'vpaddeq.i16','vpaddne.i16','vpaddcs.i16','vpaddhs.i16','vpaddcc.i16','vpaddlo.i16','vpaddmi.i16','vpaddpl.i16','vpaddvs.i16','vpaddvc.i16','vpaddhi.i16','vpaddls.i16','vpaddge.i16','vpaddlt.i16','vpaddgt.i16','vpaddle.i16',
            'vpaddeq.i32','vpaddne.i32','vpaddcs.i32','vpaddhs.i32','vpaddcc.i32','vpaddlo.i32','vpaddmi.i32','vpaddpl.i32','vpaddvs.i32','vpaddvc.i32','vpaddhi.i32','vpaddls.i32','vpaddge.i32','vpaddlt.i32','vpaddgt.i32','vpaddle.i32',

            'vceqeq.i8','vceqne.i8','vceqcs.i8','vceqhs.i8','vceqcc.i8','vceqlo.i8','vceqmi.i8','vceqpl.i8','vceqvs.i8','vceqvc.i8','vceqhi.i8','vceqls.i8','vceqge.i8','vceqlt.i8','vceqgt.i8','vceqle.i8',
            'vceqeq.i16','vceqne.i16','vceqcs.i16','vceqhs.i16','vceqcc.i16','vceqlo.i16','vceqmi.i16','vceqpl.i16','vceqvs.i16','vceqvc.i16','vceqhi.i16','vceqls.i16','vceqge.i16','vceqlt.i16','vceqgt.i16','vceqle.i16',
            'vceqeq.i32','vceqne.i32','vceqcs.i32','vceqhs.i32','vceqcc.i32','vceqlo.i32','vceqmi.i32','vceqpl.i32','vceqvs.i32','vceqvc.i32','vceqhi.i32','vceqls.i32','vceqge.i32','vceqlt.i32','vceqgt.i32','vceqle.i32',

            'vclzeq.i8','vclzne.i8','vclzcs.i8','vclzhs.i8','vclzcc.i8','vclzlo.i8','vclzmi.i8','vclzpl.i8','vclzvs.i8','vclzvc.i8','vclzhi.i8','vclzls.i8','vclzge.i8','vclzlt.i8','vclzgt.i8','vclzle.i8',
            'vclzeq.i16','vclzne.i16','vclzcs.i16','vclzhs.i16','vclzcc.i16','vclzlo.i16','vclzmi.i16','vclzpl.i16','vclzvs.i16','vclzvc.i16','vclzhi.i16','vclzls.i16','vclzge.i16','vclzlt.i16','vclzgt.i16','vclzle.i16',
            'vclzeq.i32','vclzne.i32','vclzcs.i32','vclzhs.i32','vclzcc.i32','vclzlo.i32','vclzmi.i32','vclzpl.i32','vclzvs.i32','vclzvc.i32','vclzhi.i32','vclzls.i32','vclzge.i32','vclzlt.i32','vclzgt.i32','vclzle.i32',

            'vmovneq.i16','vmovnne.i16','vmovncs.i16','vmovnhs.i16','vmovncc.i16','vmovnlo.i16','vmovnmi.i16','vmovnpl.i16','vmovnvs.i16','vmovnvc.i16','vmovnhi.i16','vmovnls.i16','vmovnge.i16','vmovnlt.i16','vmovngt.i16','vmovnle.i16',
            'vmovneq.i32','vmovnne.i32','vmovncs.i32','vmovnhs.i32','vmovncc.i32','vmovnlo.i32','vmovnmi.i32','vmovnpl.i32','vmovnvs.i32','vmovnvc.i32','vmovnhi.i32','vmovnls.i32','vmovnge.i32','vmovnlt.i32','vmovngt.i32','vmovnle.i32',
            'vmovneq.i64','vmovnne.i64','vmovncs.i64','vmovnhs.i64','vmovncc.i64','vmovnlo.i64','vmovnmi.i64','vmovnpl.i64','vmovnvs.i64','vmovnvc.i64','vmovnhi.i64','vmovnls.i64','vmovnge.i64','vmovnlt.i64','vmovngt.i64','vmovnle.i64',

            'vmlaeq.s8','vmlane.s8','vmlacs.s8','vmlahs.s8','vmlacc.s8','vmlalo.s8','vmlami.s8','vmlapl.s8','vmlavs.s8','vmlavc.s8','vmlahi.s8','vmlals.s8','vmlage.s8','vmlalt.s8','vmlagt.s8','vmlale.s8',
            'vmlaeq.s16','vmlane.s16','vmlacs.s16','vmlahs.s16','vmlacc.s16','vmlalo.s16','vmlami.s16','vmlapl.s16','vmlavs.s16','vmlavc.s16','vmlahi.s16','vmlals.s16','vmlage.s16','vmlalt.s16','vmlagt.s16','vmlale.s16',
            'vmlaeq.s32','vmlane.s32','vmlacs.s32','vmlahs.s32','vmlacc.s32','vmlalo.s32','vmlami.s32','vmlapl.s32','vmlavs.s32','vmlavc.s32','vmlahi.s32','vmlals.s32','vmlage.s32','vmlalt.s32','vmlagt.s32','vmlale.s32',
            'vmlaeq.u8','vmlane.u8','vmlacs.u8','vmlahs.u8','vmlacc.u8','vmlalo.u8','vmlami.u8','vmlapl.u8','vmlavs.u8','vmlavc.u8','vmlahi.u8','vmlals.u8','vmlage.u8','vmlalt.u8','vmlagt.u8','vmlale.u8',
            'vmlaeq.u16','vmlane.u16','vmlacs.u16','vmlahs.u16','vmlacc.u16','vmlalo.u16','vmlami.u16','vmlapl.u16','vmlavs.u16','vmlavc.u16','vmlahi.u16','vmlals.u16','vmlage.u16','vmlalt.u16','vmlagt.u16','vmlale.u16',
            'vmlaeq.u32','vmlane.u32','vmlacs.u32','vmlahs.u32','vmlacc.u32','vmlalo.u32','vmlami.u32','vmlapl.u32','vmlavs.u32','vmlavc.u32','vmlahi.u32','vmlals.u32','vmlage.u32','vmlalt.u32','vmlagt.u32','vmlale.u32',
            'vmlaeq.i8','vmlane.i8','vmlacs.i8','vmlahs.i8','vmlacc.i8','vmlalo.i8','vmlami.i8','vmlapl.i8','vmlavs.i8','vmlavc.i8','vmlahi.i8','vmlals.i8','vmlage.i8','vmlalt.i8','vmlagt.i8','vmlale.i8',
            'vmlaeq.i16','vmlane.i16','vmlacs.i16','vmlahs.i16','vmlacc.i16','vmlalo.i16','vmlami.i16','vmlapl.i16','vmlavs.i16','vmlavc.i16','vmlahi.i16','vmlals.i16','vmlage.i16','vmlalt.i16','vmlagt.i16','vmlale.i16',
            'vmlaeq.i32','vmlane.i32','vmlacs.i32','vmlahs.i32','vmlacc.i32','vmlalo.i32','vmlami.i32','vmlapl.i32','vmlavs.i32','vmlavc.i32','vmlahi.i32','vmlals.i32','vmlage.i32','vmlalt.i32','vmlagt.i32','vmlale.i32',

            'vmlseq.s8','vmlsne.s8','vmlscs.s8','vmlshs.s8','vmlscc.s8','vmlslo.s8','vmlsmi.s8','vmlspl.s8','vmlsvs.s8','vmlsvc.s8','vmlshi.s8','vmlsls.s8','vmlsge.s8','vmlslt.s8','vmlsgt.s8','vmlsle.s8',
            'vmlseq.s16','vmlsne.s16','vmlscs.s16','vmlshs.s16','vmlscc.s16','vmlslo.s16','vmlsmi.s16','vmlspl.s16','vmlsvs.s16','vmlsvc.s16','vmlshi.s16','vmlsls.s16','vmlsge.s16','vmlslt.s16','vmlsgt.s16','vmlsle.s16',
            'vmlseq.s32','vmlsne.s32','vmlscs.s32','vmlshs.s32','vmlscc.s32','vmlslo.s32','vmlsmi.s32','vmlspl.s32','vmlsvs.s32','vmlsvc.s32','vmlshi.s32','vmlsls.s32','vmlsge.s32','vmlslt.s32','vmlsgt.s32','vmlsle.s32',
            'vmlseq.u8','vmlsne.u8','vmlscs.u8','vmlshs.u8','vmlscc.u8','vmlslo.u8','vmlsmi.u8','vmlspl.u8','vmlsvs.u8','vmlsvc.u8','vmlshi.u8','vmlsls.u8','vmlsge.u8','vmlslt.u8','vmlsgt.u8','vmlsle.u8',
            'vmlseq.u16','vmlsne.u16','vmlscs.u16','vmlshs.u16','vmlscc.u16','vmlslo.u16','vmlsmi.u16','vmlspl.u16','vmlsvs.u16','vmlsvc.u16','vmlshi.u16','vmlsls.u16','vmlsge.u16','vmlslt.u16','vmlsgt.u16','vmlsle.u16',
            'vmlseq.u32','vmlsne.u32','vmlscs.u32','vmlshs.u32','vmlscc.u32','vmlslo.u32','vmlsmi.u32','vmlspl.u32','vmlsvs.u32','vmlsvc.u32','vmlshi.u32','vmlsls.u32','vmlsge.u32','vmlslt.u32','vmlsgt.u32','vmlsle.u32',
            'vmlseq.i8','vmlsne.i8','vmlscs.i8','vmlshs.i8','vmlscc.i8','vmlslo.i8','vmlsmi.i8','vmlspl.i8','vmlsvs.i8','vmlsvc.i8','vmlshi.i8','vmlsls.i8','vmlsge.i8','vmlslt.i8','vmlsgt.i8','vmlsle.i8',
            'vmlseq.i16','vmlsne.i16','vmlscs.i16','vmlshs.i16','vmlscc.i16','vmlslo.i16','vmlsmi.i16','vmlspl.i16','vmlsvs.i16','vmlsvc.i16','vmlshi.i16','vmlsls.i16','vmlsge.i16','vmlslt.i16','vmlsgt.i16','vmlsle.i16',
            'vmlseq.i32','vmlsne.i32','vmlscs.i32','vmlshs.i32','vmlscc.i32','vmlslo.i32','vmlsmi.i32','vmlspl.i32','vmlsvs.i32','vmlsvc.i32','vmlshi.i32','vmlsls.i32','vmlsge.i32','vmlslt.i32','vmlsgt.i32','vmlsle.i32',

            'vmuleq.s8','vmulne.s8','vmulcs.s8','vmulhs.s8','vmulcc.s8','vmullo.s8','vmulmi.s8','vmulpl.s8','vmulvs.s8','vmulvc.s8','vmulhi.s8','vmulls.s8','vmulge.s8','vmullt.s8','vmulgt.s8','vmulle.s8',
            'vmuleq.s16','vmulne.s16','vmulcs.s16','vmulhs.s16','vmulcc.s16','vmullo.s16','vmulmi.s16','vmulpl.s16','vmulvs.s16','vmulvc.s16','vmulhi.s16','vmulls.s16','vmulge.s16','vmullt.s16','vmulgt.s16','vmulle.s16',
            'vmuleq.s32','vmulne.s32','vmulcs.s32','vmulhs.s32','vmulcc.s32','vmullo.s32','vmulmi.s32','vmulpl.s32','vmulvs.s32','vmulvc.s32','vmulhi.s32','vmulls.s32','vmulge.s32','vmullt.s32','vmulgt.s32','vmulle.s32',
            'vmuleq.u8','vmulne.u8','vmulcs.u8','vmulhs.u8','vmulcc.u8','vmullo.u8','vmulmi.u8','vmulpl.u8','vmulvs.u8','vmulvc.u8','vmulhi.u8','vmulls.u8','vmulge.u8','vmullt.u8','vmulgt.u8','vmulle.u8',
            'vmuleq.u16','vmulne.u16','vmulcs.u16','vmulhs.u16','vmulcc.u16','vmullo.u16','vmulmi.u16','vmulpl.u16','vmulvs.u16','vmulvc.u16','vmulhi.u16','vmulls.u16','vmulge.u16','vmullt.u16','vmulgt.u16','vmulle.u16',
            'vmuleq.u32','vmulne.u32','vmulcs.u32','vmulhs.u32','vmulcc.u32','vmullo.u32','vmulmi.u32','vmulpl.u32','vmulvs.u32','vmulvc.u32','vmulhi.u32','vmulls.u32','vmulge.u32','vmullt.u32','vmulgt.u32','vmulle.u32',
            'vmuleq.i8','vmulne.i8','vmulcs.i8','vmulhs.i8','vmulcc.i8','vmullo.i8','vmulmi.i8','vmulpl.i8','vmulvs.i8','vmulvc.i8','vmulhi.i8','vmulls.i8','vmulge.i8','vmullt.i8','vmulgt.i8','vmulle.i8',
            'vmuleq.i16','vmulne.i16','vmulcs.i16','vmulhs.i16','vmulcc.i16','vmullo.i16','vmulmi.i16','vmulpl.i16','vmulvs.i16','vmulvc.i16','vmulhi.i16','vmulls.i16','vmulge.i16','vmullt.i16','vmulgt.i16','vmulle.i16',
            'vmuleq.i32','vmulne.i32','vmulcs.i32','vmulhs.i32','vmulcc.i32','vmullo.i32','vmulmi.i32','vmulpl.i32','vmulvs.i32','vmulvc.i32','vmulhi.i32','vmulls.i32','vmulge.i32','vmullt.i32','vmulgt.i32','vmulle.i32',
            'vmuleq.p8','vmulne.p8','vmulcs.p8','vmulhs.p8','vmulcc.p8','vmullo.p8','vmulmi.p8','vmulpl.p8','vmulvs.p8','vmulvc.p8','vmulhi.p8','vmulls.p8','vmulge.p8','vmullt.p8','vmulgt.p8','vmulle.p8',

            'vrshrneq.i16','vrshrnne.i16','vrshrncs.i16','vrshrnhs.i16','vrshrncc.i16','vrshrnlo.i16','vrshrnmi.i16','vrshrnpl.i16','vrshrnvs.i16','vrshrnvc.i16','vrshrnhi.i16','vrshrnls.i16','vrshrnge.i16','vrshrnlt.i16','vrshrngt.i16','vrshrnle.i16',
            'vrshrneq.i32','vrshrnne.i32','vrshrncs.i32','vrshrnhs.i32','vrshrncc.i32','vrshrnlo.i32','vrshrnmi.i32','vrshrnpl.i32','vrshrnvs.i32','vrshrnvc.i32','vrshrnhi.i32','vrshrnls.i32','vrshrnge.i32','vrshrnlt.i32','vrshrngt.i32','vrshrnle.i32',
            'vrshrneq.i64','vrshrnne.i64','vrshrncs.i64','vrshrnhs.i64','vrshrncc.i64','vrshrnlo.i64','vrshrnmi.i64','vrshrnpl.i64','vrshrnvs.i64','vrshrnvc.i64','vrshrnhi.i64','vrshrnls.i64','vrshrnge.i64','vrshrnlt.i64','vrshrngt.i64','vrshrnle.i64',

            'vshrneq.i16','vshrnne.i16','vshrncs.i16','vshrnhs.i16','vshrncc.i16','vshrnlo.i16','vshrnmi.i16','vshrnpl.i16','vshrnvs.i16','vshrnvc.i16','vshrnhi.i16','vshrnls.i16','vshrnge.i16','vshrnlt.i16','vshrngt.i16','vshrnle.i16',
            'vshrneq.i32','vshrnne.i32','vshrncs.i32','vshrnhs.i32','vshrncc.i32','vshrnlo.i32','vshrnmi.i32','vshrnpl.i32','vshrnvs.i32','vshrnvc.i32','vshrnhi.i32','vshrnls.i32','vshrnge.i32','vshrnlt.i32','vshrngt.i32','vshrnle.i32',
            'vshrneq.i64','vshrnne.i64','vshrncs.i64','vshrnhs.i64','vshrncc.i64','vshrnlo.i64','vshrnmi.i64','vshrnpl.i64','vshrnvs.i64','vshrnvc.i64','vshrnhi.i64','vshrnls.i64','vshrnge.i64','vshrnlt.i64','vshrngt.i64','vshrnle.i64',

            'vshleq.i8','vshlne.i8','vshlcs.i8','vshlhs.i8','vshlcc.i8','vshllo.i8','vshlmi.i8','vshlpl.i8','vshlvs.i8','vshlvc.i8','vshlhi.i8','vshlls.i8','vshlge.i8','vshllt.i8','vshlgt.i8','vshlle.i8',
            'vshleq.i16','vshlne.i16','vshlcs.i16','vshlhs.i16','vshlcc.i16','vshllo.i16','vshlmi.i16','vshlpl.i16','vshlvs.i16','vshlvc.i16','vshlhi.i16','vshlls.i16','vshlge.i16','vshllt.i16','vshlgt.i16','vshlle.i16',
            'vshleq.i32','vshlne.i32','vshlcs.i32','vshlhs.i32','vshlcc.i32','vshllo.i32','vshlmi.i32','vshlpl.i32','vshlvs.i32','vshlvc.i32','vshlhi.i32','vshlls.i32','vshlge.i32','vshllt.i32','vshlgt.i32','vshlle.i32',
            'vshleq.i64','vshlne.i64','vshlcs.i64','vshlhs.i64','vshlcc.i64','vshllo.i64','vshlmi.i64','vshlpl.i64','vshlvs.i64','vshlvc.i64','vshlhi.i64','vshlls.i64','vshlge.i64','vshllt.i64','vshlgt.i64','vshlle.i64',

            'vshlleq.i8','vshllne.i8','vshllcs.i8','vshllhs.i8','vshllcc.i8','vshlllo.i8','vshllmi.i8','vshllpl.i8','vshllvs.i8','vshllvc.i8','vshllhi.i8','vshllls.i8','vshllge.i8','vshlllt.i8','vshllgt.i8','vshllle.i8',
            'vshlleq.i16','vshllne.i16','vshllcs.i16','vshllhs.i16','vshllcc.i16','vshlllo.i16','vshllmi.i16','vshllpl.i16','vshllvs.i16','vshllvc.i16','vshllhi.i16','vshllls.i16','vshllge.i16','vshlllt.i16','vshllgt.i16','vshllle.i16',
            'vshlleq.i32','vshllne.i32','vshllcs.i32','vshllhs.i32','vshllcc.i32','vshlllo.i32','vshllmi.i32','vshllpl.i32','vshllvs.i32','vshllvc.i32','vshllhi.i32','vshllls.i32','vshllge.i32','vshlllt.i32','vshllgt.i32','vshllle.i32'
            ),
        /* Conditional NEON SIMD Signed Integer Instructions */
        32 => array(
            'vabaeq.s8','vabane.s8','vabacs.s8','vabahs.s8','vabacc.s8','vabalo.s8','vabami.s8','vabapl.s8','vabavs.s8','vabavc.s8','vabahi.s8','vabals.s8','vabage.s8','vabalt.s8','vabagt.s8','vabale.s8',
            'vabaeq.s16','vabane.s16','vabacs.s16','vabahs.s16','vabacc.s16','vabalo.s16','vabami.s16','vabapl.s16','vabavs.s16','vabavc.s16','vabahi.s16','vabals.s16','vabage.s16','vabalt.s16','vabagt.s16','vabale.s16',
            'vabaeq.s32','vabane.s32','vabacs.s32','vabahs.s32','vabacc.s32','vabalo.s32','vabami.s32','vabapl.s32','vabavs.s32','vabavc.s32','vabahi.s32','vabals.s32','vabage.s32','vabalt.s32','vabagt.s32','vabale.s32',

            'vabaleq.s8','vabalne.s8','vabalcs.s8','vabalhs.s8','vabalcc.s8','vaballo.s8','vabalmi.s8','vabalpl.s8','vabalvs.s8','vabalvc.s8','vabalhi.s8','vaballs.s8','vabalge.s8','vaballt.s8','vabalgt.s8','vaballe.s8',
            'vabaleq.s16','vabalne.s16','vabalcs.s16','vabalhs.s16','vabalcc.s16','vaballo.s16','vabalmi.s16','vabalpl.s16','vabalvs.s16','vabalvc.s16','vabalhi.s16','vaballs.s16','vabalge.s16','vaballt.s16','vabalgt.s16','vaballe.s16',
            'vabaleq.s32','vabalne.s32','vabalcs.s32','vabalhs.s32','vabalcc.s32','vaballo.s32','vabalmi.s32','vabalpl.s32','vabalvs.s32','vabalvc.s32','vabalhi.s32','vaballs.s32','vabalge.s32','vaballt.s32','vabalgt.s32','vaballe.s32',

            'vabdeq.s8','vabdne.s8','vabdcs.s8','vabdhs.s8','vabdcc.s8','vabdlo.s8','vabdmi.s8','vabdpl.s8','vabdvs.s8','vabdvc.s8','vabdhi.s8','vabdls.s8','vabdge.s8','vabdlt.s8','vabdgt.s8','vabdle.s8',
            'vabdeq.s16','vabdne.s16','vabdcs.s16','vabdhs.s16','vabdcc.s16','vabdlo.s16','vabdmi.s16','vabdpl.s16','vabdvs.s16','vabdvc.s16','vabdhi.s16','vabdls.s16','vabdge.s16','vabdlt.s16','vabdgt.s16','vabdle.s16',
            'vabdeq.s32','vabdne.s32','vabdcs.s32','vabdhs.s32','vabdcc.s32','vabdlo.s32','vabdmi.s32','vabdpl.s32','vabdvs.s32','vabdvc.s32','vabdhi.s32','vabdls.s32','vabdge.s32','vabdlt.s32','vabdgt.s32','vabdle.s32',

            'vabseq.s8','vabsne.s8','vabscs.s8','vabshs.s8','vabscc.s8','vabslo.s8','vabsmi.s8','vabspl.s8','vabsvs.s8','vabsvc.s8','vabshi.s8','vabsls.s8','vabsge.s8','vabslt.s8','vabsgt.s8','vabsle.s8',
            'vabseq.s16','vabsne.s16','vabscs.s16','vabshs.s16','vabscc.s16','vabslo.s16','vabsmi.s16','vabspl.s16','vabsvs.s16','vabsvc.s16','vabshi.s16','vabsls.s16','vabsge.s16','vabslt.s16','vabsgt.s16','vabsle.s16',
            'vabseq.s32','vabsne.s32','vabscs.s32','vabshs.s32','vabscc.s32','vabslo.s32','vabsmi.s32','vabspl.s32','vabsvs.s32','vabsvc.s32','vabshi.s32','vabsls.s32','vabsge.s32','vabslt.s32','vabsgt.s32','vabsle.s32',

            'vaddleq.s8','vaddlne.s8','vaddlcs.s8','vaddlhs.s8','vaddlcc.s8','vaddllo.s8','vaddlmi.s8','vaddlpl.s8','vaddlvs.s8','vaddlvc.s8','vaddlhi.s8','vaddlls.s8','vaddlge.s8','vaddllt.s8','vaddlgt.s8','vaddlle.s8',
            'vaddleq.s16','vaddlne.s16','vaddlcs.s16','vaddlhs.s16','vaddlcc.s16','vaddllo.s16','vaddlmi.s16','vaddlpl.s16','vaddlvs.s16','vaddlvc.s16','vaddlhi.s16','vaddlls.s16','vaddlge.s16','vaddllt.s16','vaddlgt.s16','vaddlle.s16',
            'vaddleq.s32','vaddlne.s32','vaddlcs.s32','vaddlhs.s32','vaddlcc.s32','vaddllo.s32','vaddlmi.s32','vaddlpl.s32','vaddlvs.s32','vaddlvc.s32','vaddlhi.s32','vaddlls.s32','vaddlge.s32','vaddllt.s32','vaddlgt.s32','vaddlle.s32',

            'vcgeeq.s8','vcgene.s8','vcgecs.s8','vcgehs.s8','vcgecc.s8','vcgelo.s8','vcgemi.s8','vcgepl.s8','vcgevs.s8','vcgevc.s8','vcgehi.s8','vcgels.s8','vcgege.s8','vcgelt.s8','vcgegt.s8','vcgele.s8',
            'vcgeeq.s16','vcgene.s16','vcgecs.s16','vcgehs.s16','vcgecc.s16','vcgelo.s16','vcgemi.s16','vcgepl.s16','vcgevs.s16','vcgevc.s16','vcgehi.s16','vcgels.s16','vcgege.s16','vcgelt.s16','vcgegt.s16','vcgele.s16',
            'vcgeeq.s32','vcgene.s32','vcgecs.s32','vcgehs.s32','vcgecc.s32','vcgelo.s32','vcgemi.s32','vcgepl.s32','vcgevs.s32','vcgevc.s32','vcgehi.s32','vcgels.s32','vcgege.s32','vcgelt.s32','vcgegt.s32','vcgele.s32',

            'vcleeq.s8','vclene.s8','vclecs.s8','vclehs.s8','vclecc.s8','vclelo.s8','vclemi.s8','vclepl.s8','vclevs.s8','vclevc.s8','vclehi.s8','vclels.s8','vclege.s8','vclelt.s8','vclegt.s8','vclele.s8',
            'vcleeq.s16','vclene.s16','vclecs.s16','vclehs.s16','vclecc.s16','vclelo.s16','vclemi.s16','vclepl.s16','vclevs.s16','vclevc.s16','vclehi.s16','vclels.s16','vclege.s16','vclelt.s16','vclegt.s16','vclele.s16',
            'vcleeq.s32','vclene.s32','vclecs.s32','vclehs.s32','vclecc.s32','vclelo.s32','vclemi.s32','vclepl.s32','vclevs.s32','vclevc.s32','vclehi.s32','vclels.s32','vclege.s32','vclelt.s32','vclegt.s32','vclele.s32',

            'vcgteq.s8','vcgtne.s8','vcgtcs.s8','vcgths.s8','vcgtcc.s8','vcgtlo.s8','vcgtmi.s8','vcgtpl.s8','vcgtvs.s8','vcgtvc.s8','vcgthi.s8','vcgtls.s8','vcgtge.s8','vcgtlt.s8','vcgtgt.s8','vcgtle.s8',
            'vcgteq.s16','vcgtne.s16','vcgtcs.s16','vcgths.s16','vcgtcc.s16','vcgtlo.s16','vcgtmi.s16','vcgtpl.s16','vcgtvs.s16','vcgtvc.s16','vcgthi.s16','vcgtls.s16','vcgtge.s16','vcgtlt.s16','vcgtgt.s16','vcgtle.s16',
            'vcgteq.s32','vcgtne.s32','vcgtcs.s32','vcgths.s32','vcgtcc.s32','vcgtlo.s32','vcgtmi.s32','vcgtpl.s32','vcgtvs.s32','vcgtvc.s32','vcgthi.s32','vcgtls.s32','vcgtge.s32','vcgtlt.s32','vcgtgt.s32','vcgtle.s32',

            'vclteq.s8','vcltne.s8','vcltcs.s8','vclths.s8','vcltcc.s8','vcltlo.s8','vcltmi.s8','vcltpl.s8','vcltvs.s8','vcltvc.s8','vclthi.s8','vcltls.s8','vcltge.s8','vcltlt.s8','vcltgt.s8','vcltle.s8',
            'vclteq.s16','vcltne.s16','vcltcs.s16','vclths.s16','vcltcc.s16','vcltlo.s16','vcltmi.s16','vcltpl.s16','vcltvs.s16','vcltvc.s16','vclthi.s16','vcltls.s16','vcltge.s16','vcltlt.s16','vcltgt.s16','vcltle.s16',
            'vclteq.s32','vcltne.s32','vcltcs.s32','vclths.s32','vcltcc.s32','vcltlo.s32','vcltmi.s32','vcltpl.s32','vcltvs.s32','vcltvc.s32','vclthi.s32','vcltls.s32','vcltge.s32','vcltlt.s32','vcltgt.s32','vcltle.s32',

            'vclseq.s8','vclsne.s8','vclscs.s8','vclshs.s8','vclscc.s8','vclslo.s8','vclsmi.s8','vclspl.s8','vclsvs.s8','vclsvc.s8','vclshi.s8','vclsls.s8','vclsge.s8','vclslt.s8','vclsgt.s8','vclsle.s8',
            'vclseq.s16','vclsne.s16','vclscs.s16','vclshs.s16','vclscc.s16','vclslo.s16','vclsmi.s16','vclspl.s16','vclsvs.s16','vclsvc.s16','vclshi.s16','vclsls.s16','vclsge.s16','vclslt.s16','vclsgt.s16','vclsle.s16',
            'vclseq.s32','vclsne.s32','vclscs.s32','vclshs.s32','vclscc.s32','vclslo.s32','vclsmi.s32','vclspl.s32','vclsvs.s32','vclsvc.s32','vclshi.s32','vclsls.s32','vclsge.s32','vclslt.s32','vclsgt.s32','vclsle.s32',

            'vaddweq.s8','vaddwne.s8','vaddwcs.s8','vaddwhs.s8','vaddwcc.s8','vaddwlo.s8','vaddwmi.s8','vaddwpl.s8','vaddwvs.s8','vaddwvc.s8','vaddwhi.s8','vaddwls.s8','vaddwge.s8','vaddwlt.s8','vaddwgt.s8','vaddwle.s8',
            'vaddweq.s16','vaddwne.s16','vaddwcs.s16','vaddwhs.s16','vaddwcc.s16','vaddwlo.s16','vaddwmi.s16','vaddwpl.s16','vaddwvs.s16','vaddwvc.s16','vaddwhi.s16','vaddwls.s16','vaddwge.s16','vaddwlt.s16','vaddwgt.s16','vaddwle.s16',
            'vaddweq.s32','vaddwne.s32','vaddwcs.s32','vaddwhs.s32','vaddwcc.s32','vaddwlo.s32','vaddwmi.s32','vaddwpl.s32','vaddwvs.s32','vaddwvc.s32','vaddwhi.s32','vaddwls.s32','vaddwge.s32','vaddwlt.s32','vaddwgt.s32','vaddwle.s32',

            'vhaddeq.s8','vhaddne.s8','vhaddcs.s8','vhaddhs.s8','vhaddcc.s8','vhaddlo.s8','vhaddmi.s8','vhaddpl.s8','vhaddvs.s8','vhaddvc.s8','vhaddhi.s8','vhaddls.s8','vhaddge.s8','vhaddlt.s8','vhaddgt.s8','vhaddle.s8',
            'vhaddeq.s16','vhaddne.s16','vhaddcs.s16','vhaddhs.s16','vhaddcc.s16','vhaddlo.s16','vhaddmi.s16','vhaddpl.s16','vhaddvs.s16','vhaddvc.s16','vhaddhi.s16','vhaddls.s16','vhaddge.s16','vhaddlt.s16','vhaddgt.s16','vhaddle.s16',
            'vhaddeq.s32','vhaddne.s32','vhaddcs.s32','vhaddhs.s32','vhaddcc.s32','vhaddlo.s32','vhaddmi.s32','vhaddpl.s32','vhaddvs.s32','vhaddvc.s32','vhaddhi.s32','vhaddls.s32','vhaddge.s32','vhaddlt.s32','vhaddgt.s32','vhaddle.s32',

            'vhsubeq.s8','vhsubne.s8','vhsubcs.s8','vhsubhs.s8','vhsubcc.s8','vhsublo.s8','vhsubmi.s8','vhsubpl.s8','vhsubvs.s8','vhsubvc.s8','vhsubhi.s8','vhsubls.s8','vhsubge.s8','vhsublt.s8','vhsubgt.s8','vhsuble.s8',
            'vhsubeq.s16','vhsubne.s16','vhsubcs.s16','vhsubhs.s16','vhsubcc.s16','vhsublo.s16','vhsubmi.s16','vhsubpl.s16','vhsubvs.s16','vhsubvc.s16','vhsubhi.s16','vhsubls.s16','vhsubge.s16','vhsublt.s16','vhsubgt.s16','vhsuble.s16',
            'vhsubeq.s32','vhsubne.s32','vhsubcs.s32','vhsubhs.s32','vhsubcc.s32','vhsublo.s32','vhsubmi.s32','vhsubpl.s32','vhsubvs.s32','vhsubvc.s32','vhsubhi.s32','vhsubls.s32','vhsubge.s32','vhsublt.s32','vhsubgt.s32','vhsuble.s32',

            'vmaxeq.s8','vmaxne.s8','vmaxcs.s8','vmaxhs.s8','vmaxcc.s8','vmaxlo.s8','vmaxmi.s8','vmaxpl.s8','vmaxvs.s8','vmaxvc.s8','vmaxhi.s8','vmaxls.s8','vmaxge.s8','vmaxlt.s8','vmaxgt.s8','vmaxle.s8',
            'vmaxeq.s16','vmaxne.s16','vmaxcs.s16','vmaxhs.s16','vmaxcc.s16','vmaxlo.s16','vmaxmi.s16','vmaxpl.s16','vmaxvs.s16','vmaxvc.s16','vmaxhi.s16','vmaxls.s16','vmaxge.s16','vmaxlt.s16','vmaxgt.s16','vmaxle.s16',
            'vmaxeq.s32','vmaxne.s32','vmaxcs.s32','vmaxhs.s32','vmaxcc.s32','vmaxlo.s32','vmaxmi.s32','vmaxpl.s32','vmaxvs.s32','vmaxvc.s32','vmaxhi.s32','vmaxls.s32','vmaxge.s32','vmaxlt.s32','vmaxgt.s32','vmaxle.s32',

            'vmineq.s8','vminne.s8','vmincs.s8','vminhs.s8','vmincc.s8','vminlo.s8','vminmi.s8','vminpl.s8','vminvs.s8','vminvc.s8','vminhi.s8','vminls.s8','vminge.s8','vminlt.s8','vmingt.s8','vminle.s8',
            'vmineq.s16','vminne.s16','vmincs.s16','vminhs.s16','vmincc.s16','vminlo.s16','vminmi.s16','vminpl.s16','vminvs.s16','vminvc.s16','vminhi.s16','vminls.s16','vminge.s16','vminlt.s16','vmingt.s16','vminle.s16',
            'vmineq.s32','vminne.s32','vmincs.s32','vminhs.s32','vmincc.s32','vminlo.s32','vminmi.s32','vminpl.s32','vminvs.s32','vminvc.s32','vminhi.s32','vminls.s32','vminge.s32','vminlt.s32','vmingt.s32','vminle.s32',

            'vmlaleq.s8','vmlalne.s8','vmlalcs.s8','vmlalhs.s8','vmlalcc.s8','vmlallo.s8','vmlalmi.s8','vmlalpl.s8','vmlalvs.s8','vmlalvc.s8','vmlalhi.s8','vmlalls.s8','vmlalge.s8','vmlallt.s8','vmlalgt.s8','vmlalle.s8',
            'vmlaleq.s16','vmlalne.s16','vmlalcs.s16','vmlalhs.s16','vmlalcc.s16','vmlallo.s16','vmlalmi.s16','vmlalpl.s16','vmlalvs.s16','vmlalvc.s16','vmlalhi.s16','vmlalls.s16','vmlalge.s16','vmlallt.s16','vmlalgt.s16','vmlalle.s16',
            'vmlaleq.s32','vmlalne.s32','vmlalcs.s32','vmlalhs.s32','vmlalcc.s32','vmlallo.s32','vmlalmi.s32','vmlalpl.s32','vmlalvs.s32','vmlalvc.s32','vmlalhi.s32','vmlalls.s32','vmlalge.s32','vmlallt.s32','vmlalgt.s32','vmlalle.s32',

            'vmlsleq.s8','vmlslne.s8','vmlslcs.s8','vmlslhs.s8','vmlslcc.s8','vmlsllo.s8','vmlslmi.s8','vmlslpl.s8','vmlslvs.s8','vmlslvc.s8','vmlslhi.s8','vmlslls.s8','vmlslge.s8','vmlsllt.s8','vmlslgt.s8','vmlslle.s8',
            'vmlsleq.s16','vmlslne.s16','vmlslcs.s16','vmlslhs.s16','vmlslcc.s16','vmlsllo.s16','vmlslmi.s16','vmlslpl.s16','vmlslvs.s16','vmlslvc.s16','vmlslhi.s16','vmlslls.s16','vmlslge.s16','vmlsllt.s16','vmlslgt.s16','vmlslle.s16',
            'vmlsleq.s32','vmlslne.s32','vmlslcs.s32','vmlslhs.s32','vmlslcc.s32','vmlsllo.s32','vmlslmi.s32','vmlslpl.s32','vmlslvs.s32','vmlslvc.s32','vmlslhi.s32','vmlslls.s32','vmlslge.s32','vmlsllt.s32','vmlslgt.s32','vmlslle.s32',

            'vnegeq.s8','vnegne.s8','vnegcs.s8','vneghs.s8','vnegcc.s8','vneglo.s8','vnegmi.s8','vnegpl.s8','vnegvs.s8','vnegvc.s8','vneghi.s8','vnegls.s8','vnegge.s8','vneglt.s8','vneggt.s8','vnegle.s8',
            'vnegeq.s16','vnegne.s16','vnegcs.s16','vneghs.s16','vnegcc.s16','vneglo.s16','vnegmi.s16','vnegpl.s16','vnegvs.s16','vnegvc.s16','vneghi.s16','vnegls.s16','vnegge.s16','vneglt.s16','vneggt.s16','vnegle.s16',
            'vnegeq.s32','vnegne.s32','vnegcs.s32','vneghs.s32','vnegcc.s32','vneglo.s32','vnegmi.s32','vnegpl.s32','vnegvs.s32','vnegvc.s32','vneghi.s32','vnegls.s32','vnegge.s32','vneglt.s32','vneggt.s32','vnegle.s32',

            'vpadaleq.s8','vpadalne.s8','vpadalcs.s8','vpadalhs.s8','vpadalcc.s8','vpadallo.s8','vpadalmi.s8','vpadalpl.s8','vpadalvs.s8','vpadalvc.s8','vpadalhi.s8','vpadalls.s8','vpadalge.s8','vpadallt.s8','vpadalgt.s8','vpadalle.s8',
            'vpadaleq.s16','vpadalne.s16','vpadalcs.s16','vpadalhs.s16','vpadalcc.s16','vpadallo.s16','vpadalmi.s16','vpadalpl.s16','vpadalvs.s16','vpadalvc.s16','vpadalhi.s16','vpadalls.s16','vpadalge.s16','vpadallt.s16','vpadalgt.s16','vpadalle.s16',
            'vpadaleq.s32','vpadalne.s32','vpadalcs.s32','vpadalhs.s32','vpadalcc.s32','vpadallo.s32','vpadalmi.s32','vpadalpl.s32','vpadalvs.s32','vpadalvc.s32','vpadalhi.s32','vpadalls.s32','vpadalge.s32','vpadallt.s32','vpadalgt.s32','vpadalle.s32',

            'vmovleq.s8','vmovlne.s8','vmovlcs.s8','vmovlhs.s8','vmovlcc.s8','vmovllo.s8','vmovlmi.s8','vmovlpl.s8','vmovlvs.s8','vmovlvc.s8','vmovlhi.s8','vmovlls.s8','vmovlge.s8','vmovllt.s8','vmovlgt.s8','vmovlle.s8',
            'vmovleq.s16','vmovlne.s16','vmovlcs.s16','vmovlhs.s16','vmovlcc.s16','vmovllo.s16','vmovlmi.s16','vmovlpl.s16','vmovlvs.s16','vmovlvc.s16','vmovlhi.s16','vmovlls.s16','vmovlge.s16','vmovllt.s16','vmovlgt.s16','vmovlle.s16',
            'vmovleq.s32','vmovlne.s32','vmovlcs.s32','vmovlhs.s32','vmovlcc.s32','vmovllo.s32','vmovlmi.s32','vmovlpl.s32','vmovlvs.s32','vmovlvc.s32','vmovlhi.s32','vmovlls.s32','vmovlge.s32','vmovllt.s32','vmovlgt.s32','vmovlle.s32',

            'vmulleq.s8','vmullne.s8','vmullcs.s8','vmullhs.s8','vmullcc.s8','vmulllo.s8','vmullmi.s8','vmullpl.s8','vmullvs.s8','vmullvc.s8','vmullhi.s8','vmullls.s8','vmullge.s8','vmulllt.s8','vmullgt.s8','vmullle.s8',
            'vmulleq.s16','vmullne.s16','vmullcs.s16','vmullhs.s16','vmullcc.s16','vmulllo.s16','vmullmi.s16','vmullpl.s16','vmullvs.s16','vmullvc.s16','vmullhi.s16','vmullls.s16','vmullge.s16','vmulllt.s16','vmullgt.s16','vmullle.s16',
            'vmulleq.s32','vmullne.s32','vmullcs.s32','vmullhs.s32','vmullcc.s32','vmulllo.s32','vmullmi.s32','vmullpl.s32','vmullvs.s32','vmullvc.s32','vmullhi.s32','vmullls.s32','vmullge.s32','vmulllt.s32','vmullgt.s32','vmullle.s32',

            'vpaddleq.s8','vpaddlne.s8','vpaddlcs.s8','vpaddlhs.s8','vpaddlcc.s8','vpaddllo.s8','vpaddlmi.s8','vpaddlpl.s8','vpaddlvs.s8','vpaddlvc.s8','vpaddlhi.s8','vpaddlls.s8','vpaddlge.s8','vpaddllt.s8','vpaddlgt.s8','vpaddlle.s8',
            'vpaddleq.s16','vpaddlne.s16','vpaddlcs.s16','vpaddlhs.s16','vpaddlcc.s16','vpaddllo.s16','vpaddlmi.s16','vpaddlpl.s16','vpaddlvs.s16','vpaddlvc.s16','vpaddlhi.s16','vpaddlls.s16','vpaddlge.s16','vpaddllt.s16','vpaddlgt.s16','vpaddlle.s16',
            'vpaddleq.s32','vpaddlne.s32','vpaddlcs.s32','vpaddlhs.s32','vpaddlcc.s32','vpaddllo.s32','vpaddlmi.s32','vpaddlpl.s32','vpaddlvs.s32','vpaddlvc.s32','vpaddlhi.s32','vpaddlls.s32','vpaddlge.s32','vpaddllt.s32','vpaddlgt.s32','vpaddlle.s32',

            'vpmaxeq.s8','vpmaxne.s8','vpmaxcs.s8','vpmaxhs.s8','vpmaxcc.s8','vpmaxlo.s8','vpmaxmi.s8','vpmaxpl.s8','vpmaxvs.s8','vpmaxvc.s8','vpmaxhi.s8','vpmaxls.s8','vpmaxge.s8','vpmaxlt.s8','vpmaxgt.s8','vpmaxle.s8',
            'vpmaxeq.s16','vpmaxne.s16','vpmaxcs.s16','vpmaxhs.s16','vpmaxcc.s16','vpmaxlo.s16','vpmaxmi.s16','vpmaxpl.s16','vpmaxvs.s16','vpmaxvc.s16','vpmaxhi.s16','vpmaxls.s16','vpmaxge.s16','vpmaxlt.s16','vpmaxgt.s16','vpmaxle.s16',
            'vpmaxeq.s32','vpmaxne.s32','vpmaxcs.s32','vpmaxhs.s32','vpmaxcc.s32','vpmaxlo.s32','vpmaxmi.s32','vpmaxpl.s32','vpmaxvs.s32','vpmaxvc.s32','vpmaxhi.s32','vpmaxls.s32','vpmaxge.s32','vpmaxlt.s32','vpmaxgt.s32','vpmaxle.s32',

            'vpmineq.s8','vpminne.s8','vpmincs.s8','vpminhs.s8','vpmincc.s8','vpminlo.s8','vpminmi.s8','vpminpl.s8','vpminvs.s8','vpminvc.s8','vpminhi.s8','vpminls.s8','vpminge.s8','vpminlt.s8','vpmingt.s8','vpminle.s8',
            'vpmineq.s16','vpminne.s16','vpmincs.s16','vpminhs.s16','vpmincc.s16','vpminlo.s16','vpminmi.s16','vpminpl.s16','vpminvs.s16','vpminvc.s16','vpminhi.s16','vpminls.s16','vpminge.s16','vpminlt.s16','vpmingt.s16','vpminle.s16',
            'vpmineq.s32','vpminne.s32','vpmincs.s32','vpminhs.s32','vpmincc.s32','vpminlo.s32','vpminmi.s32','vpminpl.s32','vpminvs.s32','vpminvc.s32','vpminhi.s32','vpminls.s32','vpminge.s32','vpminlt.s32','vpmingt.s32','vpminle.s32',

            'vqabseq.s8','vqabsne.s8','vqabscs.s8','vqabshs.s8','vqabscc.s8','vqabslo.s8','vqabsmi.s8','vqabspl.s8','vqabsvs.s8','vqabsvc.s8','vqabshi.s8','vqabsls.s8','vqabsge.s8','vqabslt.s8','vqabsgt.s8','vqabsle.s8',
            'vqabseq.s16','vqabsne.s16','vqabscs.s16','vqabshs.s16','vqabscc.s16','vqabslo.s16','vqabsmi.s16','vqabspl.s16','vqabsvs.s16','vqabsvc.s16','vqabshi.s16','vqabsls.s16','vqabsge.s16','vqabslt.s16','vqabsgt.s16','vqabsle.s16',
            'vqabseq.s32','vqabsne.s32','vqabscs.s32','vqabshs.s32','vqabscc.s32','vqabslo.s32','vqabsmi.s32','vqabspl.s32','vqabsvs.s32','vqabsvc.s32','vqabshi.s32','vqabsls.s32','vqabsge.s32','vqabslt.s32','vqabsgt.s32','vqabsle.s32',

            'vqaddeq.s8','vqaddne.s8','vqaddcs.s8','vqaddhs.s8','vqaddcc.s8','vqaddlo.s8','vqaddmi.s8','vqaddpl.s8','vqaddvs.s8','vqaddvc.s8','vqaddhi.s8','vqaddls.s8','vqaddge.s8','vqaddlt.s8','vqaddgt.s8','vqaddle.s8',
            'vqaddeq.s16','vqaddne.s16','vqaddcs.s16','vqaddhs.s16','vqaddcc.s16','vqaddlo.s16','vqaddmi.s16','vqaddpl.s16','vqaddvs.s16','vqaddvc.s16','vqaddhi.s16','vqaddls.s16','vqaddge.s16','vqaddlt.s16','vqaddgt.s16','vqaddle.s16',
            'vqaddeq.s32','vqaddne.s32','vqaddcs.s32','vqaddhs.s32','vqaddcc.s32','vqaddlo.s32','vqaddmi.s32','vqaddpl.s32','vqaddvs.s32','vqaddvc.s32','vqaddhi.s32','vqaddls.s32','vqaddge.s32','vqaddlt.s32','vqaddgt.s32','vqaddle.s32',
            'vqaddeq.s64','vqaddne.s64','vqaddcs.s64','vqaddhs.s64','vqaddcc.s64','vqaddlo.s64','vqaddmi.s64','vqaddpl.s64','vqaddvs.s64','vqaddvc.s64','vqaddhi.s64','vqaddls.s64','vqaddge.s64','vqaddlt.s64','vqaddgt.s64','vqaddle.s64',

            'vqdmlaleq.s16','vqdmlalne.s16','vqdmlalcs.s16','vqdmlalhs.s16','vqdmlalcc.s16','vqdmlallo.s16','vqdmlalmi.s16','vqdmlalpl.s16','vqdmlalvs.s16','vqdmlalvc.s16','vqdmlalhi.s16','vqdmlalls.s16','vqdmlalge.s16','vqdmlallt.s16','vqdmlalgt.s16','vqdmlalle.s16',
            'vqdmlaleq.s32','vqdmlalne.s32','vqdmlalcs.s32','vqdmlalhs.s32','vqdmlalcc.s32','vqdmlallo.s32','vqdmlalmi.s32','vqdmlalpl.s32','vqdmlalvs.s32','vqdmlalvc.s32','vqdmlalhi.s32','vqdmlalls.s32','vqdmlalge.s32','vqdmlallt.s32','vqdmlalgt.s32','vqdmlalle.s32',

            'vqdmlsleq.s16','vqdmlslne.s16','vqdmlslcs.s16','vqdmlslhs.s16','vqdmlslcc.s16','vqdmlsllo.s16','vqdmlslmi.s16','vqdmlslpl.s16','vqdmlslvs.s16','vqdmlslvc.s16','vqdmlslhi.s16','vqdmlslls.s16','vqdmlslge.s16','vqdmlsllt.s16','vqdmlslgt.s16','vqdmlslle.s16',
            'vqdmlsleq.s32','vqdmlslne.s32','vqdmlslcs.s32','vqdmlslhs.s32','vqdmlslcc.s32','vqdmlsllo.s32','vqdmlslmi.s32','vqdmlslpl.s32','vqdmlslvs.s32','vqdmlslvc.s32','vqdmlslhi.s32','vqdmlslls.s32','vqdmlslge.s32','vqdmlsllt.s32','vqdmlslgt.s32','vqdmlslle.s32',

            'vqdmulheq.s16','vqdmulhne.s16','vqdmulhcs.s16','vqdmulhhs.s16','vqdmulhcc.s16','vqdmulhlo.s16','vqdmulhmi.s16','vqdmulhpl.s16','vqdmulhvs.s16','vqdmulhvc.s16','vqdmulhhi.s16','vqdmulhls.s16','vqdmulhge.s16','vqdmulhlt.s16','vqdmulhgt.s16','vqdmulhle.s16',
            'vqdmulheq.s32','vqdmulhne.s32','vqdmulhcs.s32','vqdmulhhs.s32','vqdmulhcc.s32','vqdmulhlo.s32','vqdmulhmi.s32','vqdmulhpl.s32','vqdmulhvs.s32','vqdmulhvc.s32','vqdmulhhi.s32','vqdmulhls.s32','vqdmulhge.s32','vqdmulhlt.s32','vqdmulhgt.s32','vqdmulhle.s32',

            'vqdmulleq.s16','vqdmullne.s16','vqdmullcs.s16','vqdmullhs.s16','vqdmullcc.s16','vqdmulllo.s16','vqdmullmi.s16','vqdmullpl.s16','vqdmullvs.s16','vqdmullvc.s16','vqdmullhi.s16','vqdmullls.s16','vqdmullge.s16','vqdmulllt.s16','vqdmullgt.s16','vqdmullle.s16',
            'vqdmulleq.s32','vqdmullne.s32','vqdmullcs.s32','vqdmullhs.s32','vqdmullcc.s32','vqdmulllo.s32','vqdmullmi.s32','vqdmullpl.s32','vqdmullvs.s32','vqdmullvc.s32','vqdmullhi.s32','vqdmullls.s32','vqdmullge.s32','vqdmulllt.s32','vqdmullgt.s32','vqdmullle.s32',

            'vqmovneq.s16','vqmovnne.s16','vqmovncs.s16','vqmovnhs.s16','vqmovncc.s16','vqmovnlo.s16','vqmovnmi.s16','vqmovnpl.s16','vqmovnvs.s16','vqmovnvc.s16','vqmovnhi.s16','vqmovnls.s16','vqmovnge.s16','vqmovnlt.s16','vqmovngt.s16','vqmovnle.s16',
            'vqmovneq.s32','vqmovnne.s32','vqmovncs.s32','vqmovnhs.s32','vqmovncc.s32','vqmovnlo.s32','vqmovnmi.s32','vqmovnpl.s32','vqmovnvs.s32','vqmovnvc.s32','vqmovnhi.s32','vqmovnls.s32','vqmovnge.s32','vqmovnlt.s32','vqmovngt.s32','vqmovnle.s32',
            'vqmovneq.s64','vqmovnne.s64','vqmovncs.s64','vqmovnhs.s64','vqmovncc.s64','vqmovnlo.s64','vqmovnmi.s64','vqmovnpl.s64','vqmovnvs.s64','vqmovnvc.s64','vqmovnhi.s64','vqmovnls.s64','vqmovnge.s64','vqmovnlt.s64','vqmovngt.s64','vqmovnle.s64',

            'vqmovuneq.s16','vqmovunne.s16','vqmovuncs.s16','vqmovunhs.s16','vqmovuncc.s16','vqmovunlo.s16','vqmovunmi.s16','vqmovunpl.s16','vqmovunvs.s16','vqmovunvc.s16','vqmovunhi.s16','vqmovunls.s16','vqmovunge.s16','vqmovunlt.s16','vqmovungt.s16','vqmovunle.s16',
            'vqmovuneq.s32','vqmovunne.s32','vqmovuncs.s32','vqmovunhs.s32','vqmovuncc.s32','vqmovunlo.s32','vqmovunmi.s32','vqmovunpl.s32','vqmovunvs.s32','vqmovunvc.s32','vqmovunhi.s32','vqmovunls.s32','vqmovunge.s32','vqmovunlt.s32','vqmovungt.s32','vqmovunle.s32',
            'vqmovuneq.s64','vqmovunne.s64','vqmovuncs.s64','vqmovunhs.s64','vqmovuncc.s64','vqmovunlo.s64','vqmovunmi.s64','vqmovunpl.s64','vqmovunvs.s64','vqmovunvc.s64','vqmovunhi.s64','vqmovunls.s64','vqmovunge.s64','vqmovunlt.s64','vqmovungt.s64','vqmovunle.s64',

            'vqnegeq.s8','vqnegne.s8','vqnegcs.s8','vqneghs.s8','vqnegcc.s8','vqneglo.s8','vqnegmi.s8','vqnegpl.s8','vqnegvs.s8','vqnegvc.s8','vqneghi.s8','vqnegls.s8','vqnegge.s8','vqneglt.s8','vqneggt.s8','vqnegle.s8',
            'vqnegeq.s16','vqnegne.s16','vqnegcs.s16','vqneghs.s16','vqnegcc.s16','vqneglo.s16','vqnegmi.s16','vqnegpl.s16','vqnegvs.s16','vqnegvc.s16','vqneghi.s16','vqnegls.s16','vqnegge.s16','vqneglt.s16','vqneggt.s16','vqnegle.s16',
            'vqnegeq.s32','vqnegne.s32','vqnegcs.s32','vqneghs.s32','vqnegcc.s32','vqneglo.s32','vqnegmi.s32','vqnegpl.s32','vqnegvs.s32','vqnegvc.s32','vqneghi.s32','vqnegls.s32','vqnegge.s32','vqneglt.s32','vqneggt.s32','vqnegle.s32',

            'vqrdmulheq.s16','vqrdmulhne.s16','vqrdmulhcs.s16','vqrdmulhhs.s16','vqrdmulhcc.s16','vqrdmulhlo.s16','vqrdmulhmi.s16','vqrdmulhpl.s16','vqrdmulhvs.s16','vqrdmulhvc.s16','vqrdmulhhi.s16','vqrdmulhls.s16','vqrdmulhge.s16','vqrdmulhlt.s16','vqrdmulhgt.s16','vqrdmulhle.s16',
            'vqrdmulheq.s32','vqrdmulhne.s32','vqrdmulhcs.s32','vqrdmulhhs.s32','vqrdmulhcc.s32','vqrdmulhlo.s32','vqrdmulhmi.s32','vqrdmulhpl.s32','vqrdmulhvs.s32','vqrdmulhvc.s32','vqrdmulhhi.s32','vqrdmulhls.s32','vqrdmulhge.s32','vqrdmulhlt.s32','vqrdmulhgt.s32','vqrdmulhle.s32',

            'vqrshleq.s8','vqrshlne.s8','vqrshlcs.s8','vqrshlhs.s8','vqrshlcc.s8','vqrshllo.s8','vqrshlmi.s8','vqrshlpl.s8','vqrshlvs.s8','vqrshlvc.s8','vqrshlhi.s8','vqrshlls.s8','vqrshlge.s8','vqrshllt.s8','vqrshlgt.s8','vqrshlle.s8',
            'vqrshleq.s16','vqrshlne.s16','vqrshlcs.s16','vqrshlhs.s16','vqrshlcc.s16','vqrshllo.s16','vqrshlmi.s16','vqrshlpl.s16','vqrshlvs.s16','vqrshlvc.s16','vqrshlhi.s16','vqrshlls.s16','vqrshlge.s16','vqrshllt.s16','vqrshlgt.s16','vqrshlle.s16',
            'vqrshleq.s32','vqrshlne.s32','vqrshlcs.s32','vqrshlhs.s32','vqrshlcc.s32','vqrshllo.s32','vqrshlmi.s32','vqrshlpl.s32','vqrshlvs.s32','vqrshlvc.s32','vqrshlhi.s32','vqrshlls.s32','vqrshlge.s32','vqrshllt.s32','vqrshlgt.s32','vqrshlle.s32',
            'vqrshleq.s64','vqrshlne.s64','vqrshlcs.s64','vqrshlhs.s64','vqrshlcc.s64','vqrshllo.s64','vqrshlmi.s64','vqrshlpl.s64','vqrshlvs.s64','vqrshlvc.s64','vqrshlhi.s64','vqrshlls.s64','vqrshlge.s64','vqrshllt.s64','vqrshlgt.s64','vqrshlle.s64',

            'vqrshrneq.s16','vqrshrnne.s16','vqrshrncs.s16','vqrshrnhs.s16','vqrshrncc.s16','vqrshrnlo.s16','vqrshrnmi.s16','vqrshrnpl.s16','vqrshrnvs.s16','vqrshrnvc.s16','vqrshrnhi.s16','vqrshrnls.s16','vqrshrnge.s16','vqrshrnlt.s16','vqrshrngt.s16','vqrshrnle.s16',
            'vqrshrneq.s32','vqrshrnne.s32','vqrshrncs.s32','vqrshrnhs.s32','vqrshrncc.s32','vqrshrnlo.s32','vqrshrnmi.s32','vqrshrnpl.s32','vqrshrnvs.s32','vqrshrnvc.s32','vqrshrnhi.s32','vqrshrnls.s32','vqrshrnge.s32','vqrshrnlt.s32','vqrshrngt.s32','vqrshrnle.s32',
            'vqrshrneq.s64','vqrshrnne.s64','vqrshrncs.s64','vqrshrnhs.s64','vqrshrncc.s64','vqrshrnlo.s64','vqrshrnmi.s64','vqrshrnpl.s64','vqrshrnvs.s64','vqrshrnvc.s64','vqrshrnhi.s64','vqrshrnls.s64','vqrshrnge.s64','vqrshrnlt.s64','vqrshrngt.s64','vqrshrnle.s64',

            'vqrshruneq.s16','vqrshrunne.s16','vqrshruncs.s16','vqrshrunhs.s16','vqrshruncc.s16','vqrshrunlo.s16','vqrshrunmi.s16','vqrshrunpl.s16','vqrshrunvs.s16','vqrshrunvc.s16','vqrshrunhi.s16','vqrshrunls.s16','vqrshrunge.s16','vqrshrunlt.s16','vqrshrungt.s16','vqrshrunle.s16',
            'vqrshruneq.s32','vqrshrunne.s32','vqrshruncs.s32','vqrshrunhs.s32','vqrshruncc.s32','vqrshrunlo.s32','vqrshrunmi.s32','vqrshrunpl.s32','vqrshrunvs.s32','vqrshrunvc.s32','vqrshrunhi.s32','vqrshrunls.s32','vqrshrunge.s32','vqrshrunlt.s32','vqrshrungt.s32','vqrshrunle.s32',
            'vqrshruneq.s64','vqrshrunne.s64','vqrshruncs.s64','vqrshrunhs.s64','vqrshruncc.s64','vqrshrunlo.s64','vqrshrunmi.s64','vqrshrunpl.s64','vqrshrunvs.s64','vqrshrunvc.s64','vqrshrunhi.s64','vqrshrunls.s64','vqrshrunge.s64','vqrshrunlt.s64','vqrshrungt.s64','vqrshrunle.s64',

            'vqshleq.s8','vqshlne.s8','vqshlcs.s8','vqshlhs.s8','vqshlcc.s8','vqshllo.s8','vqshlmi.s8','vqshlpl.s8','vqshlvs.s8','vqshlvc.s8','vqshlhi.s8','vqshlls.s8','vqshlge.s8','vqshllt.s8','vqshlgt.s8','vqshlle.s8',
            'vqshleq.s16','vqshlne.s16','vqshlcs.s16','vqshlhs.s16','vqshlcc.s16','vqshllo.s16','vqshlmi.s16','vqshlpl.s16','vqshlvs.s16','vqshlvc.s16','vqshlhi.s16','vqshlls.s16','vqshlge.s16','vqshllt.s16','vqshlgt.s16','vqshlle.s16',
            'vqshleq.s32','vqshlne.s32','vqshlcs.s32','vqshlhs.s32','vqshlcc.s32','vqshllo.s32','vqshlmi.s32','vqshlpl.s32','vqshlvs.s32','vqshlvc.s32','vqshlhi.s32','vqshlls.s32','vqshlge.s32','vqshllt.s32','vqshlgt.s32','vqshlle.s32',
            'vqshleq.s64','vqshlne.s64','vqshlcs.s64','vqshlhs.s64','vqshlcc.s64','vqshllo.s64','vqshlmi.s64','vqshlpl.s64','vqshlvs.s64','vqshlvc.s64','vqshlhi.s64','vqshlls.s64','vqshlge.s64','vqshllt.s64','vqshlgt.s64','vqshlle.s64',

            'vqshlueq.s8','vqshlune.s8','vqshlucs.s8','vqshluhs.s8','vqshlucc.s8','vqshlulo.s8','vqshlumi.s8','vqshlupl.s8','vqshluvs.s8','vqshluvc.s8','vqshluhi.s8','vqshluls.s8','vqshluge.s8','vqshlult.s8','vqshlugt.s8','vqshlule.s8',
            'vqshlueq.s16','vqshlune.s16','vqshlucs.s16','vqshluhs.s16','vqshlucc.s16','vqshlulo.s16','vqshlumi.s16','vqshlupl.s16','vqshluvs.s16','vqshluvc.s16','vqshluhi.s16','vqshluls.s16','vqshluge.s16','vqshlult.s16','vqshlugt.s16','vqshlule.s16',
            'vqshlueq.s32','vqshlune.s32','vqshlucs.s32','vqshluhs.s32','vqshlucc.s32','vqshlulo.s32','vqshlumi.s32','vqshlupl.s32','vqshluvs.s32','vqshluvc.s32','vqshluhi.s32','vqshluls.s32','vqshluge.s32','vqshlult.s32','vqshlugt.s32','vqshlule.s32',
            'vqshlueq.s64','vqshlune.s64','vqshlucs.s64','vqshluhs.s64','vqshlucc.s64','vqshlulo.s64','vqshlumi.s64','vqshlupl.s64','vqshluvs.s64','vqshluvc.s64','vqshluhi.s64','vqshluls.s64','vqshluge.s64','vqshlult.s64','vqshlugt.s64','vqshlule.s64',

            'vqshrneq.s16','vqshrnne.s16','vqshrncs.s16','vqshrnhs.s16','vqshrncc.s16','vqshrnlo.s16','vqshrnmi.s16','vqshrnpl.s16','vqshrnvs.s16','vqshrnvc.s16','vqshrnhi.s16','vqshrnls.s16','vqshrnge.s16','vqshrnlt.s16','vqshrngt.s16','vqshrnle.s16',
            'vqshrneq.s32','vqshrnne.s32','vqshrncs.s32','vqshrnhs.s32','vqshrncc.s32','vqshrnlo.s32','vqshrnmi.s32','vqshrnpl.s32','vqshrnvs.s32','vqshrnvc.s32','vqshrnhi.s32','vqshrnls.s32','vqshrnge.s32','vqshrnlt.s32','vqshrngt.s32','vqshrnle.s32',
            'vqshrneq.s64','vqshrnne.s64','vqshrncs.s64','vqshrnhs.s64','vqshrncc.s64','vqshrnlo.s64','vqshrnmi.s64','vqshrnpl.s64','vqshrnvs.s64','vqshrnvc.s64','vqshrnhi.s64','vqshrnls.s64','vqshrnge.s64','vqshrnlt.s64','vqshrngt.s64','vqshrnle.s64',

            'vqshruneq.s16','vqshrunne.s16','vqshruncs.s16','vqshrunhs.s16','vqshruncc.s16','vqshrunlo.s16','vqshrunmi.s16','vqshrunpl.s16','vqshrunvs.s16','vqshrunvc.s16','vqshrunhi.s16','vqshrunls.s16','vqshrunge.s16','vqshrunlt.s16','vqshrungt.s16','vqshrunle.s16',
            'vqshruneq.s32','vqshrunne.s32','vqshruncs.s32','vqshrunhs.s32','vqshruncc.s32','vqshrunlo.s32','vqshrunmi.s32','vqshrunpl.s32','vqshrunvs.s32','vqshrunvc.s32','vqshrunhi.s32','vqshrunls.s32','vqshrunge.s32','vqshrunlt.s32','vqshrungt.s32','vqshrunle.s32',
            'vqshruneq.s64','vqshrunne.s64','vqshruncs.s64','vqshrunhs.s64','vqshruncc.s64','vqshrunlo.s64','vqshrunmi.s64','vqshrunpl.s64','vqshrunvs.s64','vqshrunvc.s64','vqshrunhi.s64','vqshrunls.s64','vqshrunge.s64','vqshrunlt.s64','vqshrungt.s64','vqshrunle.s64',

            'vqsubeq.s8','vqsubne.s8','vqsubcs.s8','vqsubhs.s8','vqsubcc.s8','vqsublo.s8','vqsubmi.s8','vqsubpl.s8','vqsubvs.s8','vqsubvc.s8','vqsubhi.s8','vqsubls.s8','vqsubge.s8','vqsublt.s8','vqsubgt.s8','vqsuble.s8',
            'vqsubeq.s16','vqsubne.s16','vqsubcs.s16','vqsubhs.s16','vqsubcc.s16','vqsublo.s16','vqsubmi.s16','vqsubpl.s16','vqsubvs.s16','vqsubvc.s16','vqsubhi.s16','vqsubls.s16','vqsubge.s16','vqsublt.s16','vqsubgt.s16','vqsuble.s16',
            'vqsubeq.s32','vqsubne.s32','vqsubcs.s32','vqsubhs.s32','vqsubcc.s32','vqsublo.s32','vqsubmi.s32','vqsubpl.s32','vqsubvs.s32','vqsubvc.s32','vqsubhi.s32','vqsubls.s32','vqsubge.s32','vqsublt.s32','vqsubgt.s32','vqsuble.s32',
            'vqsubeq.s64','vqsubne.s64','vqsubcs.s64','vqsubhs.s64','vqsubcc.s64','vqsublo.s64','vqsubmi.s64','vqsubpl.s64','vqsubvs.s64','vqsubvc.s64','vqsubhi.s64','vqsubls.s64','vqsubge.s64','vqsublt.s64','vqsubgt.s64','vqsuble.s64',

            'vrhaddeq.s8','vrhaddne.s8','vrhaddcs.s8','vrhaddhs.s8','vrhaddcc.s8','vrhaddlo.s8','vrhaddmi.s8','vrhaddpl.s8','vrhaddvs.s8','vrhaddvc.s8','vrhaddhi.s8','vrhaddls.s8','vrhaddge.s8','vrhaddlt.s8','vrhaddgt.s8','vrhaddle.s8',
            'vrhaddeq.s16','vrhaddne.s16','vrhaddcs.s16','vrhaddhs.s16','vrhaddcc.s16','vrhaddlo.s16','vrhaddmi.s16','vrhaddpl.s16','vrhaddvs.s16','vrhaddvc.s16','vrhaddhi.s16','vrhaddls.s16','vrhaddge.s16','vrhaddlt.s16','vrhaddgt.s16','vrhaddle.s16',
            'vrhaddeq.s32','vrhaddne.s32','vrhaddcs.s32','vrhaddhs.s32','vrhaddcc.s32','vrhaddlo.s32','vrhaddmi.s32','vrhaddpl.s32','vrhaddvs.s32','vrhaddvc.s32','vrhaddhi.s32','vrhaddls.s32','vrhaddge.s32','vrhaddlt.s32','vrhaddgt.s32','vrhaddle.s32',

            'vrshleq.s8','vrshlne.s8','vrshlcs.s8','vrshlhs.s8','vrshlcc.s8','vrshllo.s8','vrshlmi.s8','vrshlpl.s8','vrshlvs.s8','vrshlvc.s8','vrshlhi.s8','vrshlls.s8','vrshlge.s8','vrshllt.s8','vrshlgt.s8','vrshlle.s8',
            'vrshleq.s16','vrshlne.s16','vrshlcs.s16','vrshlhs.s16','vrshlcc.s16','vrshllo.s16','vrshlmi.s16','vrshlpl.s16','vrshlvs.s16','vrshlvc.s16','vrshlhi.s16','vrshlls.s16','vrshlge.s16','vrshllt.s16','vrshlgt.s16','vrshlle.s16',
            'vrshleq.s32','vrshlne.s32','vrshlcs.s32','vrshlhs.s32','vrshlcc.s32','vrshllo.s32','vrshlmi.s32','vrshlpl.s32','vrshlvs.s32','vrshlvc.s32','vrshlhi.s32','vrshlls.s32','vrshlge.s32','vrshllt.s32','vrshlgt.s32','vrshlle.s32',
            'vrshleq.s64','vrshlne.s64','vrshlcs.s64','vrshlhs.s64','vrshlcc.s64','vrshllo.s64','vrshlmi.s64','vrshlpl.s64','vrshlvs.s64','vrshlvc.s64','vrshlhi.s64','vrshlls.s64','vrshlge.s64','vrshllt.s64','vrshlgt.s64','vrshlle.s64',

            'vrshreq.s8','vrshrne.s8','vrshrcs.s8','vrshrhs.s8','vrshrcc.s8','vrshrlo.s8','vrshrmi.s8','vrshrpl.s8','vrshrvs.s8','vrshrvc.s8','vrshrhi.s8','vrshrls.s8','vrshrge.s8','vrshrlt.s8','vrshrgt.s8','vrshrle.s8',
            'vrshreq.s16','vrshrne.s16','vrshrcs.s16','vrshrhs.s16','vrshrcc.s16','vrshrlo.s16','vrshrmi.s16','vrshrpl.s16','vrshrvs.s16','vrshrvc.s16','vrshrhi.s16','vrshrls.s16','vrshrge.s16','vrshrlt.s16','vrshrgt.s16','vrshrle.s16',
            'vrshreq.s32','vrshrne.s32','vrshrcs.s32','vrshrhs.s32','vrshrcc.s32','vrshrlo.s32','vrshrmi.s32','vrshrpl.s32','vrshrvs.s32','vrshrvc.s32','vrshrhi.s32','vrshrls.s32','vrshrge.s32','vrshrlt.s32','vrshrgt.s32','vrshrle.s32',
            'vrshreq.s64','vrshrne.s64','vrshrcs.s64','vrshrhs.s64','vrshrcc.s64','vrshrlo.s64','vrshrmi.s64','vrshrpl.s64','vrshrvs.s64','vrshrvc.s64','vrshrhi.s64','vrshrls.s64','vrshrge.s64','vrshrlt.s64','vrshrgt.s64','vrshrle.s64',

            'vrsraeq.s8','vrsrane.s8','vrsracs.s8','vrsrahs.s8','vrsracc.s8','vrsralo.s8','vrsrami.s8','vrsrapl.s8','vrsravs.s8','vrsravc.s8','vrsrahi.s8','vrsrals.s8','vrsrage.s8','vrsralt.s8','vrsragt.s8','vrsrale.s8',
            'vrsraeq.s16','vrsrane.s16','vrsracs.s16','vrsrahs.s16','vrsracc.s16','vrsralo.s16','vrsrami.s16','vrsrapl.s16','vrsravs.s16','vrsravc.s16','vrsrahi.s16','vrsrals.s16','vrsrage.s16','vrsralt.s16','vrsragt.s16','vrsrale.s16',
            'vrsraeq.s32','vrsrane.s32','vrsracs.s32','vrsrahs.s32','vrsracc.s32','vrsralo.s32','vrsrami.s32','vrsrapl.s32','vrsravs.s32','vrsravc.s32','vrsrahi.s32','vrsrals.s32','vrsrage.s32','vrsralt.s32','vrsragt.s32','vrsrale.s32',
            'vrsraeq.s64','vrsrane.s64','vrsracs.s64','vrsrahs.s64','vrsracc.s64','vrsralo.s64','vrsrami.s64','vrsrapl.s64','vrsravs.s64','vrsravc.s64','vrsrahi.s64','vrsrals.s64','vrsrage.s64','vrsralt.s64','vrsragt.s64','vrsrale.s64',

            'vshleq.s8','vshlne.s8','vshlcs.s8','vshlhs.s8','vshlcc.s8','vshllo.s8','vshlmi.s8','vshlpl.s8','vshlvs.s8','vshlvc.s8','vshlhi.s8','vshlls.s8','vshlge.s8','vshllt.s8','vshlgt.s8','vshlle.s8',
            'vshleq.s16','vshlne.s16','vshlcs.s16','vshlhs.s16','vshlcc.s16','vshllo.s16','vshlmi.s16','vshlpl.s16','vshlvs.s16','vshlvc.s16','vshlhi.s16','vshlls.s16','vshlge.s16','vshllt.s16','vshlgt.s16','vshlle.s16',
            'vshleq.s32','vshlne.s32','vshlcs.s32','vshlhs.s32','vshlcc.s32','vshllo.s32','vshlmi.s32','vshlpl.s32','vshlvs.s32','vshlvc.s32','vshlhi.s32','vshlls.s32','vshlge.s32','vshllt.s32','vshlgt.s32','vshlle.s32',
            'vshleq.s64','vshlne.s64','vshlcs.s64','vshlhs.s64','vshlcc.s64','vshllo.s64','vshlmi.s64','vshlpl.s64','vshlvs.s64','vshlvc.s64','vshlhi.s64','vshlls.s64','vshlge.s64','vshllt.s64','vshlgt.s64','vshlle.s64',

            'vshlleq.s8','vshllne.s8','vshllcs.s8','vshllhs.s8','vshllcc.s8','vshlllo.s8','vshllmi.s8','vshllpl.s8','vshllvs.s8','vshllvc.s8','vshllhi.s8','vshllls.s8','vshllge.s8','vshlllt.s8','vshllgt.s8','vshllle.s8',
            'vshlleq.s16','vshllne.s16','vshllcs.s16','vshllhs.s16','vshllcc.s16','vshlllo.s16','vshllmi.s16','vshllpl.s16','vshllvs.s16','vshllvc.s16','vshllhi.s16','vshllls.s16','vshllge.s16','vshlllt.s16','vshllgt.s16','vshllle.s16',
            'vshlleq.s32','vshllne.s32','vshllcs.s32','vshllhs.s32','vshllcc.s32','vshlllo.s32','vshllmi.s32','vshllpl.s32','vshllvs.s32','vshllvc.s32','vshllhi.s32','vshllls.s32','vshllge.s32','vshlllt.s32','vshllgt.s32','vshllle.s32',

            'vshreq.s8','vshrne.s8','vshrcs.s8','vshrhs.s8','vshrcc.s8','vshrlo.s8','vshrmi.s8','vshrpl.s8','vshrvs.s8','vshrvc.s8','vshrhi.s8','vshrls.s8','vshrge.s8','vshrlt.s8','vshrgt.s8','vshrle.s8',
            'vshreq.s16','vshrne.s16','vshrcs.s16','vshrhs.s16','vshrcc.s16','vshrlo.s16','vshrmi.s16','vshrpl.s16','vshrvs.s16','vshrvc.s16','vshrhi.s16','vshrls.s16','vshrge.s16','vshrlt.s16','vshrgt.s16','vshrle.s16',
            'vshreq.s32','vshrne.s32','vshrcs.s32','vshrhs.s32','vshrcc.s32','vshrlo.s32','vshrmi.s32','vshrpl.s32','vshrvs.s32','vshrvc.s32','vshrhi.s32','vshrls.s32','vshrge.s32','vshrlt.s32','vshrgt.s32','vshrle.s32',
            'vshreq.s64','vshrne.s64','vshrcs.s64','vshrhs.s64','vshrcc.s64','vshrlo.s64','vshrmi.s64','vshrpl.s64','vshrvs.s64','vshrvc.s64','vshrhi.s64','vshrls.s64','vshrge.s64','vshrlt.s64','vshrgt.s64','vshrle.s64',

            'vsraeq.s8','vsrane.s8','vsracs.s8','vsrahs.s8','vsracc.s8','vsralo.s8','vsrami.s8','vsrapl.s8','vsravs.s8','vsravc.s8','vsrahi.s8','vsrals.s8','vsrage.s8','vsralt.s8','vsragt.s8','vsrale.s8',
            'vsraeq.s16','vsrane.s16','vsracs.s16','vsrahs.s16','vsracc.s16','vsralo.s16','vsrami.s16','vsrapl.s16','vsravs.s16','vsravc.s16','vsrahi.s16','vsrals.s16','vsrage.s16','vsralt.s16','vsragt.s16','vsrale.s16',
            'vsraeq.s32','vsrane.s32','vsracs.s32','vsrahs.s32','vsracc.s32','vsralo.s32','vsrami.s32','vsrapl.s32','vsravs.s32','vsravc.s32','vsrahi.s32','vsrals.s32','vsrage.s32','vsralt.s32','vsragt.s32','vsrale.s32',
            'vsraeq.s64','vsrane.s64','vsracs.s64','vsrahs.s64','vsracc.s64','vsralo.s64','vsrami.s64','vsrapl.s64','vsravs.s64','vsravc.s64','vsrahi.s64','vsrals.s64','vsrage.s64','vsralt.s64','vsragt.s64','vsrale.s64',

            'vsubleq.s8','vsublne.s8','vsublcs.s8','vsublhs.s8','vsublcc.s8','vsubllo.s8','vsublmi.s8','vsublpl.s8','vsublvs.s8','vsublvc.s8','vsublhi.s8','vsublls.s8','vsublge.s8','vsubllt.s8','vsublgt.s8','vsublle.s8',
            'vsubleq.s16','vsublne.s16','vsublcs.s16','vsublhs.s16','vsublcc.s16','vsubllo.s16','vsublmi.s16','vsublpl.s16','vsublvs.s16','vsublvc.s16','vsublhi.s16','vsublls.s16','vsublge.s16','vsubllt.s16','vsublgt.s16','vsublle.s16',
            'vsubleq.s32','vsublne.s32','vsublcs.s32','vsublhs.s32','vsublcc.s32','vsubllo.s32','vsublmi.s32','vsublpl.s32','vsublvs.s32','vsublvc.s32','vsublhi.s32','vsublls.s32','vsublge.s32','vsubllt.s32','vsublgt.s32','vsublle.s32',

            'vsubheq.s8','vsubhne.s8','vsubhcs.s8','vsubhhs.s8','vsubhcc.s8','vsubhlo.s8','vsubhmi.s8','vsubhpl.s8','vsubhvs.s8','vsubhvc.s8','vsubhhi.s8','vsubhls.s8','vsubhge.s8','vsubhlt.s8','vsubhgt.s8','vsubhle.s8',
            'vsubheq.s16','vsubhne.s16','vsubhcs.s16','vsubhhs.s16','vsubhcc.s16','vsubhlo.s16','vsubhmi.s16','vsubhpl.s16','vsubhvs.s16','vsubhvc.s16','vsubhhi.s16','vsubhls.s16','vsubhge.s16','vsubhlt.s16','vsubhgt.s16','vsubhle.s16',
            'vsubheq.s32','vsubhne.s32','vsubhcs.s32','vsubhhs.s32','vsubhcc.s32','vsubhlo.s32','vsubhmi.s32','vsubhpl.s32','vsubhvs.s32','vsubhvc.s32','vsubhhi.s32','vsubhls.s32','vsubhge.s32','vsubhlt.s32','vsubhgt.s32','vsubhle.s32'
            ),
        /* Conditional NEON SIMD Unsigned Integer Instructions */
        33 => array(
            'vabaeq.u8','vabane.u8','vabacs.u8','vabahs.u8','vabacc.u8','vabalo.u8','vabami.u8','vabapl.u8','vabavs.u8','vabavc.u8','vabahi.u8','vabals.u8','vabage.u8','vabalt.u8','vabagt.u8','vabale.u8',
            'vabaeq.u16','vabane.u16','vabacs.u16','vabahs.u16','vabacc.u16','vabalo.u16','vabami.u16','vabapl.u16','vabavs.u16','vabavc.u16','vabahi.u16','vabals.u16','vabage.u16','vabalt.u16','vabagt.u16','vabale.u16',
            'vabaeq.u32','vabane.u32','vabacs.u32','vabahs.u32','vabacc.u32','vabalo.u32','vabami.u32','vabapl.u32','vabavs.u32','vabavc.u32','vabahi.u32','vabals.u32','vabage.u32','vabalt.u32','vabagt.u32','vabale.u32',

            'vabaleq.u8','vabalne.u8','vabalcs.u8','vabalhs.u8','vabalcc.u8','vaballo.u8','vabalmi.u8','vabalpl.u8','vabalvs.u8','vabalvc.u8','vabalhi.u8','vaballs.u8','vabalge.u8','vaballt.u8','vabalgt.u8','vaballe.u8',
            'vabaleq.u16','vabalne.u16','vabalcs.u16','vabalhs.u16','vabalcc.u16','vaballo.u16','vabalmi.u16','vabalpl.u16','vabalvs.u16','vabalvc.u16','vabalhi.u16','vaballs.u16','vabalge.u16','vaballt.u16','vabalgt.u16','vaballe.u16',
            'vabaleq.u32','vabalne.u32','vabalcs.u32','vabalhs.u32','vabalcc.u32','vaballo.u32','vabalmi.u32','vabalpl.u32','vabalvs.u32','vabalvc.u32','vabalhi.u32','vaballs.u32','vabalge.u32','vaballt.u32','vabalgt.u32','vaballe.u32',

            'vabdeq.u8','vabdne.u8','vabdcs.u8','vabdhs.u8','vabdcc.u8','vabdlo.u8','vabdmi.u8','vabdpl.u8','vabdvs.u8','vabdvc.u8','vabdhi.u8','vabdls.u8','vabdge.u8','vabdlt.u8','vabdgt.u8','vabdle.u8',
            'vabdeq.u16','vabdne.u16','vabdcs.u16','vabdhs.u16','vabdcc.u16','vabdlo.u16','vabdmi.u16','vabdpl.u16','vabdvs.u16','vabdvc.u16','vabdhi.u16','vabdls.u16','vabdge.u16','vabdlt.u16','vabdgt.u16','vabdle.u16',
            'vabdeq.u32','vabdne.u32','vabdcs.u32','vabdhs.u32','vabdcc.u32','vabdlo.u32','vabdmi.u32','vabdpl.u32','vabdvs.u32','vabdvc.u32','vabdhi.u32','vabdls.u32','vabdge.u32','vabdlt.u32','vabdgt.u32','vabdle.u32',

            'vaddleq.u8','vaddlne.u8','vaddlcs.u8','vaddlhs.u8','vaddlcc.u8','vaddllo.u8','vaddlmi.u8','vaddlpl.u8','vaddlvs.u8','vaddlvc.u8','vaddlhi.u8','vaddlls.u8','vaddlge.u8','vaddllt.u8','vaddlgt.u8','vaddlle.u8',
            'vaddleq.u16','vaddlne.u16','vaddlcs.u16','vaddlhs.u16','vaddlcc.u16','vaddllo.u16','vaddlmi.u16','vaddlpl.u16','vaddlvs.u16','vaddlvc.u16','vaddlhi.u16','vaddlls.u16','vaddlge.u16','vaddllt.u16','vaddlgt.u16','vaddlle.u16',
            'vaddleq.u32','vaddlne.u32','vaddlcs.u32','vaddlhs.u32','vaddlcc.u32','vaddllo.u32','vaddlmi.u32','vaddlpl.u32','vaddlvs.u32','vaddlvc.u32','vaddlhi.u32','vaddlls.u32','vaddlge.u32','vaddllt.u32','vaddlgt.u32','vaddlle.u32',

            'vsubleq.u8','vsublne.u8','vsublcs.u8','vsublhs.u8','vsublcc.u8','vsubllo.u8','vsublmi.u8','vsublpl.u8','vsublvs.u8','vsublvc.u8','vsublhi.u8','vsublls.u8','vsublge.u8','vsubllt.u8','vsublgt.u8','vsublle.u8',
            'vsubleq.u16','vsublne.u16','vsublcs.u16','vsublhs.u16','vsublcc.u16','vsubllo.u16','vsublmi.u16','vsublpl.u16','vsublvs.u16','vsublvc.u16','vsublhi.u16','vsublls.u16','vsublge.u16','vsubllt.u16','vsublgt.u16','vsublle.u16',
            'vsubleq.u32','vsublne.u32','vsublcs.u32','vsublhs.u32','vsublcc.u32','vsubllo.u32','vsublmi.u32','vsublpl.u32','vsublvs.u32','vsublvc.u32','vsublhi.u32','vsublls.u32','vsublge.u32','vsubllt.u32','vsublgt.u32','vsublle.u32',

            'vaddweq.u8','vaddwne.u8','vaddwcs.u8','vaddwhs.u8','vaddwcc.u8','vaddwlo.u8','vaddwmi.u8','vaddwpl.u8','vaddwvs.u8','vaddwvc.u8','vaddwhi.u8','vaddwls.u8','vaddwge.u8','vaddwlt.u8','vaddwgt.u8','vaddwle.u8',
            'vaddweq.u16','vaddwne.u16','vaddwcs.u16','vaddwhs.u16','vaddwcc.u16','vaddwlo.u16','vaddwmi.u16','vaddwpl.u16','vaddwvs.u16','vaddwvc.u16','vaddwhi.u16','vaddwls.u16','vaddwge.u16','vaddwlt.u16','vaddwgt.u16','vaddwle.u16',
            'vaddweq.u32','vaddwne.u32','vaddwcs.u32','vaddwhs.u32','vaddwcc.u32','vaddwlo.u32','vaddwmi.u32','vaddwpl.u32','vaddwvs.u32','vaddwvc.u32','vaddwhi.u32','vaddwls.u32','vaddwge.u32','vaddwlt.u32','vaddwgt.u32','vaddwle.u32',

            'vsubheq.u8','vsubhne.u8','vsubhcs.u8','vsubhhs.u8','vsubhcc.u8','vsubhlo.u8','vsubhmi.u8','vsubhpl.u8','vsubhvs.u8','vsubhvc.u8','vsubhhi.u8','vsubhls.u8','vsubhge.u8','vsubhlt.u8','vsubhgt.u8','vsubhle.u8',
            'vsubheq.u16','vsubhne.u16','vsubhcs.u16','vsubhhs.u16','vsubhcc.u16','vsubhlo.u16','vsubhmi.u16','vsubhpl.u16','vsubhvs.u16','vsubhvc.u16','vsubhhi.u16','vsubhls.u16','vsubhge.u16','vsubhlt.u16','vsubhgt.u16','vsubhle.u16',
            'vsubheq.u32','vsubhne.u32','vsubhcs.u32','vsubhhs.u32','vsubhcc.u32','vsubhlo.u32','vsubhmi.u32','vsubhpl.u32','vsubhvs.u32','vsubhvc.u32','vsubhhi.u32','vsubhls.u32','vsubhge.u32','vsubhlt.u32','vsubhgt.u32','vsubhle.u32',

            'vhaddeq.u8','vhaddne.u8','vhaddcs.u8','vhaddhs.u8','vhaddcc.u8','vhaddlo.u8','vhaddmi.u8','vhaddpl.u8','vhaddvs.u8','vhaddvc.u8','vhaddhi.u8','vhaddls.u8','vhaddge.u8','vhaddlt.u8','vhaddgt.u8','vhaddle.u8',
            'vhaddeq.u16','vhaddne.u16','vhaddcs.u16','vhaddhs.u16','vhaddcc.u16','vhaddlo.u16','vhaddmi.u16','vhaddpl.u16','vhaddvs.u16','vhaddvc.u16','vhaddhi.u16','vhaddls.u16','vhaddge.u16','vhaddlt.u16','vhaddgt.u16','vhaddle.u16',
            'vhaddeq.u32','vhaddne.u32','vhaddcs.u32','vhaddhs.u32','vhaddcc.u32','vhaddlo.u32','vhaddmi.u32','vhaddpl.u32','vhaddvs.u32','vhaddvc.u32','vhaddhi.u32','vhaddls.u32','vhaddge.u32','vhaddlt.u32','vhaddgt.u32','vhaddle.u32',

            'vhsubeq.u8','vhsubne.u8','vhsubcs.u8','vhsubhs.u8','vhsubcc.u8','vhsublo.u8','vhsubmi.u8','vhsubpl.u8','vhsubvs.u8','vhsubvc.u8','vhsubhi.u8','vhsubls.u8','vhsubge.u8','vhsublt.u8','vhsubgt.u8','vhsuble.u8',
            'vhsubeq.u16','vhsubne.u16','vhsubcs.u16','vhsubhs.u16','vhsubcc.u16','vhsublo.u16','vhsubmi.u16','vhsubpl.u16','vhsubvs.u16','vhsubvc.u16','vhsubhi.u16','vhsubls.u16','vhsubge.u16','vhsublt.u16','vhsubgt.u16','vhsuble.u16',
            'vhsubeq.u32','vhsubne.u32','vhsubcs.u32','vhsubhs.u32','vhsubcc.u32','vhsublo.u32','vhsubmi.u32','vhsubpl.u32','vhsubvs.u32','vhsubvc.u32','vhsubhi.u32','vhsubls.u32','vhsubge.u32','vhsublt.u32','vhsubgt.u32','vhsuble.u32',

            'vpadaleq.u8','vpadalne.u8','vpadalcs.u8','vpadalhs.u8','vpadalcc.u8','vpadallo.u8','vpadalmi.u8','vpadalpl.u8','vpadalvs.u8','vpadalvc.u8','vpadalhi.u8','vpadalls.u8','vpadalge.u8','vpadallt.u8','vpadalgt.u8','vpadalle.u8',
            'vpadaleq.u16','vpadalne.u16','vpadalcs.u16','vpadalhs.u16','vpadalcc.u16','vpadallo.u16','vpadalmi.u16','vpadalpl.u16','vpadalvs.u16','vpadalvc.u16','vpadalhi.u16','vpadalls.u16','vpadalge.u16','vpadallt.u16','vpadalgt.u16','vpadalle.u16',
            'vpadaleq.u32','vpadalne.u32','vpadalcs.u32','vpadalhs.u32','vpadalcc.u32','vpadallo.u32','vpadalmi.u32','vpadalpl.u32','vpadalvs.u32','vpadalvc.u32','vpadalhi.u32','vpadalls.u32','vpadalge.u32','vpadallt.u32','vpadalgt.u32','vpadalle.u32',

            'vpaddleq.u8','vpaddlne.u8','vpaddlcs.u8','vpaddlhs.u8','vpaddlcc.u8','vpaddllo.u8','vpaddlmi.u8','vpaddlpl.u8','vpaddlvs.u8','vpaddlvc.u8','vpaddlhi.u8','vpaddlls.u8','vpaddlge.u8','vpaddllt.u8','vpaddlgt.u8','vpaddlle.u8',
            'vpaddleq.u16','vpaddlne.u16','vpaddlcs.u16','vpaddlhs.u16','vpaddlcc.u16','vpaddllo.u16','vpaddlmi.u16','vpaddlpl.u16','vpaddlvs.u16','vpaddlvc.u16','vpaddlhi.u16','vpaddlls.u16','vpaddlge.u16','vpaddllt.u16','vpaddlgt.u16','vpaddlle.u16',
            'vpaddleq.u32','vpaddlne.u32','vpaddlcs.u32','vpaddlhs.u32','vpaddlcc.u32','vpaddllo.u32','vpaddlmi.u32','vpaddlpl.u32','vpaddlvs.u32','vpaddlvc.u32','vpaddlhi.u32','vpaddlls.u32','vpaddlge.u32','vpaddllt.u32','vpaddlgt.u32','vpaddlle.u32',

            'vcgeeq.u8','vcgene.u8','vcgecs.u8','vcgehs.u8','vcgecc.u8','vcgelo.u8','vcgemi.u8','vcgepl.u8','vcgevs.u8','vcgevc.u8','vcgehi.u8','vcgels.u8','vcgege.u8','vcgelt.u8','vcgegt.u8','vcgele.u8',
            'vcgeeq.u16','vcgene.u16','vcgecs.u16','vcgehs.u16','vcgecc.u16','vcgelo.u16','vcgemi.u16','vcgepl.u16','vcgevs.u16','vcgevc.u16','vcgehi.u16','vcgels.u16','vcgege.u16','vcgelt.u16','vcgegt.u16','vcgele.u16',
            'vcgeeq.u32','vcgene.u32','vcgecs.u32','vcgehs.u32','vcgecc.u32','vcgelo.u32','vcgemi.u32','vcgepl.u32','vcgevs.u32','vcgevc.u32','vcgehi.u32','vcgels.u32','vcgege.u32','vcgelt.u32','vcgegt.u32','vcgele.u32',

            'vcleeq.u8','vclene.u8','vclecs.u8','vclehs.u8','vclecc.u8','vclelo.u8','vclemi.u8','vclepl.u8','vclevs.u8','vclevc.u8','vclehi.u8','vclels.u8','vclege.u8','vclelt.u8','vclegt.u8','vclele.u8',
            'vcleeq.u16','vclene.u16','vclecs.u16','vclehs.u16','vclecc.u16','vclelo.u16','vclemi.u16','vclepl.u16','vclevs.u16','vclevc.u16','vclehi.u16','vclels.u16','vclege.u16','vclelt.u16','vclegt.u16','vclele.u16',
            'vcleeq.u32','vclene.u32','vclecs.u32','vclehs.u32','vclecc.u32','vclelo.u32','vclemi.u32','vclepl.u32','vclevs.u32','vclevc.u32','vclehi.u32','vclels.u32','vclege.u32','vclelt.u32','vclegt.u32','vclele.u32',

            'vcgteq.u8','vcgtne.u8','vcgtcs.u8','vcgths.u8','vcgtcc.u8','vcgtlo.u8','vcgtmi.u8','vcgtpl.u8','vcgtvs.u8','vcgtvc.u8','vcgthi.u8','vcgtls.u8','vcgtge.u8','vcgtlt.u8','vcgtgt.u8','vcgtle.u8',
            'vcgteq.u16','vcgtne.u16','vcgtcs.u16','vcgths.u16','vcgtcc.u16','vcgtlo.u16','vcgtmi.u16','vcgtpl.u16','vcgtvs.u16','vcgtvc.u16','vcgthi.u16','vcgtls.u16','vcgtge.u16','vcgtlt.u16','vcgtgt.u16','vcgtle.u16',
            'vcgteq.u32','vcgtne.u32','vcgtcs.u32','vcgths.u32','vcgtcc.u32','vcgtlo.u32','vcgtmi.u32','vcgtpl.u32','vcgtvs.u32','vcgtvc.u32','vcgthi.u32','vcgtls.u32','vcgtge.u32','vcgtlt.u32','vcgtgt.u32','vcgtle.u32',

            'vclteq.u8','vcltne.u8','vcltcs.u8','vclths.u8','vcltcc.u8','vcltlo.u8','vcltmi.u8','vcltpl.u8','vcltvs.u8','vcltvc.u8','vclthi.u8','vcltls.u8','vcltge.u8','vcltlt.u8','vcltgt.u8','vcltle.u8',
            'vclteq.u16','vcltne.u16','vcltcs.u16','vclths.u16','vcltcc.u16','vcltlo.u16','vcltmi.u16','vcltpl.u16','vcltvs.u16','vcltvc.u16','vclthi.u16','vcltls.u16','vcltge.u16','vcltlt.u16','vcltgt.u16','vcltle.u16',
            'vclteq.u32','vcltne.u32','vcltcs.u32','vclths.u32','vcltcc.u32','vcltlo.u32','vcltmi.u32','vcltpl.u32','vcltvs.u32','vcltvc.u32','vclthi.u32','vcltls.u32','vcltge.u32','vcltlt.u32','vcltgt.u32','vcltle.u32',

            'vmaxeq.u8','vmaxne.u8','vmaxcs.u8','vmaxhs.u8','vmaxcc.u8','vmaxlo.u8','vmaxmi.u8','vmaxpl.u8','vmaxvs.u8','vmaxvc.u8','vmaxhi.u8','vmaxls.u8','vmaxge.u8','vmaxlt.u8','vmaxgt.u8','vmaxle.u8',
            'vmaxeq.u16','vmaxne.u16','vmaxcs.u16','vmaxhs.u16','vmaxcc.u16','vmaxlo.u16','vmaxmi.u16','vmaxpl.u16','vmaxvs.u16','vmaxvc.u16','vmaxhi.u16','vmaxls.u16','vmaxge.u16','vmaxlt.u16','vmaxgt.u16','vmaxle.u16',
            'vmaxeq.u32','vmaxne.u32','vmaxcs.u32','vmaxhs.u32','vmaxcc.u32','vmaxlo.u32','vmaxmi.u32','vmaxpl.u32','vmaxvs.u32','vmaxvc.u32','vmaxhi.u32','vmaxls.u32','vmaxge.u32','vmaxlt.u32','vmaxgt.u32','vmaxle.u32',

            'vmineq.u8','vminne.u8','vmincs.u8','vminhs.u8','vmincc.u8','vminlo.u8','vminmi.u8','vminpl.u8','vminvs.u8','vminvc.u8','vminhi.u8','vminls.u8','vminge.u8','vminlt.u8','vmingt.u8','vminle.u8',
            'vmineq.u16','vminne.u16','vmincs.u16','vminhs.u16','vmincc.u16','vminlo.u16','vminmi.u16','vminpl.u16','vminvs.u16','vminvc.u16','vminhi.u16','vminls.u16','vminge.u16','vminlt.u16','vmingt.u16','vminle.u16',
            'vmineq.u32','vminne.u32','vmincs.u32','vminhs.u32','vmincc.u32','vminlo.u32','vminmi.u32','vminpl.u32','vminvs.u32','vminvc.u32','vminhi.u32','vminls.u32','vminge.u32','vminlt.u32','vmingt.u32','vminle.u32',

            'vmlaleq.u8','vmlalne.u8','vmlalcs.u8','vmlalhs.u8','vmlalcc.u8','vmlallo.u8','vmlalmi.u8','vmlalpl.u8','vmlalvs.u8','vmlalvc.u8','vmlalhi.u8','vmlalls.u8','vmlalge.u8','vmlallt.u8','vmlalgt.u8','vmlalle.u8',
            'vmlaleq.u16','vmlalne.u16','vmlalcs.u16','vmlalhs.u16','vmlalcc.u16','vmlallo.u16','vmlalmi.u16','vmlalpl.u16','vmlalvs.u16','vmlalvc.u16','vmlalhi.u16','vmlalls.u16','vmlalge.u16','vmlallt.u16','vmlalgt.u16','vmlalle.u16',
            'vmlaleq.u32','vmlalne.u32','vmlalcs.u32','vmlalhs.u32','vmlalcc.u32','vmlallo.u32','vmlalmi.u32','vmlalpl.u32','vmlalvs.u32','vmlalvc.u32','vmlalhi.u32','vmlalls.u32','vmlalge.u32','vmlallt.u32','vmlalgt.u32','vmlalle.u32',

            'vmlsleq.u8','vmlslne.u8','vmlslcs.u8','vmlslhs.u8','vmlslcc.u8','vmlsllo.u8','vmlslmi.u8','vmlslpl.u8','vmlslvs.u8','vmlslvc.u8','vmlslhi.u8','vmlslls.u8','vmlslge.u8','vmlsllt.u8','vmlslgt.u8','vmlslle.u8',
            'vmlsleq.u16','vmlslne.u16','vmlslcs.u16','vmlslhs.u16','vmlslcc.u16','vmlsllo.u16','vmlslmi.u16','vmlslpl.u16','vmlslvs.u16','vmlslvc.u16','vmlslhi.u16','vmlslls.u16','vmlslge.u16','vmlsllt.u16','vmlslgt.u16','vmlslle.u16',
            'vmlsleq.u32','vmlslne.u32','vmlslcs.u32','vmlslhs.u32','vmlslcc.u32','vmlsllo.u32','vmlslmi.u32','vmlslpl.u32','vmlslvs.u32','vmlslvc.u32','vmlslhi.u32','vmlslls.u32','vmlslge.u32','vmlsllt.u32','vmlslgt.u32','vmlslle.u32',

            'vmulleq.u8','vmullne.u8','vmullcs.u8','vmullhs.u8','vmullcc.u8','vmulllo.u8','vmullmi.u8','vmullpl.u8','vmullvs.u8','vmullvc.u8','vmullhi.u8','vmullls.u8','vmullge.u8','vmulllt.u8','vmullgt.u8','vmullle.u8',
            'vmulleq.u16','vmullne.u16','vmullcs.u16','vmullhs.u16','vmullcc.u16','vmulllo.u16','vmullmi.u16','vmullpl.u16','vmullvs.u16','vmullvc.u16','vmullhi.u16','vmullls.u16','vmullge.u16','vmulllt.u16','vmullgt.u16','vmullle.u16',
            'vmulleq.u32','vmullne.u32','vmullcs.u32','vmullhs.u32','vmullcc.u32','vmulllo.u32','vmullmi.u32','vmullpl.u32','vmullvs.u32','vmullvc.u32','vmullhi.u32','vmullls.u32','vmullge.u32','vmulllt.u32','vmullgt.u32','vmullle.u32',

            'vmovleq.u8','vmovlne.u8','vmovlcs.u8','vmovlhs.u8','vmovlcc.u8','vmovllo.u8','vmovlmi.u8','vmovlpl.u8','vmovlvs.u8','vmovlvc.u8','vmovlhi.u8','vmovlls.u8','vmovlge.u8','vmovllt.u8','vmovlgt.u8','vmovlle.u8',
            'vmovleq.u16','vmovlne.u16','vmovlcs.u16','vmovlhs.u16','vmovlcc.u16','vmovllo.u16','vmovlmi.u16','vmovlpl.u16','vmovlvs.u16','vmovlvc.u16','vmovlhi.u16','vmovlls.u16','vmovlge.u16','vmovllt.u16','vmovlgt.u16','vmovlle.u16',
            'vmovleq.u32','vmovlne.u32','vmovlcs.u32','vmovlhs.u32','vmovlcc.u32','vmovllo.u32','vmovlmi.u32','vmovlpl.u32','vmovlvs.u32','vmovlvc.u32','vmovlhi.u32','vmovlls.u32','vmovlge.u32','vmovllt.u32','vmovlgt.u32','vmovlle.u32',

            'vshleq.u8','vshlne.u8','vshlcs.u8','vshlhs.u8','vshlcc.u8','vshllo.u8','vshlmi.u8','vshlpl.u8','vshlvs.u8','vshlvc.u8','vshlhi.u8','vshlls.u8','vshlge.u8','vshllt.u8','vshlgt.u8','vshlle.u8',
            'vshleq.u16','vshlne.u16','vshlcs.u16','vshlhs.u16','vshlcc.u16','vshllo.u16','vshlmi.u16','vshlpl.u16','vshlvs.u16','vshlvc.u16','vshlhi.u16','vshlls.u16','vshlge.u16','vshllt.u16','vshlgt.u16','vshlle.u16',
            'vshleq.u32','vshlne.u32','vshlcs.u32','vshlhs.u32','vshlcc.u32','vshllo.u32','vshlmi.u32','vshlpl.u32','vshlvs.u32','vshlvc.u32','vshlhi.u32','vshlls.u32','vshlge.u32','vshllt.u32','vshlgt.u32','vshlle.u32',
            'vshleq.u64','vshlne.u64','vshlcs.u64','vshlhs.u64','vshlcc.u64','vshllo.u64','vshlmi.u64','vshlpl.u64','vshlvs.u64','vshlvc.u64','vshlhi.u64','vshlls.u64','vshlge.u64','vshllt.u64','vshlgt.u64','vshlle.u64',

            'vshlleq.u8','vshllne.u8','vshllcs.u8','vshllhs.u8','vshllcc.u8','vshlllo.u8','vshllmi.u8','vshllpl.u8','vshllvs.u8','vshllvc.u8','vshllhi.u8','vshllls.u8','vshllge.u8','vshlllt.u8','vshllgt.u8','vshllle.u8',
            'vshlleq.u16','vshllne.u16','vshllcs.u16','vshllhs.u16','vshllcc.u16','vshlllo.u16','vshllmi.u16','vshllpl.u16','vshllvs.u16','vshllvc.u16','vshllhi.u16','vshllls.u16','vshllge.u16','vshlllt.u16','vshllgt.u16','vshllle.u16',
            'vshlleq.u32','vshllne.u32','vshllcs.u32','vshllhs.u32','vshllcc.u32','vshlllo.u32','vshllmi.u32','vshllpl.u32','vshllvs.u32','vshllvc.u32','vshllhi.u32','vshllls.u32','vshllge.u32','vshlllt.u32','vshllgt.u32','vshllle.u32',

            'vshreq.u8','vshrne.u8','vshrcs.u8','vshrhs.u8','vshrcc.u8','vshrlo.u8','vshrmi.u8','vshrpl.u8','vshrvs.u8','vshrvc.u8','vshrhi.u8','vshrls.u8','vshrge.u8','vshrlt.u8','vshrgt.u8','vshrle.u8',
            'vshreq.u16','vshrne.u16','vshrcs.u16','vshrhs.u16','vshrcc.u16','vshrlo.u16','vshrmi.u16','vshrpl.u16','vshrvs.u16','vshrvc.u16','vshrhi.u16','vshrls.u16','vshrge.u16','vshrlt.u16','vshrgt.u16','vshrle.u16',
            'vshreq.u32','vshrne.u32','vshrcs.u32','vshrhs.u32','vshrcc.u32','vshrlo.u32','vshrmi.u32','vshrpl.u32','vshrvs.u32','vshrvc.u32','vshrhi.u32','vshrls.u32','vshrge.u32','vshrlt.u32','vshrgt.u32','vshrle.u32',
            'vshreq.u64','vshrne.u64','vshrcs.u64','vshrhs.u64','vshrcc.u64','vshrlo.u64','vshrmi.u64','vshrpl.u64','vshrvs.u64','vshrvc.u64','vshrhi.u64','vshrls.u64','vshrge.u64','vshrlt.u64','vshrgt.u64','vshrle.u64',

            'vsraeq.u8','vsrane.u8','vsracs.u8','vsrahs.u8','vsracc.u8','vsralo.u8','vsrami.u8','vsrapl.u8','vsravs.u8','vsravc.u8','vsrahi.u8','vsrals.u8','vsrage.u8','vsralt.u8','vsragt.u8','vsrale.u8',
            'vsraeq.u16','vsrane.u16','vsracs.u16','vsrahs.u16','vsracc.u16','vsralo.u16','vsrami.u16','vsrapl.u16','vsravs.u16','vsravc.u16','vsrahi.u16','vsrals.u16','vsrage.u16','vsralt.u16','vsragt.u16','vsrale.u16',
            'vsraeq.u32','vsrane.u32','vsracs.u32','vsrahs.u32','vsracc.u32','vsralo.u32','vsrami.u32','vsrapl.u32','vsravs.u32','vsravc.u32','vsrahi.u32','vsrals.u32','vsrage.u32','vsralt.u32','vsragt.u32','vsrale.u32',
            'vsraeq.u64','vsrane.u64','vsracs.u64','vsrahs.u64','vsracc.u64','vsralo.u64','vsrami.u64','vsrapl.u64','vsravs.u64','vsravc.u64','vsrahi.u64','vsrals.u64','vsrage.u64','vsralt.u64','vsragt.u64','vsrale.u64',

            'vpmaxeq.u8','vpmaxne.u8','vpmaxcs.u8','vpmaxhs.u8','vpmaxcc.u8','vpmaxlo.u8','vpmaxmi.u8','vpmaxpl.u8','vpmaxvs.u8','vpmaxvc.u8','vpmaxhi.u8','vpmaxls.u8','vpmaxge.u8','vpmaxlt.u8','vpmaxgt.u8','vpmaxle.u8',
            'vpmaxeq.u16','vpmaxne.u16','vpmaxcs.u16','vpmaxhs.u16','vpmaxcc.u16','vpmaxlo.u16','vpmaxmi.u16','vpmaxpl.u16','vpmaxvs.u16','vpmaxvc.u16','vpmaxhi.u16','vpmaxls.u16','vpmaxge.u16','vpmaxlt.u16','vpmaxgt.u16','vpmaxle.u16',
            'vpmaxeq.u32','vpmaxne.u32','vpmaxcs.u32','vpmaxhs.u32','vpmaxcc.u32','vpmaxlo.u32','vpmaxmi.u32','vpmaxpl.u32','vpmaxvs.u32','vpmaxvc.u32','vpmaxhi.u32','vpmaxls.u32','vpmaxge.u32','vpmaxlt.u32','vpmaxgt.u32','vpmaxle.u32',

            'vpmineq.u8','vpminne.u8','vpmincs.u8','vpminhs.u8','vpmincc.u8','vpminlo.u8','vpminmi.u8','vpminpl.u8','vpminvs.u8','vpminvc.u8','vpminhi.u8','vpminls.u8','vpminge.u8','vpminlt.u8','vpmingt.u8','vpminle.u8',
            'vpmineq.u16','vpminne.u16','vpmincs.u16','vpminhs.u16','vpmincc.u16','vpminlo.u16','vpminmi.u16','vpminpl.u16','vpminvs.u16','vpminvc.u16','vpminhi.u16','vpminls.u16','vpminge.u16','vpminlt.u16','vpmingt.u16','vpminle.u16',
            'vpmineq.u32','vpminne.u32','vpmincs.u32','vpminhs.u32','vpmincc.u32','vpminlo.u32','vpminmi.u32','vpminpl.u32','vpminvs.u32','vpminvc.u32','vpminhi.u32','vpminls.u32','vpminge.u32','vpminlt.u32','vpmingt.u32','vpminle.u32',

            'vqaddeq.u8','vqaddne.u8','vqaddcs.u8','vqaddhs.u8','vqaddcc.u8','vqaddlo.u8','vqaddmi.u8','vqaddpl.u8','vqaddvs.u8','vqaddvc.u8','vqaddhi.u8','vqaddls.u8','vqaddge.u8','vqaddlt.u8','vqaddgt.u8','vqaddle.u8',
            'vqaddeq.u16','vqaddne.u16','vqaddcs.u16','vqaddhs.u16','vqaddcc.u16','vqaddlo.u16','vqaddmi.u16','vqaddpl.u16','vqaddvs.u16','vqaddvc.u16','vqaddhi.u16','vqaddls.u16','vqaddge.u16','vqaddlt.u16','vqaddgt.u16','vqaddle.u16',
            'vqaddeq.u32','vqaddne.u32','vqaddcs.u32','vqaddhs.u32','vqaddcc.u32','vqaddlo.u32','vqaddmi.u32','vqaddpl.u32','vqaddvs.u32','vqaddvc.u32','vqaddhi.u32','vqaddls.u32','vqaddge.u32','vqaddlt.u32','vqaddgt.u32','vqaddle.u32',
            'vqaddeq.u64','vqaddne.u64','vqaddcs.u64','vqaddhs.u64','vqaddcc.u64','vqaddlo.u64','vqaddmi.u64','vqaddpl.u64','vqaddvs.u64','vqaddvc.u64','vqaddhi.u64','vqaddls.u64','vqaddge.u64','vqaddlt.u64','vqaddgt.u64','vqaddle.u64',

            'vqsubeq.u8','vqsubne.u8','vqsubcs.u8','vqsubhs.u8','vqsubcc.u8','vqsublo.u8','vqsubmi.u8','vqsubpl.u8','vqsubvs.u8','vqsubvc.u8','vqsubhi.u8','vqsubls.u8','vqsubge.u8','vqsublt.u8','vqsubgt.u8','vqsuble.u8',
            'vqsubeq.u16','vqsubne.u16','vqsubcs.u16','vqsubhs.u16','vqsubcc.u16','vqsublo.u16','vqsubmi.u16','vqsubpl.u16','vqsubvs.u16','vqsubvc.u16','vqsubhi.u16','vqsubls.u16','vqsubge.u16','vqsublt.u16','vqsubgt.u16','vqsuble.u16',
            'vqsubeq.u32','vqsubne.u32','vqsubcs.u32','vqsubhs.u32','vqsubcc.u32','vqsublo.u32','vqsubmi.u32','vqsubpl.u32','vqsubvs.u32','vqsubvc.u32','vqsubhi.u32','vqsubls.u32','vqsubge.u32','vqsublt.u32','vqsubgt.u32','vqsuble.u32',
            'vqsubeq.u64','vqsubne.u64','vqsubcs.u64','vqsubhs.u64','vqsubcc.u64','vqsublo.u64','vqsubmi.u64','vqsubpl.u64','vqsubvs.u64','vqsubvc.u64','vqsubhi.u64','vqsubls.u64','vqsubge.u64','vqsublt.u64','vqsubgt.u64','vqsuble.u64',

            'vqmovneq.u16','vqmovnne.u16','vqmovncs.u16','vqmovnhs.u16','vqmovncc.u16','vqmovnlo.u16','vqmovnmi.u16','vqmovnpl.u16','vqmovnvs.u16','vqmovnvc.u16','vqmovnhi.u16','vqmovnls.u16','vqmovnge.u16','vqmovnlt.u16','vqmovngt.u16','vqmovnle.u16',
            'vqmovneq.u32','vqmovnne.u32','vqmovncs.u32','vqmovnhs.u32','vqmovncc.u32','vqmovnlo.u32','vqmovnmi.u32','vqmovnpl.u32','vqmovnvs.u32','vqmovnvc.u32','vqmovnhi.u32','vqmovnls.u32','vqmovnge.u32','vqmovnlt.u32','vqmovngt.u32','vqmovnle.u32',
            'vqmovneq.u64','vqmovnne.u64','vqmovncs.u64','vqmovnhs.u64','vqmovncc.u64','vqmovnlo.u64','vqmovnmi.u64','vqmovnpl.u64','vqmovnvs.u64','vqmovnvc.u64','vqmovnhi.u64','vqmovnls.u64','vqmovnge.u64','vqmovnlt.u64','vqmovngt.u64','vqmovnle.u64',

            'vqshleq.u8','vqshlne.u8','vqshlcs.u8','vqshlhs.u8','vqshlcc.u8','vqshllo.u8','vqshlmi.u8','vqshlpl.u8','vqshlvs.u8','vqshlvc.u8','vqshlhi.u8','vqshlls.u8','vqshlge.u8','vqshllt.u8','vqshlgt.u8','vqshlle.u8',
            'vqshleq.u16','vqshlne.u16','vqshlcs.u16','vqshlhs.u16','vqshlcc.u16','vqshllo.u16','vqshlmi.u16','vqshlpl.u16','vqshlvs.u16','vqshlvc.u16','vqshlhi.u16','vqshlls.u16','vqshlge.u16','vqshllt.u16','vqshlgt.u16','vqshlle.u16',
            'vqshleq.u32','vqshlne.u32','vqshlcs.u32','vqshlhs.u32','vqshlcc.u32','vqshllo.u32','vqshlmi.u32','vqshlpl.u32','vqshlvs.u32','vqshlvc.u32','vqshlhi.u32','vqshlls.u32','vqshlge.u32','vqshllt.u32','vqshlgt.u32','vqshlle.u32',
            'vqshleq.u64','vqshlne.u64','vqshlcs.u64','vqshlhs.u64','vqshlcc.u64','vqshllo.u64','vqshlmi.u64','vqshlpl.u64','vqshlvs.u64','vqshlvc.u64','vqshlhi.u64','vqshlls.u64','vqshlge.u64','vqshllt.u64','vqshlgt.u64','vqshlle.u64',

            'vqshrneq.u16','vqshrnne.u16','vqshrncs.u16','vqshrnhs.u16','vqshrncc.u16','vqshrnlo.u16','vqshrnmi.u16','vqshrnpl.u16','vqshrnvs.u16','vqshrnvc.u16','vqshrnhi.u16','vqshrnls.u16','vqshrnge.u16','vqshrnlt.u16','vqshrngt.u16','vqshrnle.u16',
            'vqshrneq.u32','vqshrnne.u32','vqshrncs.u32','vqshrnhs.u32','vqshrncc.u32','vqshrnlo.u32','vqshrnmi.u32','vqshrnpl.u32','vqshrnvs.u32','vqshrnvc.u32','vqshrnhi.u32','vqshrnls.u32','vqshrnge.u32','vqshrnlt.u32','vqshrngt.u32','vqshrnle.u32',
            'vqshrneq.u64','vqshrnne.u64','vqshrncs.u64','vqshrnhs.u64','vqshrncc.u64','vqshrnlo.u64','vqshrnmi.u64','vqshrnpl.u64','vqshrnvs.u64','vqshrnvc.u64','vqshrnhi.u64','vqshrnls.u64','vqshrnge.u64','vqshrnlt.u64','vqshrngt.u64','vqshrnle.u64',

            'vqrshleq.u8','vqrshlne.u8','vqrshlcs.u8','vqrshlhs.u8','vqrshlcc.u8','vqrshllo.u8','vqrshlmi.u8','vqrshlpl.u8','vqrshlvs.u8','vqrshlvc.u8','vqrshlhi.u8','vqrshlls.u8','vqrshlge.u8','vqrshllt.u8','vqrshlgt.u8','vqrshlle.u8',
            'vqrshleq.u16','vqrshlne.u16','vqrshlcs.u16','vqrshlhs.u16','vqrshlcc.u16','vqrshllo.u16','vqrshlmi.u16','vqrshlpl.u16','vqrshlvs.u16','vqrshlvc.u16','vqrshlhi.u16','vqrshlls.u16','vqrshlge.u16','vqrshllt.u16','vqrshlgt.u16','vqrshlle.u16',
            'vqrshleq.u32','vqrshlne.u32','vqrshlcs.u32','vqrshlhs.u32','vqrshlcc.u32','vqrshllo.u32','vqrshlmi.u32','vqrshlpl.u32','vqrshlvs.u32','vqrshlvc.u32','vqrshlhi.u32','vqrshlls.u32','vqrshlge.u32','vqrshllt.u32','vqrshlgt.u32','vqrshlle.u32',
            'vqrshleq.u64','vqrshlne.u64','vqrshlcs.u64','vqrshlhs.u64','vqrshlcc.u64','vqrshllo.u64','vqrshlmi.u64','vqrshlpl.u64','vqrshlvs.u64','vqrshlvc.u64','vqrshlhi.u64','vqrshlls.u64','vqrshlge.u64','vqrshllt.u64','vqrshlgt.u64','vqrshlle.u64',

            'vqrshrneq.u16','vqrshrnne.u16','vqrshrncs.u16','vqrshrnhs.u16','vqrshrncc.u16','vqrshrnlo.u16','vqrshrnmi.u16','vqrshrnpl.u16','vqrshrnvs.u16','vqrshrnvc.u16','vqrshrnhi.u16','vqrshrnls.u16','vqrshrnge.u16','vqrshrnlt.u16','vqrshrngt.u16','vqrshrnle.u16',
            'vqrshrneq.u32','vqrshrnne.u32','vqrshrncs.u32','vqrshrnhs.u32','vqrshrncc.u32','vqrshrnlo.u32','vqrshrnmi.u32','vqrshrnpl.u32','vqrshrnvs.u32','vqrshrnvc.u32','vqrshrnhi.u32','vqrshrnls.u32','vqrshrnge.u32','vqrshrnlt.u32','vqrshrngt.u32','vqrshrnle.u32',
            'vqrshrneq.u64','vqrshrnne.u64','vqrshrncs.u64','vqrshrnhs.u64','vqrshrncc.u64','vqrshrnlo.u64','vqrshrnmi.u64','vqrshrnpl.u64','vqrshrnvs.u64','vqrshrnvc.u64','vqrshrnhi.u64','vqrshrnls.u64','vqrshrnge.u64','vqrshrnlt.u64','vqrshrngt.u64','vqrshrnle.u64',

            'vrhaddeq.u8','vrhaddne.u8','vrhaddcs.u8','vrhaddhs.u8','vrhaddcc.u8','vrhaddlo.u8','vrhaddmi.u8','vrhaddpl.u8','vrhaddvs.u8','vrhaddvc.u8','vrhaddhi.u8','vrhaddls.u8','vrhaddge.u8','vrhaddlt.u8','vrhaddgt.u8','vrhaddle.u8',
            'vrhaddeq.u16','vrhaddne.u16','vrhaddcs.u16','vrhaddhs.u16','vrhaddcc.u16','vrhaddlo.u16','vrhaddmi.u16','vrhaddpl.u16','vrhaddvs.u16','vrhaddvc.u16','vrhaddhi.u16','vrhaddls.u16','vrhaddge.u16','vrhaddlt.u16','vrhaddgt.u16','vrhaddle.u16',
            'vrhaddeq.u32','vrhaddne.u32','vrhaddcs.u32','vrhaddhs.u32','vrhaddcc.u32','vrhaddlo.u32','vrhaddmi.u32','vrhaddpl.u32','vrhaddvs.u32','vrhaddvc.u32','vrhaddhi.u32','vrhaddls.u32','vrhaddge.u32','vrhaddlt.u32','vrhaddgt.u32','vrhaddle.u32',

            'vrshleq.u8','vrshlne.u8','vrshlcs.u8','vrshlhs.u8','vrshlcc.u8','vrshllo.u8','vrshlmi.u8','vrshlpl.u8','vrshlvs.u8','vrshlvc.u8','vrshlhi.u8','vrshlls.u8','vrshlge.u8','vrshllt.u8','vrshlgt.u8','vrshlle.u8',
            'vrshleq.u16','vrshlne.u16','vrshlcs.u16','vrshlhs.u16','vrshlcc.u16','vrshllo.u16','vrshlmi.u16','vrshlpl.u16','vrshlvs.u16','vrshlvc.u16','vrshlhi.u16','vrshlls.u16','vrshlge.u16','vrshllt.u16','vrshlgt.u16','vrshlle.u16',
            'vrshleq.u32','vrshlne.u32','vrshlcs.u32','vrshlhs.u32','vrshlcc.u32','vrshllo.u32','vrshlmi.u32','vrshlpl.u32','vrshlvs.u32','vrshlvc.u32','vrshlhi.u32','vrshlls.u32','vrshlge.u32','vrshllt.u32','vrshlgt.u32','vrshlle.u32',
            'vrshleq.u64','vrshlne.u64','vrshlcs.u64','vrshlhs.u64','vrshlcc.u64','vrshllo.u64','vrshlmi.u64','vrshlpl.u64','vrshlvs.u64','vrshlvc.u64','vrshlhi.u64','vrshlls.u64','vrshlge.u64','vrshllt.u64','vrshlgt.u64','vrshlle.u64',

            'vrshreq.u8','vrshrne.u8','vrshrcs.u8','vrshrhs.u8','vrshrcc.u8','vrshrlo.u8','vrshrmi.u8','vrshrpl.u8','vrshrvs.u8','vrshrvc.u8','vrshrhi.u8','vrshrls.u8','vrshrge.u8','vrshrlt.u8','vrshrgt.u8','vrshrle.u8',
            'vrshreq.u16','vrshrne.u16','vrshrcs.u16','vrshrhs.u16','vrshrcc.u16','vrshrlo.u16','vrshrmi.u16','vrshrpl.u16','vrshrvs.u16','vrshrvc.u16','vrshrhi.u16','vrshrls.u16','vrshrge.u16','vrshrlt.u16','vrshrgt.u16','vrshrle.u16',
            'vrshreq.u32','vrshrne.u32','vrshrcs.u32','vrshrhs.u32','vrshrcc.u32','vrshrlo.u32','vrshrmi.u32','vrshrpl.u32','vrshrvs.u32','vrshrvc.u32','vrshrhi.u32','vrshrls.u32','vrshrge.u32','vrshrlt.u32','vrshrgt.u32','vrshrle.u32',
            'vrshreq.u64','vrshrne.u64','vrshrcs.u64','vrshrhs.u64','vrshrcc.u64','vrshrlo.u64','vrshrmi.u64','vrshrpl.u64','vrshrvs.u64','vrshrvc.u64','vrshrhi.u64','vrshrls.u64','vrshrge.u64','vrshrlt.u64','vrshrgt.u64','vrshrle.u64',

            'vrsraeq.u8','vrsrane.u8','vrsracs.u8','vrsrahs.u8','vrsracc.u8','vrsralo.u8','vrsrami.u8','vrsrapl.u8','vrsravs.u8','vrsravc.u8','vrsrahi.u8','vrsrals.u8','vrsrage.u8','vrsralt.u8','vrsragt.u8','vrsrale.u8',
            'vrsraeq.u16','vrsrane.u16','vrsracs.u16','vrsrahs.u16','vrsracc.u16','vrsralo.u16','vrsrami.u16','vrsrapl.u16','vrsravs.u16','vrsravc.u16','vrsrahi.u16','vrsrals.u16','vrsrage.u16','vrsralt.u16','vrsragt.u16','vrsrale.u16',
            'vrsraeq.u32','vrsrane.u32','vrsracs.u32','vrsrahs.u32','vrsracc.u32','vrsralo.u32','vrsrami.u32','vrsrapl.u32','vrsravs.u32','vrsravc.u32','vrsrahi.u32','vrsrals.u32','vrsrage.u32','vrsralt.u32','vrsragt.u32','vrsrale.u32',
            'vrsraeq.u64','vrsrane.u64','vrsracs.u64','vrsrahs.u64','vrsracc.u64','vrsralo.u64','vrsrami.u64','vrsrapl.u64','vrsravs.u64','vrsravc.u64','vrsrahi.u64','vrsrals.u64','vrsrage.u64','vrsralt.u64','vrsragt.u64','vrsrale.u64',
            ),
        /* Conditional VFPv3 & NEON SIMD Floating-Point Instructions */
        34 => array(
            'vabdeq.f32','vabdne.f32','vabdcs.f32','vabdhs.f32','vabdcc.f32','vabdlo.f32','vabdmi.f32','vabdpl.f32','vabdvs.f32','vabdvc.f32','vabdhi.f32','vabdls.f32','vabdge.f32','vabdlt.f32','vabdgt.f32','vabdle.f32',

            'vabseq.f32','vabsne.f32','vabscs.f32','vabshs.f32','vabscc.f32','vabslo.f32','vabsmi.f32','vabspl.f32','vabsvs.f32','vabsvc.f32','vabshi.f32','vabsls.f32','vabsge.f32','vabslt.f32','vabsgt.f32','vabsle.f32',
            'vabseq.f64','vabsne.f64','vabscs.f64','vabshs.f64','vabscc.f64','vabslo.f64','vabsmi.f64','vabspl.f64','vabsvs.f64','vabsvc.f64','vabshi.f64','vabsls.f64','vabsge.f64','vabslt.f64','vabsgt.f64','vabsle.f64',

            'vacgeeq.f32','vacgene.f32','vacgecs.f32','vacgehs.f32','vacgecc.f32','vacgelo.f32','vacgemi.f32','vacgepl.f32','vacgevs.f32','vacgevc.f32','vacgehi.f32','vacgels.f32','vacgege.f32','vacgelt.f32','vacgegt.f32','vacgele.f32',
            'vacgteq.f32','vacgtne.f32','vacgtcs.f32','vacgths.f32','vacgtcc.f32','vacgtlo.f32','vacgtmi.f32','vacgtpl.f32','vacgtvs.f32','vacgtvc.f32','vacgthi.f32','vacgtls.f32','vacgtge.f32','vacgtlt.f32','vacgtgt.f32','vacgtle.f32',
            'vacleeq.f32','vaclene.f32','vaclecs.f32','vaclehs.f32','vaclecc.f32','vaclelo.f32','vaclemi.f32','vaclepl.f32','vaclevs.f32','vaclevc.f32','vaclehi.f32','vaclels.f32','vaclege.f32','vaclelt.f32','vaclegt.f32','vaclele.f32',
            'vaclteq.f32','vacltne.f32','vacltcs.f32','vaclths.f32','vacltcc.f32','vacltlo.f32','vacltmi.f32','vacltpl.f32','vacltvs.f32','vacltvc.f32','vaclthi.f32','vacltls.f32','vacltge.f32','vacltlt.f32','vacltgt.f32','vacltle.f32',

            'vaddeq.f32','vaddne.f32','vaddcs.f32','vaddhs.f32','vaddcc.f32','vaddlo.f32','vaddmi.f32','vaddpl.f32','vaddvs.f32','vaddvc.f32','vaddhi.f32','vaddls.f32','vaddge.f32','vaddlt.f32','vaddgt.f32','vaddle.f32',
            'vaddeq.f64','vaddne.f64','vaddcs.f64','vaddhs.f64','vaddcc.f64','vaddlo.f64','vaddmi.f64','vaddpl.f64','vaddvs.f64','vaddvc.f64','vaddhi.f64','vaddls.f64','vaddge.f64','vaddlt.f64','vaddgt.f64','vaddle.f64',

            'vceqeq.f32','vceqne.f32','vceqcs.f32','vceqhs.f32','vceqcc.f32','vceqlo.f32','vceqmi.f32','vceqpl.f32','vceqvs.f32','vceqvc.f32','vceqhi.f32','vceqls.f32','vceqge.f32','vceqlt.f32','vceqgt.f32','vceqle.f32',
            'vcgeeq.f32','vcgene.f32','vcgecs.f32','vcgehs.f32','vcgecc.f32','vcgelo.f32','vcgemi.f32','vcgepl.f32','vcgevs.f32','vcgevc.f32','vcgehi.f32','vcgels.f32','vcgege.f32','vcgelt.f32','vcgegt.f32','vcgele.f32',
            'vcleeq.f32','vclene.f32','vclecs.f32','vclehs.f32','vclecc.f32','vclelo.f32','vclemi.f32','vclepl.f32','vclevs.f32','vclevc.f32','vclehi.f32','vclels.f32','vclege.f32','vclelt.f32','vclegt.f32','vclele.f32',
            'vcgteq.f32','vcgtne.f32','vcgtcs.f32','vcgths.f32','vcgtcc.f32','vcgtlo.f32','vcgtmi.f32','vcgtpl.f32','vcgtvs.f32','vcgtvc.f32','vcgthi.f32','vcgtls.f32','vcgtge.f32','vcgtlt.f32','vcgtgt.f32','vcgtle.f32',
            'vclteq.f32','vcltne.f32','vcltcs.f32','vclths.f32','vcltcc.f32','vcltlo.f32','vcltmi.f32','vcltpl.f32','vcltvs.f32','vcltvc.f32','vclthi.f32','vcltls.f32','vcltge.f32','vcltlt.f32','vcltgt.f32','vcltle.f32',

            'vcmpeq.f32','vcmpne.f32','vcmpcs.f32','vcmphs.f32','vcmpcc.f32','vcmplo.f32','vcmpmi.f32','vcmppl.f32','vcmpvs.f32','vcmpvc.f32','vcmphi.f32','vcmpls.f32','vcmpge.f32','vcmplt.f32','vcmpgt.f32','vcmple.f32',
            'vcmpeq.f64','vcmpne.f64','vcmpcs.f64','vcmphs.f64','vcmpcc.f64','vcmplo.f64','vcmpmi.f64','vcmppl.f64','vcmpvs.f64','vcmpvc.f64','vcmphi.f64','vcmpls.f64','vcmpge.f64','vcmplt.f64','vcmpgt.f64','vcmple.f64',

            'vcmpeeq.f32','vcmpene.f32','vcmpecs.f32','vcmpehs.f32','vcmpecc.f32','vcmpelo.f32','vcmpemi.f32','vcmpepl.f32','vcmpevs.f32','vcmpevc.f32','vcmpehi.f32','vcmpels.f32','vcmpege.f32','vcmpelt.f32','vcmpegt.f32','vcmpele.f32',
            'vcmpeeq.f64','vcmpene.f64','vcmpecs.f64','vcmpehs.f64','vcmpecc.f64','vcmpelo.f64','vcmpemi.f64','vcmpepl.f64','vcmpevs.f64','vcmpevc.f64','vcmpehi.f64','vcmpels.f64','vcmpege.f64','vcmpelt.f64','vcmpegt.f64','vcmpele.f64',

            'vcvteq.s16.f32','vcvtne.s16.f32','vcvtcs.s16.f32','vcvths.s16.f32','vcvtcc.s16.f32','vcvtlo.s16.f32','vcvtmi.s16.f32','vcvtpl.s16.f32','vcvtvs.s16.f32','vcvtvc.s16.f32','vcvthi.s16.f32','vcvtls.s16.f32','vcvtge.s16.f32','vcvtlt.s16.f32','vcvtgt.s16.f32','vcvtle.s16.f32',
            'vcvteq.s16.f64','vcvtne.s16.f64','vcvtcs.s16.f64','vcvths.s16.f64','vcvtcc.s16.f64','vcvtlo.s16.f64','vcvtmi.s16.f64','vcvtpl.s16.f64','vcvtvs.s16.f64','vcvtvc.s16.f64','vcvthi.s16.f64','vcvtls.s16.f64','vcvtge.s16.f64','vcvtlt.s16.f64','vcvtgt.s16.f64','vcvtle.s16.f64',
            'vcvteq.s32.f32','vcvtne.s32.f32','vcvtcs.s32.f32','vcvths.s32.f32','vcvtcc.s32.f32','vcvtlo.s32.f32','vcvtmi.s32.f32','vcvtpl.s32.f32','vcvtvs.s32.f32','vcvtvc.s32.f32','vcvthi.s32.f32','vcvtls.s32.f32','vcvtge.s32.f32','vcvtlt.s32.f32','vcvtgt.s32.f32','vcvtle.s32.f32',
            'vcvteq.s32.f64','vcvtne.s32.f64','vcvtcs.s32.f64','vcvths.s32.f64','vcvtcc.s32.f64','vcvtlo.s32.f64','vcvtmi.s32.f64','vcvtpl.s32.f64','vcvtvs.s32.f64','vcvtvc.s32.f64','vcvthi.s32.f64','vcvtls.s32.f64','vcvtge.s32.f64','vcvtlt.s32.f64','vcvtgt.s32.f64','vcvtle.s32.f64',
            'vcvteq.u16.f32','vcvtne.u16.f32','vcvtcs.u16.f32','vcvths.u16.f32','vcvtcc.u16.f32','vcvtlo.u16.f32','vcvtmi.u16.f32','vcvtpl.u16.f32','vcvtvs.u16.f32','vcvtvc.u16.f32','vcvthi.u16.f32','vcvtls.u16.f32','vcvtge.u16.f32','vcvtlt.u16.f32','vcvtgt.u16.f32','vcvtle.u16.f32',
            'vcvteq.u16.f64','vcvtne.u16.f64','vcvtcs.u16.f64','vcvths.u16.f64','vcvtcc.u16.f64','vcvtlo.u16.f64','vcvtmi.u16.f64','vcvtpl.u16.f64','vcvtvs.u16.f64','vcvtvc.u16.f64','vcvthi.u16.f64','vcvtls.u16.f64','vcvtge.u16.f64','vcvtlt.u16.f64','vcvtgt.u16.f64','vcvtle.u16.f64',
            'vcvteq.u32.f32','vcvtne.u32.f32','vcvtcs.u32.f32','vcvths.u32.f32','vcvtcc.u32.f32','vcvtlo.u32.f32','vcvtmi.u32.f32','vcvtpl.u32.f32','vcvtvs.u32.f32','vcvtvc.u32.f32','vcvthi.u32.f32','vcvtls.u32.f32','vcvtge.u32.f32','vcvtlt.u32.f32','vcvtgt.u32.f32','vcvtle.u32.f32',
            'vcvteq.u32.f64','vcvtne.u32.f64','vcvtcs.u32.f64','vcvths.u32.f64','vcvtcc.u32.f64','vcvtlo.u32.f64','vcvtmi.u32.f64','vcvtpl.u32.f64','vcvtvs.u32.f64','vcvtvc.u32.f64','vcvthi.u32.f64','vcvtls.u32.f64','vcvtge.u32.f64','vcvtlt.u32.f64','vcvtgt.u32.f64','vcvtle.u32.f64',
            'vcvteq.f16.f32','vcvtne.f16.f32','vcvtcs.f16.f32','vcvths.f16.f32','vcvtcc.f16.f32','vcvtlo.f16.f32','vcvtmi.f16.f32','vcvtpl.f16.f32','vcvtvs.f16.f32','vcvtvc.f16.f32','vcvthi.f16.f32','vcvtls.f16.f32','vcvtge.f16.f32','vcvtlt.f16.f32','vcvtgt.f16.f32','vcvtle.f16.f32',
            'vcvteq.f32.s32','vcvtne.f32.s32','vcvtcs.f32.s32','vcvths.f32.s32','vcvtcc.f32.s32','vcvtlo.f32.s32','vcvtmi.f32.s32','vcvtpl.f32.s32','vcvtvs.f32.s32','vcvtvc.f32.s32','vcvthi.f32.s32','vcvtls.f32.s32','vcvtge.f32.s32','vcvtlt.f32.s32','vcvtgt.f32.s32','vcvtle.f32.s32',
            'vcvteq.f32.u32','vcvtne.f32.u32','vcvtcs.f32.u32','vcvths.f32.u32','vcvtcc.f32.u32','vcvtlo.f32.u32','vcvtmi.f32.u32','vcvtpl.f32.u32','vcvtvs.f32.u32','vcvtvc.f32.u32','vcvthi.f32.u32','vcvtls.f32.u32','vcvtge.f32.u32','vcvtlt.f32.u32','vcvtgt.f32.u32','vcvtle.f32.u32',
            'vcvteq.f32.f16','vcvtne.f32.f16','vcvtcs.f32.f16','vcvths.f32.f16','vcvtcc.f32.f16','vcvtlo.f32.f16','vcvtmi.f32.f16','vcvtpl.f32.f16','vcvtvs.f32.f16','vcvtvc.f32.f16','vcvthi.f32.f16','vcvtls.f32.f16','vcvtge.f32.f16','vcvtlt.f32.f16','vcvtgt.f32.f16','vcvtle.f32.f16',
            'vcvteq.f32.f64','vcvtne.f32.f64','vcvtcs.f32.f64','vcvths.f32.f64','vcvtcc.f32.f64','vcvtlo.f32.f64','vcvtmi.f32.f64','vcvtpl.f32.f64','vcvtvs.f32.f64','vcvtvc.f32.f64','vcvthi.f32.f64','vcvtls.f32.f64','vcvtge.f32.f64','vcvtlt.f32.f64','vcvtgt.f32.f64','vcvtle.f32.f64',
            'vcvteq.f64.s32','vcvtne.f64.s32','vcvtcs.f64.s32','vcvths.f64.s32','vcvtcc.f64.s32','vcvtlo.f64.s32','vcvtmi.f64.s32','vcvtpl.f64.s32','vcvtvs.f64.s32','vcvtvc.f64.s32','vcvthi.f64.s32','vcvtls.f64.s32','vcvtge.f64.s32','vcvtlt.f64.s32','vcvtgt.f64.s32','vcvtle.f64.s32',
            'vcvteq.f64.u32','vcvtne.f64.u32','vcvtcs.f64.u32','vcvths.f64.u32','vcvtcc.f64.u32','vcvtlo.f64.u32','vcvtmi.f64.u32','vcvtpl.f64.u32','vcvtvs.f64.u32','vcvtvc.f64.u32','vcvthi.f64.u32','vcvtls.f64.u32','vcvtge.f64.u32','vcvtlt.f64.u32','vcvtgt.f64.u32','vcvtle.f64.u32',
            'vcvteq.f64.f32','vcvtne.f64.f32','vcvtcs.f64.f32','vcvths.f64.f32','vcvtcc.f64.f32','vcvtlo.f64.f32','vcvtmi.f64.f32','vcvtpl.f64.f32','vcvtvs.f64.f32','vcvtvc.f64.f32','vcvthi.f64.f32','vcvtls.f64.f32','vcvtge.f64.f32','vcvtlt.f64.f32','vcvtgt.f64.f32','vcvtle.f64.f32',

            'vcvtreq.s32.f32','vcvtrne.s32.f32','vcvtrcs.s32.f32','vcvtrhs.s32.f32','vcvtrcc.s32.f32','vcvtrlo.s32.f32','vcvtrmi.s32.f32','vcvtrpl.s32.f32','vcvtrvs.s32.f32','vcvtrvc.s32.f32','vcvtrhi.s32.f32','vcvtrls.s32.f32','vcvtrge.s32.f32','vcvtrlt.s32.f32','vcvtrgt.s32.f32','vcvtrle.s32.f32',
            'vcvtreq.s32.f64','vcvtrne.s32.f64','vcvtrcs.s32.f64','vcvtrhs.s32.f64','vcvtrcc.s32.f64','vcvtrlo.s32.f64','vcvtrmi.s32.f64','vcvtrpl.s32.f64','vcvtrvs.s32.f64','vcvtrvc.s32.f64','vcvtrhi.s32.f64','vcvtrls.s32.f64','vcvtrge.s32.f64','vcvtrlt.s32.f64','vcvtrgt.s32.f64','vcvtrle.s32.f64',
            'vcvtreq.u32.f32','vcvtrne.u32.f32','vcvtrcs.u32.f32','vcvtrhs.u32.f32','vcvtrcc.u32.f32','vcvtrlo.u32.f32','vcvtrmi.u32.f32','vcvtrpl.u32.f32','vcvtrvs.u32.f32','vcvtrvc.u32.f32','vcvtrhi.u32.f32','vcvtrls.u32.f32','vcvtrge.u32.f32','vcvtrlt.u32.f32','vcvtrgt.u32.f32','vcvtrle.u32.f32',
            'vcvtreq.u32.f64','vcvtrne.u32.f64','vcvtrcs.u32.f64','vcvtrhs.u32.f64','vcvtrcc.u32.f64','vcvtrlo.u32.f64','vcvtrmi.u32.f64','vcvtrpl.u32.f64','vcvtrvs.u32.f64','vcvtrvc.u32.f64','vcvtrhi.u32.f64','vcvtrls.u32.f64','vcvtrge.u32.f64','vcvtrlt.u32.f64','vcvtrgt.u32.f64','vcvtrle.u32.f64',

            'vcvtbeq.f16.f32','vcvtbne.f16.f32','vcvtbcs.f16.f32','vcvtbhs.f16.f32','vcvtbcc.f16.f32','vcvtblo.f16.f32','vcvtbmi.f16.f32','vcvtbpl.f16.f32','vcvtbvs.f16.f32','vcvtbvc.f16.f32','vcvtbhi.f16.f32','vcvtbls.f16.f32','vcvtbge.f16.f32','vcvtblt.f16.f32','vcvtbgt.f16.f32','vcvtble.f16.f32',
            'vcvtbeq.f32.f16','vcvtbne.f32.f16','vcvtbcs.f32.f16','vcvtbhs.f32.f16','vcvtbcc.f32.f16','vcvtblo.f32.f16','vcvtbmi.f32.f16','vcvtbpl.f32.f16','vcvtbvs.f32.f16','vcvtbvc.f32.f16','vcvtbhi.f32.f16','vcvtbls.f32.f16','vcvtbge.f32.f16','vcvtblt.f32.f16','vcvtbgt.f32.f16','vcvtble.f32.f16',

            'vcvtteq.f16.f32','vcvttne.f16.f32','vcvttcs.f16.f32','vcvtths.f16.f32','vcvttcc.f16.f32','vcvttlo.f16.f32','vcvttmi.f16.f32','vcvttpl.f16.f32','vcvttvs.f16.f32','vcvttvc.f16.f32','vcvtthi.f16.f32','vcvttls.f16.f32','vcvttge.f16.f32','vcvttlt.f16.f32','vcvttgt.f16.f32','vcvttle.f16.f32',
            'vcvtteq.f32.f16','vcvttne.f32.f16','vcvttcs.f32.f16','vcvtths.f32.f16','vcvttcc.f32.f16','vcvttlo.f32.f16','vcvttmi.f32.f16','vcvttpl.f32.f16','vcvttvs.f32.f16','vcvttvc.f32.f16','vcvtthi.f32.f16','vcvttls.f32.f16','vcvttge.f32.f16','vcvttlt.f32.f16','vcvttgt.f32.f16','vcvttle.f32.f16',

            'vdiveq.f32','vdivne.f32','vdivcs.f32','vdivhs.f32','vdivcc.f32','vdivlo.f32','vdivmi.f32','vdivpl.f32','vdivvs.f32','vdivvc.f32','vdivhi.f32','vdivls.f32','vdivge.f32','vdivlt.f32','vdivgt.f32','vdivle.f32',
            'vdiveq.f64','vdivne.f64','vdivcs.f64','vdivhs.f64','vdivcc.f64','vdivlo.f64','vdivmi.f64','vdivpl.f64','vdivvs.f64','vdivvc.f64','vdivhi.f64','vdivls.f64','vdivge.f64','vdivlt.f64','vdivgt.f64','vdivle.f64',

            'vmaxeq.f32','vmaxne.f32','vmaxcs.f32','vmaxhs.f32','vmaxcc.f32','vmaxlo.f32','vmaxmi.f32','vmaxpl.f32','vmaxvs.f32','vmaxvc.f32','vmaxhi.f32','vmaxls.f32','vmaxge.f32','vmaxlt.f32','vmaxgt.f32','vmaxle.f32',
            'vmineq.f32','vminne.f32','vmincs.f32','vminhs.f32','vmincc.f32','vminlo.f32','vminmi.f32','vminpl.f32','vminvs.f32','vminvc.f32','vminhi.f32','vminls.f32','vminge.f32','vminlt.f32','vmingt.f32','vminle.f32',

            'vmlaeq.f32','vmlane.f32','vmlacs.f32','vmlahs.f32','vmlacc.f32','vmlalo.f32','vmlami.f32','vmlapl.f32','vmlavs.f32','vmlavc.f32','vmlahi.f32','vmlals.f32','vmlage.f32','vmlalt.f32','vmlagt.f32','vmlale.f32',
            'vmlaeq.f64','vmlane.f64','vmlacs.f64','vmlahs.f64','vmlacc.f64','vmlalo.f64','vmlami.f64','vmlapl.f64','vmlavs.f64','vmlavc.f64','vmlahi.f64','vmlals.f64','vmlage.f64','vmlalt.f64','vmlagt.f64','vmlale.f64',

            'vmlseq.f32','vmlsne.f32','vmlscs.f32','vmlshs.f32','vmlscc.f32','vmlslo.f32','vmlsmi.f32','vmlspl.f32','vmlsvs.f32','vmlsvc.f32','vmlshi.f32','vmlsls.f32','vmlsge.f32','vmlslt.f32','vmlsgt.f32','vmlsle.f32',
            'vmlseq.f64','vmlsne.f64','vmlscs.f64','vmlshs.f64','vmlscc.f64','vmlslo.f64','vmlsmi.f64','vmlspl.f64','vmlsvs.f64','vmlsvc.f64','vmlshi.f64','vmlsls.f64','vmlsge.f64','vmlslt.f64','vmlsgt.f64','vmlsle.f64',

            'vmuleq.f32','vmulne.f32','vmulcs.f32','vmulhs.f32','vmulcc.f32','vmullo.f32','vmulmi.f32','vmulpl.f32','vmulvs.f32','vmulvc.f32','vmulhi.f32','vmulls.f32','vmulge.f32','vmullt.f32','vmulgt.f32','vmulle.f32',
            'vmuleq.f64','vmulne.f64','vmulcs.f64','vmulhs.f64','vmulcc.f64','vmullo.f64','vmulmi.f64','vmulpl.f64','vmulvs.f64','vmulvc.f64','vmulhi.f64','vmulls.f64','vmulge.f64','vmullt.f64','vmulgt.f64','vmulle.f64',

            'vnegeq.f32','vnegne.f32','vnegcs.f32','vneghs.f32','vnegcc.f32','vneglo.f32','vnegmi.f32','vnegpl.f32','vnegvs.f32','vnegvc.f32','vneghi.f32','vnegls.f32','vnegge.f32','vneglt.f32','vneggt.f32','vnegle.f32',
            'vnegeq.f64','vnegne.f64','vnegcs.f64','vneghs.f64','vnegcc.f64','vneglo.f64','vnegmi.f64','vnegpl.f64','vnegvs.f64','vnegvc.f64','vneghi.f64','vnegls.f64','vnegge.f64','vneglt.f64','vneggt.f64','vnegle.f64',

            'vnmlaeq.f32','vnmlane.f32','vnmlacs.f32','vnmlahs.f32','vnmlacc.f32','vnmlalo.f32','vnmlami.f32','vnmlapl.f32','vnmlavs.f32','vnmlavc.f32','vnmlahi.f32','vnmlals.f32','vnmlage.f32','vnmlalt.f32','vnmlagt.f32','vnmlale.f32',
            'vnmlaeq.f64','vnmlane.f64','vnmlacs.f64','vnmlahs.f64','vnmlacc.f64','vnmlalo.f64','vnmlami.f64','vnmlapl.f64','vnmlavs.f64','vnmlavc.f64','vnmlahi.f64','vnmlals.f64','vnmlage.f64','vnmlalt.f64','vnmlagt.f64','vnmlale.f64',

            'vnmlseq.f32','vnmlsne.f32','vnmlscs.f32','vnmlshs.f32','vnmlscc.f32','vnmlslo.f32','vnmlsmi.f32','vnmlspl.f32','vnmlsvs.f32','vnmlsvc.f32','vnmlshi.f32','vnmlsls.f32','vnmlsge.f32','vnmlslt.f32','vnmlsgt.f32','vnmlsle.f32',
            'vnmlseq.f64','vnmlsne.f64','vnmlscs.f64','vnmlshs.f64','vnmlscc.f64','vnmlslo.f64','vnmlsmi.f64','vnmlspl.f64','vnmlsvs.f64','vnmlsvc.f64','vnmlshi.f64','vnmlsls.f64','vnmlsge.f64','vnmlslt.f64','vnmlsgt.f64','vnmlsle.f64',

            'vnmuleq.f64','vnmulne.f64','vnmulcs.f64','vnmulhs.f64','vnmulcc.f64','vnmullo.f64','vnmulmi.f64','vnmulpl.f64','vnmulvs.f64','vnmulvc.f64','vnmulhi.f64','vnmulls.f64','vnmulge.f64','vnmullt.f64','vnmulgt.f64','vnmulle.f64',
            'vnmuleq.f32','vnmulne.f32','vnmulcs.f32','vnmulhs.f32','vnmulcc.f32','vnmullo.f32','vnmulmi.f32','vnmulpl.f32','vnmulvs.f32','vnmulvc.f32','vnmulhi.f32','vnmulls.f32','vnmulge.f32','vnmullt.f32','vnmulgt.f32','vnmulle.f32',

            'vpaddeq.f32','vpaddne.f32','vpaddcs.f32','vpaddhs.f32','vpaddcc.f32','vpaddlo.f32','vpaddmi.f32','vpaddpl.f32','vpaddvs.f32','vpaddvc.f32','vpaddhi.f32','vpaddls.f32','vpaddge.f32','vpaddlt.f32','vpaddgt.f32','vpaddle.f32',

            'vpmaxeq.f32','vpmaxne.f32','vpmaxcs.f32','vpmaxhs.f32','vpmaxcc.f32','vpmaxlo.f32','vpmaxmi.f32','vpmaxpl.f32','vpmaxvs.f32','vpmaxvc.f32','vpmaxhi.f32','vpmaxls.f32','vpmaxge.f32','vpmaxlt.f32','vpmaxgt.f32','vpmaxle.f32',
            'vpmineq.f32','vpminne.f32','vpmincs.f32','vpminhs.f32','vpmincc.f32','vpminlo.f32','vpminmi.f32','vpminpl.f32','vpminvs.f32','vpminvc.f32','vpminhi.f32','vpminls.f32','vpminge.f32','vpminlt.f32','vpmingt.f32','vpminle.f32',

            'vrecpeeq.u32','vrecpene.u32','vrecpecs.u32','vrecpehs.u32','vrecpecc.u32','vrecpelo.u32','vrecpemi.u32','vrecpepl.u32','vrecpevs.u32','vrecpevc.u32','vrecpehi.u32','vrecpels.u32','vrecpege.u32','vrecpelt.u32','vrecpegt.u32','vrecpele.u32',
            'vrecpeeq.f32','vrecpene.f32','vrecpecs.f32','vrecpehs.f32','vrecpecc.f32','vrecpelo.f32','vrecpemi.f32','vrecpepl.f32','vrecpevs.f32','vrecpevc.f32','vrecpehi.f32','vrecpels.f32','vrecpege.f32','vrecpelt.f32','vrecpegt.f32','vrecpele.f32',
            'vrecpseq.f32','vrecpsne.f32','vrecpscs.f32','vrecpshs.f32','vrecpscc.f32','vrecpslo.f32','vrecpsmi.f32','vrecpspl.f32','vrecpsvs.f32','vrecpsvc.f32','vrecpshi.f32','vrecpsls.f32','vrecpsge.f32','vrecpslt.f32','vrecpsgt.f32','vrecpsle.f32',

            'vrsqrteeq.u32','vrsqrtene.u32','vrsqrtecs.u32','vrsqrtehs.u32','vrsqrtecc.u32','vrsqrtelo.u32','vrsqrtemi.u32','vrsqrtepl.u32','vrsqrtevs.u32','vrsqrtevc.u32','vrsqrtehi.u32','vrsqrtels.u32','vrsqrtege.u32','vrsqrtelt.u32','vrsqrtegt.u32','vrsqrtele.u32',
            'vrsqrteeq.f32','vrsqrtene.f32','vrsqrtecs.f32','vrsqrtehs.f32','vrsqrtecc.f32','vrsqrtelo.f32','vrsqrtemi.f32','vrsqrtepl.f32','vrsqrtevs.f32','vrsqrtevc.f32','vrsqrtehi.f32','vrsqrtels.f32','vrsqrtege.f32','vrsqrtelt.f32','vrsqrtegt.f32','vrsqrtele.f32',
            'vrsqrtseq.f32','vrsqrtsne.f32','vrsqrtscs.f32','vrsqrtshs.f32','vrsqrtscc.f32','vrsqrtslo.f32','vrsqrtsmi.f32','vrsqrtspl.f32','vrsqrtsvs.f32','vrsqrtsvc.f32','vrsqrtshi.f32','vrsqrtsls.f32','vrsqrtsge.f32','vrsqrtslt.f32','vrsqrtsgt.f32','vrsqrtsle.f32',

            'vsqrteq.f32','vsqrtne.f32','vsqrtcs.f32','vsqrths.f32','vsqrtcc.f32','vsqrtlo.f32','vsqrtmi.f32','vsqrtpl.f32','vsqrtvs.f32','vsqrtvc.f32','vsqrthi.f32','vsqrtls.f32','vsqrtge.f32','vsqrtlt.f32','vsqrtgt.f32','vsqrtle.f32',
            'vsqrteq.f64','vsqrtne.f64','vsqrtcs.f64','vsqrths.f64','vsqrtcc.f64','vsqrtlo.f64','vsqrtmi.f64','vsqrtpl.f64','vsqrtvs.f64','vsqrtvc.f64','vsqrthi.f64','vsqrtls.f64','vsqrtge.f64','vsqrtlt.f64','vsqrtgt.f64','vsqrtle.f64',

            'vsubeq.f32','vsubne.f32','vsubcs.f32','vsubhs.f32','vsubcc.f32','vsublo.f32','vsubmi.f32','vsubpl.f32','vsubvs.f32','vsubvc.f32','vsubhi.f32','vsubls.f32','vsubge.f32','vsublt.f32','vsubgt.f32','vsuble.f32',
            'vsubeq.f64','vsubne.f64','vsubcs.f64','vsubhs.f64','vsubcc.f64','vsublo.f64','vsubmi.f64','vsubpl.f64','vsubvs.f64','vsubvc.f64','vsubhi.f64','vsubls.f64','vsubge.f64','vsublt.f64','vsubgt.f64','vsuble.f64'
            ),
        /* Registers */
        35 => array(
            /* General-Purpose Registers */
            'r0','r1','r2','r3','r4','r5','r6','r7',
            'r8','r9','r10','r11','r12','r13','r14','r15',
            /* Scratch Registers */
            'a1','a2','a3','a4',
            /* Variable Registers */
            'v1','v2','v3','v4','v5','v6','v7','v8',
            /* Other Synonims for General-Purpose Registers */
            'sb','sl','fp','ip','sp','lr','pc',
            /* WMMX Data Registers */
            'wr0','wr1','wr2','wr3','wr4','wr5','wr6','wr7',
            'wr8','wr9','wr10','wr11','wr12','wr13','wr14','wr15',
            /* WMMX Control Registers */
            'wcid','wcon','wcssf','wcasf',
            /* WMMX-Mapped General-Purpose Registers */
            'wcgr0','wcgr1','wcgr2','wcgr3',
            /* VFPv3 Registers */
            's0','s1','s2','s3','s4','s5','s6','s7',
            's8','s9','s10','s11','s12','s13','s14','s15',
            's16','s17','s18','s19','s20','s21','s22','s23',
            's24','s25','s26','s27','s28','s29','s30','s31',
            /* VFPv3/NEON Registers */
            'd0','d1','d2','d3','d4','d5','d6','d7',
            'd8','d9','d10','d11','d12','d13','d14','d15',
            'd16','d17','d18','d19','d20','d21','d22','d23',
            'd24','d25','d26','d27','d28','d29','d30','d31',
            /* NEON Registers */
            'q0','q1','q2','q3','q4','q5','q6','q7',
            'q8','q9','q10','q11','q12','q13','q14','q15'
            )
        ),
    'SYMBOLS' => array(
        '[', ']', '(', ')',
        '+', '-', '*', '/', '%',
        '.', ',', ';', ':'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        4 => false,
        5 => false,
        6 => false,
        7 => false,
        8 => false,
        9 => false,
        10 => false,
        11 => false,
        12 => false,
        13 => false,
        14 => false,
        15 => false,
        16 => false,
        17 => false,
        18 => false,
        19 => false,
        20 => false,
        21 => false,
        22 => false,
        23 => false,
        24 => false,
        25 => false,
        26 => false,
        27 => false,
        28 => false,
        29 => false,
        30 => false,
        31 => false,
        32 => false,
        33 => false,
        34 => false,
        35 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            /* Unconditional Data Processing Instructions */
            1 => 'color: #00007f; font-weight: normal; font-style: normal;',
            /* Conditional Data Processing Instructions */
            2 => 'color: #00007f; font-weight: normal; font-style: italic;',
            /* Unconditional Memory Access Instructions */
            3 => 'color: #00007f; font-weight: normal; font-style: normal;',
            /* Conditional Memory Access Instructions */
            4 => 'color: #00007f; font-weight: normal; font-style: italic;',
            /* Unconditional Flags Changing Instructions */
            5 => 'color: #00007f; font-weight: bold; font-style: normal;',
            /* Conditional Flags Changing Instructions */
            6 => 'color: #00007f; font-weight: bold; font-style: italic;',
            /* Unconditional Flow Control Instructions */
            7 => 'color: #0000ff; font-weight: normal; font-style: normal;',
            /* Conditional Flow Control Instructions */
            8 => 'color: #0000ff; font-weight: normal; font-style: italic;',
            /* Unconditional Syncronization Instructions */
            9 => 'color: #00007f; font-weight: normal; font-style: normal;',
            /* Conditional Syncronization Instructions */
            10 => 'color: #00007f; font-weight: normal; font-style: italic;',
            /* Unonditional ARMv6 SIMD */
            11 => 'color: #b00040; font-weight: normal; font-style: normal;',
            /* Conditional ARMv6 SIMD */
            12 => 'color: #b00040; font-weight: normal; font-style: italic;',
            /* Unconditional Coprocessor Instructions */
            13 => 'color: #00007f; font-weight: normal; font-style: normal;',
            /* Conditional Coprocessor Instructions */
            14 => 'color: #00007f; font-weight: bold; font-style: italic;',
            /* Unconditional System Instructions */
            15 => 'color: #00007f; font-weight: normal; font-style: normal;',
            /* Conditional System Instructions */
            16 => 'color: #00007f; font-weight: bold; font-style: italic;',
            /* Unconditional WMMX/WMMX2 SIMD Instructions */
            17 => 'color: #b00040; font-weight: normal; font-style: normal;',
            /* Conditional WMMX/WMMX2 SIMD Instructions */
            18 => 'color: #b00040; font-weight: normal; font-style: italic;',
            /* Unconditional VFPv3 & NEON SIMD Memory Access Instructions */
            19 => 'color: #b00040; font-weight: normal; font-style: normal;',
            /* Unconditional NEON SIMD Logical Instructions */
            20 => 'color: #b00040; font-weight: normal; font-style: italic;',
            /* Unconditional NEON SIMD ARM Registers Interop Instructions */
            21 => 'color: #b00040; font-weight: normal; font-style: italic;',
            /* Unconditional NEON SIMD Bit/Byte-Level Instructions */
            22 => 'color: #b00040; font-weight: normal; font-style: italic;',
            /* Unconditional NEON SIMD Universal Integer Instructions */
            23 => 'color: #b00040; font-weight: normal; font-style: italic;',
            /* Unconditional NEON SIMD Signed Integer Instructions */
            24 => 'color: #b00040; font-weight: normal; font-style: italic;',
            /* Unconditional NEON SIMD Unsigned Integer Instructions */
            25 => 'color: #b00040; font-weight: normal; font-style: italic;',
            /* Unconditional VFPv3 & NEON SIMD Floating-Point Instructions */
            26 => 'color: #b00040; font-weight: normal; font-style: italic;',
            /* Conditional VFPv3 & NEON SIMD Memory Access Instructions */
            27 => 'color: #b00040; font-weight: normal; font-style: italic;',
            /* Conditional NEON SIMD Logical Instructions */
            28 => 'color: #b00040; font-weight: normal; font-style: italic;',
            /* Conditional NEON SIMD ARM Registers Interop Instructions */
            29 => 'color: #b00040; font-weight: normal; font-style: italic;',
            /* Conditional NEON SIMD Bit/Byte-Level Instructions */
            30 => 'color: #b00040; font-weight: normal; font-style: italic;',
            /* Conditional NEON SIMD Universal Integer Instructions */
            31 => 'color: #b00040; font-weight: normal; font-style: italic;',
            /* Conditional NEON SIMD Signed Integer Instructions */
            32 => 'color: #b00040; font-weight: normal; font-style: italic;',
            /* Conditional NEON SIMD Unsigned Integer Instructions */
            33 => 'color: #b00040; font-weight: normal; font-style: italic;',
            /* Conditional VFPv3 & NEON SIMD Floating-Point Instructions */
            34 => 'color: #b00040; font-weight: normal; font-style: italic;',
            /* Registers */
            35 => 'color: #46aa03; font-weight: bold;'
            ),
        'COMMENTS' => array(
            1 => 'color: #666666; font-style: italic;',
            2 => 'color: #adadad; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #009900; font-weight: bold;'
            ),
        'STRINGS' => array(
            0 => 'color: #7f007f;'
            ),
        'NUMBERS' => array(
            0 => 'color: #ff0000;'
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #339933;'
            ),
        'REGEXPS' => array(
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => '',
        4 => '',
        5 => '',
        6 => '',
        7 => '',
        8 => '',
        9 => '',
        10 => '',
        11 => '',
        12 => '',
        13 => '',
        14 => '',
        15 => '',
        16 => '',
        17 => '',
        18 => '',
        19 => '',
        20 => '',
        21 => '',
        22 => '',
        23 => '',
        24 => '',
        25 => '',
        26 => '',
        27 => '',
        28 => '',
        29 => '',
        30 => '',
        31 => '',
        32 => '',
        33 => '',
        34 => '',
        35 => ''
        ),
    'NUMBERS' =>
        GESHI_NUMBER_BIN_PREFIX_PERCENT |
        GESHI_NUMBER_BIN_SUFFIX |
        GESHI_NUMBER_HEX_PREFIX |
        GESHI_NUMBER_HEX_SUFFIX |
        GESHI_NUMBER_OCT_SUFFIX |
        GESHI_NUMBER_INT_BASIC |
        GESHI_NUMBER_FLT_NONSCI |
        GESHI_NUMBER_FLT_NONSCI_F |
        GESHI_NUMBER_FLT_SCI_ZERO,
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'TAB_WIDTH' => 8,
    'PARSER_CONTROL' => array(
        'KEYWORDS' => array(
            'DISALLOWED_BEFORE' => "(?<![a-zA-Z0-9\$_\|\#>|^])",
            'DISALLOWED_AFTER' => "(?![a-zA-Z0-9_<\|%])"
        )
    )
);

?>
