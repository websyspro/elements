<?php

use Websyspro\Elements\Enums\IconTypeWeight;
use Websyspro\Elements\Doms\StyleLink;
use Websyspro\Elements\Doms\DocType;
use Websyspro\Elements\Doms\Body;
use Websyspro\Elements\Doms\Head;
use Websyspro\Elements\Doms\Html;
use Websyspro\Elements\Doms\Meta;
use Websyspro\Elements\Doms\App;
use Websyspro\Elements\Doms\Div;

/* Icons List */
use Websyspro\Elements\Doms\Icons\Icon10k;
use Websyspro\Elements\Doms\Icons\Icon10mp;
use Websyspro\Elements\Doms\Icons\Icon11mp;
use Websyspro\Elements\Doms\Icons\Icon123;
use Websyspro\Elements\Doms\Icons\Icon12mp;
use Websyspro\Elements\Doms\Icons\Icon13mp;
use Websyspro\Elements\Doms\Icons\Icon14mp;
use Websyspro\Elements\Doms\Icons\Icon15mp;
use Websyspro\Elements\Doms\Icons\Icon16mp;
use Websyspro\Elements\Doms\Icons\Icon17mp;
use Websyspro\Elements\Doms\Icons\Icon18mp;
use Websyspro\Elements\Doms\Icons\Icon18UpRating;
use Websyspro\Elements\Doms\Icons\Icon19mp;
use Websyspro\Elements\Doms\Icons\Icon1k;
use Websyspro\Elements\Doms\Icons\Icon1kPlus;
use Websyspro\Elements\Doms\Icons\Icon1xMobiledata;
use Websyspro\Elements\Doms\Icons\Icon1xMobiledataBadge;
use Websyspro\Elements\Doms\Icons\Icon20mp;
use Websyspro\Elements\Doms\Icons\Icon21mp;
use Websyspro\Elements\Doms\Icons\Icon22mp;
use Websyspro\Elements\Doms\Icons\Icon23mp;
use Websyspro\Elements\Doms\Icons\Icon24fpsSelect;
use Websyspro\Elements\Doms\Icons\Icon24mp;
use Websyspro\Elements\Doms\Icons\Icon2d;
use Websyspro\Elements\Doms\Icons\Icon2k;
use Websyspro\Elements\Doms\Icons\Icon2kPlus;
use Websyspro\Elements\Doms\Icons\Icon2mp;
use Websyspro\Elements\Doms\Icons\Icon30fps;
use Websyspro\Elements\Doms\Icons\Icon30fpsSelect;
use Websyspro\Elements\Doms\Icons\Icon360;
use Websyspro\Elements\Doms\Icons\Icon3dRotation;
use Websyspro\Elements\Doms\Icons\Icon3gMobiledata;
use Websyspro\Elements\Doms\Icons\Icon3gMobiledataBadge;
use Websyspro\Elements\Doms\Icons\Icon3k;
use Websyspro\Elements\Doms\Icons\Icon3kPlus;
use Websyspro\Elements\Doms\Icons\Icon3mp;
use Websyspro\Elements\Doms\Icons\Icon3p;
use Websyspro\Elements\Doms\Icons\Icon4gMobiledata;
use Websyspro\Elements\Doms\Icons\Icon4gMobiledataBadge;
use Websyspro\Elements\Doms\Icons\Icon4gPlusMobiledata;
use Websyspro\Elements\Doms\Icons\Icon4k;
use Websyspro\Elements\Doms\Icons\Icon4kPlus;
use Websyspro\Elements\Doms\Icons\Icon4mp;
use Websyspro\Elements\Doms\Icons\Icon50mp;
use Websyspro\Elements\Doms\Icons\Icon5g;
use Websyspro\Elements\Doms\Icons\Icon5gMobiledataBadge;
use Websyspro\Elements\Doms\Icons\Icon5k;
use Websyspro\Elements\Doms\Icons\Icon5kPlus;
use Websyspro\Elements\Doms\Icons\Icon5mp;
use Websyspro\Elements\Doms\Icons\Icon60fps;
use Websyspro\Elements\Doms\Icons\Icon60fpsSelect;
use Websyspro\Elements\Doms\Icons\Icon6FtApart;
use Websyspro\Elements\Doms\Icons\Icon6k;
use Websyspro\Elements\Doms\Icons\Icon6kPlus;
use Websyspro\Elements\Doms\Icons\Icon6mp;
use Websyspro\Elements\Doms\Icons\Icon7k;
use Websyspro\Elements\Doms\Icons\Icon7kPlus;
use Websyspro\Elements\Doms\Icons\Icon7mp;
use Websyspro\Elements\Doms\Icons\Icon8k;
use Websyspro\Elements\Doms\Icons\Icon8kPlus;
use Websyspro\Elements\Doms\Icons\Icon8mp;
use Websyspro\Elements\Doms\Icons\Icon9k;
use Websyspro\Elements\Doms\Icons\Icon9kPlus;
use Websyspro\Elements\Doms\Icons\Icon9mp;
use Websyspro\Elements\Doms\Icons\IconAbc;
use Websyspro\Elements\Doms\Icons\IconAccessibility;
use Websyspro\Elements\Doms\Icons\IconAccessibilityNew;
use Websyspro\Elements\Doms\Icons\IconAccessible;
use Websyspro\Elements\Doms\Icons\IconAccessibleForward;
use Websyspro\Elements\Doms\Icons\IconAccountBalance;
use Websyspro\Elements\Doms\Icons\IconAccountBalanceWallet;
use Websyspro\Elements\Doms\Icons\IconAccountBox;
use Websyspro\Elements\Doms\Icons\IconAccountChild;
use Websyspro\Elements\Doms\Icons\IconAccountChildInvert;
use Websyspro\Elements\Doms\Icons\IconAccountCircle;
use Websyspro\Elements\Doms\Icons\IconAccountCircleOff;
use Websyspro\Elements\Doms\Icons\IconAccountTree;
use Websyspro\Elements\Doms\Icons\IconActionKey;
use Websyspro\Elements\Doms\Icons\IconActivityZone;
use Websyspro\Elements\Doms\Icons\IconAcUnit;
use Websyspro\Elements\Doms\Icons\IconAcute;
use Websyspro\Elements\Doms\Icons\IconAd;
use Websyspro\Elements\Doms\Icons\IconAdaptiveAudioMic;
use Websyspro\Elements\Doms\Icons\IconAdaptiveAudioMicOff;
use Websyspro\Elements\Doms\Icons\IconAdb;
use Websyspro\Elements\Doms\Icons\IconAdd;
use Websyspro\Elements\Doms\Icons\IconAdd2;
use Websyspro\Elements\Doms\Icons\IconAddAd;
use Websyspro\Elements\Doms\Icons\IconAddAlert;
use Websyspro\Elements\Doms\Icons\IconAddAPhoto;
use Websyspro\Elements\Doms\Icons\IconAddBox;
use Websyspro\Elements\Doms\Icons\IconAddBusiness;
use Websyspro\Elements\Doms\Icons\IconAddCall;
use Websyspro\Elements\Doms\Icons\IconAddCard;
use Websyspro\Elements\Doms\Icons\IconAddChart;
use Websyspro\Elements\Doms\Icons\IconAddCircle;
use Websyspro\Elements\Doms\Icons\IconAddColumnLeft;
use Websyspro\Elements\Doms\Icons\IconAddColumnRight;
use Websyspro\Elements\Doms\Icons\IconAddComment;
use Websyspro\Elements\Doms\Icons\IconAddDiamond;
use Websyspro\Elements\Doms\Icons\IconAddHome;
use Websyspro\Elements\Doms\Icons\IconAddHomeWork;
use Websyspro\Elements\Doms\Icons\IconAddLink;
use Websyspro\Elements\Doms\Icons\IconAddLocation;
use Websyspro\Elements\Doms\Icons\IconAddLocationAlt;
use Websyspro\Elements\Doms\Icons\IconAddModerator;
use Websyspro\Elements\Doms\Icons\IconAddNotes;
use Websyspro\Elements\Doms\Icons\IconAddPhotoAlternate;
use Websyspro\Elements\Doms\Icons\IconAddReaction;
use Websyspro\Elements\Doms\Icons\IconAddRoad;
use Websyspro\Elements\Doms\Icons\IconAddRowAbove;
use Websyspro\Elements\Doms\Icons\IconAddRowBelow;
use Websyspro\Elements\Doms\Icons\IconAddShoppingCart;
use Websyspro\Elements\Doms\Icons\IconAddTask;
use Websyspro\Elements\Doms\Icons\IconAddToDrive;
use Websyspro\Elements\Doms\Icons\IconAddToHomeScreen;
use Websyspro\Elements\Doms\Icons\IconAddToQueue;
use Websyspro\Elements\Doms\Icons\IconAddTriangle;
use Websyspro\Elements\Doms\Icons\IconAdfScanner;
use Websyspro\Elements\Doms\Icons\IconAdGroup;
use Websyspro\Elements\Doms\Icons\IconAdGroupOff;
use Websyspro\Elements\Doms\Icons\IconAdjust;
use Websyspro\Elements\Doms\Icons\IconAdminMeds;
use Websyspro\Elements\Doms\Icons\IconAdminPanelSettings;
use Websyspro\Elements\Doms\Icons\IconAdOff;
use Websyspro\Elements\Doms\Icons\IconAdsClick;
use Websyspro\Elements\Doms\Icons\IconAdUnits;
use Websyspro\Elements\Doms\Icons\IconAgender;
use Websyspro\Elements\Doms\Icons\IconAgriculture;
use Websyspro\Elements\Doms\Icons\IconAir;
use Websyspro\Elements\Doms\Icons\IconAirFreshener;
use Websyspro\Elements\Doms\Icons\IconAirlines;
use Websyspro\Elements\Doms\Icons\IconAirlineSeatFlat;
use Websyspro\Elements\Doms\Icons\IconAirlineSeatFlatAngled;
use Websyspro\Elements\Doms\Icons\IconAirlineSeatIndividualSuite;
use Websyspro\Elements\Doms\Icons\IconAirlineSeatLegroomExtra;
use Websyspro\Elements\Doms\Icons\IconAirlineSeatLegroomNormal;
use Websyspro\Elements\Doms\Icons\IconAirlineSeatLegroomReduced;
use Websyspro\Elements\Doms\Icons\IconAirlineSeatReclineExtra;
use Websyspro\Elements\Doms\Icons\IconAirlineSeatReclineNormal;
use Websyspro\Elements\Doms\Icons\IconAirlineStops;
use Websyspro\Elements\Doms\Icons\IconAirplanemodeInactive;
use Websyspro\Elements\Doms\Icons\IconAirplaneTicket;
use Websyspro\Elements\Doms\Icons\IconAirplay;
use Websyspro\Elements\Doms\Icons\IconAirportShuttle;
use Websyspro\Elements\Doms\Icons\IconAirPurifier;
use Websyspro\Elements\Doms\Icons\IconAirPurifierGen;
use Websyspro\Elements\Doms\Icons\IconAirware;
use Websyspro\Elements\Doms\Icons\IconAirwave;
use Websyspro\Elements\Doms\Icons\IconAlarm;
use Websyspro\Elements\Doms\Icons\IconAlarmAdd;
use Websyspro\Elements\Doms\Icons\IconAlarmOff;
use Websyspro\Elements\Doms\Icons\IconAlarmOn;
use Websyspro\Elements\Doms\Icons\IconAlarmSmartWake;
use Websyspro\Elements\Doms\Icons\IconAlbum;
use Websyspro\Elements\Doms\Icons\IconAlignCenter;
use Websyspro\Elements\Doms\Icons\IconAlignEnd;
use Websyspro\Elements\Doms\Icons\IconAlignFlexCenter;
use Websyspro\Elements\Doms\Icons\IconAlignFlexEnd;
use Websyspro\Elements\Doms\Icons\IconAlignFlexStart;
use Websyspro\Elements\Doms\Icons\IconAlignHorizontalCenter;
use Websyspro\Elements\Doms\Icons\IconAlignHorizontalLeft;
use Websyspro\Elements\Doms\Icons\IconAlignHorizontalRight;
use Websyspro\Elements\Doms\Icons\IconAlignItemsStretch;
use Websyspro\Elements\Doms\Icons\IconAlignJustifyCenter;
use Websyspro\Elements\Doms\Icons\IconAlignJustifyFlexEnd;
use Websyspro\Elements\Doms\Icons\IconAlignJustifyFlexStart;
use Websyspro\Elements\Doms\Icons\IconAlignJustifySpaceAround;
use Websyspro\Elements\Doms\Icons\IconAlignJustifySpaceBetween;
use Websyspro\Elements\Doms\Icons\IconAlignJustifySpaceEven;
use Websyspro\Elements\Doms\Icons\IconAlignJustifyStretch;
use Websyspro\Elements\Doms\Icons\IconAlignSelfStretch;
use Websyspro\Elements\Doms\Icons\IconAlignSpaceAround;
use Websyspro\Elements\Doms\Icons\IconAlignSpaceBetween;
use Websyspro\Elements\Doms\Icons\IconAlignSpaceEven;
use Websyspro\Elements\Doms\Icons\IconAlignStart;
use Websyspro\Elements\Doms\Icons\IconAlignStretch;
use Websyspro\Elements\Doms\Icons\IconAlignVerticalBottom;
use Websyspro\Elements\Doms\Icons\IconAlignVerticalCenter;
use Websyspro\Elements\Doms\Icons\IconAlignVerticalTop;
use Websyspro\Elements\Doms\Icons\IconAllergies;
use Websyspro\Elements\Doms\Icons\IconAllergy;
use Websyspro\Elements\Doms\Icons\IconAllInbox;
use Websyspro\Elements\Doms\Icons\IconAllInclusive;
use Websyspro\Elements\Doms\Icons\IconAllMatch;
use Websyspro\Elements\Doms\Icons\IconAllOut;
use Websyspro\Elements\Doms\Icons\IconAlternateEmail;
use Websyspro\Elements\Doms\Icons\IconAltitude;
use Websyspro\Elements\Doms\Icons\IconAltRoute;
use Websyspro\Elements\Doms\Icons\IconAmbulance;
use Websyspro\Elements\Doms\Icons\IconAmend;
use Websyspro\Elements\Doms\Icons\IconAmpStories;
use Websyspro\Elements\Doms\Icons\IconAnalytics;
use Websyspro\Elements\Doms\Icons\IconAnchor;
use Websyspro\Elements\Doms\Icons\IconAndroid;
use Websyspro\Elements\Doms\Icons\IconAnimatedImages;
use Websyspro\Elements\Doms\Icons\IconAnimation;
use Websyspro\Elements\Doms\Icons\IconAod;
use Websyspro\Elements\Doms\Icons\IconAodTablet;
use Websyspro\Elements\Doms\Icons\IconAodWatch;
use Websyspro\Elements\Doms\Icons\IconApartment;
use Websyspro\Elements\Doms\Icons\IconApi;
use Websyspro\Elements\Doms\Icons\IconApkDocument;
use Websyspro\Elements\Doms\Icons\IconApkInstall;
use Websyspro\Elements\Doms\Icons\IconApparel;
use Websyspro\Elements\Doms\Icons\IconAppBadging;
use Websyspro\Elements\Doms\Icons\IconAppBlocking;
use Websyspro\Elements\Doms\Icons\IconAppPromo;
use Websyspro\Elements\Doms\Icons\IconAppRegistration;
use Websyspro\Elements\Doms\Icons\IconApproval;
use Websyspro\Elements\Doms\Icons\IconApprovalDelegation;
use Websyspro\Elements\Doms\Icons\IconApps;
use Websyspro\Elements\Doms\Icons\IconAppShortcut;
use Websyspro\Elements\Doms\Icons\IconAppsOutage;
use Websyspro\Elements\Doms\Icons\IconAq;
use Websyspro\Elements\Doms\Icons\IconAqIndoor;
use Websyspro\Elements\Doms\Icons\IconArchitecture;
use Websyspro\Elements\Doms\Icons\IconArchive;
use Websyspro\Elements\Doms\Icons\IconAreaChart;
use Websyspro\Elements\Doms\Icons\IconArmingCountdown;
use Websyspro\Elements\Doms\Icons\IconArOnYou;
use Websyspro\Elements\Doms\Icons\IconArrowAndEdge;
use Websyspro\Elements\Doms\Icons\IconArrowBack;
use Websyspro\Elements\Doms\Icons\IconArrowBack2;
use Websyspro\Elements\Doms\Icons\IconArrowBackIos;
use Websyspro\Elements\Doms\Icons\IconArrowBackIosNew;
use Websyspro\Elements\Doms\Icons\IconArrowCircleDown;
use Websyspro\Elements\Doms\Icons\IconArrowCircleLeft;
use Websyspro\Elements\Doms\Icons\IconArrowCircleRight;
use Websyspro\Elements\Doms\Icons\IconArrowCircleUp;
use Websyspro\Elements\Doms\Icons\IconArrowCoolDown;
use Websyspro\Elements\Doms\Icons\IconArrowDownward;
use Websyspro\Elements\Doms\Icons\IconArrowDownwardAlt;
use Websyspro\Elements\Doms\Icons\IconArrowDropDown;
use Websyspro\Elements\Doms\Icons\IconArrowDropDownCircle;
use Websyspro\Elements\Doms\Icons\IconArrowDropUp;
use Websyspro\Elements\Doms\Icons\IconArrowForward;
use Websyspro\Elements\Doms\Icons\IconArrowForwardIos;
use Websyspro\Elements\Doms\Icons\IconArrowInsert;
use Websyspro\Elements\Doms\Icons\IconArrowLeft;
use Websyspro\Elements\Doms\Icons\IconArrowLeftAlt;
use Websyspro\Elements\Doms\Icons\IconArrowMenuClose;
use Websyspro\Elements\Doms\Icons\IconArrowMenuOpen;
use Websyspro\Elements\Doms\Icons\IconArrowOrEdge;
use Websyspro\Elements\Doms\Icons\IconArrowOutward;
use Websyspro\Elements\Doms\Icons\IconArrowRange;
use Websyspro\Elements\Doms\Icons\IconArrowRight;
use Websyspro\Elements\Doms\Icons\IconArrowRightAlt;
use Websyspro\Elements\Doms\Icons\IconArrowSelectorTool;
use Websyspro\Elements\Doms\Icons\IconArrowsInput;
use Websyspro\Elements\Doms\Icons\IconArrowsMoreDown;
use Websyspro\Elements\Doms\Icons\IconArrowsMoreUp;
use Websyspro\Elements\Doms\Icons\IconArrowsOutput;
use Websyspro\Elements\Doms\Icons\IconArrowsOutward;
use Websyspro\Elements\Doms\Icons\IconArrowSplit;
use Websyspro\Elements\Doms\Icons\IconArrowTopLeft;
use Websyspro\Elements\Doms\Icons\IconArrowTopRight;
use Websyspro\Elements\Doms\Icons\IconArrowUploadProgress;
use Websyspro\Elements\Doms\Icons\IconArrowUploadReady;
use Websyspro\Elements\Doms\Icons\IconArrowUpward;
use Websyspro\Elements\Doms\Icons\IconArrowUpwardAlt;
use Websyspro\Elements\Doms\Icons\IconArrowWarmUp;
use Websyspro\Elements\Doms\Icons\IconArStickers;
use Websyspro\Elements\Doms\Icons\IconArticle;
use Websyspro\Elements\Doms\Icons\IconArticleShortcut;
use Websyspro\Elements\Doms\Icons\IconArtist;
use Websyspro\Elements\Doms\Icons\IconArtTrack;
use Websyspro\Elements\Doms\Icons\IconAspectRatio;
use Websyspro\Elements\Doms\Icons\IconAssignment;
use Websyspro\Elements\Doms\Icons\IconAssignmentAdd;
use Websyspro\Elements\Doms\Icons\IconAssignmentInd;
use Websyspro\Elements\Doms\Icons\IconAssignmentLate;
use Websyspro\Elements\Doms\Icons\IconAssignmentReturn;
use Websyspro\Elements\Doms\Icons\IconAssignmentReturned;
use Websyspro\Elements\Doms\Icons\IconAssignmentTurnedIn;
use Websyspro\Elements\Doms\Icons\IconAssistantDevice;
use Websyspro\Elements\Doms\Icons\IconAssistantDirection;
use Websyspro\Elements\Doms\Icons\IconAssistantNavigation;
use Websyspro\Elements\Doms\Icons\IconAssistantOnHub;
use Websyspro\Elements\Doms\Icons\IconAssistWalker;
use Websyspro\Elements\Doms\Icons\IconAssuredWorkload;
use Websyspro\Elements\Doms\Icons\IconAsterisk;
use Websyspro\Elements\Doms\Icons\IconAtm;
use Websyspro\Elements\Doms\Icons\IconAtr;
use Websyspro\Elements\Doms\Icons\IconAttachEmail;
use Websyspro\Elements\Doms\Icons\IconAttachFile;
use Websyspro\Elements\Doms\Icons\IconAttachFileAdd;
use Websyspro\Elements\Doms\Icons\IconAttachFileOff;
use Websyspro\Elements\Doms\Icons\IconAttachment;
use Websyspro\Elements\Doms\Icons\IconAttachMoney;
use Websyspro\Elements\Doms\Icons\IconAttractions;
use Websyspro\Elements\Doms\Icons\IconAttribution;
use Websyspro\Elements\Doms\Icons\IconAudioDescription;
use Websyspro\Elements\Doms\Icons\IconAudioFile;
use Websyspro\Elements\Doms\Icons\IconAudioVideoReceiver;
use Websyspro\Elements\Doms\Icons\IconAutoAwesomeMosaic;
use Websyspro\Elements\Doms\Icons\IconAutoAwesomeMotion;
use Websyspro\Elements\Doms\Icons\IconAutoDelete;
use Websyspro\Elements\Doms\Icons\IconAutofpsSelect;
use Websyspro\Elements\Doms\Icons\IconAutomation;
use Websyspro\Elements\Doms\Icons\IconAutopause;
use Websyspro\Elements\Doms\Icons\IconAutoplay;
use Websyspro\Elements\Doms\Icons\IconAutoReadPause;
use Websyspro\Elements\Doms\Icons\IconAutoReadPlay;
use Websyspro\Elements\Doms\Icons\IconAutorenew;
use Websyspro\Elements\Doms\Icons\IconAutostop;
use Websyspro\Elements\Doms\Icons\IconAutoStories;
use Websyspro\Elements\Doms\Icons\IconAutoTowing;
use Websyspro\Elements\Doms\Icons\IconAutoTransmission;
use Websyspro\Elements\Doms\Icons\IconAv1;
use Websyspro\Elements\Doms\Icons\IconAvc;
use Websyspro\Elements\Doms\Icons\IconAvgPace;
use Websyspro\Elements\Doms\Icons\IconAvgTime;
use Websyspro\Elements\Doms\Icons\IconAvTimer;
use Websyspro\Elements\Doms\Icons\IconAwardStar;
use Websyspro\Elements\Doms\Icons\IconAzm;
use Websyspro\Elements\Doms\Icons\IconBabyChangingStation;
use Websyspro\Elements\Doms\Icons\IconBackgroundDotLarge;
use Websyspro\Elements\Doms\Icons\IconBackgroundDotSmall;
use Websyspro\Elements\Doms\Icons\IconBackgroundGridSmall;
use Websyspro\Elements\Doms\Icons\IconBackgroundReplace;
use Websyspro\Elements\Doms\Icons\IconBackHand;
use Websyspro\Elements\Doms\Icons\IconBacklightHigh;
use Websyspro\Elements\Doms\Icons\IconBacklightHighOff;
use Websyspro\Elements\Doms\Icons\IconBacklightLow;
use Websyspro\Elements\Doms\Icons\IconBackpack;
use Websyspro\Elements\Doms\Icons\IconBackspace;
use Websyspro\Elements\Doms\Icons\IconBackToTab;
use Websyspro\Elements\Doms\Icons\IconBackup;
use Websyspro\Elements\Doms\Icons\IconBackupTable;
use Websyspro\Elements\Doms\Icons\IconBadge;
use Websyspro\Elements\Doms\Icons\IconBadgeCriticalBattery;
use Websyspro\Elements\Doms\Icons\IconBakeryDining;
use Websyspro\Elements\Doms\Icons\IconBalance;
use Websyspro\Elements\Doms\Icons\IconBalcony;
use Websyspro\Elements\Doms\Icons\IconBallot;
use Websyspro\Elements\Doms\Icons\IconBarChart;
use Websyspro\Elements\Doms\Icons\IconBarChart4Bars;
use Websyspro\Elements\Doms\Icons\IconBarChartOff;
use Websyspro\Elements\Doms\Icons\IconBarcode;
use Websyspro\Elements\Doms\Icons\IconBarcodeReader;
use Websyspro\Elements\Doms\Icons\IconBarcodeScanner;
use Websyspro\Elements\Doms\Icons\IconBarefoot;
use Websyspro\Elements\Doms\Icons\IconBatchPrediction;
use Websyspro\Elements\Doms\Icons\IconBathOutdoor;
use Websyspro\Elements\Doms\Icons\IconBathPrivate;
use Websyspro\Elements\Doms\Icons\IconBathPublicLarge;
use Websyspro\Elements\Doms\Icons\IconBathroom;
use Websyspro\Elements\Doms\Icons\IconBathtub;
use Websyspro\Elements\Doms\Icons\IconBattery0Bar;
use Websyspro\Elements\Doms\Icons\IconBattery1Bar;
use Websyspro\Elements\Doms\Icons\IconBattery2Bar;
use Websyspro\Elements\Doms\Icons\IconBattery3Bar;
use Websyspro\Elements\Doms\Icons\IconBattery4Bar;
use Websyspro\Elements\Doms\Icons\IconBattery5Bar;
use Websyspro\Elements\Doms\Icons\IconBattery6Bar;
use Websyspro\Elements\Doms\Icons\IconBatteryAlert;
use Websyspro\Elements\Doms\Icons\IconBatteryChange;
use Websyspro\Elements\Doms\Icons\IconBatteryCharging20;
use Websyspro\Elements\Doms\Icons\IconBatteryCharging30;
use Websyspro\Elements\Doms\Icons\IconBatteryCharging50;
use Websyspro\Elements\Doms\Icons\IconBatteryCharging60;
use Websyspro\Elements\Doms\Icons\IconBatteryCharging80;
use Websyspro\Elements\Doms\Icons\IconBatteryCharging90;
use Websyspro\Elements\Doms\Icons\IconBatteryChargingFull;
use Websyspro\Elements\Doms\Icons\IconBatteryError;
use Websyspro\Elements\Doms\Icons\IconBatteryFull;
use Websyspro\Elements\Doms\Icons\IconBatteryFullAlt;
use Websyspro\Elements\Doms\Icons\IconBatteryHoriz000;
use Websyspro\Elements\Doms\Icons\IconBatteryHoriz050;
use Websyspro\Elements\Doms\Icons\IconBatteryHoriz075;
use Websyspro\Elements\Doms\Icons\IconBatteryLow;
use Websyspro\Elements\Doms\Icons\IconBatteryPlus;
use Websyspro\Elements\Doms\Icons\IconBatteryProfile;
use Websyspro\Elements\Doms\Icons\IconBatterySaver;
use Websyspro\Elements\Doms\Icons\IconBatteryShare;
use Websyspro\Elements\Doms\Icons\IconBatteryStatusGood;
use Websyspro\Elements\Doms\Icons\IconBatteryUnknown;
use Websyspro\Elements\Doms\Icons\IconBatteryVeryLow;
use Websyspro\Elements\Doms\Icons\IconBeachAccess;
use Websyspro\Elements\Doms\Icons\IconBed;
use Websyspro\Elements\Doms\Icons\IconBedroomBaby;
use Websyspro\Elements\Doms\Icons\IconBedroomChild;
use Websyspro\Elements\Doms\Icons\IconBedroomParent;
use Websyspro\Elements\Doms\Icons\IconBedtime;
use Websyspro\Elements\Doms\Icons\IconBedtimeOff;
use Websyspro\Elements\Doms\Icons\IconBeenhere;
use Websyspro\Elements\Doms\Icons\IconBento;
use Websyspro\Elements\Doms\Icons\IconBia;
use Websyspro\Elements\Doms\Icons\IconBidLandscape;
use Websyspro\Elements\Doms\Icons\IconBidLandscapeDisabled;
use Websyspro\Elements\Doms\Icons\IconBigtopUpdates;
use Websyspro\Elements\Doms\Icons\IconBikeDock;
use Websyspro\Elements\Doms\Icons\IconBikeLane;
use Websyspro\Elements\Doms\Icons\IconBikeScooter;
use Websyspro\Elements\Doms\Icons\IconBiotech;
use Websyspro\Elements\Doms\Icons\IconBlanket;
use Websyspro\Elements\Doms\Icons\IconBlender;
use Websyspro\Elements\Doms\Icons\IconBlind;
use Websyspro\Elements\Doms\Icons\IconBlinds;
use Websyspro\Elements\Doms\Icons\IconBlindsClosed;
use Websyspro\Elements\Doms\Icons\IconBlock;
use Websyspro\Elements\Doms\Icons\IconBloodPressure;
use Websyspro\Elements\Doms\Icons\IconBloodtype;
use Websyspro\Elements\Doms\Icons\IconBluetooth;
use Websyspro\Elements\Doms\Icons\IconBluetoothConnected;
use Websyspro\Elements\Doms\Icons\IconBluetoothDisabled;
use Websyspro\Elements\Doms\Icons\IconBluetoothDrive;
use Websyspro\Elements\Doms\Icons\IconBluetoothSearching;
use Websyspro\Elements\Doms\Icons\IconBlurCircular;
use Websyspro\Elements\Doms\Icons\IconBlurLinear;
use Websyspro\Elements\Doms\Icons\IconBlurMedium;
use Websyspro\Elements\Doms\Icons\IconBlurOff;
use Websyspro\Elements\Doms\Icons\IconBlurOn;
use Websyspro\Elements\Doms\Icons\IconBlurShort;
use Websyspro\Elements\Doms\Icons\IconBoatBus;
use Websyspro\Elements\Doms\Icons\IconBoatRailway;
use Websyspro\Elements\Doms\Icons\IconBodyFat;
use Websyspro\Elements\Doms\Icons\IconBodySystem;
use Websyspro\Elements\Doms\Icons\IconBolt;
use Websyspro\Elements\Doms\Icons\IconBomb;
use Websyspro\Elements\Doms\Icons\IconBook;
use Websyspro\Elements\Doms\Icons\IconBook2;
use Websyspro\Elements\Doms\Icons\IconBook3;
use Websyspro\Elements\Doms\Icons\IconBook4;
use Websyspro\Elements\Doms\Icons\IconBook4Spark;
use Websyspro\Elements\Doms\Icons\IconBook5;
use Websyspro\Elements\Doms\Icons\IconBook6;
use Websyspro\Elements\Doms\Icons\IconBookmark;
use Websyspro\Elements\Doms\Icons\IconBookmarkAdd;
use Websyspro\Elements\Doms\Icons\IconBookmarkAdded;
use Websyspro\Elements\Doms\Icons\IconBookmarkBag;
use Websyspro\Elements\Doms\Icons\IconBookmarkCheck;
use Websyspro\Elements\Doms\Icons\IconBookmarkFlag;
use Websyspro\Elements\Doms\Icons\IconBookmarkHeart;
use Websyspro\Elements\Doms\Icons\IconBookmarkManager;
use Websyspro\Elements\Doms\Icons\IconBookmarkRemove;
use Websyspro\Elements\Doms\Icons\IconBookmarks;
use Websyspro\Elements\Doms\Icons\IconBookmarkStar;
use Websyspro\Elements\Doms\Icons\IconBookOnline;
use Websyspro\Elements\Doms\Icons\IconBookRibbon;
use Websyspro\Elements\Doms\Icons\IconBooksMoviesAndMusic;
use Websyspro\Elements\Doms\Icons\IconBorderAll;
use Websyspro\Elements\Doms\Icons\IconBorderBottom;
use Websyspro\Elements\Doms\Icons\IconBorderClear;
use Websyspro\Elements\Doms\Icons\IconBorderColor;
use Websyspro\Elements\Doms\Icons\IconBorderHorizontal;
use Websyspro\Elements\Doms\Icons\IconBorderInner;
use Websyspro\Elements\Doms\Icons\IconBorderLeft;
use Websyspro\Elements\Doms\Icons\IconBorderOuter;
use Websyspro\Elements\Doms\Icons\IconBorderRight;
use Websyspro\Elements\Doms\Icons\IconBorderStyle;
use Websyspro\Elements\Doms\Icons\IconBorderTop;
use Websyspro\Elements\Doms\Icons\IconBorderVertical;
use Websyspro\Elements\Doms\Icons\IconBorg;
use Websyspro\Elements\Doms\Icons\IconBottomAppBar;
use Websyspro\Elements\Doms\Icons\IconBottomDrawer;
use Websyspro\Elements\Doms\Icons\IconBottomNavigation;
use Websyspro\Elements\Doms\Icons\IconBottomPanelClose;
use Websyspro\Elements\Doms\Icons\IconBottomPanelOpen;
use Websyspro\Elements\Doms\Icons\IconBottomRightClick;
use Websyspro\Elements\Doms\Icons\IconBottomSheets;
use Websyspro\Elements\Doms\Icons\IconBox;
use Websyspro\Elements\Doms\Icons\IconBoxAdd;
use Websyspro\Elements\Doms\Icons\IconBoxEdit;
use Websyspro\Elements\Doms\Icons\IconBoy;
use Websyspro\Elements\Doms\Icons\IconBrandAwareness;
use Websyspro\Elements\Doms\Icons\IconBrandFamily;
use Websyspro\Elements\Doms\Icons\IconBrandingWatermark;
use Websyspro\Elements\Doms\Icons\IconBreakfastDining;
use Websyspro\Elements\Doms\Icons\IconBreakingNews;
use Websyspro\Elements\Doms\Icons\IconBreakingNewsAlt1;
use Websyspro\Elements\Doms\Icons\IconBreastfeeding;
use Websyspro\Elements\Doms\Icons\IconBrick;
use Websyspro\Elements\Doms\Icons\IconBrightness1;
use Websyspro\Elements\Doms\Icons\IconBrightness2;
use Websyspro\Elements\Doms\Icons\IconBrightness3;
use Websyspro\Elements\Doms\Icons\IconBrightness4;
use Websyspro\Elements\Doms\Icons\IconBrightness5;
use Websyspro\Elements\Doms\Icons\IconBrightness6;
use Websyspro\Elements\Doms\Icons\IconBrightness7;
use Websyspro\Elements\Doms\Icons\IconBrightnessAlert;
use Websyspro\Elements\Doms\Icons\IconBrightnessAuto;
use Websyspro\Elements\Doms\Icons\IconBrightnessEmpty;
use Websyspro\Elements\Doms\Icons\IconBrightnessHigh;
use Websyspro\Elements\Doms\Icons\IconBrightnessLow;
use Websyspro\Elements\Doms\Icons\IconBrightnessMedium;
use Websyspro\Elements\Doms\Icons\IconBringYourOwnIp;
use Websyspro\Elements\Doms\Icons\IconBroadcastOnHome;
use Websyspro\Elements\Doms\Icons\IconBroadcastOnPersonal;
use Websyspro\Elements\Doms\Icons\IconBrokenImage;
use Websyspro\Elements\Doms\Icons\IconBrowse;
use Websyspro\Elements\Doms\Icons\IconBrowseActivity;
use Websyspro\Elements\Doms\Icons\IconBrowseGallery;
use Websyspro\Elements\Doms\Icons\IconBrowserUpdated;
use Websyspro\Elements\Doms\Icons\IconBrunchDining;
use Websyspro\Elements\Doms\Icons\IconBrush;
use Websyspro\Elements\Doms\Icons\IconBubble;
use Websyspro\Elements\Doms\Icons\IconBubbleChart;
use Websyspro\Elements\Doms\Icons\IconBubbles;
use Websyspro\Elements\Doms\Icons\IconBugReport;
use Websyspro\Elements\Doms\Icons\IconBuild;
use Websyspro\Elements\Doms\Icons\IconBuildCircle;
use Websyspro\Elements\Doms\Icons\IconBungalow;
use Websyspro\Elements\Doms\Icons\IconBurstMode;
use Websyspro\Elements\Doms\Icons\IconBusAlert;
use Websyspro\Elements\Doms\Icons\IconBusinessCenter;
use Websyspro\Elements\Doms\Icons\IconBusinessChip;
use Websyspro\Elements\Doms\Icons\IconBusinessMessages;
use Websyspro\Elements\Doms\Icons\IconBusRailway;
use Websyspro\Elements\Doms\Icons\IconButtonsAlt;
use Websyspro\Elements\Doms\Icons\IconCabin;
use Websyspro\Elements\Doms\Icons\IconCable;
use Websyspro\Elements\Doms\Icons\IconCableCar;
use Websyspro\Elements\Doms\Icons\IconCached;
use Websyspro\Elements\Doms\Icons\IconCadence;
use Websyspro\Elements\Doms\Icons\IconCake;
use Websyspro\Elements\Doms\Icons\IconCakeAdd;
use Websyspro\Elements\Doms\Icons\IconCalculate;
use Websyspro\Elements\Doms\Icons\IconCalendarAddOn;
use Websyspro\Elements\Doms\Icons\IconCalendarAppsScript;
use Websyspro\Elements\Doms\Icons\IconCalendarClock;
use Websyspro\Elements\Doms\Icons\IconCalendarMonth;
use Websyspro\Elements\Doms\Icons\IconCalendarToday;
use Websyspro\Elements\Doms\Icons\IconCalendarViewDay;
use Websyspro\Elements\Doms\Icons\IconCalendarViewMonth;
use Websyspro\Elements\Doms\Icons\IconCalendarViewWeek;
use Websyspro\Elements\Doms\Icons\IconCall;
use Websyspro\Elements\Doms\Icons\IconCallEnd;
use Websyspro\Elements\Doms\Icons\IconCallLog;
use Websyspro\Elements\Doms\Icons\IconCallMade;
use Websyspro\Elements\Doms\Icons\IconCallMerge;
use Websyspro\Elements\Doms\Icons\IconCallMissed;
use Websyspro\Elements\Doms\Icons\IconCallMissedOutgoing;
use Websyspro\Elements\Doms\Icons\IconCallQuality;
use Websyspro\Elements\Doms\Icons\IconCallReceived;
use Websyspro\Elements\Doms\Icons\IconCallSplit;
use Websyspro\Elements\Doms\Icons\IconCallToAction;
use Websyspro\Elements\Doms\Icons\IconCamera;
use Websyspro\Elements\Doms\Icons\IconCameraFront;
use Websyspro\Elements\Doms\Icons\IconCameraIndoor;
use Websyspro\Elements\Doms\Icons\IconCameraOutdoor;
use Websyspro\Elements\Doms\Icons\IconCameraRear;
use Websyspro\Elements\Doms\Icons\IconCameraRoll;
use Websyspro\Elements\Doms\Icons\IconCameraswitch;
use Websyspro\Elements\Doms\Icons\IconCameraVideo;
use Websyspro\Elements\Doms\Icons\IconCampaign;
use Websyspro\Elements\Doms\Icons\IconCamping;
use Websyspro\Elements\Doms\Icons\IconCancel;
use Websyspro\Elements\Doms\Icons\IconCancelPresentation;
use Websyspro\Elements\Doms\Icons\IconCancelScheduleSend;
use Websyspro\Elements\Doms\Icons\IconCandle;
use Websyspro\Elements\Doms\Icons\IconCandlestickChart;
use Websyspro\Elements\Doms\Icons\IconCaptivePortal;
use Websyspro\Elements\Doms\Icons\IconCapture;
use Websyspro\Elements\Doms\Icons\IconCarCrash;
use Websyspro\Elements\Doms\Icons\IconCardioLoad;
use Websyspro\Elements\Doms\Icons\IconCardiology;
use Websyspro\Elements\Doms\Icons\IconCardMembership;
use Websyspro\Elements\Doms\Icons\IconCards;
use Websyspro\Elements\Doms\Icons\IconCardsStar;
use Websyspro\Elements\Doms\Icons\IconCardTravel;
use Websyspro\Elements\Doms\Icons\IconCarpenter;
use Websyspro\Elements\Doms\Icons\IconCarRental;
use Websyspro\Elements\Doms\Icons\IconCarRepair;
use Websyspro\Elements\Doms\Icons\IconCarryOnBag;
use Websyspro\Elements\Doms\Icons\IconCarryOnBagChecked;
use Websyspro\Elements\Doms\Icons\IconCarryOnBagInactive;
use Websyspro\Elements\Doms\Icons\IconCarryOnBagQuestion;
use Websyspro\Elements\Doms\Icons\IconCarTag;
use Websyspro\Elements\Doms\Icons\IconCases;
use Websyspro\Elements\Doms\Icons\IconCasino;
use Websyspro\Elements\Doms\Icons\IconCast;
use Websyspro\Elements\Doms\Icons\IconCastConnected;
use Websyspro\Elements\Doms\Icons\IconCastForEducation;
use Websyspro\Elements\Doms\Icons\IconCastle;
use Websyspro\Elements\Doms\Icons\IconCastPause;
use Websyspro\Elements\Doms\Icons\IconCastWarning;
use Websyspro\Elements\Doms\Icons\IconCategory;
use Websyspro\Elements\Doms\Icons\IconCategorySearch;
use Websyspro\Elements\Doms\Icons\IconCelebration;
use Websyspro\Elements\Doms\Icons\IconCellMerge;
use Websyspro\Elements\Doms\Icons\IconCellTower;
use Websyspro\Elements\Doms\Icons\IconCellWifi;
use Websyspro\Elements\Doms\Icons\IconCenterFocusStrong;
use Websyspro\Elements\Doms\Icons\IconCenterFocusWeak;
use Websyspro\Elements\Doms\Icons\IconChair;
use Websyspro\Elements\Doms\Icons\IconChairAlt;
use Websyspro\Elements\Doms\Icons\IconChalet;
use Websyspro\Elements\Doms\Icons\IconChangeCircle;
use Websyspro\Elements\Doms\Icons\IconChangeHistory;
use Websyspro\Elements\Doms\Icons\IconCharger;
use Websyspro\Elements\Doms\Icons\IconChargingStation;
use Websyspro\Elements\Doms\Icons\IconChartData;
use Websyspro\Elements\Doms\Icons\IconChat;
use Websyspro\Elements\Doms\Icons\IconChatAddOn;
use Websyspro\Elements\Doms\Icons\IconChatAppsScript;
use Websyspro\Elements\Doms\Icons\IconChatBubble;
use Websyspro\Elements\Doms\Icons\IconChatError;
use Websyspro\Elements\Doms\Icons\IconChatInfo;
use Websyspro\Elements\Doms\Icons\IconChatPasteGo;
use Websyspro\Elements\Doms\Icons\IconChatPasteGo2;
use Websyspro\Elements\Doms\Icons\IconCheck;
use Websyspro\Elements\Doms\Icons\IconCheckbook;
use Websyspro\Elements\Doms\Icons\IconCheckBox;
use Websyspro\Elements\Doms\Icons\IconCheckBoxOutlineBlank;
use Websyspro\Elements\Doms\Icons\IconCheckCircle;
use Websyspro\Elements\Doms\Icons\IconCheckedBag;
use Websyspro\Elements\Doms\Icons\IconCheckedBagQuestion;
use Websyspro\Elements\Doms\Icons\IconCheckIndeterminateSmall;
use Websyspro\Elements\Doms\Icons\IconCheckInOut;
use Websyspro\Elements\Doms\Icons\IconChecklist;
use Websyspro\Elements\Doms\Icons\IconChecklistRtl;
use Websyspro\Elements\Doms\Icons\IconCheckroom;
use Websyspro\Elements\Doms\Icons\IconCheckSmall;
use Websyspro\Elements\Doms\Icons\IconCheer;
use Websyspro\Elements\Doms\Icons\IconChess;
use Websyspro\Elements\Doms\Icons\IconChessPawn;
use Websyspro\Elements\Doms\Icons\IconChevronBackward;
use Websyspro\Elements\Doms\Icons\IconChevronForward;
use Websyspro\Elements\Doms\Icons\IconChevronLeft;
use Websyspro\Elements\Doms\Icons\IconChevronRight;
use Websyspro\Elements\Doms\Icons\IconChildCare;
use Websyspro\Elements\Doms\Icons\IconChildFriendly;
use Websyspro\Elements\Doms\Icons\IconChipExtraction;
use Websyspro\Elements\Doms\Icons\IconChips;
use Websyspro\Elements\Doms\Icons\IconChromecast2;
use Websyspro\Elements\Doms\Icons\IconChromecastDevice;
use Websyspro\Elements\Doms\Icons\IconChromeReaderMode;
use Websyspro\Elements\Doms\Icons\IconChronic;
use Websyspro\Elements\Doms\Icons\IconChurch;
use Websyspro\Elements\Doms\Icons\IconCinematicBlur;
use Websyspro\Elements\Doms\Icons\IconCircle;
use Websyspro\Elements\Doms\Icons\IconCircleNotifications;
use Websyspro\Elements\Doms\Icons\IconCircles;
use Websyspro\Elements\Doms\Icons\IconCirclesExt;
use Websyspro\Elements\Doms\Icons\IconClarify;
use Websyspro\Elements\Doms\Icons\IconCleanHands;
use Websyspro\Elements\Doms\Icons\IconCleaning;
use Websyspro\Elements\Doms\Icons\IconCleaningBucket;
use Websyspro\Elements\Doms\Icons\IconCleaningServices;
use Websyspro\Elements\Doms\Icons\IconClearAll;
use Websyspro\Elements\Doms\Icons\IconClearDay;
use Websyspro\Elements\Doms\Icons\IconClimateMiniSplit;
use Websyspro\Elements\Doms\Icons\IconClinicalNotes;
use Websyspro\Elements\Doms\Icons\IconClockArrowDown;
use Websyspro\Elements\Doms\Icons\IconClockArrowUp;
use Websyspro\Elements\Doms\Icons\IconClockLoader10;
use Websyspro\Elements\Doms\Icons\IconClockLoader20;
use Websyspro\Elements\Doms\Icons\IconClockLoader40;
use Websyspro\Elements\Doms\Icons\IconClockLoader60;
use Websyspro\Elements\Doms\Icons\IconClockLoader80;
use Websyspro\Elements\Doms\Icons\IconClockLoader90;
use Websyspro\Elements\Doms\Icons\IconClose;
use Websyspro\Elements\Doms\Icons\IconClosedCaption;
use Websyspro\Elements\Doms\Icons\IconClosedCaptionAdd;
use Websyspro\Elements\Doms\Icons\IconClosedCaptionDisabled;
use Websyspro\Elements\Doms\Icons\IconCloseFullscreen;
use Websyspro\Elements\Doms\Icons\IconCloseSmall;
use Websyspro\Elements\Doms\Icons\IconCloud;
use Websyspro\Elements\Doms\Icons\IconCloudAlert;
use Websyspro\Elements\Doms\Icons\IconCloudCircle;
use Websyspro\Elements\Doms\Icons\IconCloudDone;
use Websyspro\Elements\Doms\Icons\IconCloudDownload;
use Websyspro\Elements\Doms\Icons\IconCloudLock;
use Websyspro\Elements\Doms\Icons\IconCloudOff;
use Websyspro\Elements\Doms\Icons\IconCloudSync;
use Websyspro\Elements\Doms\Icons\IconCloudUpload;
use Websyspro\Elements\Doms\Icons\IconCloudySnowing;
use Websyspro\Elements\Doms\Icons\IconCo2;
use Websyspro\Elements\Doms\Icons\IconCode;
use Websyspro\Elements\Doms\Icons\IconCodeBlocks;
use Websyspro\Elements\Doms\Icons\IconCodeOff;
use Websyspro\Elements\Doms\Icons\IconCoffee;
use Websyspro\Elements\Doms\Icons\IconCoffeeMaker;
use Websyspro\Elements\Doms\Icons\IconCognition;
use Websyspro\Elements\Doms\Icons\IconCognition2;
use Websyspro\Elements\Doms\Icons\IconCollapseAll;
use Websyspro\Elements\Doms\Icons\IconCollapseContent;
use Websyspro\Elements\Doms\Icons\IconCollectionsBookmark;
use Websyspro\Elements\Doms\Icons\IconColorize;
use Websyspro\Elements\Doms\Icons\IconColors;
use Websyspro\Elements\Doms\Icons\IconCombineColumns;
use Websyspro\Elements\Doms\Icons\IconComedyMask;
use Websyspro\Elements\Doms\Icons\IconComicBubble;
use Websyspro\Elements\Doms\Icons\IconComment;
use Websyspro\Elements\Doms\Icons\IconCommentBank;
use Websyspro\Elements\Doms\Icons\IconCommentsDisabled;
use Websyspro\Elements\Doms\Icons\IconCommit;
use Websyspro\Elements\Doms\Icons\IconCommunication;
use Websyspro\Elements\Doms\Icons\IconCommunities;
use Websyspro\Elements\Doms\Icons\IconCommute;
use Websyspro\Elements\Doms\Icons\IconCompare;
use Websyspro\Elements\Doms\Icons\IconCompareArrows;
use Websyspro\Elements\Doms\Icons\IconCompassCalibration;
use Websyspro\Elements\Doms\Icons\IconComponentExchange;
use Websyspro\Elements\Doms\Icons\IconCompost;
use Websyspro\Elements\Doms\Icons\IconCompress;
use Websyspro\Elements\Doms\Icons\IconComputer;
use Websyspro\Elements\Doms\Icons\IconConcierge;
use Websyspro\Elements\Doms\Icons\IconConditions;
use Websyspro\Elements\Doms\Icons\IconConfirmationNumber;
use Websyspro\Elements\Doms\Icons\IconCongenital;
use Websyspro\Elements\Doms\Icons\IconConnectedTv;
use Websyspro\Elements\Doms\Icons\IconConnectingAirports;
use Websyspro\Elements\Doms\Icons\IconConnectWithoutContact;
use Websyspro\Elements\Doms\Icons\IconConstruction;
use Websyspro\Elements\Doms\Icons\IconContactEmergency;
use Websyspro\Elements\Doms\Icons\IconContactless;
use Websyspro\Elements\Doms\Icons\IconContactlessOff;
use Websyspro\Elements\Doms\Icons\IconContactMail;
use Websyspro\Elements\Doms\Icons\IconContactPage;
use Websyspro\Elements\Doms\Icons\IconContactPhone;
use Websyspro\Elements\Doms\Icons\IconContacts;
use Websyspro\Elements\Doms\Icons\IconContactsProduct;
use Websyspro\Elements\Doms\Icons\IconContactSupport;
use Websyspro\Elements\Doms\Icons\IconContentCopy;
use Websyspro\Elements\Doms\Icons\IconContentCut;
use Websyspro\Elements\Doms\Icons\IconContentPaste;
use Websyspro\Elements\Doms\Icons\IconContentPasteGo;
use Websyspro\Elements\Doms\Icons\IconContentPasteOff;
use Websyspro\Elements\Doms\Icons\IconContentPasteSearch;
use Websyspro\Elements\Doms\Icons\IconContextualToken;
use Websyspro\Elements\Doms\Icons\IconContextualTokenAdd;
use Websyspro\Elements\Doms\Icons\IconContract;
use Websyspro\Elements\Doms\Icons\IconContractDelete;
use Websyspro\Elements\Doms\Icons\IconContractEdit;
use Websyspro\Elements\Doms\Icons\IconContrast;
use Websyspro\Elements\Doms\Icons\IconContrastCircle;
use Websyspro\Elements\Doms\Icons\IconContrastRtlOff;
use Websyspro\Elements\Doms\Icons\IconContrastSquare;
use Websyspro\Elements\Doms\Icons\IconControlCamera;
use Websyspro\Elements\Doms\Icons\IconControllerGen;
use Websyspro\Elements\Doms\Icons\IconControlPointDuplicate;
use Websyspro\Elements\Doms\Icons\IconConversionPath;
use Websyspro\Elements\Doms\Icons\IconConversionPathOff;
use Websyspro\Elements\Doms\Icons\IconConvertToText;
use Websyspro\Elements\Doms\Icons\IconConveyorBelt;
use Websyspro\Elements\Doms\Icons\IconCookie;
use Websyspro\Elements\Doms\Icons\IconCookieOff;
use Websyspro\Elements\Doms\Icons\IconCooking;
use Websyspro\Elements\Doms\Icons\IconCoolToDry;
use Websyspro\Elements\Doms\Icons\IconCoPresent;
use Websyspro\Elements\Doms\Icons\IconCopyAll;
use Websyspro\Elements\Doms\Icons\IconCopyright;
use Websyspro\Elements\Doms\Icons\IconCoronavirus;
use Websyspro\Elements\Doms\Icons\IconCorporateFare;
use Websyspro\Elements\Doms\Icons\IconCottage;
use Websyspro\Elements\Doms\Icons\IconCounter0;
use Websyspro\Elements\Doms\Icons\IconCounter1;
use Websyspro\Elements\Doms\Icons\IconCounter2;
use Websyspro\Elements\Doms\Icons\IconCounter3;
use Websyspro\Elements\Doms\Icons\IconCounter4;
use Websyspro\Elements\Doms\Icons\IconCounter5;
use Websyspro\Elements\Doms\Icons\IconCounter6;
use Websyspro\Elements\Doms\Icons\IconCounter7;
use Websyspro\Elements\Doms\Icons\IconCounter8;
use Websyspro\Elements\Doms\Icons\IconCounter9;
use Websyspro\Elements\Doms\Icons\IconCountertops;
use Websyspro\Elements\Doms\Icons\IconCreateNewFolder;
use Websyspro\Elements\Doms\Icons\IconCreditCard;
use Websyspro\Elements\Doms\Icons\IconCreditCardClock;
use Websyspro\Elements\Doms\Icons\IconCreditCardGear;
use Websyspro\Elements\Doms\Icons\IconCreditCardHeart;
use Websyspro\Elements\Doms\Icons\IconCreditCardOff;
use Websyspro\Elements\Doms\Icons\IconCreditScore;
use Websyspro\Elements\Doms\Icons\IconCrib;
use Websyspro\Elements\Doms\Icons\IconCrisisAlert;
use Websyspro\Elements\Doms\Icons\IconCrop;
use Websyspro\Elements\Doms\Icons\IconCrop169;
use Websyspro\Elements\Doms\Icons\IconCrop32;
use Websyspro\Elements\Doms\Icons\IconCrop54;
use Websyspro\Elements\Doms\Icons\IconCrop75;
use Websyspro\Elements\Doms\Icons\IconCrop916;
use Websyspro\Elements\Doms\Icons\IconCropFree;
use Websyspro\Elements\Doms\Icons\IconCropLandscape;
use Websyspro\Elements\Doms\Icons\IconCropPortrait;
use Websyspro\Elements\Doms\Icons\IconCropRotate;
use Websyspro\Elements\Doms\Icons\IconCropSquare;
use Websyspro\Elements\Doms\Icons\IconCrossword;
use Websyspro\Elements\Doms\Icons\IconCrowdsource;
use Websyspro\Elements\Doms\Icons\IconCrown;
use Websyspro\Elements\Doms\Icons\IconCrueltyFree;
use Websyspro\Elements\Doms\Icons\IconCss;
use Websyspro\Elements\Doms\Icons\IconCsv;
use Websyspro\Elements\Doms\Icons\IconCurrencyBitcoin;
use Websyspro\Elements\Doms\Icons\IconCurrencyExchange;
use Websyspro\Elements\Doms\Icons\IconCurrencyFranc;
use Websyspro\Elements\Doms\Icons\IconCurrencyLira;
use Websyspro\Elements\Doms\Icons\IconCurrencyPound;
use Websyspro\Elements\Doms\Icons\IconCurrencyRuble;
use Websyspro\Elements\Doms\Icons\IconCurrencyRupee;
use Websyspro\Elements\Doms\Icons\IconCurrencyRupeeCircle;
use Websyspro\Elements\Doms\Icons\IconCurrencyYen;
use Websyspro\Elements\Doms\Icons\IconCurrencyYuan;
use Websyspro\Elements\Doms\Icons\IconCurtains;
use Websyspro\Elements\Doms\Icons\IconCurtainsClosed;
use Websyspro\Elements\Doms\Icons\IconCustomTypography;
use Websyspro\Elements\Doms\Icons\IconCycle;
use Websyspro\Elements\Doms\Icons\IconCyclone;
use Websyspro\Elements\Doms\Icons\IconDangerous;
use Websyspro\Elements\Doms\Icons\IconDarkMode;
use Websyspro\Elements\Doms\Icons\IconDashboard;
use Websyspro\Elements\Doms\Icons\IconDashboard2;
use Websyspro\Elements\Doms\Icons\IconDashboardCustomize;
use Websyspro\Elements\Doms\Icons\IconDataAlert;
use Websyspro\Elements\Doms\Icons\IconDataArray;
use Websyspro\Elements\Doms\Icons\IconDatabase;
use Websyspro\Elements\Doms\Icons\IconDatabaseOff;
use Websyspro\Elements\Doms\Icons\IconDatabaseSearch;
use Websyspro\Elements\Doms\Icons\IconDatabaseUpload;
use Websyspro\Elements\Doms\Icons\IconDataCheck;
use Websyspro\Elements\Doms\Icons\IconDataExploration;
use Websyspro\Elements\Doms\Icons\IconDataInfoAlert;
use Websyspro\Elements\Doms\Icons\IconDataLossPrevention;
use Websyspro\Elements\Doms\Icons\IconDataObject;
use Websyspro\Elements\Doms\Icons\IconDataSaverOn;
use Websyspro\Elements\Doms\Icons\IconDataset;
use Websyspro\Elements\Doms\Icons\IconDatasetLinked;
use Websyspro\Elements\Doms\Icons\IconDataTable;
use Websyspro\Elements\Doms\Icons\IconDataThresholding;
use Websyspro\Elements\Doms\Icons\IconDataUsage;
use Websyspro\Elements\Doms\Icons\IconDateRange;
use Websyspro\Elements\Doms\Icons\IconDeblur;
use Websyspro\Elements\Doms\Icons\IconDeceased;
use Websyspro\Elements\Doms\Icons\IconDecimalDecrease;
use Websyspro\Elements\Doms\Icons\IconDecimalIncrease;
use Websyspro\Elements\Doms\Icons\IconDeck;
use Websyspro\Elements\Doms\Icons\IconDehaze;
use Websyspro\Elements\Doms\Icons\IconDelete;
use Websyspro\Elements\Doms\Icons\IconDeleteForever;
use Websyspro\Elements\Doms\Icons\IconDeleteHistory;
use Websyspro\Elements\Doms\Icons\IconDeleteSweep;
use Websyspro\Elements\Doms\Icons\IconDeliveryTruckBolt;
use Websyspro\Elements\Doms\Icons\IconDeliveryTruckSpeed;
use Websyspro\Elements\Doms\Icons\IconDemography;
use Websyspro\Elements\Doms\Icons\IconDensityLarge;
use Websyspro\Elements\Doms\Icons\IconDensityMedium;
use Websyspro\Elements\Doms\Icons\IconDensitySmall;
use Websyspro\Elements\Doms\Icons\IconDentistry;
use Websyspro\Elements\Doms\Icons\IconDepartureBoard;
use Websyspro\Elements\Doms\Icons\IconDeployedCode;
use Websyspro\Elements\Doms\Icons\IconDeployedCodeAccount;
use Websyspro\Elements\Doms\Icons\IconDeployedCodeAlert;
use Websyspro\Elements\Doms\Icons\IconDeployedCodeHistory;
use Websyspro\Elements\Doms\Icons\IconDeployedCodeUpdate;
use Websyspro\Elements\Doms\Icons\IconDermatology;
use Websyspro\Elements\Doms\Icons\IconDescription;
use Websyspro\Elements\Doms\Icons\IconDeselect;
use Websyspro\Elements\Doms\Icons\IconDesignServices;
use Websyspro\Elements\Doms\Icons\IconDesk;
use Websyspro\Elements\Doms\Icons\IconDeskphone;
use Websyspro\Elements\Doms\Icons\IconDesktopAccessDisabled;
use Websyspro\Elements\Doms\Icons\IconDesktopCloud;
use Websyspro\Elements\Doms\Icons\IconDesktopCloudStack;
use Websyspro\Elements\Doms\Icons\IconDesktopLandscape;
use Websyspro\Elements\Doms\Icons\IconDesktopLandscapeAdd;
use Websyspro\Elements\Doms\Icons\IconDesktopMac;
use Websyspro\Elements\Doms\Icons\IconDesktopPortrait;
use Websyspro\Elements\Doms\Icons\IconDesktopWindows;
use Websyspro\Elements\Doms\Icons\IconDestruction;
use Websyspro\Elements\Doms\Icons\IconDetails;
use Websyspro\Elements\Doms\Icons\IconDetectionAndZone;
use Websyspro\Elements\Doms\Icons\IconDetector;
use Websyspro\Elements\Doms\Icons\IconDetectorAlarm;
use Websyspro\Elements\Doms\Icons\IconDetectorBattery;
use Websyspro\Elements\Doms\Icons\IconDetectorCo;
use Websyspro\Elements\Doms\Icons\IconDetectorOffline;
use Websyspro\Elements\Doms\Icons\IconDetectorSmoke;
use Websyspro\Elements\Doms\Icons\IconDetectorStatus;
use Websyspro\Elements\Doms\Icons\IconDeveloperBoard;
use Websyspro\Elements\Doms\Icons\IconDeveloperBoardOff;
use Websyspro\Elements\Doms\Icons\IconDeveloperGuide;
use Websyspro\Elements\Doms\Icons\IconDeveloperMode;
use Websyspro\Elements\Doms\Icons\IconDeveloperModeTv;
use Websyspro\Elements\Doms\Icons\IconDeviceHub;
use Websyspro\Elements\Doms\Icons\IconDevices;
use Websyspro\Elements\Doms\Icons\IconDevicesFold;
use Websyspro\Elements\Doms\Icons\IconDevicesFold2;
use Websyspro\Elements\Doms\Icons\IconDevicesOff;
use Websyspro\Elements\Doms\Icons\IconDevicesOther;
use Websyspro\Elements\Doms\Icons\IconDevicesWearables;
use Websyspro\Elements\Doms\Icons\IconDeviceThermostat;
use Websyspro\Elements\Doms\Icons\IconDeviceUnknown;
use Websyspro\Elements\Doms\Icons\IconDewPoint;
use Websyspro\Elements\Doms\Icons\IconDiagnosis;
use Websyspro\Elements\Doms\Icons\IconDiagonalLine;
use Websyspro\Elements\Doms\Icons\IconDialerSip;
use Websyspro\Elements\Doms\Icons\IconDialogs;
use Websyspro\Elements\Doms\Icons\IconDialpad;
use Websyspro\Elements\Doms\Icons\IconDiamond;
use Websyspro\Elements\Doms\Icons\IconDictionary;
use Websyspro\Elements\Doms\Icons\IconDifference;
use Websyspro\Elements\Doms\Icons\IconDigitalOutOfHome;
use Websyspro\Elements\Doms\Icons\IconDigitalWellbeing;
use Websyspro\Elements\Doms\Icons\IconDining;
use Websyspro\Elements\Doms\Icons\IconDinnerDining;
use Websyspro\Elements\Doms\Icons\IconDirections;
use Websyspro\Elements\Doms\Icons\IconDirectionsAlt;
use Websyspro\Elements\Doms\Icons\IconDirectionsAltOff;
use Websyspro\Elements\Doms\Icons\IconDirectionsBike;
use Websyspro\Elements\Doms\Icons\IconDirectionsBoat;
use Websyspro\Elements\Doms\Icons\IconDirectionsBus;
use Websyspro\Elements\Doms\Icons\IconDirectionsCar;
use Websyspro\Elements\Doms\Icons\IconDirectionsOff;
use Websyspro\Elements\Doms\Icons\IconDirectionsRailway;
use Websyspro\Elements\Doms\Icons\IconDirectionsRailway2;
use Websyspro\Elements\Doms\Icons\IconDirectionsRun;
use Websyspro\Elements\Doms\Icons\IconDirectionsSubway;
use Websyspro\Elements\Doms\Icons\IconDirectionsWalk;
use Websyspro\Elements\Doms\Icons\IconDirectorySync;
use Websyspro\Elements\Doms\Icons\IconDirtyLens;
use Websyspro\Elements\Doms\Icons\IconDisabledByDefault;
use Websyspro\Elements\Doms\Icons\IconDisabledVisible;
use Websyspro\Elements\Doms\Icons\IconDiscFull;
use Websyspro\Elements\Doms\Icons\IconDiscoverTune;
use Websyspro\Elements\Doms\Icons\IconDishwasher;
use Websyspro\Elements\Doms\Icons\IconDishwasherGen;
use Websyspro\Elements\Doms\Icons\IconDisplayExternalInput;
use Websyspro\Elements\Doms\Icons\IconDisplaySettings;
use Websyspro\Elements\Doms\Icons\IconDistance;
use Websyspro\Elements\Doms\Icons\IconDiversity1;
use Websyspro\Elements\Doms\Icons\IconDiversity2;
use Websyspro\Elements\Doms\Icons\IconDiversity3;
use Websyspro\Elements\Doms\Icons\IconDiversity4;
use Websyspro\Elements\Doms\Icons\IconDns;
use Websyspro\Elements\Doms\Icons\IconDock;
use Websyspro\Elements\Doms\Icons\IconDockToBottom;
use Websyspro\Elements\Doms\Icons\IconDockToLeft;
use Websyspro\Elements\Doms\Icons\IconDockToRight;
use Websyspro\Elements\Doms\Icons\IconDocs;
use Websyspro\Elements\Doms\Icons\IconDocsAddOn;
use Websyspro\Elements\Doms\Icons\IconDocsAppsScript;
use Websyspro\Elements\Doms\Icons\IconDocumentScanner;
use Websyspro\Elements\Doms\Icons\IconDocumentSearch;
use Websyspro\Elements\Doms\Icons\IconDomain;
use Websyspro\Elements\Doms\Icons\IconDomainAdd;
use Websyspro\Elements\Doms\Icons\IconDomainDisabled;
use Websyspro\Elements\Doms\Icons\IconDomainVerification;
use Websyspro\Elements\Doms\Icons\IconDomainVerificationOff;
use Websyspro\Elements\Doms\Icons\IconDominoMask;
use Websyspro\Elements\Doms\Icons\IconDoneAll;
use Websyspro\Elements\Doms\Icons\IconDoneOutline;
use Websyspro\Elements\Doms\Icons\IconDoNotDisturbOff;
use Websyspro\Elements\Doms\Icons\IconDoNotDisturbOn;
use Websyspro\Elements\Doms\Icons\IconDoNotDisturbOnTotalSilence;
use Websyspro\Elements\Doms\Icons\IconDoNotStep;
use Websyspro\Elements\Doms\Icons\IconDoNotTouch;
use Websyspro\Elements\Doms\Icons\IconDonutLarge;
use Websyspro\Elements\Doms\Icons\IconDonutSmall;
use Websyspro\Elements\Doms\Icons\IconDoorBack;
use Websyspro\Elements\Doms\Icons\IconDoorbell;
use Websyspro\Elements\Doms\Icons\IconDoorbell3p;
use Websyspro\Elements\Doms\Icons\IconDoorbellChime;
use Websyspro\Elements\Doms\Icons\IconDoorFront;
use Websyspro\Elements\Doms\Icons\IconDoorOpen;
use Websyspro\Elements\Doms\Icons\IconDoorSensor;
use Websyspro\Elements\Doms\Icons\IconDoorSliding;
use Websyspro\Elements\Doms\Icons\IconDoubleArrow;
use Websyspro\Elements\Doms\Icons\IconDownhillSkiing;
use Websyspro\Elements\Doms\Icons\IconDownload;
use Websyspro\Elements\Doms\Icons\IconDownload2;
use Websyspro\Elements\Doms\Icons\IconDownloadDone;
use Websyspro\Elements\Doms\Icons\IconDownloadForOffline;
use Websyspro\Elements\Doms\Icons\IconDownloading;
use Websyspro\Elements\Doms\Icons\IconDraft;
use Websyspro\Elements\Doms\Icons\IconDraftOrders;
use Websyspro\Elements\Doms\Icons\IconDrafts;
use Websyspro\Elements\Doms\Icons\IconDragClick;
use Websyspro\Elements\Doms\Icons\IconDragHandle;
use Websyspro\Elements\Doms\Icons\IconDragIndicator;
use Websyspro\Elements\Doms\Icons\IconDragPan;
use Websyspro\Elements\Doms\Icons\IconDraw;
use Websyspro\Elements\Doms\Icons\IconDrawAbstract;
use Websyspro\Elements\Doms\Icons\IconDrawCollage;
use Websyspro\Elements\Doms\Icons\IconDresser;
use Websyspro\Elements\Doms\Icons\IconDriveExport;
use Websyspro\Elements\Doms\Icons\IconDriveFileMove;
use Websyspro\Elements\Doms\Icons\IconDriveFolderUpload;
use Websyspro\Elements\Doms\Icons\IconDropdown;
use Websyspro\Elements\Doms\Icons\IconDry;
use Websyspro\Elements\Doms\Icons\IconDryCleaning;
use Websyspro\Elements\Doms\Icons\IconDualScreen;
use Websyspro\Elements\Doms\Icons\IconDuo;
use Websyspro\Elements\Doms\Icons\IconDvr;
use Websyspro\Elements\Doms\Icons\IconDynamicFeed;
use Websyspro\Elements\Doms\Icons\IconDynamicForm;
use Websyspro\Elements\Doms\Icons\IconE911Avatar;
use Websyspro\Elements\Doms\Icons\IconE911Emergency;
use Websyspro\Elements\Doms\Icons\IconEarbuds;
use Websyspro\Elements\Doms\Icons\IconEarbudsBattery;
use Websyspro\Elements\Doms\Icons\IconEarlyOn;
use Websyspro\Elements\Doms\Icons\IconEarthquake;
use Websyspro\Elements\Doms\Icons\IconEast;
use Websyspro\Elements\Doms\Icons\IconEcg;
use Websyspro\Elements\Doms\Icons\IconEcgHeart;
use Websyspro\Elements\Doms\Icons\IconEco;
use Websyspro\Elements\Doms\Icons\IconEda;
use Websyspro\Elements\Doms\Icons\IconEdgesensorHigh;
use Websyspro\Elements\Doms\Icons\IconEdgesensorLow;
use Websyspro\Elements\Doms\Icons\IconEdit;
use Websyspro\Elements\Doms\Icons\IconEditArrowDown;
use Websyspro\Elements\Doms\Icons\IconEditArrowUp;
use Websyspro\Elements\Doms\Icons\IconEditAttributes;
use Websyspro\Elements\Doms\Icons\IconEditAudio;
use Websyspro\Elements\Doms\Icons\IconEditCalendar;
use Websyspro\Elements\Doms\Icons\IconEditDocument;
use Websyspro\Elements\Doms\Icons\IconEditLocation;
use Websyspro\Elements\Doms\Icons\IconEditLocationAlt;
use Websyspro\Elements\Doms\Icons\IconEditNote;
use Websyspro\Elements\Doms\Icons\IconEditNotifications;
use Websyspro\Elements\Doms\Icons\IconEditOff;
use Websyspro\Elements\Doms\Icons\IconEditorChoice;
use Websyspro\Elements\Doms\Icons\IconEditRoad;
use Websyspro\Elements\Doms\Icons\IconEditSquare;
use Websyspro\Elements\Doms\Icons\IconEgg;
use Websyspro\Elements\Doms\Icons\IconEggAlt;
use Websyspro\Elements\Doms\Icons\IconEject;
use Websyspro\Elements\Doms\Icons\IconElderly;
use Websyspro\Elements\Doms\Icons\IconElderlyWoman;
use Websyspro\Elements\Doms\Icons\IconElectricalServices;
use Websyspro\Elements\Doms\Icons\IconElectricBike;
use Websyspro\Elements\Doms\Icons\IconElectricBolt;
use Websyspro\Elements\Doms\Icons\IconElectricCar;
use Websyspro\Elements\Doms\Icons\IconElectricMeter;
use Websyspro\Elements\Doms\Icons\IconElectricMoped;
use Websyspro\Elements\Doms\Icons\IconElectricRickshaw;
use Websyspro\Elements\Doms\Icons\IconElectricScooter;
use Websyspro\Elements\Doms\Icons\IconElevation;
use Websyspro\Elements\Doms\Icons\IconElevator;
use Websyspro\Elements\Doms\Icons\IconEmergency;
use Websyspro\Elements\Doms\Icons\IconEmergencyHeat;
use Websyspro\Elements\Doms\Icons\IconEmergencyHeat2;
use Websyspro\Elements\Doms\Icons\IconEmergencyHome;
use Websyspro\Elements\Doms\Icons\IconEmergencyRecording;
use Websyspro\Elements\Doms\Icons\IconEmergencyShare;
use Websyspro\Elements\Doms\Icons\IconEmergencyShareOff;
use Websyspro\Elements\Doms\Icons\IconEMobiledata;
use Websyspro\Elements\Doms\Icons\IconEMobiledataBadge;
use Websyspro\Elements\Doms\Icons\IconEmojiEvents;
use Websyspro\Elements\Doms\Icons\IconEmojiFoodBeverage;
use Websyspro\Elements\Doms\Icons\IconEmojiLanguage;
use Websyspro\Elements\Doms\Icons\IconEmojiNature;
use Websyspro\Elements\Doms\Icons\IconEmojiObjects;
use Websyspro\Elements\Doms\Icons\IconEmojiPeople;
use Websyspro\Elements\Doms\Icons\IconEmojiSymbols;
use Websyspro\Elements\Doms\Icons\IconEmojiTransportation;
use Websyspro\Elements\Doms\Icons\IconEmoticon;
use Websyspro\Elements\Doms\Icons\IconEmptyDashboard;
use Websyspro\Elements\Doms\Icons\IconEnable;
use Websyspro\Elements\Doms\Icons\IconEncrypted;
use Websyspro\Elements\Doms\Icons\IconEncryptedAdd;
use Websyspro\Elements\Doms\Icons\IconEncryptedAddCircle;
use Websyspro\Elements\Doms\Icons\IconEncryptedMinusCircle;
use Websyspro\Elements\Doms\Icons\IconEncryptedOff;
use Websyspro\Elements\Doms\Icons\IconEndocrinology;
use Websyspro\Elements\Doms\Icons\IconEnergy;
use Websyspro\Elements\Doms\Icons\IconEnergyProgramSaving;
use Websyspro\Elements\Doms\Icons\IconEnergyProgramTimeUsed;
use Websyspro\Elements\Doms\Icons\IconEnergySavingsLeaf;
use Websyspro\Elements\Doms\Icons\IconEngineering;
use Websyspro\Elements\Doms\Icons\IconEnhancedEncryption;
use Websyspro\Elements\Doms\Icons\IconEnt;
use Websyspro\Elements\Doms\Icons\IconEnterprise;
use Websyspro\Elements\Doms\Icons\IconEnterpriseOff;
use Websyspro\Elements\Doms\Icons\IconEqual;
use Websyspro\Elements\Doms\Icons\IconEqualizer;
use Websyspro\Elements\Doms\Icons\IconEraserSize1;
use Websyspro\Elements\Doms\Icons\IconEraserSize2;
use Websyspro\Elements\Doms\Icons\IconEraserSize3;
use Websyspro\Elements\Doms\Icons\IconEraserSize4;
use Websyspro\Elements\Doms\Icons\IconEraserSize5;
use Websyspro\Elements\Doms\Icons\IconError;
use Websyspro\Elements\Doms\Icons\IconErrorMed;
use Websyspro\Elements\Doms\Icons\IconEscalator;
use Websyspro\Elements\Doms\Icons\IconEscalatorWarning;
use Websyspro\Elements\Doms\Icons\IconEuro;
use Websyspro\Elements\Doms\Icons\IconEuroSymbol;
use Websyspro\Elements\Doms\Icons\IconEvent;
use Websyspro\Elements\Doms\Icons\IconEventAvailable;
use Websyspro\Elements\Doms\Icons\IconEventBusy;
use Websyspro\Elements\Doms\Icons\IconEventList;
use Websyspro\Elements\Doms\Icons\IconEventNote;
use Websyspro\Elements\Doms\Icons\IconEventRepeat;
use Websyspro\Elements\Doms\Icons\IconEventSeat;
use Websyspro\Elements\Doms\Icons\IconEventUpcoming;
use Websyspro\Elements\Doms\Icons\IconEvMobiledataBadge;
use Websyspro\Elements\Doms\Icons\IconEvShadow;
use Websyspro\Elements\Doms\Icons\IconEvShadowAdd;
use Websyspro\Elements\Doms\Icons\IconEvShadowMinus;
use Websyspro\Elements\Doms\Icons\IconEvStation;
use Websyspro\Elements\Doms\Icons\IconExclamation;
use Websyspro\Elements\Doms\Icons\IconExercise;
use Websyspro\Elements\Doms\Icons\IconExitToApp;
use Websyspro\Elements\Doms\Icons\IconExpand;
use Websyspro\Elements\Doms\Icons\IconExpandAll;
use Websyspro\Elements\Doms\Icons\IconExpandCircleDown;
use Websyspro\Elements\Doms\Icons\IconExpandCircleRight;
use Websyspro\Elements\Doms\Icons\IconExpandCircleUp;
use Websyspro\Elements\Doms\Icons\IconExpandContent;
use Websyspro\Elements\Doms\Icons\IconExpansionPanels;
use Websyspro\Elements\Doms\Icons\IconExperiment;
use Websyspro\Elements\Doms\Icons\IconExplicit;
use Websyspro\Elements\Doms\Icons\IconExplore;
use Websyspro\Elements\Doms\Icons\IconExploreNearby;
use Websyspro\Elements\Doms\Icons\IconExploreOff;
use Websyspro\Elements\Doms\Icons\IconExplosion;
use Websyspro\Elements\Doms\Icons\IconExportNotes;
use Websyspro\Elements\Doms\Icons\IconExposure;
use Websyspro\Elements\Doms\Icons\IconExposureNeg1;
use Websyspro\Elements\Doms\Icons\IconExposureNeg2;
use Websyspro\Elements\Doms\Icons\IconExposurePlus1;
use Websyspro\Elements\Doms\Icons\IconExposurePlus2;
use Websyspro\Elements\Doms\Icons\IconExposureZero;
use Websyspro\Elements\Doms\Icons\IconExtension;
use Websyspro\Elements\Doms\Icons\IconExtensionOff;
use Websyspro\Elements\Doms\Icons\IconEyeglasses;
use Websyspro\Elements\Doms\Icons\IconEyeTracking;
use Websyspro\Elements\Doms\Icons\IconFace;
use Websyspro\Elements\Doms\Icons\IconFace2;
use Websyspro\Elements\Doms\Icons\IconFace3;
use Websyspro\Elements\Doms\Icons\IconFace4;
use Websyspro\Elements\Doms\Icons\IconFace5;
use Websyspro\Elements\Doms\Icons\IconFace6;
use Websyspro\Elements\Doms\Icons\IconFaceDown;
use Websyspro\Elements\Doms\Icons\IconFaceLeft;
use Websyspro\Elements\Doms\Icons\IconFaceNod;
use Websyspro\Elements\Doms\Icons\IconFaceRetouchingOff;
use Websyspro\Elements\Doms\Icons\IconFaceRight;
use Websyspro\Elements\Doms\Icons\IconFaceShake;
use Websyspro\Elements\Doms\Icons\IconFaceUp;
use Websyspro\Elements\Doms\Icons\IconFactCheck;
use Websyspro\Elements\Doms\Icons\IconFactory;
use Websyspro\Elements\Doms\Icons\IconFalling;
use Websyspro\Elements\Doms\Icons\IconFamiliarFaceAndZone;
use Websyspro\Elements\Doms\Icons\IconFamilyHistory;
use Websyspro\Elements\Doms\Icons\IconFamilyHome;
use Websyspro\Elements\Doms\Icons\IconFamilyLink;
use Websyspro\Elements\Doms\Icons\IconFamilyRestroom;
use Websyspro\Elements\Doms\Icons\IconFamilyStar;
use Websyspro\Elements\Doms\Icons\IconFarsightDigital;
use Websyspro\Elements\Doms\Icons\IconFastfood;
use Websyspro\Elements\Doms\Icons\IconFastForward;
use Websyspro\Elements\Doms\Icons\IconFastRewind;
use Websyspro\Elements\Doms\Icons\IconFaucet;
use Websyspro\Elements\Doms\Icons\IconFavorite;
use Websyspro\Elements\Doms\Icons\IconFax;
use Websyspro\Elements\Doms\Icons\IconFeaturedPlayList;
use Websyspro\Elements\Doms\Icons\IconFeaturedSeasonalAndGifts;
use Websyspro\Elements\Doms\Icons\IconFeaturedVideo;
use Websyspro\Elements\Doms\Icons\IconFeatureSearch;
use Websyspro\Elements\Doms\Icons\IconFeedback;
use Websyspro\Elements\Doms\Icons\IconFemale;
use Websyspro\Elements\Doms\Icons\IconFemur;
use Websyspro\Elements\Doms\Icons\IconFemurAlt;
use Websyspro\Elements\Doms\Icons\IconFence;
use Websyspro\Elements\Doms\Icons\IconFertile;
use Websyspro\Elements\Doms\Icons\IconFestival;
use Websyspro\Elements\Doms\Icons\IconFiberDvr;
use Websyspro\Elements\Doms\Icons\IconFiberManualRecord;
use Websyspro\Elements\Doms\Icons\IconFiberNew;
use Websyspro\Elements\Doms\Icons\IconFiberPin;
use Websyspro\Elements\Doms\Icons\IconFiberSmartRecord;
use Websyspro\Elements\Doms\Icons\IconFileCopy;
use Websyspro\Elements\Doms\Icons\IconFileCopyOff;
use Websyspro\Elements\Doms\Icons\IconFileDownloadOff;
use Websyspro\Elements\Doms\Icons\IconFileExport;
use Websyspro\Elements\Doms\Icons\IconFileJson;
use Websyspro\Elements\Doms\Icons\IconFileMap;
use Websyspro\Elements\Doms\Icons\IconFileMapStack;
use Websyspro\Elements\Doms\Icons\IconFileOpen;
use Websyspro\Elements\Doms\Icons\IconFilePng;
use Websyspro\Elements\Doms\Icons\IconFilePresent;
use Websyspro\Elements\Doms\Icons\IconFiles;
use Websyspro\Elements\Doms\Icons\IconFileSave;
use Websyspro\Elements\Doms\Icons\IconFileSaveOff;
use Websyspro\Elements\Doms\Icons\IconFileUploadOff;
use Websyspro\Elements\Doms\Icons\IconFilter;
use Websyspro\Elements\Doms\Icons\IconFilter1;
use Websyspro\Elements\Doms\Icons\IconFilter2;
use Websyspro\Elements\Doms\Icons\IconFilter3;
use Websyspro\Elements\Doms\Icons\IconFilter4;
use Websyspro\Elements\Doms\Icons\IconFilter5;
use Websyspro\Elements\Doms\Icons\IconFilter6;
use Websyspro\Elements\Doms\Icons\IconFilter7;
use Websyspro\Elements\Doms\Icons\IconFilter8;
use Websyspro\Elements\Doms\Icons\IconFilter9;
use Websyspro\Elements\Doms\Icons\IconFilter9Plus;
use Websyspro\Elements\Doms\Icons\IconFilterAlt;
use Websyspro\Elements\Doms\Icons\IconFilterAltOff;
use Websyspro\Elements\Doms\Icons\IconFilterArrowRight;
use Websyspro\Elements\Doms\Icons\IconFilterBAndW;
use Websyspro\Elements\Doms\Icons\IconFilterCenterFocus;
use Websyspro\Elements\Doms\Icons\IconFilterDrama;
use Websyspro\Elements\Doms\Icons\IconFilterFrames;
use Websyspro\Elements\Doms\Icons\IconFilterHdr;
use Websyspro\Elements\Doms\Icons\IconFilterList;
use Websyspro\Elements\Doms\Icons\IconFilterListOff;
use Websyspro\Elements\Doms\Icons\IconFilterNone;
use Websyspro\Elements\Doms\Icons\IconFilterRetrolux;
use Websyspro\Elements\Doms\Icons\IconFilterTiltShift;
use Websyspro\Elements\Doms\Icons\IconFilterVintage;
use Websyspro\Elements\Doms\Icons\IconFinance;
use Websyspro\Elements\Doms\Icons\IconFinanceChip;
use Websyspro\Elements\Doms\Icons\IconFinanceMode;
use Websyspro\Elements\Doms\Icons\IconFindInPage;
use Websyspro\Elements\Doms\Icons\IconFindReplace;
use Websyspro\Elements\Doms\Icons\IconFingerprint;
use Websyspro\Elements\Doms\Icons\IconFingerprintOff;
use Websyspro\Elements\Doms\Icons\IconFireExtinguisher;
use Websyspro\Elements\Doms\Icons\IconFireHydrant;
use Websyspro\Elements\Doms\Icons\IconFireplace;
use Websyspro\Elements\Doms\Icons\IconFireTruck;
use Websyspro\Elements\Doms\Icons\IconFirstPage;
use Websyspro\Elements\Doms\Icons\IconFitnessCenter;
use Websyspro\Elements\Doms\Icons\IconFitnessTracker;
use Websyspro\Elements\Doms\Icons\IconFitPage;
use Websyspro\Elements\Doms\Icons\IconFitPageHeight;
use Websyspro\Elements\Doms\Icons\IconFitPageWidth;
use Websyspro\Elements\Doms\Icons\IconFitScreen;
use Websyspro\Elements\Doms\Icons\IconFitWidth;
use Websyspro\Elements\Doms\Icons\IconFlag;
use Websyspro\Elements\Doms\Icons\IconFlag2;
use Websyspro\Elements\Doms\Icons\IconFlagCheck;
use Websyspro\Elements\Doms\Icons\IconFlagCircle;
use Websyspro\Elements\Doms\Icons\IconFlaky;
use Websyspro\Elements\Doms\Icons\IconFlare;
use Websyspro\Elements\Doms\Icons\IconFlashAuto;
use Websyspro\Elements\Doms\Icons\IconFlashlightOff;
use Websyspro\Elements\Doms\Icons\IconFlashlightOn;
use Websyspro\Elements\Doms\Icons\IconFlashOff;
use Websyspro\Elements\Doms\Icons\IconFlashOn;
use Websyspro\Elements\Doms\Icons\IconFlatware;
use Websyspro\Elements\Doms\Icons\IconFlexDirection;
use Websyspro\Elements\Doms\Icons\IconFlexNoWrap;
use Websyspro\Elements\Doms\Icons\IconFlexWrap;
use Websyspro\Elements\Doms\Icons\IconFlight;
use Websyspro\Elements\Doms\Icons\IconFlightClass;
use Websyspro\Elements\Doms\Icons\IconFlightLand;
use Websyspro\Elements\Doms\Icons\IconFlightsAndHotels;
use Websyspro\Elements\Doms\Icons\IconFlightTakeoff;
use Websyspro\Elements\Doms\Icons\IconFlip;
use Websyspro\Elements\Doms\Icons\IconFlipCameraAndroid;
use Websyspro\Elements\Doms\Icons\IconFlipCameraIos;
use Websyspro\Elements\Doms\Icons\IconFlipToBack;
use Websyspro\Elements\Doms\Icons\IconFlipToFront;
use Websyspro\Elements\Doms\Icons\IconFloatLandscape2;
use Websyspro\Elements\Doms\Icons\IconFloatPortrait2;
use Websyspro\Elements\Doms\Icons\IconFlood;
use Websyspro\Elements\Doms\Icons\IconFloor;
use Websyspro\Elements\Doms\Icons\IconFloorLamp;
use Websyspro\Elements\Doms\Icons\IconFlowchart;
use Websyspro\Elements\Doms\Icons\IconFlowsheet;
use Websyspro\Elements\Doms\Icons\IconFluid;
use Websyspro\Elements\Doms\Icons\IconFluidBalance;
use Websyspro\Elements\Doms\Icons\IconFluidMed;
use Websyspro\Elements\Doms\Icons\IconFluorescent;
use Websyspro\Elements\Doms\Icons\IconFlutter;
use Websyspro\Elements\Doms\Icons\IconFlutterDash;
use Websyspro\Elements\Doms\Icons\IconFlyover;
use Websyspro\Elements\Doms\Icons\IconFmdBad;
use Websyspro\Elements\Doms\Icons\IconFoggy;
use Websyspro\Elements\Doms\Icons\IconFoldedHands;
use Websyspro\Elements\Doms\Icons\IconFolder;
use Websyspro\Elements\Doms\Icons\IconFolderCheck;
use Websyspro\Elements\Doms\Icons\IconFolderCheck2;
use Websyspro\Elements\Doms\Icons\IconFolderCode;
use Websyspro\Elements\Doms\Icons\IconFolderCopy;
use Websyspro\Elements\Doms\Icons\IconFolderData;
use Websyspro\Elements\Doms\Icons\IconFolderDelete;
use Websyspro\Elements\Doms\Icons\IconFolderEye;
use Websyspro\Elements\Doms\Icons\IconFolderInfo;
use Websyspro\Elements\Doms\Icons\IconFolderLimited;
use Websyspro\Elements\Doms\Icons\IconFolderManaged;
use Websyspro\Elements\Doms\Icons\IconFolderMatch;
use Websyspro\Elements\Doms\Icons\IconFolderOff;
use Websyspro\Elements\Doms\Icons\IconFolderOpen;
use Websyspro\Elements\Doms\Icons\IconFolderShared;
use Websyspro\Elements\Doms\Icons\IconFolderSpecial;
use Websyspro\Elements\Doms\Icons\IconFolderSupervised;
use Websyspro\Elements\Doms\Icons\IconFolderZip;
use Websyspro\Elements\Doms\Icons\IconFollowTheSigns;
use Websyspro\Elements\Doms\Icons\IconFontDownload;
use Websyspro\Elements\Doms\Icons\IconFontDownloadOff;
use Websyspro\Elements\Doms\Icons\IconFoodBank;
use Websyspro\Elements\Doms\Icons\IconFootBones;
use Websyspro\Elements\Doms\Icons\IconFootprint;
use Websyspro\Elements\Doms\Icons\IconForest;
use Websyspro\Elements\Doms\Icons\IconForkLeft;
use Websyspro\Elements\Doms\Icons\IconForklift;
use Websyspro\Elements\Doms\Icons\IconForkRight;
use Websyspro\Elements\Doms\Icons\IconForkSpoon;
use Websyspro\Elements\Doms\Icons\IconFormatAlignCenter;
use Websyspro\Elements\Doms\Icons\IconFormatAlignJustify;
use Websyspro\Elements\Doms\Icons\IconFormatAlignLeft;
use Websyspro\Elements\Doms\Icons\IconFormatAlignRight;
use Websyspro\Elements\Doms\Icons\IconFormatBold;
use Websyspro\Elements\Doms\Icons\IconFormatClear;
use Websyspro\Elements\Doms\Icons\IconFormatColorFill;
use Websyspro\Elements\Doms\Icons\IconFormatColorReset;
use Websyspro\Elements\Doms\Icons\IconFormatColorText;
use Websyspro\Elements\Doms\Icons\IconFormatH1;
use Websyspro\Elements\Doms\Icons\IconFormatH2;
use Websyspro\Elements\Doms\Icons\IconFormatH3;
use Websyspro\Elements\Doms\Icons\IconFormatH4;
use Websyspro\Elements\Doms\Icons\IconFormatH5;
use Websyspro\Elements\Doms\Icons\IconFormatH6;
use Websyspro\Elements\Doms\Icons\IconFormatImageLeft;
use Websyspro\Elements\Doms\Icons\IconFormatImageRight;
use Websyspro\Elements\Doms\Icons\IconFormatIndentDecrease;
use Websyspro\Elements\Doms\Icons\IconFormatIndentIncrease;
use Websyspro\Elements\Doms\Icons\IconFormatInkHighlighter;
use Websyspro\Elements\Doms\Icons\IconFormatItalic;
use Websyspro\Elements\Doms\Icons\IconFormatLetterSpacing;
use Websyspro\Elements\Doms\Icons\IconFormatLetterSpacing2;
use Websyspro\Elements\Doms\Icons\IconFormatLetterSpacingStandard;
use Websyspro\Elements\Doms\Icons\IconFormatLetterSpacingWide;
use Websyspro\Elements\Doms\Icons\IconFormatLetterSpacingWider;
use Websyspro\Elements\Doms\Icons\IconFormatLineSpacing;
use Websyspro\Elements\Doms\Icons\IconFormatListBulleted;
use Websyspro\Elements\Doms\Icons\IconFormatListBulletedAdd;
use Websyspro\Elements\Doms\Icons\IconFormatListNumbered;
use Websyspro\Elements\Doms\Icons\IconFormatListNumberedRtl;
use Websyspro\Elements\Doms\Icons\IconFormatOverline;
use Websyspro\Elements\Doms\Icons\IconFormatPaint;
use Websyspro\Elements\Doms\Icons\IconFormatParagraph;
use Websyspro\Elements\Doms\Icons\IconFormatQuote;
use Websyspro\Elements\Doms\Icons\IconFormatQuoteOff;
use Websyspro\Elements\Doms\Icons\IconFormatShapes;
use Websyspro\Elements\Doms\Icons\IconFormatSize;
use Websyspro\Elements\Doms\Icons\IconFormatStrikethrough;
use Websyspro\Elements\Doms\Icons\IconFormatTextClip;
use Websyspro\Elements\Doms\Icons\IconFormatTextdirectionLToR;
use Websyspro\Elements\Doms\Icons\IconFormatTextdirectionRToL;
use Websyspro\Elements\Doms\Icons\IconFormatTextdirectionVertical;
use Websyspro\Elements\Doms\Icons\IconFormatTextOverflow;
use Websyspro\Elements\Doms\Icons\IconFormatTextWrap;
use Websyspro\Elements\Doms\Icons\IconFormatUnderlined;
use Websyspro\Elements\Doms\Icons\IconFormatUnderlinedSquiggle;
use Websyspro\Elements\Doms\Icons\IconFormsAddOn;
use Websyspro\Elements\Doms\Icons\IconFormsAppsScript;
use Websyspro\Elements\Doms\Icons\IconFort;
use Websyspro\Elements\Doms\Icons\IconForum;
use Websyspro\Elements\Doms\Icons\IconForward;
use Websyspro\Elements\Doms\Icons\IconForward10;
use Websyspro\Elements\Doms\Icons\IconForward30;
use Websyspro\Elements\Doms\Icons\IconForward5;
use Websyspro\Elements\Doms\Icons\IconForwardCircle;
use Websyspro\Elements\Doms\Icons\IconForwardMedia;
use Websyspro\Elements\Doms\Icons\IconForwardToInbox;
use Websyspro\Elements\Doms\Icons\IconForYou;
use Websyspro\Elements\Doms\Icons\IconFoundation;
use Websyspro\Elements\Doms\Icons\IconFrameInspect;
use Websyspro\Elements\Doms\Icons\IconFramePerson;
use Websyspro\Elements\Doms\Icons\IconFramePersonMic;
use Websyspro\Elements\Doms\Icons\IconFramePersonOff;
use Websyspro\Elements\Doms\Icons\IconFrameReload;
use Websyspro\Elements\Doms\Icons\IconFrameSource;
use Websyspro\Elements\Doms\Icons\IconFreeCancellation;
use Websyspro\Elements\Doms\Icons\IconFrontHand;
use Websyspro\Elements\Doms\Icons\IconFrontLoader;
use Websyspro\Elements\Doms\Icons\IconFullCoverage;
use Websyspro\Elements\Doms\Icons\IconFullHd;
use Websyspro\Elements\Doms\Icons\IconFullscreen;
use Websyspro\Elements\Doms\Icons\IconFullscreenExit;
use Websyspro\Elements\Doms\Icons\IconFullscreenPortrait;
use Websyspro\Elements\Doms\Icons\IconFullStackedBarChart;
use Websyspro\Elements\Doms\Icons\IconFunction;
use Websyspro\Elements\Doms\Icons\IconFunctions;
use Websyspro\Elements\Doms\Icons\IconFunicular;
use Websyspro\Elements\Doms\Icons\IconGalleryThumbnail;
use Websyspro\Elements\Doms\Icons\IconGamepad;
use Websyspro\Elements\Doms\Icons\IconGarage;
use Websyspro\Elements\Doms\Icons\IconGarageDoor;
use Websyspro\Elements\Doms\Icons\IconGarageHome;
use Websyspro\Elements\Doms\Icons\IconGardenCart;
use Websyspro\Elements\Doms\Icons\IconGasMeter;
use Websyspro\Elements\Doms\Icons\IconGastroenterology;
use Websyspro\Elements\Doms\Icons\IconGate;
use Websyspro\Elements\Doms\Icons\IconGavel;
use Websyspro\Elements\Doms\Icons\IconGeneralDevice;
use Websyspro\Elements\Doms\Icons\IconGenetics;
use Websyspro\Elements\Doms\Icons\IconGenres;
use Websyspro\Elements\Doms\Icons\IconGesture;
use Websyspro\Elements\Doms\Icons\IconGestureSelect;
use Websyspro\Elements\Doms\Icons\IconGif;
use Websyspro\Elements\Doms\Icons\IconGif2;
use Websyspro\Elements\Doms\Icons\IconGifBox;
use Websyspro\Elements\Doms\Icons\IconGirl;
use Websyspro\Elements\Doms\Icons\IconGite;
use Websyspro\Elements\Doms\Icons\IconGlassCup;
use Websyspro\Elements\Doms\Icons\IconGlobe;
use Websyspro\Elements\Doms\Icons\IconGlobeAsia;
use Websyspro\Elements\Doms\Icons\IconGlobeBook;
use Websyspro\Elements\Doms\Icons\IconGlobeUk;
use Websyspro\Elements\Doms\Icons\IconGlucose;
use Websyspro\Elements\Doms\Icons\IconGlyphs;
use Websyspro\Elements\Doms\Icons\IconGMobiledata;
use Websyspro\Elements\Doms\Icons\IconGMobiledataBadge;
use Websyspro\Elements\Doms\Icons\IconGolfCourse;
use Websyspro\Elements\Doms\Icons\IconGondolaLift;
use Websyspro\Elements\Doms\Icons\IconGoogleHomeDevices;
use Websyspro\Elements\Doms\Icons\IconGoogleTvRemote;
use Websyspro\Elements\Doms\Icons\IconGoogleWifi;
use Websyspro\Elements\Doms\Icons\IconGoToLine;
use Websyspro\Elements\Doms\Icons\IconGppBad;
use Websyspro\Elements\Doms\Icons\IconGppMaybe;
use Websyspro\Elements\Doms\Icons\IconGradient;
use Websyspro\Elements\Doms\Icons\IconGrading;
use Websyspro\Elements\Doms\Icons\IconGrain;
use Websyspro\Elements\Doms\Icons\IconGraph1;
use Websyspro\Elements\Doms\Icons\IconGraph2;
use Websyspro\Elements\Doms\Icons\IconGraph3;
use Websyspro\Elements\Doms\Icons\IconGraph4;
use Websyspro\Elements\Doms\Icons\IconGraph5;
use Websyspro\Elements\Doms\Icons\IconGraph6;
use Websyspro\Elements\Doms\Icons\IconGraphicEq;
use Websyspro\Elements\Doms\Icons\IconGrass;
use Websyspro\Elements\Doms\Icons\IconGrid3x3;
use Websyspro\Elements\Doms\Icons\IconGrid3x3Off;
use Websyspro\Elements\Doms\Icons\IconGrid4x4;
use Websyspro\Elements\Doms\Icons\IconGridGoldenratio;
use Websyspro\Elements\Doms\Icons\IconGridGuides;
use Websyspro\Elements\Doms\Icons\IconGridOff;
use Websyspro\Elements\Doms\Icons\IconGridOn;
use Websyspro\Elements\Doms\Icons\IconGridView;
use Websyspro\Elements\Doms\Icons\IconGrocery;
use Websyspro\Elements\Doms\Icons\IconGroup;
use Websyspro\Elements\Doms\Icons\IconGroupAdd;
use Websyspro\Elements\Doms\Icons\IconGroupedBarChart;
use Websyspro\Elements\Doms\Icons\IconGroupOff;
use Websyspro\Elements\Doms\Icons\IconGroupRemove;
use Websyspro\Elements\Doms\Icons\IconGroups;
use Websyspro\Elements\Doms\Icons\IconGroups2;
use Websyspro\Elements\Doms\Icons\IconGroups3;
use Websyspro\Elements\Doms\Icons\IconGroupSearch;
use Websyspro\Elements\Doms\Icons\IconGroupWork;
use Websyspro\Elements\Doms\Icons\IconGTranslate;
use Websyspro\Elements\Doms\Icons\IconGuardian;
use Websyspro\Elements\Doms\Icons\IconGynecology;
use Websyspro\Elements\Doms\Icons\IconHail;
use Websyspro\Elements\Doms\Icons\IconHallway;
use Websyspro\Elements\Doms\Icons\IconHandBones;
use Websyspro\Elements\Doms\Icons\IconHandGesture;
use Websyspro\Elements\Doms\Icons\IconHandGestureOff;
use Websyspro\Elements\Doms\Icons\IconHandheldController;
use Websyspro\Elements\Doms\Icons\IconHandshake;
use Websyspro\Elements\Doms\Icons\IconHandyman;
use Websyspro\Elements\Doms\Icons\IconHangoutVideo;
use Websyspro\Elements\Doms\Icons\IconHangoutVideoOff;
use Websyspro\Elements\Doms\Icons\IconHardDisk;
use Websyspro\Elements\Doms\Icons\IconHardDrive;
use Websyspro\Elements\Doms\Icons\IconHardDrive2;
use Websyspro\Elements\Doms\Icons\IconHardware;
use Websyspro\Elements\Doms\Icons\IconHd;
use Websyspro\Elements\Doms\Icons\IconHdrAuto;
use Websyspro\Elements\Doms\Icons\IconHdrAutoSelect;
use Websyspro\Elements\Doms\Icons\IconHdrEnhancedSelect;
use Websyspro\Elements\Doms\Icons\IconHdrOff;
use Websyspro\Elements\Doms\Icons\IconHdrOffSelect;
use Websyspro\Elements\Doms\Icons\IconHdrOn;
use Websyspro\Elements\Doms\Icons\IconHdrOnSelect;
use Websyspro\Elements\Doms\Icons\IconHdrPlus;
use Websyspro\Elements\Doms\Icons\IconHdrPlusOff;
use Websyspro\Elements\Doms\Icons\IconHdrStrong;
use Websyspro\Elements\Doms\Icons\IconHdrWeak;
use Websyspro\Elements\Doms\Icons\IconHeadMountedDevice;
use Websyspro\Elements\Doms\Icons\IconHeadphones;
use Websyspro\Elements\Doms\Icons\IconHeadphonesBattery;
use Websyspro\Elements\Doms\Icons\IconHeadsetMic;
use Websyspro\Elements\Doms\Icons\IconHeadsetOff;
use Websyspro\Elements\Doms\Icons\IconHealing;
use Websyspro\Elements\Doms\Icons\IconHealthAndBeauty;
use Websyspro\Elements\Doms\Icons\IconHealthAndSafety;
use Websyspro\Elements\Doms\Icons\IconHealthMetrics;
use Websyspro\Elements\Doms\Icons\IconHeapSnapshotLarge;
use Websyspro\Elements\Doms\Icons\IconHeapSnapshotMultiple;
use Websyspro\Elements\Doms\Icons\IconHeapSnapshotThumbnail;
use Websyspro\Elements\Doms\Icons\IconHearing;
use Websyspro\Elements\Doms\Icons\IconHearingAid;
use Websyspro\Elements\Doms\Icons\IconHearingAidDisabled;
use Websyspro\Elements\Doms\Icons\IconHearingDisabled;
use Websyspro\Elements\Doms\Icons\IconHeartBroken;
use Websyspro\Elements\Doms\Icons\IconHeartCheck;
use Websyspro\Elements\Doms\Icons\IconHeartMinus;
use Websyspro\Elements\Doms\Icons\IconHeartPlus;
use Websyspro\Elements\Doms\Icons\IconHeat;
use Websyspro\Elements\Doms\Icons\IconHeatPump;
use Websyspro\Elements\Doms\Icons\IconHeatPumpBalance;
use Websyspro\Elements\Doms\Icons\IconHeight;
use Websyspro\Elements\Doms\Icons\IconHelicopter;
use Websyspro\Elements\Doms\Icons\IconHelp;
use Websyspro\Elements\Doms\Icons\IconHelpCenter;
use Websyspro\Elements\Doms\Icons\IconHelpClinic;
use Websyspro\Elements\Doms\Icons\IconHematology;
use Websyspro\Elements\Doms\Icons\IconHevc;
use Websyspro\Elements\Doms\Icons\IconHexagon;
use Websyspro\Elements\Doms\Icons\IconHide;
use Websyspro\Elements\Doms\Icons\IconHideImage;
use Websyspro\Elements\Doms\Icons\IconHideSource;
use Websyspro\Elements\Doms\Icons\IconHighDensity;
use Websyspro\Elements\Doms\Icons\IconHighlight;
use Websyspro\Elements\Doms\Icons\IconHighlighterSize1;
use Websyspro\Elements\Doms\Icons\IconHighlighterSize2;
use Websyspro\Elements\Doms\Icons\IconHighlighterSize3;
use Websyspro\Elements\Doms\Icons\IconHighlighterSize4;
use Websyspro\Elements\Doms\Icons\IconHighlighterSize5;
use Websyspro\Elements\Doms\Icons\IconHighlightKeyboardFocus;
use Websyspro\Elements\Doms\Icons\IconHighlightMouseCursor;
use Websyspro\Elements\Doms\Icons\IconHighlightTextCursor;
use Websyspro\Elements\Doms\Icons\IconHighQuality;
use Websyspro\Elements\Doms\Icons\IconHighRes;
use Websyspro\Elements\Doms\Icons\IconHiking;
use Websyspro\Elements\Doms\Icons\IconHistory;
use Websyspro\Elements\Doms\Icons\IconHistory2;
use Websyspro\Elements\Doms\Icons\IconHistoryEdu;
use Websyspro\Elements\Doms\Icons\IconHistoryOff;
use Websyspro\Elements\Doms\Icons\IconHistoryToggleOff;
use Websyspro\Elements\Doms\Icons\IconHive;
use Websyspro\Elements\Doms\Icons\IconHls;
use Websyspro\Elements\Doms\Icons\IconHlsOff;
use Websyspro\Elements\Doms\Icons\IconHMobiledata;
use Websyspro\Elements\Doms\Icons\IconHMobiledataBadge;
use Websyspro\Elements\Doms\Icons\IconHolidayVillage;
use Websyspro\Elements\Doms\Icons\IconHome;
use Websyspro\Elements\Doms\Icons\IconHomeAndGarden;
use Websyspro\Elements\Doms\Icons\IconHomeAppLogo;
use Websyspro\Elements\Doms\Icons\IconHomeHealth;
use Websyspro\Elements\Doms\Icons\IconHomeImprovementAndTools;
use Websyspro\Elements\Doms\Icons\IconHomeIotDevice;
use Websyspro\Elements\Doms\Icons\IconHomeMax;
use Websyspro\Elements\Doms\Icons\IconHomeMaxDots;
use Websyspro\Elements\Doms\Icons\IconHomeMini;
use Websyspro\Elements\Doms\Icons\IconHomePin;
use Websyspro\Elements\Doms\Icons\IconHomeRepairService;
use Websyspro\Elements\Doms\Icons\IconHomeSpeaker;
use Websyspro\Elements\Doms\Icons\IconHomeStorage;
use Websyspro\Elements\Doms\Icons\IconHomeWork;
use Websyspro\Elements\Doms\Icons\IconHorizontalDistribute;
use Websyspro\Elements\Doms\Icons\IconHorizontalRule;
use Websyspro\Elements\Doms\Icons\IconHorizontalSplit;
use Websyspro\Elements\Doms\Icons\IconHost;
use Websyspro\Elements\Doms\Icons\IconHotel;
use Websyspro\Elements\Doms\Icons\IconHotelClass;
use Websyspro\Elements\Doms\Icons\IconHotTub;
use Websyspro\Elements\Doms\Icons\IconHourglass;
use Websyspro\Elements\Doms\Icons\IconHourglassArrowDown;
use Websyspro\Elements\Doms\Icons\IconHourglassArrowUp;
use Websyspro\Elements\Doms\Icons\IconHourglassBottom;
use Websyspro\Elements\Doms\Icons\IconHourglassDisabled;
use Websyspro\Elements\Doms\Icons\IconHourglassEmpty;
use Websyspro\Elements\Doms\Icons\IconHourglassPause;
use Websyspro\Elements\Doms\Icons\IconHourglassTop;
use Websyspro\Elements\Doms\Icons\IconHouse;
use Websyspro\Elements\Doms\Icons\IconHouseboat;
use Websyspro\Elements\Doms\Icons\IconHouseholdSupplies;
use Websyspro\Elements\Doms\Icons\IconHouseSiding;
use Websyspro\Elements\Doms\Icons\IconHouseWithShield;
use Websyspro\Elements\Doms\Icons\IconHov;
use Websyspro\Elements\Doms\Icons\IconHowToReg;
use Websyspro\Elements\Doms\Icons\IconHowToVote;
use Websyspro\Elements\Doms\Icons\IconHPlusMobiledata;
use Websyspro\Elements\Doms\Icons\IconHPlusMobiledataBadge;
use Websyspro\Elements\Doms\Icons\IconHrResting;
use Websyspro\Elements\Doms\Icons\IconHtml;
use Websyspro\Elements\Doms\Icons\IconHttp;
use Websyspro\Elements\Doms\Icons\IconHub;
use Websyspro\Elements\Doms\Icons\IconHumerus;
use Websyspro\Elements\Doms\Icons\IconHumerusAlt;
use Websyspro\Elements\Doms\Icons\IconHumidityHigh;
use Websyspro\Elements\Doms\Icons\IconHumidityIndoor;
use Websyspro\Elements\Doms\Icons\IconHumidityLow;
use Websyspro\Elements\Doms\Icons\IconHumidityMid;
use Websyspro\Elements\Doms\Icons\IconHumidityPercentage;
use Websyspro\Elements\Doms\Icons\IconHvac;
use Websyspro\Elements\Doms\Icons\IconIcecream;
use Websyspro\Elements\Doms\Icons\IconIceSkating;
use Websyspro\Elements\Doms\Icons\IconIdCard;
use Websyspro\Elements\Doms\Icons\IconIdentityAwareProxy;
use Websyspro\Elements\Doms\Icons\IconIdentityPlatform;
use Websyspro\Elements\Doms\Icons\IconIfl;
use Websyspro\Elements\Doms\Icons\IconIframe;
use Websyspro\Elements\Doms\Icons\IconIframeOff;
use Websyspro\Elements\Doms\Icons\IconImage;
use Websyspro\Elements\Doms\Icons\IconImageAspectRatio;
use Websyspro\Elements\Doms\Icons\IconImageSearch;
use Websyspro\Elements\Doms\Icons\IconImagesearchRoller;
use Websyspro\Elements\Doms\Icons\IconImagesmode;
use Websyspro\Elements\Doms\Icons\IconImmunology;
use Websyspro\Elements\Doms\Icons\IconImportantDevices;
use Websyspro\Elements\Doms\Icons\IconImportContacts;
use Websyspro\Elements\Doms\Icons\IconInactiveOrder;
use Websyspro\Elements\Doms\Icons\IconInbox;
use Websyspro\Elements\Doms\Icons\IconInboxCustomize;
use Websyspro\Elements\Doms\Icons\IconInboxText;
use Websyspro\Elements\Doms\Icons\IconIncompleteCircle;
use Websyspro\Elements\Doms\Icons\IconIndeterminateCheckBox;
use Websyspro\Elements\Doms\Icons\IconIndeterminateQuestionBox;
use Websyspro\Elements\Doms\Icons\IconInfo;
use Websyspro\Elements\Doms\Icons\IconInfoI;
use Websyspro\Elements\Doms\Icons\IconInfrared;
use Websyspro\Elements\Doms\Icons\IconInHomeMode;
use Websyspro\Elements\Doms\Icons\IconInkEraser;
use Websyspro\Elements\Doms\Icons\IconInkEraserOff;
use Websyspro\Elements\Doms\Icons\IconInkHighlighter;
use Websyspro\Elements\Doms\Icons\IconInkHighlighterMove;
use Websyspro\Elements\Doms\Icons\IconInkMarker;
use Websyspro\Elements\Doms\Icons\IconInkPen;
use Websyspro\Elements\Doms\Icons\IconInkSelection;
use Websyspro\Elements\Doms\Icons\IconInpatient;
use Websyspro\Elements\Doms\Icons\IconInput;
use Websyspro\Elements\Doms\Icons\IconInputCircle;
use Websyspro\Elements\Doms\Icons\IconInsertChart;
use Websyspro\Elements\Doms\Icons\IconInsertPageBreak;
use Websyspro\Elements\Doms\Icons\IconInsertText;
use Websyspro\Elements\Doms\Icons\IconInstallDesktop;
use Websyspro\Elements\Doms\Icons\IconInstallMobile;
use Websyspro\Elements\Doms\Icons\IconInstantMix;
use Websyspro\Elements\Doms\Icons\IconIntegrationInstructions;
use Websyspro\Elements\Doms\Icons\IconInteractiveSpace;
use Websyspro\Elements\Doms\Icons\IconInterests;
use Websyspro\Elements\Doms\Icons\IconInterpreterMode;
use Websyspro\Elements\Doms\Icons\IconInventory;
use Websyspro\Elements\Doms\Icons\IconInventory2;
use Websyspro\Elements\Doms\Icons\IconInvertColors;
use Websyspro\Elements\Doms\Icons\IconInvertColorsOff;
use Websyspro\Elements\Doms\Icons\IconIos;
use Websyspro\Elements\Doms\Icons\IconIosShare;
use Websyspro\Elements\Doms\Icons\IconIron;
use Websyspro\Elements\Doms\Icons\IconJamboardKiosk;
use Websyspro\Elements\Doms\Icons\IconJavascript;
use Websyspro\Elements\Doms\Icons\IconJoin;
use Websyspro\Elements\Doms\Icons\IconJoinInner;
use Websyspro\Elements\Doms\Icons\IconJoinLeft;
use Websyspro\Elements\Doms\Icons\IconJoinRight;
use Websyspro\Elements\Doms\Icons\IconJoystick;
use Websyspro\Elements\Doms\Icons\IconJumpToElement;
use Websyspro\Elements\Doms\Icons\IconKayaking;
use Websyspro\Elements\Doms\Icons\IconKebabDining;
use Websyspro\Elements\Doms\Icons\IconKeep;
use Websyspro\Elements\Doms\Icons\IconKeepOff;
use Websyspro\Elements\Doms\Icons\IconKeepPublic;
use Websyspro\Elements\Doms\Icons\IconKettle;
use Websyspro\Elements\Doms\Icons\IconKey;
use Websyspro\Elements\Doms\Icons\IconKeyboard;
use Websyspro\Elements\Doms\Icons\IconKeyboardAlt;
use Websyspro\Elements\Doms\Icons\IconKeyboardArrowDown;
use Websyspro\Elements\Doms\Icons\IconKeyboardArrowLeft;
use Websyspro\Elements\Doms\Icons\IconKeyboardArrowRight;
use Websyspro\Elements\Doms\Icons\IconKeyboardArrowUp;
use Websyspro\Elements\Doms\Icons\IconKeyboardBackspace;
use Websyspro\Elements\Doms\Icons\IconKeyboardCapslock;
use Websyspro\Elements\Doms\Icons\IconKeyboardCapslockBadge;
use Websyspro\Elements\Doms\Icons\IconKeyboardCommandKey;
use Websyspro\Elements\Doms\Icons\IconKeyboardControlKey;
use Websyspro\Elements\Doms\Icons\IconKeyboardDoubleArrowDown;
use Websyspro\Elements\Doms\Icons\IconKeyboardDoubleArrowLeft;
use Websyspro\Elements\Doms\Icons\IconKeyboardDoubleArrowRight;
use Websyspro\Elements\Doms\Icons\IconKeyboardDoubleArrowUp;
use Websyspro\Elements\Doms\Icons\IconKeyboardExternalInput;
use Websyspro\Elements\Doms\Icons\IconKeyboardFull;
use Websyspro\Elements\Doms\Icons\IconKeyboardHide;
use Websyspro\Elements\Doms\Icons\IconKeyboardKeys;
use Websyspro\Elements\Doms\Icons\IconKeyboardLock;
use Websyspro\Elements\Doms\Icons\IconKeyboardLockOff;
use Websyspro\Elements\Doms\Icons\IconKeyboardOff;
use Websyspro\Elements\Doms\Icons\IconKeyboardOnscreen;
use Websyspro\Elements\Doms\Icons\IconKeyboardOptionKey;
use Websyspro\Elements\Doms\Icons\IconKeyboardPreviousLanguage;
use Websyspro\Elements\Doms\Icons\IconKeyboardReturn;
use Websyspro\Elements\Doms\Icons\IconKeyboardTab;
use Websyspro\Elements\Doms\Icons\IconKeyboardTabRtl;
use Websyspro\Elements\Doms\Icons\IconKeyOff;
use Websyspro\Elements\Doms\Icons\IconKeyVertical;
use Websyspro\Elements\Doms\Icons\IconKeyVisualizer;
use Websyspro\Elements\Doms\Icons\IconKidStar;
use Websyspro\Elements\Doms\Icons\IconKingBed;
use Websyspro\Elements\Doms\Icons\IconKitchen;
use Websyspro\Elements\Doms\Icons\IconKitesurfing;
use Websyspro\Elements\Doms\Icons\IconLabel;
use Websyspro\Elements\Doms\Icons\IconLabelImportant;
use Websyspro\Elements\Doms\Icons\IconLabelOff;
use Websyspro\Elements\Doms\Icons\IconLabPanel;
use Websyspro\Elements\Doms\Icons\IconLabProfile;
use Websyspro\Elements\Doms\Icons\IconLabResearch;
use Websyspro\Elements\Doms\Icons\IconLabs;
use Websyspro\Elements\Doms\Icons\IconLan;
use Websyspro\Elements\Doms\Icons\IconLandscape;
use Websyspro\Elements\Doms\Icons\IconLandscape2;
use Websyspro\Elements\Doms\Icons\IconLandscape2Off;
use Websyspro\Elements\Doms\Icons\IconLandslide;
use Websyspro\Elements\Doms\Icons\IconLanguage;
use Websyspro\Elements\Doms\Icons\IconLanguageChineseArray;
use Websyspro\Elements\Doms\Icons\IconLanguageChineseCangjie;
use Websyspro\Elements\Doms\Icons\IconLanguageChineseDayi;
use Websyspro\Elements\Doms\Icons\IconLanguageChinesePinyin;
use Websyspro\Elements\Doms\Icons\IconLanguageChineseQuick;
use Websyspro\Elements\Doms\Icons\IconLanguageChineseWubi;
use Websyspro\Elements\Doms\Icons\IconLanguageFrench;
use Websyspro\Elements\Doms\Icons\IconLanguageGbEnglish;
use Websyspro\Elements\Doms\Icons\IconLanguageInternational;
use Websyspro\Elements\Doms\Icons\IconLanguageJapaneseKana;
use Websyspro\Elements\Doms\Icons\IconLanguageKoreanLatin;
use Websyspro\Elements\Doms\Icons\IconLanguagePinyin;
use Websyspro\Elements\Doms\Icons\IconLanguageSpanish;
use Websyspro\Elements\Doms\Icons\IconLanguageUs;
use Websyspro\Elements\Doms\Icons\IconLanguageUsColemak;
use Websyspro\Elements\Doms\Icons\IconLanguageUsDvorak;
use Websyspro\Elements\Doms\Icons\IconLaps;
use Websyspro\Elements\Doms\Icons\IconLaptopCar;
use Websyspro\Elements\Doms\Icons\IconLaptopChromebook;
use Websyspro\Elements\Doms\Icons\IconLaptopMac;
use Websyspro\Elements\Doms\Icons\IconLaptopWindows;
use Websyspro\Elements\Doms\Icons\IconLassoSelect;
use Websyspro\Elements\Doms\Icons\IconLastPage;
use Websyspro\Elements\Doms\Icons\IconLaundry;
use Websyspro\Elements\Doms\Icons\IconLayers;
use Websyspro\Elements\Doms\Icons\IconLayersClear;
use Websyspro\Elements\Doms\Icons\IconLda;
use Websyspro\Elements\Doms\Icons\IconLeaderboard;
use Websyspro\Elements\Doms\Icons\IconLeakAdd;
use Websyspro\Elements\Doms\Icons\IconLeakRemove;
use Websyspro\Elements\Doms\Icons\IconLeftClick;
use Websyspro\Elements\Doms\Icons\IconLeftPanelClose;
use Websyspro\Elements\Doms\Icons\IconLeftPanelOpen;
use Websyspro\Elements\Doms\Icons\IconLegendToggle;
use Websyspro\Elements\Doms\Icons\IconLensBlur;
use Websyspro\Elements\Doms\Icons\IconLetterSwitch;
use Websyspro\Elements\Doms\Icons\IconLibraryAdd;
use Websyspro\Elements\Doms\Icons\IconLibraryAddCheck;
use Websyspro\Elements\Doms\Icons\IconLibraryBooks;
use Websyspro\Elements\Doms\Icons\IconLibraryMusic;
use Websyspro\Elements\Doms\Icons\IconLicense;
use Websyspro\Elements\Doms\Icons\IconLiftToTalk;
use Websyspro\Elements\Doms\Icons\IconLight;
use Websyspro\Elements\Doms\Icons\IconLightbulb;
use Websyspro\Elements\Doms\Icons\IconLightbulb2;
use Websyspro\Elements\Doms\Icons\IconLightbulbCircle;
use Websyspro\Elements\Doms\Icons\IconLightGroup;
use Websyspro\Elements\Doms\Icons\IconLightMode;
use Websyspro\Elements\Doms\Icons\IconLightningStand;
use Websyspro\Elements\Doms\Icons\IconLightOff;
use Websyspro\Elements\Doms\Icons\IconLinearScale;
use Websyspro\Elements\Doms\Icons\IconLineAxis;
use Websyspro\Elements\Doms\Icons\IconLineCurve;
use Websyspro\Elements\Doms\Icons\IconLineEnd;
use Websyspro\Elements\Doms\Icons\IconLineEndArrow;
use Websyspro\Elements\Doms\Icons\IconLineEndArrowNotch;
use Websyspro\Elements\Doms\Icons\IconLineEndCircle;
use Websyspro\Elements\Doms\Icons\IconLineEndDiamond;
use Websyspro\Elements\Doms\Icons\IconLineEndSquare;
use Websyspro\Elements\Doms\Icons\IconLineStart;
use Websyspro\Elements\Doms\Icons\IconLineStartArrow;
use Websyspro\Elements\Doms\Icons\IconLineStartArrowNotch;
use Websyspro\Elements\Doms\Icons\IconLineStartCircle;
use Websyspro\Elements\Doms\Icons\IconLineStartDiamond;
use Websyspro\Elements\Doms\Icons\IconLineStartSquare;
use Websyspro\Elements\Doms\Icons\IconLineStyle;
use Websyspro\Elements\Doms\Icons\IconLineWeight;
use Websyspro\Elements\Doms\Icons\IconLink;
use Websyspro\Elements\Doms\Icons\IconLinkedCamera;
use Websyspro\Elements\Doms\Icons\IconLinkedServices;
use Websyspro\Elements\Doms\Icons\IconLinkOff;
use Websyspro\Elements\Doms\Icons\IconLiquor;
use Websyspro\Elements\Doms\Icons\IconList;
use Websyspro\Elements\Doms\Icons\IconListAlt;
use Websyspro\Elements\Doms\Icons\IconListAltAdd;
use Websyspro\Elements\Doms\Icons\IconListAltCheck;
use Websyspro\Elements\Doms\Icons\IconLists;
use Websyspro\Elements\Doms\Icons\IconLiveHelp;
use Websyspro\Elements\Doms\Icons\IconLiveTv;
use Websyspro\Elements\Doms\Icons\IconLiving;
use Websyspro\Elements\Doms\Icons\IconLocalActivity;
use Websyspro\Elements\Doms\Icons\IconLocalAtm;
use Websyspro\Elements\Doms\Icons\IconLocalBar;
use Websyspro\Elements\Doms\Icons\IconLocalCafe;
use Websyspro\Elements\Doms\Icons\IconLocalCarWash;
use Websyspro\Elements\Doms\Icons\IconLocalConvenienceStore;
use Websyspro\Elements\Doms\Icons\IconLocalDining;
use Websyspro\Elements\Doms\Icons\IconLocalDrink;
use Websyspro\Elements\Doms\Icons\IconLocalFireDepartment;
use Websyspro\Elements\Doms\Icons\IconLocalFlorist;
use Websyspro\Elements\Doms\Icons\IconLocalGasStation;
use Websyspro\Elements\Doms\Icons\IconLocalHospital;
use Websyspro\Elements\Doms\Icons\IconLocalLaundryService;
use Websyspro\Elements\Doms\Icons\IconLocalLibrary;
use Websyspro\Elements\Doms\Icons\IconLocalMall;
use Websyspro\Elements\Doms\Icons\IconLocalParking;
use Websyspro\Elements\Doms\Icons\IconLocalPharmacy;
use Websyspro\Elements\Doms\Icons\IconLocalPizza;
use Websyspro\Elements\Doms\Icons\IconLocalPolice;
use Websyspro\Elements\Doms\Icons\IconLocalPostOffice;
use Websyspro\Elements\Doms\Icons\IconLocalSee;
use Websyspro\Elements\Doms\Icons\IconLocalShipping;
use Websyspro\Elements\Doms\Icons\IconLocalTaxi;
use Websyspro\Elements\Doms\Icons\IconLocationAway;
use Websyspro\Elements\Doms\Icons\IconLocationChip;
use Websyspro\Elements\Doms\Icons\IconLocationCity;
use Websyspro\Elements\Doms\Icons\IconLocationDisabled;
use Websyspro\Elements\Doms\Icons\IconLocationHome;
use Websyspro\Elements\Doms\Icons\IconLocationOff;
use Websyspro\Elements\Doms\Icons\IconLocationOn;
use Websyspro\Elements\Doms\Icons\IconLocationSearching;
use Websyspro\Elements\Doms\Icons\IconLock;
use Websyspro\Elements\Doms\Icons\IconLockClock;
use Websyspro\Elements\Doms\Icons\IconLockOpen;
use Websyspro\Elements\Doms\Icons\IconLockOpenRight;
use Websyspro\Elements\Doms\Icons\IconLockPerson;
use Websyspro\Elements\Doms\Icons\IconLockReset;
use Websyspro\Elements\Doms\Icons\IconLogin;
use Websyspro\Elements\Doms\Icons\IconLogoDev;
use Websyspro\Elements\Doms\Icons\IconLogout;
use Websyspro\Elements\Doms\Icons\IconLooks;
use Websyspro\Elements\Doms\Icons\IconLooks3;
use Websyspro\Elements\Doms\Icons\IconLooks4;
use Websyspro\Elements\Doms\Icons\IconLooks5;
use Websyspro\Elements\Doms\Icons\IconLooks6;
use Websyspro\Elements\Doms\Icons\IconLooksOne;
use Websyspro\Elements\Doms\Icons\IconLooksTwo;
use Websyspro\Elements\Doms\Icons\IconLoupe;
use Websyspro\Elements\Doms\Icons\IconLowDensity;
use Websyspro\Elements\Doms\Icons\IconLowercase;
use Websyspro\Elements\Doms\Icons\IconLowPriority;
use Websyspro\Elements\Doms\Icons\IconLoyalty;
use Websyspro\Elements\Doms\Icons\IconLteMobiledata;
use Websyspro\Elements\Doms\Icons\IconLteMobiledataBadge;
use Websyspro\Elements\Doms\Icons\IconLtePlusMobiledata;
use Websyspro\Elements\Doms\Icons\IconLtePlusMobiledataBadge;
use Websyspro\Elements\Doms\Icons\IconLuggage;
use Websyspro\Elements\Doms\Icons\IconLunchDining;
use Websyspro\Elements\Doms\Icons\IconLyrics;
use Websyspro\Elements\Doms\Icons\IconMacroAuto;
use Websyspro\Elements\Doms\Icons\IconMacroOff;
use Websyspro\Elements\Doms\Icons\IconMagnificationLarge;
use Websyspro\Elements\Doms\Icons\IconMagnificationSmall;
use Websyspro\Elements\Doms\Icons\IconMagnifyDocked;
use Websyspro\Elements\Doms\Icons\IconMagnifyFullscreen;
use Websyspro\Elements\Doms\Icons\IconMail;
use Websyspro\Elements\Doms\Icons\IconMailLock;
use Websyspro\Elements\Doms\Icons\IconMailOff;
use Websyspro\Elements\Doms\Icons\IconMale;
use Websyspro\Elements\Doms\Icons\IconMan;
use Websyspro\Elements\Doms\Icons\IconMan2;
use Websyspro\Elements\Doms\Icons\IconMan3;
use Websyspro\Elements\Doms\Icons\IconMan4;
use Websyspro\Elements\Doms\Icons\IconManageAccounts;
use Websyspro\Elements\Doms\Icons\IconManageHistory;
use Websyspro\Elements\Doms\Icons\IconManageSearch;
use Websyspro\Elements\Doms\Icons\IconManga;
use Websyspro\Elements\Doms\Icons\IconManufacturing;
use Websyspro\Elements\Doms\Icons\IconMap;
use Websyspro\Elements\Doms\Icons\IconMapSearch;
use Websyspro\Elements\Doms\Icons\IconMapsUgc;
use Websyspro\Elements\Doms\Icons\IconMargin;
use Websyspro\Elements\Doms\Icons\IconMarkAsUnread;
use Websyspro\Elements\Doms\Icons\IconMarkChatRead;
use Websyspro\Elements\Doms\Icons\IconMarkChatUnread;
use Websyspro\Elements\Doms\Icons\IconMarkdown;
use Websyspro\Elements\Doms\Icons\IconMarkdownCopy;
use Websyspro\Elements\Doms\Icons\IconMarkdownPaste;
use Websyspro\Elements\Doms\Icons\IconMarkEmailRead;
use Websyspro\Elements\Doms\Icons\IconMarkEmailUnread;
use Websyspro\Elements\Doms\Icons\IconMarkUnreadChatAlt;
use Websyspro\Elements\Doms\Icons\IconMarkunreadMailbox;
use Websyspro\Elements\Doms\Icons\IconMaskedTransitions;
use Websyspro\Elements\Doms\Icons\IconMaskedTransitionsAdd;
use Websyspro\Elements\Doms\Icons\IconMasks;
use Websyspro\Elements\Doms\Icons\IconMatchCase;
use Websyspro\Elements\Doms\Icons\IconMatchCaseOff;
use Websyspro\Elements\Doms\Icons\IconMatchWord;
use Websyspro\Elements\Doms\Icons\IconMatter;
use Websyspro\Elements\Doms\Icons\IconMaximize;
use Websyspro\Elements\Doms\Icons\IconMeasuringTape;
use Websyspro\Elements\Doms\Icons\IconMediaBluetoothOff;
use Websyspro\Elements\Doms\Icons\IconMediaBluetoothOn;
use Websyspro\Elements\Doms\Icons\IconMediaLink;
use Websyspro\Elements\Doms\Icons\IconMediaOutput;
use Websyspro\Elements\Doms\Icons\IconMediaOutputOff;
use Websyspro\Elements\Doms\Icons\IconMediation;
use Websyspro\Elements\Doms\Icons\IconMedicalInformation;
use Websyspro\Elements\Doms\Icons\IconMedicalMask;
use Websyspro\Elements\Doms\Icons\IconMedicalServices;
use Websyspro\Elements\Doms\Icons\IconMedication;
use Websyspro\Elements\Doms\Icons\IconMedicationLiquid;
use Websyspro\Elements\Doms\Icons\IconMeetingRoom;
use Websyspro\Elements\Doms\Icons\IconMemory;
use Websyspro\Elements\Doms\Icons\IconMemoryAlt;
use Websyspro\Elements\Doms\Icons\IconMenstrualHealth;
use Websyspro\Elements\Doms\Icons\IconMenu;
use Websyspro\Elements\Doms\Icons\IconMenuBook;
use Websyspro\Elements\Doms\Icons\IconMenuOpen;
use Websyspro\Elements\Doms\Icons\IconMerge;
use Websyspro\Elements\Doms\Icons\IconMergeType;
use Websyspro\Elements\Doms\Icons\IconMetabolism;
use Websyspro\Elements\Doms\Icons\IconMetro;
use Websyspro\Elements\Doms\Icons\IconMfgNestYaleLock;
use Websyspro\Elements\Doms\Icons\IconMic;
use Websyspro\Elements\Doms\Icons\IconMicAlert;
use Websyspro\Elements\Doms\Icons\IconMicDouble;
use Websyspro\Elements\Doms\Icons\IconMicExternalOff;
use Websyspro\Elements\Doms\Icons\IconMicExternalOn;
use Websyspro\Elements\Doms\Icons\IconMicOff;
use Websyspro\Elements\Doms\Icons\IconMicrobiology;
use Websyspro\Elements\Doms\Icons\IconMicrowave;
use Websyspro\Elements\Doms\Icons\IconMicrowaveGen;
use Websyspro\Elements\Doms\Icons\IconMilitaryTech;
use Websyspro\Elements\Doms\Icons\IconMimo;
use Websyspro\Elements\Doms\Icons\IconMimoDisconnect;
use Websyspro\Elements\Doms\Icons\IconMindfulness;
use Websyspro\Elements\Doms\Icons\IconMinimize;
use Websyspro\Elements\Doms\Icons\IconMinorCrash;
use Websyspro\Elements\Doms\Icons\IconMintmark;
use Websyspro\Elements\Doms\Icons\IconMissedVideoCall;
use Websyspro\Elements\Doms\Icons\IconMissingController;
use Websyspro\Elements\Doms\Icons\IconMist;
use Websyspro\Elements\Doms\Icons\IconMitre;
use Websyspro\Elements\Doms\Icons\IconMixtureMed;
use Websyspro\Elements\Doms\Icons\IconMms;
use Websyspro\Elements\Doms\Icons\IconMobiledataOff;
use Websyspro\Elements\Doms\Icons\IconMobileFriendly;
use Websyspro\Elements\Doms\Icons\IconMobileOff;
use Websyspro\Elements\Doms\Icons\IconMobileScreenShare;
use Websyspro\Elements\Doms\Icons\IconModeComment;
use Websyspro\Elements\Doms\Icons\IconModeCool;
use Websyspro\Elements\Doms\Icons\IconModeCoolOff;
use Websyspro\Elements\Doms\Icons\IconModeDual;
use Websyspro\Elements\Doms\Icons\IconModeFan;
use Websyspro\Elements\Doms\Icons\IconModeFanOff;
use Websyspro\Elements\Doms\Icons\IconModeHeat;
use Websyspro\Elements\Doms\Icons\IconModeHeatCool;
use Websyspro\Elements\Doms\Icons\IconModeHeatOff;
use Websyspro\Elements\Doms\Icons\IconModeling;
use Websyspro\Elements\Doms\Icons\IconModelTraining;
use Websyspro\Elements\Doms\Icons\IconModeNight;
use Websyspro\Elements\Doms\Icons\IconModeOffOn;
use Websyspro\Elements\Doms\Icons\IconModeOfTravel;
use Websyspro\Elements\Doms\Icons\IconModeStandby;
use Websyspro\Elements\Doms\Icons\IconMoney;
use Websyspro\Elements\Doms\Icons\IconMoneyBag;
use Websyspro\Elements\Doms\Icons\IconMoneyOff;
use Websyspro\Elements\Doms\Icons\IconMonitor;
use Websyspro\Elements\Doms\Icons\IconMonitorHeart;
use Websyspro\Elements\Doms\Icons\IconMonitoring;
use Websyspro\Elements\Doms\Icons\IconMonitorWeight;
use Websyspro\Elements\Doms\Icons\IconMonitorWeightGain;
use Websyspro\Elements\Doms\Icons\IconMonitorWeightLoss;
use Websyspro\Elements\Doms\Icons\IconMonochromePhotos;
use Websyspro\Elements\Doms\Icons\IconMonorail;
use Websyspro\Elements\Doms\Icons\IconMood;
use Websyspro\Elements\Doms\Icons\IconMoodBad;
use Websyspro\Elements\Doms\Icons\IconMop;
use Websyspro\Elements\Doms\Icons\IconMoped;
use Websyspro\Elements\Doms\Icons\IconMore;
use Websyspro\Elements\Doms\Icons\IconMoreDown;
use Websyspro\Elements\Doms\Icons\IconMoreHoriz;
use Websyspro\Elements\Doms\Icons\IconMoreTime;
use Websyspro\Elements\Doms\Icons\IconMoreUp;
use Websyspro\Elements\Doms\Icons\IconMoreVert;
use Websyspro\Elements\Doms\Icons\IconMosque;
use Websyspro\Elements\Doms\Icons\IconMotionBlur;
use Websyspro\Elements\Doms\Icons\IconMotionMode;
use Websyspro\Elements\Doms\Icons\IconMotionPhotosAuto;
use Websyspro\Elements\Doms\Icons\IconMotionPhotosOff;
use Websyspro\Elements\Doms\Icons\IconMotionPhotosOn;
use Websyspro\Elements\Doms\Icons\IconMotionPhotosPaused;
use Websyspro\Elements\Doms\Icons\IconMotionPlay;
use Websyspro\Elements\Doms\Icons\IconMotionSensorActive;
use Websyspro\Elements\Doms\Icons\IconMotionSensorAlert;
use Websyspro\Elements\Doms\Icons\IconMotionSensorIdle;
use Websyspro\Elements\Doms\Icons\IconMotionSensorUrgent;
use Websyspro\Elements\Doms\Icons\IconMotorcycle;
use Websyspro\Elements\Doms\Icons\IconMountainFlag;
use Websyspro\Elements\Doms\Icons\IconMouse;
use Websyspro\Elements\Doms\Icons\IconMouseLock;
use Websyspro\Elements\Doms\Icons\IconMouseLockOff;
use Websyspro\Elements\Doms\Icons\IconMove;
use Websyspro\Elements\Doms\Icons\IconMovedLocation;
use Websyspro\Elements\Doms\Icons\IconMoveDown;
use Websyspro\Elements\Doms\Icons\IconMoveGroup;
use Websyspro\Elements\Doms\Icons\IconMoveItem;
use Websyspro\Elements\Doms\Icons\IconMoveLocation;
use Websyspro\Elements\Doms\Icons\IconMoveSelectionDown;
use Websyspro\Elements\Doms\Icons\IconMoveSelectionLeft;
use Websyspro\Elements\Doms\Icons\IconMoveSelectionRight;
use Websyspro\Elements\Doms\Icons\IconMoveSelectionUp;
use Websyspro\Elements\Doms\Icons\IconMoveToInbox;
use Websyspro\Elements\Doms\Icons\IconMoveUp;
use Websyspro\Elements\Doms\Icons\IconMovie;
use Websyspro\Elements\Doms\Icons\IconMovieEdit;
use Websyspro\Elements\Doms\Icons\IconMovieInfo;
use Websyspro\Elements\Doms\Icons\IconMovieOff;
use Websyspro\Elements\Doms\Icons\IconMoving;
use Websyspro\Elements\Doms\Icons\IconMovingBeds;
use Websyspro\Elements\Doms\Icons\IconMovingMinistry;
use Websyspro\Elements\Doms\Icons\IconMp;
use Websyspro\Elements\Doms\Icons\IconMulticooker;
use Websyspro\Elements\Doms\Icons\IconMultilineChart;
use Websyspro\Elements\Doms\Icons\IconMultimodalHandEye;
use Websyspro\Elements\Doms\Icons\IconMultipleAirports;
use Websyspro\Elements\Doms\Icons\IconMultipleStop;
use Websyspro\Elements\Doms\Icons\IconMuseum;
use Websyspro\Elements\Doms\Icons\IconMusicCast;
use Websyspro\Elements\Doms\Icons\IconMusicNote;
use Websyspro\Elements\Doms\Icons\IconMusicNoteAdd;
use Websyspro\Elements\Doms\Icons\IconMusicOff;
use Websyspro\Elements\Doms\Icons\IconMusicVideo;
use Websyspro\Elements\Doms\Icons\IconMyLocation;
use Websyspro\Elements\Doms\Icons\IconMystery;
use Websyspro\Elements\Doms\Icons\IconNat;
use Websyspro\Elements\Doms\Icons\IconNature;
use Websyspro\Elements\Doms\Icons\IconNaturePeople;
use Websyspro\Elements\Doms\Icons\IconNavigation;
use Websyspro\Elements\Doms\Icons\IconNearby;
use Websyspro\Elements\Doms\Icons\IconNearbyError;
use Websyspro\Elements\Doms\Icons\IconNearbyOff;
use Websyspro\Elements\Doms\Icons\IconNearMe;
use Websyspro\Elements\Doms\Icons\IconNearMeDisabled;
use Websyspro\Elements\Doms\Icons\IconNephrology;
use Websyspro\Elements\Doms\Icons\IconNestAudio;
use Websyspro\Elements\Doms\Icons\IconNestCamFloodlight;
use Websyspro\Elements\Doms\Icons\IconNestCamIndoor;
use Websyspro\Elements\Doms\Icons\IconNestCamIq;
use Websyspro\Elements\Doms\Icons\IconNestCamIqOutdoor;
use Websyspro\Elements\Doms\Icons\IconNestCamMagnetMount;
use Websyspro\Elements\Doms\Icons\IconNestCamOutdoor;
use Websyspro\Elements\Doms\Icons\IconNestCamStand;
use Websyspro\Elements\Doms\Icons\IconNestCamWallMount;
use Websyspro\Elements\Doms\Icons\IconNestCamWiredStand;
use Websyspro\Elements\Doms\Icons\IconNestClockFarsightAnalog;
use Websyspro\Elements\Doms\Icons\IconNestClockFarsightDigital;
use Websyspro\Elements\Doms\Icons\IconNestConnect;
use Websyspro\Elements\Doms\Icons\IconNestDetect;
use Websyspro\Elements\Doms\Icons\IconNestDisplay;
use Websyspro\Elements\Doms\Icons\IconNestDisplayMax;
use Websyspro\Elements\Doms\Icons\IconNestDoorbellVisitor;
use Websyspro\Elements\Doms\Icons\IconNestEcoLeaf;
use Websyspro\Elements\Doms\Icons\IconNestFarsightWeather;
use Websyspro\Elements\Doms\Icons\IconNestFoundSavings;
use Websyspro\Elements\Doms\Icons\IconNestGaleWifi;
use Websyspro\Elements\Doms\Icons\IconNestHeatLinkE;
use Websyspro\Elements\Doms\Icons\IconNestHeatLinkGen3;
use Websyspro\Elements\Doms\Icons\IconNestHelloDoorbell;
use Websyspro\Elements\Doms\Icons\IconNestMini;
use Websyspro\Elements\Doms\Icons\IconNestMultiRoom;
use Websyspro\Elements\Doms\Icons\IconNestProtect;
use Websyspro\Elements\Doms\Icons\IconNestRemote;
use Websyspro\Elements\Doms\Icons\IconNestRemoteComfortSensor;
use Websyspro\Elements\Doms\Icons\IconNestSecureAlarm;
use Websyspro\Elements\Doms\Icons\IconNestSunblock;
use Websyspro\Elements\Doms\Icons\IconNestTag;
use Websyspro\Elements\Doms\Icons\IconNestThermostat;
use Websyspro\Elements\Doms\Icons\IconNestThermostatEEu;
use Websyspro\Elements\Doms\Icons\IconNestThermostatGen3;
use Websyspro\Elements\Doms\Icons\IconNestThermostatSensor;
use Websyspro\Elements\Doms\Icons\IconNestThermostatSensorEu;
use Websyspro\Elements\Doms\Icons\IconNestThermostatZirconiumEu;
use Websyspro\Elements\Doms\Icons\IconNestTrueRadiant;
use Websyspro\Elements\Doms\Icons\IconNestWakeOnApproach;
use Websyspro\Elements\Doms\Icons\IconNestWakeOnPress;
use Websyspro\Elements\Doms\Icons\IconNestWifiPoint;
use Websyspro\Elements\Doms\Icons\IconNestWifiPro;
use Websyspro\Elements\Doms\Icons\IconNestWifiPro2;
use Websyspro\Elements\Doms\Icons\IconNestWifiRouter;
use Websyspro\Elements\Doms\Icons\IconNetworkCell;
use Websyspro\Elements\Doms\Icons\IconNetworkCheck;
use Websyspro\Elements\Doms\Icons\IconNetworkIntelligence;
use Websyspro\Elements\Doms\Icons\IconNetworkIntelligenceHistory;
use Websyspro\Elements\Doms\Icons\IconNetworkIntelligenceUpdate;
use Websyspro\Elements\Doms\Icons\IconNetworkIntelNode;
use Websyspro\Elements\Doms\Icons\IconNetworkLocked;
use Websyspro\Elements\Doms\Icons\IconNetworkManage;
use Websyspro\Elements\Doms\Icons\IconNetworkNode;
use Websyspro\Elements\Doms\Icons\IconNetworkPing;
use Websyspro\Elements\Doms\Icons\IconNetworkWifi;
use Websyspro\Elements\Doms\Icons\IconNetworkWifi1Bar;
use Websyspro\Elements\Doms\Icons\IconNetworkWifi1BarLocked;
use Websyspro\Elements\Doms\Icons\IconNetworkWifi2Bar;
use Websyspro\Elements\Doms\Icons\IconNetworkWifi2BarLocked;
use Websyspro\Elements\Doms\Icons\IconNetworkWifi3Bar;
use Websyspro\Elements\Doms\Icons\IconNetworkWifi3BarLocked;
use Websyspro\Elements\Doms\Icons\IconNetworkWifiLocked;
use Websyspro\Elements\Doms\Icons\IconNeurology;
use Websyspro\Elements\Doms\Icons\IconNewLabel;
use Websyspro\Elements\Doms\Icons\IconNewReleases;
use Websyspro\Elements\Doms\Icons\IconNews;
use Websyspro\Elements\Doms\Icons\IconNewsmode;
use Websyspro\Elements\Doms\Icons\IconNewspaper;
use Websyspro\Elements\Doms\Icons\IconNewsstand;
use Websyspro\Elements\Doms\Icons\IconNewWindow;
use Websyspro\Elements\Doms\Icons\IconNextPlan;
use Websyspro\Elements\Doms\Icons\IconNextWeek;
use Websyspro\Elements\Doms\Icons\IconNfc;
use Websyspro\Elements\Doms\Icons\IconNightlife;
use Websyspro\Elements\Doms\Icons\IconNightlight;
use Websyspro\Elements\Doms\Icons\IconNightShelter;
use Websyspro\Elements\Doms\Icons\IconNightSightAuto;
use Websyspro\Elements\Doms\Icons\IconNightSightAutoOff;
use Websyspro\Elements\Doms\Icons\IconNightSightMax;
use Websyspro\Elements\Doms\Icons\IconNightsStay;
use Websyspro\Elements\Doms\Icons\IconNoAccounts;
use Websyspro\Elements\Doms\Icons\IconNoAdultContent;
use Websyspro\Elements\Doms\Icons\IconNoBackpack;
use Websyspro\Elements\Doms\Icons\IconNoCrash;
use Websyspro\Elements\Doms\Icons\IconNoDrinks;
use Websyspro\Elements\Doms\Icons\IconNoEncryption;
use Websyspro\Elements\Doms\Icons\IconNoFlash;
use Websyspro\Elements\Doms\Icons\IconNoFood;
use Websyspro\Elements\Doms\Icons\IconNoiseAware;
use Websyspro\Elements\Doms\Icons\IconNoiseControlOff;
use Websyspro\Elements\Doms\Icons\IconNoiseControlOn;
use Websyspro\Elements\Doms\Icons\IconNoLuggage;
use Websyspro\Elements\Doms\Icons\IconNoMeals;
use Websyspro\Elements\Doms\Icons\IconNoMeetingRoom;
use Websyspro\Elements\Doms\Icons\IconNoPhotography;
use Websyspro\Elements\Doms\Icons\IconNordicWalking;
use Websyspro\Elements\Doms\Icons\IconNorth;
use Websyspro\Elements\Doms\Icons\IconNorthEast;
use Websyspro\Elements\Doms\Icons\IconNorthWest;
use Websyspro\Elements\Doms\Icons\IconNoSim;
use Websyspro\Elements\Doms\Icons\IconNoSound;
use Websyspro\Elements\Doms\Icons\IconNoStroller;
use Websyspro\Elements\Doms\Icons\IconNotAccessible;
use Websyspro\Elements\Doms\Icons\IconNotAccessibleForward;
use Websyspro\Elements\Doms\Icons\IconNoteAdd;
use Websyspro\Elements\Doms\Icons\IconNoteAlt;
use Websyspro\Elements\Doms\Icons\IconNotes;
use Websyspro\Elements\Doms\Icons\IconNoteStack;
use Websyspro\Elements\Doms\Icons\IconNoteStackAdd;
use Websyspro\Elements\Doms\Icons\IconNotificationAdd;
use Websyspro\Elements\Doms\Icons\IconNotificationImportant;
use Websyspro\Elements\Doms\Icons\IconNotificationMultiple;
use Websyspro\Elements\Doms\Icons\IconNotifications;
use Websyspro\Elements\Doms\Icons\IconNotificationsActive;
use Websyspro\Elements\Doms\Icons\IconNotificationsOff;
use Websyspro\Elements\Doms\Icons\IconNotificationsPaused;
use Websyspro\Elements\Doms\Icons\IconNotificationsUnread;
use Websyspro\Elements\Doms\Icons\IconNotListedLocation;
use Websyspro\Elements\Doms\Icons\IconNoTransfer;
use Websyspro\Elements\Doms\Icons\IconNotStarted;
use Websyspro\Elements\Doms\Icons\IconNumbers;
use Websyspro\Elements\Doms\Icons\IconNutrition;
use Websyspro\Elements\Doms\Icons\IconOds;
use Websyspro\Elements\Doms\Icons\IconOdt;
use Websyspro\Elements\Doms\Icons\IconOfflineBolt;
use Websyspro\Elements\Doms\Icons\IconOfflinePin;
use Websyspro\Elements\Doms\Icons\IconOfflinePinOff;
use Websyspro\Elements\Doms\Icons\IconOfflineShare;
use Websyspro\Elements\Doms\Icons\IconOilBarrel;
use Websyspro\Elements\Doms\Icons\IconOncology;
use Websyspro\Elements\Doms\Icons\IconOnDeviceTraining;
use Websyspro\Elements\Doms\Icons\IconOnHubDevice;
use Websyspro\Elements\Doms\Icons\IconOnlinePrediction;
use Websyspro\Elements\Doms\Icons\IconOnsen;
use Websyspro\Elements\Doms\Icons\IconOpacity;
use Websyspro\Elements\Doms\Icons\IconOpenInBrowser;
use Websyspro\Elements\Doms\Icons\IconOpenInFull;
use Websyspro\Elements\Doms\Icons\IconOpenInNew;
use Websyspro\Elements\Doms\Icons\IconOpenInNewDown;
use Websyspro\Elements\Doms\Icons\IconOpenInNewOff;
use Websyspro\Elements\Doms\Icons\IconOpenInPhone;
use Websyspro\Elements\Doms\Icons\IconOpenJam;
use Websyspro\Elements\Doms\Icons\IconOpenRun;
use Websyspro\Elements\Doms\Icons\IconOpenWith;
use Websyspro\Elements\Doms\Icons\IconOphthalmology;
use Websyspro\Elements\Doms\Icons\IconOralDisease;
use Websyspro\Elements\Doms\Icons\IconOrbit;
use Websyspro\Elements\Doms\Icons\IconOrderApprove;
use Websyspro\Elements\Doms\Icons\IconOrderPlay;
use Websyspro\Elements\Doms\Icons\IconOrders;
use Websyspro\Elements\Doms\Icons\IconOrthopedics;
use Websyspro\Elements\Doms\Icons\IconOtherAdmission;
use Websyspro\Elements\Doms\Icons\IconOtherHouses;
use Websyspro\Elements\Doms\Icons\IconOutbound;
use Websyspro\Elements\Doms\Icons\IconOutbox;
use Websyspro\Elements\Doms\Icons\IconOutboxAlt;
use Websyspro\Elements\Doms\Icons\IconOutdoorGarden;
use Websyspro\Elements\Doms\Icons\IconOutdoorGrill;
use Websyspro\Elements\Doms\Icons\IconOutgoingMail;
use Websyspro\Elements\Doms\Icons\IconOutlet;
use Websyspro\Elements\Doms\Icons\IconOutpatient;
use Websyspro\Elements\Doms\Icons\IconOutpatientMed;
use Websyspro\Elements\Doms\Icons\IconOutput;
use Websyspro\Elements\Doms\Icons\IconOutputCircle;
use Websyspro\Elements\Doms\Icons\IconOven;
use Websyspro\Elements\Doms\Icons\IconOvenGen;
use Websyspro\Elements\Doms\Icons\IconOverview;
use Websyspro\Elements\Doms\Icons\IconOverviewKey;
use Websyspro\Elements\Doms\Icons\IconOwl;
use Websyspro\Elements\Doms\Icons\IconOxygenSaturation;
use Websyspro\Elements\Doms\Icons\IconP2p;
use Websyspro\Elements\Doms\Icons\IconPace;
use Websyspro\Elements\Doms\Icons\IconPacemaker;
use Websyspro\Elements\Doms\Icons\IconPackage;
use Websyspro\Elements\Doms\Icons\IconPackage2;
use Websyspro\Elements\Doms\Icons\IconPadding;
use Websyspro\Elements\Doms\Icons\IconPageControl;
use Websyspro\Elements\Doms\Icons\IconPageFooter;
use Websyspro\Elements\Doms\Icons\IconPageHeader;
use Websyspro\Elements\Doms\Icons\IconPageInfo;
use Websyspro\Elements\Doms\Icons\IconPageless;
use Websyspro\Elements\Doms\Icons\IconPages;
use Websyspro\Elements\Doms\Icons\IconPageview;
use Websyspro\Elements\Doms\Icons\IconPaid;
use Websyspro\Elements\Doms\Icons\IconPalette;
use Websyspro\Elements\Doms\Icons\IconPallet;
use Websyspro\Elements\Doms\Icons\IconPanorama;
use Websyspro\Elements\Doms\Icons\IconPanoramaHorizontal;
use Websyspro\Elements\Doms\Icons\IconPanoramaPhotosphere;
use Websyspro\Elements\Doms\Icons\IconPanoramaVertical;
use Websyspro\Elements\Doms\Icons\IconPanoramaWideAngle;
use Websyspro\Elements\Doms\Icons\IconPanTool;
use Websyspro\Elements\Doms\Icons\IconPanToolAlt;
use Websyspro\Elements\Doms\Icons\IconPanZoom;
use Websyspro\Elements\Doms\Icons\IconParagliding;
use Websyspro\Elements\Doms\Icons\IconPark;
use Websyspro\Elements\Doms\Icons\IconPartlyCloudyDay;
use Websyspro\Elements\Doms\Icons\IconPartlyCloudyNight;
use Websyspro\Elements\Doms\Icons\IconPartnerExchange;
use Websyspro\Elements\Doms\Icons\IconPartnerReports;
use Websyspro\Elements\Doms\Icons\IconPartyMode;
use Websyspro\Elements\Doms\Icons\IconPasskey;
use Websyspro\Elements\Doms\Icons\IconPassword;
use Websyspro\Elements\Doms\Icons\IconPassword2;
use Websyspro\Elements\Doms\Icons\IconPassword2Off;
use Websyspro\Elements\Doms\Icons\IconPatientList;
use Websyspro\Elements\Doms\Icons\IconPattern;
use Websyspro\Elements\Doms\Icons\IconPause;
use Websyspro\Elements\Doms\Icons\IconPauseCircle;
use Websyspro\Elements\Doms\Icons\IconPausePresentation;
use Websyspro\Elements\Doms\Icons\IconPayments;
use Websyspro\Elements\Doms\Icons\IconPedalBike;
use Websyspro\Elements\Doms\Icons\IconPediatrics;
use Websyspro\Elements\Doms\Icons\IconPending;
use Websyspro\Elements\Doms\Icons\IconPendingActions;
use Websyspro\Elements\Doms\Icons\IconPenSize1;
use Websyspro\Elements\Doms\Icons\IconPenSize2;
use Websyspro\Elements\Doms\Icons\IconPenSize3;
use Websyspro\Elements\Doms\Icons\IconPenSize4;
use Websyspro\Elements\Doms\Icons\IconPenSize5;
use Websyspro\Elements\Doms\Icons\IconPentagon;
use Websyspro\Elements\Doms\Icons\IconPercent;
use Websyspro\Elements\Doms\Icons\IconPergola;
use Websyspro\Elements\Doms\Icons\IconPermCameraMic;
use Websyspro\Elements\Doms\Icons\IconPermContactCalendar;
use Websyspro\Elements\Doms\Icons\IconPermDataSetting;
use Websyspro\Elements\Doms\Icons\IconPermDeviceInformation;
use Websyspro\Elements\Doms\Icons\IconPermMedia;
use Websyspro\Elements\Doms\Icons\IconPermPhoneMsg;
use Websyspro\Elements\Doms\Icons\IconPermScanWifi;
use Websyspro\Elements\Doms\Icons\IconPerson;
use Websyspro\Elements\Doms\Icons\IconPerson2;
use Websyspro\Elements\Doms\Icons\IconPerson3;
use Websyspro\Elements\Doms\Icons\IconPerson4;
use Websyspro\Elements\Doms\Icons\IconPersonAdd;
use Websyspro\Elements\Doms\Icons\IconPersonAddDisabled;
use Websyspro\Elements\Doms\Icons\IconPersonalBag;
use Websyspro\Elements\Doms\Icons\IconPersonalBagOff;
use Websyspro\Elements\Doms\Icons\IconPersonalBagQuestion;
use Websyspro\Elements\Doms\Icons\IconPersonAlert;
use Websyspro\Elements\Doms\Icons\IconPersonalInjury;
use Websyspro\Elements\Doms\Icons\IconPersonalPlaces;
use Websyspro\Elements\Doms\Icons\IconPersonApron;
use Websyspro\Elements\Doms\Icons\IconPersonBook;
use Websyspro\Elements\Doms\Icons\IconPersonCancel;
use Websyspro\Elements\Doms\Icons\IconPersonCelebrate;
use Websyspro\Elements\Doms\Icons\IconPersonCheck;
use Websyspro\Elements\Doms\Icons\IconPersonEdit;
use Websyspro\Elements\Doms\Icons\IconPersonOff;
use Websyspro\Elements\Doms\Icons\IconPersonPin;
use Websyspro\Elements\Doms\Icons\IconPersonPinCircle;
use Websyspro\Elements\Doms\Icons\IconPersonPlay;
use Websyspro\Elements\Doms\Icons\IconPersonRaisedHand;
use Websyspro\Elements\Doms\Icons\IconPersonRemove;
use Websyspro\Elements\Doms\Icons\IconPersonSearch;
use Websyspro\Elements\Doms\Icons\IconPestControl;
use Websyspro\Elements\Doms\Icons\IconPestControlRodent;
use Websyspro\Elements\Doms\Icons\IconPets;
use Websyspro\Elements\Doms\Icons\IconPetSupplies;
use Websyspro\Elements\Doms\Icons\IconPhishing;
use Websyspro\Elements\Doms\Icons\IconPhoneAndroid;
use Websyspro\Elements\Doms\Icons\IconPhoneBluetoothSpeaker;
use Websyspro\Elements\Doms\Icons\IconPhoneCallback;
use Websyspro\Elements\Doms\Icons\IconPhoneDisabled;
use Websyspro\Elements\Doms\Icons\IconPhoneEnabled;
use Websyspro\Elements\Doms\Icons\IconPhoneForwarded;
use Websyspro\Elements\Doms\Icons\IconPhoneInTalk;
use Websyspro\Elements\Doms\Icons\IconPhoneIphone;
use Websyspro\Elements\Doms\Icons\IconPhonelinkErase;
use Websyspro\Elements\Doms\Icons\IconPhonelinkLock;
use Websyspro\Elements\Doms\Icons\IconPhonelinkOff;
use Websyspro\Elements\Doms\Icons\IconPhonelinkRing;
use Websyspro\Elements\Doms\Icons\IconPhonelinkRingOff;
use Websyspro\Elements\Doms\Icons\IconPhonelinkSetup;
use Websyspro\Elements\Doms\Icons\IconPhoneLocked;
use Websyspro\Elements\Doms\Icons\IconPhoneMissed;
use Websyspro\Elements\Doms\Icons\IconPhonePaused;
use Websyspro\Elements\Doms\Icons\IconPhoto;
use Websyspro\Elements\Doms\Icons\IconPhotoAlbum;
use Websyspro\Elements\Doms\Icons\IconPhotoAutoMerge;
use Websyspro\Elements\Doms\Icons\IconPhotoCamera;
use Websyspro\Elements\Doms\Icons\IconPhotoCameraBack;
use Websyspro\Elements\Doms\Icons\IconPhotoCameraFront;
use Websyspro\Elements\Doms\Icons\IconPhotoFrame;
use Websyspro\Elements\Doms\Icons\IconPhotoLibrary;
use Websyspro\Elements\Doms\Icons\IconPhotoPrints;
use Websyspro\Elements\Doms\Icons\IconPhotoSizeSelectLarge;
use Websyspro\Elements\Doms\Icons\IconPhotoSizeSelectSmall;
use Websyspro\Elements\Doms\Icons\IconPhp;
use Websyspro\Elements\Doms\Icons\IconPhysicalTherapy;
use Websyspro\Elements\Doms\Icons\IconPiano;
use Websyspro\Elements\Doms\Icons\IconPianoOff;
use Websyspro\Elements\Doms\Icons\IconPictureAsPdf;
use Websyspro\Elements\Doms\Icons\IconPictureInPicture;
use Websyspro\Elements\Doms\Icons\IconPictureInPictureAlt;
use Websyspro\Elements\Doms\Icons\IconPictureInPictureCenter;
use Websyspro\Elements\Doms\Icons\IconPictureInPictureLarge;
use Websyspro\Elements\Doms\Icons\IconPictureInPictureMedium;
use Websyspro\Elements\Doms\Icons\IconPictureInPictureMobile;
use Websyspro\Elements\Doms\Icons\IconPictureInPictureOff;
use Websyspro\Elements\Doms\Icons\IconPictureInPictureSmall;
use Websyspro\Elements\Doms\Icons\IconPieChart;
use Websyspro\Elements\Doms\Icons\IconPill;
use Websyspro\Elements\Doms\Icons\IconPillOff;
use Websyspro\Elements\Doms\Icons\IconPin;
use Websyspro\Elements\Doms\Icons\IconPinboard;
use Websyspro\Elements\Doms\Icons\IconPinboardUnread;
use Websyspro\Elements\Doms\Icons\IconPinch;
use Websyspro\Elements\Doms\Icons\IconPinchZoomIn;
use Websyspro\Elements\Doms\Icons\IconPinchZoomOut;
use Websyspro\Elements\Doms\Icons\IconPinDrop;
use Websyspro\Elements\Doms\Icons\IconPinEnd;
use Websyspro\Elements\Doms\Icons\IconPinInvoke;
use Websyspro\Elements\Doms\Icons\IconPip;
use Websyspro\Elements\Doms\Icons\IconPipExit;
use Websyspro\Elements\Doms\Icons\IconPivotTableChart;
use Websyspro\Elements\Doms\Icons\IconPlaceItem;
use Websyspro\Elements\Doms\Icons\IconPlagiarism;
use Websyspro\Elements\Doms\Icons\IconPlanet;
use Websyspro\Elements\Doms\Icons\IconPlannerBannerAdPt;
use Websyspro\Elements\Doms\Icons\IconPlannerReview;
use Websyspro\Elements\Doms\Icons\IconPlayArrow;
use Websyspro\Elements\Doms\Icons\IconPlayCircle;
use Websyspro\Elements\Doms\Icons\IconPlayDisabled;
use Websyspro\Elements\Doms\Icons\IconPlayForWork;
use Websyspro\Elements\Doms\Icons\IconPlayingCards;
use Websyspro\Elements\Doms\Icons\IconPlayLesson;
use Websyspro\Elements\Doms\Icons\IconPlaylistAdd;
use Websyspro\Elements\Doms\Icons\IconPlaylistAddCheck;
use Websyspro\Elements\Doms\Icons\IconPlaylistAddCheckCircle;
use Websyspro\Elements\Doms\Icons\IconPlaylistAddCircle;
use Websyspro\Elements\Doms\Icons\IconPlaylistPlay;
use Websyspro\Elements\Doms\Icons\IconPlaylistRemove;
use Websyspro\Elements\Doms\Icons\IconPlayPause;
use Websyspro\Elements\Doms\Icons\IconPlumbing;
use Websyspro\Elements\Doms\Icons\IconPodcasts;
use Websyspro\Elements\Doms\Icons\IconPodiatry;
use Websyspro\Elements\Doms\Icons\IconPodium;
use Websyspro\Elements\Doms\Icons\IconPointOfSale;
use Websyspro\Elements\Doms\Icons\IconPointScan;
use Websyspro\Elements\Doms\Icons\IconPokerChip;
use Websyspro\Elements\Doms\Icons\IconPolicy;
use Websyspro\Elements\Doms\Icons\IconPolicyAlert;
use Websyspro\Elements\Doms\Icons\IconPolyline;
use Websyspro\Elements\Doms\Icons\IconPolymer;
use Websyspro\Elements\Doms\Icons\IconPool;
use Websyspro\Elements\Doms\Icons\IconPortableWifiOff;
use Websyspro\Elements\Doms\Icons\IconPositionBottomLeft;
use Websyspro\Elements\Doms\Icons\IconPositionBottomRight;
use Websyspro\Elements\Doms\Icons\IconPositionTopRight;
use Websyspro\Elements\Doms\Icons\IconPost;
use Websyspro\Elements\Doms\Icons\IconPostAdd;
use Websyspro\Elements\Doms\Icons\IconPottedPlant;
use Websyspro\Elements\Doms\Icons\IconPower;
use Websyspro\Elements\Doms\Icons\IconPowerInput;
use Websyspro\Elements\Doms\Icons\IconPowerOff;
use Websyspro\Elements\Doms\Icons\IconPowerSettingsCircle;
use Websyspro\Elements\Doms\Icons\IconPowerSettingsNew;
use Websyspro\Elements\Doms\Icons\IconPrayerTimes;
use Websyspro\Elements\Doms\Icons\IconPrecisionManufacturing;
use Websyspro\Elements\Doms\Icons\IconPregnancy;
use Websyspro\Elements\Doms\Icons\IconPregnantWoman;
use Websyspro\Elements\Doms\Icons\IconPreliminary;
use Websyspro\Elements\Doms\Icons\IconPrescriptions;
use Websyspro\Elements\Doms\Icons\IconPresentToAll;
use Websyspro\Elements\Doms\Icons\IconPreview;
use Websyspro\Elements\Doms\Icons\IconPreviewOff;
use Websyspro\Elements\Doms\Icons\IconPriceChange;
use Websyspro\Elements\Doms\Icons\IconPriceCheck;
use Websyspro\Elements\Doms\Icons\IconPrint;
use Websyspro\Elements\Doms\Icons\IconPrintAdd;
use Websyspro\Elements\Doms\Icons\IconPrintConnect;
use Websyspro\Elements\Doms\Icons\IconPrintDisabled;
use Websyspro\Elements\Doms\Icons\IconPrintError;
use Websyspro\Elements\Doms\Icons\IconPrintLock;
use Websyspro\Elements\Doms\Icons\IconPriority;
use Websyspro\Elements\Doms\Icons\IconPriorityHigh;
use Websyspro\Elements\Doms\Icons\IconPrivacy;
use Websyspro\Elements\Doms\Icons\IconPrivacyTip;
use Websyspro\Elements\Doms\Icons\IconPrivateConnectivity;
use Websyspro\Elements\Doms\Icons\IconProblem;
use Websyspro\Elements\Doms\Icons\IconProcedure;
use Websyspro\Elements\Doms\Icons\IconProcessChart;
use Websyspro\Elements\Doms\Icons\IconProductionQuantityLimits;
use Websyspro\Elements\Doms\Icons\IconProductivity;
use Websyspro\Elements\Doms\Icons\IconProgressActivity;
use Websyspro\Elements\Doms\Icons\IconPromptSuggestion;
use Websyspro\Elements\Doms\Icons\IconPropane;
use Websyspro\Elements\Doms\Icons\IconPropaneTank;
use Websyspro\Elements\Doms\Icons\IconPsychiatry;
use Websyspro\Elements\Doms\Icons\IconPsychology;
use Websyspro\Elements\Doms\Icons\IconPsychologyAlt;
use Websyspro\Elements\Doms\Icons\IconPublic;
use Websyspro\Elements\Doms\Icons\IconPublicOff;
use Websyspro\Elements\Doms\Icons\IconPublish;
use Websyspro\Elements\Doms\Icons\IconPublishedWithChanges;
use Websyspro\Elements\Doms\Icons\IconPulmonology;
use Websyspro\Elements\Doms\Icons\IconPulseAlert;
use Websyspro\Elements\Doms\Icons\IconPunchClock;
use Websyspro\Elements\Doms\Icons\IconQrCode;
use Websyspro\Elements\Doms\Icons\IconQrCode2;
use Websyspro\Elements\Doms\Icons\IconQrCode2Add;
use Websyspro\Elements\Doms\Icons\IconQrCodeScanner;
use Websyspro\Elements\Doms\Icons\IconQueryStats;
use Websyspro\Elements\Doms\Icons\IconQuestionExchange;
use Websyspro\Elements\Doms\Icons\IconQuestionMark;
use Websyspro\Elements\Doms\Icons\IconQueueMusic;
use Websyspro\Elements\Doms\Icons\IconQueuePlayNext;
use Websyspro\Elements\Doms\Icons\IconQuickPhrases;
use Websyspro\Elements\Doms\Icons\IconQuickReference;
use Websyspro\Elements\Doms\Icons\IconQuickReferenceAll;
use Websyspro\Elements\Doms\Icons\IconQuickReorder;
use Websyspro\Elements\Doms\Icons\IconQuickreply;
use Websyspro\Elements\Doms\Icons\IconQuiz;
use Websyspro\Elements\Doms\Icons\IconRadar;
use Websyspro\Elements\Doms\Icons\IconRadio;
use Websyspro\Elements\Doms\Icons\IconRadioButtonChecked;
use Websyspro\Elements\Doms\Icons\IconRadioButtonPartial;
use Websyspro\Elements\Doms\Icons\IconRadioButtonUnchecked;
use Websyspro\Elements\Doms\Icons\IconRadiology;
use Websyspro\Elements\Doms\Icons\IconRailwayAlert;
use Websyspro\Elements\Doms\Icons\IconRailwayAlert2;
use Websyspro\Elements\Doms\Icons\IconRainy;
use Websyspro\Elements\Doms\Icons\IconRainyHeavy;
use Websyspro\Elements\Doms\Icons\IconRainyLight;
use Websyspro\Elements\Doms\Icons\IconRainySnow;
use Websyspro\Elements\Doms\Icons\IconRamenDining;
use Websyspro\Elements\Doms\Icons\IconRampLeft;
use Websyspro\Elements\Doms\Icons\IconRampRight;
use Websyspro\Elements\Doms\Icons\IconRangeHood;
use Websyspro\Elements\Doms\Icons\IconRateReview;
use Websyspro\Elements\Doms\Icons\IconRaven;
use Websyspro\Elements\Doms\Icons\IconRawOff;
use Websyspro\Elements\Doms\Icons\IconRawOn;
use Websyspro\Elements\Doms\Icons\IconReadinessScore;
use Websyspro\Elements\Doms\Icons\IconReadMore;
use Websyspro\Elements\Doms\Icons\IconRealEstateAgent;
use Websyspro\Elements\Doms\Icons\IconRearCamera;
use Websyspro\Elements\Doms\Icons\IconRebase;
use Websyspro\Elements\Doms\Icons\IconRebaseEdit;
use Websyspro\Elements\Doms\Icons\IconReceipt;
use Websyspro\Elements\Doms\Icons\IconReceiptLong;
use Websyspro\Elements\Doms\Icons\IconReceiptLongOff;
use Websyspro\Elements\Doms\Icons\IconRecentActors;
use Websyspro\Elements\Doms\Icons\IconRecenter;
use Websyspro\Elements\Doms\Icons\IconRecentPatient;
use Websyspro\Elements\Doms\Icons\IconRecommend;
use Websyspro\Elements\Doms\Icons\IconRecordVoiceOver;
use Websyspro\Elements\Doms\Icons\IconRectangle;
use Websyspro\Elements\Doms\Icons\IconRecycling;
use Websyspro\Elements\Doms\Icons\IconRedeem;
use Websyspro\Elements\Doms\Icons\IconRedo;
use Websyspro\Elements\Doms\Icons\IconReduceCapacity;
use Websyspro\Elements\Doms\Icons\IconRefresh;
use Websyspro\Elements\Doms\Icons\IconRegularExpression;
use Websyspro\Elements\Doms\Icons\IconRelax;
use Websyspro\Elements\Doms\Icons\IconReleaseAlert;
use Websyspro\Elements\Doms\Icons\IconRememberMe;
use Websyspro\Elements\Doms\Icons\IconReminder;
use Websyspro\Elements\Doms\Icons\IconRemoteGen;
use Websyspro\Elements\Doms\Icons\IconRemove;
use Websyspro\Elements\Doms\Icons\IconRemoveDone;
use Websyspro\Elements\Doms\Icons\IconRemoveFromQueue;
use Websyspro\Elements\Doms\Icons\IconRemoveModerator;
use Websyspro\Elements\Doms\Icons\IconRemoveRoad;
use Websyspro\Elements\Doms\Icons\IconRemoveSelection;
use Websyspro\Elements\Doms\Icons\IconRemoveShoppingCart;
use Websyspro\Elements\Doms\Icons\IconReopenWindow;
use Websyspro\Elements\Doms\Icons\IconReorder;
use Websyspro\Elements\Doms\Icons\IconRepartition;
use Websyspro\Elements\Doms\Icons\IconRepeat;
use Websyspro\Elements\Doms\Icons\IconRepeatOn;
use Websyspro\Elements\Doms\Icons\IconRepeatOne;
use Websyspro\Elements\Doms\Icons\IconRepeatOneOn;
use Websyspro\Elements\Doms\Icons\IconReplaceAudio;
use Websyspro\Elements\Doms\Icons\IconReplaceImage;
use Websyspro\Elements\Doms\Icons\IconReplaceVideo;
use Websyspro\Elements\Doms\Icons\IconReplay;
use Websyspro\Elements\Doms\Icons\IconReplay10;
use Websyspro\Elements\Doms\Icons\IconReplay30;
use Websyspro\Elements\Doms\Icons\IconReplay5;
use Websyspro\Elements\Doms\Icons\IconReply;
use Websyspro\Elements\Doms\Icons\IconReplyAll;
use Websyspro\Elements\Doms\Icons\IconReport;
use Websyspro\Elements\Doms\Icons\IconReportOff;
use Websyspro\Elements\Doms\Icons\IconRequestPage;
use Websyspro\Elements\Doms\Icons\IconRequestQuote;
use Websyspro\Elements\Doms\Icons\IconResetBrightness;
use Websyspro\Elements\Doms\Icons\IconResetFocus;
use Websyspro\Elements\Doms\Icons\IconResetImage;
use Websyspro\Elements\Doms\Icons\IconResetIso;
use Websyspro\Elements\Doms\Icons\IconResetSettings;
use Websyspro\Elements\Doms\Icons\IconResetShadow;
use Websyspro\Elements\Doms\Icons\IconResetShutterSpeed;
use Websyspro\Elements\Doms\Icons\IconResetTv;
use Websyspro\Elements\Doms\Icons\IconResetWhiteBalance;
use Websyspro\Elements\Doms\Icons\IconResetWrench;
use Websyspro\Elements\Doms\Icons\IconResize;
use Websyspro\Elements\Doms\Icons\IconRespiratoryRate;
use Websyspro\Elements\Doms\Icons\IconResponsiveLayout;
use Websyspro\Elements\Doms\Icons\IconRestartAlt;
use Websyspro\Elements\Doms\Icons\IconRestaurant;
use Websyspro\Elements\Doms\Icons\IconRestoreFromTrash;
use Websyspro\Elements\Doms\Icons\IconRestorePage;
use Websyspro\Elements\Doms\Icons\IconResume;
use Websyspro\Elements\Doms\Icons\IconReviews;
use Websyspro\Elements\Doms\Icons\IconRewardedAds;
use Websyspro\Elements\Doms\Icons\IconRheumatology;
use Websyspro\Elements\Doms\Icons\IconRibCage;
use Websyspro\Elements\Doms\Icons\IconRiceBowl;
use Websyspro\Elements\Doms\Icons\IconRightClick;
use Websyspro\Elements\Doms\Icons\IconRightPanelClose;
use Websyspro\Elements\Doms\Icons\IconRightPanelOpen;
use Websyspro\Elements\Doms\Icons\IconRingVolume;
use Websyspro\Elements\Doms\Icons\IconRipples;
use Websyspro\Elements\Doms\Icons\IconRMobiledata;
use Websyspro\Elements\Doms\Icons\IconRoad;
use Websyspro\Elements\Doms\Icons\IconRobot;
use Websyspro\Elements\Doms\Icons\IconRobot2;
use Websyspro\Elements\Doms\Icons\IconRocket;
use Websyspro\Elements\Doms\Icons\IconRocketLaunch;
use Websyspro\Elements\Doms\Icons\IconRollerShades;
use Websyspro\Elements\Doms\Icons\IconRollerShadesClosed;
use Websyspro\Elements\Doms\Icons\IconRollerSkating;
use Websyspro\Elements\Doms\Icons\IconRoofing;
use Websyspro\Elements\Doms\Icons\IconRoomPreferences;
use Websyspro\Elements\Doms\Icons\IconRoomService;
use Websyspro\Elements\Doms\Icons\IconRotate90DegreesCcw;
use Websyspro\Elements\Doms\Icons\IconRotate90DegreesCw;
use Websyspro\Elements\Doms\Icons\IconRotateAuto;
use Websyspro\Elements\Doms\Icons\IconRotateLeft;
use Websyspro\Elements\Doms\Icons\IconRotateRight;
use Websyspro\Elements\Doms\Icons\IconRoundaboutLeft;
use Websyspro\Elements\Doms\Icons\IconRoundaboutRight;
use Websyspro\Elements\Doms\Icons\IconRoundedCorner;
use Websyspro\Elements\Doms\Icons\IconRoute;
use Websyspro\Elements\Doms\Icons\IconRouter;
use Websyspro\Elements\Doms\Icons\IconRoutine;
use Websyspro\Elements\Doms\Icons\IconRowing;
use Websyspro\Elements\Doms\Icons\IconRssFeed;
use Websyspro\Elements\Doms\Icons\IconRsvp;
use Websyspro\Elements\Doms\Icons\IconRtt;
use Websyspro\Elements\Doms\Icons\IconRubric;
use Websyspro\Elements\Doms\Icons\IconRule;
use Websyspro\Elements\Doms\Icons\IconRuleFolder;
use Websyspro\Elements\Doms\Icons\IconRuleSettings;
use Websyspro\Elements\Doms\Icons\IconRunCircle;
use Websyspro\Elements\Doms\Icons\IconRunningWithErrors;
use Websyspro\Elements\Doms\Icons\IconRvHookup;
use Websyspro\Elements\Doms\Icons\IconSafetyCheck;
use Websyspro\Elements\Doms\Icons\IconSafetyCheckOff;
use Websyspro\Elements\Doms\Icons\IconSafetyDivider;
use Websyspro\Elements\Doms\Icons\IconSailing;
use Websyspro\Elements\Doms\Icons\IconSalinity;
use Websyspro\Elements\Doms\Icons\IconSanitizer;
use Websyspro\Elements\Doms\Icons\IconSatellite;
use Websyspro\Elements\Doms\Icons\IconSatelliteAlt;
use Websyspro\Elements\Doms\Icons\IconSauna;
use Websyspro\Elements\Doms\Icons\IconSave;
use Websyspro\Elements\Doms\Icons\IconSaveAs;
use Websyspro\Elements\Doms\Icons\IconSaveClock;
use Websyspro\Elements\Doms\Icons\IconSavedSearch;
use Websyspro\Elements\Doms\Icons\IconSavings;
use Websyspro\Elements\Doms\Icons\IconScale;
use Websyspro\Elements\Doms\Icons\IconScan;
use Websyspro\Elements\Doms\Icons\IconScanDelete;
use Websyspro\Elements\Doms\Icons\IconScanner;
use Websyspro\Elements\Doms\Icons\IconScatterPlot;
use Websyspro\Elements\Doms\Icons\IconScene;
use Websyspro\Elements\Doms\Icons\IconSchedule;
use Websyspro\Elements\Doms\Icons\IconScheduleSend;
use Websyspro\Elements\Doms\Icons\IconSchema;
use Websyspro\Elements\Doms\Icons\IconSchool;
use Websyspro\Elements\Doms\Icons\IconScience;
use Websyspro\Elements\Doms\Icons\IconScienceOff;
use Websyspro\Elements\Doms\Icons\IconScooter;
use Websyspro\Elements\Doms\Icons\IconScore;
use Websyspro\Elements\Doms\Icons\IconScoreboard;
use Websyspro\Elements\Doms\Icons\IconScreenLockLandscape;
use Websyspro\Elements\Doms\Icons\IconScreenLockPortrait;
use Websyspro\Elements\Doms\Icons\IconScreenLockRotation;
use Websyspro\Elements\Doms\Icons\IconScreenRecord;
use Websyspro\Elements\Doms\Icons\IconScreenRotation;
use Websyspro\Elements\Doms\Icons\IconScreenRotationAlt;
use Websyspro\Elements\Doms\Icons\IconScreenRotationUp;
use Websyspro\Elements\Doms\Icons\IconScreenSearchDesktop;
use Websyspro\Elements\Doms\Icons\IconScreenShare;
use Websyspro\Elements\Doms\Icons\IconScreenshot;
use Websyspro\Elements\Doms\Icons\IconScreenshotFrame;
use Websyspro\Elements\Doms\Icons\IconScreenshotFrame2;
use Websyspro\Elements\Doms\Icons\IconScreenshotKeyboard;
use Websyspro\Elements\Doms\Icons\IconScreenshotMonitor;
use Websyspro\Elements\Doms\Icons\IconScreenshotRegion;
use Websyspro\Elements\Doms\Icons\IconScreenshotTablet;
use Websyspro\Elements\Doms\Icons\IconScript;
use Websyspro\Elements\Doms\Icons\IconScrollableHeader;
use Websyspro\Elements\Doms\Icons\IconScubaDiving;
use Websyspro\Elements\Doms\Icons\IconSd;
use Websyspro\Elements\Doms\Icons\IconSdCard;
use Websyspro\Elements\Doms\Icons\IconSdCardAlert;
use Websyspro\Elements\Doms\Icons\IconSdk;
use Websyspro\Elements\Doms\Icons\IconSearch;
use Websyspro\Elements\Doms\Icons\IconSearchActivity;
use Websyspro\Elements\Doms\Icons\IconSearchCheck;
use Websyspro\Elements\Doms\Icons\IconSearchCheck2;
use Websyspro\Elements\Doms\Icons\IconSearchHandsFree;
use Websyspro\Elements\Doms\Icons\IconSearchInsights;
use Websyspro\Elements\Doms\Icons\IconSearchOff;
use Websyspro\Elements\Doms\Icons\IconSecurity;
use Websyspro\Elements\Doms\Icons\IconSecurityKey;
use Websyspro\Elements\Doms\Icons\IconSecurityUpdateGood;
use Websyspro\Elements\Doms\Icons\IconSecurityUpdateWarning;
use Websyspro\Elements\Doms\Icons\IconSegment;
use Websyspro\Elements\Doms\Icons\IconSelect;
use Websyspro\Elements\Doms\Icons\IconSelectAll;
use Websyspro\Elements\Doms\Icons\IconSelectCheckBox;
use Websyspro\Elements\Doms\Icons\IconSelectToSpeak;
use Websyspro\Elements\Doms\Icons\IconSelectWindow;
use Websyspro\Elements\Doms\Icons\IconSelectWindow2;
use Websyspro\Elements\Doms\Icons\IconSelectWindowOff;
use Websyspro\Elements\Doms\Icons\IconSelfCare;
use Websyspro\Elements\Doms\Icons\IconSelfImprovement;
use Websyspro\Elements\Doms\Icons\IconSell;
use Websyspro\Elements\Doms\Icons\IconSend;
use Websyspro\Elements\Doms\Icons\IconSendAndArchive;
use Websyspro\Elements\Doms\Icons\IconSendMoney;
use Websyspro\Elements\Doms\Icons\IconSendTimeExtension;
use Websyspro\Elements\Doms\Icons\IconSendToMobile;
use Websyspro\Elements\Doms\Icons\IconSensorDoor;
use Websyspro\Elements\Doms\Icons\IconSensorOccupied;
use Websyspro\Elements\Doms\Icons\IconSensors;
use Websyspro\Elements\Doms\Icons\IconSensorsKrx;
use Websyspro\Elements\Doms\Icons\IconSensorsKrxOff;
use Websyspro\Elements\Doms\Icons\IconSensorsOff;
use Websyspro\Elements\Doms\Icons\IconSensorWindow;
use Websyspro\Elements\Doms\Icons\IconSentimentCalm;
use Websyspro\Elements\Doms\Icons\IconSentimentContent;
use Websyspro\Elements\Doms\Icons\IconSentimentDissatisfied;
use Websyspro\Elements\Doms\Icons\IconSentimentExcited;
use Websyspro\Elements\Doms\Icons\IconSentimentExtremelyDissatisfied;
use Websyspro\Elements\Doms\Icons\IconSentimentFrustrated;
use Websyspro\Elements\Doms\Icons\IconSentimentNeutral;
use Websyspro\Elements\Doms\Icons\IconSentimentSad;
use Websyspro\Elements\Doms\Icons\IconSentimentSatisfied;
use Websyspro\Elements\Doms\Icons\IconSentimentStressed;
use Websyspro\Elements\Doms\Icons\IconSentimentVeryDissatisfied;
use Websyspro\Elements\Doms\Icons\IconSentimentVerySatisfied;
use Websyspro\Elements\Doms\Icons\IconSentimentWorried;
use Websyspro\Elements\Doms\Icons\IconSerif;
use Websyspro\Elements\Doms\Icons\IconServerPerson;
use Websyspro\Elements\Doms\Icons\IconServiceToolbox;
use Websyspro\Elements\Doms\Icons\IconSetMeal;
use Websyspro\Elements\Doms\Icons\IconSettings;
use Websyspro\Elements\Doms\Icons\IconSettingsAccessibility;
use Websyspro\Elements\Doms\Icons\IconSettingsAccountBox;
use Websyspro\Elements\Doms\Icons\IconSettingsAlert;
use Websyspro\Elements\Doms\Icons\IconSettingsApplications;
use Websyspro\Elements\Doms\Icons\IconSettingsBackupRestore;
use Websyspro\Elements\Doms\Icons\IconSettingsBluetooth;
use Websyspro\Elements\Doms\Icons\IconSettingsBrightness;
use Websyspro\Elements\Doms\Icons\IconSettingsBRoll;
use Websyspro\Elements\Doms\Icons\IconSettingsCell;
use Websyspro\Elements\Doms\Icons\IconSettingsCinematicBlur;
use Websyspro\Elements\Doms\Icons\IconSettingsEthernet;
use Websyspro\Elements\Doms\Icons\IconSettingsHeart;
use Websyspro\Elements\Doms\Icons\IconSettingsInputAntenna;
use Websyspro\Elements\Doms\Icons\IconSettingsInputComponent;
use Websyspro\Elements\Doms\Icons\IconSettingsInputHdmi;
use Websyspro\Elements\Doms\Icons\IconSettingsInputSvideo;
use Websyspro\Elements\Doms\Icons\IconSettingsMotionMode;
use Websyspro\Elements\Doms\Icons\IconSettingsNightSight;
use Websyspro\Elements\Doms\Icons\IconSettingsOverscan;
use Websyspro\Elements\Doms\Icons\IconSettingsPanorama;
use Websyspro\Elements\Doms\Icons\IconSettingsPhone;
use Websyspro\Elements\Doms\Icons\IconSettingsPhotoCamera;
use Websyspro\Elements\Doms\Icons\IconSettingsPower;
use Websyspro\Elements\Doms\Icons\IconSettingsRemote;
use Websyspro\Elements\Doms\Icons\IconSettingsSlowMotion;
use Websyspro\Elements\Doms\Icons\IconSettingsSystemDaydream;
use Websyspro\Elements\Doms\Icons\IconSettingsTimelapse;
use Websyspro\Elements\Doms\Icons\IconSettingsVideoCamera;
use Websyspro\Elements\Doms\Icons\IconSettingsVoice;
use Websyspro\Elements\Doms\Icons\IconSettopComponent;
use Websyspro\Elements\Doms\Icons\IconSevereCold;
use Websyspro\Elements\Doms\Icons\IconShadow;
use Websyspro\Elements\Doms\Icons\IconShadowAdd;
use Websyspro\Elements\Doms\Icons\IconShadowMinus;
use Websyspro\Elements\Doms\Icons\IconShapeLine;
use Websyspro\Elements\Doms\Icons\IconShapes;
use Websyspro\Elements\Doms\Icons\IconShare;
use Websyspro\Elements\Doms\Icons\IconShareEta;
use Websyspro\Elements\Doms\Icons\IconShareLocation;
use Websyspro\Elements\Doms\Icons\IconShareOff;
use Websyspro\Elements\Doms\Icons\IconShareReviews;
use Websyspro\Elements\Doms\Icons\IconShareWindows;
use Websyspro\Elements\Doms\Icons\IconSheetsRtl;
use Websyspro\Elements\Doms\Icons\IconShelfAutoHide;
use Websyspro\Elements\Doms\Icons\IconShelfPosition;
use Websyspro\Elements\Doms\Icons\IconShelves;
use Websyspro\Elements\Doms\Icons\IconShield;
use Websyspro\Elements\Doms\Icons\IconShieldLock;
use Websyspro\Elements\Doms\Icons\IconShieldLocked;
use Websyspro\Elements\Doms\Icons\IconShieldMoon;
use Websyspro\Elements\Doms\Icons\IconShieldPerson;
use Websyspro\Elements\Doms\Icons\IconShieldQuestion;
use Websyspro\Elements\Doms\Icons\IconShieldWithHeart;
use Websyspro\Elements\Doms\Icons\IconShieldWithHouse;
use Websyspro\Elements\Doms\Icons\IconShift;
use Websyspro\Elements\Doms\Icons\IconShiftLock;
use Websyspro\Elements\Doms\Icons\IconShiftLockOff;
use Websyspro\Elements\Doms\Icons\IconShop;
use Websyspro\Elements\Doms\Icons\IconShoppingBag;
use Websyspro\Elements\Doms\Icons\IconShoppingBagSpeed;
use Websyspro\Elements\Doms\Icons\IconShoppingBasket;
use Websyspro\Elements\Doms\Icons\IconShoppingCart;
use Websyspro\Elements\Doms\Icons\IconShoppingCartCheckout;
use Websyspro\Elements\Doms\Icons\IconShoppingCartOff;
use Websyspro\Elements\Doms\Icons\IconShoppingmode;
use Websyspro\Elements\Doms\Icons\IconShopTwo;
use Websyspro\Elements\Doms\Icons\IconShortStay;
use Websyspro\Elements\Doms\Icons\IconShortText;
use Websyspro\Elements\Doms\Icons\IconShowChart;
use Websyspro\Elements\Doms\Icons\IconShower;
use Websyspro\Elements\Doms\Icons\IconShuffle;
use Websyspro\Elements\Doms\Icons\IconShuffleOn;
use Websyspro\Elements\Doms\Icons\IconShutterSpeed;
use Websyspro\Elements\Doms\Icons\IconShutterSpeedAdd;
use Websyspro\Elements\Doms\Icons\IconShutterSpeedMinus;
use Websyspro\Elements\Doms\Icons\IconSick;
use Websyspro\Elements\Doms\Icons\IconSideNavigation;
use Websyspro\Elements\Doms\Icons\IconSignalCellular0Bar;
use Websyspro\Elements\Doms\Icons\IconSignalCellular1Bar;
use Websyspro\Elements\Doms\Icons\IconSignalCellular2Bar;
use Websyspro\Elements\Doms\Icons\IconSignalCellular3Bar;
use Websyspro\Elements\Doms\Icons\IconSignalCellular4Bar;
use Websyspro\Elements\Doms\Icons\IconSignalCellularAdd;
use Websyspro\Elements\Doms\Icons\IconSignalCellularAlt;
use Websyspro\Elements\Doms\Icons\IconSignalCellularAlt1Bar;
use Websyspro\Elements\Doms\Icons\IconSignalCellularAlt2Bar;
use Websyspro\Elements\Doms\Icons\IconSignalCellularConnectedNoInternet0Bar;
use Websyspro\Elements\Doms\Icons\IconSignalCellularConnectedNoInternet4Bar;
use Websyspro\Elements\Doms\Icons\IconSignalCellularNodata;
use Websyspro\Elements\Doms\Icons\IconSignalCellularNull;
use Websyspro\Elements\Doms\Icons\IconSignalCellularOff;
use Websyspro\Elements\Doms\Icons\IconSignalCellularPause;
use Websyspro\Elements\Doms\Icons\IconSignalDisconnected;
use Websyspro\Elements\Doms\Icons\IconSignalWifi0Bar;
use Websyspro\Elements\Doms\Icons\IconSignalWifi4Bar;
use Websyspro\Elements\Doms\Icons\IconSignalWifiBad;
use Websyspro\Elements\Doms\Icons\IconSignalWifiOff;
use Websyspro\Elements\Doms\Icons\IconSignalWifiStatusbarNotConnected;
use Websyspro\Elements\Doms\Icons\IconSignalWifiStatusbarNull;
use Websyspro\Elements\Doms\Icons\IconSignature;
use Websyspro\Elements\Doms\Icons\IconSignLanguage;
use Websyspro\Elements\Doms\Icons\IconSignpost;
use Websyspro\Elements\Doms\Icons\IconSimCard;
use Websyspro\Elements\Doms\Icons\IconSimCardDownload;
use Websyspro\Elements\Doms\Icons\IconSimulation;
use Websyspro\Elements\Doms\Icons\IconSingleBed;
use Websyspro\Elements\Doms\Icons\IconSip;
use Websyspro\Elements\Doms\Icons\IconSiren;
use Websyspro\Elements\Doms\Icons\IconSirenCheck;
use Websyspro\Elements\Doms\Icons\IconSirenOpen;
use Websyspro\Elements\Doms\Icons\IconSirenQuestion;
use Websyspro\Elements\Doms\Icons\IconSkateboarding;
use Websyspro\Elements\Doms\Icons\IconSkeleton;
use Websyspro\Elements\Doms\Icons\IconSkillet;
use Websyspro\Elements\Doms\Icons\IconSkilletCooktop;
use Websyspro\Elements\Doms\Icons\IconSkipNext;
use Websyspro\Elements\Doms\Icons\IconSkipPrevious;
use Websyspro\Elements\Doms\Icons\IconSkull;
use Websyspro\Elements\Doms\Icons\IconSkullList;
use Websyspro\Elements\Doms\Icons\IconSlabSerif;
use Websyspro\Elements\Doms\Icons\IconSledding;
use Websyspro\Elements\Doms\Icons\IconSleepScore;
use Websyspro\Elements\Doms\Icons\IconSlideLibrary;
use Websyspro\Elements\Doms\Icons\IconSliders;
use Websyspro\Elements\Doms\Icons\IconSlideshow;
use Websyspro\Elements\Doms\Icons\IconSlowMotionVideo;
use Websyspro\Elements\Doms\Icons\IconSmartCardReader;
use Websyspro\Elements\Doms\Icons\IconSmartCardReaderOff;
use Websyspro\Elements\Doms\Icons\IconSmartDisplay;
use Websyspro\Elements\Doms\Icons\IconSmartOutlet;
use Websyspro\Elements\Doms\Icons\IconSmartphone;
use Websyspro\Elements\Doms\Icons\IconSmartphoneCamera;
use Websyspro\Elements\Doms\Icons\IconSmartScreen;
use Websyspro\Elements\Doms\Icons\IconSmartToy;
use Websyspro\Elements\Doms\Icons\IconSmbShare;
use Websyspro\Elements\Doms\Icons\IconSmokeFree;
use Websyspro\Elements\Doms\Icons\IconSmokingRooms;
use Websyspro\Elements\Doms\Icons\IconSms;
use Websyspro\Elements\Doms\Icons\IconSnippetFolder;
use Websyspro\Elements\Doms\Icons\IconSnooze;
use Websyspro\Elements\Doms\Icons\IconSnowboarding;
use Websyspro\Elements\Doms\Icons\IconSnowing;
use Websyspro\Elements\Doms\Icons\IconSnowingHeavy;
use Websyspro\Elements\Doms\Icons\IconSnowmobile;
use Websyspro\Elements\Doms\Icons\IconSnowshoeing;
use Websyspro\Elements\Doms\Icons\IconSoap;
use Websyspro\Elements\Doms\Icons\IconSocialDistance;
use Websyspro\Elements\Doms\Icons\IconSocialLeaderboard;
use Websyspro\Elements\Doms\Icons\IconSolarPower;
use Websyspro\Elements\Doms\Icons\IconSort;
use Websyspro\Elements\Doms\Icons\IconSortByAlpha;
use Websyspro\Elements\Doms\Icons\IconSos;
use Websyspro\Elements\Doms\Icons\IconSoundDetectionDogBarking;
use Websyspro\Elements\Doms\Icons\IconSoundDetectionGlassBreak;
use Websyspro\Elements\Doms\Icons\IconSoundDetectionLoudSound;
use Websyspro\Elements\Doms\Icons\IconSoundSampler;
use Websyspro\Elements\Doms\Icons\IconSoupKitchen;
use Websyspro\Elements\Doms\Icons\IconSourceEnvironment;
use Websyspro\Elements\Doms\Icons\IconSourceNotes;
use Websyspro\Elements\Doms\Icons\IconSouth;
use Websyspro\Elements\Doms\Icons\IconSouthAmerica;
use Websyspro\Elements\Doms\Icons\IconSouthEast;
use Websyspro\Elements\Doms\Icons\IconSouthWest;
use Websyspro\Elements\Doms\Icons\IconSpa;
use Websyspro\Elements\Doms\Icons\IconSpaceBar;
use Websyspro\Elements\Doms\Icons\IconSpaceDashboard;
use Websyspro\Elements\Doms\Icons\IconSpatialAudio;
use Websyspro\Elements\Doms\Icons\IconSpatialAudioOff;
use Websyspro\Elements\Doms\Icons\IconSpatialSpeaker;
use Websyspro\Elements\Doms\Icons\IconSpatialTracking;
use Websyspro\Elements\Doms\Icons\IconSpeaker;
use Websyspro\Elements\Doms\Icons\IconSpeakerGroup;
use Websyspro\Elements\Doms\Icons\IconSpeakerNotes;
use Websyspro\Elements\Doms\Icons\IconSpeakerNotesOff;
use Websyspro\Elements\Doms\Icons\IconSpeakerPhone;
use Websyspro\Elements\Doms\Icons\IconSpecialCharacter;
use Websyspro\Elements\Doms\Icons\IconSpecificGravity;
use Websyspro\Elements\Doms\Icons\IconSpeechToText;
use Websyspro\Elements\Doms\Icons\IconSpeed;
use Websyspro\Elements\Doms\Icons\IconSpeed025;
use Websyspro\Elements\Doms\Icons\IconSpeed02x;
use Websyspro\Elements\Doms\Icons\IconSpeed05;
use Websyspro\Elements\Doms\Icons\IconSpeed05x;
use Websyspro\Elements\Doms\Icons\IconSpeed075;
use Websyspro\Elements\Doms\Icons\IconSpeed07x;
use Websyspro\Elements\Doms\Icons\IconSpeed12;
use Websyspro\Elements\Doms\Icons\IconSpeed125;
use Websyspro\Elements\Doms\Icons\IconSpeed12x;
use Websyspro\Elements\Doms\Icons\IconSpeed15;
use Websyspro\Elements\Doms\Icons\IconSpeed15x;
use Websyspro\Elements\Doms\Icons\IconSpeed175;
use Websyspro\Elements\Doms\Icons\IconSpeed17x;
use Websyspro\Elements\Doms\Icons\IconSpeed2x;
use Websyspro\Elements\Doms\Icons\IconSpeedCamera;
use Websyspro\Elements\Doms\Icons\IconSpellcheck;
use Websyspro\Elements\Doms\Icons\IconSplitScene;
use Websyspro\Elements\Doms\Icons\IconSplitscreen;
use Websyspro\Elements\Doms\Icons\IconSplitscreenAdd;
use Websyspro\Elements\Doms\Icons\IconSplitscreenBottom;
use Websyspro\Elements\Doms\Icons\IconSplitscreenLandscape;
use Websyspro\Elements\Doms\Icons\IconSplitscreenLeft;
use Websyspro\Elements\Doms\Icons\IconSplitscreenPortrait;
use Websyspro\Elements\Doms\Icons\IconSplitscreenRight;
use Websyspro\Elements\Doms\Icons\IconSplitscreenTop;
use Websyspro\Elements\Doms\Icons\IconSplitscreenVerticalAdd;
use Websyspro\Elements\Doms\Icons\IconSpo2;
use Websyspro\Elements\Doms\Icons\IconSpoke;
use Websyspro\Elements\Doms\Icons\IconSports;
use Websyspro\Elements\Doms\Icons\IconSportsAndOutdoors;
use Websyspro\Elements\Doms\Icons\IconSportsBar;
use Websyspro\Elements\Doms\Icons\IconSportsBaseball;
use Websyspro\Elements\Doms\Icons\IconSportsBasketball;
use Websyspro\Elements\Doms\Icons\IconSportsCricket;
use Websyspro\Elements\Doms\Icons\IconSportsEsports;
use Websyspro\Elements\Doms\Icons\IconSportsFootball;
use Websyspro\Elements\Doms\Icons\IconSportsGolf;
use Websyspro\Elements\Doms\Icons\IconSportsGymnastics;
use Websyspro\Elements\Doms\Icons\IconSportsHandball;
use Websyspro\Elements\Doms\Icons\IconSportsHockey;
use Websyspro\Elements\Doms\Icons\IconSportsKabaddi;
use Websyspro\Elements\Doms\Icons\IconSportsMartialArts;
use Websyspro\Elements\Doms\Icons\IconSportsMma;
use Websyspro\Elements\Doms\Icons\IconSportsMotorsports;
use Websyspro\Elements\Doms\Icons\IconSportsRugby;
use Websyspro\Elements\Doms\Icons\IconSportsScore;
use Websyspro\Elements\Doms\Icons\IconSportsSoccer;
use Websyspro\Elements\Doms\Icons\IconSportsTennis;
use Websyspro\Elements\Doms\Icons\IconSportsVolleyball;
use Websyspro\Elements\Doms\Icons\IconSprinkler;
use Websyspro\Elements\Doms\Icons\IconSprint;
use Websyspro\Elements\Doms\Icons\IconSquare;
use Websyspro\Elements\Doms\Icons\IconSquareDot;
use Websyspro\Elements\Doms\Icons\IconSquareFoot;
use Websyspro\Elements\Doms\Icons\IconSsidChart;
use Websyspro\Elements\Doms\Icons\IconStack;
use Websyspro\Elements\Doms\Icons\IconStackedBarChart;
use Websyspro\Elements\Doms\Icons\IconStackedEmail;
use Websyspro\Elements\Doms\Icons\IconStackedInbox;
use Websyspro\Elements\Doms\Icons\IconStackedLineChart;
use Websyspro\Elements\Doms\Icons\IconStackHexagon;
use Websyspro\Elements\Doms\Icons\IconStackOff;
use Websyspro\Elements\Doms\Icons\IconStacks;
use Websyspro\Elements\Doms\Icons\IconStackStar;
use Websyspro\Elements\Doms\Icons\IconStadiaController;
use Websyspro\Elements\Doms\Icons\IconStadium;
use Websyspro\Elements\Doms\Icons\IconStairs;
use Websyspro\Elements\Doms\Icons\IconStairs2;
use Websyspro\Elements\Doms\Icons\IconStar;
use Websyspro\Elements\Doms\Icons\IconStarHalf;
use Websyspro\Elements\Doms\Icons\IconStarRate;
use Websyspro\Elements\Doms\Icons\IconStarRateHalf;
use Websyspro\Elements\Doms\Icons\IconStars;
use Websyspro\Elements\Doms\Icons\IconStart;
use Websyspro\Elements\Doms\Icons\IconStat0;
use Websyspro\Elements\Doms\Icons\IconStat1;
use Websyspro\Elements\Doms\Icons\IconStat2;
use Websyspro\Elements\Doms\Icons\IconStat3;
use Websyspro\Elements\Doms\Icons\IconStatMinus1;
use Websyspro\Elements\Doms\Icons\IconStatMinus2;
use Websyspro\Elements\Doms\Icons\IconStatMinus3;
use Websyspro\Elements\Doms\Icons\IconStayCurrentLandscape;
use Websyspro\Elements\Doms\Icons\IconStayCurrentPortrait;
use Websyspro\Elements\Doms\Icons\IconStayPrimaryLandscape;
use Websyspro\Elements\Doms\Icons\IconStayPrimaryPortrait;
use Websyspro\Elements\Doms\Icons\IconStep;
use Websyspro\Elements\Doms\Icons\IconStepInto;
use Websyspro\Elements\Doms\Icons\IconStepOut;
use Websyspro\Elements\Doms\Icons\IconStepOver;
use Websyspro\Elements\Doms\Icons\IconSteppers;
use Websyspro\Elements\Doms\Icons\IconSteps;
use Websyspro\Elements\Doms\Icons\IconStethoscope;
use Websyspro\Elements\Doms\Icons\IconStethoscopeArrow;
use Websyspro\Elements\Doms\Icons\IconStethoscopeCheck;
use Websyspro\Elements\Doms\Icons\IconStickyNote;
use Websyspro\Elements\Doms\Icons\IconStickyNote2;
use Websyspro\Elements\Doms\Icons\IconStockMedia;
use Websyspro\Elements\Doms\Icons\IconStockpot;
use Websyspro\Elements\Doms\Icons\IconStop;
use Websyspro\Elements\Doms\Icons\IconStopCircle;
use Websyspro\Elements\Doms\Icons\IconStopScreenShare;
use Websyspro\Elements\Doms\Icons\IconStorage;
use Websyspro\Elements\Doms\Icons\IconStore;
use Websyspro\Elements\Doms\Icons\IconStorefront;
use Websyspro\Elements\Doms\Icons\IconStorm;
use Websyspro\Elements\Doms\Icons\IconStraight;
use Websyspro\Elements\Doms\Icons\IconStraighten;
use Websyspro\Elements\Doms\Icons\IconStrategy;
use Websyspro\Elements\Doms\Icons\IconStream;
use Websyspro\Elements\Doms\Icons\IconStreamApps;
use Websyspro\Elements\Doms\Icons\IconStreetview;
use Websyspro\Elements\Doms\Icons\IconStressManagement;
use Websyspro\Elements\Doms\Icons\IconStrikethroughS;
use Websyspro\Elements\Doms\Icons\IconStrokeFull;
use Websyspro\Elements\Doms\Icons\IconStrokePartial;
use Websyspro\Elements\Doms\Icons\IconStroller;
use Websyspro\Elements\Doms\Icons\IconStyle;
use Websyspro\Elements\Doms\Icons\IconStyler;
use Websyspro\Elements\Doms\Icons\IconStylus;
use Websyspro\Elements\Doms\Icons\IconStylusLaserPointer;
use Websyspro\Elements\Doms\Icons\IconStylusNote;
use Websyspro\Elements\Doms\Icons\IconSubdirectoryArrowLeft;
use Websyspro\Elements\Doms\Icons\IconSubdirectoryArrowRight;
use Websyspro\Elements\Doms\Icons\IconSubheader;
use Websyspro\Elements\Doms\Icons\IconSubject;
use Websyspro\Elements\Doms\Icons\IconSubscript;
use Websyspro\Elements\Doms\Icons\IconSubscriptions;
use Websyspro\Elements\Doms\Icons\IconSubtitles;
use Websyspro\Elements\Doms\Icons\IconSubtitlesOff;
use Websyspro\Elements\Doms\Icons\IconSubway;
use Websyspro\Elements\Doms\Icons\IconSummarize;
use Websyspro\Elements\Doms\Icons\IconSunny;
use Websyspro\Elements\Doms\Icons\IconSunnySnowing;
use Websyspro\Elements\Doms\Icons\IconSuperscript;
use Websyspro\Elements\Doms\Icons\IconSupervisedUserCircle;
use Websyspro\Elements\Doms\Icons\IconSupervisedUserCircleOff;
use Websyspro\Elements\Doms\Icons\IconSupervisorAccount;
use Websyspro\Elements\Doms\Icons\IconSupport;
use Websyspro\Elements\Doms\Icons\IconSupportAgent;
use Websyspro\Elements\Doms\Icons\IconSurfing;
use Websyspro\Elements\Doms\Icons\IconSurgical;
use Websyspro\Elements\Doms\Icons\IconSurroundSound;
use Websyspro\Elements\Doms\Icons\IconSwapCalls;
use Websyspro\Elements\Doms\Icons\IconSwapDrivingApps;
use Websyspro\Elements\Doms\Icons\IconSwapDrivingAppsWheel;
use Websyspro\Elements\Doms\Icons\IconSwapHoriz;
use Websyspro\Elements\Doms\Icons\IconSwapHorizontalCircle;
use Websyspro\Elements\Doms\Icons\IconSwapVert;
use Websyspro\Elements\Doms\Icons\IconSwapVerticalCircle;
use Websyspro\Elements\Doms\Icons\IconSweep;
use Websyspro\Elements\Doms\Icons\IconSwipe;
use Websyspro\Elements\Doms\Icons\IconSwipeDown;
use Websyspro\Elements\Doms\Icons\IconSwipeDownAlt;
use Websyspro\Elements\Doms\Icons\IconSwipeLeft;
use Websyspro\Elements\Doms\Icons\IconSwipeLeftAlt;
use Websyspro\Elements\Doms\Icons\IconSwipeRight;
use Websyspro\Elements\Doms\Icons\IconSwipeRightAlt;
use Websyspro\Elements\Doms\Icons\IconSwipeUp;
use Websyspro\Elements\Doms\Icons\IconSwipeUpAlt;
use Websyspro\Elements\Doms\Icons\IconSwipeVertical;
use Websyspro\Elements\Doms\Icons\IconSwitch;
use Websyspro\Elements\Doms\Icons\IconSwitchAccess;
use Websyspro\Elements\Doms\Icons\IconSwitchAccess2;
use Websyspro\Elements\Doms\Icons\IconSwitchAccessShortcut;
use Websyspro\Elements\Doms\Icons\IconSwitchAccessShortcutAdd;
use Websyspro\Elements\Doms\Icons\IconSwitchAccount;
use Websyspro\Elements\Doms\Icons\IconSwitchCamera;
use Websyspro\Elements\Doms\Icons\IconSwitches;
use Websyspro\Elements\Doms\Icons\IconSwitchLeft;
use Websyspro\Elements\Doms\Icons\IconSwitchRight;
use Websyspro\Elements\Doms\Icons\IconSwitchVideo;
use Websyspro\Elements\Doms\Icons\IconSwordRose;
use Websyspro\Elements\Doms\Icons\IconSwords;
use Websyspro\Elements\Doms\Icons\IconSymptoms;
use Websyspro\Elements\Doms\Icons\IconSynagogue;
use Websyspro\Elements\Doms\Icons\IconSync;
use Websyspro\Elements\Doms\Icons\IconSyncAlt;
use Websyspro\Elements\Doms\Icons\IconSyncArrowDown;
use Websyspro\Elements\Doms\Icons\IconSyncArrowUp;
use Websyspro\Elements\Doms\Icons\IconSyncDesktop;
use Websyspro\Elements\Doms\Icons\IconSyncDisabled;
use Websyspro\Elements\Doms\Icons\IconSyncLock;
use Websyspro\Elements\Doms\Icons\IconSyncProblem;
use Websyspro\Elements\Doms\Icons\IconSyncSavedLocally;
use Websyspro\Elements\Doms\Icons\IconSyringe;
use Websyspro\Elements\Doms\Icons\IconSystemUpdate;
use Websyspro\Elements\Doms\Icons\IconSystemUpdateAlt;
use Websyspro\Elements\Doms\Icons\IconTab;
use Websyspro\Elements\Doms\Icons\IconTabClose;
use Websyspro\Elements\Doms\Icons\IconTabCloseInactive;
use Websyspro\Elements\Doms\Icons\IconTabCloseRight;
use Websyspro\Elements\Doms\Icons\IconTabDuplicate;
use Websyspro\Elements\Doms\Icons\IconTabGroup;
use Websyspro\Elements\Doms\Icons\IconTabInactive;
use Websyspro\Elements\Doms\Icons\IconTable;
use Websyspro\Elements\Doms\Icons\IconTableBar;
use Websyspro\Elements\Doms\Icons\IconTableChart;
use Websyspro\Elements\Doms\Icons\IconTableChartView;
use Websyspro\Elements\Doms\Icons\IconTableConvert;
use Websyspro\Elements\Doms\Icons\IconTableEdit;
use Websyspro\Elements\Doms\Icons\IconTableEye;
use Websyspro\Elements\Doms\Icons\IconTableLamp;
use Websyspro\Elements\Doms\Icons\IconTableRestaurant;
use Websyspro\Elements\Doms\Icons\IconTableRows;
use Websyspro\Elements\Doms\Icons\IconTableRowsNarrow;
use Websyspro\Elements\Doms\Icons\IconTablet;
use Websyspro\Elements\Doms\Icons\IconTabletAndroid;
use Websyspro\Elements\Doms\Icons\IconTabletCamera;
use Websyspro\Elements\Doms\Icons\IconTabletMac;
use Websyspro\Elements\Doms\Icons\IconTableView;
use Websyspro\Elements\Doms\Icons\IconTabMove;
use Websyspro\Elements\Doms\Icons\IconTabNewRight;
use Websyspro\Elements\Doms\Icons\IconTabRecent;
use Websyspro\Elements\Doms\Icons\IconTabs;
use Websyspro\Elements\Doms\Icons\IconTabUnselected;
use Websyspro\Elements\Doms\Icons\IconTactic;
use Websyspro\Elements\Doms\Icons\IconTag;
use Websyspro\Elements\Doms\Icons\IconTakeoutDining;
use Websyspro\Elements\Doms\Icons\IconTamperDetectionOff;
use Websyspro\Elements\Doms\Icons\IconTamperDetectionOn;
use Websyspro\Elements\Doms\Icons\IconTapAndPlay;
use Websyspro\Elements\Doms\Icons\IconTapas;
use Websyspro\Elements\Doms\Icons\IconTarget;
use Websyspro\Elements\Doms\Icons\IconTask;
use Websyspro\Elements\Doms\Icons\IconTaskAlt;
use Websyspro\Elements\Doms\Icons\IconTaunt;
use Websyspro\Elements\Doms\Icons\IconTaxiAlert;
use Websyspro\Elements\Doms\Icons\IconTeamDashboard;
use Websyspro\Elements\Doms\Icons\IconTempleBuddhist;
use Websyspro\Elements\Doms\Icons\IconTempleHindu;
use Websyspro\Elements\Doms\Icons\IconTempPreferencesEco;
use Websyspro\Elements\Doms\Icons\IconTenancy;
use Websyspro\Elements\Doms\Icons\IconTerminal;
use Websyspro\Elements\Doms\Icons\IconTextAd;
use Websyspro\Elements\Doms\Icons\IconTextCompare;
use Websyspro\Elements\Doms\Icons\IconTextDecrease;
use Websyspro\Elements\Doms\Icons\IconTextFields;
use Websyspro\Elements\Doms\Icons\IconTextFieldsAlt;
use Websyspro\Elements\Doms\Icons\IconTextFormat;
use Websyspro\Elements\Doms\Icons\IconTextIncrease;
use Websyspro\Elements\Doms\Icons\IconTextRotateUp;
use Websyspro\Elements\Doms\Icons\IconTextRotateVertical;
use Websyspro\Elements\Doms\Icons\IconTextRotationAngledown;
use Websyspro\Elements\Doms\Icons\IconTextRotationAngleup;
use Websyspro\Elements\Doms\Icons\IconTextRotationDown;
use Websyspro\Elements\Doms\Icons\IconTextRotationNone;
use Websyspro\Elements\Doms\Icons\IconTextSelectEnd;
use Websyspro\Elements\Doms\Icons\IconTextSelectJumpToBeginning;
use Websyspro\Elements\Doms\Icons\IconTextSelectJumpToEnd;
use Websyspro\Elements\Doms\Icons\IconTextSelectMoveBackCharacter;
use Websyspro\Elements\Doms\Icons\IconTextSelectMoveBackWord;
use Websyspro\Elements\Doms\Icons\IconTextSelectMoveDown;
use Websyspro\Elements\Doms\Icons\IconTextSelectMoveForwardCharacter;
use Websyspro\Elements\Doms\Icons\IconTextSelectMoveForwardWord;
use Websyspro\Elements\Doms\Icons\IconTextSelectMoveUp;
use Websyspro\Elements\Doms\Icons\IconTextSelectStart;
use Websyspro\Elements\Doms\Icons\IconTextSnippet;
use Websyspro\Elements\Doms\Icons\IconTextToSpeech;
use Websyspro\Elements\Doms\Icons\IconTextUp;
use Websyspro\Elements\Doms\Icons\IconTexture;
use Websyspro\Elements\Doms\Icons\IconTextureAdd;
use Websyspro\Elements\Doms\Icons\IconTextureMinus;
use Websyspro\Elements\Doms\Icons\IconTheaterComedy;
use Websyspro\Elements\Doms\Icons\IconTheaters;
use Websyspro\Elements\Doms\Icons\IconThermometer;
use Websyspro\Elements\Doms\Icons\IconThermometerAdd;
use Websyspro\Elements\Doms\Icons\IconThermometerGain;
use Websyspro\Elements\Doms\Icons\IconThermometerLoss;
use Websyspro\Elements\Doms\Icons\IconThermometerMinus;
use Websyspro\Elements\Doms\Icons\IconThermostat;
use Websyspro\Elements\Doms\Icons\IconThermostatArrowDown;
use Websyspro\Elements\Doms\Icons\IconThermostatArrowUp;
use Websyspro\Elements\Doms\Icons\IconThermostatAuto;
use Websyspro\Elements\Doms\Icons\IconThermostatCarbon;
use Websyspro\Elements\Doms\Icons\IconThingsToDo;
use Websyspro\Elements\Doms\Icons\IconThreadUnread;
use Websyspro\Elements\Doms\Icons\IconThreatIntelligence;
use Websyspro\Elements\Doms\Icons\IconThumbDown;
use Websyspro\Elements\Doms\Icons\IconThumbnailBar;
use Websyspro\Elements\Doms\Icons\IconThumbsUpDown;
use Websyspro\Elements\Doms\Icons\IconThumbUp;
use Websyspro\Elements\Doms\Icons\IconThunderstorm;
use Websyspro\Elements\Doms\Icons\IconTibia;
use Websyspro\Elements\Doms\Icons\IconTibiaAlt;
use Websyspro\Elements\Doms\Icons\IconTileLarge;
use Websyspro\Elements\Doms\Icons\IconTileMedium;
use Websyspro\Elements\Doms\Icons\IconTileSmall;
use Websyspro\Elements\Doms\Icons\IconTimeAuto;
use Websyspro\Elements\Doms\Icons\IconTimelapse;
use Websyspro\Elements\Doms\Icons\IconTimeline;
use Websyspro\Elements\Doms\Icons\IconTimer;
use Websyspro\Elements\Doms\Icons\IconTimer10;
use Websyspro\Elements\Doms\Icons\IconTimer10Alt1;
use Websyspro\Elements\Doms\Icons\IconTimer10Select;
use Websyspro\Elements\Doms\Icons\IconTimer3;
use Websyspro\Elements\Doms\Icons\IconTimer3Alt1;
use Websyspro\Elements\Doms\Icons\IconTimer3Select;
use Websyspro\Elements\Doms\Icons\IconTimer5;
use Websyspro\Elements\Doms\Icons\IconTimer5Shutter;
use Websyspro\Elements\Doms\Icons\IconTimerArrowDown;
use Websyspro\Elements\Doms\Icons\IconTimerArrowUp;
use Websyspro\Elements\Doms\Icons\IconTimerOff;
use Websyspro\Elements\Doms\Icons\IconTimerPause;
use Websyspro\Elements\Doms\Icons\IconTimerPlay;
use Websyspro\Elements\Doms\Icons\IconTireRepair;
use Websyspro\Elements\Doms\Icons\IconTitle;
use Websyspro\Elements\Doms\Icons\IconTitlecase;
use Websyspro\Elements\Doms\Icons\IconToast;
use Websyspro\Elements\Doms\Icons\IconToc;
use Websyspro\Elements\Doms\Icons\IconToday;
use Websyspro\Elements\Doms\Icons\IconToggleOff;
use Websyspro\Elements\Doms\Icons\IconToggleOn;
use Websyspro\Elements\Doms\Icons\IconToken;
use Websyspro\Elements\Doms\Icons\IconToll;
use Websyspro\Elements\Doms\Icons\IconTonality;
use Websyspro\Elements\Doms\Icons\IconToolbar;
use Websyspro\Elements\Doms\Icons\IconToolsFlatHead;
use Websyspro\Elements\Doms\Icons\IconToolsInstallationKit;
use Websyspro\Elements\Doms\Icons\IconToolsLadder;
use Websyspro\Elements\Doms\Icons\IconToolsLevel;
use Websyspro\Elements\Doms\Icons\IconToolsPhillips;
use Websyspro\Elements\Doms\Icons\IconToolsPliersWireStripper;
use Websyspro\Elements\Doms\Icons\IconToolsPowerDrill;
use Websyspro\Elements\Doms\Icons\IconTooltip;
use Websyspro\Elements\Doms\Icons\IconTooltip2;
use Websyspro\Elements\Doms\Icons\IconTopic;
use Websyspro\Elements\Doms\Icons\IconTopPanelClose;
use Websyspro\Elements\Doms\Icons\IconTopPanelOpen;
use Websyspro\Elements\Doms\Icons\IconTornado;
use Websyspro\Elements\Doms\Icons\IconTotalDissolvedSolids;
use Websyspro\Elements\Doms\Icons\IconTouchApp;
use Websyspro\Elements\Doms\Icons\IconTouchDouble;
use Websyspro\Elements\Doms\Icons\IconTouchLong;
use Websyspro\Elements\Doms\Icons\IconTouchpadMouse;
use Websyspro\Elements\Doms\Icons\IconTouchpadMouseOff;
use Websyspro\Elements\Doms\Icons\IconTouchTriple;
use Websyspro\Elements\Doms\Icons\IconTour;
use Websyspro\Elements\Doms\Icons\IconToys;
use Websyspro\Elements\Doms\Icons\IconToysAndGames;
use Websyspro\Elements\Doms\Icons\IconToysFan;
use Websyspro\Elements\Doms\Icons\IconTrackChanges;
use Websyspro\Elements\Doms\Icons\IconTrackpadInput;
use Websyspro\Elements\Doms\Icons\IconTrackpadInput2;
use Websyspro\Elements\Doms\Icons\IconTrackpadInput3;
use Websyspro\Elements\Doms\Icons\IconTraffic;
use Websyspro\Elements\Doms\Icons\IconTrafficJam;
use Websyspro\Elements\Doms\Icons\IconTrailLength;
use Websyspro\Elements\Doms\Icons\IconTrailLengthMedium;
use Websyspro\Elements\Doms\Icons\IconTrailLengthShort;
use Websyspro\Elements\Doms\Icons\IconTrain;
use Websyspro\Elements\Doms\Icons\IconTram;
use Websyspro\Elements\Doms\Icons\IconTranscribe;
use Websyspro\Elements\Doms\Icons\IconTransferWithinAStation;
use Websyspro\Elements\Doms\Icons\IconTransform;
use Websyspro\Elements\Doms\Icons\IconTransgender;
use Websyspro\Elements\Doms\Icons\IconTransitEnterexit;
use Websyspro\Elements\Doms\Icons\IconTransitionChop;
use Websyspro\Elements\Doms\Icons\IconTransitionDissolve;
use Websyspro\Elements\Doms\Icons\IconTransitionFade;
use Websyspro\Elements\Doms\Icons\IconTransitionPush;
use Websyspro\Elements\Doms\Icons\IconTransitionSlide;
use Websyspro\Elements\Doms\Icons\IconTransitTicket;
use Websyspro\Elements\Doms\Icons\IconTranslate;
use Websyspro\Elements\Doms\Icons\IconTransportation;
use Websyspro\Elements\Doms\Icons\IconTravel;
use Websyspro\Elements\Doms\Icons\IconTravelExplore;
use Websyspro\Elements\Doms\Icons\IconTravelLuggageAndBags;
use Websyspro\Elements\Doms\Icons\IconTrendingDown;
use Websyspro\Elements\Doms\Icons\IconTrendingFlat;
use Websyspro\Elements\Doms\Icons\IconTrendingUp;
use Websyspro\Elements\Doms\Icons\IconTrip;
use Websyspro\Elements\Doms\Icons\IconTripOrigin;
use Websyspro\Elements\Doms\Icons\IconTrolley;
use Websyspro\Elements\Doms\Icons\IconTrolleyCableCar;
use Websyspro\Elements\Doms\Icons\IconTrophy;
use Websyspro\Elements\Doms\Icons\IconTroubleshoot;
use Websyspro\Elements\Doms\Icons\IconTsunami;
use Websyspro\Elements\Doms\Icons\IconTsv;
use Websyspro\Elements\Doms\Icons\IconTty;
use Websyspro\Elements\Doms\Icons\IconTune;
use Websyspro\Elements\Doms\Icons\IconTurnLeft;
use Websyspro\Elements\Doms\Icons\IconTurnRight;
use Websyspro\Elements\Doms\Icons\IconTurnSharpLeft;
use Websyspro\Elements\Doms\Icons\IconTurnSharpRight;
use Websyspro\Elements\Doms\Icons\IconTurnSlightLeft;
use Websyspro\Elements\Doms\Icons\IconTurnSlightRight;
use Websyspro\Elements\Doms\Icons\IconTv;
use Websyspro\Elements\Doms\Icons\IconTvDisplays;
use Websyspro\Elements\Doms\Icons\IconTvGen;
use Websyspro\Elements\Doms\Icons\IconTvGuide;
use Websyspro\Elements\Doms\Icons\IconTvNext;
use Websyspro\Elements\Doms\Icons\IconTvOff;
use Websyspro\Elements\Doms\Icons\IconTvOptionsEditChannels;
use Websyspro\Elements\Doms\Icons\IconTvOptionsInputSettings;
use Websyspro\Elements\Doms\Icons\IconTvRemote;
use Websyspro\Elements\Doms\Icons\IconTvSignin;
use Websyspro\Elements\Doms\Icons\IconTvWithAssistant;
use Websyspro\Elements\Doms\Icons\IconTwoPager;
use Websyspro\Elements\Doms\Icons\IconTwoPagerStore;
use Websyspro\Elements\Doms\Icons\IconTwoWheeler;
use Websyspro\Elements\Doms\Icons\IconTypeSpecimen;
use Websyspro\Elements\Doms\Icons\IconUlnaRadius;
use Websyspro\Elements\Doms\Icons\IconUlnaRadiusAlt;
use Websyspro\Elements\Doms\Icons\IconUmbrella;
use Websyspro\Elements\Doms\Icons\IconUnarchive;
use Websyspro\Elements\Doms\Icons\IconUndo;
use Websyspro\Elements\Doms\Icons\IconUnfoldLess;
use Websyspro\Elements\Doms\Icons\IconUnfoldLessDouble;
use Websyspro\Elements\Doms\Icons\IconUnfoldMore;
use Websyspro\Elements\Doms\Icons\IconUnfoldMoreDouble;
use Websyspro\Elements\Doms\Icons\IconUngroup;
use Websyspro\Elements\Doms\Icons\IconUniversalCurrency;
use Websyspro\Elements\Doms\Icons\IconUniversalCurrencyAlt;
use Websyspro\Elements\Doms\Icons\IconUniversalLocal;
use Websyspro\Elements\Doms\Icons\IconUnknown2;
use Websyspro\Elements\Doms\Icons\IconUnknown5;
use Websyspro\Elements\Doms\Icons\IconUnknown7;
use Websyspro\Elements\Doms\Icons\IconUnknownDocument;
use Websyspro\Elements\Doms\Icons\IconUnknownMed;
use Websyspro\Elements\Doms\Icons\IconUnlicense;
use Websyspro\Elements\Doms\Icons\IconUnpavedRoad;
use Websyspro\Elements\Doms\Icons\IconUnpublished;
use Websyspro\Elements\Doms\Icons\IconUnsubscribe;
use Websyspro\Elements\Doms\Icons\IconUpcoming;
use Websyspro\Elements\Doms\Icons\IconUpdate;
use Websyspro\Elements\Doms\Icons\IconUpdateDisabled;
use Websyspro\Elements\Doms\Icons\IconUpgrade;
use Websyspro\Elements\Doms\Icons\IconUpiPay;
use Websyspro\Elements\Doms\Icons\IconUpload;
use Websyspro\Elements\Doms\Icons\IconUpload2;
use Websyspro\Elements\Doms\Icons\IconUploadFile;
use Websyspro\Elements\Doms\Icons\IconUppercase;
use Websyspro\Elements\Doms\Icons\IconUrology;
use Websyspro\Elements\Doms\Icons\IconUsb;
use Websyspro\Elements\Doms\Icons\IconUsbOff;
use Websyspro\Elements\Doms\Icons\IconUserAttributes;
use Websyspro\Elements\Doms\Icons\IconUTurnLeft;
use Websyspro\Elements\Doms\Icons\IconUTurnRight;
use Websyspro\Elements\Doms\Icons\IconVaccines;
use Websyspro\Elements\Doms\Icons\IconVacuum;
use Websyspro\Elements\Doms\Icons\IconValve;
use Websyspro\Elements\Doms\Icons\IconVapeFree;
use Websyspro\Elements\Doms\Icons\IconVapingRooms;
use Websyspro\Elements\Doms\Icons\IconVariableAdd;
use Websyspro\Elements\Doms\Icons\IconVariableInsert;
use Websyspro\Elements\Doms\Icons\IconVariableRemove;
use Websyspro\Elements\Doms\Icons\IconVariables;
use Websyspro\Elements\Doms\Icons\IconVentilator;
use Websyspro\Elements\Doms\Icons\IconVerified;
use Websyspro\Elements\Doms\Icons\IconVerifiedUser;
use Websyspro\Elements\Doms\Icons\IconVerticalAlignBottom;
use Websyspro\Elements\Doms\Icons\IconVerticalAlignCenter;
use Websyspro\Elements\Doms\Icons\IconVerticalAlignTop;
use Websyspro\Elements\Doms\Icons\IconVerticalDistribute;
use Websyspro\Elements\Doms\Icons\IconVerticalShades;
use Websyspro\Elements\Doms\Icons\IconVerticalShadesClosed;
use Websyspro\Elements\Doms\Icons\IconVerticalSplit;
use Websyspro\Elements\Doms\Icons\IconVibration;
use Websyspro\Elements\Doms\Icons\IconVideoCall;
use Websyspro\Elements\Doms\Icons\IconVideocam;
use Websyspro\Elements\Doms\Icons\IconVideocamAlert;
use Websyspro\Elements\Doms\Icons\IconVideoCameraBack;
use Websyspro\Elements\Doms\Icons\IconVideoCameraBackAdd;
use Websyspro\Elements\Doms\Icons\IconVideoCameraFront;
use Websyspro\Elements\Doms\Icons\IconVideoCameraFrontOff;
use Websyspro\Elements\Doms\Icons\IconVideocamOff;
use Websyspro\Elements\Doms\Icons\IconVideoChat;
use Websyspro\Elements\Doms\Icons\IconVideoFile;
use Websyspro\Elements\Doms\Icons\IconVideogameAsset;
use Websyspro\Elements\Doms\Icons\IconVideogameAssetOff;
use Websyspro\Elements\Doms\Icons\IconVideoLabel;
use Websyspro\Elements\Doms\Icons\IconVideoLibrary;
use Websyspro\Elements\Doms\Icons\IconVideoSearch;
use Websyspro\Elements\Doms\Icons\IconVideoSettings;
use Websyspro\Elements\Doms\Icons\IconVideoStable;
use Websyspro\Elements\Doms\Icons\IconViewAgenda;
use Websyspro\Elements\Doms\Icons\IconViewApps;
use Websyspro\Elements\Doms\Icons\IconViewArray;
use Websyspro\Elements\Doms\Icons\IconViewCarousel;
use Websyspro\Elements\Doms\Icons\IconViewColumn;
use Websyspro\Elements\Doms\Icons\IconViewColumn2;
use Websyspro\Elements\Doms\Icons\IconViewComfy;
use Websyspro\Elements\Doms\Icons\IconViewComfyAlt;
use Websyspro\Elements\Doms\Icons\IconViewCompact;
use Websyspro\Elements\Doms\Icons\IconViewCompactAlt;
use Websyspro\Elements\Doms\Icons\IconViewCozy;
use Websyspro\Elements\Doms\Icons\IconViewDay;
use Websyspro\Elements\Doms\Icons\IconViewHeadline;
use Websyspro\Elements\Doms\Icons\IconViewInAr;
use Websyspro\Elements\Doms\Icons\IconViewInArOff;
use Websyspro\Elements\Doms\Icons\IconViewKanban;
use Websyspro\Elements\Doms\Icons\IconViewList;
use Websyspro\Elements\Doms\Icons\IconViewModule;
use Websyspro\Elements\Doms\Icons\IconViewObjectTrack;
use Websyspro\Elements\Doms\Icons\IconViewQuilt;
use Websyspro\Elements\Doms\Icons\IconViewRealSize;
use Websyspro\Elements\Doms\Icons\IconViewSidebar;
use Websyspro\Elements\Doms\Icons\IconViewStream;
use Websyspro\Elements\Doms\Icons\IconViewTimeline;
use Websyspro\Elements\Doms\Icons\IconViewWeek;
use Websyspro\Elements\Doms\Icons\IconVignette;
use Websyspro\Elements\Doms\Icons\IconVilla;
use Websyspro\Elements\Doms\Icons\IconVisibility;
use Websyspro\Elements\Doms\Icons\IconVisibilityLock;
use Websyspro\Elements\Doms\Icons\IconVisibilityOff;
use Websyspro\Elements\Doms\Icons\IconVitalSigns;
use Websyspro\Elements\Doms\Icons\IconVo2Max;
use Websyspro\Elements\Doms\Icons\IconVoiceChat;
use Websyspro\Elements\Doms\Icons\IconVoicemail;
use Websyspro\Elements\Doms\Icons\IconVoiceOverOff;
use Websyspro\Elements\Doms\Icons\IconVoiceSelection;
use Websyspro\Elements\Doms\Icons\IconVoiceSelectionOff;
use Websyspro\Elements\Doms\Icons\IconVolcano;
use Websyspro\Elements\Doms\Icons\IconVolumeDown;
use Websyspro\Elements\Doms\Icons\IconVolumeDownAlt;
use Websyspro\Elements\Doms\Icons\IconVolumeMute;
use Websyspro\Elements\Doms\Icons\IconVolumeOff;
use Websyspro\Elements\Doms\Icons\IconVolumeUp;
use Websyspro\Elements\Doms\Icons\IconVolunteerActivism;
use Websyspro\Elements\Doms\Icons\IconVotingChip;
use Websyspro\Elements\Doms\Icons\IconVpnKey;
use Websyspro\Elements\Doms\Icons\IconVpnKeyAlert;
use Websyspro\Elements\Doms\Icons\IconVpnKeyOff;
use Websyspro\Elements\Doms\Icons\IconVpnLock;
use Websyspro\Elements\Doms\Icons\IconVr180Create2d;
use Websyspro\Elements\Doms\Icons\IconVr180Create2dOff;
use Websyspro\Elements\Doms\Icons\IconVrpano;
use Websyspro\Elements\Doms\Icons\IconWallArt;
use Websyspro\Elements\Doms\Icons\IconWallet;
use Websyspro\Elements\Doms\Icons\IconWallLamp;
use Websyspro\Elements\Doms\Icons\IconWallpaper;
use Websyspro\Elements\Doms\Icons\IconWallpaperSlideshow;
use Websyspro\Elements\Doms\Icons\IconWard;
use Websyspro\Elements\Doms\Icons\IconWarehouse;
use Websyspro\Elements\Doms\Icons\IconWarning;
use Websyspro\Elements\Doms\Icons\IconWarningOff;
use Websyspro\Elements\Doms\Icons\IconWash;
use Websyspro\Elements\Doms\Icons\IconWatch;
use Websyspro\Elements\Doms\Icons\IconWatchButtonPress;
use Websyspro\Elements\Doms\Icons\IconWatchCheck;
use Websyspro\Elements\Doms\Icons\IconWatchOff;
use Websyspro\Elements\Doms\Icons\IconWatchScreentime;
use Websyspro\Elements\Doms\Icons\IconWatchVibration;
use Websyspro\Elements\Doms\Icons\IconWatchWake;
use Websyspro\Elements\Doms\Icons\IconWater;
use Websyspro\Elements\Doms\Icons\IconWaterBottle;
use Websyspro\Elements\Doms\Icons\IconWaterBottleLarge;
use Websyspro\Elements\Doms\Icons\IconWaterDamage;
use Websyspro\Elements\Doms\Icons\IconWaterDo;
use Websyspro\Elements\Doms\Icons\IconWaterDrop;
use Websyspro\Elements\Doms\Icons\IconWaterEc;
use Websyspro\Elements\Doms\Icons\IconWaterfallChart;
use Websyspro\Elements\Doms\Icons\IconWaterFull;
use Websyspro\Elements\Doms\Icons\IconWaterHeater;
use Websyspro\Elements\Doms\Icons\IconWaterLock;
use Websyspro\Elements\Doms\Icons\IconWaterLoss;
use Websyspro\Elements\Doms\Icons\IconWaterLux;
use Websyspro\Elements\Doms\Icons\IconWaterMedium;
use Websyspro\Elements\Doms\Icons\IconWaterOrp;
use Websyspro\Elements\Doms\Icons\IconWaterPh;
use Websyspro\Elements\Doms\Icons\IconWaterPump;
use Websyspro\Elements\Doms\Icons\IconWaterVoc;
use Websyspro\Elements\Doms\Icons\IconWaves;
use Websyspro\Elements\Doms\Icons\IconWavingHand;
use Websyspro\Elements\Doms\Icons\IconWbAuto;
use Websyspro\Elements\Doms\Icons\IconWbIncandescent;
use Websyspro\Elements\Doms\Icons\IconWbIridescent;
use Websyspro\Elements\Doms\Icons\IconWbShade;
use Websyspro\Elements\Doms\Icons\IconWbSunny;
use Websyspro\Elements\Doms\Icons\IconWbTwilight;
use Websyspro\Elements\Doms\Icons\IconWc;
use Websyspro\Elements\Doms\Icons\IconWeatherHail;
use Websyspro\Elements\Doms\Icons\IconWeatherMix;
use Websyspro\Elements\Doms\Icons\IconWeatherSnowy;
use Websyspro\Elements\Doms\Icons\IconWeb;
use Websyspro\Elements\Doms\Icons\IconWebAsset;
use Websyspro\Elements\Doms\Icons\IconWebAssetOff;
use Websyspro\Elements\Doms\Icons\IconWebhook;
use Websyspro\Elements\Doms\Icons\IconWebStories;
use Websyspro\Elements\Doms\Icons\IconWebTraffic;
use Websyspro\Elements\Doms\Icons\IconWeekend;
use Websyspro\Elements\Doms\Icons\IconWeight;
use Websyspro\Elements\Doms\Icons\IconWest;
use Websyspro\Elements\Doms\Icons\IconWhatshot;
use Websyspro\Elements\Doms\Icons\IconWheelchairPickup;
use Websyspro\Elements\Doms\Icons\IconWhereToVote;
use Websyspro\Elements\Doms\Icons\IconWidgetMedium;
use Websyspro\Elements\Doms\Icons\IconWidgets;
use Websyspro\Elements\Doms\Icons\IconWidgetSmall;
use Websyspro\Elements\Doms\Icons\IconWidgetWidth;
use Websyspro\Elements\Doms\Icons\IconWidthFull;
use Websyspro\Elements\Doms\Icons\IconWidthNormal;
use Websyspro\Elements\Doms\Icons\IconWidthWide;
use Websyspro\Elements\Doms\Icons\IconWifi;
use Websyspro\Elements\Doms\Icons\IconWifi1Bar;
use Websyspro\Elements\Doms\Icons\IconWifi2Bar;
use Websyspro\Elements\Doms\Icons\IconWifiAdd;
use Websyspro\Elements\Doms\Icons\IconWifiCalling;
use Websyspro\Elements\Doms\Icons\IconWifiCallingBar1;
use Websyspro\Elements\Doms\Icons\IconWifiCallingBar2;
use Websyspro\Elements\Doms\Icons\IconWifiCallingBar3;
use Websyspro\Elements\Doms\Icons\IconWifiChannel;
use Websyspro\Elements\Doms\Icons\IconWifiFind;
use Websyspro\Elements\Doms\Icons\IconWifiHome;
use Websyspro\Elements\Doms\Icons\IconWifiLock;
use Websyspro\Elements\Doms\Icons\IconWifiNotification;
use Websyspro\Elements\Doms\Icons\IconWifiOff;
use Websyspro\Elements\Doms\Icons\IconWifiPassword;
use Websyspro\Elements\Doms\Icons\IconWifiProtectedSetup;
use Websyspro\Elements\Doms\Icons\IconWifiProxy;
use Websyspro\Elements\Doms\Icons\IconWifiTethering;
use Websyspro\Elements\Doms\Icons\IconWifiTetheringError;
use Websyspro\Elements\Doms\Icons\IconWifiTetheringOff;
use Websyspro\Elements\Doms\Icons\IconWindow;
use Websyspro\Elements\Doms\Icons\IconWindowClosed;
use Websyspro\Elements\Doms\Icons\IconWindowOpen;
use Websyspro\Elements\Doms\Icons\IconWindowSensor;
use Websyspro\Elements\Doms\Icons\IconWindPower;
use Websyspro\Elements\Doms\Icons\IconWineBar;
use Websyspro\Elements\Doms\Icons\IconWoman;
use Websyspro\Elements\Doms\Icons\IconWoman2;
use Websyspro\Elements\Doms\Icons\IconWork;
use Websyspro\Elements\Doms\Icons\IconWorkAlert;
use Websyspro\Elements\Doms\Icons\IconWorkHistory;
use Websyspro\Elements\Doms\Icons\IconWorkspacePremium;
use Websyspro\Elements\Doms\Icons\IconWorkspaces;
use Websyspro\Elements\Doms\Icons\IconWorkUpdate;
use Websyspro\Elements\Doms\Icons\IconWoundsInjuries;
use Websyspro\Elements\Doms\Icons\IconWrapText;
use Websyspro\Elements\Doms\Icons\IconWrist;
use Websyspro\Elements\Doms\Icons\IconWrongLocation;
use Websyspro\Elements\Doms\Icons\IconWysiwyg;
use Websyspro\Elements\Doms\Icons\IconYard;
use Websyspro\Elements\Doms\Icons\IconYourTrips;
use Websyspro\Elements\Doms\Icons\IconYoutubeActivity;
use Websyspro\Elements\Doms\Icons\IconYoutubeSearchedFor;
use Websyspro\Elements\Doms\Icons\IconZonePersonAlert;
use Websyspro\Elements\Doms\Icons\IconZonePersonIdle;
use Websyspro\Elements\Doms\Icons\IconZonePersonUrgent;
use Websyspro\Elements\Doms\Icons\IconZoomIn;
use Websyspro\Elements\Doms\Icons\IconZoomInMap;
use Websyspro\Elements\Doms\Icons\IconZoomOut;
use Websyspro\Elements\Doms\Icons\IconZoomOutMap;
/* End Icons List */

function App(
  mixed ...$childs
): mixed {
  return new App($childs);
}

function DocType(
): DocType {
  return new DocType();
}

function Html(
  mixed ...$childs
): Html {
  return new Html($childs);
}

function Head(
  mixed ...$childs
): Head {
  return new Head($childs);
}

function Meta(
  mixed ...$props
): Meta {
  return new Meta($props);
}

function StyleLink(
  string $href
): StyleLink {
  return new StyleLink($href);
}

function Body(
  mixed ...$childs
): Body {
  return new Body($childs);
}

function Div(
  mixed ...$childs
): Div {
  return new Div($childs);
}

/* Icons */
function Icon10k(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon10k {
	return Icon10k($size, $fill, $iconTypeWeight);
}

function Icon10mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon10mp {
	return Icon10mp($size, $fill, $iconTypeWeight);
}

function Icon11mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon11mp {
	return Icon11mp($size, $fill, $iconTypeWeight);
}

function Icon123(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon123 {
	return Icon123($size, $fill, $iconTypeWeight);
}

function Icon12mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon12mp {
	return Icon12mp($size, $fill, $iconTypeWeight);
}

function Icon13mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon13mp {
	return Icon13mp($size, $fill, $iconTypeWeight);
}

function Icon14mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon14mp {
	return Icon14mp($size, $fill, $iconTypeWeight);
}

function Icon15mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon15mp {
	return Icon15mp($size, $fill, $iconTypeWeight);
}

function Icon16mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon16mp {
	return Icon16mp($size, $fill, $iconTypeWeight);
}

function Icon17mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon17mp {
	return Icon17mp($size, $fill, $iconTypeWeight);
}

function Icon18mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon18mp {
	return Icon18mp($size, $fill, $iconTypeWeight);
}

function Icon18UpRating(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon18UpRating {
	return Icon18UpRating($size, $fill, $iconTypeWeight);
}

function Icon19mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon19mp {
	return Icon19mp($size, $fill, $iconTypeWeight);
}

function Icon1k(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon1k {
	return Icon1k($size, $fill, $iconTypeWeight);
}

function Icon1kPlus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon1kPlus {
	return Icon1kPlus($size, $fill, $iconTypeWeight);
}

function Icon1xMobiledata(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon1xMobiledata {
	return Icon1xMobiledata($size, $fill, $iconTypeWeight);
}

function Icon1xMobiledataBadge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon1xMobiledataBadge {
	return Icon1xMobiledataBadge($size, $fill, $iconTypeWeight);
}

function Icon20mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon20mp {
	return Icon20mp($size, $fill, $iconTypeWeight);
}

function Icon21mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon21mp {
	return Icon21mp($size, $fill, $iconTypeWeight);
}

function Icon22mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon22mp {
	return Icon22mp($size, $fill, $iconTypeWeight);
}

function Icon23mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon23mp {
	return Icon23mp($size, $fill, $iconTypeWeight);
}

function Icon24fpsSelect(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon24fpsSelect {
	return Icon24fpsSelect($size, $fill, $iconTypeWeight);
}

function Icon24mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon24mp {
	return Icon24mp($size, $fill, $iconTypeWeight);
}

function Icon2d(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon2d {
	return Icon2d($size, $fill, $iconTypeWeight);
}

function Icon2k(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon2k {
	return Icon2k($size, $fill, $iconTypeWeight);
}

function Icon2kPlus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon2kPlus {
	return Icon2kPlus($size, $fill, $iconTypeWeight);
}

function Icon2mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon2mp {
	return Icon2mp($size, $fill, $iconTypeWeight);
}

function Icon30fps(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon30fps {
	return Icon30fps($size, $fill, $iconTypeWeight);
}

function Icon30fpsSelect(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon30fpsSelect {
	return Icon30fpsSelect($size, $fill, $iconTypeWeight);
}

function Icon360(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon360 {
	return Icon360($size, $fill, $iconTypeWeight);
}

function Icon3dRotation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon3dRotation {
	return Icon3dRotation($size, $fill, $iconTypeWeight);
}

function Icon3gMobiledata(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon3gMobiledata {
	return Icon3gMobiledata($size, $fill, $iconTypeWeight);
}

function Icon3gMobiledataBadge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon3gMobiledataBadge {
	return Icon3gMobiledataBadge($size, $fill, $iconTypeWeight);
}

function Icon3k(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon3k {
	return Icon3k($size, $fill, $iconTypeWeight);
}

function Icon3kPlus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon3kPlus {
	return Icon3kPlus($size, $fill, $iconTypeWeight);
}

function Icon3mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon3mp {
	return Icon3mp($size, $fill, $iconTypeWeight);
}

function Icon3p(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon3p {
	return Icon3p($size, $fill, $iconTypeWeight);
}

function Icon4gMobiledata(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon4gMobiledata {
	return Icon4gMobiledata($size, $fill, $iconTypeWeight);
}

function Icon4gMobiledataBadge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon4gMobiledataBadge {
	return Icon4gMobiledataBadge($size, $fill, $iconTypeWeight);
}

function Icon4gPlusMobiledata(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon4gPlusMobiledata {
	return Icon4gPlusMobiledata($size, $fill, $iconTypeWeight);
}

function Icon4k(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon4k {
	return Icon4k($size, $fill, $iconTypeWeight);
}

function Icon4kPlus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon4kPlus {
	return Icon4kPlus($size, $fill, $iconTypeWeight);
}

function Icon4mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon4mp {
	return Icon4mp($size, $fill, $iconTypeWeight);
}

function Icon50mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon50mp {
	return Icon50mp($size, $fill, $iconTypeWeight);
}

function Icon5g(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon5g {
	return Icon5g($size, $fill, $iconTypeWeight);
}

function Icon5gMobiledataBadge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon5gMobiledataBadge {
	return Icon5gMobiledataBadge($size, $fill, $iconTypeWeight);
}

function Icon5k(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon5k {
	return Icon5k($size, $fill, $iconTypeWeight);
}

function Icon5kPlus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon5kPlus {
	return Icon5kPlus($size, $fill, $iconTypeWeight);
}

function Icon5mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon5mp {
	return Icon5mp($size, $fill, $iconTypeWeight);
}

function Icon60fps(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon60fps {
	return Icon60fps($size, $fill, $iconTypeWeight);
}

function Icon60fpsSelect(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon60fpsSelect {
	return Icon60fpsSelect($size, $fill, $iconTypeWeight);
}

function Icon6FtApart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon6FtApart {
	return Icon6FtApart($size, $fill, $iconTypeWeight);
}

function Icon6k(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon6k {
	return Icon6k($size, $fill, $iconTypeWeight);
}

function Icon6kPlus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon6kPlus {
	return Icon6kPlus($size, $fill, $iconTypeWeight);
}

function Icon6mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon6mp {
	return Icon6mp($size, $fill, $iconTypeWeight);
}

function Icon7k(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon7k {
	return Icon7k($size, $fill, $iconTypeWeight);
}

function Icon7kPlus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon7kPlus {
	return Icon7kPlus($size, $fill, $iconTypeWeight);
}

function Icon7mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon7mp {
	return Icon7mp($size, $fill, $iconTypeWeight);
}

function Icon8k(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon8k {
	return Icon8k($size, $fill, $iconTypeWeight);
}

function Icon8kPlus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon8kPlus {
	return Icon8kPlus($size, $fill, $iconTypeWeight);
}

function Icon8mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon8mp {
	return Icon8mp($size, $fill, $iconTypeWeight);
}

function Icon9k(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon9k {
	return Icon9k($size, $fill, $iconTypeWeight);
}

function Icon9kPlus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon9kPlus {
	return Icon9kPlus($size, $fill, $iconTypeWeight);
}

function Icon9mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon9mp {
	return Icon9mp($size, $fill, $iconTypeWeight);
}

function IconAbc(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAbc {
	return IconAbc($size, $fill, $iconTypeWeight);
}

function IconAccessibility(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAccessibility {
	return IconAccessibility($size, $fill, $iconTypeWeight);
}

function IconAccessibilityNew(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAccessibilityNew {
	return IconAccessibilityNew($size, $fill, $iconTypeWeight);
}

function IconAccessible(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAccessible {
	return IconAccessible($size, $fill, $iconTypeWeight);
}

function IconAccessibleForward(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAccessibleForward {
	return IconAccessibleForward($size, $fill, $iconTypeWeight);
}

function IconAccountBalance(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAccountBalance {
	return IconAccountBalance($size, $fill, $iconTypeWeight);
}

function IconAccountBalanceWallet(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAccountBalanceWallet {
	return IconAccountBalanceWallet($size, $fill, $iconTypeWeight);
}

function IconAccountBox(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAccountBox {
	return IconAccountBox($size, $fill, $iconTypeWeight);
}

function IconAccountChild(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAccountChild {
	return IconAccountChild($size, $fill, $iconTypeWeight);
}

function IconAccountChildInvert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAccountChildInvert {
	return IconAccountChildInvert($size, $fill, $iconTypeWeight);
}

function IconAccountCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAccountCircle {
	return IconAccountCircle($size, $fill, $iconTypeWeight);
}

function IconAccountCircleOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAccountCircleOff {
	return IconAccountCircleOff($size, $fill, $iconTypeWeight);
}

function IconAccountTree(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAccountTree {
	return IconAccountTree($size, $fill, $iconTypeWeight);
}

function IconActionKey(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconActionKey {
	return IconActionKey($size, $fill, $iconTypeWeight);
}

function IconActivityZone(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconActivityZone {
	return IconActivityZone($size, $fill, $iconTypeWeight);
}

function IconAcUnit(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAcUnit {
	return IconAcUnit($size, $fill, $iconTypeWeight);
}

function IconAcute(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAcute {
	return IconAcute($size, $fill, $iconTypeWeight);
}

function IconAd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAd {
	return IconAd($size, $fill, $iconTypeWeight);
}

function IconAdaptiveAudioMic(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAdaptiveAudioMic {
	return IconAdaptiveAudioMic($size, $fill, $iconTypeWeight);
}

function IconAdaptiveAudioMicOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAdaptiveAudioMicOff {
	return IconAdaptiveAudioMicOff($size, $fill, $iconTypeWeight);
}

function IconAdb(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAdb {
	return IconAdb($size, $fill, $iconTypeWeight);
}

function IconAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAdd {
	return IconAdd($size, $fill, $iconTypeWeight);
}

function IconAdd2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAdd2 {
	return IconAdd2($size, $fill, $iconTypeWeight);
}

function IconAddAd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddAd {
	return IconAddAd($size, $fill, $iconTypeWeight);
}

function IconAddAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddAlert {
	return IconAddAlert($size, $fill, $iconTypeWeight);
}

function IconAddAPhoto(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddAPhoto {
	return IconAddAPhoto($size, $fill, $iconTypeWeight);
}

function IconAddBox(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddBox {
	return IconAddBox($size, $fill, $iconTypeWeight);
}

function IconAddBusiness(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddBusiness {
	return IconAddBusiness($size, $fill, $iconTypeWeight);
}

function IconAddCall(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddCall {
	return IconAddCall($size, $fill, $iconTypeWeight);
}

function IconAddCard(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddCard {
	return IconAddCard($size, $fill, $iconTypeWeight);
}

function IconAddChart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddChart {
	return IconAddChart($size, $fill, $iconTypeWeight);
}

function IconAddCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddCircle {
	return IconAddCircle($size, $fill, $iconTypeWeight);
}

function IconAddColumnLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddColumnLeft {
	return IconAddColumnLeft($size, $fill, $iconTypeWeight);
}

function IconAddColumnRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddColumnRight {
	return IconAddColumnRight($size, $fill, $iconTypeWeight);
}

function IconAddComment(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddComment {
	return IconAddComment($size, $fill, $iconTypeWeight);
}

function IconAddDiamond(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddDiamond {
	return IconAddDiamond($size, $fill, $iconTypeWeight);
}

function IconAddHome(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddHome {
	return IconAddHome($size, $fill, $iconTypeWeight);
}

function IconAddHomeWork(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddHomeWork {
	return IconAddHomeWork($size, $fill, $iconTypeWeight);
}

function IconAddLink(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddLink {
	return IconAddLink($size, $fill, $iconTypeWeight);
}

function IconAddLocation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddLocation {
	return IconAddLocation($size, $fill, $iconTypeWeight);
}

function IconAddLocationAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddLocationAlt {
	return IconAddLocationAlt($size, $fill, $iconTypeWeight);
}

function IconAddModerator(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddModerator {
	return IconAddModerator($size, $fill, $iconTypeWeight);
}

function IconAddNotes(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddNotes {
	return IconAddNotes($size, $fill, $iconTypeWeight);
}

function IconAddPhotoAlternate(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddPhotoAlternate {
	return IconAddPhotoAlternate($size, $fill, $iconTypeWeight);
}

function IconAddReaction(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddReaction {
	return IconAddReaction($size, $fill, $iconTypeWeight);
}

function IconAddRoad(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddRoad {
	return IconAddRoad($size, $fill, $iconTypeWeight);
}

function IconAddRowAbove(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddRowAbove {
	return IconAddRowAbove($size, $fill, $iconTypeWeight);
}

function IconAddRowBelow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddRowBelow {
	return IconAddRowBelow($size, $fill, $iconTypeWeight);
}

function IconAddShoppingCart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddShoppingCart {
	return IconAddShoppingCart($size, $fill, $iconTypeWeight);
}

function IconAddTask(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddTask {
	return IconAddTask($size, $fill, $iconTypeWeight);
}

function IconAddToDrive(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddToDrive {
	return IconAddToDrive($size, $fill, $iconTypeWeight);
}

function IconAddToHomeScreen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddToHomeScreen {
	return IconAddToHomeScreen($size, $fill, $iconTypeWeight);
}

function IconAddToQueue(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddToQueue {
	return IconAddToQueue($size, $fill, $iconTypeWeight);
}

function IconAddTriangle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddTriangle {
	return IconAddTriangle($size, $fill, $iconTypeWeight);
}

function IconAdfScanner(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAdfScanner {
	return IconAdfScanner($size, $fill, $iconTypeWeight);
}

function IconAdGroup(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAdGroup {
	return IconAdGroup($size, $fill, $iconTypeWeight);
}

function IconAdGroupOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAdGroupOff {
	return IconAdGroupOff($size, $fill, $iconTypeWeight);
}

function IconAdjust(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAdjust {
	return IconAdjust($size, $fill, $iconTypeWeight);
}

function IconAdminMeds(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAdminMeds {
	return IconAdminMeds($size, $fill, $iconTypeWeight);
}

function IconAdminPanelSettings(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAdminPanelSettings {
	return IconAdminPanelSettings($size, $fill, $iconTypeWeight);
}

function IconAdOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAdOff {
	return IconAdOff($size, $fill, $iconTypeWeight);
}

function IconAdsClick(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAdsClick {
	return IconAdsClick($size, $fill, $iconTypeWeight);
}

function IconAdUnits(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAdUnits {
	return IconAdUnits($size, $fill, $iconTypeWeight);
}

function IconAgender(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAgender {
	return IconAgender($size, $fill, $iconTypeWeight);
}

function IconAgriculture(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAgriculture {
	return IconAgriculture($size, $fill, $iconTypeWeight);
}

function IconAir(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAir {
	return IconAir($size, $fill, $iconTypeWeight);
}

function IconAirFreshener(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAirFreshener {
	return IconAirFreshener($size, $fill, $iconTypeWeight);
}

function IconAirlines(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAirlines {
	return IconAirlines($size, $fill, $iconTypeWeight);
}

function IconAirlineSeatFlat(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAirlineSeatFlat {
	return IconAirlineSeatFlat($size, $fill, $iconTypeWeight);
}

function IconAirlineSeatFlatAngled(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAirlineSeatFlatAngled {
	return IconAirlineSeatFlatAngled($size, $fill, $iconTypeWeight);
}

function IconAirlineSeatIndividualSuite(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAirlineSeatIndividualSuite {
	return IconAirlineSeatIndividualSuite($size, $fill, $iconTypeWeight);
}

function IconAirlineSeatLegroomExtra(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAirlineSeatLegroomExtra {
	return IconAirlineSeatLegroomExtra($size, $fill, $iconTypeWeight);
}

function IconAirlineSeatLegroomNormal(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAirlineSeatLegroomNormal {
	return IconAirlineSeatLegroomNormal($size, $fill, $iconTypeWeight);
}

function IconAirlineSeatLegroomReduced(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAirlineSeatLegroomReduced {
	return IconAirlineSeatLegroomReduced($size, $fill, $iconTypeWeight);
}

function IconAirlineSeatReclineExtra(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAirlineSeatReclineExtra {
	return IconAirlineSeatReclineExtra($size, $fill, $iconTypeWeight);
}

function IconAirlineSeatReclineNormal(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAirlineSeatReclineNormal {
	return IconAirlineSeatReclineNormal($size, $fill, $iconTypeWeight);
}

function IconAirlineStops(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAirlineStops {
	return IconAirlineStops($size, $fill, $iconTypeWeight);
}

function IconAirplanemodeInactive(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAirplanemodeInactive {
	return IconAirplanemodeInactive($size, $fill, $iconTypeWeight);
}

function IconAirplaneTicket(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAirplaneTicket {
	return IconAirplaneTicket($size, $fill, $iconTypeWeight);
}

function IconAirplay(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAirplay {
	return IconAirplay($size, $fill, $iconTypeWeight);
}

function IconAirportShuttle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAirportShuttle {
	return IconAirportShuttle($size, $fill, $iconTypeWeight);
}

function IconAirPurifier(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAirPurifier {
	return IconAirPurifier($size, $fill, $iconTypeWeight);
}

function IconAirPurifierGen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAirPurifierGen {
	return IconAirPurifierGen($size, $fill, $iconTypeWeight);
}

function IconAirware(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAirware {
	return IconAirware($size, $fill, $iconTypeWeight);
}

function IconAirwave(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAirwave {
	return IconAirwave($size, $fill, $iconTypeWeight);
}

function IconAlarm(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlarm {
	return IconAlarm($size, $fill, $iconTypeWeight);
}

function IconAlarmAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlarmAdd {
	return IconAlarmAdd($size, $fill, $iconTypeWeight);
}

function IconAlarmOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlarmOff {
	return IconAlarmOff($size, $fill, $iconTypeWeight);
}

function IconAlarmOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlarmOn {
	return IconAlarmOn($size, $fill, $iconTypeWeight);
}

function IconAlarmSmartWake(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlarmSmartWake {
	return IconAlarmSmartWake($size, $fill, $iconTypeWeight);
}

function IconAlbum(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlbum {
	return IconAlbum($size, $fill, $iconTypeWeight);
}

function IconAlignCenter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignCenter {
	return IconAlignCenter($size, $fill, $iconTypeWeight);
}

function IconAlignEnd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignEnd {
	return IconAlignEnd($size, $fill, $iconTypeWeight);
}

function IconAlignFlexCenter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignFlexCenter {
	return IconAlignFlexCenter($size, $fill, $iconTypeWeight);
}

function IconAlignFlexEnd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignFlexEnd {
	return IconAlignFlexEnd($size, $fill, $iconTypeWeight);
}

function IconAlignFlexStart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignFlexStart {
	return IconAlignFlexStart($size, $fill, $iconTypeWeight);
}

function IconAlignHorizontalCenter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignHorizontalCenter {
	return IconAlignHorizontalCenter($size, $fill, $iconTypeWeight);
}

function IconAlignHorizontalLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignHorizontalLeft {
	return IconAlignHorizontalLeft($size, $fill, $iconTypeWeight);
}

function IconAlignHorizontalRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignHorizontalRight {
	return IconAlignHorizontalRight($size, $fill, $iconTypeWeight);
}

function IconAlignItemsStretch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignItemsStretch {
	return IconAlignItemsStretch($size, $fill, $iconTypeWeight);
}

function IconAlignJustifyCenter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignJustifyCenter {
	return IconAlignJustifyCenter($size, $fill, $iconTypeWeight);
}

function IconAlignJustifyFlexEnd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignJustifyFlexEnd {
	return IconAlignJustifyFlexEnd($size, $fill, $iconTypeWeight);
}

function IconAlignJustifyFlexStart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignJustifyFlexStart {
	return IconAlignJustifyFlexStart($size, $fill, $iconTypeWeight);
}

function IconAlignJustifySpaceAround(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignJustifySpaceAround {
	return IconAlignJustifySpaceAround($size, $fill, $iconTypeWeight);
}

function IconAlignJustifySpaceBetween(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignJustifySpaceBetween {
	return IconAlignJustifySpaceBetween($size, $fill, $iconTypeWeight);
}

function IconAlignJustifySpaceEven(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignJustifySpaceEven {
	return IconAlignJustifySpaceEven($size, $fill, $iconTypeWeight);
}

function IconAlignJustifyStretch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignJustifyStretch {
	return IconAlignJustifyStretch($size, $fill, $iconTypeWeight);
}

function IconAlignSelfStretch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignSelfStretch {
	return IconAlignSelfStretch($size, $fill, $iconTypeWeight);
}

function IconAlignSpaceAround(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignSpaceAround {
	return IconAlignSpaceAround($size, $fill, $iconTypeWeight);
}

function IconAlignSpaceBetween(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignSpaceBetween {
	return IconAlignSpaceBetween($size, $fill, $iconTypeWeight);
}

function IconAlignSpaceEven(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignSpaceEven {
	return IconAlignSpaceEven($size, $fill, $iconTypeWeight);
}

function IconAlignStart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignStart {
	return IconAlignStart($size, $fill, $iconTypeWeight);
}

function IconAlignStretch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignStretch {
	return IconAlignStretch($size, $fill, $iconTypeWeight);
}

function IconAlignVerticalBottom(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignVerticalBottom {
	return IconAlignVerticalBottom($size, $fill, $iconTypeWeight);
}

function IconAlignVerticalCenter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignVerticalCenter {
	return IconAlignVerticalCenter($size, $fill, $iconTypeWeight);
}

function IconAlignVerticalTop(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignVerticalTop {
	return IconAlignVerticalTop($size, $fill, $iconTypeWeight);
}

function IconAllergies(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAllergies {
	return IconAllergies($size, $fill, $iconTypeWeight);
}

function IconAllergy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAllergy {
	return IconAllergy($size, $fill, $iconTypeWeight);
}

function IconAllInbox(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAllInbox {
	return IconAllInbox($size, $fill, $iconTypeWeight);
}

function IconAllInclusive(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAllInclusive {
	return IconAllInclusive($size, $fill, $iconTypeWeight);
}

function IconAllMatch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAllMatch {
	return IconAllMatch($size, $fill, $iconTypeWeight);
}

function IconAllOut(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAllOut {
	return IconAllOut($size, $fill, $iconTypeWeight);
}

function IconAlternateEmail(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlternateEmail {
	return IconAlternateEmail($size, $fill, $iconTypeWeight);
}

function IconAltitude(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAltitude {
	return IconAltitude($size, $fill, $iconTypeWeight);
}

function IconAltRoute(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAltRoute {
	return IconAltRoute($size, $fill, $iconTypeWeight);
}

function IconAmbulance(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAmbulance {
	return IconAmbulance($size, $fill, $iconTypeWeight);
}

function IconAmend(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAmend {
	return IconAmend($size, $fill, $iconTypeWeight);
}

function IconAmpStories(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAmpStories {
	return IconAmpStories($size, $fill, $iconTypeWeight);
}

function IconAnalytics(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAnalytics {
	return IconAnalytics($size, $fill, $iconTypeWeight);
}

function IconAnchor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAnchor {
	return IconAnchor($size, $fill, $iconTypeWeight);
}

function IconAndroid(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAndroid {
	return IconAndroid($size, $fill, $iconTypeWeight);
}

function IconAnimatedImages(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAnimatedImages {
	return IconAnimatedImages($size, $fill, $iconTypeWeight);
}

function IconAnimation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAnimation {
	return IconAnimation($size, $fill, $iconTypeWeight);
}

function IconAod(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAod {
	return IconAod($size, $fill, $iconTypeWeight);
}

function IconAodTablet(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAodTablet {
	return IconAodTablet($size, $fill, $iconTypeWeight);
}

function IconAodWatch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAodWatch {
	return IconAodWatch($size, $fill, $iconTypeWeight);
}

function IconApartment(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconApartment {
	return IconApartment($size, $fill, $iconTypeWeight);
}

function IconApi(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconApi {
	return IconApi($size, $fill, $iconTypeWeight);
}

function IconApkDocument(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconApkDocument {
	return IconApkDocument($size, $fill, $iconTypeWeight);
}

function IconApkInstall(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconApkInstall {
	return IconApkInstall($size, $fill, $iconTypeWeight);
}

function IconApparel(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconApparel {
	return IconApparel($size, $fill, $iconTypeWeight);
}

function IconAppBadging(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAppBadging {
	return IconAppBadging($size, $fill, $iconTypeWeight);
}

function IconAppBlocking(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAppBlocking {
	return IconAppBlocking($size, $fill, $iconTypeWeight);
}

function IconAppPromo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAppPromo {
	return IconAppPromo($size, $fill, $iconTypeWeight);
}

function IconAppRegistration(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAppRegistration {
	return IconAppRegistration($size, $fill, $iconTypeWeight);
}

function IconApproval(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconApproval {
	return IconApproval($size, $fill, $iconTypeWeight);
}

function IconApprovalDelegation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconApprovalDelegation {
	return IconApprovalDelegation($size, $fill, $iconTypeWeight);
}

function IconApps(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconApps {
	return IconApps($size, $fill, $iconTypeWeight);
}

function IconAppShortcut(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAppShortcut {
	return IconAppShortcut($size, $fill, $iconTypeWeight);
}

function IconAppsOutage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAppsOutage {
	return IconAppsOutage($size, $fill, $iconTypeWeight);
}

function IconAq(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAq {
	return IconAq($size, $fill, $iconTypeWeight);
}

function IconAqIndoor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAqIndoor {
	return IconAqIndoor($size, $fill, $iconTypeWeight);
}

function IconArchitecture(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArchitecture {
	return IconArchitecture($size, $fill, $iconTypeWeight);
}

function IconArchive(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArchive {
	return IconArchive($size, $fill, $iconTypeWeight);
}

function IconAreaChart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAreaChart {
	return IconAreaChart($size, $fill, $iconTypeWeight);
}

function IconArmingCountdown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArmingCountdown {
	return IconArmingCountdown($size, $fill, $iconTypeWeight);
}

function IconArOnYou(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArOnYou {
	return IconArOnYou($size, $fill, $iconTypeWeight);
}

function IconArrowAndEdge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowAndEdge {
	return IconArrowAndEdge($size, $fill, $iconTypeWeight);
}

function IconArrowBack(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowBack {
	return IconArrowBack($size, $fill, $iconTypeWeight);
}

function IconArrowBack2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowBack2 {
	return IconArrowBack2($size, $fill, $iconTypeWeight);
}

function IconArrowBackIos(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowBackIos {
	return IconArrowBackIos($size, $fill, $iconTypeWeight);
}

function IconArrowBackIosNew(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowBackIosNew {
	return IconArrowBackIosNew($size, $fill, $iconTypeWeight);
}

function IconArrowCircleDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowCircleDown {
	return IconArrowCircleDown($size, $fill, $iconTypeWeight);
}

function IconArrowCircleLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowCircleLeft {
	return IconArrowCircleLeft($size, $fill, $iconTypeWeight);
}

function IconArrowCircleRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowCircleRight {
	return IconArrowCircleRight($size, $fill, $iconTypeWeight);
}

function IconArrowCircleUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowCircleUp {
	return IconArrowCircleUp($size, $fill, $iconTypeWeight);
}

function IconArrowCoolDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowCoolDown {
	return IconArrowCoolDown($size, $fill, $iconTypeWeight);
}

function IconArrowDownward(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowDownward {
	return IconArrowDownward($size, $fill, $iconTypeWeight);
}

function IconArrowDownwardAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowDownwardAlt {
	return IconArrowDownwardAlt($size, $fill, $iconTypeWeight);
}

function IconArrowDropDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowDropDown {
	return IconArrowDropDown($size, $fill, $iconTypeWeight);
}

function IconArrowDropDownCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowDropDownCircle {
	return IconArrowDropDownCircle($size, $fill, $iconTypeWeight);
}

function IconArrowDropUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowDropUp {
	return IconArrowDropUp($size, $fill, $iconTypeWeight);
}

function IconArrowForward(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowForward {
	return IconArrowForward($size, $fill, $iconTypeWeight);
}

function IconArrowForwardIos(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowForwardIos {
	return IconArrowForwardIos($size, $fill, $iconTypeWeight);
}

function IconArrowInsert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowInsert {
	return IconArrowInsert($size, $fill, $iconTypeWeight);
}

function IconArrowLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowLeft {
	return IconArrowLeft($size, $fill, $iconTypeWeight);
}

function IconArrowLeftAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowLeftAlt {
	return IconArrowLeftAlt($size, $fill, $iconTypeWeight);
}

function IconArrowMenuClose(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowMenuClose {
	return IconArrowMenuClose($size, $fill, $iconTypeWeight);
}

function IconArrowMenuOpen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowMenuOpen {
	return IconArrowMenuOpen($size, $fill, $iconTypeWeight);
}

function IconArrowOrEdge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowOrEdge {
	return IconArrowOrEdge($size, $fill, $iconTypeWeight);
}

function IconArrowOutward(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowOutward {
	return IconArrowOutward($size, $fill, $iconTypeWeight);
}

function IconArrowRange(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowRange {
	return IconArrowRange($size, $fill, $iconTypeWeight);
}

function IconArrowRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowRight {
	return IconArrowRight($size, $fill, $iconTypeWeight);
}

function IconArrowRightAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowRightAlt {
	return IconArrowRightAlt($size, $fill, $iconTypeWeight);
}

function IconArrowSelectorTool(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowSelectorTool {
	return IconArrowSelectorTool($size, $fill, $iconTypeWeight);
}

function IconArrowsInput(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowsInput {
	return IconArrowsInput($size, $fill, $iconTypeWeight);
}

function IconArrowsMoreDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowsMoreDown {
	return IconArrowsMoreDown($size, $fill, $iconTypeWeight);
}

function IconArrowsMoreUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowsMoreUp {
	return IconArrowsMoreUp($size, $fill, $iconTypeWeight);
}

function IconArrowsOutput(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowsOutput {
	return IconArrowsOutput($size, $fill, $iconTypeWeight);
}

function IconArrowsOutward(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowsOutward {
	return IconArrowsOutward($size, $fill, $iconTypeWeight);
}

function IconArrowSplit(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowSplit {
	return IconArrowSplit($size, $fill, $iconTypeWeight);
}

function IconArrowTopLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowTopLeft {
	return IconArrowTopLeft($size, $fill, $iconTypeWeight);
}

function IconArrowTopRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowTopRight {
	return IconArrowTopRight($size, $fill, $iconTypeWeight);
}

function IconArrowUploadProgress(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowUploadProgress {
	return IconArrowUploadProgress($size, $fill, $iconTypeWeight);
}

function IconArrowUploadReady(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowUploadReady {
	return IconArrowUploadReady($size, $fill, $iconTypeWeight);
}

function IconArrowUpward(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowUpward {
	return IconArrowUpward($size, $fill, $iconTypeWeight);
}

function IconArrowUpwardAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowUpwardAlt {
	return IconArrowUpwardAlt($size, $fill, $iconTypeWeight);
}

function IconArrowWarmUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowWarmUp {
	return IconArrowWarmUp($size, $fill, $iconTypeWeight);
}

function IconArStickers(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArStickers {
	return IconArStickers($size, $fill, $iconTypeWeight);
}

function IconArticle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArticle {
	return IconArticle($size, $fill, $iconTypeWeight);
}

function IconArticleShortcut(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArticleShortcut {
	return IconArticleShortcut($size, $fill, $iconTypeWeight);
}

function IconArtist(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArtist {
	return IconArtist($size, $fill, $iconTypeWeight);
}

function IconArtTrack(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArtTrack {
	return IconArtTrack($size, $fill, $iconTypeWeight);
}

function IconAspectRatio(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAspectRatio {
	return IconAspectRatio($size, $fill, $iconTypeWeight);
}

function IconAssignment(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAssignment {
	return IconAssignment($size, $fill, $iconTypeWeight);
}

function IconAssignmentAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAssignmentAdd {
	return IconAssignmentAdd($size, $fill, $iconTypeWeight);
}

function IconAssignmentInd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAssignmentInd {
	return IconAssignmentInd($size, $fill, $iconTypeWeight);
}

function IconAssignmentLate(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAssignmentLate {
	return IconAssignmentLate($size, $fill, $iconTypeWeight);
}

function IconAssignmentReturn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAssignmentReturn {
	return IconAssignmentReturn($size, $fill, $iconTypeWeight);
}

function IconAssignmentReturned(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAssignmentReturned {
	return IconAssignmentReturned($size, $fill, $iconTypeWeight);
}

function IconAssignmentTurnedIn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAssignmentTurnedIn {
	return IconAssignmentTurnedIn($size, $fill, $iconTypeWeight);
}

function IconAssistantDevice(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAssistantDevice {
	return IconAssistantDevice($size, $fill, $iconTypeWeight);
}

function IconAssistantDirection(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAssistantDirection {
	return IconAssistantDirection($size, $fill, $iconTypeWeight);
}

function IconAssistantNavigation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAssistantNavigation {
	return IconAssistantNavigation($size, $fill, $iconTypeWeight);
}

function IconAssistantOnHub(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAssistantOnHub {
	return IconAssistantOnHub($size, $fill, $iconTypeWeight);
}

function IconAssistWalker(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAssistWalker {
	return IconAssistWalker($size, $fill, $iconTypeWeight);
}

function IconAssuredWorkload(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAssuredWorkload {
	return IconAssuredWorkload($size, $fill, $iconTypeWeight);
}

function IconAsterisk(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAsterisk {
	return IconAsterisk($size, $fill, $iconTypeWeight);
}

function IconAtm(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAtm {
	return IconAtm($size, $fill, $iconTypeWeight);
}

function IconAtr(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAtr {
	return IconAtr($size, $fill, $iconTypeWeight);
}

function IconAttachEmail(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAttachEmail {
	return IconAttachEmail($size, $fill, $iconTypeWeight);
}

function IconAttachFile(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAttachFile {
	return IconAttachFile($size, $fill, $iconTypeWeight);
}

function IconAttachFileAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAttachFileAdd {
	return IconAttachFileAdd($size, $fill, $iconTypeWeight);
}

function IconAttachFileOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAttachFileOff {
	return IconAttachFileOff($size, $fill, $iconTypeWeight);
}

function IconAttachment(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAttachment {
	return IconAttachment($size, $fill, $iconTypeWeight);
}

function IconAttachMoney(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAttachMoney {
	return IconAttachMoney($size, $fill, $iconTypeWeight);
}

function IconAttractions(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAttractions {
	return IconAttractions($size, $fill, $iconTypeWeight);
}

function IconAttribution(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAttribution {
	return IconAttribution($size, $fill, $iconTypeWeight);
}

function IconAudioDescription(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAudioDescription {
	return IconAudioDescription($size, $fill, $iconTypeWeight);
}

function IconAudioFile(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAudioFile {
	return IconAudioFile($size, $fill, $iconTypeWeight);
}

function IconAudioVideoReceiver(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAudioVideoReceiver {
	return IconAudioVideoReceiver($size, $fill, $iconTypeWeight);
}

function IconAutoAwesomeMosaic(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAutoAwesomeMosaic {
	return IconAutoAwesomeMosaic($size, $fill, $iconTypeWeight);
}

function IconAutoAwesomeMotion(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAutoAwesomeMotion {
	return IconAutoAwesomeMotion($size, $fill, $iconTypeWeight);
}

function IconAutoDelete(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAutoDelete {
	return IconAutoDelete($size, $fill, $iconTypeWeight);
}

function IconAutofpsSelect(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAutofpsSelect {
	return IconAutofpsSelect($size, $fill, $iconTypeWeight);
}

function IconAutomation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAutomation {
	return IconAutomation($size, $fill, $iconTypeWeight);
}

function IconAutopause(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAutopause {
	return IconAutopause($size, $fill, $iconTypeWeight);
}

function IconAutoplay(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAutoplay {
	return IconAutoplay($size, $fill, $iconTypeWeight);
}

function IconAutoReadPause(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAutoReadPause {
	return IconAutoReadPause($size, $fill, $iconTypeWeight);
}

function IconAutoReadPlay(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAutoReadPlay {
	return IconAutoReadPlay($size, $fill, $iconTypeWeight);
}

function IconAutorenew(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAutorenew {
	return IconAutorenew($size, $fill, $iconTypeWeight);
}

function IconAutostop(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAutostop {
	return IconAutostop($size, $fill, $iconTypeWeight);
}

function IconAutoStories(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAutoStories {
	return IconAutoStories($size, $fill, $iconTypeWeight);
}

function IconAutoTowing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAutoTowing {
	return IconAutoTowing($size, $fill, $iconTypeWeight);
}

function IconAutoTransmission(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAutoTransmission {
	return IconAutoTransmission($size, $fill, $iconTypeWeight);
}

function IconAv1(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAv1 {
	return IconAv1($size, $fill, $iconTypeWeight);
}

function IconAvc(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAvc {
	return IconAvc($size, $fill, $iconTypeWeight);
}

function IconAvgPace(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAvgPace {
	return IconAvgPace($size, $fill, $iconTypeWeight);
}

function IconAvgTime(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAvgTime {
	return IconAvgTime($size, $fill, $iconTypeWeight);
}

function IconAvTimer(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAvTimer {
	return IconAvTimer($size, $fill, $iconTypeWeight);
}

function IconAwardStar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAwardStar {
	return IconAwardStar($size, $fill, $iconTypeWeight);
}

function IconAzm(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAzm {
	return IconAzm($size, $fill, $iconTypeWeight);
}

function IconBabyChangingStation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBabyChangingStation {
	return IconBabyChangingStation($size, $fill, $iconTypeWeight);
}

function IconBackgroundDotLarge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBackgroundDotLarge {
	return IconBackgroundDotLarge($size, $fill, $iconTypeWeight);
}

function IconBackgroundDotSmall(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBackgroundDotSmall {
	return IconBackgroundDotSmall($size, $fill, $iconTypeWeight);
}

function IconBackgroundGridSmall(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBackgroundGridSmall {
	return IconBackgroundGridSmall($size, $fill, $iconTypeWeight);
}

function IconBackgroundReplace(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBackgroundReplace {
	return IconBackgroundReplace($size, $fill, $iconTypeWeight);
}

function IconBackHand(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBackHand {
	return IconBackHand($size, $fill, $iconTypeWeight);
}

function IconBacklightHigh(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBacklightHigh {
	return IconBacklightHigh($size, $fill, $iconTypeWeight);
}

function IconBacklightHighOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBacklightHighOff {
	return IconBacklightHighOff($size, $fill, $iconTypeWeight);
}

function IconBacklightLow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBacklightLow {
	return IconBacklightLow($size, $fill, $iconTypeWeight);
}

function IconBackpack(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBackpack {
	return IconBackpack($size, $fill, $iconTypeWeight);
}

function IconBackspace(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBackspace {
	return IconBackspace($size, $fill, $iconTypeWeight);
}

function IconBackToTab(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBackToTab {
	return IconBackToTab($size, $fill, $iconTypeWeight);
}

function IconBackup(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBackup {
	return IconBackup($size, $fill, $iconTypeWeight);
}

function IconBackupTable(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBackupTable {
	return IconBackupTable($size, $fill, $iconTypeWeight);
}

function IconBadge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBadge {
	return IconBadge($size, $fill, $iconTypeWeight);
}

function IconBadgeCriticalBattery(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBadgeCriticalBattery {
	return IconBadgeCriticalBattery($size, $fill, $iconTypeWeight);
}

function IconBakeryDining(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBakeryDining {
	return IconBakeryDining($size, $fill, $iconTypeWeight);
}

function IconBalance(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBalance {
	return IconBalance($size, $fill, $iconTypeWeight);
}

function IconBalcony(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBalcony {
	return IconBalcony($size, $fill, $iconTypeWeight);
}

function IconBallot(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBallot {
	return IconBallot($size, $fill, $iconTypeWeight);
}

function IconBarChart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBarChart {
	return IconBarChart($size, $fill, $iconTypeWeight);
}

function IconBarChart4Bars(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBarChart4Bars {
	return IconBarChart4Bars($size, $fill, $iconTypeWeight);
}

function IconBarChartOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBarChartOff {
	return IconBarChartOff($size, $fill, $iconTypeWeight);
}

function IconBarcode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBarcode {
	return IconBarcode($size, $fill, $iconTypeWeight);
}

function IconBarcodeReader(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBarcodeReader {
	return IconBarcodeReader($size, $fill, $iconTypeWeight);
}

function IconBarcodeScanner(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBarcodeScanner {
	return IconBarcodeScanner($size, $fill, $iconTypeWeight);
}

function IconBarefoot(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBarefoot {
	return IconBarefoot($size, $fill, $iconTypeWeight);
}

function IconBatchPrediction(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatchPrediction {
	return IconBatchPrediction($size, $fill, $iconTypeWeight);
}

function IconBathOutdoor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBathOutdoor {
	return IconBathOutdoor($size, $fill, $iconTypeWeight);
}

function IconBathPrivate(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBathPrivate {
	return IconBathPrivate($size, $fill, $iconTypeWeight);
}

function IconBathPublicLarge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBathPublicLarge {
	return IconBathPublicLarge($size, $fill, $iconTypeWeight);
}

function IconBathroom(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBathroom {
	return IconBathroom($size, $fill, $iconTypeWeight);
}

function IconBathtub(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBathtub {
	return IconBathtub($size, $fill, $iconTypeWeight);
}

function IconBattery0Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBattery0Bar {
	return IconBattery0Bar($size, $fill, $iconTypeWeight);
}

function IconBattery1Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBattery1Bar {
	return IconBattery1Bar($size, $fill, $iconTypeWeight);
}

function IconBattery2Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBattery2Bar {
	return IconBattery2Bar($size, $fill, $iconTypeWeight);
}

function IconBattery3Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBattery3Bar {
	return IconBattery3Bar($size, $fill, $iconTypeWeight);
}

function IconBattery4Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBattery4Bar {
	return IconBattery4Bar($size, $fill, $iconTypeWeight);
}

function IconBattery5Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBattery5Bar {
	return IconBattery5Bar($size, $fill, $iconTypeWeight);
}

function IconBattery6Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBattery6Bar {
	return IconBattery6Bar($size, $fill, $iconTypeWeight);
}

function IconBatteryAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryAlert {
	return IconBatteryAlert($size, $fill, $iconTypeWeight);
}

function IconBatteryChange(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryChange {
	return IconBatteryChange($size, $fill, $iconTypeWeight);
}

function IconBatteryCharging20(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryCharging20 {
	return IconBatteryCharging20($size, $fill, $iconTypeWeight);
}

function IconBatteryCharging30(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryCharging30 {
	return IconBatteryCharging30($size, $fill, $iconTypeWeight);
}

function IconBatteryCharging50(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryCharging50 {
	return IconBatteryCharging50($size, $fill, $iconTypeWeight);
}

function IconBatteryCharging60(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryCharging60 {
	return IconBatteryCharging60($size, $fill, $iconTypeWeight);
}

function IconBatteryCharging80(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryCharging80 {
	return IconBatteryCharging80($size, $fill, $iconTypeWeight);
}

function IconBatteryCharging90(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryCharging90 {
	return IconBatteryCharging90($size, $fill, $iconTypeWeight);
}

function IconBatteryChargingFull(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryChargingFull {
	return IconBatteryChargingFull($size, $fill, $iconTypeWeight);
}

function IconBatteryError(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryError {
	return IconBatteryError($size, $fill, $iconTypeWeight);
}

function IconBatteryFull(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryFull {
	return IconBatteryFull($size, $fill, $iconTypeWeight);
}

function IconBatteryFullAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryFullAlt {
	return IconBatteryFullAlt($size, $fill, $iconTypeWeight);
}

function IconBatteryHoriz000(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryHoriz000 {
	return IconBatteryHoriz000($size, $fill, $iconTypeWeight);
}

function IconBatteryHoriz050(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryHoriz050 {
	return IconBatteryHoriz050($size, $fill, $iconTypeWeight);
}

function IconBatteryHoriz075(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryHoriz075 {
	return IconBatteryHoriz075($size, $fill, $iconTypeWeight);
}

function IconBatteryLow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryLow {
	return IconBatteryLow($size, $fill, $iconTypeWeight);
}

function IconBatteryPlus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryPlus {
	return IconBatteryPlus($size, $fill, $iconTypeWeight);
}

function IconBatteryProfile(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryProfile {
	return IconBatteryProfile($size, $fill, $iconTypeWeight);
}

function IconBatterySaver(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatterySaver {
	return IconBatterySaver($size, $fill, $iconTypeWeight);
}

function IconBatteryShare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryShare {
	return IconBatteryShare($size, $fill, $iconTypeWeight);
}

function IconBatteryStatusGood(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryStatusGood {
	return IconBatteryStatusGood($size, $fill, $iconTypeWeight);
}

function IconBatteryUnknown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryUnknown {
	return IconBatteryUnknown($size, $fill, $iconTypeWeight);
}

function IconBatteryVeryLow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryVeryLow {
	return IconBatteryVeryLow($size, $fill, $iconTypeWeight);
}

function IconBeachAccess(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBeachAccess {
	return IconBeachAccess($size, $fill, $iconTypeWeight);
}

function IconBed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBed {
	return IconBed($size, $fill, $iconTypeWeight);
}

function IconBedroomBaby(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBedroomBaby {
	return IconBedroomBaby($size, $fill, $iconTypeWeight);
}

function IconBedroomChild(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBedroomChild {
	return IconBedroomChild($size, $fill, $iconTypeWeight);
}

function IconBedroomParent(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBedroomParent {
	return IconBedroomParent($size, $fill, $iconTypeWeight);
}

function IconBedtime(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBedtime {
	return IconBedtime($size, $fill, $iconTypeWeight);
}

function IconBedtimeOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBedtimeOff {
	return IconBedtimeOff($size, $fill, $iconTypeWeight);
}

function IconBeenhere(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBeenhere {
	return IconBeenhere($size, $fill, $iconTypeWeight);
}

function IconBento(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBento {
	return IconBento($size, $fill, $iconTypeWeight);
}

function IconBia(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBia {
	return IconBia($size, $fill, $iconTypeWeight);
}

function IconBidLandscape(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBidLandscape {
	return IconBidLandscape($size, $fill, $iconTypeWeight);
}

function IconBidLandscapeDisabled(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBidLandscapeDisabled {
	return IconBidLandscapeDisabled($size, $fill, $iconTypeWeight);
}

function IconBigtopUpdates(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBigtopUpdates {
	return IconBigtopUpdates($size, $fill, $iconTypeWeight);
}

function IconBikeDock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBikeDock {
	return IconBikeDock($size, $fill, $iconTypeWeight);
}

function IconBikeLane(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBikeLane {
	return IconBikeLane($size, $fill, $iconTypeWeight);
}

function IconBikeScooter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBikeScooter {
	return IconBikeScooter($size, $fill, $iconTypeWeight);
}

function IconBiotech(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBiotech {
	return IconBiotech($size, $fill, $iconTypeWeight);
}

function IconBlanket(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBlanket {
	return IconBlanket($size, $fill, $iconTypeWeight);
}

function IconBlender(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBlender {
	return IconBlender($size, $fill, $iconTypeWeight);
}

function IconBlind(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBlind {
	return IconBlind($size, $fill, $iconTypeWeight);
}

function IconBlinds(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBlinds {
	return IconBlinds($size, $fill, $iconTypeWeight);
}

function IconBlindsClosed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBlindsClosed {
	return IconBlindsClosed($size, $fill, $iconTypeWeight);
}

function IconBlock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBlock {
	return IconBlock($size, $fill, $iconTypeWeight);
}

function IconBloodPressure(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBloodPressure {
	return IconBloodPressure($size, $fill, $iconTypeWeight);
}

function IconBloodtype(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBloodtype {
	return IconBloodtype($size, $fill, $iconTypeWeight);
}

function IconBluetooth(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBluetooth {
	return IconBluetooth($size, $fill, $iconTypeWeight);
}

function IconBluetoothConnected(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBluetoothConnected {
	return IconBluetoothConnected($size, $fill, $iconTypeWeight);
}

function IconBluetoothDisabled(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBluetoothDisabled {
	return IconBluetoothDisabled($size, $fill, $iconTypeWeight);
}

function IconBluetoothDrive(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBluetoothDrive {
	return IconBluetoothDrive($size, $fill, $iconTypeWeight);
}

function IconBluetoothSearching(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBluetoothSearching {
	return IconBluetoothSearching($size, $fill, $iconTypeWeight);
}

function IconBlurCircular(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBlurCircular {
	return IconBlurCircular($size, $fill, $iconTypeWeight);
}

function IconBlurLinear(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBlurLinear {
	return IconBlurLinear($size, $fill, $iconTypeWeight);
}

function IconBlurMedium(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBlurMedium {
	return IconBlurMedium($size, $fill, $iconTypeWeight);
}

function IconBlurOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBlurOff {
	return IconBlurOff($size, $fill, $iconTypeWeight);
}

function IconBlurOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBlurOn {
	return IconBlurOn($size, $fill, $iconTypeWeight);
}

function IconBlurShort(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBlurShort {
	return IconBlurShort($size, $fill, $iconTypeWeight);
}

function IconBoatBus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBoatBus {
	return IconBoatBus($size, $fill, $iconTypeWeight);
}

function IconBoatRailway(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBoatRailway {
	return IconBoatRailway($size, $fill, $iconTypeWeight);
}

function IconBodyFat(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBodyFat {
	return IconBodyFat($size, $fill, $iconTypeWeight);
}

function IconBodySystem(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBodySystem {
	return IconBodySystem($size, $fill, $iconTypeWeight);
}

function IconBolt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBolt {
	return IconBolt($size, $fill, $iconTypeWeight);
}

function IconBomb(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBomb {
	return IconBomb($size, $fill, $iconTypeWeight);
}

function IconBook(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBook {
	return IconBook($size, $fill, $iconTypeWeight);
}

function IconBook2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBook2 {
	return IconBook2($size, $fill, $iconTypeWeight);
}

function IconBook3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBook3 {
	return IconBook3($size, $fill, $iconTypeWeight);
}

function IconBook4(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBook4 {
	return IconBook4($size, $fill, $iconTypeWeight);
}

function IconBook4Spark(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBook4Spark {
	return IconBook4Spark($size, $fill, $iconTypeWeight);
}

function IconBook5(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBook5 {
	return IconBook5($size, $fill, $iconTypeWeight);
}

function IconBook6(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBook6 {
	return IconBook6($size, $fill, $iconTypeWeight);
}

function IconBookmark(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBookmark {
	return IconBookmark($size, $fill, $iconTypeWeight);
}

function IconBookmarkAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBookmarkAdd {
	return IconBookmarkAdd($size, $fill, $iconTypeWeight);
}

function IconBookmarkAdded(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBookmarkAdded {
	return IconBookmarkAdded($size, $fill, $iconTypeWeight);
}

function IconBookmarkBag(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBookmarkBag {
	return IconBookmarkBag($size, $fill, $iconTypeWeight);
}

function IconBookmarkCheck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBookmarkCheck {
	return IconBookmarkCheck($size, $fill, $iconTypeWeight);
}

function IconBookmarkFlag(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBookmarkFlag {
	return IconBookmarkFlag($size, $fill, $iconTypeWeight);
}

function IconBookmarkHeart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBookmarkHeart {
	return IconBookmarkHeart($size, $fill, $iconTypeWeight);
}

function IconBookmarkManager(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBookmarkManager {
	return IconBookmarkManager($size, $fill, $iconTypeWeight);
}

function IconBookmarkRemove(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBookmarkRemove {
	return IconBookmarkRemove($size, $fill, $iconTypeWeight);
}

function IconBookmarks(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBookmarks {
	return IconBookmarks($size, $fill, $iconTypeWeight);
}

function IconBookmarkStar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBookmarkStar {
	return IconBookmarkStar($size, $fill, $iconTypeWeight);
}

function IconBookOnline(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBookOnline {
	return IconBookOnline($size, $fill, $iconTypeWeight);
}

function IconBookRibbon(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBookRibbon {
	return IconBookRibbon($size, $fill, $iconTypeWeight);
}

function IconBooksMoviesAndMusic(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBooksMoviesAndMusic {
	return IconBooksMoviesAndMusic($size, $fill, $iconTypeWeight);
}

function IconBorderAll(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBorderAll {
	return IconBorderAll($size, $fill, $iconTypeWeight);
}

function IconBorderBottom(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBorderBottom {
	return IconBorderBottom($size, $fill, $iconTypeWeight);
}

function IconBorderClear(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBorderClear {
	return IconBorderClear($size, $fill, $iconTypeWeight);
}

function IconBorderColor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBorderColor {
	return IconBorderColor($size, $fill, $iconTypeWeight);
}

function IconBorderHorizontal(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBorderHorizontal {
	return IconBorderHorizontal($size, $fill, $iconTypeWeight);
}

function IconBorderInner(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBorderInner {
	return IconBorderInner($size, $fill, $iconTypeWeight);
}

function IconBorderLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBorderLeft {
	return IconBorderLeft($size, $fill, $iconTypeWeight);
}

function IconBorderOuter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBorderOuter {
	return IconBorderOuter($size, $fill, $iconTypeWeight);
}

function IconBorderRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBorderRight {
	return IconBorderRight($size, $fill, $iconTypeWeight);
}

function IconBorderStyle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBorderStyle {
	return IconBorderStyle($size, $fill, $iconTypeWeight);
}

function IconBorderTop(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBorderTop {
	return IconBorderTop($size, $fill, $iconTypeWeight);
}

function IconBorderVertical(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBorderVertical {
	return IconBorderVertical($size, $fill, $iconTypeWeight);
}

function IconBorg(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBorg {
	return IconBorg($size, $fill, $iconTypeWeight);
}

function IconBottomAppBar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBottomAppBar {
	return IconBottomAppBar($size, $fill, $iconTypeWeight);
}

function IconBottomDrawer(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBottomDrawer {
	return IconBottomDrawer($size, $fill, $iconTypeWeight);
}

function IconBottomNavigation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBottomNavigation {
	return IconBottomNavigation($size, $fill, $iconTypeWeight);
}

function IconBottomPanelClose(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBottomPanelClose {
	return IconBottomPanelClose($size, $fill, $iconTypeWeight);
}

function IconBottomPanelOpen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBottomPanelOpen {
	return IconBottomPanelOpen($size, $fill, $iconTypeWeight);
}

function IconBottomRightClick(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBottomRightClick {
	return IconBottomRightClick($size, $fill, $iconTypeWeight);
}

function IconBottomSheets(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBottomSheets {
	return IconBottomSheets($size, $fill, $iconTypeWeight);
}

function IconBox(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBox {
	return IconBox($size, $fill, $iconTypeWeight);
}

function IconBoxAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBoxAdd {
	return IconBoxAdd($size, $fill, $iconTypeWeight);
}

function IconBoxEdit(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBoxEdit {
	return IconBoxEdit($size, $fill, $iconTypeWeight);
}

function IconBoy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBoy {
	return IconBoy($size, $fill, $iconTypeWeight);
}

function IconBrandAwareness(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrandAwareness {
	return IconBrandAwareness($size, $fill, $iconTypeWeight);
}

function IconBrandFamily(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrandFamily {
	return IconBrandFamily($size, $fill, $iconTypeWeight);
}

function IconBrandingWatermark(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrandingWatermark {
	return IconBrandingWatermark($size, $fill, $iconTypeWeight);
}

function IconBreakfastDining(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBreakfastDining {
	return IconBreakfastDining($size, $fill, $iconTypeWeight);
}

function IconBreakingNews(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBreakingNews {
	return IconBreakingNews($size, $fill, $iconTypeWeight);
}

function IconBreakingNewsAlt1(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBreakingNewsAlt1 {
	return IconBreakingNewsAlt1($size, $fill, $iconTypeWeight);
}

function IconBreastfeeding(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBreastfeeding {
	return IconBreastfeeding($size, $fill, $iconTypeWeight);
}

function IconBrick(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrick {
	return IconBrick($size, $fill, $iconTypeWeight);
}

function IconBrightness1(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrightness1 {
	return IconBrightness1($size, $fill, $iconTypeWeight);
}

function IconBrightness2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrightness2 {
	return IconBrightness2($size, $fill, $iconTypeWeight);
}

function IconBrightness3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrightness3 {
	return IconBrightness3($size, $fill, $iconTypeWeight);
}

function IconBrightness4(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrightness4 {
	return IconBrightness4($size, $fill, $iconTypeWeight);
}

function IconBrightness5(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrightness5 {
	return IconBrightness5($size, $fill, $iconTypeWeight);
}

function IconBrightness6(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrightness6 {
	return IconBrightness6($size, $fill, $iconTypeWeight);
}

function IconBrightness7(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrightness7 {
	return IconBrightness7($size, $fill, $iconTypeWeight);
}

function IconBrightnessAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrightnessAlert {
	return IconBrightnessAlert($size, $fill, $iconTypeWeight);
}

function IconBrightnessAuto(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrightnessAuto {
	return IconBrightnessAuto($size, $fill, $iconTypeWeight);
}

function IconBrightnessEmpty(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrightnessEmpty {
	return IconBrightnessEmpty($size, $fill, $iconTypeWeight);
}

function IconBrightnessHigh(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrightnessHigh {
	return IconBrightnessHigh($size, $fill, $iconTypeWeight);
}

function IconBrightnessLow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrightnessLow {
	return IconBrightnessLow($size, $fill, $iconTypeWeight);
}

function IconBrightnessMedium(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrightnessMedium {
	return IconBrightnessMedium($size, $fill, $iconTypeWeight);
}

function IconBringYourOwnIp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBringYourOwnIp {
	return IconBringYourOwnIp($size, $fill, $iconTypeWeight);
}

function IconBroadcastOnHome(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBroadcastOnHome {
	return IconBroadcastOnHome($size, $fill, $iconTypeWeight);
}

function IconBroadcastOnPersonal(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBroadcastOnPersonal {
	return IconBroadcastOnPersonal($size, $fill, $iconTypeWeight);
}

function IconBrokenImage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrokenImage {
	return IconBrokenImage($size, $fill, $iconTypeWeight);
}

function IconBrowse(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrowse {
	return IconBrowse($size, $fill, $iconTypeWeight);
}

function IconBrowseActivity(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrowseActivity {
	return IconBrowseActivity($size, $fill, $iconTypeWeight);
}

function IconBrowseGallery(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrowseGallery {
	return IconBrowseGallery($size, $fill, $iconTypeWeight);
}

function IconBrowserUpdated(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrowserUpdated {
	return IconBrowserUpdated($size, $fill, $iconTypeWeight);
}

function IconBrunchDining(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrunchDining {
	return IconBrunchDining($size, $fill, $iconTypeWeight);
}

function IconBrush(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrush {
	return IconBrush($size, $fill, $iconTypeWeight);
}

function IconBubble(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBubble {
	return IconBubble($size, $fill, $iconTypeWeight);
}

function IconBubbleChart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBubbleChart {
	return IconBubbleChart($size, $fill, $iconTypeWeight);
}

function IconBubbles(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBubbles {
	return IconBubbles($size, $fill, $iconTypeWeight);
}

function IconBugReport(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBugReport {
	return IconBugReport($size, $fill, $iconTypeWeight);
}

function IconBuild(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBuild {
	return IconBuild($size, $fill, $iconTypeWeight);
}

function IconBuildCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBuildCircle {
	return IconBuildCircle($size, $fill, $iconTypeWeight);
}

function IconBungalow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBungalow {
	return IconBungalow($size, $fill, $iconTypeWeight);
}

function IconBurstMode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBurstMode {
	return IconBurstMode($size, $fill, $iconTypeWeight);
}

function IconBusAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBusAlert {
	return IconBusAlert($size, $fill, $iconTypeWeight);
}

function IconBusinessCenter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBusinessCenter {
	return IconBusinessCenter($size, $fill, $iconTypeWeight);
}

function IconBusinessChip(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBusinessChip {
	return IconBusinessChip($size, $fill, $iconTypeWeight);
}

function IconBusinessMessages(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBusinessMessages {
	return IconBusinessMessages($size, $fill, $iconTypeWeight);
}

function IconBusRailway(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBusRailway {
	return IconBusRailway($size, $fill, $iconTypeWeight);
}

function IconButtonsAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconButtonsAlt {
	return IconButtonsAlt($size, $fill, $iconTypeWeight);
}

function IconCabin(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCabin {
	return IconCabin($size, $fill, $iconTypeWeight);
}

function IconCable(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCable {
	return IconCable($size, $fill, $iconTypeWeight);
}

function IconCableCar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCableCar {
	return IconCableCar($size, $fill, $iconTypeWeight);
}

function IconCached(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCached {
	return IconCached($size, $fill, $iconTypeWeight);
}

function IconCadence(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCadence {
	return IconCadence($size, $fill, $iconTypeWeight);
}

function IconCake(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCake {
	return IconCake($size, $fill, $iconTypeWeight);
}

function IconCakeAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCakeAdd {
	return IconCakeAdd($size, $fill, $iconTypeWeight);
}

function IconCalculate(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCalculate {
	return IconCalculate($size, $fill, $iconTypeWeight);
}

function IconCalendarAddOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCalendarAddOn {
	return IconCalendarAddOn($size, $fill, $iconTypeWeight);
}

function IconCalendarAppsScript(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCalendarAppsScript {
	return IconCalendarAppsScript($size, $fill, $iconTypeWeight);
}

function IconCalendarClock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCalendarClock {
	return IconCalendarClock($size, $fill, $iconTypeWeight);
}

function IconCalendarMonth(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCalendarMonth {
	return IconCalendarMonth($size, $fill, $iconTypeWeight);
}

function IconCalendarToday(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCalendarToday {
	return IconCalendarToday($size, $fill, $iconTypeWeight);
}

function IconCalendarViewDay(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCalendarViewDay {
	return IconCalendarViewDay($size, $fill, $iconTypeWeight);
}

function IconCalendarViewMonth(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCalendarViewMonth {
	return IconCalendarViewMonth($size, $fill, $iconTypeWeight);
}

function IconCalendarViewWeek(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCalendarViewWeek {
	return IconCalendarViewWeek($size, $fill, $iconTypeWeight);
}

function IconCall(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCall {
	return IconCall($size, $fill, $iconTypeWeight);
}

function IconCallEnd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCallEnd {
	return IconCallEnd($size, $fill, $iconTypeWeight);
}

function IconCallLog(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCallLog {
	return IconCallLog($size, $fill, $iconTypeWeight);
}

function IconCallMade(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCallMade {
	return IconCallMade($size, $fill, $iconTypeWeight);
}

function IconCallMerge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCallMerge {
	return IconCallMerge($size, $fill, $iconTypeWeight);
}

function IconCallMissed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCallMissed {
	return IconCallMissed($size, $fill, $iconTypeWeight);
}

function IconCallMissedOutgoing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCallMissedOutgoing {
	return IconCallMissedOutgoing($size, $fill, $iconTypeWeight);
}

function IconCallQuality(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCallQuality {
	return IconCallQuality($size, $fill, $iconTypeWeight);
}

function IconCallReceived(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCallReceived {
	return IconCallReceived($size, $fill, $iconTypeWeight);
}

function IconCallSplit(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCallSplit {
	return IconCallSplit($size, $fill, $iconTypeWeight);
}

function IconCallToAction(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCallToAction {
	return IconCallToAction($size, $fill, $iconTypeWeight);
}

function IconCamera(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCamera {
	return IconCamera($size, $fill, $iconTypeWeight);
}

function IconCameraFront(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCameraFront {
	return IconCameraFront($size, $fill, $iconTypeWeight);
}

function IconCameraIndoor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCameraIndoor {
	return IconCameraIndoor($size, $fill, $iconTypeWeight);
}

function IconCameraOutdoor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCameraOutdoor {
	return IconCameraOutdoor($size, $fill, $iconTypeWeight);
}

function IconCameraRear(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCameraRear {
	return IconCameraRear($size, $fill, $iconTypeWeight);
}

function IconCameraRoll(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCameraRoll {
	return IconCameraRoll($size, $fill, $iconTypeWeight);
}

function IconCameraswitch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCameraswitch {
	return IconCameraswitch($size, $fill, $iconTypeWeight);
}

function IconCameraVideo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCameraVideo {
	return IconCameraVideo($size, $fill, $iconTypeWeight);
}

function IconCampaign(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCampaign {
	return IconCampaign($size, $fill, $iconTypeWeight);
}

function IconCamping(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCamping {
	return IconCamping($size, $fill, $iconTypeWeight);
}

function IconCancel(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCancel {
	return IconCancel($size, $fill, $iconTypeWeight);
}

function IconCancelPresentation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCancelPresentation {
	return IconCancelPresentation($size, $fill, $iconTypeWeight);
}

function IconCancelScheduleSend(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCancelScheduleSend {
	return IconCancelScheduleSend($size, $fill, $iconTypeWeight);
}

function IconCandle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCandle {
	return IconCandle($size, $fill, $iconTypeWeight);
}

function IconCandlestickChart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCandlestickChart {
	return IconCandlestickChart($size, $fill, $iconTypeWeight);
}

function IconCaptivePortal(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCaptivePortal {
	return IconCaptivePortal($size, $fill, $iconTypeWeight);
}

function IconCapture(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCapture {
	return IconCapture($size, $fill, $iconTypeWeight);
}

function IconCarCrash(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCarCrash {
	return IconCarCrash($size, $fill, $iconTypeWeight);
}

function IconCardioLoad(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCardioLoad {
	return IconCardioLoad($size, $fill, $iconTypeWeight);
}

function IconCardiology(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCardiology {
	return IconCardiology($size, $fill, $iconTypeWeight);
}

function IconCardMembership(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCardMembership {
	return IconCardMembership($size, $fill, $iconTypeWeight);
}

function IconCards(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCards {
	return IconCards($size, $fill, $iconTypeWeight);
}

function IconCardsStar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCardsStar {
	return IconCardsStar($size, $fill, $iconTypeWeight);
}

function IconCardTravel(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCardTravel {
	return IconCardTravel($size, $fill, $iconTypeWeight);
}

function IconCarpenter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCarpenter {
	return IconCarpenter($size, $fill, $iconTypeWeight);
}

function IconCarRental(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCarRental {
	return IconCarRental($size, $fill, $iconTypeWeight);
}

function IconCarRepair(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCarRepair {
	return IconCarRepair($size, $fill, $iconTypeWeight);
}

function IconCarryOnBag(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCarryOnBag {
	return IconCarryOnBag($size, $fill, $iconTypeWeight);
}

function IconCarryOnBagChecked(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCarryOnBagChecked {
	return IconCarryOnBagChecked($size, $fill, $iconTypeWeight);
}

function IconCarryOnBagInactive(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCarryOnBagInactive {
	return IconCarryOnBagInactive($size, $fill, $iconTypeWeight);
}

function IconCarryOnBagQuestion(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCarryOnBagQuestion {
	return IconCarryOnBagQuestion($size, $fill, $iconTypeWeight);
}

function IconCarTag(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCarTag {
	return IconCarTag($size, $fill, $iconTypeWeight);
}

function IconCases(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCases {
	return IconCases($size, $fill, $iconTypeWeight);
}

function IconCasino(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCasino {
	return IconCasino($size, $fill, $iconTypeWeight);
}

function IconCast(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCast {
	return IconCast($size, $fill, $iconTypeWeight);
}

function IconCastConnected(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCastConnected {
	return IconCastConnected($size, $fill, $iconTypeWeight);
}

function IconCastForEducation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCastForEducation {
	return IconCastForEducation($size, $fill, $iconTypeWeight);
}

function IconCastle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCastle {
	return IconCastle($size, $fill, $iconTypeWeight);
}

function IconCastPause(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCastPause {
	return IconCastPause($size, $fill, $iconTypeWeight);
}

function IconCastWarning(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCastWarning {
	return IconCastWarning($size, $fill, $iconTypeWeight);
}

function IconCategory(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCategory {
	return IconCategory($size, $fill, $iconTypeWeight);
}

function IconCategorySearch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCategorySearch {
	return IconCategorySearch($size, $fill, $iconTypeWeight);
}

function IconCelebration(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCelebration {
	return IconCelebration($size, $fill, $iconTypeWeight);
}

function IconCellMerge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCellMerge {
	return IconCellMerge($size, $fill, $iconTypeWeight);
}

function IconCellTower(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCellTower {
	return IconCellTower($size, $fill, $iconTypeWeight);
}

function IconCellWifi(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCellWifi {
	return IconCellWifi($size, $fill, $iconTypeWeight);
}

function IconCenterFocusStrong(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCenterFocusStrong {
	return IconCenterFocusStrong($size, $fill, $iconTypeWeight);
}

function IconCenterFocusWeak(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCenterFocusWeak {
	return IconCenterFocusWeak($size, $fill, $iconTypeWeight);
}

function IconChair(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChair {
	return IconChair($size, $fill, $iconTypeWeight);
}

function IconChairAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChairAlt {
	return IconChairAlt($size, $fill, $iconTypeWeight);
}

function IconChalet(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChalet {
	return IconChalet($size, $fill, $iconTypeWeight);
}

function IconChangeCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChangeCircle {
	return IconChangeCircle($size, $fill, $iconTypeWeight);
}

function IconChangeHistory(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChangeHistory {
	return IconChangeHistory($size, $fill, $iconTypeWeight);
}

function IconCharger(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCharger {
	return IconCharger($size, $fill, $iconTypeWeight);
}

function IconChargingStation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChargingStation {
	return IconChargingStation($size, $fill, $iconTypeWeight);
}

function IconChartData(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChartData {
	return IconChartData($size, $fill, $iconTypeWeight);
}

function IconChat(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChat {
	return IconChat($size, $fill, $iconTypeWeight);
}

function IconChatAddOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChatAddOn {
	return IconChatAddOn($size, $fill, $iconTypeWeight);
}

function IconChatAppsScript(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChatAppsScript {
	return IconChatAppsScript($size, $fill, $iconTypeWeight);
}

function IconChatBubble(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChatBubble {
	return IconChatBubble($size, $fill, $iconTypeWeight);
}

function IconChatError(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChatError {
	return IconChatError($size, $fill, $iconTypeWeight);
}

function IconChatInfo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChatInfo {
	return IconChatInfo($size, $fill, $iconTypeWeight);
}

function IconChatPasteGo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChatPasteGo {
	return IconChatPasteGo($size, $fill, $iconTypeWeight);
}

function IconChatPasteGo2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChatPasteGo2 {
	return IconChatPasteGo2($size, $fill, $iconTypeWeight);
}

function IconCheck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCheck {
	return IconCheck($size, $fill, $iconTypeWeight);
}

function IconCheckbook(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCheckbook {
	return IconCheckbook($size, $fill, $iconTypeWeight);
}

function IconCheckBox(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCheckBox {
	return IconCheckBox($size, $fill, $iconTypeWeight);
}

function IconCheckBoxOutlineBlank(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCheckBoxOutlineBlank {
	return IconCheckBoxOutlineBlank($size, $fill, $iconTypeWeight);
}

function IconCheckCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCheckCircle {
	return IconCheckCircle($size, $fill, $iconTypeWeight);
}

function IconCheckedBag(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCheckedBag {
	return IconCheckedBag($size, $fill, $iconTypeWeight);
}

function IconCheckedBagQuestion(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCheckedBagQuestion {
	return IconCheckedBagQuestion($size, $fill, $iconTypeWeight);
}

function IconCheckIndeterminateSmall(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCheckIndeterminateSmall {
	return IconCheckIndeterminateSmall($size, $fill, $iconTypeWeight);
}

function IconCheckInOut(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCheckInOut {
	return IconCheckInOut($size, $fill, $iconTypeWeight);
}

function IconChecklist(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChecklist {
	return IconChecklist($size, $fill, $iconTypeWeight);
}

function IconChecklistRtl(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChecklistRtl {
	return IconChecklistRtl($size, $fill, $iconTypeWeight);
}

function IconCheckroom(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCheckroom {
	return IconCheckroom($size, $fill, $iconTypeWeight);
}

function IconCheckSmall(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCheckSmall {
	return IconCheckSmall($size, $fill, $iconTypeWeight);
}

function IconCheer(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCheer {
	return IconCheer($size, $fill, $iconTypeWeight);
}

function IconChess(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChess {
	return IconChess($size, $fill, $iconTypeWeight);
}

function IconChessPawn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChessPawn {
	return IconChessPawn($size, $fill, $iconTypeWeight);
}

function IconChevronBackward(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChevronBackward {
	return IconChevronBackward($size, $fill, $iconTypeWeight);
}

function IconChevronForward(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChevronForward {
	return IconChevronForward($size, $fill, $iconTypeWeight);
}

function IconChevronLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChevronLeft {
	return IconChevronLeft($size, $fill, $iconTypeWeight);
}

function IconChevronRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChevronRight {
	return IconChevronRight($size, $fill, $iconTypeWeight);
}

function IconChildCare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChildCare {
	return IconChildCare($size, $fill, $iconTypeWeight);
}

function IconChildFriendly(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChildFriendly {
	return IconChildFriendly($size, $fill, $iconTypeWeight);
}

function IconChipExtraction(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChipExtraction {
	return IconChipExtraction($size, $fill, $iconTypeWeight);
}

function IconChips(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChips {
	return IconChips($size, $fill, $iconTypeWeight);
}

function IconChromecast2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChromecast2 {
	return IconChromecast2($size, $fill, $iconTypeWeight);
}

function IconChromecastDevice(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChromecastDevice {
	return IconChromecastDevice($size, $fill, $iconTypeWeight);
}

function IconChromeReaderMode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChromeReaderMode {
	return IconChromeReaderMode($size, $fill, $iconTypeWeight);
}

function IconChronic(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChronic {
	return IconChronic($size, $fill, $iconTypeWeight);
}

function IconChurch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChurch {
	return IconChurch($size, $fill, $iconTypeWeight);
}

function IconCinematicBlur(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCinematicBlur {
	return IconCinematicBlur($size, $fill, $iconTypeWeight);
}

function IconCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCircle {
	return IconCircle($size, $fill, $iconTypeWeight);
}

function IconCircleNotifications(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCircleNotifications {
	return IconCircleNotifications($size, $fill, $iconTypeWeight);
}

function IconCircles(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCircles {
	return IconCircles($size, $fill, $iconTypeWeight);
}

function IconCirclesExt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCirclesExt {
	return IconCirclesExt($size, $fill, $iconTypeWeight);
}

function IconClarify(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconClarify {
	return IconClarify($size, $fill, $iconTypeWeight);
}

function IconCleanHands(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCleanHands {
	return IconCleanHands($size, $fill, $iconTypeWeight);
}

function IconCleaning(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCleaning {
	return IconCleaning($size, $fill, $iconTypeWeight);
}

function IconCleaningBucket(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCleaningBucket {
	return IconCleaningBucket($size, $fill, $iconTypeWeight);
}

function IconCleaningServices(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCleaningServices {
	return IconCleaningServices($size, $fill, $iconTypeWeight);
}

function IconClearAll(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconClearAll {
	return IconClearAll($size, $fill, $iconTypeWeight);
}

function IconClearDay(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconClearDay {
	return IconClearDay($size, $fill, $iconTypeWeight);
}

function IconClimateMiniSplit(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconClimateMiniSplit {
	return IconClimateMiniSplit($size, $fill, $iconTypeWeight);
}

function IconClinicalNotes(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconClinicalNotes {
	return IconClinicalNotes($size, $fill, $iconTypeWeight);
}

function IconClockArrowDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconClockArrowDown {
	return IconClockArrowDown($size, $fill, $iconTypeWeight);
}

function IconClockArrowUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconClockArrowUp {
	return IconClockArrowUp($size, $fill, $iconTypeWeight);
}

function IconClockLoader10(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconClockLoader10 {
	return IconClockLoader10($size, $fill, $iconTypeWeight);
}

function IconClockLoader20(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconClockLoader20 {
	return IconClockLoader20($size, $fill, $iconTypeWeight);
}

function IconClockLoader40(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconClockLoader40 {
	return IconClockLoader40($size, $fill, $iconTypeWeight);
}

function IconClockLoader60(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconClockLoader60 {
	return IconClockLoader60($size, $fill, $iconTypeWeight);
}

function IconClockLoader80(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconClockLoader80 {
	return IconClockLoader80($size, $fill, $iconTypeWeight);
}

function IconClockLoader90(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconClockLoader90 {
	return IconClockLoader90($size, $fill, $iconTypeWeight);
}

function IconClose(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconClose {
	return IconClose($size, $fill, $iconTypeWeight);
}

function IconClosedCaption(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconClosedCaption {
	return IconClosedCaption($size, $fill, $iconTypeWeight);
}

function IconClosedCaptionAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconClosedCaptionAdd {
	return IconClosedCaptionAdd($size, $fill, $iconTypeWeight);
}

function IconClosedCaptionDisabled(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconClosedCaptionDisabled {
	return IconClosedCaptionDisabled($size, $fill, $iconTypeWeight);
}

function IconCloseFullscreen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCloseFullscreen {
	return IconCloseFullscreen($size, $fill, $iconTypeWeight);
}

function IconCloseSmall(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCloseSmall {
	return IconCloseSmall($size, $fill, $iconTypeWeight);
}

function IconCloud(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCloud {
	return IconCloud($size, $fill, $iconTypeWeight);
}

function IconCloudAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCloudAlert {
	return IconCloudAlert($size, $fill, $iconTypeWeight);
}

function IconCloudCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCloudCircle {
	return IconCloudCircle($size, $fill, $iconTypeWeight);
}

function IconCloudDone(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCloudDone {
	return IconCloudDone($size, $fill, $iconTypeWeight);
}

function IconCloudDownload(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCloudDownload {
	return IconCloudDownload($size, $fill, $iconTypeWeight);
}

function IconCloudLock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCloudLock {
	return IconCloudLock($size, $fill, $iconTypeWeight);
}

function IconCloudOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCloudOff {
	return IconCloudOff($size, $fill, $iconTypeWeight);
}

function IconCloudSync(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCloudSync {
	return IconCloudSync($size, $fill, $iconTypeWeight);
}

function IconCloudUpload(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCloudUpload {
	return IconCloudUpload($size, $fill, $iconTypeWeight);
}

function IconCloudySnowing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCloudySnowing {
	return IconCloudySnowing($size, $fill, $iconTypeWeight);
}

function IconCo2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCo2 {
	return IconCo2($size, $fill, $iconTypeWeight);
}

function IconCode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCode {
	return IconCode($size, $fill, $iconTypeWeight);
}

function IconCodeBlocks(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCodeBlocks {
	return IconCodeBlocks($size, $fill, $iconTypeWeight);
}

function IconCodeOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCodeOff {
	return IconCodeOff($size, $fill, $iconTypeWeight);
}

function IconCoffee(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCoffee {
	return IconCoffee($size, $fill, $iconTypeWeight);
}

function IconCoffeeMaker(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCoffeeMaker {
	return IconCoffeeMaker($size, $fill, $iconTypeWeight);
}

function IconCognition(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCognition {
	return IconCognition($size, $fill, $iconTypeWeight);
}

function IconCognition2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCognition2 {
	return IconCognition2($size, $fill, $iconTypeWeight);
}

function IconCollapseAll(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCollapseAll {
	return IconCollapseAll($size, $fill, $iconTypeWeight);
}

function IconCollapseContent(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCollapseContent {
	return IconCollapseContent($size, $fill, $iconTypeWeight);
}

function IconCollectionsBookmark(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCollectionsBookmark {
	return IconCollectionsBookmark($size, $fill, $iconTypeWeight);
}

function IconColorize(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconColorize {
	return IconColorize($size, $fill, $iconTypeWeight);
}

function IconColors(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconColors {
	return IconColors($size, $fill, $iconTypeWeight);
}

function IconCombineColumns(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCombineColumns {
	return IconCombineColumns($size, $fill, $iconTypeWeight);
}

function IconComedyMask(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconComedyMask {
	return IconComedyMask($size, $fill, $iconTypeWeight);
}

function IconComicBubble(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconComicBubble {
	return IconComicBubble($size, $fill, $iconTypeWeight);
}

function IconComment(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconComment {
	return IconComment($size, $fill, $iconTypeWeight);
}

function IconCommentBank(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCommentBank {
	return IconCommentBank($size, $fill, $iconTypeWeight);
}

function IconCommentsDisabled(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCommentsDisabled {
	return IconCommentsDisabled($size, $fill, $iconTypeWeight);
}

function IconCommit(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCommit {
	return IconCommit($size, $fill, $iconTypeWeight);
}

function IconCommunication(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCommunication {
	return IconCommunication($size, $fill, $iconTypeWeight);
}

function IconCommunities(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCommunities {
	return IconCommunities($size, $fill, $iconTypeWeight);
}

function IconCommute(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCommute {
	return IconCommute($size, $fill, $iconTypeWeight);
}

function IconCompare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCompare {
	return IconCompare($size, $fill, $iconTypeWeight);
}

function IconCompareArrows(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCompareArrows {
	return IconCompareArrows($size, $fill, $iconTypeWeight);
}

function IconCompassCalibration(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCompassCalibration {
	return IconCompassCalibration($size, $fill, $iconTypeWeight);
}

function IconComponentExchange(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconComponentExchange {
	return IconComponentExchange($size, $fill, $iconTypeWeight);
}

function IconCompost(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCompost {
	return IconCompost($size, $fill, $iconTypeWeight);
}

function IconCompress(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCompress {
	return IconCompress($size, $fill, $iconTypeWeight);
}

function IconComputer(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconComputer {
	return IconComputer($size, $fill, $iconTypeWeight);
}

function IconConcierge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconConcierge {
	return IconConcierge($size, $fill, $iconTypeWeight);
}

function IconConditions(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconConditions {
	return IconConditions($size, $fill, $iconTypeWeight);
}

function IconConfirmationNumber(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconConfirmationNumber {
	return IconConfirmationNumber($size, $fill, $iconTypeWeight);
}

function IconCongenital(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCongenital {
	return IconCongenital($size, $fill, $iconTypeWeight);
}

function IconConnectedTv(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconConnectedTv {
	return IconConnectedTv($size, $fill, $iconTypeWeight);
}

function IconConnectingAirports(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconConnectingAirports {
	return IconConnectingAirports($size, $fill, $iconTypeWeight);
}

function IconConnectWithoutContact(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconConnectWithoutContact {
	return IconConnectWithoutContact($size, $fill, $iconTypeWeight);
}

function IconConstruction(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconConstruction {
	return IconConstruction($size, $fill, $iconTypeWeight);
}

function IconContactEmergency(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContactEmergency {
	return IconContactEmergency($size, $fill, $iconTypeWeight);
}

function IconContactless(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContactless {
	return IconContactless($size, $fill, $iconTypeWeight);
}

function IconContactlessOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContactlessOff {
	return IconContactlessOff($size, $fill, $iconTypeWeight);
}

function IconContactMail(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContactMail {
	return IconContactMail($size, $fill, $iconTypeWeight);
}

function IconContactPage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContactPage {
	return IconContactPage($size, $fill, $iconTypeWeight);
}

function IconContactPhone(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContactPhone {
	return IconContactPhone($size, $fill, $iconTypeWeight);
}

function IconContacts(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContacts {
	return IconContacts($size, $fill, $iconTypeWeight);
}

function IconContactsProduct(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContactsProduct {
	return IconContactsProduct($size, $fill, $iconTypeWeight);
}

function IconContactSupport(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContactSupport {
	return IconContactSupport($size, $fill, $iconTypeWeight);
}

function IconContentCopy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContentCopy {
	return IconContentCopy($size, $fill, $iconTypeWeight);
}

function IconContentCut(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContentCut {
	return IconContentCut($size, $fill, $iconTypeWeight);
}

function IconContentPaste(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContentPaste {
	return IconContentPaste($size, $fill, $iconTypeWeight);
}

function IconContentPasteGo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContentPasteGo {
	return IconContentPasteGo($size, $fill, $iconTypeWeight);
}

function IconContentPasteOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContentPasteOff {
	return IconContentPasteOff($size, $fill, $iconTypeWeight);
}

function IconContentPasteSearch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContentPasteSearch {
	return IconContentPasteSearch($size, $fill, $iconTypeWeight);
}

function IconContextualToken(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContextualToken {
	return IconContextualToken($size, $fill, $iconTypeWeight);
}

function IconContextualTokenAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContextualTokenAdd {
	return IconContextualTokenAdd($size, $fill, $iconTypeWeight);
}

function IconContract(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContract {
	return IconContract($size, $fill, $iconTypeWeight);
}

function IconContractDelete(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContractDelete {
	return IconContractDelete($size, $fill, $iconTypeWeight);
}

function IconContractEdit(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContractEdit {
	return IconContractEdit($size, $fill, $iconTypeWeight);
}

function IconContrast(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContrast {
	return IconContrast($size, $fill, $iconTypeWeight);
}

function IconContrastCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContrastCircle {
	return IconContrastCircle($size, $fill, $iconTypeWeight);
}

function IconContrastRtlOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContrastRtlOff {
	return IconContrastRtlOff($size, $fill, $iconTypeWeight);
}

function IconContrastSquare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContrastSquare {
	return IconContrastSquare($size, $fill, $iconTypeWeight);
}

function IconControlCamera(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconControlCamera {
	return IconControlCamera($size, $fill, $iconTypeWeight);
}

function IconControllerGen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconControllerGen {
	return IconControllerGen($size, $fill, $iconTypeWeight);
}

function IconControlPointDuplicate(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconControlPointDuplicate {
	return IconControlPointDuplicate($size, $fill, $iconTypeWeight);
}

function IconConversionPath(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconConversionPath {
	return IconConversionPath($size, $fill, $iconTypeWeight);
}

function IconConversionPathOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconConversionPathOff {
	return IconConversionPathOff($size, $fill, $iconTypeWeight);
}

function IconConvertToText(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconConvertToText {
	return IconConvertToText($size, $fill, $iconTypeWeight);
}

function IconConveyorBelt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconConveyorBelt {
	return IconConveyorBelt($size, $fill, $iconTypeWeight);
}

function IconCookie(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCookie {
	return IconCookie($size, $fill, $iconTypeWeight);
}

function IconCookieOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCookieOff {
	return IconCookieOff($size, $fill, $iconTypeWeight);
}

function IconCooking(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCooking {
	return IconCooking($size, $fill, $iconTypeWeight);
}

function IconCoolToDry(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCoolToDry {
	return IconCoolToDry($size, $fill, $iconTypeWeight);
}

function IconCoPresent(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCoPresent {
	return IconCoPresent($size, $fill, $iconTypeWeight);
}

function IconCopyAll(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCopyAll {
	return IconCopyAll($size, $fill, $iconTypeWeight);
}

function IconCopyright(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCopyright {
	return IconCopyright($size, $fill, $iconTypeWeight);
}

function IconCoronavirus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCoronavirus {
	return IconCoronavirus($size, $fill, $iconTypeWeight);
}

function IconCorporateFare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCorporateFare {
	return IconCorporateFare($size, $fill, $iconTypeWeight);
}

function IconCottage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCottage {
	return IconCottage($size, $fill, $iconTypeWeight);
}

function IconCounter0(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCounter0 {
	return IconCounter0($size, $fill, $iconTypeWeight);
}

function IconCounter1(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCounter1 {
	return IconCounter1($size, $fill, $iconTypeWeight);
}

function IconCounter2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCounter2 {
	return IconCounter2($size, $fill, $iconTypeWeight);
}

function IconCounter3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCounter3 {
	return IconCounter3($size, $fill, $iconTypeWeight);
}

function IconCounter4(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCounter4 {
	return IconCounter4($size, $fill, $iconTypeWeight);
}

function IconCounter5(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCounter5 {
	return IconCounter5($size, $fill, $iconTypeWeight);
}

function IconCounter6(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCounter6 {
	return IconCounter6($size, $fill, $iconTypeWeight);
}

function IconCounter7(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCounter7 {
	return IconCounter7($size, $fill, $iconTypeWeight);
}

function IconCounter8(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCounter8 {
	return IconCounter8($size, $fill, $iconTypeWeight);
}

function IconCounter9(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCounter9 {
	return IconCounter9($size, $fill, $iconTypeWeight);
}

function IconCountertops(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCountertops {
	return IconCountertops($size, $fill, $iconTypeWeight);
}

function IconCreateNewFolder(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCreateNewFolder {
	return IconCreateNewFolder($size, $fill, $iconTypeWeight);
}

function IconCreditCard(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCreditCard {
	return IconCreditCard($size, $fill, $iconTypeWeight);
}

function IconCreditCardClock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCreditCardClock {
	return IconCreditCardClock($size, $fill, $iconTypeWeight);
}

function IconCreditCardGear(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCreditCardGear {
	return IconCreditCardGear($size, $fill, $iconTypeWeight);
}

function IconCreditCardHeart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCreditCardHeart {
	return IconCreditCardHeart($size, $fill, $iconTypeWeight);
}

function IconCreditCardOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCreditCardOff {
	return IconCreditCardOff($size, $fill, $iconTypeWeight);
}

function IconCreditScore(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCreditScore {
	return IconCreditScore($size, $fill, $iconTypeWeight);
}

function IconCrib(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCrib {
	return IconCrib($size, $fill, $iconTypeWeight);
}

function IconCrisisAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCrisisAlert {
	return IconCrisisAlert($size, $fill, $iconTypeWeight);
}

function IconCrop(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCrop {
	return IconCrop($size, $fill, $iconTypeWeight);
}

function IconCrop169(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCrop169 {
	return IconCrop169($size, $fill, $iconTypeWeight);
}

function IconCrop32(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCrop32 {
	return IconCrop32($size, $fill, $iconTypeWeight);
}

function IconCrop54(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCrop54 {
	return IconCrop54($size, $fill, $iconTypeWeight);
}

function IconCrop75(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCrop75 {
	return IconCrop75($size, $fill, $iconTypeWeight);
}

function IconCrop916(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCrop916 {
	return IconCrop916($size, $fill, $iconTypeWeight);
}

function IconCropFree(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCropFree {
	return IconCropFree($size, $fill, $iconTypeWeight);
}

function IconCropLandscape(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCropLandscape {
	return IconCropLandscape($size, $fill, $iconTypeWeight);
}

function IconCropPortrait(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCropPortrait {
	return IconCropPortrait($size, $fill, $iconTypeWeight);
}

function IconCropRotate(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCropRotate {
	return IconCropRotate($size, $fill, $iconTypeWeight);
}

function IconCropSquare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCropSquare {
	return IconCropSquare($size, $fill, $iconTypeWeight);
}

function IconCrossword(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCrossword {
	return IconCrossword($size, $fill, $iconTypeWeight);
}

function IconCrowdsource(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCrowdsource {
	return IconCrowdsource($size, $fill, $iconTypeWeight);
}

function IconCrown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCrown {
	return IconCrown($size, $fill, $iconTypeWeight);
}

function IconCrueltyFree(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCrueltyFree {
	return IconCrueltyFree($size, $fill, $iconTypeWeight);
}

function IconCss(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCss {
	return IconCss($size, $fill, $iconTypeWeight);
}

function IconCsv(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCsv {
	return IconCsv($size, $fill, $iconTypeWeight);
}

function IconCurrencyBitcoin(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCurrencyBitcoin {
	return IconCurrencyBitcoin($size, $fill, $iconTypeWeight);
}

function IconCurrencyExchange(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCurrencyExchange {
	return IconCurrencyExchange($size, $fill, $iconTypeWeight);
}

function IconCurrencyFranc(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCurrencyFranc {
	return IconCurrencyFranc($size, $fill, $iconTypeWeight);
}

function IconCurrencyLira(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCurrencyLira {
	return IconCurrencyLira($size, $fill, $iconTypeWeight);
}

function IconCurrencyPound(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCurrencyPound {
	return IconCurrencyPound($size, $fill, $iconTypeWeight);
}

function IconCurrencyRuble(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCurrencyRuble {
	return IconCurrencyRuble($size, $fill, $iconTypeWeight);
}

function IconCurrencyRupee(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCurrencyRupee {
	return IconCurrencyRupee($size, $fill, $iconTypeWeight);
}

function IconCurrencyRupeeCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCurrencyRupeeCircle {
	return IconCurrencyRupeeCircle($size, $fill, $iconTypeWeight);
}

function IconCurrencyYen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCurrencyYen {
	return IconCurrencyYen($size, $fill, $iconTypeWeight);
}

function IconCurrencyYuan(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCurrencyYuan {
	return IconCurrencyYuan($size, $fill, $iconTypeWeight);
}

function IconCurtains(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCurtains {
	return IconCurtains($size, $fill, $iconTypeWeight);
}

function IconCurtainsClosed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCurtainsClosed {
	return IconCurtainsClosed($size, $fill, $iconTypeWeight);
}

function IconCustomTypography(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCustomTypography {
	return IconCustomTypography($size, $fill, $iconTypeWeight);
}

function IconCycle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCycle {
	return IconCycle($size, $fill, $iconTypeWeight);
}

function IconCyclone(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCyclone {
	return IconCyclone($size, $fill, $iconTypeWeight);
}

function IconDangerous(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDangerous {
	return IconDangerous($size, $fill, $iconTypeWeight);
}

function IconDarkMode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDarkMode {
	return IconDarkMode($size, $fill, $iconTypeWeight);
}

function IconDashboard(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDashboard {
	return IconDashboard($size, $fill, $iconTypeWeight);
}

function IconDashboard2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDashboard2 {
	return IconDashboard2($size, $fill, $iconTypeWeight);
}

function IconDashboardCustomize(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDashboardCustomize {
	return IconDashboardCustomize($size, $fill, $iconTypeWeight);
}

function IconDataAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDataAlert {
	return IconDataAlert($size, $fill, $iconTypeWeight);
}

function IconDataArray(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDataArray {
	return IconDataArray($size, $fill, $iconTypeWeight);
}

function IconDatabase(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDatabase {
	return IconDatabase($size, $fill, $iconTypeWeight);
}

function IconDatabaseOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDatabaseOff {
	return IconDatabaseOff($size, $fill, $iconTypeWeight);
}

function IconDatabaseSearch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDatabaseSearch {
	return IconDatabaseSearch($size, $fill, $iconTypeWeight);
}

function IconDatabaseUpload(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDatabaseUpload {
	return IconDatabaseUpload($size, $fill, $iconTypeWeight);
}

function IconDataCheck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDataCheck {
	return IconDataCheck($size, $fill, $iconTypeWeight);
}

function IconDataExploration(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDataExploration {
	return IconDataExploration($size, $fill, $iconTypeWeight);
}

function IconDataInfoAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDataInfoAlert {
	return IconDataInfoAlert($size, $fill, $iconTypeWeight);
}

function IconDataLossPrevention(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDataLossPrevention {
	return IconDataLossPrevention($size, $fill, $iconTypeWeight);
}

function IconDataObject(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDataObject {
	return IconDataObject($size, $fill, $iconTypeWeight);
}

function IconDataSaverOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDataSaverOn {
	return IconDataSaverOn($size, $fill, $iconTypeWeight);
}

function IconDataset(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDataset {
	return IconDataset($size, $fill, $iconTypeWeight);
}

function IconDatasetLinked(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDatasetLinked {
	return IconDatasetLinked($size, $fill, $iconTypeWeight);
}

function IconDataTable(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDataTable {
	return IconDataTable($size, $fill, $iconTypeWeight);
}

function IconDataThresholding(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDataThresholding {
	return IconDataThresholding($size, $fill, $iconTypeWeight);
}

function IconDataUsage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDataUsage {
	return IconDataUsage($size, $fill, $iconTypeWeight);
}

function IconDateRange(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDateRange {
	return IconDateRange($size, $fill, $iconTypeWeight);
}

function IconDeblur(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeblur {
	return IconDeblur($size, $fill, $iconTypeWeight);
}

function IconDeceased(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeceased {
	return IconDeceased($size, $fill, $iconTypeWeight);
}

function IconDecimalDecrease(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDecimalDecrease {
	return IconDecimalDecrease($size, $fill, $iconTypeWeight);
}

function IconDecimalIncrease(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDecimalIncrease {
	return IconDecimalIncrease($size, $fill, $iconTypeWeight);
}

function IconDeck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeck {
	return IconDeck($size, $fill, $iconTypeWeight);
}

function IconDehaze(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDehaze {
	return IconDehaze($size, $fill, $iconTypeWeight);
}

function IconDelete(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDelete {
	return IconDelete($size, $fill, $iconTypeWeight);
}

function IconDeleteForever(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeleteForever {
	return IconDeleteForever($size, $fill, $iconTypeWeight);
}

function IconDeleteHistory(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeleteHistory {
	return IconDeleteHistory($size, $fill, $iconTypeWeight);
}

function IconDeleteSweep(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeleteSweep {
	return IconDeleteSweep($size, $fill, $iconTypeWeight);
}

function IconDeliveryTruckBolt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeliveryTruckBolt {
	return IconDeliveryTruckBolt($size, $fill, $iconTypeWeight);
}

function IconDeliveryTruckSpeed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeliveryTruckSpeed {
	return IconDeliveryTruckSpeed($size, $fill, $iconTypeWeight);
}

function IconDemography(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDemography {
	return IconDemography($size, $fill, $iconTypeWeight);
}

function IconDensityLarge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDensityLarge {
	return IconDensityLarge($size, $fill, $iconTypeWeight);
}

function IconDensityMedium(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDensityMedium {
	return IconDensityMedium($size, $fill, $iconTypeWeight);
}

function IconDensitySmall(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDensitySmall {
	return IconDensitySmall($size, $fill, $iconTypeWeight);
}

function IconDentistry(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDentistry {
	return IconDentistry($size, $fill, $iconTypeWeight);
}

function IconDepartureBoard(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDepartureBoard {
	return IconDepartureBoard($size, $fill, $iconTypeWeight);
}

function IconDeployedCode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeployedCode {
	return IconDeployedCode($size, $fill, $iconTypeWeight);
}

function IconDeployedCodeAccount(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeployedCodeAccount {
	return IconDeployedCodeAccount($size, $fill, $iconTypeWeight);
}

function IconDeployedCodeAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeployedCodeAlert {
	return IconDeployedCodeAlert($size, $fill, $iconTypeWeight);
}

function IconDeployedCodeHistory(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeployedCodeHistory {
	return IconDeployedCodeHistory($size, $fill, $iconTypeWeight);
}

function IconDeployedCodeUpdate(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeployedCodeUpdate {
	return IconDeployedCodeUpdate($size, $fill, $iconTypeWeight);
}

function IconDermatology(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDermatology {
	return IconDermatology($size, $fill, $iconTypeWeight);
}

function IconDescription(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDescription {
	return IconDescription($size, $fill, $iconTypeWeight);
}

function IconDeselect(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeselect {
	return IconDeselect($size, $fill, $iconTypeWeight);
}

function IconDesignServices(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDesignServices {
	return IconDesignServices($size, $fill, $iconTypeWeight);
}

function IconDesk(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDesk {
	return IconDesk($size, $fill, $iconTypeWeight);
}

function IconDeskphone(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeskphone {
	return IconDeskphone($size, $fill, $iconTypeWeight);
}

function IconDesktopAccessDisabled(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDesktopAccessDisabled {
	return IconDesktopAccessDisabled($size, $fill, $iconTypeWeight);
}

function IconDesktopCloud(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDesktopCloud {
	return IconDesktopCloud($size, $fill, $iconTypeWeight);
}

function IconDesktopCloudStack(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDesktopCloudStack {
	return IconDesktopCloudStack($size, $fill, $iconTypeWeight);
}

function IconDesktopLandscape(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDesktopLandscape {
	return IconDesktopLandscape($size, $fill, $iconTypeWeight);
}

function IconDesktopLandscapeAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDesktopLandscapeAdd {
	return IconDesktopLandscapeAdd($size, $fill, $iconTypeWeight);
}

function IconDesktopMac(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDesktopMac {
	return IconDesktopMac($size, $fill, $iconTypeWeight);
}

function IconDesktopPortrait(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDesktopPortrait {
	return IconDesktopPortrait($size, $fill, $iconTypeWeight);
}

function IconDesktopWindows(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDesktopWindows {
	return IconDesktopWindows($size, $fill, $iconTypeWeight);
}

function IconDestruction(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDestruction {
	return IconDestruction($size, $fill, $iconTypeWeight);
}

function IconDetails(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDetails {
	return IconDetails($size, $fill, $iconTypeWeight);
}

function IconDetectionAndZone(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDetectionAndZone {
	return IconDetectionAndZone($size, $fill, $iconTypeWeight);
}

function IconDetector(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDetector {
	return IconDetector($size, $fill, $iconTypeWeight);
}

function IconDetectorAlarm(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDetectorAlarm {
	return IconDetectorAlarm($size, $fill, $iconTypeWeight);
}

function IconDetectorBattery(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDetectorBattery {
	return IconDetectorBattery($size, $fill, $iconTypeWeight);
}

function IconDetectorCo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDetectorCo {
	return IconDetectorCo($size, $fill, $iconTypeWeight);
}

function IconDetectorOffline(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDetectorOffline {
	return IconDetectorOffline($size, $fill, $iconTypeWeight);
}

function IconDetectorSmoke(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDetectorSmoke {
	return IconDetectorSmoke($size, $fill, $iconTypeWeight);
}

function IconDetectorStatus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDetectorStatus {
	return IconDetectorStatus($size, $fill, $iconTypeWeight);
}

function IconDeveloperBoard(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeveloperBoard {
	return IconDeveloperBoard($size, $fill, $iconTypeWeight);
}

function IconDeveloperBoardOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeveloperBoardOff {
	return IconDeveloperBoardOff($size, $fill, $iconTypeWeight);
}

function IconDeveloperGuide(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeveloperGuide {
	return IconDeveloperGuide($size, $fill, $iconTypeWeight);
}

function IconDeveloperMode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeveloperMode {
	return IconDeveloperMode($size, $fill, $iconTypeWeight);
}

function IconDeveloperModeTv(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeveloperModeTv {
	return IconDeveloperModeTv($size, $fill, $iconTypeWeight);
}

function IconDeviceHub(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeviceHub {
	return IconDeviceHub($size, $fill, $iconTypeWeight);
}

function IconDevices(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDevices {
	return IconDevices($size, $fill, $iconTypeWeight);
}

function IconDevicesFold(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDevicesFold {
	return IconDevicesFold($size, $fill, $iconTypeWeight);
}

function IconDevicesFold2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDevicesFold2 {
	return IconDevicesFold2($size, $fill, $iconTypeWeight);
}

function IconDevicesOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDevicesOff {
	return IconDevicesOff($size, $fill, $iconTypeWeight);
}

function IconDevicesOther(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDevicesOther {
	return IconDevicesOther($size, $fill, $iconTypeWeight);
}

function IconDevicesWearables(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDevicesWearables {
	return IconDevicesWearables($size, $fill, $iconTypeWeight);
}

function IconDeviceThermostat(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeviceThermostat {
	return IconDeviceThermostat($size, $fill, $iconTypeWeight);
}

function IconDeviceUnknown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeviceUnknown {
	return IconDeviceUnknown($size, $fill, $iconTypeWeight);
}

function IconDewPoint(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDewPoint {
	return IconDewPoint($size, $fill, $iconTypeWeight);
}

function IconDiagnosis(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDiagnosis {
	return IconDiagnosis($size, $fill, $iconTypeWeight);
}

function IconDiagonalLine(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDiagonalLine {
	return IconDiagonalLine($size, $fill, $iconTypeWeight);
}

function IconDialerSip(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDialerSip {
	return IconDialerSip($size, $fill, $iconTypeWeight);
}

function IconDialogs(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDialogs {
	return IconDialogs($size, $fill, $iconTypeWeight);
}

function IconDialpad(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDialpad {
	return IconDialpad($size, $fill, $iconTypeWeight);
}

function IconDiamond(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDiamond {
	return IconDiamond($size, $fill, $iconTypeWeight);
}

function IconDictionary(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDictionary {
	return IconDictionary($size, $fill, $iconTypeWeight);
}

function IconDifference(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDifference {
	return IconDifference($size, $fill, $iconTypeWeight);
}

function IconDigitalOutOfHome(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDigitalOutOfHome {
	return IconDigitalOutOfHome($size, $fill, $iconTypeWeight);
}

function IconDigitalWellbeing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDigitalWellbeing {
	return IconDigitalWellbeing($size, $fill, $iconTypeWeight);
}

function IconDining(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDining {
	return IconDining($size, $fill, $iconTypeWeight);
}

function IconDinnerDining(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDinnerDining {
	return IconDinnerDining($size, $fill, $iconTypeWeight);
}

function IconDirections(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDirections {
	return IconDirections($size, $fill, $iconTypeWeight);
}

function IconDirectionsAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDirectionsAlt {
	return IconDirectionsAlt($size, $fill, $iconTypeWeight);
}

function IconDirectionsAltOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDirectionsAltOff {
	return IconDirectionsAltOff($size, $fill, $iconTypeWeight);
}

function IconDirectionsBike(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDirectionsBike {
	return IconDirectionsBike($size, $fill, $iconTypeWeight);
}

function IconDirectionsBoat(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDirectionsBoat {
	return IconDirectionsBoat($size, $fill, $iconTypeWeight);
}

function IconDirectionsBus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDirectionsBus {
	return IconDirectionsBus($size, $fill, $iconTypeWeight);
}

function IconDirectionsCar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDirectionsCar {
	return IconDirectionsCar($size, $fill, $iconTypeWeight);
}

function IconDirectionsOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDirectionsOff {
	return IconDirectionsOff($size, $fill, $iconTypeWeight);
}

function IconDirectionsRailway(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDirectionsRailway {
	return IconDirectionsRailway($size, $fill, $iconTypeWeight);
}

function IconDirectionsRailway2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDirectionsRailway2 {
	return IconDirectionsRailway2($size, $fill, $iconTypeWeight);
}

function IconDirectionsRun(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDirectionsRun {
	return IconDirectionsRun($size, $fill, $iconTypeWeight);
}

function IconDirectionsSubway(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDirectionsSubway {
	return IconDirectionsSubway($size, $fill, $iconTypeWeight);
}

function IconDirectionsWalk(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDirectionsWalk {
	return IconDirectionsWalk($size, $fill, $iconTypeWeight);
}

function IconDirectorySync(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDirectorySync {
	return IconDirectorySync($size, $fill, $iconTypeWeight);
}

function IconDirtyLens(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDirtyLens {
	return IconDirtyLens($size, $fill, $iconTypeWeight);
}

function IconDisabledByDefault(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDisabledByDefault {
	return IconDisabledByDefault($size, $fill, $iconTypeWeight);
}

function IconDisabledVisible(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDisabledVisible {
	return IconDisabledVisible($size, $fill, $iconTypeWeight);
}

function IconDiscFull(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDiscFull {
	return IconDiscFull($size, $fill, $iconTypeWeight);
}

function IconDiscoverTune(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDiscoverTune {
	return IconDiscoverTune($size, $fill, $iconTypeWeight);
}

function IconDishwasher(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDishwasher {
	return IconDishwasher($size, $fill, $iconTypeWeight);
}

function IconDishwasherGen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDishwasherGen {
	return IconDishwasherGen($size, $fill, $iconTypeWeight);
}

function IconDisplayExternalInput(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDisplayExternalInput {
	return IconDisplayExternalInput($size, $fill, $iconTypeWeight);
}

function IconDisplaySettings(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDisplaySettings {
	return IconDisplaySettings($size, $fill, $iconTypeWeight);
}

function IconDistance(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDistance {
	return IconDistance($size, $fill, $iconTypeWeight);
}

function IconDiversity1(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDiversity1 {
	return IconDiversity1($size, $fill, $iconTypeWeight);
}

function IconDiversity2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDiversity2 {
	return IconDiversity2($size, $fill, $iconTypeWeight);
}

function IconDiversity3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDiversity3 {
	return IconDiversity3($size, $fill, $iconTypeWeight);
}

function IconDiversity4(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDiversity4 {
	return IconDiversity4($size, $fill, $iconTypeWeight);
}

function IconDns(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDns {
	return IconDns($size, $fill, $iconTypeWeight);
}

function IconDock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDock {
	return IconDock($size, $fill, $iconTypeWeight);
}

function IconDockToBottom(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDockToBottom {
	return IconDockToBottom($size, $fill, $iconTypeWeight);
}

function IconDockToLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDockToLeft {
	return IconDockToLeft($size, $fill, $iconTypeWeight);
}

function IconDockToRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDockToRight {
	return IconDockToRight($size, $fill, $iconTypeWeight);
}

function IconDocs(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDocs {
	return IconDocs($size, $fill, $iconTypeWeight);
}

function IconDocsAddOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDocsAddOn {
	return IconDocsAddOn($size, $fill, $iconTypeWeight);
}

function IconDocsAppsScript(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDocsAppsScript {
	return IconDocsAppsScript($size, $fill, $iconTypeWeight);
}

function IconDocumentScanner(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDocumentScanner {
	return IconDocumentScanner($size, $fill, $iconTypeWeight);
}

function IconDocumentSearch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDocumentSearch {
	return IconDocumentSearch($size, $fill, $iconTypeWeight);
}

function IconDomain(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDomain {
	return IconDomain($size, $fill, $iconTypeWeight);
}

function IconDomainAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDomainAdd {
	return IconDomainAdd($size, $fill, $iconTypeWeight);
}

function IconDomainDisabled(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDomainDisabled {
	return IconDomainDisabled($size, $fill, $iconTypeWeight);
}

function IconDomainVerification(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDomainVerification {
	return IconDomainVerification($size, $fill, $iconTypeWeight);
}

function IconDomainVerificationOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDomainVerificationOff {
	return IconDomainVerificationOff($size, $fill, $iconTypeWeight);
}

function IconDominoMask(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDominoMask {
	return IconDominoMask($size, $fill, $iconTypeWeight);
}

function IconDoneAll(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDoneAll {
	return IconDoneAll($size, $fill, $iconTypeWeight);
}

function IconDoneOutline(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDoneOutline {
	return IconDoneOutline($size, $fill, $iconTypeWeight);
}

function IconDoNotDisturbOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDoNotDisturbOff {
	return IconDoNotDisturbOff($size, $fill, $iconTypeWeight);
}

function IconDoNotDisturbOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDoNotDisturbOn {
	return IconDoNotDisturbOn($size, $fill, $iconTypeWeight);
}

function IconDoNotDisturbOnTotalSilence(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDoNotDisturbOnTotalSilence {
	return IconDoNotDisturbOnTotalSilence($size, $fill, $iconTypeWeight);
}

function IconDoNotStep(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDoNotStep {
	return IconDoNotStep($size, $fill, $iconTypeWeight);
}

function IconDoNotTouch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDoNotTouch {
	return IconDoNotTouch($size, $fill, $iconTypeWeight);
}

function IconDonutLarge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDonutLarge {
	return IconDonutLarge($size, $fill, $iconTypeWeight);
}

function IconDonutSmall(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDonutSmall {
	return IconDonutSmall($size, $fill, $iconTypeWeight);
}

function IconDoorBack(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDoorBack {
	return IconDoorBack($size, $fill, $iconTypeWeight);
}

function IconDoorbell(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDoorbell {
	return IconDoorbell($size, $fill, $iconTypeWeight);
}

function IconDoorbell3p(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDoorbell3p {
	return IconDoorbell3p($size, $fill, $iconTypeWeight);
}

function IconDoorbellChime(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDoorbellChime {
	return IconDoorbellChime($size, $fill, $iconTypeWeight);
}

function IconDoorFront(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDoorFront {
	return IconDoorFront($size, $fill, $iconTypeWeight);
}

function IconDoorOpen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDoorOpen {
	return IconDoorOpen($size, $fill, $iconTypeWeight);
}

function IconDoorSensor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDoorSensor {
	return IconDoorSensor($size, $fill, $iconTypeWeight);
}

function IconDoorSliding(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDoorSliding {
	return IconDoorSliding($size, $fill, $iconTypeWeight);
}

function IconDoubleArrow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDoubleArrow {
	return IconDoubleArrow($size, $fill, $iconTypeWeight);
}

function IconDownhillSkiing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDownhillSkiing {
	return IconDownhillSkiing($size, $fill, $iconTypeWeight);
}

function IconDownload(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDownload {
	return IconDownload($size, $fill, $iconTypeWeight);
}

function IconDownload2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDownload2 {
	return IconDownload2($size, $fill, $iconTypeWeight);
}

function IconDownloadDone(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDownloadDone {
	return IconDownloadDone($size, $fill, $iconTypeWeight);
}

function IconDownloadForOffline(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDownloadForOffline {
	return IconDownloadForOffline($size, $fill, $iconTypeWeight);
}

function IconDownloading(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDownloading {
	return IconDownloading($size, $fill, $iconTypeWeight);
}

function IconDraft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDraft {
	return IconDraft($size, $fill, $iconTypeWeight);
}

function IconDraftOrders(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDraftOrders {
	return IconDraftOrders($size, $fill, $iconTypeWeight);
}

function IconDrafts(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDrafts {
	return IconDrafts($size, $fill, $iconTypeWeight);
}

function IconDragClick(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDragClick {
	return IconDragClick($size, $fill, $iconTypeWeight);
}

function IconDragHandle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDragHandle {
	return IconDragHandle($size, $fill, $iconTypeWeight);
}

function IconDragIndicator(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDragIndicator {
	return IconDragIndicator($size, $fill, $iconTypeWeight);
}

function IconDragPan(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDragPan {
	return IconDragPan($size, $fill, $iconTypeWeight);
}

function IconDraw(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDraw {
	return IconDraw($size, $fill, $iconTypeWeight);
}

function IconDrawAbstract(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDrawAbstract {
	return IconDrawAbstract($size, $fill, $iconTypeWeight);
}

function IconDrawCollage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDrawCollage {
	return IconDrawCollage($size, $fill, $iconTypeWeight);
}

function IconDresser(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDresser {
	return IconDresser($size, $fill, $iconTypeWeight);
}

function IconDriveExport(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDriveExport {
	return IconDriveExport($size, $fill, $iconTypeWeight);
}

function IconDriveFileMove(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDriveFileMove {
	return IconDriveFileMove($size, $fill, $iconTypeWeight);
}

function IconDriveFolderUpload(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDriveFolderUpload {
	return IconDriveFolderUpload($size, $fill, $iconTypeWeight);
}

function IconDropdown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDropdown {
	return IconDropdown($size, $fill, $iconTypeWeight);
}

function IconDry(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDry {
	return IconDry($size, $fill, $iconTypeWeight);
}

function IconDryCleaning(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDryCleaning {
	return IconDryCleaning($size, $fill, $iconTypeWeight);
}

function IconDualScreen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDualScreen {
	return IconDualScreen($size, $fill, $iconTypeWeight);
}

function IconDuo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDuo {
	return IconDuo($size, $fill, $iconTypeWeight);
}

function IconDvr(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDvr {
	return IconDvr($size, $fill, $iconTypeWeight);
}

function IconDynamicFeed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDynamicFeed {
	return IconDynamicFeed($size, $fill, $iconTypeWeight);
}

function IconDynamicForm(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDynamicForm {
	return IconDynamicForm($size, $fill, $iconTypeWeight);
}

function IconE911Avatar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconE911Avatar {
	return IconE911Avatar($size, $fill, $iconTypeWeight);
}

function IconE911Emergency(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconE911Emergency {
	return IconE911Emergency($size, $fill, $iconTypeWeight);
}

function IconEarbuds(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEarbuds {
	return IconEarbuds($size, $fill, $iconTypeWeight);
}

function IconEarbudsBattery(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEarbudsBattery {
	return IconEarbudsBattery($size, $fill, $iconTypeWeight);
}

function IconEarlyOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEarlyOn {
	return IconEarlyOn($size, $fill, $iconTypeWeight);
}

function IconEarthquake(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEarthquake {
	return IconEarthquake($size, $fill, $iconTypeWeight);
}

function IconEast(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEast {
	return IconEast($size, $fill, $iconTypeWeight);
}

function IconEcg(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEcg {
	return IconEcg($size, $fill, $iconTypeWeight);
}

function IconEcgHeart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEcgHeart {
	return IconEcgHeart($size, $fill, $iconTypeWeight);
}

function IconEco(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEco {
	return IconEco($size, $fill, $iconTypeWeight);
}

function IconEda(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEda {
	return IconEda($size, $fill, $iconTypeWeight);
}

function IconEdgesensorHigh(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEdgesensorHigh {
	return IconEdgesensorHigh($size, $fill, $iconTypeWeight);
}

function IconEdgesensorLow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEdgesensorLow {
	return IconEdgesensorLow($size, $fill, $iconTypeWeight);
}

function IconEdit(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEdit {
	return IconEdit($size, $fill, $iconTypeWeight);
}

function IconEditArrowDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEditArrowDown {
	return IconEditArrowDown($size, $fill, $iconTypeWeight);
}

function IconEditArrowUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEditArrowUp {
	return IconEditArrowUp($size, $fill, $iconTypeWeight);
}

function IconEditAttributes(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEditAttributes {
	return IconEditAttributes($size, $fill, $iconTypeWeight);
}

function IconEditAudio(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEditAudio {
	return IconEditAudio($size, $fill, $iconTypeWeight);
}

function IconEditCalendar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEditCalendar {
	return IconEditCalendar($size, $fill, $iconTypeWeight);
}

function IconEditDocument(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEditDocument {
	return IconEditDocument($size, $fill, $iconTypeWeight);
}

function IconEditLocation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEditLocation {
	return IconEditLocation($size, $fill, $iconTypeWeight);
}

function IconEditLocationAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEditLocationAlt {
	return IconEditLocationAlt($size, $fill, $iconTypeWeight);
}

function IconEditNote(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEditNote {
	return IconEditNote($size, $fill, $iconTypeWeight);
}

function IconEditNotifications(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEditNotifications {
	return IconEditNotifications($size, $fill, $iconTypeWeight);
}

function IconEditOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEditOff {
	return IconEditOff($size, $fill, $iconTypeWeight);
}

function IconEditorChoice(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEditorChoice {
	return IconEditorChoice($size, $fill, $iconTypeWeight);
}

function IconEditRoad(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEditRoad {
	return IconEditRoad($size, $fill, $iconTypeWeight);
}

function IconEditSquare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEditSquare {
	return IconEditSquare($size, $fill, $iconTypeWeight);
}

function IconEgg(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEgg {
	return IconEgg($size, $fill, $iconTypeWeight);
}

function IconEggAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEggAlt {
	return IconEggAlt($size, $fill, $iconTypeWeight);
}

function IconEject(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEject {
	return IconEject($size, $fill, $iconTypeWeight);
}

function IconElderly(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconElderly {
	return IconElderly($size, $fill, $iconTypeWeight);
}

function IconElderlyWoman(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconElderlyWoman {
	return IconElderlyWoman($size, $fill, $iconTypeWeight);
}

function IconElectricalServices(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconElectricalServices {
	return IconElectricalServices($size, $fill, $iconTypeWeight);
}

function IconElectricBike(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconElectricBike {
	return IconElectricBike($size, $fill, $iconTypeWeight);
}

function IconElectricBolt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconElectricBolt {
	return IconElectricBolt($size, $fill, $iconTypeWeight);
}

function IconElectricCar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconElectricCar {
	return IconElectricCar($size, $fill, $iconTypeWeight);
}

function IconElectricMeter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconElectricMeter {
	return IconElectricMeter($size, $fill, $iconTypeWeight);
}

function IconElectricMoped(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconElectricMoped {
	return IconElectricMoped($size, $fill, $iconTypeWeight);
}

function IconElectricRickshaw(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconElectricRickshaw {
	return IconElectricRickshaw($size, $fill, $iconTypeWeight);
}

function IconElectricScooter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconElectricScooter {
	return IconElectricScooter($size, $fill, $iconTypeWeight);
}

function IconElevation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconElevation {
	return IconElevation($size, $fill, $iconTypeWeight);
}

function IconElevator(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconElevator {
	return IconElevator($size, $fill, $iconTypeWeight);
}

function IconEmergency(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEmergency {
	return IconEmergency($size, $fill, $iconTypeWeight);
}

function IconEmergencyHeat(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEmergencyHeat {
	return IconEmergencyHeat($size, $fill, $iconTypeWeight);
}

function IconEmergencyHeat2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEmergencyHeat2 {
	return IconEmergencyHeat2($size, $fill, $iconTypeWeight);
}

function IconEmergencyHome(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEmergencyHome {
	return IconEmergencyHome($size, $fill, $iconTypeWeight);
}

function IconEmergencyRecording(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEmergencyRecording {
	return IconEmergencyRecording($size, $fill, $iconTypeWeight);
}

function IconEmergencyShare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEmergencyShare {
	return IconEmergencyShare($size, $fill, $iconTypeWeight);
}

function IconEmergencyShareOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEmergencyShareOff {
	return IconEmergencyShareOff($size, $fill, $iconTypeWeight);
}

function IconEMobiledata(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEMobiledata {
	return IconEMobiledata($size, $fill, $iconTypeWeight);
}

function IconEMobiledataBadge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEMobiledataBadge {
	return IconEMobiledataBadge($size, $fill, $iconTypeWeight);
}

function IconEmojiEvents(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEmojiEvents {
	return IconEmojiEvents($size, $fill, $iconTypeWeight);
}

function IconEmojiFoodBeverage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEmojiFoodBeverage {
	return IconEmojiFoodBeverage($size, $fill, $iconTypeWeight);
}

function IconEmojiLanguage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEmojiLanguage {
	return IconEmojiLanguage($size, $fill, $iconTypeWeight);
}

function IconEmojiNature(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEmojiNature {
	return IconEmojiNature($size, $fill, $iconTypeWeight);
}

function IconEmojiObjects(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEmojiObjects {
	return IconEmojiObjects($size, $fill, $iconTypeWeight);
}

function IconEmojiPeople(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEmojiPeople {
	return IconEmojiPeople($size, $fill, $iconTypeWeight);
}

function IconEmojiSymbols(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEmojiSymbols {
	return IconEmojiSymbols($size, $fill, $iconTypeWeight);
}

function IconEmojiTransportation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEmojiTransportation {
	return IconEmojiTransportation($size, $fill, $iconTypeWeight);
}

function IconEmoticon(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEmoticon {
	return IconEmoticon($size, $fill, $iconTypeWeight);
}

function IconEmptyDashboard(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEmptyDashboard {
	return IconEmptyDashboard($size, $fill, $iconTypeWeight);
}

function IconEnable(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEnable {
	return IconEnable($size, $fill, $iconTypeWeight);
}

function IconEncrypted(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEncrypted {
	return IconEncrypted($size, $fill, $iconTypeWeight);
}

function IconEncryptedAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEncryptedAdd {
	return IconEncryptedAdd($size, $fill, $iconTypeWeight);
}

function IconEncryptedAddCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEncryptedAddCircle {
	return IconEncryptedAddCircle($size, $fill, $iconTypeWeight);
}

function IconEncryptedMinusCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEncryptedMinusCircle {
	return IconEncryptedMinusCircle($size, $fill, $iconTypeWeight);
}

function IconEncryptedOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEncryptedOff {
	return IconEncryptedOff($size, $fill, $iconTypeWeight);
}

function IconEndocrinology(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEndocrinology {
	return IconEndocrinology($size, $fill, $iconTypeWeight);
}

function IconEnergy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEnergy {
	return IconEnergy($size, $fill, $iconTypeWeight);
}

function IconEnergyProgramSaving(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEnergyProgramSaving {
	return IconEnergyProgramSaving($size, $fill, $iconTypeWeight);
}

function IconEnergyProgramTimeUsed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEnergyProgramTimeUsed {
	return IconEnergyProgramTimeUsed($size, $fill, $iconTypeWeight);
}

function IconEnergySavingsLeaf(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEnergySavingsLeaf {
	return IconEnergySavingsLeaf($size, $fill, $iconTypeWeight);
}

function IconEngineering(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEngineering {
	return IconEngineering($size, $fill, $iconTypeWeight);
}

function IconEnhancedEncryption(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEnhancedEncryption {
	return IconEnhancedEncryption($size, $fill, $iconTypeWeight);
}

function IconEnt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEnt {
	return IconEnt($size, $fill, $iconTypeWeight);
}

function IconEnterprise(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEnterprise {
	return IconEnterprise($size, $fill, $iconTypeWeight);
}

function IconEnterpriseOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEnterpriseOff {
	return IconEnterpriseOff($size, $fill, $iconTypeWeight);
}

function IconEqual(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEqual {
	return IconEqual($size, $fill, $iconTypeWeight);
}

function IconEqualizer(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEqualizer {
	return IconEqualizer($size, $fill, $iconTypeWeight);
}

function IconEraserSize1(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEraserSize1 {
	return IconEraserSize1($size, $fill, $iconTypeWeight);
}

function IconEraserSize2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEraserSize2 {
	return IconEraserSize2($size, $fill, $iconTypeWeight);
}

function IconEraserSize3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEraserSize3 {
	return IconEraserSize3($size, $fill, $iconTypeWeight);
}

function IconEraserSize4(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEraserSize4 {
	return IconEraserSize4($size, $fill, $iconTypeWeight);
}

function IconEraserSize5(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEraserSize5 {
	return IconEraserSize5($size, $fill, $iconTypeWeight);
}

function IconError(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconError {
	return IconError($size, $fill, $iconTypeWeight);
}

function IconErrorMed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconErrorMed {
	return IconErrorMed($size, $fill, $iconTypeWeight);
}

function IconEscalator(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEscalator {
	return IconEscalator($size, $fill, $iconTypeWeight);
}

function IconEscalatorWarning(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEscalatorWarning {
	return IconEscalatorWarning($size, $fill, $iconTypeWeight);
}

function IconEuro(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEuro {
	return IconEuro($size, $fill, $iconTypeWeight);
}

function IconEuroSymbol(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEuroSymbol {
	return IconEuroSymbol($size, $fill, $iconTypeWeight);
}

function IconEvent(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEvent {
	return IconEvent($size, $fill, $iconTypeWeight);
}

function IconEventAvailable(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEventAvailable {
	return IconEventAvailable($size, $fill, $iconTypeWeight);
}

function IconEventBusy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEventBusy {
	return IconEventBusy($size, $fill, $iconTypeWeight);
}

function IconEventList(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEventList {
	return IconEventList($size, $fill, $iconTypeWeight);
}

function IconEventNote(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEventNote {
	return IconEventNote($size, $fill, $iconTypeWeight);
}

function IconEventRepeat(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEventRepeat {
	return IconEventRepeat($size, $fill, $iconTypeWeight);
}

function IconEventSeat(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEventSeat {
	return IconEventSeat($size, $fill, $iconTypeWeight);
}

function IconEventUpcoming(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEventUpcoming {
	return IconEventUpcoming($size, $fill, $iconTypeWeight);
}

function IconEvMobiledataBadge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEvMobiledataBadge {
	return IconEvMobiledataBadge($size, $fill, $iconTypeWeight);
}

function IconEvShadow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEvShadow {
	return IconEvShadow($size, $fill, $iconTypeWeight);
}

function IconEvShadowAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEvShadowAdd {
	return IconEvShadowAdd($size, $fill, $iconTypeWeight);
}

function IconEvShadowMinus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEvShadowMinus {
	return IconEvShadowMinus($size, $fill, $iconTypeWeight);
}

function IconEvStation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEvStation {
	return IconEvStation($size, $fill, $iconTypeWeight);
}

function IconExclamation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExclamation {
	return IconExclamation($size, $fill, $iconTypeWeight);
}

function IconExercise(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExercise {
	return IconExercise($size, $fill, $iconTypeWeight);
}

function IconExitToApp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExitToApp {
	return IconExitToApp($size, $fill, $iconTypeWeight);
}

function IconExpand(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExpand {
	return IconExpand($size, $fill, $iconTypeWeight);
}

function IconExpandAll(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExpandAll {
	return IconExpandAll($size, $fill, $iconTypeWeight);
}

function IconExpandCircleDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExpandCircleDown {
	return IconExpandCircleDown($size, $fill, $iconTypeWeight);
}

function IconExpandCircleRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExpandCircleRight {
	return IconExpandCircleRight($size, $fill, $iconTypeWeight);
}

function IconExpandCircleUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExpandCircleUp {
	return IconExpandCircleUp($size, $fill, $iconTypeWeight);
}

function IconExpandContent(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExpandContent {
	return IconExpandContent($size, $fill, $iconTypeWeight);
}

function IconExpansionPanels(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExpansionPanels {
	return IconExpansionPanels($size, $fill, $iconTypeWeight);
}

function IconExperiment(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExperiment {
	return IconExperiment($size, $fill, $iconTypeWeight);
}

function IconExplicit(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExplicit {
	return IconExplicit($size, $fill, $iconTypeWeight);
}

function IconExplore(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExplore {
	return IconExplore($size, $fill, $iconTypeWeight);
}

function IconExploreNearby(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExploreNearby {
	return IconExploreNearby($size, $fill, $iconTypeWeight);
}

function IconExploreOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExploreOff {
	return IconExploreOff($size, $fill, $iconTypeWeight);
}

function IconExplosion(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExplosion {
	return IconExplosion($size, $fill, $iconTypeWeight);
}

function IconExportNotes(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExportNotes {
	return IconExportNotes($size, $fill, $iconTypeWeight);
}

function IconExposure(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExposure {
	return IconExposure($size, $fill, $iconTypeWeight);
}

function IconExposureNeg1(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExposureNeg1 {
	return IconExposureNeg1($size, $fill, $iconTypeWeight);
}

function IconExposureNeg2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExposureNeg2 {
	return IconExposureNeg2($size, $fill, $iconTypeWeight);
}

function IconExposurePlus1(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExposurePlus1 {
	return IconExposurePlus1($size, $fill, $iconTypeWeight);
}

function IconExposurePlus2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExposurePlus2 {
	return IconExposurePlus2($size, $fill, $iconTypeWeight);
}

function IconExposureZero(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExposureZero {
	return IconExposureZero($size, $fill, $iconTypeWeight);
}

function IconExtension(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExtension {
	return IconExtension($size, $fill, $iconTypeWeight);
}

function IconExtensionOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExtensionOff {
	return IconExtensionOff($size, $fill, $iconTypeWeight);
}

function IconEyeglasses(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEyeglasses {
	return IconEyeglasses($size, $fill, $iconTypeWeight);
}

function IconEyeTracking(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEyeTracking {
	return IconEyeTracking($size, $fill, $iconTypeWeight);
}

function IconFace(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFace {
	return IconFace($size, $fill, $iconTypeWeight);
}

function IconFace2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFace2 {
	return IconFace2($size, $fill, $iconTypeWeight);
}

function IconFace3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFace3 {
	return IconFace3($size, $fill, $iconTypeWeight);
}

function IconFace4(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFace4 {
	return IconFace4($size, $fill, $iconTypeWeight);
}

function IconFace5(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFace5 {
	return IconFace5($size, $fill, $iconTypeWeight);
}

function IconFace6(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFace6 {
	return IconFace6($size, $fill, $iconTypeWeight);
}

function IconFaceDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFaceDown {
	return IconFaceDown($size, $fill, $iconTypeWeight);
}

function IconFaceLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFaceLeft {
	return IconFaceLeft($size, $fill, $iconTypeWeight);
}

function IconFaceNod(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFaceNod {
	return IconFaceNod($size, $fill, $iconTypeWeight);
}

function IconFaceRetouchingOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFaceRetouchingOff {
	return IconFaceRetouchingOff($size, $fill, $iconTypeWeight);
}

function IconFaceRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFaceRight {
	return IconFaceRight($size, $fill, $iconTypeWeight);
}

function IconFaceShake(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFaceShake {
	return IconFaceShake($size, $fill, $iconTypeWeight);
}

function IconFaceUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFaceUp {
	return IconFaceUp($size, $fill, $iconTypeWeight);
}

function IconFactCheck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFactCheck {
	return IconFactCheck($size, $fill, $iconTypeWeight);
}

function IconFactory(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFactory {
	return IconFactory($size, $fill, $iconTypeWeight);
}

function IconFalling(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFalling {
	return IconFalling($size, $fill, $iconTypeWeight);
}

function IconFamiliarFaceAndZone(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFamiliarFaceAndZone {
	return IconFamiliarFaceAndZone($size, $fill, $iconTypeWeight);
}

function IconFamilyHistory(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFamilyHistory {
	return IconFamilyHistory($size, $fill, $iconTypeWeight);
}

function IconFamilyHome(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFamilyHome {
	return IconFamilyHome($size, $fill, $iconTypeWeight);
}

function IconFamilyLink(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFamilyLink {
	return IconFamilyLink($size, $fill, $iconTypeWeight);
}

function IconFamilyRestroom(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFamilyRestroom {
	return IconFamilyRestroom($size, $fill, $iconTypeWeight);
}

function IconFamilyStar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFamilyStar {
	return IconFamilyStar($size, $fill, $iconTypeWeight);
}

function IconFarsightDigital(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFarsightDigital {
	return IconFarsightDigital($size, $fill, $iconTypeWeight);
}

function IconFastfood(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFastfood {
	return IconFastfood($size, $fill, $iconTypeWeight);
}

function IconFastForward(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFastForward {
	return IconFastForward($size, $fill, $iconTypeWeight);
}

function IconFastRewind(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFastRewind {
	return IconFastRewind($size, $fill, $iconTypeWeight);
}

function IconFaucet(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFaucet {
	return IconFaucet($size, $fill, $iconTypeWeight);
}

function IconFavorite(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFavorite {
	return IconFavorite($size, $fill, $iconTypeWeight);
}

function IconFax(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFax {
	return IconFax($size, $fill, $iconTypeWeight);
}

function IconFeaturedPlayList(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFeaturedPlayList {
	return IconFeaturedPlayList($size, $fill, $iconTypeWeight);
}

function IconFeaturedSeasonalAndGifts(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFeaturedSeasonalAndGifts {
	return IconFeaturedSeasonalAndGifts($size, $fill, $iconTypeWeight);
}

function IconFeaturedVideo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFeaturedVideo {
	return IconFeaturedVideo($size, $fill, $iconTypeWeight);
}

function IconFeatureSearch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFeatureSearch {
	return IconFeatureSearch($size, $fill, $iconTypeWeight);
}

function IconFeedback(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFeedback {
	return IconFeedback($size, $fill, $iconTypeWeight);
}

function IconFemale(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFemale {
	return IconFemale($size, $fill, $iconTypeWeight);
}

function IconFemur(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFemur {
	return IconFemur($size, $fill, $iconTypeWeight);
}

function IconFemurAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFemurAlt {
	return IconFemurAlt($size, $fill, $iconTypeWeight);
}

function IconFence(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFence {
	return IconFence($size, $fill, $iconTypeWeight);
}

function IconFertile(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFertile {
	return IconFertile($size, $fill, $iconTypeWeight);
}

function IconFestival(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFestival {
	return IconFestival($size, $fill, $iconTypeWeight);
}

function IconFiberDvr(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFiberDvr {
	return IconFiberDvr($size, $fill, $iconTypeWeight);
}

function IconFiberManualRecord(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFiberManualRecord {
	return IconFiberManualRecord($size, $fill, $iconTypeWeight);
}

function IconFiberNew(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFiberNew {
	return IconFiberNew($size, $fill, $iconTypeWeight);
}

function IconFiberPin(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFiberPin {
	return IconFiberPin($size, $fill, $iconTypeWeight);
}

function IconFiberSmartRecord(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFiberSmartRecord {
	return IconFiberSmartRecord($size, $fill, $iconTypeWeight);
}

function IconFileCopy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFileCopy {
	return IconFileCopy($size, $fill, $iconTypeWeight);
}

function IconFileCopyOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFileCopyOff {
	return IconFileCopyOff($size, $fill, $iconTypeWeight);
}

function IconFileDownloadOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFileDownloadOff {
	return IconFileDownloadOff($size, $fill, $iconTypeWeight);
}

function IconFileExport(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFileExport {
	return IconFileExport($size, $fill, $iconTypeWeight);
}

function IconFileJson(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFileJson {
	return IconFileJson($size, $fill, $iconTypeWeight);
}

function IconFileMap(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFileMap {
	return IconFileMap($size, $fill, $iconTypeWeight);
}

function IconFileMapStack(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFileMapStack {
	return IconFileMapStack($size, $fill, $iconTypeWeight);
}

function IconFileOpen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFileOpen {
	return IconFileOpen($size, $fill, $iconTypeWeight);
}

function IconFilePng(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilePng {
	return IconFilePng($size, $fill, $iconTypeWeight);
}

function IconFilePresent(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilePresent {
	return IconFilePresent($size, $fill, $iconTypeWeight);
}

function IconFiles(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFiles {
	return IconFiles($size, $fill, $iconTypeWeight);
}

function IconFileSave(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFileSave {
	return IconFileSave($size, $fill, $iconTypeWeight);
}

function IconFileSaveOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFileSaveOff {
	return IconFileSaveOff($size, $fill, $iconTypeWeight);
}

function IconFileUploadOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFileUploadOff {
	return IconFileUploadOff($size, $fill, $iconTypeWeight);
}

function IconFilter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilter {
	return IconFilter($size, $fill, $iconTypeWeight);
}

function IconFilter1(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilter1 {
	return IconFilter1($size, $fill, $iconTypeWeight);
}

function IconFilter2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilter2 {
	return IconFilter2($size, $fill, $iconTypeWeight);
}

function IconFilter3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilter3 {
	return IconFilter3($size, $fill, $iconTypeWeight);
}

function IconFilter4(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilter4 {
	return IconFilter4($size, $fill, $iconTypeWeight);
}

function IconFilter5(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilter5 {
	return IconFilter5($size, $fill, $iconTypeWeight);
}

function IconFilter6(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilter6 {
	return IconFilter6($size, $fill, $iconTypeWeight);
}

function IconFilter7(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilter7 {
	return IconFilter7($size, $fill, $iconTypeWeight);
}

function IconFilter8(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilter8 {
	return IconFilter8($size, $fill, $iconTypeWeight);
}

function IconFilter9(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilter9 {
	return IconFilter9($size, $fill, $iconTypeWeight);
}

function IconFilter9Plus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilter9Plus {
	return IconFilter9Plus($size, $fill, $iconTypeWeight);
}

function IconFilterAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilterAlt {
	return IconFilterAlt($size, $fill, $iconTypeWeight);
}

function IconFilterAltOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilterAltOff {
	return IconFilterAltOff($size, $fill, $iconTypeWeight);
}

function IconFilterArrowRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilterArrowRight {
	return IconFilterArrowRight($size, $fill, $iconTypeWeight);
}

function IconFilterBAndW(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilterBAndW {
	return IconFilterBAndW($size, $fill, $iconTypeWeight);
}

function IconFilterCenterFocus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilterCenterFocus {
	return IconFilterCenterFocus($size, $fill, $iconTypeWeight);
}

function IconFilterDrama(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilterDrama {
	return IconFilterDrama($size, $fill, $iconTypeWeight);
}

function IconFilterFrames(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilterFrames {
	return IconFilterFrames($size, $fill, $iconTypeWeight);
}

function IconFilterHdr(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilterHdr {
	return IconFilterHdr($size, $fill, $iconTypeWeight);
}

function IconFilterList(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilterList {
	return IconFilterList($size, $fill, $iconTypeWeight);
}

function IconFilterListOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilterListOff {
	return IconFilterListOff($size, $fill, $iconTypeWeight);
}

function IconFilterNone(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilterNone {
	return IconFilterNone($size, $fill, $iconTypeWeight);
}

function IconFilterRetrolux(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilterRetrolux {
	return IconFilterRetrolux($size, $fill, $iconTypeWeight);
}

function IconFilterTiltShift(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilterTiltShift {
	return IconFilterTiltShift($size, $fill, $iconTypeWeight);
}

function IconFilterVintage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilterVintage {
	return IconFilterVintage($size, $fill, $iconTypeWeight);
}

function IconFinance(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFinance {
	return IconFinance($size, $fill, $iconTypeWeight);
}

function IconFinanceChip(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFinanceChip {
	return IconFinanceChip($size, $fill, $iconTypeWeight);
}

function IconFinanceMode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFinanceMode {
	return IconFinanceMode($size, $fill, $iconTypeWeight);
}

function IconFindInPage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFindInPage {
	return IconFindInPage($size, $fill, $iconTypeWeight);
}

function IconFindReplace(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFindReplace {
	return IconFindReplace($size, $fill, $iconTypeWeight);
}

function IconFingerprint(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFingerprint {
	return IconFingerprint($size, $fill, $iconTypeWeight);
}

function IconFingerprintOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFingerprintOff {
	return IconFingerprintOff($size, $fill, $iconTypeWeight);
}

function IconFireExtinguisher(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFireExtinguisher {
	return IconFireExtinguisher($size, $fill, $iconTypeWeight);
}

function IconFireHydrant(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFireHydrant {
	return IconFireHydrant($size, $fill, $iconTypeWeight);
}

function IconFireplace(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFireplace {
	return IconFireplace($size, $fill, $iconTypeWeight);
}

function IconFireTruck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFireTruck {
	return IconFireTruck($size, $fill, $iconTypeWeight);
}

function IconFirstPage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFirstPage {
	return IconFirstPage($size, $fill, $iconTypeWeight);
}

function IconFitnessCenter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFitnessCenter {
	return IconFitnessCenter($size, $fill, $iconTypeWeight);
}

function IconFitnessTracker(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFitnessTracker {
	return IconFitnessTracker($size, $fill, $iconTypeWeight);
}

function IconFitPage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFitPage {
	return IconFitPage($size, $fill, $iconTypeWeight);
}

function IconFitPageHeight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFitPageHeight {
	return IconFitPageHeight($size, $fill, $iconTypeWeight);
}

function IconFitPageWidth(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFitPageWidth {
	return IconFitPageWidth($size, $fill, $iconTypeWeight);
}

function IconFitScreen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFitScreen {
	return IconFitScreen($size, $fill, $iconTypeWeight);
}

function IconFitWidth(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFitWidth {
	return IconFitWidth($size, $fill, $iconTypeWeight);
}

function IconFlag(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlag {
	return IconFlag($size, $fill, $iconTypeWeight);
}

function IconFlag2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlag2 {
	return IconFlag2($size, $fill, $iconTypeWeight);
}

function IconFlagCheck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlagCheck {
	return IconFlagCheck($size, $fill, $iconTypeWeight);
}

function IconFlagCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlagCircle {
	return IconFlagCircle($size, $fill, $iconTypeWeight);
}

function IconFlaky(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlaky {
	return IconFlaky($size, $fill, $iconTypeWeight);
}

function IconFlare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlare {
	return IconFlare($size, $fill, $iconTypeWeight);
}

function IconFlashAuto(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlashAuto {
	return IconFlashAuto($size, $fill, $iconTypeWeight);
}

function IconFlashlightOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlashlightOff {
	return IconFlashlightOff($size, $fill, $iconTypeWeight);
}

function IconFlashlightOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlashlightOn {
	return IconFlashlightOn($size, $fill, $iconTypeWeight);
}

function IconFlashOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlashOff {
	return IconFlashOff($size, $fill, $iconTypeWeight);
}

function IconFlashOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlashOn {
	return IconFlashOn($size, $fill, $iconTypeWeight);
}

function IconFlatware(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlatware {
	return IconFlatware($size, $fill, $iconTypeWeight);
}

function IconFlexDirection(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlexDirection {
	return IconFlexDirection($size, $fill, $iconTypeWeight);
}

function IconFlexNoWrap(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlexNoWrap {
	return IconFlexNoWrap($size, $fill, $iconTypeWeight);
}

function IconFlexWrap(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlexWrap {
	return IconFlexWrap($size, $fill, $iconTypeWeight);
}

function IconFlight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlight {
	return IconFlight($size, $fill, $iconTypeWeight);
}

function IconFlightClass(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlightClass {
	return IconFlightClass($size, $fill, $iconTypeWeight);
}

function IconFlightLand(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlightLand {
	return IconFlightLand($size, $fill, $iconTypeWeight);
}

function IconFlightsAndHotels(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlightsAndHotels {
	return IconFlightsAndHotels($size, $fill, $iconTypeWeight);
}

function IconFlightTakeoff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlightTakeoff {
	return IconFlightTakeoff($size, $fill, $iconTypeWeight);
}

function IconFlip(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlip {
	return IconFlip($size, $fill, $iconTypeWeight);
}

function IconFlipCameraAndroid(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlipCameraAndroid {
	return IconFlipCameraAndroid($size, $fill, $iconTypeWeight);
}

function IconFlipCameraIos(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlipCameraIos {
	return IconFlipCameraIos($size, $fill, $iconTypeWeight);
}

function IconFlipToBack(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlipToBack {
	return IconFlipToBack($size, $fill, $iconTypeWeight);
}

function IconFlipToFront(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlipToFront {
	return IconFlipToFront($size, $fill, $iconTypeWeight);
}

function IconFloatLandscape2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFloatLandscape2 {
	return IconFloatLandscape2($size, $fill, $iconTypeWeight);
}

function IconFloatPortrait2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFloatPortrait2 {
	return IconFloatPortrait2($size, $fill, $iconTypeWeight);
}

function IconFlood(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlood {
	return IconFlood($size, $fill, $iconTypeWeight);
}

function IconFloor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFloor {
	return IconFloor($size, $fill, $iconTypeWeight);
}

function IconFloorLamp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFloorLamp {
	return IconFloorLamp($size, $fill, $iconTypeWeight);
}

function IconFlowchart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlowchart {
	return IconFlowchart($size, $fill, $iconTypeWeight);
}

function IconFlowsheet(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlowsheet {
	return IconFlowsheet($size, $fill, $iconTypeWeight);
}

function IconFluid(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFluid {
	return IconFluid($size, $fill, $iconTypeWeight);
}

function IconFluidBalance(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFluidBalance {
	return IconFluidBalance($size, $fill, $iconTypeWeight);
}

function IconFluidMed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFluidMed {
	return IconFluidMed($size, $fill, $iconTypeWeight);
}

function IconFluorescent(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFluorescent {
	return IconFluorescent($size, $fill, $iconTypeWeight);
}

function IconFlutter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlutter {
	return IconFlutter($size, $fill, $iconTypeWeight);
}

function IconFlutterDash(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlutterDash {
	return IconFlutterDash($size, $fill, $iconTypeWeight);
}

function IconFlyover(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlyover {
	return IconFlyover($size, $fill, $iconTypeWeight);
}

function IconFmdBad(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFmdBad {
	return IconFmdBad($size, $fill, $iconTypeWeight);
}

function IconFoggy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFoggy {
	return IconFoggy($size, $fill, $iconTypeWeight);
}

function IconFoldedHands(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFoldedHands {
	return IconFoldedHands($size, $fill, $iconTypeWeight);
}

function IconFolder(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFolder {
	return IconFolder($size, $fill, $iconTypeWeight);
}

function IconFolderCheck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFolderCheck {
	return IconFolderCheck($size, $fill, $iconTypeWeight);
}

function IconFolderCheck2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFolderCheck2 {
	return IconFolderCheck2($size, $fill, $iconTypeWeight);
}

function IconFolderCode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFolderCode {
	return IconFolderCode($size, $fill, $iconTypeWeight);
}

function IconFolderCopy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFolderCopy {
	return IconFolderCopy($size, $fill, $iconTypeWeight);
}

function IconFolderData(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFolderData {
	return IconFolderData($size, $fill, $iconTypeWeight);
}

function IconFolderDelete(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFolderDelete {
	return IconFolderDelete($size, $fill, $iconTypeWeight);
}

function IconFolderEye(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFolderEye {
	return IconFolderEye($size, $fill, $iconTypeWeight);
}

function IconFolderInfo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFolderInfo {
	return IconFolderInfo($size, $fill, $iconTypeWeight);
}

function IconFolderLimited(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFolderLimited {
	return IconFolderLimited($size, $fill, $iconTypeWeight);
}

function IconFolderManaged(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFolderManaged {
	return IconFolderManaged($size, $fill, $iconTypeWeight);
}

function IconFolderMatch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFolderMatch {
	return IconFolderMatch($size, $fill, $iconTypeWeight);
}

function IconFolderOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFolderOff {
	return IconFolderOff($size, $fill, $iconTypeWeight);
}

function IconFolderOpen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFolderOpen {
	return IconFolderOpen($size, $fill, $iconTypeWeight);
}

function IconFolderShared(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFolderShared {
	return IconFolderShared($size, $fill, $iconTypeWeight);
}

function IconFolderSpecial(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFolderSpecial {
	return IconFolderSpecial($size, $fill, $iconTypeWeight);
}

function IconFolderSupervised(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFolderSupervised {
	return IconFolderSupervised($size, $fill, $iconTypeWeight);
}

function IconFolderZip(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFolderZip {
	return IconFolderZip($size, $fill, $iconTypeWeight);
}

function IconFollowTheSigns(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFollowTheSigns {
	return IconFollowTheSigns($size, $fill, $iconTypeWeight);
}

function IconFontDownload(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFontDownload {
	return IconFontDownload($size, $fill, $iconTypeWeight);
}

function IconFontDownloadOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFontDownloadOff {
	return IconFontDownloadOff($size, $fill, $iconTypeWeight);
}

function IconFoodBank(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFoodBank {
	return IconFoodBank($size, $fill, $iconTypeWeight);
}

function IconFootBones(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFootBones {
	return IconFootBones($size, $fill, $iconTypeWeight);
}

function IconFootprint(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFootprint {
	return IconFootprint($size, $fill, $iconTypeWeight);
}

function IconForest(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconForest {
	return IconForest($size, $fill, $iconTypeWeight);
}

function IconForkLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconForkLeft {
	return IconForkLeft($size, $fill, $iconTypeWeight);
}

function IconForklift(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconForklift {
	return IconForklift($size, $fill, $iconTypeWeight);
}

function IconForkRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconForkRight {
	return IconForkRight($size, $fill, $iconTypeWeight);
}

function IconForkSpoon(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconForkSpoon {
	return IconForkSpoon($size, $fill, $iconTypeWeight);
}

function IconFormatAlignCenter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatAlignCenter {
	return IconFormatAlignCenter($size, $fill, $iconTypeWeight);
}

function IconFormatAlignJustify(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatAlignJustify {
	return IconFormatAlignJustify($size, $fill, $iconTypeWeight);
}

function IconFormatAlignLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatAlignLeft {
	return IconFormatAlignLeft($size, $fill, $iconTypeWeight);
}

function IconFormatAlignRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatAlignRight {
	return IconFormatAlignRight($size, $fill, $iconTypeWeight);
}

function IconFormatBold(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatBold {
	return IconFormatBold($size, $fill, $iconTypeWeight);
}

function IconFormatClear(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatClear {
	return IconFormatClear($size, $fill, $iconTypeWeight);
}

function IconFormatColorFill(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatColorFill {
	return IconFormatColorFill($size, $fill, $iconTypeWeight);
}

function IconFormatColorReset(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatColorReset {
	return IconFormatColorReset($size, $fill, $iconTypeWeight);
}

function IconFormatColorText(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatColorText {
	return IconFormatColorText($size, $fill, $iconTypeWeight);
}

function IconFormatH1(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatH1 {
	return IconFormatH1($size, $fill, $iconTypeWeight);
}

function IconFormatH2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatH2 {
	return IconFormatH2($size, $fill, $iconTypeWeight);
}

function IconFormatH3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatH3 {
	return IconFormatH3($size, $fill, $iconTypeWeight);
}

function IconFormatH4(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatH4 {
	return IconFormatH4($size, $fill, $iconTypeWeight);
}

function IconFormatH5(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatH5 {
	return IconFormatH5($size, $fill, $iconTypeWeight);
}

function IconFormatH6(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatH6 {
	return IconFormatH6($size, $fill, $iconTypeWeight);
}

function IconFormatImageLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatImageLeft {
	return IconFormatImageLeft($size, $fill, $iconTypeWeight);
}

function IconFormatImageRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatImageRight {
	return IconFormatImageRight($size, $fill, $iconTypeWeight);
}

function IconFormatIndentDecrease(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatIndentDecrease {
	return IconFormatIndentDecrease($size, $fill, $iconTypeWeight);
}

function IconFormatIndentIncrease(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatIndentIncrease {
	return IconFormatIndentIncrease($size, $fill, $iconTypeWeight);
}

function IconFormatInkHighlighter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatInkHighlighter {
	return IconFormatInkHighlighter($size, $fill, $iconTypeWeight);
}

function IconFormatItalic(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatItalic {
	return IconFormatItalic($size, $fill, $iconTypeWeight);
}

function IconFormatLetterSpacing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatLetterSpacing {
	return IconFormatLetterSpacing($size, $fill, $iconTypeWeight);
}

function IconFormatLetterSpacing2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatLetterSpacing2 {
	return IconFormatLetterSpacing2($size, $fill, $iconTypeWeight);
}

function IconFormatLetterSpacingStandard(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatLetterSpacingStandard {
	return IconFormatLetterSpacingStandard($size, $fill, $iconTypeWeight);
}

function IconFormatLetterSpacingWide(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatLetterSpacingWide {
	return IconFormatLetterSpacingWide($size, $fill, $iconTypeWeight);
}

function IconFormatLetterSpacingWider(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatLetterSpacingWider {
	return IconFormatLetterSpacingWider($size, $fill, $iconTypeWeight);
}

function IconFormatLineSpacing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatLineSpacing {
	return IconFormatLineSpacing($size, $fill, $iconTypeWeight);
}

function IconFormatListBulleted(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatListBulleted {
	return IconFormatListBulleted($size, $fill, $iconTypeWeight);
}

function IconFormatListBulletedAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatListBulletedAdd {
	return IconFormatListBulletedAdd($size, $fill, $iconTypeWeight);
}

function IconFormatListNumbered(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatListNumbered {
	return IconFormatListNumbered($size, $fill, $iconTypeWeight);
}

function IconFormatListNumberedRtl(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatListNumberedRtl {
	return IconFormatListNumberedRtl($size, $fill, $iconTypeWeight);
}

function IconFormatOverline(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatOverline {
	return IconFormatOverline($size, $fill, $iconTypeWeight);
}

function IconFormatPaint(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatPaint {
	return IconFormatPaint($size, $fill, $iconTypeWeight);
}

function IconFormatParagraph(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatParagraph {
	return IconFormatParagraph($size, $fill, $iconTypeWeight);
}

function IconFormatQuote(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatQuote {
	return IconFormatQuote($size, $fill, $iconTypeWeight);
}

function IconFormatQuoteOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatQuoteOff {
	return IconFormatQuoteOff($size, $fill, $iconTypeWeight);
}

function IconFormatShapes(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatShapes {
	return IconFormatShapes($size, $fill, $iconTypeWeight);
}

function IconFormatSize(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatSize {
	return IconFormatSize($size, $fill, $iconTypeWeight);
}

function IconFormatStrikethrough(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatStrikethrough {
	return IconFormatStrikethrough($size, $fill, $iconTypeWeight);
}

function IconFormatTextClip(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatTextClip {
	return IconFormatTextClip($size, $fill, $iconTypeWeight);
}

function IconFormatTextdirectionLToR(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatTextdirectionLToR {
	return IconFormatTextdirectionLToR($size, $fill, $iconTypeWeight);
}

function IconFormatTextdirectionRToL(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatTextdirectionRToL {
	return IconFormatTextdirectionRToL($size, $fill, $iconTypeWeight);
}

function IconFormatTextdirectionVertical(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatTextdirectionVertical {
	return IconFormatTextdirectionVertical($size, $fill, $iconTypeWeight);
}

function IconFormatTextOverflow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatTextOverflow {
	return IconFormatTextOverflow($size, $fill, $iconTypeWeight);
}

function IconFormatTextWrap(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatTextWrap {
	return IconFormatTextWrap($size, $fill, $iconTypeWeight);
}

function IconFormatUnderlined(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatUnderlined {
	return IconFormatUnderlined($size, $fill, $iconTypeWeight);
}

function IconFormatUnderlinedSquiggle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatUnderlinedSquiggle {
	return IconFormatUnderlinedSquiggle($size, $fill, $iconTypeWeight);
}

function IconFormsAddOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormsAddOn {
	return IconFormsAddOn($size, $fill, $iconTypeWeight);
}

function IconFormsAppsScript(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormsAppsScript {
	return IconFormsAppsScript($size, $fill, $iconTypeWeight);
}

function IconFort(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFort {
	return IconFort($size, $fill, $iconTypeWeight);
}

function IconForum(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconForum {
	return IconForum($size, $fill, $iconTypeWeight);
}

function IconForward(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconForward {
	return IconForward($size, $fill, $iconTypeWeight);
}

function IconForward10(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconForward10 {
	return IconForward10($size, $fill, $iconTypeWeight);
}

function IconForward30(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconForward30 {
	return IconForward30($size, $fill, $iconTypeWeight);
}

function IconForward5(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconForward5 {
	return IconForward5($size, $fill, $iconTypeWeight);
}

function IconForwardCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconForwardCircle {
	return IconForwardCircle($size, $fill, $iconTypeWeight);
}

function IconForwardMedia(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconForwardMedia {
	return IconForwardMedia($size, $fill, $iconTypeWeight);
}

function IconForwardToInbox(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconForwardToInbox {
	return IconForwardToInbox($size, $fill, $iconTypeWeight);
}

function IconForYou(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconForYou {
	return IconForYou($size, $fill, $iconTypeWeight);
}

function IconFoundation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFoundation {
	return IconFoundation($size, $fill, $iconTypeWeight);
}

function IconFrameInspect(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFrameInspect {
	return IconFrameInspect($size, $fill, $iconTypeWeight);
}

function IconFramePerson(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFramePerson {
	return IconFramePerson($size, $fill, $iconTypeWeight);
}

function IconFramePersonMic(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFramePersonMic {
	return IconFramePersonMic($size, $fill, $iconTypeWeight);
}

function IconFramePersonOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFramePersonOff {
	return IconFramePersonOff($size, $fill, $iconTypeWeight);
}

function IconFrameReload(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFrameReload {
	return IconFrameReload($size, $fill, $iconTypeWeight);
}

function IconFrameSource(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFrameSource {
	return IconFrameSource($size, $fill, $iconTypeWeight);
}

function IconFreeCancellation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFreeCancellation {
	return IconFreeCancellation($size, $fill, $iconTypeWeight);
}

function IconFrontHand(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFrontHand {
	return IconFrontHand($size, $fill, $iconTypeWeight);
}

function IconFrontLoader(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFrontLoader {
	return IconFrontLoader($size, $fill, $iconTypeWeight);
}

function IconFullCoverage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFullCoverage {
	return IconFullCoverage($size, $fill, $iconTypeWeight);
}

function IconFullHd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFullHd {
	return IconFullHd($size, $fill, $iconTypeWeight);
}

function IconFullscreen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFullscreen {
	return IconFullscreen($size, $fill, $iconTypeWeight);
}

function IconFullscreenExit(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFullscreenExit {
	return IconFullscreenExit($size, $fill, $iconTypeWeight);
}

function IconFullscreenPortrait(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFullscreenPortrait {
	return IconFullscreenPortrait($size, $fill, $iconTypeWeight);
}

function IconFullStackedBarChart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFullStackedBarChart {
	return IconFullStackedBarChart($size, $fill, $iconTypeWeight);
}

function IconFunction(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFunction {
	return IconFunction($size, $fill, $iconTypeWeight);
}

function IconFunctions(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFunctions {
	return IconFunctions($size, $fill, $iconTypeWeight);
}

function IconFunicular(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFunicular {
	return IconFunicular($size, $fill, $iconTypeWeight);
}

function IconGalleryThumbnail(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGalleryThumbnail {
	return IconGalleryThumbnail($size, $fill, $iconTypeWeight);
}

function IconGamepad(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGamepad {
	return IconGamepad($size, $fill, $iconTypeWeight);
}

function IconGarage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGarage {
	return IconGarage($size, $fill, $iconTypeWeight);
}

function IconGarageDoor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGarageDoor {
	return IconGarageDoor($size, $fill, $iconTypeWeight);
}

function IconGarageHome(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGarageHome {
	return IconGarageHome($size, $fill, $iconTypeWeight);
}

function IconGardenCart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGardenCart {
	return IconGardenCart($size, $fill, $iconTypeWeight);
}

function IconGasMeter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGasMeter {
	return IconGasMeter($size, $fill, $iconTypeWeight);
}

function IconGastroenterology(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGastroenterology {
	return IconGastroenterology($size, $fill, $iconTypeWeight);
}

function IconGate(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGate {
	return IconGate($size, $fill, $iconTypeWeight);
}

function IconGavel(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGavel {
	return IconGavel($size, $fill, $iconTypeWeight);
}

function IconGeneralDevice(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGeneralDevice {
	return IconGeneralDevice($size, $fill, $iconTypeWeight);
}

function IconGenetics(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGenetics {
	return IconGenetics($size, $fill, $iconTypeWeight);
}

function IconGenres(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGenres {
	return IconGenres($size, $fill, $iconTypeWeight);
}

function IconGesture(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGesture {
	return IconGesture($size, $fill, $iconTypeWeight);
}

function IconGestureSelect(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGestureSelect {
	return IconGestureSelect($size, $fill, $iconTypeWeight);
}

function IconGif(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGif {
	return IconGif($size, $fill, $iconTypeWeight);
}

function IconGif2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGif2 {
	return IconGif2($size, $fill, $iconTypeWeight);
}

function IconGifBox(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGifBox {
	return IconGifBox($size, $fill, $iconTypeWeight);
}

function IconGirl(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGirl {
	return IconGirl($size, $fill, $iconTypeWeight);
}

function IconGite(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGite {
	return IconGite($size, $fill, $iconTypeWeight);
}

function IconGlassCup(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGlassCup {
	return IconGlassCup($size, $fill, $iconTypeWeight);
}

function IconGlobe(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGlobe {
	return IconGlobe($size, $fill, $iconTypeWeight);
}

function IconGlobeAsia(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGlobeAsia {
	return IconGlobeAsia($size, $fill, $iconTypeWeight);
}

function IconGlobeBook(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGlobeBook {
	return IconGlobeBook($size, $fill, $iconTypeWeight);
}

function IconGlobeUk(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGlobeUk {
	return IconGlobeUk($size, $fill, $iconTypeWeight);
}

function IconGlucose(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGlucose {
	return IconGlucose($size, $fill, $iconTypeWeight);
}

function IconGlyphs(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGlyphs {
	return IconGlyphs($size, $fill, $iconTypeWeight);
}

function IconGMobiledata(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGMobiledata {
	return IconGMobiledata($size, $fill, $iconTypeWeight);
}

function IconGMobiledataBadge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGMobiledataBadge {
	return IconGMobiledataBadge($size, $fill, $iconTypeWeight);
}

function IconGolfCourse(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGolfCourse {
	return IconGolfCourse($size, $fill, $iconTypeWeight);
}

function IconGondolaLift(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGondolaLift {
	return IconGondolaLift($size, $fill, $iconTypeWeight);
}

function IconGoogleHomeDevices(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGoogleHomeDevices {
	return IconGoogleHomeDevices($size, $fill, $iconTypeWeight);
}

function IconGoogleTvRemote(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGoogleTvRemote {
	return IconGoogleTvRemote($size, $fill, $iconTypeWeight);
}

function IconGoogleWifi(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGoogleWifi {
	return IconGoogleWifi($size, $fill, $iconTypeWeight);
}

function IconGoToLine(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGoToLine {
	return IconGoToLine($size, $fill, $iconTypeWeight);
}

function IconGppBad(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGppBad {
	return IconGppBad($size, $fill, $iconTypeWeight);
}

function IconGppMaybe(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGppMaybe {
	return IconGppMaybe($size, $fill, $iconTypeWeight);
}

function IconGradient(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGradient {
	return IconGradient($size, $fill, $iconTypeWeight);
}

function IconGrading(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGrading {
	return IconGrading($size, $fill, $iconTypeWeight);
}

function IconGrain(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGrain {
	return IconGrain($size, $fill, $iconTypeWeight);
}

function IconGraph1(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGraph1 {
	return IconGraph1($size, $fill, $iconTypeWeight);
}

function IconGraph2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGraph2 {
	return IconGraph2($size, $fill, $iconTypeWeight);
}

function IconGraph3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGraph3 {
	return IconGraph3($size, $fill, $iconTypeWeight);
}

function IconGraph4(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGraph4 {
	return IconGraph4($size, $fill, $iconTypeWeight);
}

function IconGraph5(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGraph5 {
	return IconGraph5($size, $fill, $iconTypeWeight);
}

function IconGraph6(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGraph6 {
	return IconGraph6($size, $fill, $iconTypeWeight);
}

function IconGraphicEq(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGraphicEq {
	return IconGraphicEq($size, $fill, $iconTypeWeight);
}

function IconGrass(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGrass {
	return IconGrass($size, $fill, $iconTypeWeight);
}

function IconGrid3x3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGrid3x3 {
	return IconGrid3x3($size, $fill, $iconTypeWeight);
}

function IconGrid3x3Off(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGrid3x3Off {
	return IconGrid3x3Off($size, $fill, $iconTypeWeight);
}

function IconGrid4x4(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGrid4x4 {
	return IconGrid4x4($size, $fill, $iconTypeWeight);
}

function IconGridGoldenratio(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGridGoldenratio {
	return IconGridGoldenratio($size, $fill, $iconTypeWeight);
}

function IconGridGuides(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGridGuides {
	return IconGridGuides($size, $fill, $iconTypeWeight);
}

function IconGridOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGridOff {
	return IconGridOff($size, $fill, $iconTypeWeight);
}

function IconGridOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGridOn {
	return IconGridOn($size, $fill, $iconTypeWeight);
}

function IconGridView(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGridView {
	return IconGridView($size, $fill, $iconTypeWeight);
}

function IconGrocery(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGrocery {
	return IconGrocery($size, $fill, $iconTypeWeight);
}

function IconGroup(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGroup {
	return IconGroup($size, $fill, $iconTypeWeight);
}

function IconGroupAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGroupAdd {
	return IconGroupAdd($size, $fill, $iconTypeWeight);
}

function IconGroupedBarChart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGroupedBarChart {
	return IconGroupedBarChart($size, $fill, $iconTypeWeight);
}

function IconGroupOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGroupOff {
	return IconGroupOff($size, $fill, $iconTypeWeight);
}

function IconGroupRemove(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGroupRemove {
	return IconGroupRemove($size, $fill, $iconTypeWeight);
}

function IconGroups(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGroups {
	return IconGroups($size, $fill, $iconTypeWeight);
}

function IconGroups2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGroups2 {
	return IconGroups2($size, $fill, $iconTypeWeight);
}

function IconGroups3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGroups3 {
	return IconGroups3($size, $fill, $iconTypeWeight);
}

function IconGroupSearch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGroupSearch {
	return IconGroupSearch($size, $fill, $iconTypeWeight);
}

function IconGroupWork(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGroupWork {
	return IconGroupWork($size, $fill, $iconTypeWeight);
}

function IconGTranslate(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGTranslate {
	return IconGTranslate($size, $fill, $iconTypeWeight);
}

function IconGuardian(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGuardian {
	return IconGuardian($size, $fill, $iconTypeWeight);
}

function IconGynecology(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGynecology {
	return IconGynecology($size, $fill, $iconTypeWeight);
}

function IconHail(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHail {
	return IconHail($size, $fill, $iconTypeWeight);
}

function IconHallway(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHallway {
	return IconHallway($size, $fill, $iconTypeWeight);
}

function IconHandBones(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHandBones {
	return IconHandBones($size, $fill, $iconTypeWeight);
}

function IconHandGesture(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHandGesture {
	return IconHandGesture($size, $fill, $iconTypeWeight);
}

function IconHandGestureOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHandGestureOff {
	return IconHandGestureOff($size, $fill, $iconTypeWeight);
}

function IconHandheldController(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHandheldController {
	return IconHandheldController($size, $fill, $iconTypeWeight);
}

function IconHandshake(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHandshake {
	return IconHandshake($size, $fill, $iconTypeWeight);
}

function IconHandyman(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHandyman {
	return IconHandyman($size, $fill, $iconTypeWeight);
}

function IconHangoutVideo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHangoutVideo {
	return IconHangoutVideo($size, $fill, $iconTypeWeight);
}

function IconHangoutVideoOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHangoutVideoOff {
	return IconHangoutVideoOff($size, $fill, $iconTypeWeight);
}

function IconHardDisk(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHardDisk {
	return IconHardDisk($size, $fill, $iconTypeWeight);
}

function IconHardDrive(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHardDrive {
	return IconHardDrive($size, $fill, $iconTypeWeight);
}

function IconHardDrive2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHardDrive2 {
	return IconHardDrive2($size, $fill, $iconTypeWeight);
}

function IconHardware(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHardware {
	return IconHardware($size, $fill, $iconTypeWeight);
}

function IconHd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHd {
	return IconHd($size, $fill, $iconTypeWeight);
}

function IconHdrAuto(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHdrAuto {
	return IconHdrAuto($size, $fill, $iconTypeWeight);
}

function IconHdrAutoSelect(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHdrAutoSelect {
	return IconHdrAutoSelect($size, $fill, $iconTypeWeight);
}

function IconHdrEnhancedSelect(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHdrEnhancedSelect {
	return IconHdrEnhancedSelect($size, $fill, $iconTypeWeight);
}

function IconHdrOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHdrOff {
	return IconHdrOff($size, $fill, $iconTypeWeight);
}

function IconHdrOffSelect(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHdrOffSelect {
	return IconHdrOffSelect($size, $fill, $iconTypeWeight);
}

function IconHdrOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHdrOn {
	return IconHdrOn($size, $fill, $iconTypeWeight);
}

function IconHdrOnSelect(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHdrOnSelect {
	return IconHdrOnSelect($size, $fill, $iconTypeWeight);
}

function IconHdrPlus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHdrPlus {
	return IconHdrPlus($size, $fill, $iconTypeWeight);
}

function IconHdrPlusOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHdrPlusOff {
	return IconHdrPlusOff($size, $fill, $iconTypeWeight);
}

function IconHdrStrong(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHdrStrong {
	return IconHdrStrong($size, $fill, $iconTypeWeight);
}

function IconHdrWeak(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHdrWeak {
	return IconHdrWeak($size, $fill, $iconTypeWeight);
}

function IconHeadMountedDevice(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHeadMountedDevice {
	return IconHeadMountedDevice($size, $fill, $iconTypeWeight);
}

function IconHeadphones(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHeadphones {
	return IconHeadphones($size, $fill, $iconTypeWeight);
}

function IconHeadphonesBattery(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHeadphonesBattery {
	return IconHeadphonesBattery($size, $fill, $iconTypeWeight);
}

function IconHeadsetMic(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHeadsetMic {
	return IconHeadsetMic($size, $fill, $iconTypeWeight);
}

function IconHeadsetOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHeadsetOff {
	return IconHeadsetOff($size, $fill, $iconTypeWeight);
}

function IconHealing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHealing {
	return IconHealing($size, $fill, $iconTypeWeight);
}

function IconHealthAndBeauty(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHealthAndBeauty {
	return IconHealthAndBeauty($size, $fill, $iconTypeWeight);
}

function IconHealthAndSafety(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHealthAndSafety {
	return IconHealthAndSafety($size, $fill, $iconTypeWeight);
}

function IconHealthMetrics(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHealthMetrics {
	return IconHealthMetrics($size, $fill, $iconTypeWeight);
}

function IconHeapSnapshotLarge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHeapSnapshotLarge {
	return IconHeapSnapshotLarge($size, $fill, $iconTypeWeight);
}

function IconHeapSnapshotMultiple(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHeapSnapshotMultiple {
	return IconHeapSnapshotMultiple($size, $fill, $iconTypeWeight);
}

function IconHeapSnapshotThumbnail(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHeapSnapshotThumbnail {
	return IconHeapSnapshotThumbnail($size, $fill, $iconTypeWeight);
}

function IconHearing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHearing {
	return IconHearing($size, $fill, $iconTypeWeight);
}

function IconHearingAid(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHearingAid {
	return IconHearingAid($size, $fill, $iconTypeWeight);
}

function IconHearingAidDisabled(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHearingAidDisabled {
	return IconHearingAidDisabled($size, $fill, $iconTypeWeight);
}

function IconHearingDisabled(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHearingDisabled {
	return IconHearingDisabled($size, $fill, $iconTypeWeight);
}

function IconHeartBroken(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHeartBroken {
	return IconHeartBroken($size, $fill, $iconTypeWeight);
}

function IconHeartCheck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHeartCheck {
	return IconHeartCheck($size, $fill, $iconTypeWeight);
}

function IconHeartMinus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHeartMinus {
	return IconHeartMinus($size, $fill, $iconTypeWeight);
}

function IconHeartPlus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHeartPlus {
	return IconHeartPlus($size, $fill, $iconTypeWeight);
}

function IconHeat(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHeat {
	return IconHeat($size, $fill, $iconTypeWeight);
}

function IconHeatPump(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHeatPump {
	return IconHeatPump($size, $fill, $iconTypeWeight);
}

function IconHeatPumpBalance(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHeatPumpBalance {
	return IconHeatPumpBalance($size, $fill, $iconTypeWeight);
}

function IconHeight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHeight {
	return IconHeight($size, $fill, $iconTypeWeight);
}

function IconHelicopter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHelicopter {
	return IconHelicopter($size, $fill, $iconTypeWeight);
}

function IconHelp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHelp {
	return IconHelp($size, $fill, $iconTypeWeight);
}

function IconHelpCenter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHelpCenter {
	return IconHelpCenter($size, $fill, $iconTypeWeight);
}

function IconHelpClinic(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHelpClinic {
	return IconHelpClinic($size, $fill, $iconTypeWeight);
}

function IconHematology(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHematology {
	return IconHematology($size, $fill, $iconTypeWeight);
}

function IconHevc(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHevc {
	return IconHevc($size, $fill, $iconTypeWeight);
}

function IconHexagon(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHexagon {
	return IconHexagon($size, $fill, $iconTypeWeight);
}

function IconHide(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHide {
	return IconHide($size, $fill, $iconTypeWeight);
}

function IconHideImage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHideImage {
	return IconHideImage($size, $fill, $iconTypeWeight);
}

function IconHideSource(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHideSource {
	return IconHideSource($size, $fill, $iconTypeWeight);
}

function IconHighDensity(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHighDensity {
	return IconHighDensity($size, $fill, $iconTypeWeight);
}

function IconHighlight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHighlight {
	return IconHighlight($size, $fill, $iconTypeWeight);
}

function IconHighlighterSize1(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHighlighterSize1 {
	return IconHighlighterSize1($size, $fill, $iconTypeWeight);
}

function IconHighlighterSize2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHighlighterSize2 {
	return IconHighlighterSize2($size, $fill, $iconTypeWeight);
}

function IconHighlighterSize3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHighlighterSize3 {
	return IconHighlighterSize3($size, $fill, $iconTypeWeight);
}

function IconHighlighterSize4(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHighlighterSize4 {
	return IconHighlighterSize4($size, $fill, $iconTypeWeight);
}

function IconHighlighterSize5(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHighlighterSize5 {
	return IconHighlighterSize5($size, $fill, $iconTypeWeight);
}

function IconHighlightKeyboardFocus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHighlightKeyboardFocus {
	return IconHighlightKeyboardFocus($size, $fill, $iconTypeWeight);
}

function IconHighlightMouseCursor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHighlightMouseCursor {
	return IconHighlightMouseCursor($size, $fill, $iconTypeWeight);
}

function IconHighlightTextCursor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHighlightTextCursor {
	return IconHighlightTextCursor($size, $fill, $iconTypeWeight);
}

function IconHighQuality(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHighQuality {
	return IconHighQuality($size, $fill, $iconTypeWeight);
}

function IconHighRes(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHighRes {
	return IconHighRes($size, $fill, $iconTypeWeight);
}

function IconHiking(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHiking {
	return IconHiking($size, $fill, $iconTypeWeight);
}

function IconHistory(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHistory {
	return IconHistory($size, $fill, $iconTypeWeight);
}

function IconHistory2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHistory2 {
	return IconHistory2($size, $fill, $iconTypeWeight);
}

function IconHistoryEdu(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHistoryEdu {
	return IconHistoryEdu($size, $fill, $iconTypeWeight);
}

function IconHistoryOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHistoryOff {
	return IconHistoryOff($size, $fill, $iconTypeWeight);
}

function IconHistoryToggleOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHistoryToggleOff {
	return IconHistoryToggleOff($size, $fill, $iconTypeWeight);
}

function IconHive(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHive {
	return IconHive($size, $fill, $iconTypeWeight);
}

function IconHls(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHls {
	return IconHls($size, $fill, $iconTypeWeight);
}

function IconHlsOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHlsOff {
	return IconHlsOff($size, $fill, $iconTypeWeight);
}

function IconHMobiledata(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHMobiledata {
	return IconHMobiledata($size, $fill, $iconTypeWeight);
}

function IconHMobiledataBadge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHMobiledataBadge {
	return IconHMobiledataBadge($size, $fill, $iconTypeWeight);
}

function IconHolidayVillage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHolidayVillage {
	return IconHolidayVillage($size, $fill, $iconTypeWeight);
}

function IconHome(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHome {
	return IconHome($size, $fill, $iconTypeWeight);
}

function IconHomeAndGarden(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHomeAndGarden {
	return IconHomeAndGarden($size, $fill, $iconTypeWeight);
}

function IconHomeAppLogo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHomeAppLogo {
	return IconHomeAppLogo($size, $fill, $iconTypeWeight);
}

function IconHomeHealth(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHomeHealth {
	return IconHomeHealth($size, $fill, $iconTypeWeight);
}

function IconHomeImprovementAndTools(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHomeImprovementAndTools {
	return IconHomeImprovementAndTools($size, $fill, $iconTypeWeight);
}

function IconHomeIotDevice(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHomeIotDevice {
	return IconHomeIotDevice($size, $fill, $iconTypeWeight);
}

function IconHomeMax(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHomeMax {
	return IconHomeMax($size, $fill, $iconTypeWeight);
}

function IconHomeMaxDots(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHomeMaxDots {
	return IconHomeMaxDots($size, $fill, $iconTypeWeight);
}

function IconHomeMini(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHomeMini {
	return IconHomeMini($size, $fill, $iconTypeWeight);
}

function IconHomePin(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHomePin {
	return IconHomePin($size, $fill, $iconTypeWeight);
}

function IconHomeRepairService(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHomeRepairService {
	return IconHomeRepairService($size, $fill, $iconTypeWeight);
}

function IconHomeSpeaker(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHomeSpeaker {
	return IconHomeSpeaker($size, $fill, $iconTypeWeight);
}

function IconHomeStorage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHomeStorage {
	return IconHomeStorage($size, $fill, $iconTypeWeight);
}

function IconHomeWork(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHomeWork {
	return IconHomeWork($size, $fill, $iconTypeWeight);
}

function IconHorizontalDistribute(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHorizontalDistribute {
	return IconHorizontalDistribute($size, $fill, $iconTypeWeight);
}

function IconHorizontalRule(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHorizontalRule {
	return IconHorizontalRule($size, $fill, $iconTypeWeight);
}

function IconHorizontalSplit(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHorizontalSplit {
	return IconHorizontalSplit($size, $fill, $iconTypeWeight);
}

function IconHost(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHost {
	return IconHost($size, $fill, $iconTypeWeight);
}

function IconHotel(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHotel {
	return IconHotel($size, $fill, $iconTypeWeight);
}

function IconHotelClass(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHotelClass {
	return IconHotelClass($size, $fill, $iconTypeWeight);
}

function IconHotTub(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHotTub {
	return IconHotTub($size, $fill, $iconTypeWeight);
}

function IconHourglass(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHourglass {
	return IconHourglass($size, $fill, $iconTypeWeight);
}

function IconHourglassArrowDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHourglassArrowDown {
	return IconHourglassArrowDown($size, $fill, $iconTypeWeight);
}

function IconHourglassArrowUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHourglassArrowUp {
	return IconHourglassArrowUp($size, $fill, $iconTypeWeight);
}

function IconHourglassBottom(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHourglassBottom {
	return IconHourglassBottom($size, $fill, $iconTypeWeight);
}

function IconHourglassDisabled(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHourglassDisabled {
	return IconHourglassDisabled($size, $fill, $iconTypeWeight);
}

function IconHourglassEmpty(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHourglassEmpty {
	return IconHourglassEmpty($size, $fill, $iconTypeWeight);
}

function IconHourglassPause(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHourglassPause {
	return IconHourglassPause($size, $fill, $iconTypeWeight);
}

function IconHourglassTop(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHourglassTop {
	return IconHourglassTop($size, $fill, $iconTypeWeight);
}

function IconHouse(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHouse {
	return IconHouse($size, $fill, $iconTypeWeight);
}

function IconHouseboat(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHouseboat {
	return IconHouseboat($size, $fill, $iconTypeWeight);
}

function IconHouseholdSupplies(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHouseholdSupplies {
	return IconHouseholdSupplies($size, $fill, $iconTypeWeight);
}

function IconHouseSiding(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHouseSiding {
	return IconHouseSiding($size, $fill, $iconTypeWeight);
}

function IconHouseWithShield(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHouseWithShield {
	return IconHouseWithShield($size, $fill, $iconTypeWeight);
}

function IconHov(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHov {
	return IconHov($size, $fill, $iconTypeWeight);
}

function IconHowToReg(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHowToReg {
	return IconHowToReg($size, $fill, $iconTypeWeight);
}

function IconHowToVote(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHowToVote {
	return IconHowToVote($size, $fill, $iconTypeWeight);
}

function IconHPlusMobiledata(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHPlusMobiledata {
	return IconHPlusMobiledata($size, $fill, $iconTypeWeight);
}

function IconHPlusMobiledataBadge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHPlusMobiledataBadge {
	return IconHPlusMobiledataBadge($size, $fill, $iconTypeWeight);
}

function IconHrResting(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHrResting {
	return IconHrResting($size, $fill, $iconTypeWeight);
}

function IconHtml(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHtml {
	return IconHtml($size, $fill, $iconTypeWeight);
}

function IconHttp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHttp {
	return IconHttp($size, $fill, $iconTypeWeight);
}

function IconHub(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHub {
	return IconHub($size, $fill, $iconTypeWeight);
}

function IconHumerus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHumerus {
	return IconHumerus($size, $fill, $iconTypeWeight);
}

function IconHumerusAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHumerusAlt {
	return IconHumerusAlt($size, $fill, $iconTypeWeight);
}

function IconHumidityHigh(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHumidityHigh {
	return IconHumidityHigh($size, $fill, $iconTypeWeight);
}

function IconHumidityIndoor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHumidityIndoor {
	return IconHumidityIndoor($size, $fill, $iconTypeWeight);
}

function IconHumidityLow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHumidityLow {
	return IconHumidityLow($size, $fill, $iconTypeWeight);
}

function IconHumidityMid(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHumidityMid {
	return IconHumidityMid($size, $fill, $iconTypeWeight);
}

function IconHumidityPercentage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHumidityPercentage {
	return IconHumidityPercentage($size, $fill, $iconTypeWeight);
}

function IconHvac(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHvac {
	return IconHvac($size, $fill, $iconTypeWeight);
}

function IconIcecream(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconIcecream {
	return IconIcecream($size, $fill, $iconTypeWeight);
}

function IconIceSkating(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconIceSkating {
	return IconIceSkating($size, $fill, $iconTypeWeight);
}

function IconIdCard(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconIdCard {
	return IconIdCard($size, $fill, $iconTypeWeight);
}

function IconIdentityAwareProxy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconIdentityAwareProxy {
	return IconIdentityAwareProxy($size, $fill, $iconTypeWeight);
}

function IconIdentityPlatform(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconIdentityPlatform {
	return IconIdentityPlatform($size, $fill, $iconTypeWeight);
}

function IconIfl(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconIfl {
	return IconIfl($size, $fill, $iconTypeWeight);
}

function IconIframe(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconIframe {
	return IconIframe($size, $fill, $iconTypeWeight);
}

function IconIframeOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconIframeOff {
	return IconIframeOff($size, $fill, $iconTypeWeight);
}

function IconImage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconImage {
	return IconImage($size, $fill, $iconTypeWeight);
}

function IconImageAspectRatio(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconImageAspectRatio {
	return IconImageAspectRatio($size, $fill, $iconTypeWeight);
}

function IconImageSearch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconImageSearch {
	return IconImageSearch($size, $fill, $iconTypeWeight);
}

function IconImagesearchRoller(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconImagesearchRoller {
	return IconImagesearchRoller($size, $fill, $iconTypeWeight);
}

function IconImagesmode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconImagesmode {
	return IconImagesmode($size, $fill, $iconTypeWeight);
}

function IconImmunology(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconImmunology {
	return IconImmunology($size, $fill, $iconTypeWeight);
}

function IconImportantDevices(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconImportantDevices {
	return IconImportantDevices($size, $fill, $iconTypeWeight);
}

function IconImportContacts(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconImportContacts {
	return IconImportContacts($size, $fill, $iconTypeWeight);
}

function IconInactiveOrder(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInactiveOrder {
	return IconInactiveOrder($size, $fill, $iconTypeWeight);
}

function IconInbox(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInbox {
	return IconInbox($size, $fill, $iconTypeWeight);
}

function IconInboxCustomize(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInboxCustomize {
	return IconInboxCustomize($size, $fill, $iconTypeWeight);
}

function IconInboxText(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInboxText {
	return IconInboxText($size, $fill, $iconTypeWeight);
}

function IconIncompleteCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconIncompleteCircle {
	return IconIncompleteCircle($size, $fill, $iconTypeWeight);
}

function IconIndeterminateCheckBox(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconIndeterminateCheckBox {
	return IconIndeterminateCheckBox($size, $fill, $iconTypeWeight);
}

function IconIndeterminateQuestionBox(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconIndeterminateQuestionBox {
	return IconIndeterminateQuestionBox($size, $fill, $iconTypeWeight);
}

function IconInfo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInfo {
	return IconInfo($size, $fill, $iconTypeWeight);
}

function IconInfoI(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInfoI {
	return IconInfoI($size, $fill, $iconTypeWeight);
}

function IconInfrared(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInfrared {
	return IconInfrared($size, $fill, $iconTypeWeight);
}

function IconInHomeMode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInHomeMode {
	return IconInHomeMode($size, $fill, $iconTypeWeight);
}

function IconInkEraser(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInkEraser {
	return IconInkEraser($size, $fill, $iconTypeWeight);
}

function IconInkEraserOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInkEraserOff {
	return IconInkEraserOff($size, $fill, $iconTypeWeight);
}

function IconInkHighlighter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInkHighlighter {
	return IconInkHighlighter($size, $fill, $iconTypeWeight);
}

function IconInkHighlighterMove(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInkHighlighterMove {
	return IconInkHighlighterMove($size, $fill, $iconTypeWeight);
}

function IconInkMarker(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInkMarker {
	return IconInkMarker($size, $fill, $iconTypeWeight);
}

function IconInkPen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInkPen {
	return IconInkPen($size, $fill, $iconTypeWeight);
}

function IconInkSelection(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInkSelection {
	return IconInkSelection($size, $fill, $iconTypeWeight);
}

function IconInpatient(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInpatient {
	return IconInpatient($size, $fill, $iconTypeWeight);
}

function IconInput(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInput {
	return IconInput($size, $fill, $iconTypeWeight);
}

function IconInputCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInputCircle {
	return IconInputCircle($size, $fill, $iconTypeWeight);
}

function IconInsertChart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInsertChart {
	return IconInsertChart($size, $fill, $iconTypeWeight);
}

function IconInsertPageBreak(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInsertPageBreak {
	return IconInsertPageBreak($size, $fill, $iconTypeWeight);
}

function IconInsertText(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInsertText {
	return IconInsertText($size, $fill, $iconTypeWeight);
}

function IconInstallDesktop(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInstallDesktop {
	return IconInstallDesktop($size, $fill, $iconTypeWeight);
}

function IconInstallMobile(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInstallMobile {
	return IconInstallMobile($size, $fill, $iconTypeWeight);
}

function IconInstantMix(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInstantMix {
	return IconInstantMix($size, $fill, $iconTypeWeight);
}

function IconIntegrationInstructions(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconIntegrationInstructions {
	return IconIntegrationInstructions($size, $fill, $iconTypeWeight);
}

function IconInteractiveSpace(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInteractiveSpace {
	return IconInteractiveSpace($size, $fill, $iconTypeWeight);
}

function IconInterests(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInterests {
	return IconInterests($size, $fill, $iconTypeWeight);
}

function IconInterpreterMode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInterpreterMode {
	return IconInterpreterMode($size, $fill, $iconTypeWeight);
}

function IconInventory(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInventory {
	return IconInventory($size, $fill, $iconTypeWeight);
}

function IconInventory2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInventory2 {
	return IconInventory2($size, $fill, $iconTypeWeight);
}

function IconInvertColors(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInvertColors {
	return IconInvertColors($size, $fill, $iconTypeWeight);
}

function IconInvertColorsOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInvertColorsOff {
	return IconInvertColorsOff($size, $fill, $iconTypeWeight);
}

function IconIos(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconIos {
	return IconIos($size, $fill, $iconTypeWeight);
}

function IconIosShare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconIosShare {
	return IconIosShare($size, $fill, $iconTypeWeight);
}

function IconIron(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconIron {
	return IconIron($size, $fill, $iconTypeWeight);
}

function IconJamboardKiosk(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconJamboardKiosk {
	return IconJamboardKiosk($size, $fill, $iconTypeWeight);
}

function IconJavascript(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconJavascript {
	return IconJavascript($size, $fill, $iconTypeWeight);
}

function IconJoin(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconJoin {
	return IconJoin($size, $fill, $iconTypeWeight);
}

function IconJoinInner(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconJoinInner {
	return IconJoinInner($size, $fill, $iconTypeWeight);
}

function IconJoinLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconJoinLeft {
	return IconJoinLeft($size, $fill, $iconTypeWeight);
}

function IconJoinRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconJoinRight {
	return IconJoinRight($size, $fill, $iconTypeWeight);
}

function IconJoystick(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconJoystick {
	return IconJoystick($size, $fill, $iconTypeWeight);
}

function IconJumpToElement(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconJumpToElement {
	return IconJumpToElement($size, $fill, $iconTypeWeight);
}

function IconKayaking(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKayaking {
	return IconKayaking($size, $fill, $iconTypeWeight);
}

function IconKebabDining(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKebabDining {
	return IconKebabDining($size, $fill, $iconTypeWeight);
}

function IconKeep(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeep {
	return IconKeep($size, $fill, $iconTypeWeight);
}

function IconKeepOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeepOff {
	return IconKeepOff($size, $fill, $iconTypeWeight);
}

function IconKeepPublic(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeepPublic {
	return IconKeepPublic($size, $fill, $iconTypeWeight);
}

function IconKettle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKettle {
	return IconKettle($size, $fill, $iconTypeWeight);
}

function IconKey(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKey {
	return IconKey($size, $fill, $iconTypeWeight);
}

function IconKeyboard(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboard {
	return IconKeyboard($size, $fill, $iconTypeWeight);
}

function IconKeyboardAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardAlt {
	return IconKeyboardAlt($size, $fill, $iconTypeWeight);
}

function IconKeyboardArrowDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardArrowDown {
	return IconKeyboardArrowDown($size, $fill, $iconTypeWeight);
}

function IconKeyboardArrowLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardArrowLeft {
	return IconKeyboardArrowLeft($size, $fill, $iconTypeWeight);
}

function IconKeyboardArrowRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardArrowRight {
	return IconKeyboardArrowRight($size, $fill, $iconTypeWeight);
}

function IconKeyboardArrowUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardArrowUp {
	return IconKeyboardArrowUp($size, $fill, $iconTypeWeight);
}

function IconKeyboardBackspace(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardBackspace {
	return IconKeyboardBackspace($size, $fill, $iconTypeWeight);
}

function IconKeyboardCapslock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardCapslock {
	return IconKeyboardCapslock($size, $fill, $iconTypeWeight);
}

function IconKeyboardCapslockBadge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardCapslockBadge {
	return IconKeyboardCapslockBadge($size, $fill, $iconTypeWeight);
}

function IconKeyboardCommandKey(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardCommandKey {
	return IconKeyboardCommandKey($size, $fill, $iconTypeWeight);
}

function IconKeyboardControlKey(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardControlKey {
	return IconKeyboardControlKey($size, $fill, $iconTypeWeight);
}

function IconKeyboardDoubleArrowDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardDoubleArrowDown {
	return IconKeyboardDoubleArrowDown($size, $fill, $iconTypeWeight);
}

function IconKeyboardDoubleArrowLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardDoubleArrowLeft {
	return IconKeyboardDoubleArrowLeft($size, $fill, $iconTypeWeight);
}

function IconKeyboardDoubleArrowRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardDoubleArrowRight {
	return IconKeyboardDoubleArrowRight($size, $fill, $iconTypeWeight);
}

function IconKeyboardDoubleArrowUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardDoubleArrowUp {
	return IconKeyboardDoubleArrowUp($size, $fill, $iconTypeWeight);
}

function IconKeyboardExternalInput(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardExternalInput {
	return IconKeyboardExternalInput($size, $fill, $iconTypeWeight);
}

function IconKeyboardFull(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardFull {
	return IconKeyboardFull($size, $fill, $iconTypeWeight);
}

function IconKeyboardHide(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardHide {
	return IconKeyboardHide($size, $fill, $iconTypeWeight);
}

function IconKeyboardKeys(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardKeys {
	return IconKeyboardKeys($size, $fill, $iconTypeWeight);
}

function IconKeyboardLock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardLock {
	return IconKeyboardLock($size, $fill, $iconTypeWeight);
}

function IconKeyboardLockOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardLockOff {
	return IconKeyboardLockOff($size, $fill, $iconTypeWeight);
}

function IconKeyboardOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardOff {
	return IconKeyboardOff($size, $fill, $iconTypeWeight);
}

function IconKeyboardOnscreen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardOnscreen {
	return IconKeyboardOnscreen($size, $fill, $iconTypeWeight);
}

function IconKeyboardOptionKey(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardOptionKey {
	return IconKeyboardOptionKey($size, $fill, $iconTypeWeight);
}

function IconKeyboardPreviousLanguage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardPreviousLanguage {
	return IconKeyboardPreviousLanguage($size, $fill, $iconTypeWeight);
}

function IconKeyboardReturn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardReturn {
	return IconKeyboardReturn($size, $fill, $iconTypeWeight);
}

function IconKeyboardTab(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardTab {
	return IconKeyboardTab($size, $fill, $iconTypeWeight);
}

function IconKeyboardTabRtl(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardTabRtl {
	return IconKeyboardTabRtl($size, $fill, $iconTypeWeight);
}

function IconKeyOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyOff {
	return IconKeyOff($size, $fill, $iconTypeWeight);
}

function IconKeyVertical(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyVertical {
	return IconKeyVertical($size, $fill, $iconTypeWeight);
}

function IconKeyVisualizer(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyVisualizer {
	return IconKeyVisualizer($size, $fill, $iconTypeWeight);
}

function IconKidStar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKidStar {
	return IconKidStar($size, $fill, $iconTypeWeight);
}

function IconKingBed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKingBed {
	return IconKingBed($size, $fill, $iconTypeWeight);
}

function IconKitchen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKitchen {
	return IconKitchen($size, $fill, $iconTypeWeight);
}

function IconKitesurfing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKitesurfing {
	return IconKitesurfing($size, $fill, $iconTypeWeight);
}

function IconLabel(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLabel {
	return IconLabel($size, $fill, $iconTypeWeight);
}

function IconLabelImportant(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLabelImportant {
	return IconLabelImportant($size, $fill, $iconTypeWeight);
}

function IconLabelOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLabelOff {
	return IconLabelOff($size, $fill, $iconTypeWeight);
}

function IconLabPanel(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLabPanel {
	return IconLabPanel($size, $fill, $iconTypeWeight);
}

function IconLabProfile(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLabProfile {
	return IconLabProfile($size, $fill, $iconTypeWeight);
}

function IconLabResearch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLabResearch {
	return IconLabResearch($size, $fill, $iconTypeWeight);
}

function IconLabs(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLabs {
	return IconLabs($size, $fill, $iconTypeWeight);
}

function IconLan(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLan {
	return IconLan($size, $fill, $iconTypeWeight);
}

function IconLandscape(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLandscape {
	return IconLandscape($size, $fill, $iconTypeWeight);
}

function IconLandscape2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLandscape2 {
	return IconLandscape2($size, $fill, $iconTypeWeight);
}

function IconLandscape2Off(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLandscape2Off {
	return IconLandscape2Off($size, $fill, $iconTypeWeight);
}

function IconLandslide(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLandslide {
	return IconLandslide($size, $fill, $iconTypeWeight);
}

function IconLanguage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLanguage {
	return IconLanguage($size, $fill, $iconTypeWeight);
}

function IconLanguageChineseArray(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLanguageChineseArray {
	return IconLanguageChineseArray($size, $fill, $iconTypeWeight);
}

function IconLanguageChineseCangjie(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLanguageChineseCangjie {
	return IconLanguageChineseCangjie($size, $fill, $iconTypeWeight);
}

function IconLanguageChineseDayi(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLanguageChineseDayi {
	return IconLanguageChineseDayi($size, $fill, $iconTypeWeight);
}

function IconLanguageChinesePinyin(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLanguageChinesePinyin {
	return IconLanguageChinesePinyin($size, $fill, $iconTypeWeight);
}

function IconLanguageChineseQuick(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLanguageChineseQuick {
	return IconLanguageChineseQuick($size, $fill, $iconTypeWeight);
}

function IconLanguageChineseWubi(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLanguageChineseWubi {
	return IconLanguageChineseWubi($size, $fill, $iconTypeWeight);
}

function IconLanguageFrench(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLanguageFrench {
	return IconLanguageFrench($size, $fill, $iconTypeWeight);
}

function IconLanguageGbEnglish(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLanguageGbEnglish {
	return IconLanguageGbEnglish($size, $fill, $iconTypeWeight);
}

function IconLanguageInternational(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLanguageInternational {
	return IconLanguageInternational($size, $fill, $iconTypeWeight);
}

function IconLanguageJapaneseKana(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLanguageJapaneseKana {
	return IconLanguageJapaneseKana($size, $fill, $iconTypeWeight);
}

function IconLanguageKoreanLatin(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLanguageKoreanLatin {
	return IconLanguageKoreanLatin($size, $fill, $iconTypeWeight);
}

function IconLanguagePinyin(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLanguagePinyin {
	return IconLanguagePinyin($size, $fill, $iconTypeWeight);
}

function IconLanguageSpanish(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLanguageSpanish {
	return IconLanguageSpanish($size, $fill, $iconTypeWeight);
}

function IconLanguageUs(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLanguageUs {
	return IconLanguageUs($size, $fill, $iconTypeWeight);
}

function IconLanguageUsColemak(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLanguageUsColemak {
	return IconLanguageUsColemak($size, $fill, $iconTypeWeight);
}

function IconLanguageUsDvorak(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLanguageUsDvorak {
	return IconLanguageUsDvorak($size, $fill, $iconTypeWeight);
}

function IconLaps(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLaps {
	return IconLaps($size, $fill, $iconTypeWeight);
}

function IconLaptopCar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLaptopCar {
	return IconLaptopCar($size, $fill, $iconTypeWeight);
}

function IconLaptopChromebook(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLaptopChromebook {
	return IconLaptopChromebook($size, $fill, $iconTypeWeight);
}

function IconLaptopMac(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLaptopMac {
	return IconLaptopMac($size, $fill, $iconTypeWeight);
}

function IconLaptopWindows(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLaptopWindows {
	return IconLaptopWindows($size, $fill, $iconTypeWeight);
}

function IconLassoSelect(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLassoSelect {
	return IconLassoSelect($size, $fill, $iconTypeWeight);
}

function IconLastPage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLastPage {
	return IconLastPage($size, $fill, $iconTypeWeight);
}

function IconLaundry(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLaundry {
	return IconLaundry($size, $fill, $iconTypeWeight);
}

function IconLayers(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLayers {
	return IconLayers($size, $fill, $iconTypeWeight);
}

function IconLayersClear(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLayersClear {
	return IconLayersClear($size, $fill, $iconTypeWeight);
}

function IconLda(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLda {
	return IconLda($size, $fill, $iconTypeWeight);
}

function IconLeaderboard(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLeaderboard {
	return IconLeaderboard($size, $fill, $iconTypeWeight);
}

function IconLeakAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLeakAdd {
	return IconLeakAdd($size, $fill, $iconTypeWeight);
}

function IconLeakRemove(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLeakRemove {
	return IconLeakRemove($size, $fill, $iconTypeWeight);
}

function IconLeftClick(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLeftClick {
	return IconLeftClick($size, $fill, $iconTypeWeight);
}

function IconLeftPanelClose(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLeftPanelClose {
	return IconLeftPanelClose($size, $fill, $iconTypeWeight);
}

function IconLeftPanelOpen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLeftPanelOpen {
	return IconLeftPanelOpen($size, $fill, $iconTypeWeight);
}

function IconLegendToggle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLegendToggle {
	return IconLegendToggle($size, $fill, $iconTypeWeight);
}

function IconLensBlur(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLensBlur {
	return IconLensBlur($size, $fill, $iconTypeWeight);
}

function IconLetterSwitch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLetterSwitch {
	return IconLetterSwitch($size, $fill, $iconTypeWeight);
}

function IconLibraryAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLibraryAdd {
	return IconLibraryAdd($size, $fill, $iconTypeWeight);
}

function IconLibraryAddCheck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLibraryAddCheck {
	return IconLibraryAddCheck($size, $fill, $iconTypeWeight);
}

function IconLibraryBooks(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLibraryBooks {
	return IconLibraryBooks($size, $fill, $iconTypeWeight);
}

function IconLibraryMusic(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLibraryMusic {
	return IconLibraryMusic($size, $fill, $iconTypeWeight);
}

function IconLicense(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLicense {
	return IconLicense($size, $fill, $iconTypeWeight);
}

function IconLiftToTalk(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLiftToTalk {
	return IconLiftToTalk($size, $fill, $iconTypeWeight);
}

function IconLight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLight {
	return IconLight($size, $fill, $iconTypeWeight);
}

function IconLightbulb(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLightbulb {
	return IconLightbulb($size, $fill, $iconTypeWeight);
}

function IconLightbulb2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLightbulb2 {
	return IconLightbulb2($size, $fill, $iconTypeWeight);
}

function IconLightbulbCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLightbulbCircle {
	return IconLightbulbCircle($size, $fill, $iconTypeWeight);
}

function IconLightGroup(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLightGroup {
	return IconLightGroup($size, $fill, $iconTypeWeight);
}

function IconLightMode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLightMode {
	return IconLightMode($size, $fill, $iconTypeWeight);
}

function IconLightningStand(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLightningStand {
	return IconLightningStand($size, $fill, $iconTypeWeight);
}

function IconLightOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLightOff {
	return IconLightOff($size, $fill, $iconTypeWeight);
}

function IconLinearScale(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLinearScale {
	return IconLinearScale($size, $fill, $iconTypeWeight);
}

function IconLineAxis(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLineAxis {
	return IconLineAxis($size, $fill, $iconTypeWeight);
}

function IconLineCurve(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLineCurve {
	return IconLineCurve($size, $fill, $iconTypeWeight);
}

function IconLineEnd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLineEnd {
	return IconLineEnd($size, $fill, $iconTypeWeight);
}

function IconLineEndArrow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLineEndArrow {
	return IconLineEndArrow($size, $fill, $iconTypeWeight);
}

function IconLineEndArrowNotch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLineEndArrowNotch {
	return IconLineEndArrowNotch($size, $fill, $iconTypeWeight);
}

function IconLineEndCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLineEndCircle {
	return IconLineEndCircle($size, $fill, $iconTypeWeight);
}

function IconLineEndDiamond(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLineEndDiamond {
	return IconLineEndDiamond($size, $fill, $iconTypeWeight);
}

function IconLineEndSquare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLineEndSquare {
	return IconLineEndSquare($size, $fill, $iconTypeWeight);
}

function IconLineStart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLineStart {
	return IconLineStart($size, $fill, $iconTypeWeight);
}

function IconLineStartArrow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLineStartArrow {
	return IconLineStartArrow($size, $fill, $iconTypeWeight);
}

function IconLineStartArrowNotch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLineStartArrowNotch {
	return IconLineStartArrowNotch($size, $fill, $iconTypeWeight);
}

function IconLineStartCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLineStartCircle {
	return IconLineStartCircle($size, $fill, $iconTypeWeight);
}

function IconLineStartDiamond(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLineStartDiamond {
	return IconLineStartDiamond($size, $fill, $iconTypeWeight);
}

function IconLineStartSquare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLineStartSquare {
	return IconLineStartSquare($size, $fill, $iconTypeWeight);
}

function IconLineStyle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLineStyle {
	return IconLineStyle($size, $fill, $iconTypeWeight);
}

function IconLineWeight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLineWeight {
	return IconLineWeight($size, $fill, $iconTypeWeight);
}

function IconLink(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLink {
	return IconLink($size, $fill, $iconTypeWeight);
}

function IconLinkedCamera(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLinkedCamera {
	return IconLinkedCamera($size, $fill, $iconTypeWeight);
}

function IconLinkedServices(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLinkedServices {
	return IconLinkedServices($size, $fill, $iconTypeWeight);
}

function IconLinkOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLinkOff {
	return IconLinkOff($size, $fill, $iconTypeWeight);
}

function IconLiquor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLiquor {
	return IconLiquor($size, $fill, $iconTypeWeight);
}

function IconList(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconList {
	return IconList($size, $fill, $iconTypeWeight);
}

function IconListAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconListAlt {
	return IconListAlt($size, $fill, $iconTypeWeight);
}

function IconListAltAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconListAltAdd {
	return IconListAltAdd($size, $fill, $iconTypeWeight);
}

function IconListAltCheck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconListAltCheck {
	return IconListAltCheck($size, $fill, $iconTypeWeight);
}

function IconLists(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLists {
	return IconLists($size, $fill, $iconTypeWeight);
}

function IconLiveHelp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLiveHelp {
	return IconLiveHelp($size, $fill, $iconTypeWeight);
}

function IconLiveTv(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLiveTv {
	return IconLiveTv($size, $fill, $iconTypeWeight);
}

function IconLiving(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLiving {
	return IconLiving($size, $fill, $iconTypeWeight);
}

function IconLocalActivity(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalActivity {
	return IconLocalActivity($size, $fill, $iconTypeWeight);
}

function IconLocalAtm(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalAtm {
	return IconLocalAtm($size, $fill, $iconTypeWeight);
}

function IconLocalBar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalBar {
	return IconLocalBar($size, $fill, $iconTypeWeight);
}

function IconLocalCafe(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalCafe {
	return IconLocalCafe($size, $fill, $iconTypeWeight);
}

function IconLocalCarWash(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalCarWash {
	return IconLocalCarWash($size, $fill, $iconTypeWeight);
}

function IconLocalConvenienceStore(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalConvenienceStore {
	return IconLocalConvenienceStore($size, $fill, $iconTypeWeight);
}

function IconLocalDining(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalDining {
	return IconLocalDining($size, $fill, $iconTypeWeight);
}

function IconLocalDrink(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalDrink {
	return IconLocalDrink($size, $fill, $iconTypeWeight);
}

function IconLocalFireDepartment(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalFireDepartment {
	return IconLocalFireDepartment($size, $fill, $iconTypeWeight);
}

function IconLocalFlorist(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalFlorist {
	return IconLocalFlorist($size, $fill, $iconTypeWeight);
}

function IconLocalGasStation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalGasStation {
	return IconLocalGasStation($size, $fill, $iconTypeWeight);
}

function IconLocalHospital(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalHospital {
	return IconLocalHospital($size, $fill, $iconTypeWeight);
}

function IconLocalLaundryService(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalLaundryService {
	return IconLocalLaundryService($size, $fill, $iconTypeWeight);
}

function IconLocalLibrary(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalLibrary {
	return IconLocalLibrary($size, $fill, $iconTypeWeight);
}

function IconLocalMall(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalMall {
	return IconLocalMall($size, $fill, $iconTypeWeight);
}

function IconLocalParking(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalParking {
	return IconLocalParking($size, $fill, $iconTypeWeight);
}

function IconLocalPharmacy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalPharmacy {
	return IconLocalPharmacy($size, $fill, $iconTypeWeight);
}

function IconLocalPizza(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalPizza {
	return IconLocalPizza($size, $fill, $iconTypeWeight);
}

function IconLocalPolice(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalPolice {
	return IconLocalPolice($size, $fill, $iconTypeWeight);
}

function IconLocalPostOffice(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalPostOffice {
	return IconLocalPostOffice($size, $fill, $iconTypeWeight);
}

function IconLocalSee(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalSee {
	return IconLocalSee($size, $fill, $iconTypeWeight);
}

function IconLocalShipping(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalShipping {
	return IconLocalShipping($size, $fill, $iconTypeWeight);
}

function IconLocalTaxi(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalTaxi {
	return IconLocalTaxi($size, $fill, $iconTypeWeight);
}

function IconLocationAway(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocationAway {
	return IconLocationAway($size, $fill, $iconTypeWeight);
}

function IconLocationChip(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocationChip {
	return IconLocationChip($size, $fill, $iconTypeWeight);
}

function IconLocationCity(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocationCity {
	return IconLocationCity($size, $fill, $iconTypeWeight);
}

function IconLocationDisabled(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocationDisabled {
	return IconLocationDisabled($size, $fill, $iconTypeWeight);
}

function IconLocationHome(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocationHome {
	return IconLocationHome($size, $fill, $iconTypeWeight);
}

function IconLocationOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocationOff {
	return IconLocationOff($size, $fill, $iconTypeWeight);
}

function IconLocationOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocationOn {
	return IconLocationOn($size, $fill, $iconTypeWeight);
}

function IconLocationSearching(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocationSearching {
	return IconLocationSearching($size, $fill, $iconTypeWeight);
}

function IconLock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLock {
	return IconLock($size, $fill, $iconTypeWeight);
}

function IconLockClock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLockClock {
	return IconLockClock($size, $fill, $iconTypeWeight);
}

function IconLockOpen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLockOpen {
	return IconLockOpen($size, $fill, $iconTypeWeight);
}

function IconLockOpenRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLockOpenRight {
	return IconLockOpenRight($size, $fill, $iconTypeWeight);
}

function IconLockPerson(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLockPerson {
	return IconLockPerson($size, $fill, $iconTypeWeight);
}

function IconLockReset(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLockReset {
	return IconLockReset($size, $fill, $iconTypeWeight);
}

function IconLogin(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLogin {
	return IconLogin($size, $fill, $iconTypeWeight);
}

function IconLogoDev(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLogoDev {
	return IconLogoDev($size, $fill, $iconTypeWeight);
}

function IconLogout(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLogout {
	return IconLogout($size, $fill, $iconTypeWeight);
}

function IconLooks(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLooks {
	return IconLooks($size, $fill, $iconTypeWeight);
}

function IconLooks3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLooks3 {
	return IconLooks3($size, $fill, $iconTypeWeight);
}

function IconLooks4(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLooks4 {
	return IconLooks4($size, $fill, $iconTypeWeight);
}

function IconLooks5(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLooks5 {
	return IconLooks5($size, $fill, $iconTypeWeight);
}

function IconLooks6(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLooks6 {
	return IconLooks6($size, $fill, $iconTypeWeight);
}

function IconLooksOne(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLooksOne {
	return IconLooksOne($size, $fill, $iconTypeWeight);
}

function IconLooksTwo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLooksTwo {
	return IconLooksTwo($size, $fill, $iconTypeWeight);
}

function IconLoupe(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLoupe {
	return IconLoupe($size, $fill, $iconTypeWeight);
}

function IconLowDensity(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLowDensity {
	return IconLowDensity($size, $fill, $iconTypeWeight);
}

function IconLowercase(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLowercase {
	return IconLowercase($size, $fill, $iconTypeWeight);
}

function IconLowPriority(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLowPriority {
	return IconLowPriority($size, $fill, $iconTypeWeight);
}

function IconLoyalty(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLoyalty {
	return IconLoyalty($size, $fill, $iconTypeWeight);
}

function IconLteMobiledata(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLteMobiledata {
	return IconLteMobiledata($size, $fill, $iconTypeWeight);
}

function IconLteMobiledataBadge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLteMobiledataBadge {
	return IconLteMobiledataBadge($size, $fill, $iconTypeWeight);
}

function IconLtePlusMobiledata(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLtePlusMobiledata {
	return IconLtePlusMobiledata($size, $fill, $iconTypeWeight);
}

function IconLtePlusMobiledataBadge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLtePlusMobiledataBadge {
	return IconLtePlusMobiledataBadge($size, $fill, $iconTypeWeight);
}

function IconLuggage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLuggage {
	return IconLuggage($size, $fill, $iconTypeWeight);
}

function IconLunchDining(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLunchDining {
	return IconLunchDining($size, $fill, $iconTypeWeight);
}

function IconLyrics(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLyrics {
	return IconLyrics($size, $fill, $iconTypeWeight);
}

function IconMacroAuto(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMacroAuto {
	return IconMacroAuto($size, $fill, $iconTypeWeight);
}

function IconMacroOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMacroOff {
	return IconMacroOff($size, $fill, $iconTypeWeight);
}

function IconMagnificationLarge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMagnificationLarge {
	return IconMagnificationLarge($size, $fill, $iconTypeWeight);
}

function IconMagnificationSmall(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMagnificationSmall {
	return IconMagnificationSmall($size, $fill, $iconTypeWeight);
}

function IconMagnifyDocked(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMagnifyDocked {
	return IconMagnifyDocked($size, $fill, $iconTypeWeight);
}

function IconMagnifyFullscreen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMagnifyFullscreen {
	return IconMagnifyFullscreen($size, $fill, $iconTypeWeight);
}

function IconMail(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMail {
	return IconMail($size, $fill, $iconTypeWeight);
}

function IconMailLock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMailLock {
	return IconMailLock($size, $fill, $iconTypeWeight);
}

function IconMailOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMailOff {
	return IconMailOff($size, $fill, $iconTypeWeight);
}

function IconMale(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMale {
	return IconMale($size, $fill, $iconTypeWeight);
}

function IconMan(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMan {
	return IconMan($size, $fill, $iconTypeWeight);
}

function IconMan2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMan2 {
	return IconMan2($size, $fill, $iconTypeWeight);
}

function IconMan3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMan3 {
	return IconMan3($size, $fill, $iconTypeWeight);
}

function IconMan4(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMan4 {
	return IconMan4($size, $fill, $iconTypeWeight);
}

function IconManageAccounts(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconManageAccounts {
	return IconManageAccounts($size, $fill, $iconTypeWeight);
}

function IconManageHistory(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconManageHistory {
	return IconManageHistory($size, $fill, $iconTypeWeight);
}

function IconManageSearch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconManageSearch {
	return IconManageSearch($size, $fill, $iconTypeWeight);
}

function IconManga(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconManga {
	return IconManga($size, $fill, $iconTypeWeight);
}

function IconManufacturing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconManufacturing {
	return IconManufacturing($size, $fill, $iconTypeWeight);
}

function IconMap(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMap {
	return IconMap($size, $fill, $iconTypeWeight);
}

function IconMapSearch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMapSearch {
	return IconMapSearch($size, $fill, $iconTypeWeight);
}

function IconMapsUgc(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMapsUgc {
	return IconMapsUgc($size, $fill, $iconTypeWeight);
}

function IconMargin(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMargin {
	return IconMargin($size, $fill, $iconTypeWeight);
}

function IconMarkAsUnread(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMarkAsUnread {
	return IconMarkAsUnread($size, $fill, $iconTypeWeight);
}

function IconMarkChatRead(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMarkChatRead {
	return IconMarkChatRead($size, $fill, $iconTypeWeight);
}

function IconMarkChatUnread(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMarkChatUnread {
	return IconMarkChatUnread($size, $fill, $iconTypeWeight);
}

function IconMarkdown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMarkdown {
	return IconMarkdown($size, $fill, $iconTypeWeight);
}

function IconMarkdownCopy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMarkdownCopy {
	return IconMarkdownCopy($size, $fill, $iconTypeWeight);
}

function IconMarkdownPaste(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMarkdownPaste {
	return IconMarkdownPaste($size, $fill, $iconTypeWeight);
}

function IconMarkEmailRead(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMarkEmailRead {
	return IconMarkEmailRead($size, $fill, $iconTypeWeight);
}

function IconMarkEmailUnread(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMarkEmailUnread {
	return IconMarkEmailUnread($size, $fill, $iconTypeWeight);
}

function IconMarkUnreadChatAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMarkUnreadChatAlt {
	return IconMarkUnreadChatAlt($size, $fill, $iconTypeWeight);
}

function IconMarkunreadMailbox(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMarkunreadMailbox {
	return IconMarkunreadMailbox($size, $fill, $iconTypeWeight);
}

function IconMaskedTransitions(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMaskedTransitions {
	return IconMaskedTransitions($size, $fill, $iconTypeWeight);
}

function IconMaskedTransitionsAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMaskedTransitionsAdd {
	return IconMaskedTransitionsAdd($size, $fill, $iconTypeWeight);
}

function IconMasks(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMasks {
	return IconMasks($size, $fill, $iconTypeWeight);
}

function IconMatchCase(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMatchCase {
	return IconMatchCase($size, $fill, $iconTypeWeight);
}

function IconMatchCaseOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMatchCaseOff {
	return IconMatchCaseOff($size, $fill, $iconTypeWeight);
}

function IconMatchWord(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMatchWord {
	return IconMatchWord($size, $fill, $iconTypeWeight);
}

function IconMatter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMatter {
	return IconMatter($size, $fill, $iconTypeWeight);
}

function IconMaximize(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMaximize {
	return IconMaximize($size, $fill, $iconTypeWeight);
}

function IconMeasuringTape(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMeasuringTape {
	return IconMeasuringTape($size, $fill, $iconTypeWeight);
}

function IconMediaBluetoothOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMediaBluetoothOff {
	return IconMediaBluetoothOff($size, $fill, $iconTypeWeight);
}

function IconMediaBluetoothOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMediaBluetoothOn {
	return IconMediaBluetoothOn($size, $fill, $iconTypeWeight);
}

function IconMediaLink(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMediaLink {
	return IconMediaLink($size, $fill, $iconTypeWeight);
}

function IconMediaOutput(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMediaOutput {
	return IconMediaOutput($size, $fill, $iconTypeWeight);
}

function IconMediaOutputOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMediaOutputOff {
	return IconMediaOutputOff($size, $fill, $iconTypeWeight);
}

function IconMediation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMediation {
	return IconMediation($size, $fill, $iconTypeWeight);
}

function IconMedicalInformation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMedicalInformation {
	return IconMedicalInformation($size, $fill, $iconTypeWeight);
}

function IconMedicalMask(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMedicalMask {
	return IconMedicalMask($size, $fill, $iconTypeWeight);
}

function IconMedicalServices(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMedicalServices {
	return IconMedicalServices($size, $fill, $iconTypeWeight);
}

function IconMedication(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMedication {
	return IconMedication($size, $fill, $iconTypeWeight);
}

function IconMedicationLiquid(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMedicationLiquid {
	return IconMedicationLiquid($size, $fill, $iconTypeWeight);
}

function IconMeetingRoom(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMeetingRoom {
	return IconMeetingRoom($size, $fill, $iconTypeWeight);
}

function IconMemory(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMemory {
	return IconMemory($size, $fill, $iconTypeWeight);
}

function IconMemoryAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMemoryAlt {
	return IconMemoryAlt($size, $fill, $iconTypeWeight);
}

function IconMenstrualHealth(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMenstrualHealth {
	return IconMenstrualHealth($size, $fill, $iconTypeWeight);
}

function IconMenu(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMenu {
	return IconMenu($size, $fill, $iconTypeWeight);
}

function IconMenuBook(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMenuBook {
	return IconMenuBook($size, $fill, $iconTypeWeight);
}

function IconMenuOpen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMenuOpen {
	return IconMenuOpen($size, $fill, $iconTypeWeight);
}

function IconMerge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMerge {
	return IconMerge($size, $fill, $iconTypeWeight);
}

function IconMergeType(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMergeType {
	return IconMergeType($size, $fill, $iconTypeWeight);
}

function IconMetabolism(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMetabolism {
	return IconMetabolism($size, $fill, $iconTypeWeight);
}

function IconMetro(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMetro {
	return IconMetro($size, $fill, $iconTypeWeight);
}

function IconMfgNestYaleLock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMfgNestYaleLock {
	return IconMfgNestYaleLock($size, $fill, $iconTypeWeight);
}

function IconMic(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMic {
	return IconMic($size, $fill, $iconTypeWeight);
}

function IconMicAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMicAlert {
	return IconMicAlert($size, $fill, $iconTypeWeight);
}

function IconMicDouble(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMicDouble {
	return IconMicDouble($size, $fill, $iconTypeWeight);
}

function IconMicExternalOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMicExternalOff {
	return IconMicExternalOff($size, $fill, $iconTypeWeight);
}

function IconMicExternalOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMicExternalOn {
	return IconMicExternalOn($size, $fill, $iconTypeWeight);
}

function IconMicOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMicOff {
	return IconMicOff($size, $fill, $iconTypeWeight);
}

function IconMicrobiology(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMicrobiology {
	return IconMicrobiology($size, $fill, $iconTypeWeight);
}

function IconMicrowave(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMicrowave {
	return IconMicrowave($size, $fill, $iconTypeWeight);
}

function IconMicrowaveGen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMicrowaveGen {
	return IconMicrowaveGen($size, $fill, $iconTypeWeight);
}

function IconMilitaryTech(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMilitaryTech {
	return IconMilitaryTech($size, $fill, $iconTypeWeight);
}

function IconMimo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMimo {
	return IconMimo($size, $fill, $iconTypeWeight);
}

function IconMimoDisconnect(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMimoDisconnect {
	return IconMimoDisconnect($size, $fill, $iconTypeWeight);
}

function IconMindfulness(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMindfulness {
	return IconMindfulness($size, $fill, $iconTypeWeight);
}

function IconMinimize(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMinimize {
	return IconMinimize($size, $fill, $iconTypeWeight);
}

function IconMinorCrash(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMinorCrash {
	return IconMinorCrash($size, $fill, $iconTypeWeight);
}

function IconMintmark(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMintmark {
	return IconMintmark($size, $fill, $iconTypeWeight);
}

function IconMissedVideoCall(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMissedVideoCall {
	return IconMissedVideoCall($size, $fill, $iconTypeWeight);
}

function IconMissingController(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMissingController {
	return IconMissingController($size, $fill, $iconTypeWeight);
}

function IconMist(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMist {
	return IconMist($size, $fill, $iconTypeWeight);
}

function IconMitre(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMitre {
	return IconMitre($size, $fill, $iconTypeWeight);
}

function IconMixtureMed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMixtureMed {
	return IconMixtureMed($size, $fill, $iconTypeWeight);
}

function IconMms(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMms {
	return IconMms($size, $fill, $iconTypeWeight);
}

function IconMobiledataOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMobiledataOff {
	return IconMobiledataOff($size, $fill, $iconTypeWeight);
}

function IconMobileFriendly(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMobileFriendly {
	return IconMobileFriendly($size, $fill, $iconTypeWeight);
}

function IconMobileOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMobileOff {
	return IconMobileOff($size, $fill, $iconTypeWeight);
}

function IconMobileScreenShare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMobileScreenShare {
	return IconMobileScreenShare($size, $fill, $iconTypeWeight);
}

function IconModeComment(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconModeComment {
	return IconModeComment($size, $fill, $iconTypeWeight);
}

function IconModeCool(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconModeCool {
	return IconModeCool($size, $fill, $iconTypeWeight);
}

function IconModeCoolOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconModeCoolOff {
	return IconModeCoolOff($size, $fill, $iconTypeWeight);
}

function IconModeDual(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconModeDual {
	return IconModeDual($size, $fill, $iconTypeWeight);
}

function IconModeFan(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconModeFan {
	return IconModeFan($size, $fill, $iconTypeWeight);
}

function IconModeFanOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconModeFanOff {
	return IconModeFanOff($size, $fill, $iconTypeWeight);
}

function IconModeHeat(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconModeHeat {
	return IconModeHeat($size, $fill, $iconTypeWeight);
}

function IconModeHeatCool(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconModeHeatCool {
	return IconModeHeatCool($size, $fill, $iconTypeWeight);
}

function IconModeHeatOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconModeHeatOff {
	return IconModeHeatOff($size, $fill, $iconTypeWeight);
}

function IconModeling(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconModeling {
	return IconModeling($size, $fill, $iconTypeWeight);
}

function IconModelTraining(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconModelTraining {
	return IconModelTraining($size, $fill, $iconTypeWeight);
}

function IconModeNight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconModeNight {
	return IconModeNight($size, $fill, $iconTypeWeight);
}

function IconModeOffOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconModeOffOn {
	return IconModeOffOn($size, $fill, $iconTypeWeight);
}

function IconModeOfTravel(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconModeOfTravel {
	return IconModeOfTravel($size, $fill, $iconTypeWeight);
}

function IconModeStandby(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconModeStandby {
	return IconModeStandby($size, $fill, $iconTypeWeight);
}

function IconMoney(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoney {
	return IconMoney($size, $fill, $iconTypeWeight);
}

function IconMoneyBag(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoneyBag {
	return IconMoneyBag($size, $fill, $iconTypeWeight);
}

function IconMoneyOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoneyOff {
	return IconMoneyOff($size, $fill, $iconTypeWeight);
}

function IconMonitor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMonitor {
	return IconMonitor($size, $fill, $iconTypeWeight);
}

function IconMonitorHeart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMonitorHeart {
	return IconMonitorHeart($size, $fill, $iconTypeWeight);
}

function IconMonitoring(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMonitoring {
	return IconMonitoring($size, $fill, $iconTypeWeight);
}

function IconMonitorWeight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMonitorWeight {
	return IconMonitorWeight($size, $fill, $iconTypeWeight);
}

function IconMonitorWeightGain(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMonitorWeightGain {
	return IconMonitorWeightGain($size, $fill, $iconTypeWeight);
}

function IconMonitorWeightLoss(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMonitorWeightLoss {
	return IconMonitorWeightLoss($size, $fill, $iconTypeWeight);
}

function IconMonochromePhotos(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMonochromePhotos {
	return IconMonochromePhotos($size, $fill, $iconTypeWeight);
}

function IconMonorail(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMonorail {
	return IconMonorail($size, $fill, $iconTypeWeight);
}

function IconMood(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMood {
	return IconMood($size, $fill, $iconTypeWeight);
}

function IconMoodBad(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoodBad {
	return IconMoodBad($size, $fill, $iconTypeWeight);
}

function IconMop(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMop {
	return IconMop($size, $fill, $iconTypeWeight);
}

function IconMoped(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoped {
	return IconMoped($size, $fill, $iconTypeWeight);
}

function IconMore(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMore {
	return IconMore($size, $fill, $iconTypeWeight);
}

function IconMoreDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoreDown {
	return IconMoreDown($size, $fill, $iconTypeWeight);
}

function IconMoreHoriz(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoreHoriz {
	return IconMoreHoriz($size, $fill, $iconTypeWeight);
}

function IconMoreTime(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoreTime {
	return IconMoreTime($size, $fill, $iconTypeWeight);
}

function IconMoreUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoreUp {
	return IconMoreUp($size, $fill, $iconTypeWeight);
}

function IconMoreVert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoreVert {
	return IconMoreVert($size, $fill, $iconTypeWeight);
}

function IconMosque(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMosque {
	return IconMosque($size, $fill, $iconTypeWeight);
}

function IconMotionBlur(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMotionBlur {
	return IconMotionBlur($size, $fill, $iconTypeWeight);
}

function IconMotionMode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMotionMode {
	return IconMotionMode($size, $fill, $iconTypeWeight);
}

function IconMotionPhotosAuto(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMotionPhotosAuto {
	return IconMotionPhotosAuto($size, $fill, $iconTypeWeight);
}

function IconMotionPhotosOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMotionPhotosOff {
	return IconMotionPhotosOff($size, $fill, $iconTypeWeight);
}

function IconMotionPhotosOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMotionPhotosOn {
	return IconMotionPhotosOn($size, $fill, $iconTypeWeight);
}

function IconMotionPhotosPaused(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMotionPhotosPaused {
	return IconMotionPhotosPaused($size, $fill, $iconTypeWeight);
}

function IconMotionPlay(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMotionPlay {
	return IconMotionPlay($size, $fill, $iconTypeWeight);
}

function IconMotionSensorActive(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMotionSensorActive {
	return IconMotionSensorActive($size, $fill, $iconTypeWeight);
}

function IconMotionSensorAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMotionSensorAlert {
	return IconMotionSensorAlert($size, $fill, $iconTypeWeight);
}

function IconMotionSensorIdle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMotionSensorIdle {
	return IconMotionSensorIdle($size, $fill, $iconTypeWeight);
}

function IconMotionSensorUrgent(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMotionSensorUrgent {
	return IconMotionSensorUrgent($size, $fill, $iconTypeWeight);
}

function IconMotorcycle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMotorcycle {
	return IconMotorcycle($size, $fill, $iconTypeWeight);
}

function IconMountainFlag(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMountainFlag {
	return IconMountainFlag($size, $fill, $iconTypeWeight);
}

function IconMouse(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMouse {
	return IconMouse($size, $fill, $iconTypeWeight);
}

function IconMouseLock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMouseLock {
	return IconMouseLock($size, $fill, $iconTypeWeight);
}

function IconMouseLockOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMouseLockOff {
	return IconMouseLockOff($size, $fill, $iconTypeWeight);
}

function IconMove(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMove {
	return IconMove($size, $fill, $iconTypeWeight);
}

function IconMovedLocation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMovedLocation {
	return IconMovedLocation($size, $fill, $iconTypeWeight);
}

function IconMoveDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoveDown {
	return IconMoveDown($size, $fill, $iconTypeWeight);
}

function IconMoveGroup(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoveGroup {
	return IconMoveGroup($size, $fill, $iconTypeWeight);
}

function IconMoveItem(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoveItem {
	return IconMoveItem($size, $fill, $iconTypeWeight);
}

function IconMoveLocation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoveLocation {
	return IconMoveLocation($size, $fill, $iconTypeWeight);
}

function IconMoveSelectionDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoveSelectionDown {
	return IconMoveSelectionDown($size, $fill, $iconTypeWeight);
}

function IconMoveSelectionLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoveSelectionLeft {
	return IconMoveSelectionLeft($size, $fill, $iconTypeWeight);
}

function IconMoveSelectionRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoveSelectionRight {
	return IconMoveSelectionRight($size, $fill, $iconTypeWeight);
}

function IconMoveSelectionUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoveSelectionUp {
	return IconMoveSelectionUp($size, $fill, $iconTypeWeight);
}

function IconMoveToInbox(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoveToInbox {
	return IconMoveToInbox($size, $fill, $iconTypeWeight);
}

function IconMoveUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoveUp {
	return IconMoveUp($size, $fill, $iconTypeWeight);
}

function IconMovie(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMovie {
	return IconMovie($size, $fill, $iconTypeWeight);
}

function IconMovieEdit(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMovieEdit {
	return IconMovieEdit($size, $fill, $iconTypeWeight);
}

function IconMovieInfo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMovieInfo {
	return IconMovieInfo($size, $fill, $iconTypeWeight);
}

function IconMovieOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMovieOff {
	return IconMovieOff($size, $fill, $iconTypeWeight);
}

function IconMoving(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoving {
	return IconMoving($size, $fill, $iconTypeWeight);
}

function IconMovingBeds(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMovingBeds {
	return IconMovingBeds($size, $fill, $iconTypeWeight);
}

function IconMovingMinistry(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMovingMinistry {
	return IconMovingMinistry($size, $fill, $iconTypeWeight);
}

function IconMp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMp {
	return IconMp($size, $fill, $iconTypeWeight);
}

function IconMulticooker(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMulticooker {
	return IconMulticooker($size, $fill, $iconTypeWeight);
}

function IconMultilineChart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMultilineChart {
	return IconMultilineChart($size, $fill, $iconTypeWeight);
}

function IconMultimodalHandEye(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMultimodalHandEye {
	return IconMultimodalHandEye($size, $fill, $iconTypeWeight);
}

function IconMultipleAirports(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMultipleAirports {
	return IconMultipleAirports($size, $fill, $iconTypeWeight);
}

function IconMultipleStop(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMultipleStop {
	return IconMultipleStop($size, $fill, $iconTypeWeight);
}

function IconMuseum(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMuseum {
	return IconMuseum($size, $fill, $iconTypeWeight);
}

function IconMusicCast(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMusicCast {
	return IconMusicCast($size, $fill, $iconTypeWeight);
}

function IconMusicNote(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMusicNote {
	return IconMusicNote($size, $fill, $iconTypeWeight);
}

function IconMusicNoteAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMusicNoteAdd {
	return IconMusicNoteAdd($size, $fill, $iconTypeWeight);
}

function IconMusicOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMusicOff {
	return IconMusicOff($size, $fill, $iconTypeWeight);
}

function IconMusicVideo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMusicVideo {
	return IconMusicVideo($size, $fill, $iconTypeWeight);
}

function IconMyLocation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMyLocation {
	return IconMyLocation($size, $fill, $iconTypeWeight);
}

function IconMystery(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMystery {
	return IconMystery($size, $fill, $iconTypeWeight);
}

function IconNat(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNat {
	return IconNat($size, $fill, $iconTypeWeight);
}

function IconNature(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNature {
	return IconNature($size, $fill, $iconTypeWeight);
}

function IconNaturePeople(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNaturePeople {
	return IconNaturePeople($size, $fill, $iconTypeWeight);
}

function IconNavigation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNavigation {
	return IconNavigation($size, $fill, $iconTypeWeight);
}

function IconNearby(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNearby {
	return IconNearby($size, $fill, $iconTypeWeight);
}

function IconNearbyError(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNearbyError {
	return IconNearbyError($size, $fill, $iconTypeWeight);
}

function IconNearbyOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNearbyOff {
	return IconNearbyOff($size, $fill, $iconTypeWeight);
}

function IconNearMe(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNearMe {
	return IconNearMe($size, $fill, $iconTypeWeight);
}

function IconNearMeDisabled(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNearMeDisabled {
	return IconNearMeDisabled($size, $fill, $iconTypeWeight);
}

function IconNephrology(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNephrology {
	return IconNephrology($size, $fill, $iconTypeWeight);
}

function IconNestAudio(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestAudio {
	return IconNestAudio($size, $fill, $iconTypeWeight);
}

function IconNestCamFloodlight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestCamFloodlight {
	return IconNestCamFloodlight($size, $fill, $iconTypeWeight);
}

function IconNestCamIndoor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestCamIndoor {
	return IconNestCamIndoor($size, $fill, $iconTypeWeight);
}

function IconNestCamIq(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestCamIq {
	return IconNestCamIq($size, $fill, $iconTypeWeight);
}

function IconNestCamIqOutdoor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestCamIqOutdoor {
	return IconNestCamIqOutdoor($size, $fill, $iconTypeWeight);
}

function IconNestCamMagnetMount(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestCamMagnetMount {
	return IconNestCamMagnetMount($size, $fill, $iconTypeWeight);
}

function IconNestCamOutdoor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestCamOutdoor {
	return IconNestCamOutdoor($size, $fill, $iconTypeWeight);
}

function IconNestCamStand(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestCamStand {
	return IconNestCamStand($size, $fill, $iconTypeWeight);
}

function IconNestCamWallMount(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestCamWallMount {
	return IconNestCamWallMount($size, $fill, $iconTypeWeight);
}

function IconNestCamWiredStand(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestCamWiredStand {
	return IconNestCamWiredStand($size, $fill, $iconTypeWeight);
}

function IconNestClockFarsightAnalog(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestClockFarsightAnalog {
	return IconNestClockFarsightAnalog($size, $fill, $iconTypeWeight);
}

function IconNestClockFarsightDigital(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestClockFarsightDigital {
	return IconNestClockFarsightDigital($size, $fill, $iconTypeWeight);
}

function IconNestConnect(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestConnect {
	return IconNestConnect($size, $fill, $iconTypeWeight);
}

function IconNestDetect(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestDetect {
	return IconNestDetect($size, $fill, $iconTypeWeight);
}

function IconNestDisplay(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestDisplay {
	return IconNestDisplay($size, $fill, $iconTypeWeight);
}

function IconNestDisplayMax(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestDisplayMax {
	return IconNestDisplayMax($size, $fill, $iconTypeWeight);
}

function IconNestDoorbellVisitor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestDoorbellVisitor {
	return IconNestDoorbellVisitor($size, $fill, $iconTypeWeight);
}

function IconNestEcoLeaf(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestEcoLeaf {
	return IconNestEcoLeaf($size, $fill, $iconTypeWeight);
}

function IconNestFarsightWeather(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestFarsightWeather {
	return IconNestFarsightWeather($size, $fill, $iconTypeWeight);
}

function IconNestFoundSavings(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestFoundSavings {
	return IconNestFoundSavings($size, $fill, $iconTypeWeight);
}

function IconNestGaleWifi(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestGaleWifi {
	return IconNestGaleWifi($size, $fill, $iconTypeWeight);
}

function IconNestHeatLinkE(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestHeatLinkE {
	return IconNestHeatLinkE($size, $fill, $iconTypeWeight);
}

function IconNestHeatLinkGen3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestHeatLinkGen3 {
	return IconNestHeatLinkGen3($size, $fill, $iconTypeWeight);
}

function IconNestHelloDoorbell(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestHelloDoorbell {
	return IconNestHelloDoorbell($size, $fill, $iconTypeWeight);
}

function IconNestMini(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestMini {
	return IconNestMini($size, $fill, $iconTypeWeight);
}

function IconNestMultiRoom(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestMultiRoom {
	return IconNestMultiRoom($size, $fill, $iconTypeWeight);
}

function IconNestProtect(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestProtect {
	return IconNestProtect($size, $fill, $iconTypeWeight);
}

function IconNestRemote(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestRemote {
	return IconNestRemote($size, $fill, $iconTypeWeight);
}

function IconNestRemoteComfortSensor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestRemoteComfortSensor {
	return IconNestRemoteComfortSensor($size, $fill, $iconTypeWeight);
}

function IconNestSecureAlarm(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestSecureAlarm {
	return IconNestSecureAlarm($size, $fill, $iconTypeWeight);
}

function IconNestSunblock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestSunblock {
	return IconNestSunblock($size, $fill, $iconTypeWeight);
}

function IconNestTag(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestTag {
	return IconNestTag($size, $fill, $iconTypeWeight);
}

function IconNestThermostat(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestThermostat {
	return IconNestThermostat($size, $fill, $iconTypeWeight);
}

function IconNestThermostatEEu(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestThermostatEEu {
	return IconNestThermostatEEu($size, $fill, $iconTypeWeight);
}

function IconNestThermostatGen3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestThermostatGen3 {
	return IconNestThermostatGen3($size, $fill, $iconTypeWeight);
}

function IconNestThermostatSensor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestThermostatSensor {
	return IconNestThermostatSensor($size, $fill, $iconTypeWeight);
}

function IconNestThermostatSensorEu(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestThermostatSensorEu {
	return IconNestThermostatSensorEu($size, $fill, $iconTypeWeight);
}

function IconNestThermostatZirconiumEu(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestThermostatZirconiumEu {
	return IconNestThermostatZirconiumEu($size, $fill, $iconTypeWeight);
}

function IconNestTrueRadiant(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestTrueRadiant {
	return IconNestTrueRadiant($size, $fill, $iconTypeWeight);
}

function IconNestWakeOnApproach(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestWakeOnApproach {
	return IconNestWakeOnApproach($size, $fill, $iconTypeWeight);
}

function IconNestWakeOnPress(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestWakeOnPress {
	return IconNestWakeOnPress($size, $fill, $iconTypeWeight);
}

function IconNestWifiPoint(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestWifiPoint {
	return IconNestWifiPoint($size, $fill, $iconTypeWeight);
}

function IconNestWifiPro(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestWifiPro {
	return IconNestWifiPro($size, $fill, $iconTypeWeight);
}

function IconNestWifiPro2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestWifiPro2 {
	return IconNestWifiPro2($size, $fill, $iconTypeWeight);
}

function IconNestWifiRouter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestWifiRouter {
	return IconNestWifiRouter($size, $fill, $iconTypeWeight);
}

function IconNetworkCell(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNetworkCell {
	return IconNetworkCell($size, $fill, $iconTypeWeight);
}

function IconNetworkCheck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNetworkCheck {
	return IconNetworkCheck($size, $fill, $iconTypeWeight);
}

function IconNetworkIntelligence(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNetworkIntelligence {
	return IconNetworkIntelligence($size, $fill, $iconTypeWeight);
}

function IconNetworkIntelligenceHistory(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNetworkIntelligenceHistory {
	return IconNetworkIntelligenceHistory($size, $fill, $iconTypeWeight);
}

function IconNetworkIntelligenceUpdate(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNetworkIntelligenceUpdate {
	return IconNetworkIntelligenceUpdate($size, $fill, $iconTypeWeight);
}

function IconNetworkIntelNode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNetworkIntelNode {
	return IconNetworkIntelNode($size, $fill, $iconTypeWeight);
}

function IconNetworkLocked(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNetworkLocked {
	return IconNetworkLocked($size, $fill, $iconTypeWeight);
}

function IconNetworkManage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNetworkManage {
	return IconNetworkManage($size, $fill, $iconTypeWeight);
}

function IconNetworkNode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNetworkNode {
	return IconNetworkNode($size, $fill, $iconTypeWeight);
}

function IconNetworkPing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNetworkPing {
	return IconNetworkPing($size, $fill, $iconTypeWeight);
}

function IconNetworkWifi(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNetworkWifi {
	return IconNetworkWifi($size, $fill, $iconTypeWeight);
}

function IconNetworkWifi1Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNetworkWifi1Bar {
	return IconNetworkWifi1Bar($size, $fill, $iconTypeWeight);
}

function IconNetworkWifi1BarLocked(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNetworkWifi1BarLocked {
	return IconNetworkWifi1BarLocked($size, $fill, $iconTypeWeight);
}

function IconNetworkWifi2Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNetworkWifi2Bar {
	return IconNetworkWifi2Bar($size, $fill, $iconTypeWeight);
}

function IconNetworkWifi2BarLocked(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNetworkWifi2BarLocked {
	return IconNetworkWifi2BarLocked($size, $fill, $iconTypeWeight);
}

function IconNetworkWifi3Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNetworkWifi3Bar {
	return IconNetworkWifi3Bar($size, $fill, $iconTypeWeight);
}

function IconNetworkWifi3BarLocked(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNetworkWifi3BarLocked {
	return IconNetworkWifi3BarLocked($size, $fill, $iconTypeWeight);
}

function IconNetworkWifiLocked(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNetworkWifiLocked {
	return IconNetworkWifiLocked($size, $fill, $iconTypeWeight);
}

function IconNeurology(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNeurology {
	return IconNeurology($size, $fill, $iconTypeWeight);
}

function IconNewLabel(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNewLabel {
	return IconNewLabel($size, $fill, $iconTypeWeight);
}

function IconNewReleases(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNewReleases {
	return IconNewReleases($size, $fill, $iconTypeWeight);
}

function IconNews(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNews {
	return IconNews($size, $fill, $iconTypeWeight);
}

function IconNewsmode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNewsmode {
	return IconNewsmode($size, $fill, $iconTypeWeight);
}

function IconNewspaper(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNewspaper {
	return IconNewspaper($size, $fill, $iconTypeWeight);
}

function IconNewsstand(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNewsstand {
	return IconNewsstand($size, $fill, $iconTypeWeight);
}

function IconNewWindow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNewWindow {
	return IconNewWindow($size, $fill, $iconTypeWeight);
}

function IconNextPlan(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNextPlan {
	return IconNextPlan($size, $fill, $iconTypeWeight);
}

function IconNextWeek(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNextWeek {
	return IconNextWeek($size, $fill, $iconTypeWeight);
}

function IconNfc(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNfc {
	return IconNfc($size, $fill, $iconTypeWeight);
}

function IconNightlife(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNightlife {
	return IconNightlife($size, $fill, $iconTypeWeight);
}

function IconNightlight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNightlight {
	return IconNightlight($size, $fill, $iconTypeWeight);
}

function IconNightShelter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNightShelter {
	return IconNightShelter($size, $fill, $iconTypeWeight);
}

function IconNightSightAuto(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNightSightAuto {
	return IconNightSightAuto($size, $fill, $iconTypeWeight);
}

function IconNightSightAutoOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNightSightAutoOff {
	return IconNightSightAutoOff($size, $fill, $iconTypeWeight);
}

function IconNightSightMax(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNightSightMax {
	return IconNightSightMax($size, $fill, $iconTypeWeight);
}

function IconNightsStay(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNightsStay {
	return IconNightsStay($size, $fill, $iconTypeWeight);
}

function IconNoAccounts(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoAccounts {
	return IconNoAccounts($size, $fill, $iconTypeWeight);
}

function IconNoAdultContent(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoAdultContent {
	return IconNoAdultContent($size, $fill, $iconTypeWeight);
}

function IconNoBackpack(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoBackpack {
	return IconNoBackpack($size, $fill, $iconTypeWeight);
}

function IconNoCrash(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoCrash {
	return IconNoCrash($size, $fill, $iconTypeWeight);
}

function IconNoDrinks(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoDrinks {
	return IconNoDrinks($size, $fill, $iconTypeWeight);
}

function IconNoEncryption(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoEncryption {
	return IconNoEncryption($size, $fill, $iconTypeWeight);
}

function IconNoFlash(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoFlash {
	return IconNoFlash($size, $fill, $iconTypeWeight);
}

function IconNoFood(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoFood {
	return IconNoFood($size, $fill, $iconTypeWeight);
}

function IconNoiseAware(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoiseAware {
	return IconNoiseAware($size, $fill, $iconTypeWeight);
}

function IconNoiseControlOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoiseControlOff {
	return IconNoiseControlOff($size, $fill, $iconTypeWeight);
}

function IconNoiseControlOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoiseControlOn {
	return IconNoiseControlOn($size, $fill, $iconTypeWeight);
}

function IconNoLuggage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoLuggage {
	return IconNoLuggage($size, $fill, $iconTypeWeight);
}

function IconNoMeals(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoMeals {
	return IconNoMeals($size, $fill, $iconTypeWeight);
}

function IconNoMeetingRoom(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoMeetingRoom {
	return IconNoMeetingRoom($size, $fill, $iconTypeWeight);
}

function IconNoPhotography(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoPhotography {
	return IconNoPhotography($size, $fill, $iconTypeWeight);
}

function IconNordicWalking(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNordicWalking {
	return IconNordicWalking($size, $fill, $iconTypeWeight);
}

function IconNorth(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNorth {
	return IconNorth($size, $fill, $iconTypeWeight);
}

function IconNorthEast(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNorthEast {
	return IconNorthEast($size, $fill, $iconTypeWeight);
}

function IconNorthWest(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNorthWest {
	return IconNorthWest($size, $fill, $iconTypeWeight);
}

function IconNoSim(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoSim {
	return IconNoSim($size, $fill, $iconTypeWeight);
}

function IconNoSound(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoSound {
	return IconNoSound($size, $fill, $iconTypeWeight);
}

function IconNoStroller(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoStroller {
	return IconNoStroller($size, $fill, $iconTypeWeight);
}

function IconNotAccessible(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNotAccessible {
	return IconNotAccessible($size, $fill, $iconTypeWeight);
}

function IconNotAccessibleForward(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNotAccessibleForward {
	return IconNotAccessibleForward($size, $fill, $iconTypeWeight);
}

function IconNoteAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoteAdd {
	return IconNoteAdd($size, $fill, $iconTypeWeight);
}

function IconNoteAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoteAlt {
	return IconNoteAlt($size, $fill, $iconTypeWeight);
}

function IconNotes(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNotes {
	return IconNotes($size, $fill, $iconTypeWeight);
}

function IconNoteStack(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoteStack {
	return IconNoteStack($size, $fill, $iconTypeWeight);
}

function IconNoteStackAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoteStackAdd {
	return IconNoteStackAdd($size, $fill, $iconTypeWeight);
}

function IconNotificationAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNotificationAdd {
	return IconNotificationAdd($size, $fill, $iconTypeWeight);
}

function IconNotificationImportant(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNotificationImportant {
	return IconNotificationImportant($size, $fill, $iconTypeWeight);
}

function IconNotificationMultiple(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNotificationMultiple {
	return IconNotificationMultiple($size, $fill, $iconTypeWeight);
}

function IconNotifications(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNotifications {
	return IconNotifications($size, $fill, $iconTypeWeight);
}

function IconNotificationsActive(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNotificationsActive {
	return IconNotificationsActive($size, $fill, $iconTypeWeight);
}

function IconNotificationsOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNotificationsOff {
	return IconNotificationsOff($size, $fill, $iconTypeWeight);
}

function IconNotificationsPaused(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNotificationsPaused {
	return IconNotificationsPaused($size, $fill, $iconTypeWeight);
}

function IconNotificationsUnread(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNotificationsUnread {
	return IconNotificationsUnread($size, $fill, $iconTypeWeight);
}

function IconNotListedLocation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNotListedLocation {
	return IconNotListedLocation($size, $fill, $iconTypeWeight);
}

function IconNoTransfer(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoTransfer {
	return IconNoTransfer($size, $fill, $iconTypeWeight);
}

function IconNotStarted(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNotStarted {
	return IconNotStarted($size, $fill, $iconTypeWeight);
}

function IconNumbers(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNumbers {
	return IconNumbers($size, $fill, $iconTypeWeight);
}

function IconNutrition(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNutrition {
	return IconNutrition($size, $fill, $iconTypeWeight);
}

function IconOds(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOds {
	return IconOds($size, $fill, $iconTypeWeight);
}

function IconOdt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOdt {
	return IconOdt($size, $fill, $iconTypeWeight);
}

function IconOfflineBolt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOfflineBolt {
	return IconOfflineBolt($size, $fill, $iconTypeWeight);
}

function IconOfflinePin(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOfflinePin {
	return IconOfflinePin($size, $fill, $iconTypeWeight);
}

function IconOfflinePinOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOfflinePinOff {
	return IconOfflinePinOff($size, $fill, $iconTypeWeight);
}

function IconOfflineShare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOfflineShare {
	return IconOfflineShare($size, $fill, $iconTypeWeight);
}

function IconOilBarrel(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOilBarrel {
	return IconOilBarrel($size, $fill, $iconTypeWeight);
}

function IconOncology(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOncology {
	return IconOncology($size, $fill, $iconTypeWeight);
}

function IconOnDeviceTraining(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOnDeviceTraining {
	return IconOnDeviceTraining($size, $fill, $iconTypeWeight);
}

function IconOnHubDevice(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOnHubDevice {
	return IconOnHubDevice($size, $fill, $iconTypeWeight);
}

function IconOnlinePrediction(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOnlinePrediction {
	return IconOnlinePrediction($size, $fill, $iconTypeWeight);
}

function IconOnsen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOnsen {
	return IconOnsen($size, $fill, $iconTypeWeight);
}

function IconOpacity(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOpacity {
	return IconOpacity($size, $fill, $iconTypeWeight);
}

function IconOpenInBrowser(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOpenInBrowser {
	return IconOpenInBrowser($size, $fill, $iconTypeWeight);
}

function IconOpenInFull(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOpenInFull {
	return IconOpenInFull($size, $fill, $iconTypeWeight);
}

function IconOpenInNew(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOpenInNew {
	return IconOpenInNew($size, $fill, $iconTypeWeight);
}

function IconOpenInNewDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOpenInNewDown {
	return IconOpenInNewDown($size, $fill, $iconTypeWeight);
}

function IconOpenInNewOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOpenInNewOff {
	return IconOpenInNewOff($size, $fill, $iconTypeWeight);
}

function IconOpenInPhone(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOpenInPhone {
	return IconOpenInPhone($size, $fill, $iconTypeWeight);
}

function IconOpenJam(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOpenJam {
	return IconOpenJam($size, $fill, $iconTypeWeight);
}

function IconOpenRun(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOpenRun {
	return IconOpenRun($size, $fill, $iconTypeWeight);
}

function IconOpenWith(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOpenWith {
	return IconOpenWith($size, $fill, $iconTypeWeight);
}

function IconOphthalmology(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOphthalmology {
	return IconOphthalmology($size, $fill, $iconTypeWeight);
}

function IconOralDisease(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOralDisease {
	return IconOralDisease($size, $fill, $iconTypeWeight);
}

function IconOrbit(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOrbit {
	return IconOrbit($size, $fill, $iconTypeWeight);
}

function IconOrderApprove(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOrderApprove {
	return IconOrderApprove($size, $fill, $iconTypeWeight);
}

function IconOrderPlay(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOrderPlay {
	return IconOrderPlay($size, $fill, $iconTypeWeight);
}

function IconOrders(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOrders {
	return IconOrders($size, $fill, $iconTypeWeight);
}

function IconOrthopedics(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOrthopedics {
	return IconOrthopedics($size, $fill, $iconTypeWeight);
}

function IconOtherAdmission(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOtherAdmission {
	return IconOtherAdmission($size, $fill, $iconTypeWeight);
}

function IconOtherHouses(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOtherHouses {
	return IconOtherHouses($size, $fill, $iconTypeWeight);
}

function IconOutbound(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOutbound {
	return IconOutbound($size, $fill, $iconTypeWeight);
}

function IconOutbox(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOutbox {
	return IconOutbox($size, $fill, $iconTypeWeight);
}

function IconOutboxAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOutboxAlt {
	return IconOutboxAlt($size, $fill, $iconTypeWeight);
}

function IconOutdoorGarden(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOutdoorGarden {
	return IconOutdoorGarden($size, $fill, $iconTypeWeight);
}

function IconOutdoorGrill(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOutdoorGrill {
	return IconOutdoorGrill($size, $fill, $iconTypeWeight);
}

function IconOutgoingMail(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOutgoingMail {
	return IconOutgoingMail($size, $fill, $iconTypeWeight);
}

function IconOutlet(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOutlet {
	return IconOutlet($size, $fill, $iconTypeWeight);
}

function IconOutpatient(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOutpatient {
	return IconOutpatient($size, $fill, $iconTypeWeight);
}

function IconOutpatientMed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOutpatientMed {
	return IconOutpatientMed($size, $fill, $iconTypeWeight);
}

function IconOutput(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOutput {
	return IconOutput($size, $fill, $iconTypeWeight);
}

function IconOutputCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOutputCircle {
	return IconOutputCircle($size, $fill, $iconTypeWeight);
}

function IconOven(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOven {
	return IconOven($size, $fill, $iconTypeWeight);
}

function IconOvenGen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOvenGen {
	return IconOvenGen($size, $fill, $iconTypeWeight);
}

function IconOverview(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOverview {
	return IconOverview($size, $fill, $iconTypeWeight);
}

function IconOverviewKey(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOverviewKey {
	return IconOverviewKey($size, $fill, $iconTypeWeight);
}

function IconOwl(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOwl {
	return IconOwl($size, $fill, $iconTypeWeight);
}

function IconOxygenSaturation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOxygenSaturation {
	return IconOxygenSaturation($size, $fill, $iconTypeWeight);
}

function IconP2p(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconP2p {
	return IconP2p($size, $fill, $iconTypeWeight);
}

function IconPace(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPace {
	return IconPace($size, $fill, $iconTypeWeight);
}

function IconPacemaker(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPacemaker {
	return IconPacemaker($size, $fill, $iconTypeWeight);
}

function IconPackage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPackage {
	return IconPackage($size, $fill, $iconTypeWeight);
}

function IconPackage2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPackage2 {
	return IconPackage2($size, $fill, $iconTypeWeight);
}

function IconPadding(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPadding {
	return IconPadding($size, $fill, $iconTypeWeight);
}

function IconPageControl(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPageControl {
	return IconPageControl($size, $fill, $iconTypeWeight);
}

function IconPageFooter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPageFooter {
	return IconPageFooter($size, $fill, $iconTypeWeight);
}

function IconPageHeader(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPageHeader {
	return IconPageHeader($size, $fill, $iconTypeWeight);
}

function IconPageInfo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPageInfo {
	return IconPageInfo($size, $fill, $iconTypeWeight);
}

function IconPageless(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPageless {
	return IconPageless($size, $fill, $iconTypeWeight);
}

function IconPages(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPages {
	return IconPages($size, $fill, $iconTypeWeight);
}

function IconPageview(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPageview {
	return IconPageview($size, $fill, $iconTypeWeight);
}

function IconPaid(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPaid {
	return IconPaid($size, $fill, $iconTypeWeight);
}

function IconPalette(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPalette {
	return IconPalette($size, $fill, $iconTypeWeight);
}

function IconPallet(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPallet {
	return IconPallet($size, $fill, $iconTypeWeight);
}

function IconPanorama(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPanorama {
	return IconPanorama($size, $fill, $iconTypeWeight);
}

function IconPanoramaHorizontal(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPanoramaHorizontal {
	return IconPanoramaHorizontal($size, $fill, $iconTypeWeight);
}

function IconPanoramaPhotosphere(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPanoramaPhotosphere {
	return IconPanoramaPhotosphere($size, $fill, $iconTypeWeight);
}

function IconPanoramaVertical(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPanoramaVertical {
	return IconPanoramaVertical($size, $fill, $iconTypeWeight);
}

function IconPanoramaWideAngle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPanoramaWideAngle {
	return IconPanoramaWideAngle($size, $fill, $iconTypeWeight);
}

function IconPanTool(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPanTool {
	return IconPanTool($size, $fill, $iconTypeWeight);
}

function IconPanToolAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPanToolAlt {
	return IconPanToolAlt($size, $fill, $iconTypeWeight);
}

function IconPanZoom(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPanZoom {
	return IconPanZoom($size, $fill, $iconTypeWeight);
}

function IconParagliding(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconParagliding {
	return IconParagliding($size, $fill, $iconTypeWeight);
}

function IconPark(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPark {
	return IconPark($size, $fill, $iconTypeWeight);
}

function IconPartlyCloudyDay(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPartlyCloudyDay {
	return IconPartlyCloudyDay($size, $fill, $iconTypeWeight);
}

function IconPartlyCloudyNight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPartlyCloudyNight {
	return IconPartlyCloudyNight($size, $fill, $iconTypeWeight);
}

function IconPartnerExchange(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPartnerExchange {
	return IconPartnerExchange($size, $fill, $iconTypeWeight);
}

function IconPartnerReports(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPartnerReports {
	return IconPartnerReports($size, $fill, $iconTypeWeight);
}

function IconPartyMode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPartyMode {
	return IconPartyMode($size, $fill, $iconTypeWeight);
}

function IconPasskey(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPasskey {
	return IconPasskey($size, $fill, $iconTypeWeight);
}

function IconPassword(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPassword {
	return IconPassword($size, $fill, $iconTypeWeight);
}

function IconPassword2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPassword2 {
	return IconPassword2($size, $fill, $iconTypeWeight);
}

function IconPassword2Off(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPassword2Off {
	return IconPassword2Off($size, $fill, $iconTypeWeight);
}

function IconPatientList(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPatientList {
	return IconPatientList($size, $fill, $iconTypeWeight);
}

function IconPattern(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPattern {
	return IconPattern($size, $fill, $iconTypeWeight);
}

function IconPause(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPause {
	return IconPause($size, $fill, $iconTypeWeight);
}

function IconPauseCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPauseCircle {
	return IconPauseCircle($size, $fill, $iconTypeWeight);
}

function IconPausePresentation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPausePresentation {
	return IconPausePresentation($size, $fill, $iconTypeWeight);
}

function IconPayments(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPayments {
	return IconPayments($size, $fill, $iconTypeWeight);
}

function IconPedalBike(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPedalBike {
	return IconPedalBike($size, $fill, $iconTypeWeight);
}

function IconPediatrics(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPediatrics {
	return IconPediatrics($size, $fill, $iconTypeWeight);
}

function IconPending(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPending {
	return IconPending($size, $fill, $iconTypeWeight);
}

function IconPendingActions(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPendingActions {
	return IconPendingActions($size, $fill, $iconTypeWeight);
}

function IconPenSize1(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPenSize1 {
	return IconPenSize1($size, $fill, $iconTypeWeight);
}

function IconPenSize2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPenSize2 {
	return IconPenSize2($size, $fill, $iconTypeWeight);
}

function IconPenSize3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPenSize3 {
	return IconPenSize3($size, $fill, $iconTypeWeight);
}

function IconPenSize4(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPenSize4 {
	return IconPenSize4($size, $fill, $iconTypeWeight);
}

function IconPenSize5(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPenSize5 {
	return IconPenSize5($size, $fill, $iconTypeWeight);
}

function IconPentagon(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPentagon {
	return IconPentagon($size, $fill, $iconTypeWeight);
}

function IconPercent(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPercent {
	return IconPercent($size, $fill, $iconTypeWeight);
}

function IconPergola(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPergola {
	return IconPergola($size, $fill, $iconTypeWeight);
}

function IconPermCameraMic(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPermCameraMic {
	return IconPermCameraMic($size, $fill, $iconTypeWeight);
}

function IconPermContactCalendar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPermContactCalendar {
	return IconPermContactCalendar($size, $fill, $iconTypeWeight);
}

function IconPermDataSetting(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPermDataSetting {
	return IconPermDataSetting($size, $fill, $iconTypeWeight);
}

function IconPermDeviceInformation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPermDeviceInformation {
	return IconPermDeviceInformation($size, $fill, $iconTypeWeight);
}

function IconPermMedia(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPermMedia {
	return IconPermMedia($size, $fill, $iconTypeWeight);
}

function IconPermPhoneMsg(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPermPhoneMsg {
	return IconPermPhoneMsg($size, $fill, $iconTypeWeight);
}

function IconPermScanWifi(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPermScanWifi {
	return IconPermScanWifi($size, $fill, $iconTypeWeight);
}

function IconPerson(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPerson {
	return IconPerson($size, $fill, $iconTypeWeight);
}

function IconPerson2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPerson2 {
	return IconPerson2($size, $fill, $iconTypeWeight);
}

function IconPerson3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPerson3 {
	return IconPerson3($size, $fill, $iconTypeWeight);
}

function IconPerson4(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPerson4 {
	return IconPerson4($size, $fill, $iconTypeWeight);
}

function IconPersonAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonAdd {
	return IconPersonAdd($size, $fill, $iconTypeWeight);
}

function IconPersonAddDisabled(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonAddDisabled {
	return IconPersonAddDisabled($size, $fill, $iconTypeWeight);
}

function IconPersonalBag(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonalBag {
	return IconPersonalBag($size, $fill, $iconTypeWeight);
}

function IconPersonalBagOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonalBagOff {
	return IconPersonalBagOff($size, $fill, $iconTypeWeight);
}

function IconPersonalBagQuestion(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonalBagQuestion {
	return IconPersonalBagQuestion($size, $fill, $iconTypeWeight);
}

function IconPersonAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonAlert {
	return IconPersonAlert($size, $fill, $iconTypeWeight);
}

function IconPersonalInjury(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonalInjury {
	return IconPersonalInjury($size, $fill, $iconTypeWeight);
}

function IconPersonalPlaces(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonalPlaces {
	return IconPersonalPlaces($size, $fill, $iconTypeWeight);
}

function IconPersonApron(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonApron {
	return IconPersonApron($size, $fill, $iconTypeWeight);
}

function IconPersonBook(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonBook {
	return IconPersonBook($size, $fill, $iconTypeWeight);
}

function IconPersonCancel(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonCancel {
	return IconPersonCancel($size, $fill, $iconTypeWeight);
}

function IconPersonCelebrate(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonCelebrate {
	return IconPersonCelebrate($size, $fill, $iconTypeWeight);
}

function IconPersonCheck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonCheck {
	return IconPersonCheck($size, $fill, $iconTypeWeight);
}

function IconPersonEdit(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonEdit {
	return IconPersonEdit($size, $fill, $iconTypeWeight);
}

function IconPersonOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonOff {
	return IconPersonOff($size, $fill, $iconTypeWeight);
}

function IconPersonPin(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonPin {
	return IconPersonPin($size, $fill, $iconTypeWeight);
}

function IconPersonPinCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonPinCircle {
	return IconPersonPinCircle($size, $fill, $iconTypeWeight);
}

function IconPersonPlay(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonPlay {
	return IconPersonPlay($size, $fill, $iconTypeWeight);
}

function IconPersonRaisedHand(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonRaisedHand {
	return IconPersonRaisedHand($size, $fill, $iconTypeWeight);
}

function IconPersonRemove(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonRemove {
	return IconPersonRemove($size, $fill, $iconTypeWeight);
}

function IconPersonSearch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonSearch {
	return IconPersonSearch($size, $fill, $iconTypeWeight);
}

function IconPestControl(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPestControl {
	return IconPestControl($size, $fill, $iconTypeWeight);
}

function IconPestControlRodent(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPestControlRodent {
	return IconPestControlRodent($size, $fill, $iconTypeWeight);
}

function IconPets(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPets {
	return IconPets($size, $fill, $iconTypeWeight);
}

function IconPetSupplies(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPetSupplies {
	return IconPetSupplies($size, $fill, $iconTypeWeight);
}

function IconPhishing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhishing {
	return IconPhishing($size, $fill, $iconTypeWeight);
}

function IconPhoneAndroid(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhoneAndroid {
	return IconPhoneAndroid($size, $fill, $iconTypeWeight);
}

function IconPhoneBluetoothSpeaker(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhoneBluetoothSpeaker {
	return IconPhoneBluetoothSpeaker($size, $fill, $iconTypeWeight);
}

function IconPhoneCallback(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhoneCallback {
	return IconPhoneCallback($size, $fill, $iconTypeWeight);
}

function IconPhoneDisabled(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhoneDisabled {
	return IconPhoneDisabled($size, $fill, $iconTypeWeight);
}

function IconPhoneEnabled(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhoneEnabled {
	return IconPhoneEnabled($size, $fill, $iconTypeWeight);
}

function IconPhoneForwarded(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhoneForwarded {
	return IconPhoneForwarded($size, $fill, $iconTypeWeight);
}

function IconPhoneInTalk(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhoneInTalk {
	return IconPhoneInTalk($size, $fill, $iconTypeWeight);
}

function IconPhoneIphone(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhoneIphone {
	return IconPhoneIphone($size, $fill, $iconTypeWeight);
}

function IconPhonelinkErase(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhonelinkErase {
	return IconPhonelinkErase($size, $fill, $iconTypeWeight);
}

function IconPhonelinkLock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhonelinkLock {
	return IconPhonelinkLock($size, $fill, $iconTypeWeight);
}

function IconPhonelinkOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhonelinkOff {
	return IconPhonelinkOff($size, $fill, $iconTypeWeight);
}

function IconPhonelinkRing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhonelinkRing {
	return IconPhonelinkRing($size, $fill, $iconTypeWeight);
}

function IconPhonelinkRingOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhonelinkRingOff {
	return IconPhonelinkRingOff($size, $fill, $iconTypeWeight);
}

function IconPhonelinkSetup(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhonelinkSetup {
	return IconPhonelinkSetup($size, $fill, $iconTypeWeight);
}

function IconPhoneLocked(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhoneLocked {
	return IconPhoneLocked($size, $fill, $iconTypeWeight);
}

function IconPhoneMissed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhoneMissed {
	return IconPhoneMissed($size, $fill, $iconTypeWeight);
}

function IconPhonePaused(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhonePaused {
	return IconPhonePaused($size, $fill, $iconTypeWeight);
}

function IconPhoto(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhoto {
	return IconPhoto($size, $fill, $iconTypeWeight);
}

function IconPhotoAlbum(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhotoAlbum {
	return IconPhotoAlbum($size, $fill, $iconTypeWeight);
}

function IconPhotoAutoMerge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhotoAutoMerge {
	return IconPhotoAutoMerge($size, $fill, $iconTypeWeight);
}

function IconPhotoCamera(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhotoCamera {
	return IconPhotoCamera($size, $fill, $iconTypeWeight);
}

function IconPhotoCameraBack(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhotoCameraBack {
	return IconPhotoCameraBack($size, $fill, $iconTypeWeight);
}

function IconPhotoCameraFront(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhotoCameraFront {
	return IconPhotoCameraFront($size, $fill, $iconTypeWeight);
}

function IconPhotoFrame(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhotoFrame {
	return IconPhotoFrame($size, $fill, $iconTypeWeight);
}

function IconPhotoLibrary(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhotoLibrary {
	return IconPhotoLibrary($size, $fill, $iconTypeWeight);
}

function IconPhotoPrints(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhotoPrints {
	return IconPhotoPrints($size, $fill, $iconTypeWeight);
}

function IconPhotoSizeSelectLarge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhotoSizeSelectLarge {
	return IconPhotoSizeSelectLarge($size, $fill, $iconTypeWeight);
}

function IconPhotoSizeSelectSmall(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhotoSizeSelectSmall {
	return IconPhotoSizeSelectSmall($size, $fill, $iconTypeWeight);
}

function IconPhp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhp {
	return IconPhp($size, $fill, $iconTypeWeight);
}

function IconPhysicalTherapy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhysicalTherapy {
	return IconPhysicalTherapy($size, $fill, $iconTypeWeight);
}

function IconPiano(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPiano {
	return IconPiano($size, $fill, $iconTypeWeight);
}

function IconPianoOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPianoOff {
	return IconPianoOff($size, $fill, $iconTypeWeight);
}

function IconPictureAsPdf(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPictureAsPdf {
	return IconPictureAsPdf($size, $fill, $iconTypeWeight);
}

function IconPictureInPicture(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPictureInPicture {
	return IconPictureInPicture($size, $fill, $iconTypeWeight);
}

function IconPictureInPictureAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPictureInPictureAlt {
	return IconPictureInPictureAlt($size, $fill, $iconTypeWeight);
}

function IconPictureInPictureCenter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPictureInPictureCenter {
	return IconPictureInPictureCenter($size, $fill, $iconTypeWeight);
}

function IconPictureInPictureLarge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPictureInPictureLarge {
	return IconPictureInPictureLarge($size, $fill, $iconTypeWeight);
}

function IconPictureInPictureMedium(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPictureInPictureMedium {
	return IconPictureInPictureMedium($size, $fill, $iconTypeWeight);
}

function IconPictureInPictureMobile(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPictureInPictureMobile {
	return IconPictureInPictureMobile($size, $fill, $iconTypeWeight);
}

function IconPictureInPictureOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPictureInPictureOff {
	return IconPictureInPictureOff($size, $fill, $iconTypeWeight);
}

function IconPictureInPictureSmall(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPictureInPictureSmall {
	return IconPictureInPictureSmall($size, $fill, $iconTypeWeight);
}

function IconPieChart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPieChart {
	return IconPieChart($size, $fill, $iconTypeWeight);
}

function IconPill(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPill {
	return IconPill($size, $fill, $iconTypeWeight);
}

function IconPillOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPillOff {
	return IconPillOff($size, $fill, $iconTypeWeight);
}

function IconPin(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPin {
	return IconPin($size, $fill, $iconTypeWeight);
}

function IconPinboard(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPinboard {
	return IconPinboard($size, $fill, $iconTypeWeight);
}

function IconPinboardUnread(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPinboardUnread {
	return IconPinboardUnread($size, $fill, $iconTypeWeight);
}

function IconPinch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPinch {
	return IconPinch($size, $fill, $iconTypeWeight);
}

function IconPinchZoomIn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPinchZoomIn {
	return IconPinchZoomIn($size, $fill, $iconTypeWeight);
}

function IconPinchZoomOut(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPinchZoomOut {
	return IconPinchZoomOut($size, $fill, $iconTypeWeight);
}

function IconPinDrop(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPinDrop {
	return IconPinDrop($size, $fill, $iconTypeWeight);
}

function IconPinEnd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPinEnd {
	return IconPinEnd($size, $fill, $iconTypeWeight);
}

function IconPinInvoke(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPinInvoke {
	return IconPinInvoke($size, $fill, $iconTypeWeight);
}

function IconPip(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPip {
	return IconPip($size, $fill, $iconTypeWeight);
}

function IconPipExit(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPipExit {
	return IconPipExit($size, $fill, $iconTypeWeight);
}

function IconPivotTableChart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPivotTableChart {
	return IconPivotTableChart($size, $fill, $iconTypeWeight);
}

function IconPlaceItem(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPlaceItem {
	return IconPlaceItem($size, $fill, $iconTypeWeight);
}

function IconPlagiarism(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPlagiarism {
	return IconPlagiarism($size, $fill, $iconTypeWeight);
}

function IconPlanet(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPlanet {
	return IconPlanet($size, $fill, $iconTypeWeight);
}

function IconPlannerBannerAdPt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPlannerBannerAdPt {
	return IconPlannerBannerAdPt($size, $fill, $iconTypeWeight);
}

function IconPlannerReview(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPlannerReview {
	return IconPlannerReview($size, $fill, $iconTypeWeight);
}

function IconPlayArrow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPlayArrow {
	return IconPlayArrow($size, $fill, $iconTypeWeight);
}

function IconPlayCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPlayCircle {
	return IconPlayCircle($size, $fill, $iconTypeWeight);
}

function IconPlayDisabled(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPlayDisabled {
	return IconPlayDisabled($size, $fill, $iconTypeWeight);
}

function IconPlayForWork(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPlayForWork {
	return IconPlayForWork($size, $fill, $iconTypeWeight);
}

function IconPlayingCards(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPlayingCards {
	return IconPlayingCards($size, $fill, $iconTypeWeight);
}

function IconPlayLesson(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPlayLesson {
	return IconPlayLesson($size, $fill, $iconTypeWeight);
}

function IconPlaylistAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPlaylistAdd {
	return IconPlaylistAdd($size, $fill, $iconTypeWeight);
}

function IconPlaylistAddCheck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPlaylistAddCheck {
	return IconPlaylistAddCheck($size, $fill, $iconTypeWeight);
}

function IconPlaylistAddCheckCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPlaylistAddCheckCircle {
	return IconPlaylistAddCheckCircle($size, $fill, $iconTypeWeight);
}

function IconPlaylistAddCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPlaylistAddCircle {
	return IconPlaylistAddCircle($size, $fill, $iconTypeWeight);
}

function IconPlaylistPlay(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPlaylistPlay {
	return IconPlaylistPlay($size, $fill, $iconTypeWeight);
}

function IconPlaylistRemove(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPlaylistRemove {
	return IconPlaylistRemove($size, $fill, $iconTypeWeight);
}

function IconPlayPause(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPlayPause {
	return IconPlayPause($size, $fill, $iconTypeWeight);
}

function IconPlumbing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPlumbing {
	return IconPlumbing($size, $fill, $iconTypeWeight);
}

function IconPodcasts(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPodcasts {
	return IconPodcasts($size, $fill, $iconTypeWeight);
}

function IconPodiatry(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPodiatry {
	return IconPodiatry($size, $fill, $iconTypeWeight);
}

function IconPodium(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPodium {
	return IconPodium($size, $fill, $iconTypeWeight);
}

function IconPointOfSale(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPointOfSale {
	return IconPointOfSale($size, $fill, $iconTypeWeight);
}

function IconPointScan(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPointScan {
	return IconPointScan($size, $fill, $iconTypeWeight);
}

function IconPokerChip(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPokerChip {
	return IconPokerChip($size, $fill, $iconTypeWeight);
}

function IconPolicy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPolicy {
	return IconPolicy($size, $fill, $iconTypeWeight);
}

function IconPolicyAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPolicyAlert {
	return IconPolicyAlert($size, $fill, $iconTypeWeight);
}

function IconPolyline(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPolyline {
	return IconPolyline($size, $fill, $iconTypeWeight);
}

function IconPolymer(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPolymer {
	return IconPolymer($size, $fill, $iconTypeWeight);
}

function IconPool(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPool {
	return IconPool($size, $fill, $iconTypeWeight);
}

function IconPortableWifiOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPortableWifiOff {
	return IconPortableWifiOff($size, $fill, $iconTypeWeight);
}

function IconPositionBottomLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPositionBottomLeft {
	return IconPositionBottomLeft($size, $fill, $iconTypeWeight);
}

function IconPositionBottomRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPositionBottomRight {
	return IconPositionBottomRight($size, $fill, $iconTypeWeight);
}

function IconPositionTopRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPositionTopRight {
	return IconPositionTopRight($size, $fill, $iconTypeWeight);
}

function IconPost(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPost {
	return IconPost($size, $fill, $iconTypeWeight);
}

function IconPostAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPostAdd {
	return IconPostAdd($size, $fill, $iconTypeWeight);
}

function IconPottedPlant(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPottedPlant {
	return IconPottedPlant($size, $fill, $iconTypeWeight);
}

function IconPower(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPower {
	return IconPower($size, $fill, $iconTypeWeight);
}

function IconPowerInput(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPowerInput {
	return IconPowerInput($size, $fill, $iconTypeWeight);
}

function IconPowerOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPowerOff {
	return IconPowerOff($size, $fill, $iconTypeWeight);
}

function IconPowerSettingsCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPowerSettingsCircle {
	return IconPowerSettingsCircle($size, $fill, $iconTypeWeight);
}

function IconPowerSettingsNew(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPowerSettingsNew {
	return IconPowerSettingsNew($size, $fill, $iconTypeWeight);
}

function IconPrayerTimes(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPrayerTimes {
	return IconPrayerTimes($size, $fill, $iconTypeWeight);
}

function IconPrecisionManufacturing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPrecisionManufacturing {
	return IconPrecisionManufacturing($size, $fill, $iconTypeWeight);
}

function IconPregnancy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPregnancy {
	return IconPregnancy($size, $fill, $iconTypeWeight);
}

function IconPregnantWoman(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPregnantWoman {
	return IconPregnantWoman($size, $fill, $iconTypeWeight);
}

function IconPreliminary(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPreliminary {
	return IconPreliminary($size, $fill, $iconTypeWeight);
}

function IconPrescriptions(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPrescriptions {
	return IconPrescriptions($size, $fill, $iconTypeWeight);
}

function IconPresentToAll(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPresentToAll {
	return IconPresentToAll($size, $fill, $iconTypeWeight);
}

function IconPreview(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPreview {
	return IconPreview($size, $fill, $iconTypeWeight);
}

function IconPreviewOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPreviewOff {
	return IconPreviewOff($size, $fill, $iconTypeWeight);
}

function IconPriceChange(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPriceChange {
	return IconPriceChange($size, $fill, $iconTypeWeight);
}

function IconPriceCheck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPriceCheck {
	return IconPriceCheck($size, $fill, $iconTypeWeight);
}

function IconPrint(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPrint {
	return IconPrint($size, $fill, $iconTypeWeight);
}

function IconPrintAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPrintAdd {
	return IconPrintAdd($size, $fill, $iconTypeWeight);
}

function IconPrintConnect(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPrintConnect {
	return IconPrintConnect($size, $fill, $iconTypeWeight);
}

function IconPrintDisabled(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPrintDisabled {
	return IconPrintDisabled($size, $fill, $iconTypeWeight);
}

function IconPrintError(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPrintError {
	return IconPrintError($size, $fill, $iconTypeWeight);
}

function IconPrintLock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPrintLock {
	return IconPrintLock($size, $fill, $iconTypeWeight);
}

function IconPriority(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPriority {
	return IconPriority($size, $fill, $iconTypeWeight);
}

function IconPriorityHigh(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPriorityHigh {
	return IconPriorityHigh($size, $fill, $iconTypeWeight);
}

function IconPrivacy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPrivacy {
	return IconPrivacy($size, $fill, $iconTypeWeight);
}

function IconPrivacyTip(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPrivacyTip {
	return IconPrivacyTip($size, $fill, $iconTypeWeight);
}

function IconPrivateConnectivity(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPrivateConnectivity {
	return IconPrivateConnectivity($size, $fill, $iconTypeWeight);
}

function IconProblem(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconProblem {
	return IconProblem($size, $fill, $iconTypeWeight);
}

function IconProcedure(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconProcedure {
	return IconProcedure($size, $fill, $iconTypeWeight);
}

function IconProcessChart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconProcessChart {
	return IconProcessChart($size, $fill, $iconTypeWeight);
}

function IconProductionQuantityLimits(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconProductionQuantityLimits {
	return IconProductionQuantityLimits($size, $fill, $iconTypeWeight);
}

function IconProductivity(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconProductivity {
	return IconProductivity($size, $fill, $iconTypeWeight);
}

function IconProgressActivity(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconProgressActivity {
	return IconProgressActivity($size, $fill, $iconTypeWeight);
}

function IconPromptSuggestion(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPromptSuggestion {
	return IconPromptSuggestion($size, $fill, $iconTypeWeight);
}

function IconPropane(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPropane {
	return IconPropane($size, $fill, $iconTypeWeight);
}

function IconPropaneTank(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPropaneTank {
	return IconPropaneTank($size, $fill, $iconTypeWeight);
}

function IconPsychiatry(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPsychiatry {
	return IconPsychiatry($size, $fill, $iconTypeWeight);
}

function IconPsychology(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPsychology {
	return IconPsychology($size, $fill, $iconTypeWeight);
}

function IconPsychologyAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPsychologyAlt {
	return IconPsychologyAlt($size, $fill, $iconTypeWeight);
}

function IconPublic(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPublic {
	return IconPublic($size, $fill, $iconTypeWeight);
}

function IconPublicOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPublicOff {
	return IconPublicOff($size, $fill, $iconTypeWeight);
}

function IconPublish(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPublish {
	return IconPublish($size, $fill, $iconTypeWeight);
}

function IconPublishedWithChanges(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPublishedWithChanges {
	return IconPublishedWithChanges($size, $fill, $iconTypeWeight);
}

function IconPulmonology(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPulmonology {
	return IconPulmonology($size, $fill, $iconTypeWeight);
}

function IconPulseAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPulseAlert {
	return IconPulseAlert($size, $fill, $iconTypeWeight);
}

function IconPunchClock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPunchClock {
	return IconPunchClock($size, $fill, $iconTypeWeight);
}

function IconQrCode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconQrCode {
	return IconQrCode($size, $fill, $iconTypeWeight);
}

function IconQrCode2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconQrCode2 {
	return IconQrCode2($size, $fill, $iconTypeWeight);
}

function IconQrCode2Add(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconQrCode2Add {
	return IconQrCode2Add($size, $fill, $iconTypeWeight);
}

function IconQrCodeScanner(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconQrCodeScanner {
	return IconQrCodeScanner($size, $fill, $iconTypeWeight);
}

function IconQueryStats(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconQueryStats {
	return IconQueryStats($size, $fill, $iconTypeWeight);
}

function IconQuestionExchange(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconQuestionExchange {
	return IconQuestionExchange($size, $fill, $iconTypeWeight);
}

function IconQuestionMark(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconQuestionMark {
	return IconQuestionMark($size, $fill, $iconTypeWeight);
}

function IconQueueMusic(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconQueueMusic {
	return IconQueueMusic($size, $fill, $iconTypeWeight);
}

function IconQueuePlayNext(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconQueuePlayNext {
	return IconQueuePlayNext($size, $fill, $iconTypeWeight);
}

function IconQuickPhrases(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconQuickPhrases {
	return IconQuickPhrases($size, $fill, $iconTypeWeight);
}

function IconQuickReference(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconQuickReference {
	return IconQuickReference($size, $fill, $iconTypeWeight);
}

function IconQuickReferenceAll(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconQuickReferenceAll {
	return IconQuickReferenceAll($size, $fill, $iconTypeWeight);
}

function IconQuickReorder(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconQuickReorder {
	return IconQuickReorder($size, $fill, $iconTypeWeight);
}

function IconQuickreply(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconQuickreply {
	return IconQuickreply($size, $fill, $iconTypeWeight);
}

function IconQuiz(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconQuiz {
	return IconQuiz($size, $fill, $iconTypeWeight);
}

function IconRadar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRadar {
	return IconRadar($size, $fill, $iconTypeWeight);
}

function IconRadio(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRadio {
	return IconRadio($size, $fill, $iconTypeWeight);
}

function IconRadioButtonChecked(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRadioButtonChecked {
	return IconRadioButtonChecked($size, $fill, $iconTypeWeight);
}

function IconRadioButtonPartial(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRadioButtonPartial {
	return IconRadioButtonPartial($size, $fill, $iconTypeWeight);
}

function IconRadioButtonUnchecked(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRadioButtonUnchecked {
	return IconRadioButtonUnchecked($size, $fill, $iconTypeWeight);
}

function IconRadiology(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRadiology {
	return IconRadiology($size, $fill, $iconTypeWeight);
}

function IconRailwayAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRailwayAlert {
	return IconRailwayAlert($size, $fill, $iconTypeWeight);
}

function IconRailwayAlert2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRailwayAlert2 {
	return IconRailwayAlert2($size, $fill, $iconTypeWeight);
}

function IconRainy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRainy {
	return IconRainy($size, $fill, $iconTypeWeight);
}

function IconRainyHeavy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRainyHeavy {
	return IconRainyHeavy($size, $fill, $iconTypeWeight);
}

function IconRainyLight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRainyLight {
	return IconRainyLight($size, $fill, $iconTypeWeight);
}

function IconRainySnow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRainySnow {
	return IconRainySnow($size, $fill, $iconTypeWeight);
}

function IconRamenDining(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRamenDining {
	return IconRamenDining($size, $fill, $iconTypeWeight);
}

function IconRampLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRampLeft {
	return IconRampLeft($size, $fill, $iconTypeWeight);
}

function IconRampRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRampRight {
	return IconRampRight($size, $fill, $iconTypeWeight);
}

function IconRangeHood(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRangeHood {
	return IconRangeHood($size, $fill, $iconTypeWeight);
}

function IconRateReview(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRateReview {
	return IconRateReview($size, $fill, $iconTypeWeight);
}

function IconRaven(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRaven {
	return IconRaven($size, $fill, $iconTypeWeight);
}

function IconRawOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRawOff {
	return IconRawOff($size, $fill, $iconTypeWeight);
}

function IconRawOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRawOn {
	return IconRawOn($size, $fill, $iconTypeWeight);
}

function IconReadinessScore(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReadinessScore {
	return IconReadinessScore($size, $fill, $iconTypeWeight);
}

function IconReadMore(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReadMore {
	return IconReadMore($size, $fill, $iconTypeWeight);
}

function IconRealEstateAgent(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRealEstateAgent {
	return IconRealEstateAgent($size, $fill, $iconTypeWeight);
}

function IconRearCamera(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRearCamera {
	return IconRearCamera($size, $fill, $iconTypeWeight);
}

function IconRebase(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRebase {
	return IconRebase($size, $fill, $iconTypeWeight);
}

function IconRebaseEdit(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRebaseEdit {
	return IconRebaseEdit($size, $fill, $iconTypeWeight);
}

function IconReceipt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReceipt {
	return IconReceipt($size, $fill, $iconTypeWeight);
}

function IconReceiptLong(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReceiptLong {
	return IconReceiptLong($size, $fill, $iconTypeWeight);
}

function IconReceiptLongOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReceiptLongOff {
	return IconReceiptLongOff($size, $fill, $iconTypeWeight);
}

function IconRecentActors(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRecentActors {
	return IconRecentActors($size, $fill, $iconTypeWeight);
}

function IconRecenter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRecenter {
	return IconRecenter($size, $fill, $iconTypeWeight);
}

function IconRecentPatient(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRecentPatient {
	return IconRecentPatient($size, $fill, $iconTypeWeight);
}

function IconRecommend(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRecommend {
	return IconRecommend($size, $fill, $iconTypeWeight);
}

function IconRecordVoiceOver(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRecordVoiceOver {
	return IconRecordVoiceOver($size, $fill, $iconTypeWeight);
}

function IconRectangle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRectangle {
	return IconRectangle($size, $fill, $iconTypeWeight);
}

function IconRecycling(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRecycling {
	return IconRecycling($size, $fill, $iconTypeWeight);
}

function IconRedeem(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRedeem {
	return IconRedeem($size, $fill, $iconTypeWeight);
}

function IconRedo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRedo {
	return IconRedo($size, $fill, $iconTypeWeight);
}

function IconReduceCapacity(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReduceCapacity {
	return IconReduceCapacity($size, $fill, $iconTypeWeight);
}

function IconRefresh(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRefresh {
	return IconRefresh($size, $fill, $iconTypeWeight);
}

function IconRegularExpression(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRegularExpression {
	return IconRegularExpression($size, $fill, $iconTypeWeight);
}

function IconRelax(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRelax {
	return IconRelax($size, $fill, $iconTypeWeight);
}

function IconReleaseAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReleaseAlert {
	return IconReleaseAlert($size, $fill, $iconTypeWeight);
}

function IconRememberMe(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRememberMe {
	return IconRememberMe($size, $fill, $iconTypeWeight);
}

function IconReminder(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReminder {
	return IconReminder($size, $fill, $iconTypeWeight);
}

function IconRemoteGen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRemoteGen {
	return IconRemoteGen($size, $fill, $iconTypeWeight);
}

function IconRemove(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRemove {
	return IconRemove($size, $fill, $iconTypeWeight);
}

function IconRemoveDone(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRemoveDone {
	return IconRemoveDone($size, $fill, $iconTypeWeight);
}

function IconRemoveFromQueue(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRemoveFromQueue {
	return IconRemoveFromQueue($size, $fill, $iconTypeWeight);
}

function IconRemoveModerator(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRemoveModerator {
	return IconRemoveModerator($size, $fill, $iconTypeWeight);
}

function IconRemoveRoad(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRemoveRoad {
	return IconRemoveRoad($size, $fill, $iconTypeWeight);
}

function IconRemoveSelection(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRemoveSelection {
	return IconRemoveSelection($size, $fill, $iconTypeWeight);
}

function IconRemoveShoppingCart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRemoveShoppingCart {
	return IconRemoveShoppingCart($size, $fill, $iconTypeWeight);
}

function IconReopenWindow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReopenWindow {
	return IconReopenWindow($size, $fill, $iconTypeWeight);
}

function IconReorder(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReorder {
	return IconReorder($size, $fill, $iconTypeWeight);
}

function IconRepartition(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRepartition {
	return IconRepartition($size, $fill, $iconTypeWeight);
}

function IconRepeat(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRepeat {
	return IconRepeat($size, $fill, $iconTypeWeight);
}

function IconRepeatOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRepeatOn {
	return IconRepeatOn($size, $fill, $iconTypeWeight);
}

function IconRepeatOne(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRepeatOne {
	return IconRepeatOne($size, $fill, $iconTypeWeight);
}

function IconRepeatOneOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRepeatOneOn {
	return IconRepeatOneOn($size, $fill, $iconTypeWeight);
}

function IconReplaceAudio(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReplaceAudio {
	return IconReplaceAudio($size, $fill, $iconTypeWeight);
}

function IconReplaceImage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReplaceImage {
	return IconReplaceImage($size, $fill, $iconTypeWeight);
}

function IconReplaceVideo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReplaceVideo {
	return IconReplaceVideo($size, $fill, $iconTypeWeight);
}

function IconReplay(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReplay {
	return IconReplay($size, $fill, $iconTypeWeight);
}

function IconReplay10(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReplay10 {
	return IconReplay10($size, $fill, $iconTypeWeight);
}

function IconReplay30(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReplay30 {
	return IconReplay30($size, $fill, $iconTypeWeight);
}

function IconReplay5(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReplay5 {
	return IconReplay5($size, $fill, $iconTypeWeight);
}

function IconReply(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReply {
	return IconReply($size, $fill, $iconTypeWeight);
}

function IconReplyAll(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReplyAll {
	return IconReplyAll($size, $fill, $iconTypeWeight);
}

function IconReport(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReport {
	return IconReport($size, $fill, $iconTypeWeight);
}

function IconReportOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReportOff {
	return IconReportOff($size, $fill, $iconTypeWeight);
}

function IconRequestPage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRequestPage {
	return IconRequestPage($size, $fill, $iconTypeWeight);
}

function IconRequestQuote(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRequestQuote {
	return IconRequestQuote($size, $fill, $iconTypeWeight);
}

function IconResetBrightness(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconResetBrightness {
	return IconResetBrightness($size, $fill, $iconTypeWeight);
}

function IconResetFocus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconResetFocus {
	return IconResetFocus($size, $fill, $iconTypeWeight);
}

function IconResetImage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconResetImage {
	return IconResetImage($size, $fill, $iconTypeWeight);
}

function IconResetIso(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconResetIso {
	return IconResetIso($size, $fill, $iconTypeWeight);
}

function IconResetSettings(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconResetSettings {
	return IconResetSettings($size, $fill, $iconTypeWeight);
}

function IconResetShadow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconResetShadow {
	return IconResetShadow($size, $fill, $iconTypeWeight);
}

function IconResetShutterSpeed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconResetShutterSpeed {
	return IconResetShutterSpeed($size, $fill, $iconTypeWeight);
}

function IconResetTv(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconResetTv {
	return IconResetTv($size, $fill, $iconTypeWeight);
}

function IconResetWhiteBalance(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconResetWhiteBalance {
	return IconResetWhiteBalance($size, $fill, $iconTypeWeight);
}

function IconResetWrench(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconResetWrench {
	return IconResetWrench($size, $fill, $iconTypeWeight);
}

function IconResize(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconResize {
	return IconResize($size, $fill, $iconTypeWeight);
}

function IconRespiratoryRate(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRespiratoryRate {
	return IconRespiratoryRate($size, $fill, $iconTypeWeight);
}

function IconResponsiveLayout(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconResponsiveLayout {
	return IconResponsiveLayout($size, $fill, $iconTypeWeight);
}

function IconRestartAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRestartAlt {
	return IconRestartAlt($size, $fill, $iconTypeWeight);
}

function IconRestaurant(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRestaurant {
	return IconRestaurant($size, $fill, $iconTypeWeight);
}

function IconRestoreFromTrash(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRestoreFromTrash {
	return IconRestoreFromTrash($size, $fill, $iconTypeWeight);
}

function IconRestorePage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRestorePage {
	return IconRestorePage($size, $fill, $iconTypeWeight);
}

function IconResume(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconResume {
	return IconResume($size, $fill, $iconTypeWeight);
}

function IconReviews(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReviews {
	return IconReviews($size, $fill, $iconTypeWeight);
}

function IconRewardedAds(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRewardedAds {
	return IconRewardedAds($size, $fill, $iconTypeWeight);
}

function IconRheumatology(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRheumatology {
	return IconRheumatology($size, $fill, $iconTypeWeight);
}

function IconRibCage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRibCage {
	return IconRibCage($size, $fill, $iconTypeWeight);
}

function IconRiceBowl(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRiceBowl {
	return IconRiceBowl($size, $fill, $iconTypeWeight);
}

function IconRightClick(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRightClick {
	return IconRightClick($size, $fill, $iconTypeWeight);
}

function IconRightPanelClose(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRightPanelClose {
	return IconRightPanelClose($size, $fill, $iconTypeWeight);
}

function IconRightPanelOpen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRightPanelOpen {
	return IconRightPanelOpen($size, $fill, $iconTypeWeight);
}

function IconRingVolume(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRingVolume {
	return IconRingVolume($size, $fill, $iconTypeWeight);
}

function IconRipples(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRipples {
	return IconRipples($size, $fill, $iconTypeWeight);
}

function IconRMobiledata(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRMobiledata {
	return IconRMobiledata($size, $fill, $iconTypeWeight);
}

function IconRoad(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRoad {
	return IconRoad($size, $fill, $iconTypeWeight);
}

function IconRobot(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRobot {
	return IconRobot($size, $fill, $iconTypeWeight);
}

function IconRobot2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRobot2 {
	return IconRobot2($size, $fill, $iconTypeWeight);
}

function IconRocket(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRocket {
	return IconRocket($size, $fill, $iconTypeWeight);
}

function IconRocketLaunch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRocketLaunch {
	return IconRocketLaunch($size, $fill, $iconTypeWeight);
}

function IconRollerShades(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRollerShades {
	return IconRollerShades($size, $fill, $iconTypeWeight);
}

function IconRollerShadesClosed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRollerShadesClosed {
	return IconRollerShadesClosed($size, $fill, $iconTypeWeight);
}

function IconRollerSkating(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRollerSkating {
	return IconRollerSkating($size, $fill, $iconTypeWeight);
}

function IconRoofing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRoofing {
	return IconRoofing($size, $fill, $iconTypeWeight);
}

function IconRoomPreferences(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRoomPreferences {
	return IconRoomPreferences($size, $fill, $iconTypeWeight);
}

function IconRoomService(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRoomService {
	return IconRoomService($size, $fill, $iconTypeWeight);
}

function IconRotate90DegreesCcw(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRotate90DegreesCcw {
	return IconRotate90DegreesCcw($size, $fill, $iconTypeWeight);
}

function IconRotate90DegreesCw(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRotate90DegreesCw {
	return IconRotate90DegreesCw($size, $fill, $iconTypeWeight);
}

function IconRotateAuto(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRotateAuto {
	return IconRotateAuto($size, $fill, $iconTypeWeight);
}

function IconRotateLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRotateLeft {
	return IconRotateLeft($size, $fill, $iconTypeWeight);
}

function IconRotateRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRotateRight {
	return IconRotateRight($size, $fill, $iconTypeWeight);
}

function IconRoundaboutLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRoundaboutLeft {
	return IconRoundaboutLeft($size, $fill, $iconTypeWeight);
}

function IconRoundaboutRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRoundaboutRight {
	return IconRoundaboutRight($size, $fill, $iconTypeWeight);
}

function IconRoundedCorner(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRoundedCorner {
	return IconRoundedCorner($size, $fill, $iconTypeWeight);
}

function IconRoute(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRoute {
	return IconRoute($size, $fill, $iconTypeWeight);
}

function IconRouter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRouter {
	return IconRouter($size, $fill, $iconTypeWeight);
}

function IconRoutine(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRoutine {
	return IconRoutine($size, $fill, $iconTypeWeight);
}

function IconRowing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRowing {
	return IconRowing($size, $fill, $iconTypeWeight);
}

function IconRssFeed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRssFeed {
	return IconRssFeed($size, $fill, $iconTypeWeight);
}

function IconRsvp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRsvp {
	return IconRsvp($size, $fill, $iconTypeWeight);
}

function IconRtt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRtt {
	return IconRtt($size, $fill, $iconTypeWeight);
}

function IconRubric(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRubric {
	return IconRubric($size, $fill, $iconTypeWeight);
}

function IconRule(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRule {
	return IconRule($size, $fill, $iconTypeWeight);
}

function IconRuleFolder(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRuleFolder {
	return IconRuleFolder($size, $fill, $iconTypeWeight);
}

function IconRuleSettings(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRuleSettings {
	return IconRuleSettings($size, $fill, $iconTypeWeight);
}

function IconRunCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRunCircle {
	return IconRunCircle($size, $fill, $iconTypeWeight);
}

function IconRunningWithErrors(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRunningWithErrors {
	return IconRunningWithErrors($size, $fill, $iconTypeWeight);
}

function IconRvHookup(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRvHookup {
	return IconRvHookup($size, $fill, $iconTypeWeight);
}

function IconSafetyCheck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSafetyCheck {
	return IconSafetyCheck($size, $fill, $iconTypeWeight);
}

function IconSafetyCheckOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSafetyCheckOff {
	return IconSafetyCheckOff($size, $fill, $iconTypeWeight);
}

function IconSafetyDivider(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSafetyDivider {
	return IconSafetyDivider($size, $fill, $iconTypeWeight);
}

function IconSailing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSailing {
	return IconSailing($size, $fill, $iconTypeWeight);
}

function IconSalinity(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSalinity {
	return IconSalinity($size, $fill, $iconTypeWeight);
}

function IconSanitizer(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSanitizer {
	return IconSanitizer($size, $fill, $iconTypeWeight);
}

function IconSatellite(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSatellite {
	return IconSatellite($size, $fill, $iconTypeWeight);
}

function IconSatelliteAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSatelliteAlt {
	return IconSatelliteAlt($size, $fill, $iconTypeWeight);
}

function IconSauna(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSauna {
	return IconSauna($size, $fill, $iconTypeWeight);
}

function IconSave(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSave {
	return IconSave($size, $fill, $iconTypeWeight);
}

function IconSaveAs(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSaveAs {
	return IconSaveAs($size, $fill, $iconTypeWeight);
}

function IconSaveClock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSaveClock {
	return IconSaveClock($size, $fill, $iconTypeWeight);
}

function IconSavedSearch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSavedSearch {
	return IconSavedSearch($size, $fill, $iconTypeWeight);
}

function IconSavings(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSavings {
	return IconSavings($size, $fill, $iconTypeWeight);
}

function IconScale(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScale {
	return IconScale($size, $fill, $iconTypeWeight);
}

function IconScan(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScan {
	return IconScan($size, $fill, $iconTypeWeight);
}

function IconScanDelete(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScanDelete {
	return IconScanDelete($size, $fill, $iconTypeWeight);
}

function IconScanner(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScanner {
	return IconScanner($size, $fill, $iconTypeWeight);
}

function IconScatterPlot(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScatterPlot {
	return IconScatterPlot($size, $fill, $iconTypeWeight);
}

function IconScene(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScene {
	return IconScene($size, $fill, $iconTypeWeight);
}

function IconSchedule(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSchedule {
	return IconSchedule($size, $fill, $iconTypeWeight);
}

function IconScheduleSend(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScheduleSend {
	return IconScheduleSend($size, $fill, $iconTypeWeight);
}

function IconSchema(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSchema {
	return IconSchema($size, $fill, $iconTypeWeight);
}

function IconSchool(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSchool {
	return IconSchool($size, $fill, $iconTypeWeight);
}

function IconScience(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScience {
	return IconScience($size, $fill, $iconTypeWeight);
}

function IconScienceOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScienceOff {
	return IconScienceOff($size, $fill, $iconTypeWeight);
}

function IconScooter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScooter {
	return IconScooter($size, $fill, $iconTypeWeight);
}

function IconScore(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScore {
	return IconScore($size, $fill, $iconTypeWeight);
}

function IconScoreboard(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScoreboard {
	return IconScoreboard($size, $fill, $iconTypeWeight);
}

function IconScreenLockLandscape(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScreenLockLandscape {
	return IconScreenLockLandscape($size, $fill, $iconTypeWeight);
}

function IconScreenLockPortrait(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScreenLockPortrait {
	return IconScreenLockPortrait($size, $fill, $iconTypeWeight);
}

function IconScreenLockRotation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScreenLockRotation {
	return IconScreenLockRotation($size, $fill, $iconTypeWeight);
}

function IconScreenRecord(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScreenRecord {
	return IconScreenRecord($size, $fill, $iconTypeWeight);
}

function IconScreenRotation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScreenRotation {
	return IconScreenRotation($size, $fill, $iconTypeWeight);
}

function IconScreenRotationAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScreenRotationAlt {
	return IconScreenRotationAlt($size, $fill, $iconTypeWeight);
}

function IconScreenRotationUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScreenRotationUp {
	return IconScreenRotationUp($size, $fill, $iconTypeWeight);
}

function IconScreenSearchDesktop(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScreenSearchDesktop {
	return IconScreenSearchDesktop($size, $fill, $iconTypeWeight);
}

function IconScreenShare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScreenShare {
	return IconScreenShare($size, $fill, $iconTypeWeight);
}

function IconScreenshot(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScreenshot {
	return IconScreenshot($size, $fill, $iconTypeWeight);
}

function IconScreenshotFrame(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScreenshotFrame {
	return IconScreenshotFrame($size, $fill, $iconTypeWeight);
}

function IconScreenshotFrame2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScreenshotFrame2 {
	return IconScreenshotFrame2($size, $fill, $iconTypeWeight);
}

function IconScreenshotKeyboard(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScreenshotKeyboard {
	return IconScreenshotKeyboard($size, $fill, $iconTypeWeight);
}

function IconScreenshotMonitor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScreenshotMonitor {
	return IconScreenshotMonitor($size, $fill, $iconTypeWeight);
}

function IconScreenshotRegion(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScreenshotRegion {
	return IconScreenshotRegion($size, $fill, $iconTypeWeight);
}

function IconScreenshotTablet(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScreenshotTablet {
	return IconScreenshotTablet($size, $fill, $iconTypeWeight);
}

function IconScript(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScript {
	return IconScript($size, $fill, $iconTypeWeight);
}

function IconScrollableHeader(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScrollableHeader {
	return IconScrollableHeader($size, $fill, $iconTypeWeight);
}

function IconScubaDiving(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScubaDiving {
	return IconScubaDiving($size, $fill, $iconTypeWeight);
}

function IconSd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSd {
	return IconSd($size, $fill, $iconTypeWeight);
}

function IconSdCard(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSdCard {
	return IconSdCard($size, $fill, $iconTypeWeight);
}

function IconSdCardAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSdCardAlert {
	return IconSdCardAlert($size, $fill, $iconTypeWeight);
}

function IconSdk(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSdk {
	return IconSdk($size, $fill, $iconTypeWeight);
}

function IconSearch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSearch {
	return IconSearch($size, $fill, $iconTypeWeight);
}

function IconSearchActivity(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSearchActivity {
	return IconSearchActivity($size, $fill, $iconTypeWeight);
}

function IconSearchCheck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSearchCheck {
	return IconSearchCheck($size, $fill, $iconTypeWeight);
}

function IconSearchCheck2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSearchCheck2 {
	return IconSearchCheck2($size, $fill, $iconTypeWeight);
}

function IconSearchHandsFree(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSearchHandsFree {
	return IconSearchHandsFree($size, $fill, $iconTypeWeight);
}

function IconSearchInsights(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSearchInsights {
	return IconSearchInsights($size, $fill, $iconTypeWeight);
}

function IconSearchOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSearchOff {
	return IconSearchOff($size, $fill, $iconTypeWeight);
}

function IconSecurity(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSecurity {
	return IconSecurity($size, $fill, $iconTypeWeight);
}

function IconSecurityKey(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSecurityKey {
	return IconSecurityKey($size, $fill, $iconTypeWeight);
}

function IconSecurityUpdateGood(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSecurityUpdateGood {
	return IconSecurityUpdateGood($size, $fill, $iconTypeWeight);
}

function IconSecurityUpdateWarning(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSecurityUpdateWarning {
	return IconSecurityUpdateWarning($size, $fill, $iconTypeWeight);
}

function IconSegment(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSegment {
	return IconSegment($size, $fill, $iconTypeWeight);
}

function IconSelect(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSelect {
	return IconSelect($size, $fill, $iconTypeWeight);
}

function IconSelectAll(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSelectAll {
	return IconSelectAll($size, $fill, $iconTypeWeight);
}

function IconSelectCheckBox(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSelectCheckBox {
	return IconSelectCheckBox($size, $fill, $iconTypeWeight);
}

function IconSelectToSpeak(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSelectToSpeak {
	return IconSelectToSpeak($size, $fill, $iconTypeWeight);
}

function IconSelectWindow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSelectWindow {
	return IconSelectWindow($size, $fill, $iconTypeWeight);
}

function IconSelectWindow2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSelectWindow2 {
	return IconSelectWindow2($size, $fill, $iconTypeWeight);
}

function IconSelectWindowOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSelectWindowOff {
	return IconSelectWindowOff($size, $fill, $iconTypeWeight);
}

function IconSelfCare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSelfCare {
	return IconSelfCare($size, $fill, $iconTypeWeight);
}

function IconSelfImprovement(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSelfImprovement {
	return IconSelfImprovement($size, $fill, $iconTypeWeight);
}

function IconSell(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSell {
	return IconSell($size, $fill, $iconTypeWeight);
}

function IconSend(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSend {
	return IconSend($size, $fill, $iconTypeWeight);
}

function IconSendAndArchive(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSendAndArchive {
	return IconSendAndArchive($size, $fill, $iconTypeWeight);
}

function IconSendMoney(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSendMoney {
	return IconSendMoney($size, $fill, $iconTypeWeight);
}

function IconSendTimeExtension(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSendTimeExtension {
	return IconSendTimeExtension($size, $fill, $iconTypeWeight);
}

function IconSendToMobile(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSendToMobile {
	return IconSendToMobile($size, $fill, $iconTypeWeight);
}

function IconSensorDoor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSensorDoor {
	return IconSensorDoor($size, $fill, $iconTypeWeight);
}

function IconSensorOccupied(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSensorOccupied {
	return IconSensorOccupied($size, $fill, $iconTypeWeight);
}

function IconSensors(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSensors {
	return IconSensors($size, $fill, $iconTypeWeight);
}

function IconSensorsKrx(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSensorsKrx {
	return IconSensorsKrx($size, $fill, $iconTypeWeight);
}

function IconSensorsKrxOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSensorsKrxOff {
	return IconSensorsKrxOff($size, $fill, $iconTypeWeight);
}

function IconSensorsOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSensorsOff {
	return IconSensorsOff($size, $fill, $iconTypeWeight);
}

function IconSensorWindow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSensorWindow {
	return IconSensorWindow($size, $fill, $iconTypeWeight);
}

function IconSentimentCalm(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSentimentCalm {
	return IconSentimentCalm($size, $fill, $iconTypeWeight);
}

function IconSentimentContent(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSentimentContent {
	return IconSentimentContent($size, $fill, $iconTypeWeight);
}

function IconSentimentDissatisfied(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSentimentDissatisfied {
	return IconSentimentDissatisfied($size, $fill, $iconTypeWeight);
}

function IconSentimentExcited(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSentimentExcited {
	return IconSentimentExcited($size, $fill, $iconTypeWeight);
}

function IconSentimentExtremelyDissatisfied(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSentimentExtremelyDissatisfied {
	return IconSentimentExtremelyDissatisfied($size, $fill, $iconTypeWeight);
}

function IconSentimentFrustrated(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSentimentFrustrated {
	return IconSentimentFrustrated($size, $fill, $iconTypeWeight);
}

function IconSentimentNeutral(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSentimentNeutral {
	return IconSentimentNeutral($size, $fill, $iconTypeWeight);
}

function IconSentimentSad(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSentimentSad {
	return IconSentimentSad($size, $fill, $iconTypeWeight);
}

function IconSentimentSatisfied(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSentimentSatisfied {
	return IconSentimentSatisfied($size, $fill, $iconTypeWeight);
}

function IconSentimentStressed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSentimentStressed {
	return IconSentimentStressed($size, $fill, $iconTypeWeight);
}

function IconSentimentVeryDissatisfied(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSentimentVeryDissatisfied {
	return IconSentimentVeryDissatisfied($size, $fill, $iconTypeWeight);
}

function IconSentimentVerySatisfied(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSentimentVerySatisfied {
	return IconSentimentVerySatisfied($size, $fill, $iconTypeWeight);
}

function IconSentimentWorried(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSentimentWorried {
	return IconSentimentWorried($size, $fill, $iconTypeWeight);
}

function IconSerif(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSerif {
	return IconSerif($size, $fill, $iconTypeWeight);
}

function IconServerPerson(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconServerPerson {
	return IconServerPerson($size, $fill, $iconTypeWeight);
}

function IconServiceToolbox(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconServiceToolbox {
	return IconServiceToolbox($size, $fill, $iconTypeWeight);
}

function IconSetMeal(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSetMeal {
	return IconSetMeal($size, $fill, $iconTypeWeight);
}

function IconSettings(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettings {
	return IconSettings($size, $fill, $iconTypeWeight);
}

function IconSettingsAccessibility(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsAccessibility {
	return IconSettingsAccessibility($size, $fill, $iconTypeWeight);
}

function IconSettingsAccountBox(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsAccountBox {
	return IconSettingsAccountBox($size, $fill, $iconTypeWeight);
}

function IconSettingsAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsAlert {
	return IconSettingsAlert($size, $fill, $iconTypeWeight);
}

function IconSettingsApplications(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsApplications {
	return IconSettingsApplications($size, $fill, $iconTypeWeight);
}

function IconSettingsBackupRestore(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsBackupRestore {
	return IconSettingsBackupRestore($size, $fill, $iconTypeWeight);
}

function IconSettingsBluetooth(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsBluetooth {
	return IconSettingsBluetooth($size, $fill, $iconTypeWeight);
}

function IconSettingsBrightness(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsBrightness {
	return IconSettingsBrightness($size, $fill, $iconTypeWeight);
}

function IconSettingsBRoll(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsBRoll {
	return IconSettingsBRoll($size, $fill, $iconTypeWeight);
}

function IconSettingsCell(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsCell {
	return IconSettingsCell($size, $fill, $iconTypeWeight);
}

function IconSettingsCinematicBlur(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsCinematicBlur {
	return IconSettingsCinematicBlur($size, $fill, $iconTypeWeight);
}

function IconSettingsEthernet(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsEthernet {
	return IconSettingsEthernet($size, $fill, $iconTypeWeight);
}

function IconSettingsHeart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsHeart {
	return IconSettingsHeart($size, $fill, $iconTypeWeight);
}

function IconSettingsInputAntenna(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsInputAntenna {
	return IconSettingsInputAntenna($size, $fill, $iconTypeWeight);
}

function IconSettingsInputComponent(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsInputComponent {
	return IconSettingsInputComponent($size, $fill, $iconTypeWeight);
}

function IconSettingsInputHdmi(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsInputHdmi {
	return IconSettingsInputHdmi($size, $fill, $iconTypeWeight);
}

function IconSettingsInputSvideo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsInputSvideo {
	return IconSettingsInputSvideo($size, $fill, $iconTypeWeight);
}

function IconSettingsMotionMode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsMotionMode {
	return IconSettingsMotionMode($size, $fill, $iconTypeWeight);
}

function IconSettingsNightSight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsNightSight {
	return IconSettingsNightSight($size, $fill, $iconTypeWeight);
}

function IconSettingsOverscan(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsOverscan {
	return IconSettingsOverscan($size, $fill, $iconTypeWeight);
}

function IconSettingsPanorama(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsPanorama {
	return IconSettingsPanorama($size, $fill, $iconTypeWeight);
}

function IconSettingsPhone(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsPhone {
	return IconSettingsPhone($size, $fill, $iconTypeWeight);
}

function IconSettingsPhotoCamera(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsPhotoCamera {
	return IconSettingsPhotoCamera($size, $fill, $iconTypeWeight);
}

function IconSettingsPower(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsPower {
	return IconSettingsPower($size, $fill, $iconTypeWeight);
}

function IconSettingsRemote(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsRemote {
	return IconSettingsRemote($size, $fill, $iconTypeWeight);
}

function IconSettingsSlowMotion(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsSlowMotion {
	return IconSettingsSlowMotion($size, $fill, $iconTypeWeight);
}

function IconSettingsSystemDaydream(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsSystemDaydream {
	return IconSettingsSystemDaydream($size, $fill, $iconTypeWeight);
}

function IconSettingsTimelapse(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsTimelapse {
	return IconSettingsTimelapse($size, $fill, $iconTypeWeight);
}

function IconSettingsVideoCamera(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsVideoCamera {
	return IconSettingsVideoCamera($size, $fill, $iconTypeWeight);
}

function IconSettingsVoice(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsVoice {
	return IconSettingsVoice($size, $fill, $iconTypeWeight);
}

function IconSettopComponent(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettopComponent {
	return IconSettopComponent($size, $fill, $iconTypeWeight);
}

function IconSevereCold(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSevereCold {
	return IconSevereCold($size, $fill, $iconTypeWeight);
}

function IconShadow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShadow {
	return IconShadow($size, $fill, $iconTypeWeight);
}

function IconShadowAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShadowAdd {
	return IconShadowAdd($size, $fill, $iconTypeWeight);
}

function IconShadowMinus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShadowMinus {
	return IconShadowMinus($size, $fill, $iconTypeWeight);
}

function IconShapeLine(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShapeLine {
	return IconShapeLine($size, $fill, $iconTypeWeight);
}

function IconShapes(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShapes {
	return IconShapes($size, $fill, $iconTypeWeight);
}

function IconShare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShare {
	return IconShare($size, $fill, $iconTypeWeight);
}

function IconShareEta(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShareEta {
	return IconShareEta($size, $fill, $iconTypeWeight);
}

function IconShareLocation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShareLocation {
	return IconShareLocation($size, $fill, $iconTypeWeight);
}

function IconShareOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShareOff {
	return IconShareOff($size, $fill, $iconTypeWeight);
}

function IconShareReviews(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShareReviews {
	return IconShareReviews($size, $fill, $iconTypeWeight);
}

function IconShareWindows(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShareWindows {
	return IconShareWindows($size, $fill, $iconTypeWeight);
}

function IconSheetsRtl(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSheetsRtl {
	return IconSheetsRtl($size, $fill, $iconTypeWeight);
}

function IconShelfAutoHide(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShelfAutoHide {
	return IconShelfAutoHide($size, $fill, $iconTypeWeight);
}

function IconShelfPosition(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShelfPosition {
	return IconShelfPosition($size, $fill, $iconTypeWeight);
}

function IconShelves(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShelves {
	return IconShelves($size, $fill, $iconTypeWeight);
}

function IconShield(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShield {
	return IconShield($size, $fill, $iconTypeWeight);
}

function IconShieldLock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShieldLock {
	return IconShieldLock($size, $fill, $iconTypeWeight);
}

function IconShieldLocked(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShieldLocked {
	return IconShieldLocked($size, $fill, $iconTypeWeight);
}

function IconShieldMoon(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShieldMoon {
	return IconShieldMoon($size, $fill, $iconTypeWeight);
}

function IconShieldPerson(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShieldPerson {
	return IconShieldPerson($size, $fill, $iconTypeWeight);
}

function IconShieldQuestion(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShieldQuestion {
	return IconShieldQuestion($size, $fill, $iconTypeWeight);
}

function IconShieldWithHeart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShieldWithHeart {
	return IconShieldWithHeart($size, $fill, $iconTypeWeight);
}

function IconShieldWithHouse(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShieldWithHouse {
	return IconShieldWithHouse($size, $fill, $iconTypeWeight);
}

function IconShift(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShift {
	return IconShift($size, $fill, $iconTypeWeight);
}

function IconShiftLock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShiftLock {
	return IconShiftLock($size, $fill, $iconTypeWeight);
}

function IconShiftLockOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShiftLockOff {
	return IconShiftLockOff($size, $fill, $iconTypeWeight);
}

function IconShop(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShop {
	return IconShop($size, $fill, $iconTypeWeight);
}

function IconShoppingBag(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShoppingBag {
	return IconShoppingBag($size, $fill, $iconTypeWeight);
}

function IconShoppingBagSpeed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShoppingBagSpeed {
	return IconShoppingBagSpeed($size, $fill, $iconTypeWeight);
}

function IconShoppingBasket(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShoppingBasket {
	return IconShoppingBasket($size, $fill, $iconTypeWeight);
}

function IconShoppingCart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShoppingCart {
	return IconShoppingCart($size, $fill, $iconTypeWeight);
}

function IconShoppingCartCheckout(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShoppingCartCheckout {
	return IconShoppingCartCheckout($size, $fill, $iconTypeWeight);
}

function IconShoppingCartOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShoppingCartOff {
	return IconShoppingCartOff($size, $fill, $iconTypeWeight);
}

function IconShoppingmode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShoppingmode {
	return IconShoppingmode($size, $fill, $iconTypeWeight);
}

function IconShopTwo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShopTwo {
	return IconShopTwo($size, $fill, $iconTypeWeight);
}

function IconShortStay(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShortStay {
	return IconShortStay($size, $fill, $iconTypeWeight);
}

function IconShortText(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShortText {
	return IconShortText($size, $fill, $iconTypeWeight);
}

function IconShowChart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShowChart {
	return IconShowChart($size, $fill, $iconTypeWeight);
}

function IconShower(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShower {
	return IconShower($size, $fill, $iconTypeWeight);
}

function IconShuffle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShuffle {
	return IconShuffle($size, $fill, $iconTypeWeight);
}

function IconShuffleOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShuffleOn {
	return IconShuffleOn($size, $fill, $iconTypeWeight);
}

function IconShutterSpeed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShutterSpeed {
	return IconShutterSpeed($size, $fill, $iconTypeWeight);
}

function IconShutterSpeedAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShutterSpeedAdd {
	return IconShutterSpeedAdd($size, $fill, $iconTypeWeight);
}

function IconShutterSpeedMinus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShutterSpeedMinus {
	return IconShutterSpeedMinus($size, $fill, $iconTypeWeight);
}

function IconSick(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSick {
	return IconSick($size, $fill, $iconTypeWeight);
}

function IconSideNavigation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSideNavigation {
	return IconSideNavigation($size, $fill, $iconTypeWeight);
}

function IconSignalCellular0Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalCellular0Bar {
	return IconSignalCellular0Bar($size, $fill, $iconTypeWeight);
}

function IconSignalCellular1Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalCellular1Bar {
	return IconSignalCellular1Bar($size, $fill, $iconTypeWeight);
}

function IconSignalCellular2Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalCellular2Bar {
	return IconSignalCellular2Bar($size, $fill, $iconTypeWeight);
}

function IconSignalCellular3Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalCellular3Bar {
	return IconSignalCellular3Bar($size, $fill, $iconTypeWeight);
}

function IconSignalCellular4Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalCellular4Bar {
	return IconSignalCellular4Bar($size, $fill, $iconTypeWeight);
}

function IconSignalCellularAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalCellularAdd {
	return IconSignalCellularAdd($size, $fill, $iconTypeWeight);
}

function IconSignalCellularAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalCellularAlt {
	return IconSignalCellularAlt($size, $fill, $iconTypeWeight);
}

function IconSignalCellularAlt1Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalCellularAlt1Bar {
	return IconSignalCellularAlt1Bar($size, $fill, $iconTypeWeight);
}

function IconSignalCellularAlt2Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalCellularAlt2Bar {
	return IconSignalCellularAlt2Bar($size, $fill, $iconTypeWeight);
}

function IconSignalCellularConnectedNoInternet0Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalCellularConnectedNoInternet0Bar {
	return IconSignalCellularConnectedNoInternet0Bar($size, $fill, $iconTypeWeight);
}

function IconSignalCellularConnectedNoInternet4Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalCellularConnectedNoInternet4Bar {
	return IconSignalCellularConnectedNoInternet4Bar($size, $fill, $iconTypeWeight);
}

function IconSignalCellularNodata(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalCellularNodata {
	return IconSignalCellularNodata($size, $fill, $iconTypeWeight);
}

function IconSignalCellularNull(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalCellularNull {
	return IconSignalCellularNull($size, $fill, $iconTypeWeight);
}

function IconSignalCellularOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalCellularOff {
	return IconSignalCellularOff($size, $fill, $iconTypeWeight);
}

function IconSignalCellularPause(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalCellularPause {
	return IconSignalCellularPause($size, $fill, $iconTypeWeight);
}

function IconSignalDisconnected(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalDisconnected {
	return IconSignalDisconnected($size, $fill, $iconTypeWeight);
}

function IconSignalWifi0Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalWifi0Bar {
	return IconSignalWifi0Bar($size, $fill, $iconTypeWeight);
}

function IconSignalWifi4Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalWifi4Bar {
	return IconSignalWifi4Bar($size, $fill, $iconTypeWeight);
}

function IconSignalWifiBad(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalWifiBad {
	return IconSignalWifiBad($size, $fill, $iconTypeWeight);
}

function IconSignalWifiOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalWifiOff {
	return IconSignalWifiOff($size, $fill, $iconTypeWeight);
}

function IconSignalWifiStatusbarNotConnected(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalWifiStatusbarNotConnected {
	return IconSignalWifiStatusbarNotConnected($size, $fill, $iconTypeWeight);
}

function IconSignalWifiStatusbarNull(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalWifiStatusbarNull {
	return IconSignalWifiStatusbarNull($size, $fill, $iconTypeWeight);
}

function IconSignature(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignature {
	return IconSignature($size, $fill, $iconTypeWeight);
}

function IconSignLanguage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignLanguage {
	return IconSignLanguage($size, $fill, $iconTypeWeight);
}

function IconSignpost(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignpost {
	return IconSignpost($size, $fill, $iconTypeWeight);
}

function IconSimCard(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSimCard {
	return IconSimCard($size, $fill, $iconTypeWeight);
}

function IconSimCardDownload(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSimCardDownload {
	return IconSimCardDownload($size, $fill, $iconTypeWeight);
}

function IconSimulation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSimulation {
	return IconSimulation($size, $fill, $iconTypeWeight);
}

function IconSingleBed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSingleBed {
	return IconSingleBed($size, $fill, $iconTypeWeight);
}

function IconSip(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSip {
	return IconSip($size, $fill, $iconTypeWeight);
}

function IconSiren(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSiren {
	return IconSiren($size, $fill, $iconTypeWeight);
}

function IconSirenCheck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSirenCheck {
	return IconSirenCheck($size, $fill, $iconTypeWeight);
}

function IconSirenOpen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSirenOpen {
	return IconSirenOpen($size, $fill, $iconTypeWeight);
}

function IconSirenQuestion(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSirenQuestion {
	return IconSirenQuestion($size, $fill, $iconTypeWeight);
}

function IconSkateboarding(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSkateboarding {
	return IconSkateboarding($size, $fill, $iconTypeWeight);
}

function IconSkeleton(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSkeleton {
	return IconSkeleton($size, $fill, $iconTypeWeight);
}

function IconSkillet(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSkillet {
	return IconSkillet($size, $fill, $iconTypeWeight);
}

function IconSkilletCooktop(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSkilletCooktop {
	return IconSkilletCooktop($size, $fill, $iconTypeWeight);
}

function IconSkipNext(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSkipNext {
	return IconSkipNext($size, $fill, $iconTypeWeight);
}

function IconSkipPrevious(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSkipPrevious {
	return IconSkipPrevious($size, $fill, $iconTypeWeight);
}

function IconSkull(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSkull {
	return IconSkull($size, $fill, $iconTypeWeight);
}

function IconSkullList(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSkullList {
	return IconSkullList($size, $fill, $iconTypeWeight);
}

function IconSlabSerif(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSlabSerif {
	return IconSlabSerif($size, $fill, $iconTypeWeight);
}

function IconSledding(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSledding {
	return IconSledding($size, $fill, $iconTypeWeight);
}

function IconSleepScore(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSleepScore {
	return IconSleepScore($size, $fill, $iconTypeWeight);
}

function IconSlideLibrary(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSlideLibrary {
	return IconSlideLibrary($size, $fill, $iconTypeWeight);
}

function IconSliders(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSliders {
	return IconSliders($size, $fill, $iconTypeWeight);
}

function IconSlideshow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSlideshow {
	return IconSlideshow($size, $fill, $iconTypeWeight);
}

function IconSlowMotionVideo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSlowMotionVideo {
	return IconSlowMotionVideo($size, $fill, $iconTypeWeight);
}

function IconSmartCardReader(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSmartCardReader {
	return IconSmartCardReader($size, $fill, $iconTypeWeight);
}

function IconSmartCardReaderOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSmartCardReaderOff {
	return IconSmartCardReaderOff($size, $fill, $iconTypeWeight);
}

function IconSmartDisplay(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSmartDisplay {
	return IconSmartDisplay($size, $fill, $iconTypeWeight);
}

function IconSmartOutlet(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSmartOutlet {
	return IconSmartOutlet($size, $fill, $iconTypeWeight);
}

function IconSmartphone(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSmartphone {
	return IconSmartphone($size, $fill, $iconTypeWeight);
}

function IconSmartphoneCamera(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSmartphoneCamera {
	return IconSmartphoneCamera($size, $fill, $iconTypeWeight);
}

function IconSmartScreen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSmartScreen {
	return IconSmartScreen($size, $fill, $iconTypeWeight);
}

function IconSmartToy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSmartToy {
	return IconSmartToy($size, $fill, $iconTypeWeight);
}

function IconSmbShare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSmbShare {
	return IconSmbShare($size, $fill, $iconTypeWeight);
}

function IconSmokeFree(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSmokeFree {
	return IconSmokeFree($size, $fill, $iconTypeWeight);
}

function IconSmokingRooms(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSmokingRooms {
	return IconSmokingRooms($size, $fill, $iconTypeWeight);
}

function IconSms(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSms {
	return IconSms($size, $fill, $iconTypeWeight);
}

function IconSnippetFolder(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSnippetFolder {
	return IconSnippetFolder($size, $fill, $iconTypeWeight);
}

function IconSnooze(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSnooze {
	return IconSnooze($size, $fill, $iconTypeWeight);
}

function IconSnowboarding(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSnowboarding {
	return IconSnowboarding($size, $fill, $iconTypeWeight);
}

function IconSnowing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSnowing {
	return IconSnowing($size, $fill, $iconTypeWeight);
}

function IconSnowingHeavy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSnowingHeavy {
	return IconSnowingHeavy($size, $fill, $iconTypeWeight);
}

function IconSnowmobile(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSnowmobile {
	return IconSnowmobile($size, $fill, $iconTypeWeight);
}

function IconSnowshoeing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSnowshoeing {
	return IconSnowshoeing($size, $fill, $iconTypeWeight);
}

function IconSoap(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSoap {
	return IconSoap($size, $fill, $iconTypeWeight);
}

function IconSocialDistance(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSocialDistance {
	return IconSocialDistance($size, $fill, $iconTypeWeight);
}

function IconSocialLeaderboard(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSocialLeaderboard {
	return IconSocialLeaderboard($size, $fill, $iconTypeWeight);
}

function IconSolarPower(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSolarPower {
	return IconSolarPower($size, $fill, $iconTypeWeight);
}

function IconSort(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSort {
	return IconSort($size, $fill, $iconTypeWeight);
}

function IconSortByAlpha(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSortByAlpha {
	return IconSortByAlpha($size, $fill, $iconTypeWeight);
}

function IconSos(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSos {
	return IconSos($size, $fill, $iconTypeWeight);
}

function IconSoundDetectionDogBarking(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSoundDetectionDogBarking {
	return IconSoundDetectionDogBarking($size, $fill, $iconTypeWeight);
}

function IconSoundDetectionGlassBreak(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSoundDetectionGlassBreak {
	return IconSoundDetectionGlassBreak($size, $fill, $iconTypeWeight);
}

function IconSoundDetectionLoudSound(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSoundDetectionLoudSound {
	return IconSoundDetectionLoudSound($size, $fill, $iconTypeWeight);
}

function IconSoundSampler(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSoundSampler {
	return IconSoundSampler($size, $fill, $iconTypeWeight);
}

function IconSoupKitchen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSoupKitchen {
	return IconSoupKitchen($size, $fill, $iconTypeWeight);
}

function IconSourceEnvironment(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSourceEnvironment {
	return IconSourceEnvironment($size, $fill, $iconTypeWeight);
}

function IconSourceNotes(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSourceNotes {
	return IconSourceNotes($size, $fill, $iconTypeWeight);
}

function IconSouth(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSouth {
	return IconSouth($size, $fill, $iconTypeWeight);
}

function IconSouthAmerica(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSouthAmerica {
	return IconSouthAmerica($size, $fill, $iconTypeWeight);
}

function IconSouthEast(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSouthEast {
	return IconSouthEast($size, $fill, $iconTypeWeight);
}

function IconSouthWest(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSouthWest {
	return IconSouthWest($size, $fill, $iconTypeWeight);
}

function IconSpa(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpa {
	return IconSpa($size, $fill, $iconTypeWeight);
}

function IconSpaceBar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpaceBar {
	return IconSpaceBar($size, $fill, $iconTypeWeight);
}

function IconSpaceDashboard(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpaceDashboard {
	return IconSpaceDashboard($size, $fill, $iconTypeWeight);
}

function IconSpatialAudio(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpatialAudio {
	return IconSpatialAudio($size, $fill, $iconTypeWeight);
}

function IconSpatialAudioOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpatialAudioOff {
	return IconSpatialAudioOff($size, $fill, $iconTypeWeight);
}

function IconSpatialSpeaker(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpatialSpeaker {
	return IconSpatialSpeaker($size, $fill, $iconTypeWeight);
}

function IconSpatialTracking(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpatialTracking {
	return IconSpatialTracking($size, $fill, $iconTypeWeight);
}

function IconSpeaker(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeaker {
	return IconSpeaker($size, $fill, $iconTypeWeight);
}

function IconSpeakerGroup(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeakerGroup {
	return IconSpeakerGroup($size, $fill, $iconTypeWeight);
}

function IconSpeakerNotes(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeakerNotes {
	return IconSpeakerNotes($size, $fill, $iconTypeWeight);
}

function IconSpeakerNotesOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeakerNotesOff {
	return IconSpeakerNotesOff($size, $fill, $iconTypeWeight);
}

function IconSpeakerPhone(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeakerPhone {
	return IconSpeakerPhone($size, $fill, $iconTypeWeight);
}

function IconSpecialCharacter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpecialCharacter {
	return IconSpecialCharacter($size, $fill, $iconTypeWeight);
}

function IconSpecificGravity(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpecificGravity {
	return IconSpecificGravity($size, $fill, $iconTypeWeight);
}

function IconSpeechToText(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeechToText {
	return IconSpeechToText($size, $fill, $iconTypeWeight);
}

function IconSpeed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeed {
	return IconSpeed($size, $fill, $iconTypeWeight);
}

function IconSpeed025(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeed025 {
	return IconSpeed025($size, $fill, $iconTypeWeight);
}

function IconSpeed02x(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeed02x {
	return IconSpeed02x($size, $fill, $iconTypeWeight);
}

function IconSpeed05(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeed05 {
	return IconSpeed05($size, $fill, $iconTypeWeight);
}

function IconSpeed05x(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeed05x {
	return IconSpeed05x($size, $fill, $iconTypeWeight);
}

function IconSpeed075(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeed075 {
	return IconSpeed075($size, $fill, $iconTypeWeight);
}

function IconSpeed07x(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeed07x {
	return IconSpeed07x($size, $fill, $iconTypeWeight);
}

function IconSpeed12(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeed12 {
	return IconSpeed12($size, $fill, $iconTypeWeight);
}

function IconSpeed125(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeed125 {
	return IconSpeed125($size, $fill, $iconTypeWeight);
}

function IconSpeed12x(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeed12x {
	return IconSpeed12x($size, $fill, $iconTypeWeight);
}

function IconSpeed15(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeed15 {
	return IconSpeed15($size, $fill, $iconTypeWeight);
}

function IconSpeed15x(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeed15x {
	return IconSpeed15x($size, $fill, $iconTypeWeight);
}

function IconSpeed175(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeed175 {
	return IconSpeed175($size, $fill, $iconTypeWeight);
}

function IconSpeed17x(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeed17x {
	return IconSpeed17x($size, $fill, $iconTypeWeight);
}

function IconSpeed2x(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeed2x {
	return IconSpeed2x($size, $fill, $iconTypeWeight);
}

function IconSpeedCamera(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeedCamera {
	return IconSpeedCamera($size, $fill, $iconTypeWeight);
}

function IconSpellcheck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpellcheck {
	return IconSpellcheck($size, $fill, $iconTypeWeight);
}

function IconSplitScene(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSplitScene {
	return IconSplitScene($size, $fill, $iconTypeWeight);
}

function IconSplitscreen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSplitscreen {
	return IconSplitscreen($size, $fill, $iconTypeWeight);
}

function IconSplitscreenAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSplitscreenAdd {
	return IconSplitscreenAdd($size, $fill, $iconTypeWeight);
}

function IconSplitscreenBottom(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSplitscreenBottom {
	return IconSplitscreenBottom($size, $fill, $iconTypeWeight);
}

function IconSplitscreenLandscape(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSplitscreenLandscape {
	return IconSplitscreenLandscape($size, $fill, $iconTypeWeight);
}

function IconSplitscreenLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSplitscreenLeft {
	return IconSplitscreenLeft($size, $fill, $iconTypeWeight);
}

function IconSplitscreenPortrait(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSplitscreenPortrait {
	return IconSplitscreenPortrait($size, $fill, $iconTypeWeight);
}

function IconSplitscreenRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSplitscreenRight {
	return IconSplitscreenRight($size, $fill, $iconTypeWeight);
}

function IconSplitscreenTop(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSplitscreenTop {
	return IconSplitscreenTop($size, $fill, $iconTypeWeight);
}

function IconSplitscreenVerticalAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSplitscreenVerticalAdd {
	return IconSplitscreenVerticalAdd($size, $fill, $iconTypeWeight);
}

function IconSpo2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpo2 {
	return IconSpo2($size, $fill, $iconTypeWeight);
}

function IconSpoke(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpoke {
	return IconSpoke($size, $fill, $iconTypeWeight);
}

function IconSports(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSports {
	return IconSports($size, $fill, $iconTypeWeight);
}

function IconSportsAndOutdoors(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSportsAndOutdoors {
	return IconSportsAndOutdoors($size, $fill, $iconTypeWeight);
}

function IconSportsBar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSportsBar {
	return IconSportsBar($size, $fill, $iconTypeWeight);
}

function IconSportsBaseball(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSportsBaseball {
	return IconSportsBaseball($size, $fill, $iconTypeWeight);
}

function IconSportsBasketball(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSportsBasketball {
	return IconSportsBasketball($size, $fill, $iconTypeWeight);
}

function IconSportsCricket(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSportsCricket {
	return IconSportsCricket($size, $fill, $iconTypeWeight);
}

function IconSportsEsports(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSportsEsports {
	return IconSportsEsports($size, $fill, $iconTypeWeight);
}

function IconSportsFootball(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSportsFootball {
	return IconSportsFootball($size, $fill, $iconTypeWeight);
}

function IconSportsGolf(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSportsGolf {
	return IconSportsGolf($size, $fill, $iconTypeWeight);
}

function IconSportsGymnastics(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSportsGymnastics {
	return IconSportsGymnastics($size, $fill, $iconTypeWeight);
}

function IconSportsHandball(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSportsHandball {
	return IconSportsHandball($size, $fill, $iconTypeWeight);
}

function IconSportsHockey(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSportsHockey {
	return IconSportsHockey($size, $fill, $iconTypeWeight);
}

function IconSportsKabaddi(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSportsKabaddi {
	return IconSportsKabaddi($size, $fill, $iconTypeWeight);
}

function IconSportsMartialArts(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSportsMartialArts {
	return IconSportsMartialArts($size, $fill, $iconTypeWeight);
}

function IconSportsMma(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSportsMma {
	return IconSportsMma($size, $fill, $iconTypeWeight);
}

function IconSportsMotorsports(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSportsMotorsports {
	return IconSportsMotorsports($size, $fill, $iconTypeWeight);
}

function IconSportsRugby(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSportsRugby {
	return IconSportsRugby($size, $fill, $iconTypeWeight);
}

function IconSportsScore(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSportsScore {
	return IconSportsScore($size, $fill, $iconTypeWeight);
}

function IconSportsSoccer(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSportsSoccer {
	return IconSportsSoccer($size, $fill, $iconTypeWeight);
}

function IconSportsTennis(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSportsTennis {
	return IconSportsTennis($size, $fill, $iconTypeWeight);
}

function IconSportsVolleyball(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSportsVolleyball {
	return IconSportsVolleyball($size, $fill, $iconTypeWeight);
}

function IconSprinkler(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSprinkler {
	return IconSprinkler($size, $fill, $iconTypeWeight);
}

function IconSprint(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSprint {
	return IconSprint($size, $fill, $iconTypeWeight);
}

function IconSquare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSquare {
	return IconSquare($size, $fill, $iconTypeWeight);
}

function IconSquareDot(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSquareDot {
	return IconSquareDot($size, $fill, $iconTypeWeight);
}

function IconSquareFoot(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSquareFoot {
	return IconSquareFoot($size, $fill, $iconTypeWeight);
}

function IconSsidChart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSsidChart {
	return IconSsidChart($size, $fill, $iconTypeWeight);
}

function IconStack(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStack {
	return IconStack($size, $fill, $iconTypeWeight);
}

function IconStackedBarChart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStackedBarChart {
	return IconStackedBarChart($size, $fill, $iconTypeWeight);
}

function IconStackedEmail(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStackedEmail {
	return IconStackedEmail($size, $fill, $iconTypeWeight);
}

function IconStackedInbox(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStackedInbox {
	return IconStackedInbox($size, $fill, $iconTypeWeight);
}

function IconStackedLineChart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStackedLineChart {
	return IconStackedLineChart($size, $fill, $iconTypeWeight);
}

function IconStackHexagon(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStackHexagon {
	return IconStackHexagon($size, $fill, $iconTypeWeight);
}

function IconStackOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStackOff {
	return IconStackOff($size, $fill, $iconTypeWeight);
}

function IconStacks(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStacks {
	return IconStacks($size, $fill, $iconTypeWeight);
}

function IconStackStar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStackStar {
	return IconStackStar($size, $fill, $iconTypeWeight);
}

function IconStadiaController(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStadiaController {
	return IconStadiaController($size, $fill, $iconTypeWeight);
}

function IconStadium(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStadium {
	return IconStadium($size, $fill, $iconTypeWeight);
}

function IconStairs(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStairs {
	return IconStairs($size, $fill, $iconTypeWeight);
}

function IconStairs2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStairs2 {
	return IconStairs2($size, $fill, $iconTypeWeight);
}

function IconStar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStar {
	return IconStar($size, $fill, $iconTypeWeight);
}

function IconStarHalf(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStarHalf {
	return IconStarHalf($size, $fill, $iconTypeWeight);
}

function IconStarRate(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStarRate {
	return IconStarRate($size, $fill, $iconTypeWeight);
}

function IconStarRateHalf(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStarRateHalf {
	return IconStarRateHalf($size, $fill, $iconTypeWeight);
}

function IconStars(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStars {
	return IconStars($size, $fill, $iconTypeWeight);
}

function IconStart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStart {
	return IconStart($size, $fill, $iconTypeWeight);
}

function IconStat0(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStat0 {
	return IconStat0($size, $fill, $iconTypeWeight);
}

function IconStat1(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStat1 {
	return IconStat1($size, $fill, $iconTypeWeight);
}

function IconStat2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStat2 {
	return IconStat2($size, $fill, $iconTypeWeight);
}

function IconStat3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStat3 {
	return IconStat3($size, $fill, $iconTypeWeight);
}

function IconStatMinus1(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStatMinus1 {
	return IconStatMinus1($size, $fill, $iconTypeWeight);
}

function IconStatMinus2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStatMinus2 {
	return IconStatMinus2($size, $fill, $iconTypeWeight);
}

function IconStatMinus3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStatMinus3 {
	return IconStatMinus3($size, $fill, $iconTypeWeight);
}

function IconStayCurrentLandscape(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStayCurrentLandscape {
	return IconStayCurrentLandscape($size, $fill, $iconTypeWeight);
}

function IconStayCurrentPortrait(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStayCurrentPortrait {
	return IconStayCurrentPortrait($size, $fill, $iconTypeWeight);
}

function IconStayPrimaryLandscape(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStayPrimaryLandscape {
	return IconStayPrimaryLandscape($size, $fill, $iconTypeWeight);
}

function IconStayPrimaryPortrait(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStayPrimaryPortrait {
	return IconStayPrimaryPortrait($size, $fill, $iconTypeWeight);
}

function IconStep(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStep {
	return IconStep($size, $fill, $iconTypeWeight);
}

function IconStepInto(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStepInto {
	return IconStepInto($size, $fill, $iconTypeWeight);
}

function IconStepOut(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStepOut {
	return IconStepOut($size, $fill, $iconTypeWeight);
}

function IconStepOver(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStepOver {
	return IconStepOver($size, $fill, $iconTypeWeight);
}

function IconSteppers(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSteppers {
	return IconSteppers($size, $fill, $iconTypeWeight);
}

function IconSteps(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSteps {
	return IconSteps($size, $fill, $iconTypeWeight);
}

function IconStethoscope(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStethoscope {
	return IconStethoscope($size, $fill, $iconTypeWeight);
}

function IconStethoscopeArrow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStethoscopeArrow {
	return IconStethoscopeArrow($size, $fill, $iconTypeWeight);
}

function IconStethoscopeCheck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStethoscopeCheck {
	return IconStethoscopeCheck($size, $fill, $iconTypeWeight);
}

function IconStickyNote(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStickyNote {
	return IconStickyNote($size, $fill, $iconTypeWeight);
}

function IconStickyNote2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStickyNote2 {
	return IconStickyNote2($size, $fill, $iconTypeWeight);
}

function IconStockMedia(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStockMedia {
	return IconStockMedia($size, $fill, $iconTypeWeight);
}

function IconStockpot(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStockpot {
	return IconStockpot($size, $fill, $iconTypeWeight);
}

function IconStop(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStop {
	return IconStop($size, $fill, $iconTypeWeight);
}

function IconStopCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStopCircle {
	return IconStopCircle($size, $fill, $iconTypeWeight);
}

function IconStopScreenShare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStopScreenShare {
	return IconStopScreenShare($size, $fill, $iconTypeWeight);
}

function IconStorage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStorage {
	return IconStorage($size, $fill, $iconTypeWeight);
}

function IconStore(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStore {
	return IconStore($size, $fill, $iconTypeWeight);
}

function IconStorefront(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStorefront {
	return IconStorefront($size, $fill, $iconTypeWeight);
}

function IconStorm(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStorm {
	return IconStorm($size, $fill, $iconTypeWeight);
}

function IconStraight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStraight {
	return IconStraight($size, $fill, $iconTypeWeight);
}

function IconStraighten(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStraighten {
	return IconStraighten($size, $fill, $iconTypeWeight);
}

function IconStrategy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStrategy {
	return IconStrategy($size, $fill, $iconTypeWeight);
}

function IconStream(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStream {
	return IconStream($size, $fill, $iconTypeWeight);
}

function IconStreamApps(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStreamApps {
	return IconStreamApps($size, $fill, $iconTypeWeight);
}

function IconStreetview(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStreetview {
	return IconStreetview($size, $fill, $iconTypeWeight);
}

function IconStressManagement(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStressManagement {
	return IconStressManagement($size, $fill, $iconTypeWeight);
}

function IconStrikethroughS(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStrikethroughS {
	return IconStrikethroughS($size, $fill, $iconTypeWeight);
}

function IconStrokeFull(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStrokeFull {
	return IconStrokeFull($size, $fill, $iconTypeWeight);
}

function IconStrokePartial(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStrokePartial {
	return IconStrokePartial($size, $fill, $iconTypeWeight);
}

function IconStroller(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStroller {
	return IconStroller($size, $fill, $iconTypeWeight);
}

function IconStyle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStyle {
	return IconStyle($size, $fill, $iconTypeWeight);
}

function IconStyler(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStyler {
	return IconStyler($size, $fill, $iconTypeWeight);
}

function IconStylus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStylus {
	return IconStylus($size, $fill, $iconTypeWeight);
}

function IconStylusLaserPointer(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStylusLaserPointer {
	return IconStylusLaserPointer($size, $fill, $iconTypeWeight);
}

function IconStylusNote(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStylusNote {
	return IconStylusNote($size, $fill, $iconTypeWeight);
}

function IconSubdirectoryArrowLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSubdirectoryArrowLeft {
	return IconSubdirectoryArrowLeft($size, $fill, $iconTypeWeight);
}

function IconSubdirectoryArrowRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSubdirectoryArrowRight {
	return IconSubdirectoryArrowRight($size, $fill, $iconTypeWeight);
}

function IconSubheader(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSubheader {
	return IconSubheader($size, $fill, $iconTypeWeight);
}

function IconSubject(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSubject {
	return IconSubject($size, $fill, $iconTypeWeight);
}

function IconSubscript(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSubscript {
	return IconSubscript($size, $fill, $iconTypeWeight);
}

function IconSubscriptions(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSubscriptions {
	return IconSubscriptions($size, $fill, $iconTypeWeight);
}

function IconSubtitles(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSubtitles {
	return IconSubtitles($size, $fill, $iconTypeWeight);
}

function IconSubtitlesOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSubtitlesOff {
	return IconSubtitlesOff($size, $fill, $iconTypeWeight);
}

function IconSubway(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSubway {
	return IconSubway($size, $fill, $iconTypeWeight);
}

function IconSummarize(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSummarize {
	return IconSummarize($size, $fill, $iconTypeWeight);
}

function IconSunny(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSunny {
	return IconSunny($size, $fill, $iconTypeWeight);
}

function IconSunnySnowing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSunnySnowing {
	return IconSunnySnowing($size, $fill, $iconTypeWeight);
}

function IconSuperscript(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSuperscript {
	return IconSuperscript($size, $fill, $iconTypeWeight);
}

function IconSupervisedUserCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSupervisedUserCircle {
	return IconSupervisedUserCircle($size, $fill, $iconTypeWeight);
}

function IconSupervisedUserCircleOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSupervisedUserCircleOff {
	return IconSupervisedUserCircleOff($size, $fill, $iconTypeWeight);
}

function IconSupervisorAccount(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSupervisorAccount {
	return IconSupervisorAccount($size, $fill, $iconTypeWeight);
}

function IconSupport(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSupport {
	return IconSupport($size, $fill, $iconTypeWeight);
}

function IconSupportAgent(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSupportAgent {
	return IconSupportAgent($size, $fill, $iconTypeWeight);
}

function IconSurfing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSurfing {
	return IconSurfing($size, $fill, $iconTypeWeight);
}

function IconSurgical(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSurgical {
	return IconSurgical($size, $fill, $iconTypeWeight);
}

function IconSurroundSound(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSurroundSound {
	return IconSurroundSound($size, $fill, $iconTypeWeight);
}

function IconSwapCalls(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwapCalls {
	return IconSwapCalls($size, $fill, $iconTypeWeight);
}

function IconSwapDrivingApps(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwapDrivingApps {
	return IconSwapDrivingApps($size, $fill, $iconTypeWeight);
}

function IconSwapDrivingAppsWheel(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwapDrivingAppsWheel {
	return IconSwapDrivingAppsWheel($size, $fill, $iconTypeWeight);
}

function IconSwapHoriz(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwapHoriz {
	return IconSwapHoriz($size, $fill, $iconTypeWeight);
}

function IconSwapHorizontalCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwapHorizontalCircle {
	return IconSwapHorizontalCircle($size, $fill, $iconTypeWeight);
}

function IconSwapVert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwapVert {
	return IconSwapVert($size, $fill, $iconTypeWeight);
}

function IconSwapVerticalCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwapVerticalCircle {
	return IconSwapVerticalCircle($size, $fill, $iconTypeWeight);
}

function IconSweep(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSweep {
	return IconSweep($size, $fill, $iconTypeWeight);
}

function IconSwipe(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwipe {
	return IconSwipe($size, $fill, $iconTypeWeight);
}

function IconSwipeDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwipeDown {
	return IconSwipeDown($size, $fill, $iconTypeWeight);
}

function IconSwipeDownAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwipeDownAlt {
	return IconSwipeDownAlt($size, $fill, $iconTypeWeight);
}

function IconSwipeLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwipeLeft {
	return IconSwipeLeft($size, $fill, $iconTypeWeight);
}

function IconSwipeLeftAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwipeLeftAlt {
	return IconSwipeLeftAlt($size, $fill, $iconTypeWeight);
}

function IconSwipeRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwipeRight {
	return IconSwipeRight($size, $fill, $iconTypeWeight);
}

function IconSwipeRightAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwipeRightAlt {
	return IconSwipeRightAlt($size, $fill, $iconTypeWeight);
}

function IconSwipeUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwipeUp {
	return IconSwipeUp($size, $fill, $iconTypeWeight);
}

function IconSwipeUpAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwipeUpAlt {
	return IconSwipeUpAlt($size, $fill, $iconTypeWeight);
}

function IconSwipeVertical(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwipeVertical {
	return IconSwipeVertical($size, $fill, $iconTypeWeight);
}

function IconSwitch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwitch {
	return IconSwitch($size, $fill, $iconTypeWeight);
}

function IconSwitchAccess(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwitchAccess {
	return IconSwitchAccess($size, $fill, $iconTypeWeight);
}

function IconSwitchAccess2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwitchAccess2 {
	return IconSwitchAccess2($size, $fill, $iconTypeWeight);
}

function IconSwitchAccessShortcut(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwitchAccessShortcut {
	return IconSwitchAccessShortcut($size, $fill, $iconTypeWeight);
}

function IconSwitchAccessShortcutAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwitchAccessShortcutAdd {
	return IconSwitchAccessShortcutAdd($size, $fill, $iconTypeWeight);
}

function IconSwitchAccount(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwitchAccount {
	return IconSwitchAccount($size, $fill, $iconTypeWeight);
}

function IconSwitchCamera(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwitchCamera {
	return IconSwitchCamera($size, $fill, $iconTypeWeight);
}

function IconSwitches(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwitches {
	return IconSwitches($size, $fill, $iconTypeWeight);
}

function IconSwitchLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwitchLeft {
	return IconSwitchLeft($size, $fill, $iconTypeWeight);
}

function IconSwitchRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwitchRight {
	return IconSwitchRight($size, $fill, $iconTypeWeight);
}

function IconSwitchVideo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwitchVideo {
	return IconSwitchVideo($size, $fill, $iconTypeWeight);
}

function IconSwordRose(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwordRose {
	return IconSwordRose($size, $fill, $iconTypeWeight);
}

function IconSwords(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwords {
	return IconSwords($size, $fill, $iconTypeWeight);
}

function IconSymptoms(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSymptoms {
	return IconSymptoms($size, $fill, $iconTypeWeight);
}

function IconSynagogue(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSynagogue {
	return IconSynagogue($size, $fill, $iconTypeWeight);
}

function IconSync(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSync {
	return IconSync($size, $fill, $iconTypeWeight);
}

function IconSyncAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSyncAlt {
	return IconSyncAlt($size, $fill, $iconTypeWeight);
}

function IconSyncArrowDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSyncArrowDown {
	return IconSyncArrowDown($size, $fill, $iconTypeWeight);
}

function IconSyncArrowUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSyncArrowUp {
	return IconSyncArrowUp($size, $fill, $iconTypeWeight);
}

function IconSyncDesktop(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSyncDesktop {
	return IconSyncDesktop($size, $fill, $iconTypeWeight);
}

function IconSyncDisabled(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSyncDisabled {
	return IconSyncDisabled($size, $fill, $iconTypeWeight);
}

function IconSyncLock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSyncLock {
	return IconSyncLock($size, $fill, $iconTypeWeight);
}

function IconSyncProblem(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSyncProblem {
	return IconSyncProblem($size, $fill, $iconTypeWeight);
}

function IconSyncSavedLocally(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSyncSavedLocally {
	return IconSyncSavedLocally($size, $fill, $iconTypeWeight);
}

function IconSyringe(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSyringe {
	return IconSyringe($size, $fill, $iconTypeWeight);
}

function IconSystemUpdate(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSystemUpdate {
	return IconSystemUpdate($size, $fill, $iconTypeWeight);
}

function IconSystemUpdateAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSystemUpdateAlt {
	return IconSystemUpdateAlt($size, $fill, $iconTypeWeight);
}

function IconTab(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTab {
	return IconTab($size, $fill, $iconTypeWeight);
}

function IconTabClose(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTabClose {
	return IconTabClose($size, $fill, $iconTypeWeight);
}

function IconTabCloseInactive(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTabCloseInactive {
	return IconTabCloseInactive($size, $fill, $iconTypeWeight);
}

function IconTabCloseRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTabCloseRight {
	return IconTabCloseRight($size, $fill, $iconTypeWeight);
}

function IconTabDuplicate(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTabDuplicate {
	return IconTabDuplicate($size, $fill, $iconTypeWeight);
}

function IconTabGroup(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTabGroup {
	return IconTabGroup($size, $fill, $iconTypeWeight);
}

function IconTabInactive(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTabInactive {
	return IconTabInactive($size, $fill, $iconTypeWeight);
}

function IconTable(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTable {
	return IconTable($size, $fill, $iconTypeWeight);
}

function IconTableBar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTableBar {
	return IconTableBar($size, $fill, $iconTypeWeight);
}

function IconTableChart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTableChart {
	return IconTableChart($size, $fill, $iconTypeWeight);
}

function IconTableChartView(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTableChartView {
	return IconTableChartView($size, $fill, $iconTypeWeight);
}

function IconTableConvert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTableConvert {
	return IconTableConvert($size, $fill, $iconTypeWeight);
}

function IconTableEdit(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTableEdit {
	return IconTableEdit($size, $fill, $iconTypeWeight);
}

function IconTableEye(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTableEye {
	return IconTableEye($size, $fill, $iconTypeWeight);
}

function IconTableLamp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTableLamp {
	return IconTableLamp($size, $fill, $iconTypeWeight);
}

function IconTableRestaurant(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTableRestaurant {
	return IconTableRestaurant($size, $fill, $iconTypeWeight);
}

function IconTableRows(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTableRows {
	return IconTableRows($size, $fill, $iconTypeWeight);
}

function IconTableRowsNarrow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTableRowsNarrow {
	return IconTableRowsNarrow($size, $fill, $iconTypeWeight);
}

function IconTablet(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTablet {
	return IconTablet($size, $fill, $iconTypeWeight);
}

function IconTabletAndroid(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTabletAndroid {
	return IconTabletAndroid($size, $fill, $iconTypeWeight);
}

function IconTabletCamera(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTabletCamera {
	return IconTabletCamera($size, $fill, $iconTypeWeight);
}

function IconTabletMac(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTabletMac {
	return IconTabletMac($size, $fill, $iconTypeWeight);
}

function IconTableView(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTableView {
	return IconTableView($size, $fill, $iconTypeWeight);
}

function IconTabMove(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTabMove {
	return IconTabMove($size, $fill, $iconTypeWeight);
}

function IconTabNewRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTabNewRight {
	return IconTabNewRight($size, $fill, $iconTypeWeight);
}

function IconTabRecent(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTabRecent {
	return IconTabRecent($size, $fill, $iconTypeWeight);
}

function IconTabs(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTabs {
	return IconTabs($size, $fill, $iconTypeWeight);
}

function IconTabUnselected(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTabUnselected {
	return IconTabUnselected($size, $fill, $iconTypeWeight);
}

function IconTactic(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTactic {
	return IconTactic($size, $fill, $iconTypeWeight);
}

function IconTag(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTag {
	return IconTag($size, $fill, $iconTypeWeight);
}

function IconTakeoutDining(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTakeoutDining {
	return IconTakeoutDining($size, $fill, $iconTypeWeight);
}

function IconTamperDetectionOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTamperDetectionOff {
	return IconTamperDetectionOff($size, $fill, $iconTypeWeight);
}

function IconTamperDetectionOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTamperDetectionOn {
	return IconTamperDetectionOn($size, $fill, $iconTypeWeight);
}

function IconTapAndPlay(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTapAndPlay {
	return IconTapAndPlay($size, $fill, $iconTypeWeight);
}

function IconTapas(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTapas {
	return IconTapas($size, $fill, $iconTypeWeight);
}

function IconTarget(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTarget {
	return IconTarget($size, $fill, $iconTypeWeight);
}

function IconTask(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTask {
	return IconTask($size, $fill, $iconTypeWeight);
}

function IconTaskAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTaskAlt {
	return IconTaskAlt($size, $fill, $iconTypeWeight);
}

function IconTaunt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTaunt {
	return IconTaunt($size, $fill, $iconTypeWeight);
}

function IconTaxiAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTaxiAlert {
	return IconTaxiAlert($size, $fill, $iconTypeWeight);
}

function IconTeamDashboard(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTeamDashboard {
	return IconTeamDashboard($size, $fill, $iconTypeWeight);
}

function IconTempleBuddhist(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTempleBuddhist {
	return IconTempleBuddhist($size, $fill, $iconTypeWeight);
}

function IconTempleHindu(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTempleHindu {
	return IconTempleHindu($size, $fill, $iconTypeWeight);
}

function IconTempPreferencesEco(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTempPreferencesEco {
	return IconTempPreferencesEco($size, $fill, $iconTypeWeight);
}

function IconTenancy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTenancy {
	return IconTenancy($size, $fill, $iconTypeWeight);
}

function IconTerminal(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTerminal {
	return IconTerminal($size, $fill, $iconTypeWeight);
}

function IconTextAd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextAd {
	return IconTextAd($size, $fill, $iconTypeWeight);
}

function IconTextCompare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextCompare {
	return IconTextCompare($size, $fill, $iconTypeWeight);
}

function IconTextDecrease(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextDecrease {
	return IconTextDecrease($size, $fill, $iconTypeWeight);
}

function IconTextFields(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextFields {
	return IconTextFields($size, $fill, $iconTypeWeight);
}

function IconTextFieldsAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextFieldsAlt {
	return IconTextFieldsAlt($size, $fill, $iconTypeWeight);
}

function IconTextFormat(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextFormat {
	return IconTextFormat($size, $fill, $iconTypeWeight);
}

function IconTextIncrease(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextIncrease {
	return IconTextIncrease($size, $fill, $iconTypeWeight);
}

function IconTextRotateUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextRotateUp {
	return IconTextRotateUp($size, $fill, $iconTypeWeight);
}

function IconTextRotateVertical(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextRotateVertical {
	return IconTextRotateVertical($size, $fill, $iconTypeWeight);
}

function IconTextRotationAngledown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextRotationAngledown {
	return IconTextRotationAngledown($size, $fill, $iconTypeWeight);
}

function IconTextRotationAngleup(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextRotationAngleup {
	return IconTextRotationAngleup($size, $fill, $iconTypeWeight);
}

function IconTextRotationDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextRotationDown {
	return IconTextRotationDown($size, $fill, $iconTypeWeight);
}

function IconTextRotationNone(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextRotationNone {
	return IconTextRotationNone($size, $fill, $iconTypeWeight);
}

function IconTextSelectEnd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextSelectEnd {
	return IconTextSelectEnd($size, $fill, $iconTypeWeight);
}

function IconTextSelectJumpToBeginning(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextSelectJumpToBeginning {
	return IconTextSelectJumpToBeginning($size, $fill, $iconTypeWeight);
}

function IconTextSelectJumpToEnd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextSelectJumpToEnd {
	return IconTextSelectJumpToEnd($size, $fill, $iconTypeWeight);
}

function IconTextSelectMoveBackCharacter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextSelectMoveBackCharacter {
	return IconTextSelectMoveBackCharacter($size, $fill, $iconTypeWeight);
}

function IconTextSelectMoveBackWord(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextSelectMoveBackWord {
	return IconTextSelectMoveBackWord($size, $fill, $iconTypeWeight);
}

function IconTextSelectMoveDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextSelectMoveDown {
	return IconTextSelectMoveDown($size, $fill, $iconTypeWeight);
}

function IconTextSelectMoveForwardCharacter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextSelectMoveForwardCharacter {
	return IconTextSelectMoveForwardCharacter($size, $fill, $iconTypeWeight);
}

function IconTextSelectMoveForwardWord(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextSelectMoveForwardWord {
	return IconTextSelectMoveForwardWord($size, $fill, $iconTypeWeight);
}

function IconTextSelectMoveUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextSelectMoveUp {
	return IconTextSelectMoveUp($size, $fill, $iconTypeWeight);
}

function IconTextSelectStart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextSelectStart {
	return IconTextSelectStart($size, $fill, $iconTypeWeight);
}

function IconTextSnippet(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextSnippet {
	return IconTextSnippet($size, $fill, $iconTypeWeight);
}

function IconTextToSpeech(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextToSpeech {
	return IconTextToSpeech($size, $fill, $iconTypeWeight);
}

function IconTextUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextUp {
	return IconTextUp($size, $fill, $iconTypeWeight);
}

function IconTexture(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTexture {
	return IconTexture($size, $fill, $iconTypeWeight);
}

function IconTextureAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextureAdd {
	return IconTextureAdd($size, $fill, $iconTypeWeight);
}

function IconTextureMinus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextureMinus {
	return IconTextureMinus($size, $fill, $iconTypeWeight);
}

function IconTheaterComedy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTheaterComedy {
	return IconTheaterComedy($size, $fill, $iconTypeWeight);
}

function IconTheaters(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTheaters {
	return IconTheaters($size, $fill, $iconTypeWeight);
}

function IconThermometer(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconThermometer {
	return IconThermometer($size, $fill, $iconTypeWeight);
}

function IconThermometerAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconThermometerAdd {
	return IconThermometerAdd($size, $fill, $iconTypeWeight);
}

function IconThermometerGain(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconThermometerGain {
	return IconThermometerGain($size, $fill, $iconTypeWeight);
}

function IconThermometerLoss(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconThermometerLoss {
	return IconThermometerLoss($size, $fill, $iconTypeWeight);
}

function IconThermometerMinus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconThermometerMinus {
	return IconThermometerMinus($size, $fill, $iconTypeWeight);
}

function IconThermostat(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconThermostat {
	return IconThermostat($size, $fill, $iconTypeWeight);
}

function IconThermostatArrowDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconThermostatArrowDown {
	return IconThermostatArrowDown($size, $fill, $iconTypeWeight);
}

function IconThermostatArrowUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconThermostatArrowUp {
	return IconThermostatArrowUp($size, $fill, $iconTypeWeight);
}

function IconThermostatAuto(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconThermostatAuto {
	return IconThermostatAuto($size, $fill, $iconTypeWeight);
}

function IconThermostatCarbon(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconThermostatCarbon {
	return IconThermostatCarbon($size, $fill, $iconTypeWeight);
}

function IconThingsToDo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconThingsToDo {
	return IconThingsToDo($size, $fill, $iconTypeWeight);
}

function IconThreadUnread(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconThreadUnread {
	return IconThreadUnread($size, $fill, $iconTypeWeight);
}

function IconThreatIntelligence(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconThreatIntelligence {
	return IconThreatIntelligence($size, $fill, $iconTypeWeight);
}

function IconThumbDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconThumbDown {
	return IconThumbDown($size, $fill, $iconTypeWeight);
}

function IconThumbnailBar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconThumbnailBar {
	return IconThumbnailBar($size, $fill, $iconTypeWeight);
}

function IconThumbsUpDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconThumbsUpDown {
	return IconThumbsUpDown($size, $fill, $iconTypeWeight);
}

function IconThumbUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconThumbUp {
	return IconThumbUp($size, $fill, $iconTypeWeight);
}

function IconThunderstorm(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconThunderstorm {
	return IconThunderstorm($size, $fill, $iconTypeWeight);
}

function IconTibia(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTibia {
	return IconTibia($size, $fill, $iconTypeWeight);
}

function IconTibiaAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTibiaAlt {
	return IconTibiaAlt($size, $fill, $iconTypeWeight);
}

function IconTileLarge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTileLarge {
	return IconTileLarge($size, $fill, $iconTypeWeight);
}

function IconTileMedium(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTileMedium {
	return IconTileMedium($size, $fill, $iconTypeWeight);
}

function IconTileSmall(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTileSmall {
	return IconTileSmall($size, $fill, $iconTypeWeight);
}

function IconTimeAuto(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTimeAuto {
	return IconTimeAuto($size, $fill, $iconTypeWeight);
}

function IconTimelapse(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTimelapse {
	return IconTimelapse($size, $fill, $iconTypeWeight);
}

function IconTimeline(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTimeline {
	return IconTimeline($size, $fill, $iconTypeWeight);
}

function IconTimer(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTimer {
	return IconTimer($size, $fill, $iconTypeWeight);
}

function IconTimer10(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTimer10 {
	return IconTimer10($size, $fill, $iconTypeWeight);
}

function IconTimer10Alt1(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTimer10Alt1 {
	return IconTimer10Alt1($size, $fill, $iconTypeWeight);
}

function IconTimer10Select(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTimer10Select {
	return IconTimer10Select($size, $fill, $iconTypeWeight);
}

function IconTimer3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTimer3 {
	return IconTimer3($size, $fill, $iconTypeWeight);
}

function IconTimer3Alt1(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTimer3Alt1 {
	return IconTimer3Alt1($size, $fill, $iconTypeWeight);
}

function IconTimer3Select(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTimer3Select {
	return IconTimer3Select($size, $fill, $iconTypeWeight);
}

function IconTimer5(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTimer5 {
	return IconTimer5($size, $fill, $iconTypeWeight);
}

function IconTimer5Shutter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTimer5Shutter {
	return IconTimer5Shutter($size, $fill, $iconTypeWeight);
}

function IconTimerArrowDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTimerArrowDown {
	return IconTimerArrowDown($size, $fill, $iconTypeWeight);
}

function IconTimerArrowUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTimerArrowUp {
	return IconTimerArrowUp($size, $fill, $iconTypeWeight);
}

function IconTimerOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTimerOff {
	return IconTimerOff($size, $fill, $iconTypeWeight);
}

function IconTimerPause(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTimerPause {
	return IconTimerPause($size, $fill, $iconTypeWeight);
}

function IconTimerPlay(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTimerPlay {
	return IconTimerPlay($size, $fill, $iconTypeWeight);
}

function IconTireRepair(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTireRepair {
	return IconTireRepair($size, $fill, $iconTypeWeight);
}

function IconTitle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTitle {
	return IconTitle($size, $fill, $iconTypeWeight);
}

function IconTitlecase(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTitlecase {
	return IconTitlecase($size, $fill, $iconTypeWeight);
}

function IconToast(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconToast {
	return IconToast($size, $fill, $iconTypeWeight);
}

function IconToc(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconToc {
	return IconToc($size, $fill, $iconTypeWeight);
}

function IconToday(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconToday {
	return IconToday($size, $fill, $iconTypeWeight);
}

function IconToggleOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconToggleOff {
	return IconToggleOff($size, $fill, $iconTypeWeight);
}

function IconToggleOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconToggleOn {
	return IconToggleOn($size, $fill, $iconTypeWeight);
}

function IconToken(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconToken {
	return IconToken($size, $fill, $iconTypeWeight);
}

function IconToll(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconToll {
	return IconToll($size, $fill, $iconTypeWeight);
}

function IconTonality(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTonality {
	return IconTonality($size, $fill, $iconTypeWeight);
}

function IconToolbar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconToolbar {
	return IconToolbar($size, $fill, $iconTypeWeight);
}

function IconToolsFlatHead(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconToolsFlatHead {
	return IconToolsFlatHead($size, $fill, $iconTypeWeight);
}

function IconToolsInstallationKit(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconToolsInstallationKit {
	return IconToolsInstallationKit($size, $fill, $iconTypeWeight);
}

function IconToolsLadder(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconToolsLadder {
	return IconToolsLadder($size, $fill, $iconTypeWeight);
}

function IconToolsLevel(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconToolsLevel {
	return IconToolsLevel($size, $fill, $iconTypeWeight);
}

function IconToolsPhillips(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconToolsPhillips {
	return IconToolsPhillips($size, $fill, $iconTypeWeight);
}

function IconToolsPliersWireStripper(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconToolsPliersWireStripper {
	return IconToolsPliersWireStripper($size, $fill, $iconTypeWeight);
}

function IconToolsPowerDrill(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconToolsPowerDrill {
	return IconToolsPowerDrill($size, $fill, $iconTypeWeight);
}

function IconTooltip(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTooltip {
	return IconTooltip($size, $fill, $iconTypeWeight);
}

function IconTooltip2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTooltip2 {
	return IconTooltip2($size, $fill, $iconTypeWeight);
}

function IconTopic(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTopic {
	return IconTopic($size, $fill, $iconTypeWeight);
}

function IconTopPanelClose(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTopPanelClose {
	return IconTopPanelClose($size, $fill, $iconTypeWeight);
}

function IconTopPanelOpen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTopPanelOpen {
	return IconTopPanelOpen($size, $fill, $iconTypeWeight);
}

function IconTornado(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTornado {
	return IconTornado($size, $fill, $iconTypeWeight);
}

function IconTotalDissolvedSolids(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTotalDissolvedSolids {
	return IconTotalDissolvedSolids($size, $fill, $iconTypeWeight);
}

function IconTouchApp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTouchApp {
	return IconTouchApp($size, $fill, $iconTypeWeight);
}

function IconTouchDouble(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTouchDouble {
	return IconTouchDouble($size, $fill, $iconTypeWeight);
}

function IconTouchLong(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTouchLong {
	return IconTouchLong($size, $fill, $iconTypeWeight);
}

function IconTouchpadMouse(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTouchpadMouse {
	return IconTouchpadMouse($size, $fill, $iconTypeWeight);
}

function IconTouchpadMouseOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTouchpadMouseOff {
	return IconTouchpadMouseOff($size, $fill, $iconTypeWeight);
}

function IconTouchTriple(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTouchTriple {
	return IconTouchTriple($size, $fill, $iconTypeWeight);
}

function IconTour(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTour {
	return IconTour($size, $fill, $iconTypeWeight);
}

function IconToys(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconToys {
	return IconToys($size, $fill, $iconTypeWeight);
}

function IconToysAndGames(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconToysAndGames {
	return IconToysAndGames($size, $fill, $iconTypeWeight);
}

function IconToysFan(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconToysFan {
	return IconToysFan($size, $fill, $iconTypeWeight);
}

function IconTrackChanges(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTrackChanges {
	return IconTrackChanges($size, $fill, $iconTypeWeight);
}

function IconTrackpadInput(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTrackpadInput {
	return IconTrackpadInput($size, $fill, $iconTypeWeight);
}

function IconTrackpadInput2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTrackpadInput2 {
	return IconTrackpadInput2($size, $fill, $iconTypeWeight);
}

function IconTrackpadInput3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTrackpadInput3 {
	return IconTrackpadInput3($size, $fill, $iconTypeWeight);
}

function IconTraffic(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTraffic {
	return IconTraffic($size, $fill, $iconTypeWeight);
}

function IconTrafficJam(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTrafficJam {
	return IconTrafficJam($size, $fill, $iconTypeWeight);
}

function IconTrailLength(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTrailLength {
	return IconTrailLength($size, $fill, $iconTypeWeight);
}

function IconTrailLengthMedium(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTrailLengthMedium {
	return IconTrailLengthMedium($size, $fill, $iconTypeWeight);
}

function IconTrailLengthShort(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTrailLengthShort {
	return IconTrailLengthShort($size, $fill, $iconTypeWeight);
}

function IconTrain(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTrain {
	return IconTrain($size, $fill, $iconTypeWeight);
}

function IconTram(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTram {
	return IconTram($size, $fill, $iconTypeWeight);
}

function IconTranscribe(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTranscribe {
	return IconTranscribe($size, $fill, $iconTypeWeight);
}

function IconTransferWithinAStation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTransferWithinAStation {
	return IconTransferWithinAStation($size, $fill, $iconTypeWeight);
}

function IconTransform(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTransform {
	return IconTransform($size, $fill, $iconTypeWeight);
}

function IconTransgender(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTransgender {
	return IconTransgender($size, $fill, $iconTypeWeight);
}

function IconTransitEnterexit(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTransitEnterexit {
	return IconTransitEnterexit($size, $fill, $iconTypeWeight);
}

function IconTransitionChop(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTransitionChop {
	return IconTransitionChop($size, $fill, $iconTypeWeight);
}

function IconTransitionDissolve(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTransitionDissolve {
	return IconTransitionDissolve($size, $fill, $iconTypeWeight);
}

function IconTransitionFade(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTransitionFade {
	return IconTransitionFade($size, $fill, $iconTypeWeight);
}

function IconTransitionPush(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTransitionPush {
	return IconTransitionPush($size, $fill, $iconTypeWeight);
}

function IconTransitionSlide(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTransitionSlide {
	return IconTransitionSlide($size, $fill, $iconTypeWeight);
}

function IconTransitTicket(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTransitTicket {
	return IconTransitTicket($size, $fill, $iconTypeWeight);
}

function IconTranslate(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTranslate {
	return IconTranslate($size, $fill, $iconTypeWeight);
}

function IconTransportation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTransportation {
	return IconTransportation($size, $fill, $iconTypeWeight);
}

function IconTravel(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTravel {
	return IconTravel($size, $fill, $iconTypeWeight);
}

function IconTravelExplore(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTravelExplore {
	return IconTravelExplore($size, $fill, $iconTypeWeight);
}

function IconTravelLuggageAndBags(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTravelLuggageAndBags {
	return IconTravelLuggageAndBags($size, $fill, $iconTypeWeight);
}

function IconTrendingDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTrendingDown {
	return IconTrendingDown($size, $fill, $iconTypeWeight);
}

function IconTrendingFlat(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTrendingFlat {
	return IconTrendingFlat($size, $fill, $iconTypeWeight);
}

function IconTrendingUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTrendingUp {
	return IconTrendingUp($size, $fill, $iconTypeWeight);
}

function IconTrip(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTrip {
	return IconTrip($size, $fill, $iconTypeWeight);
}

function IconTripOrigin(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTripOrigin {
	return IconTripOrigin($size, $fill, $iconTypeWeight);
}

function IconTrolley(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTrolley {
	return IconTrolley($size, $fill, $iconTypeWeight);
}

function IconTrolleyCableCar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTrolleyCableCar {
	return IconTrolleyCableCar($size, $fill, $iconTypeWeight);
}

function IconTrophy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTrophy {
	return IconTrophy($size, $fill, $iconTypeWeight);
}

function IconTroubleshoot(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTroubleshoot {
	return IconTroubleshoot($size, $fill, $iconTypeWeight);
}

function IconTsunami(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTsunami {
	return IconTsunami($size, $fill, $iconTypeWeight);
}

function IconTsv(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTsv {
	return IconTsv($size, $fill, $iconTypeWeight);
}

function IconTty(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTty {
	return IconTty($size, $fill, $iconTypeWeight);
}

function IconTune(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTune {
	return IconTune($size, $fill, $iconTypeWeight);
}

function IconTurnLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTurnLeft {
	return IconTurnLeft($size, $fill, $iconTypeWeight);
}

function IconTurnRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTurnRight {
	return IconTurnRight($size, $fill, $iconTypeWeight);
}

function IconTurnSharpLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTurnSharpLeft {
	return IconTurnSharpLeft($size, $fill, $iconTypeWeight);
}

function IconTurnSharpRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTurnSharpRight {
	return IconTurnSharpRight($size, $fill, $iconTypeWeight);
}

function IconTurnSlightLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTurnSlightLeft {
	return IconTurnSlightLeft($size, $fill, $iconTypeWeight);
}

function IconTurnSlightRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTurnSlightRight {
	return IconTurnSlightRight($size, $fill, $iconTypeWeight);
}

function IconTv(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTv {
	return IconTv($size, $fill, $iconTypeWeight);
}

function IconTvDisplays(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTvDisplays {
	return IconTvDisplays($size, $fill, $iconTypeWeight);
}

function IconTvGen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTvGen {
	return IconTvGen($size, $fill, $iconTypeWeight);
}

function IconTvGuide(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTvGuide {
	return IconTvGuide($size, $fill, $iconTypeWeight);
}

function IconTvNext(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTvNext {
	return IconTvNext($size, $fill, $iconTypeWeight);
}

function IconTvOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTvOff {
	return IconTvOff($size, $fill, $iconTypeWeight);
}

function IconTvOptionsEditChannels(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTvOptionsEditChannels {
	return IconTvOptionsEditChannels($size, $fill, $iconTypeWeight);
}

function IconTvOptionsInputSettings(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTvOptionsInputSettings {
	return IconTvOptionsInputSettings($size, $fill, $iconTypeWeight);
}

function IconTvRemote(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTvRemote {
	return IconTvRemote($size, $fill, $iconTypeWeight);
}

function IconTvSignin(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTvSignin {
	return IconTvSignin($size, $fill, $iconTypeWeight);
}

function IconTvWithAssistant(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTvWithAssistant {
	return IconTvWithAssistant($size, $fill, $iconTypeWeight);
}

function IconTwoPager(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTwoPager {
	return IconTwoPager($size, $fill, $iconTypeWeight);
}

function IconTwoPagerStore(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTwoPagerStore {
	return IconTwoPagerStore($size, $fill, $iconTypeWeight);
}

function IconTwoWheeler(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTwoWheeler {
	return IconTwoWheeler($size, $fill, $iconTypeWeight);
}

function IconTypeSpecimen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTypeSpecimen {
	return IconTypeSpecimen($size, $fill, $iconTypeWeight);
}

function IconUlnaRadius(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUlnaRadius {
	return IconUlnaRadius($size, $fill, $iconTypeWeight);
}

function IconUlnaRadiusAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUlnaRadiusAlt {
	return IconUlnaRadiusAlt($size, $fill, $iconTypeWeight);
}

function IconUmbrella(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUmbrella {
	return IconUmbrella($size, $fill, $iconTypeWeight);
}

function IconUnarchive(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUnarchive {
	return IconUnarchive($size, $fill, $iconTypeWeight);
}

function IconUndo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUndo {
	return IconUndo($size, $fill, $iconTypeWeight);
}

function IconUnfoldLess(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUnfoldLess {
	return IconUnfoldLess($size, $fill, $iconTypeWeight);
}

function IconUnfoldLessDouble(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUnfoldLessDouble {
	return IconUnfoldLessDouble($size, $fill, $iconTypeWeight);
}

function IconUnfoldMore(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUnfoldMore {
	return IconUnfoldMore($size, $fill, $iconTypeWeight);
}

function IconUnfoldMoreDouble(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUnfoldMoreDouble {
	return IconUnfoldMoreDouble($size, $fill, $iconTypeWeight);
}

function IconUngroup(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUngroup {
	return IconUngroup($size, $fill, $iconTypeWeight);
}

function IconUniversalCurrency(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUniversalCurrency {
	return IconUniversalCurrency($size, $fill, $iconTypeWeight);
}

function IconUniversalCurrencyAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUniversalCurrencyAlt {
	return IconUniversalCurrencyAlt($size, $fill, $iconTypeWeight);
}

function IconUniversalLocal(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUniversalLocal {
	return IconUniversalLocal($size, $fill, $iconTypeWeight);
}

function IconUnknown2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUnknown2 {
	return IconUnknown2($size, $fill, $iconTypeWeight);
}

function IconUnknown5(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUnknown5 {
	return IconUnknown5($size, $fill, $iconTypeWeight);
}

function IconUnknown7(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUnknown7 {
	return IconUnknown7($size, $fill, $iconTypeWeight);
}

function IconUnknownDocument(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUnknownDocument {
	return IconUnknownDocument($size, $fill, $iconTypeWeight);
}

function IconUnknownMed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUnknownMed {
	return IconUnknownMed($size, $fill, $iconTypeWeight);
}

function IconUnlicense(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUnlicense {
	return IconUnlicense($size, $fill, $iconTypeWeight);
}

function IconUnpavedRoad(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUnpavedRoad {
	return IconUnpavedRoad($size, $fill, $iconTypeWeight);
}

function IconUnpublished(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUnpublished {
	return IconUnpublished($size, $fill, $iconTypeWeight);
}

function IconUnsubscribe(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUnsubscribe {
	return IconUnsubscribe($size, $fill, $iconTypeWeight);
}

function IconUpcoming(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUpcoming {
	return IconUpcoming($size, $fill, $iconTypeWeight);
}

function IconUpdate(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUpdate {
	return IconUpdate($size, $fill, $iconTypeWeight);
}

function IconUpdateDisabled(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUpdateDisabled {
	return IconUpdateDisabled($size, $fill, $iconTypeWeight);
}

function IconUpgrade(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUpgrade {
	return IconUpgrade($size, $fill, $iconTypeWeight);
}

function IconUpiPay(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUpiPay {
	return IconUpiPay($size, $fill, $iconTypeWeight);
}

function IconUpload(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUpload {
	return IconUpload($size, $fill, $iconTypeWeight);
}

function IconUpload2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUpload2 {
	return IconUpload2($size, $fill, $iconTypeWeight);
}

function IconUploadFile(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUploadFile {
	return IconUploadFile($size, $fill, $iconTypeWeight);
}

function IconUppercase(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUppercase {
	return IconUppercase($size, $fill, $iconTypeWeight);
}

function IconUrology(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUrology {
	return IconUrology($size, $fill, $iconTypeWeight);
}

function IconUsb(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUsb {
	return IconUsb($size, $fill, $iconTypeWeight);
}

function IconUsbOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUsbOff {
	return IconUsbOff($size, $fill, $iconTypeWeight);
}

function IconUserAttributes(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUserAttributes {
	return IconUserAttributes($size, $fill, $iconTypeWeight);
}

function IconUTurnLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUTurnLeft {
	return IconUTurnLeft($size, $fill, $iconTypeWeight);
}

function IconUTurnRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUTurnRight {
	return IconUTurnRight($size, $fill, $iconTypeWeight);
}

function IconVaccines(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVaccines {
	return IconVaccines($size, $fill, $iconTypeWeight);
}

function IconVacuum(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVacuum {
	return IconVacuum($size, $fill, $iconTypeWeight);
}

function IconValve(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconValve {
	return IconValve($size, $fill, $iconTypeWeight);
}

function IconVapeFree(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVapeFree {
	return IconVapeFree($size, $fill, $iconTypeWeight);
}

function IconVapingRooms(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVapingRooms {
	return IconVapingRooms($size, $fill, $iconTypeWeight);
}

function IconVariableAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVariableAdd {
	return IconVariableAdd($size, $fill, $iconTypeWeight);
}

function IconVariableInsert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVariableInsert {
	return IconVariableInsert($size, $fill, $iconTypeWeight);
}

function IconVariableRemove(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVariableRemove {
	return IconVariableRemove($size, $fill, $iconTypeWeight);
}

function IconVariables(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVariables {
	return IconVariables($size, $fill, $iconTypeWeight);
}

function IconVentilator(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVentilator {
	return IconVentilator($size, $fill, $iconTypeWeight);
}

function IconVerified(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVerified {
	return IconVerified($size, $fill, $iconTypeWeight);
}

function IconVerifiedUser(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVerifiedUser {
	return IconVerifiedUser($size, $fill, $iconTypeWeight);
}

function IconVerticalAlignBottom(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVerticalAlignBottom {
	return IconVerticalAlignBottom($size, $fill, $iconTypeWeight);
}

function IconVerticalAlignCenter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVerticalAlignCenter {
	return IconVerticalAlignCenter($size, $fill, $iconTypeWeight);
}

function IconVerticalAlignTop(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVerticalAlignTop {
	return IconVerticalAlignTop($size, $fill, $iconTypeWeight);
}

function IconVerticalDistribute(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVerticalDistribute {
	return IconVerticalDistribute($size, $fill, $iconTypeWeight);
}

function IconVerticalShades(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVerticalShades {
	return IconVerticalShades($size, $fill, $iconTypeWeight);
}

function IconVerticalShadesClosed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVerticalShadesClosed {
	return IconVerticalShadesClosed($size, $fill, $iconTypeWeight);
}

function IconVerticalSplit(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVerticalSplit {
	return IconVerticalSplit($size, $fill, $iconTypeWeight);
}

function IconVibration(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVibration {
	return IconVibration($size, $fill, $iconTypeWeight);
}

function IconVideoCall(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVideoCall {
	return IconVideoCall($size, $fill, $iconTypeWeight);
}

function IconVideocam(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVideocam {
	return IconVideocam($size, $fill, $iconTypeWeight);
}

function IconVideocamAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVideocamAlert {
	return IconVideocamAlert($size, $fill, $iconTypeWeight);
}

function IconVideoCameraBack(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVideoCameraBack {
	return IconVideoCameraBack($size, $fill, $iconTypeWeight);
}

function IconVideoCameraBackAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVideoCameraBackAdd {
	return IconVideoCameraBackAdd($size, $fill, $iconTypeWeight);
}

function IconVideoCameraFront(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVideoCameraFront {
	return IconVideoCameraFront($size, $fill, $iconTypeWeight);
}

function IconVideoCameraFrontOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVideoCameraFrontOff {
	return IconVideoCameraFrontOff($size, $fill, $iconTypeWeight);
}

function IconVideocamOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVideocamOff {
	return IconVideocamOff($size, $fill, $iconTypeWeight);
}

function IconVideoChat(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVideoChat {
	return IconVideoChat($size, $fill, $iconTypeWeight);
}

function IconVideoFile(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVideoFile {
	return IconVideoFile($size, $fill, $iconTypeWeight);
}

function IconVideogameAsset(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVideogameAsset {
	return IconVideogameAsset($size, $fill, $iconTypeWeight);
}

function IconVideogameAssetOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVideogameAssetOff {
	return IconVideogameAssetOff($size, $fill, $iconTypeWeight);
}

function IconVideoLabel(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVideoLabel {
	return IconVideoLabel($size, $fill, $iconTypeWeight);
}

function IconVideoLibrary(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVideoLibrary {
	return IconVideoLibrary($size, $fill, $iconTypeWeight);
}

function IconVideoSearch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVideoSearch {
	return IconVideoSearch($size, $fill, $iconTypeWeight);
}

function IconVideoSettings(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVideoSettings {
	return IconVideoSettings($size, $fill, $iconTypeWeight);
}

function IconVideoStable(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVideoStable {
	return IconVideoStable($size, $fill, $iconTypeWeight);
}

function IconViewAgenda(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewAgenda {
	return IconViewAgenda($size, $fill, $iconTypeWeight);
}

function IconViewApps(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewApps {
	return IconViewApps($size, $fill, $iconTypeWeight);
}

function IconViewArray(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewArray {
	return IconViewArray($size, $fill, $iconTypeWeight);
}

function IconViewCarousel(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewCarousel {
	return IconViewCarousel($size, $fill, $iconTypeWeight);
}

function IconViewColumn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewColumn {
	return IconViewColumn($size, $fill, $iconTypeWeight);
}

function IconViewColumn2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewColumn2 {
	return IconViewColumn2($size, $fill, $iconTypeWeight);
}

function IconViewComfy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewComfy {
	return IconViewComfy($size, $fill, $iconTypeWeight);
}

function IconViewComfyAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewComfyAlt {
	return IconViewComfyAlt($size, $fill, $iconTypeWeight);
}

function IconViewCompact(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewCompact {
	return IconViewCompact($size, $fill, $iconTypeWeight);
}

function IconViewCompactAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewCompactAlt {
	return IconViewCompactAlt($size, $fill, $iconTypeWeight);
}

function IconViewCozy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewCozy {
	return IconViewCozy($size, $fill, $iconTypeWeight);
}

function IconViewDay(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewDay {
	return IconViewDay($size, $fill, $iconTypeWeight);
}

function IconViewHeadline(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewHeadline {
	return IconViewHeadline($size, $fill, $iconTypeWeight);
}

function IconViewInAr(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewInAr {
	return IconViewInAr($size, $fill, $iconTypeWeight);
}

function IconViewInArOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewInArOff {
	return IconViewInArOff($size, $fill, $iconTypeWeight);
}

function IconViewKanban(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewKanban {
	return IconViewKanban($size, $fill, $iconTypeWeight);
}

function IconViewList(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewList {
	return IconViewList($size, $fill, $iconTypeWeight);
}

function IconViewModule(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewModule {
	return IconViewModule($size, $fill, $iconTypeWeight);
}

function IconViewObjectTrack(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewObjectTrack {
	return IconViewObjectTrack($size, $fill, $iconTypeWeight);
}

function IconViewQuilt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewQuilt {
	return IconViewQuilt($size, $fill, $iconTypeWeight);
}

function IconViewRealSize(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewRealSize {
	return IconViewRealSize($size, $fill, $iconTypeWeight);
}

function IconViewSidebar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewSidebar {
	return IconViewSidebar($size, $fill, $iconTypeWeight);
}

function IconViewStream(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewStream {
	return IconViewStream($size, $fill, $iconTypeWeight);
}

function IconViewTimeline(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewTimeline {
	return IconViewTimeline($size, $fill, $iconTypeWeight);
}

function IconViewWeek(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewWeek {
	return IconViewWeek($size, $fill, $iconTypeWeight);
}

function IconVignette(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVignette {
	return IconVignette($size, $fill, $iconTypeWeight);
}

function IconVilla(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVilla {
	return IconVilla($size, $fill, $iconTypeWeight);
}

function IconVisibility(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVisibility {
	return IconVisibility($size, $fill, $iconTypeWeight);
}

function IconVisibilityLock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVisibilityLock {
	return IconVisibilityLock($size, $fill, $iconTypeWeight);
}

function IconVisibilityOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVisibilityOff {
	return IconVisibilityOff($size, $fill, $iconTypeWeight);
}

function IconVitalSigns(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVitalSigns {
	return IconVitalSigns($size, $fill, $iconTypeWeight);
}

function IconVo2Max(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVo2Max {
	return IconVo2Max($size, $fill, $iconTypeWeight);
}

function IconVoiceChat(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVoiceChat {
	return IconVoiceChat($size, $fill, $iconTypeWeight);
}

function IconVoicemail(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVoicemail {
	return IconVoicemail($size, $fill, $iconTypeWeight);
}

function IconVoiceOverOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVoiceOverOff {
	return IconVoiceOverOff($size, $fill, $iconTypeWeight);
}

function IconVoiceSelection(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVoiceSelection {
	return IconVoiceSelection($size, $fill, $iconTypeWeight);
}

function IconVoiceSelectionOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVoiceSelectionOff {
	return IconVoiceSelectionOff($size, $fill, $iconTypeWeight);
}

function IconVolcano(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVolcano {
	return IconVolcano($size, $fill, $iconTypeWeight);
}

function IconVolumeDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVolumeDown {
	return IconVolumeDown($size, $fill, $iconTypeWeight);
}

function IconVolumeDownAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVolumeDownAlt {
	return IconVolumeDownAlt($size, $fill, $iconTypeWeight);
}

function IconVolumeMute(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVolumeMute {
	return IconVolumeMute($size, $fill, $iconTypeWeight);
}

function IconVolumeOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVolumeOff {
	return IconVolumeOff($size, $fill, $iconTypeWeight);
}

function IconVolumeUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVolumeUp {
	return IconVolumeUp($size, $fill, $iconTypeWeight);
}

function IconVolunteerActivism(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVolunteerActivism {
	return IconVolunteerActivism($size, $fill, $iconTypeWeight);
}

function IconVotingChip(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVotingChip {
	return IconVotingChip($size, $fill, $iconTypeWeight);
}

function IconVpnKey(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVpnKey {
	return IconVpnKey($size, $fill, $iconTypeWeight);
}

function IconVpnKeyAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVpnKeyAlert {
	return IconVpnKeyAlert($size, $fill, $iconTypeWeight);
}

function IconVpnKeyOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVpnKeyOff {
	return IconVpnKeyOff($size, $fill, $iconTypeWeight);
}

function IconVpnLock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVpnLock {
	return IconVpnLock($size, $fill, $iconTypeWeight);
}

function IconVr180Create2d(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVr180Create2d {
	return IconVr180Create2d($size, $fill, $iconTypeWeight);
}

function IconVr180Create2dOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVr180Create2dOff {
	return IconVr180Create2dOff($size, $fill, $iconTypeWeight);
}

function IconVrpano(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVrpano {
	return IconVrpano($size, $fill, $iconTypeWeight);
}

function IconWallArt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWallArt {
	return IconWallArt($size, $fill, $iconTypeWeight);
}

function IconWallet(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWallet {
	return IconWallet($size, $fill, $iconTypeWeight);
}

function IconWallLamp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWallLamp {
	return IconWallLamp($size, $fill, $iconTypeWeight);
}

function IconWallpaper(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWallpaper {
	return IconWallpaper($size, $fill, $iconTypeWeight);
}

function IconWallpaperSlideshow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWallpaperSlideshow {
	return IconWallpaperSlideshow($size, $fill, $iconTypeWeight);
}

function IconWard(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWard {
	return IconWard($size, $fill, $iconTypeWeight);
}

function IconWarehouse(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWarehouse {
	return IconWarehouse($size, $fill, $iconTypeWeight);
}

function IconWarning(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWarning {
	return IconWarning($size, $fill, $iconTypeWeight);
}

function IconWarningOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWarningOff {
	return IconWarningOff($size, $fill, $iconTypeWeight);
}

function IconWash(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWash {
	return IconWash($size, $fill, $iconTypeWeight);
}

function IconWatch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWatch {
	return IconWatch($size, $fill, $iconTypeWeight);
}

function IconWatchButtonPress(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWatchButtonPress {
	return IconWatchButtonPress($size, $fill, $iconTypeWeight);
}

function IconWatchCheck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWatchCheck {
	return IconWatchCheck($size, $fill, $iconTypeWeight);
}

function IconWatchOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWatchOff {
	return IconWatchOff($size, $fill, $iconTypeWeight);
}

function IconWatchScreentime(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWatchScreentime {
	return IconWatchScreentime($size, $fill, $iconTypeWeight);
}

function IconWatchVibration(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWatchVibration {
	return IconWatchVibration($size, $fill, $iconTypeWeight);
}

function IconWatchWake(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWatchWake {
	return IconWatchWake($size, $fill, $iconTypeWeight);
}

function IconWater(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWater {
	return IconWater($size, $fill, $iconTypeWeight);
}

function IconWaterBottle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWaterBottle {
	return IconWaterBottle($size, $fill, $iconTypeWeight);
}

function IconWaterBottleLarge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWaterBottleLarge {
	return IconWaterBottleLarge($size, $fill, $iconTypeWeight);
}

function IconWaterDamage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWaterDamage {
	return IconWaterDamage($size, $fill, $iconTypeWeight);
}

function IconWaterDo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWaterDo {
	return IconWaterDo($size, $fill, $iconTypeWeight);
}

function IconWaterDrop(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWaterDrop {
	return IconWaterDrop($size, $fill, $iconTypeWeight);
}

function IconWaterEc(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWaterEc {
	return IconWaterEc($size, $fill, $iconTypeWeight);
}

function IconWaterfallChart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWaterfallChart {
	return IconWaterfallChart($size, $fill, $iconTypeWeight);
}

function IconWaterFull(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWaterFull {
	return IconWaterFull($size, $fill, $iconTypeWeight);
}

function IconWaterHeater(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWaterHeater {
	return IconWaterHeater($size, $fill, $iconTypeWeight);
}

function IconWaterLock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWaterLock {
	return IconWaterLock($size, $fill, $iconTypeWeight);
}

function IconWaterLoss(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWaterLoss {
	return IconWaterLoss($size, $fill, $iconTypeWeight);
}

function IconWaterLux(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWaterLux {
	return IconWaterLux($size, $fill, $iconTypeWeight);
}

function IconWaterMedium(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWaterMedium {
	return IconWaterMedium($size, $fill, $iconTypeWeight);
}

function IconWaterOrp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWaterOrp {
	return IconWaterOrp($size, $fill, $iconTypeWeight);
}

function IconWaterPh(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWaterPh {
	return IconWaterPh($size, $fill, $iconTypeWeight);
}

function IconWaterPump(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWaterPump {
	return IconWaterPump($size, $fill, $iconTypeWeight);
}

function IconWaterVoc(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWaterVoc {
	return IconWaterVoc($size, $fill, $iconTypeWeight);
}

function IconWaves(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWaves {
	return IconWaves($size, $fill, $iconTypeWeight);
}

function IconWavingHand(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWavingHand {
	return IconWavingHand($size, $fill, $iconTypeWeight);
}

function IconWbAuto(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWbAuto {
	return IconWbAuto($size, $fill, $iconTypeWeight);
}

function IconWbIncandescent(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWbIncandescent {
	return IconWbIncandescent($size, $fill, $iconTypeWeight);
}

function IconWbIridescent(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWbIridescent {
	return IconWbIridescent($size, $fill, $iconTypeWeight);
}

function IconWbShade(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWbShade {
	return IconWbShade($size, $fill, $iconTypeWeight);
}

function IconWbSunny(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWbSunny {
	return IconWbSunny($size, $fill, $iconTypeWeight);
}

function IconWbTwilight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWbTwilight {
	return IconWbTwilight($size, $fill, $iconTypeWeight);
}

function IconWc(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWc {
	return IconWc($size, $fill, $iconTypeWeight);
}

function IconWeatherHail(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWeatherHail {
	return IconWeatherHail($size, $fill, $iconTypeWeight);
}

function IconWeatherMix(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWeatherMix {
	return IconWeatherMix($size, $fill, $iconTypeWeight);
}

function IconWeatherSnowy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWeatherSnowy {
	return IconWeatherSnowy($size, $fill, $iconTypeWeight);
}

function IconWeb(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWeb {
	return IconWeb($size, $fill, $iconTypeWeight);
}

function IconWebAsset(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWebAsset {
	return IconWebAsset($size, $fill, $iconTypeWeight);
}

function IconWebAssetOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWebAssetOff {
	return IconWebAssetOff($size, $fill, $iconTypeWeight);
}

function IconWebhook(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWebhook {
	return IconWebhook($size, $fill, $iconTypeWeight);
}

function IconWebStories(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWebStories {
	return IconWebStories($size, $fill, $iconTypeWeight);
}

function IconWebTraffic(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWebTraffic {
	return IconWebTraffic($size, $fill, $iconTypeWeight);
}

function IconWeekend(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWeekend {
	return IconWeekend($size, $fill, $iconTypeWeight);
}

function IconWeight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWeight {
	return IconWeight($size, $fill, $iconTypeWeight);
}

function IconWest(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWest {
	return IconWest($size, $fill, $iconTypeWeight);
}

function IconWhatshot(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWhatshot {
	return IconWhatshot($size, $fill, $iconTypeWeight);
}

function IconWheelchairPickup(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWheelchairPickup {
	return IconWheelchairPickup($size, $fill, $iconTypeWeight);
}

function IconWhereToVote(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWhereToVote {
	return IconWhereToVote($size, $fill, $iconTypeWeight);
}

function IconWidgetMedium(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWidgetMedium {
	return IconWidgetMedium($size, $fill, $iconTypeWeight);
}

function IconWidgets(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWidgets {
	return IconWidgets($size, $fill, $iconTypeWeight);
}

function IconWidgetSmall(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWidgetSmall {
	return IconWidgetSmall($size, $fill, $iconTypeWeight);
}

function IconWidgetWidth(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWidgetWidth {
	return IconWidgetWidth($size, $fill, $iconTypeWeight);
}

function IconWidthFull(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWidthFull {
	return IconWidthFull($size, $fill, $iconTypeWeight);
}

function IconWidthNormal(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWidthNormal {
	return IconWidthNormal($size, $fill, $iconTypeWeight);
}

function IconWidthWide(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWidthWide {
	return IconWidthWide($size, $fill, $iconTypeWeight);
}

function IconWifi(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWifi {
	return IconWifi($size, $fill, $iconTypeWeight);
}

function IconWifi1Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWifi1Bar {
	return IconWifi1Bar($size, $fill, $iconTypeWeight);
}

function IconWifi2Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWifi2Bar {
	return IconWifi2Bar($size, $fill, $iconTypeWeight);
}

function IconWifiAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWifiAdd {
	return IconWifiAdd($size, $fill, $iconTypeWeight);
}

function IconWifiCalling(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWifiCalling {
	return IconWifiCalling($size, $fill, $iconTypeWeight);
}

function IconWifiCallingBar1(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWifiCallingBar1 {
	return IconWifiCallingBar1($size, $fill, $iconTypeWeight);
}

function IconWifiCallingBar2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWifiCallingBar2 {
	return IconWifiCallingBar2($size, $fill, $iconTypeWeight);
}

function IconWifiCallingBar3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWifiCallingBar3 {
	return IconWifiCallingBar3($size, $fill, $iconTypeWeight);
}

function IconWifiChannel(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWifiChannel {
	return IconWifiChannel($size, $fill, $iconTypeWeight);
}

function IconWifiFind(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWifiFind {
	return IconWifiFind($size, $fill, $iconTypeWeight);
}

function IconWifiHome(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWifiHome {
	return IconWifiHome($size, $fill, $iconTypeWeight);
}

function IconWifiLock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWifiLock {
	return IconWifiLock($size, $fill, $iconTypeWeight);
}

function IconWifiNotification(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWifiNotification {
	return IconWifiNotification($size, $fill, $iconTypeWeight);
}

function IconWifiOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWifiOff {
	return IconWifiOff($size, $fill, $iconTypeWeight);
}

function IconWifiPassword(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWifiPassword {
	return IconWifiPassword($size, $fill, $iconTypeWeight);
}

function IconWifiProtectedSetup(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWifiProtectedSetup {
	return IconWifiProtectedSetup($size, $fill, $iconTypeWeight);
}

function IconWifiProxy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWifiProxy {
	return IconWifiProxy($size, $fill, $iconTypeWeight);
}

function IconWifiTethering(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWifiTethering {
	return IconWifiTethering($size, $fill, $iconTypeWeight);
}

function IconWifiTetheringError(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWifiTetheringError {
	return IconWifiTetheringError($size, $fill, $iconTypeWeight);
}

function IconWifiTetheringOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWifiTetheringOff {
	return IconWifiTetheringOff($size, $fill, $iconTypeWeight);
}

function IconWindow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWindow {
	return IconWindow($size, $fill, $iconTypeWeight);
}

function IconWindowClosed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWindowClosed {
	return IconWindowClosed($size, $fill, $iconTypeWeight);
}

function IconWindowOpen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWindowOpen {
	return IconWindowOpen($size, $fill, $iconTypeWeight);
}

function IconWindowSensor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWindowSensor {
	return IconWindowSensor($size, $fill, $iconTypeWeight);
}

function IconWindPower(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWindPower {
	return IconWindPower($size, $fill, $iconTypeWeight);
}

function IconWineBar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWineBar {
	return IconWineBar($size, $fill, $iconTypeWeight);
}

function IconWoman(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWoman {
	return IconWoman($size, $fill, $iconTypeWeight);
}

function IconWoman2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWoman2 {
	return IconWoman2($size, $fill, $iconTypeWeight);
}

function IconWork(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWork {
	return IconWork($size, $fill, $iconTypeWeight);
}

function IconWorkAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWorkAlert {
	return IconWorkAlert($size, $fill, $iconTypeWeight);
}

function IconWorkHistory(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWorkHistory {
	return IconWorkHistory($size, $fill, $iconTypeWeight);
}

function IconWorkspacePremium(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWorkspacePremium {
	return IconWorkspacePremium($size, $fill, $iconTypeWeight);
}

function IconWorkspaces(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWorkspaces {
	return IconWorkspaces($size, $fill, $iconTypeWeight);
}

function IconWorkUpdate(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWorkUpdate {
	return IconWorkUpdate($size, $fill, $iconTypeWeight);
}

function IconWoundsInjuries(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWoundsInjuries {
	return IconWoundsInjuries($size, $fill, $iconTypeWeight);
}

function IconWrapText(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWrapText {
	return IconWrapText($size, $fill, $iconTypeWeight);
}

function IconWrist(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWrist {
	return IconWrist($size, $fill, $iconTypeWeight);
}

function IconWrongLocation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWrongLocation {
	return IconWrongLocation($size, $fill, $iconTypeWeight);
}

function IconWysiwyg(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWysiwyg {
	return IconWysiwyg($size, $fill, $iconTypeWeight);
}

function IconYard(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconYard {
	return IconYard($size, $fill, $iconTypeWeight);
}

function IconYourTrips(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconYourTrips {
	return IconYourTrips($size, $fill, $iconTypeWeight);
}

function IconYoutubeActivity(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconYoutubeActivity {
	return IconYoutubeActivity($size, $fill, $iconTypeWeight);
}

function IconYoutubeSearchedFor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconYoutubeSearchedFor {
	return IconYoutubeSearchedFor($size, $fill, $iconTypeWeight);
}

function IconZonePersonAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconZonePersonAlert {
	return IconZonePersonAlert($size, $fill, $iconTypeWeight);
}

function IconZonePersonIdle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconZonePersonIdle {
	return IconZonePersonIdle($size, $fill, $iconTypeWeight);
}

function IconZonePersonUrgent(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconZonePersonUrgent {
	return IconZonePersonUrgent($size, $fill, $iconTypeWeight);
}

function IconZoomIn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconZoomIn {
	return IconZoomIn($size, $fill, $iconTypeWeight);
}

function IconZoomInMap(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconZoomInMap {
	return IconZoomInMap($size, $fill, $iconTypeWeight);
}

function IconZoomOut(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconZoomOut {
	return IconZoomOut($size, $fill, $iconTypeWeight);
}

function IconZoomOutMap(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconZoomOutMap {
	return IconZoomOutMap($size, $fill, $iconTypeWeight);
}

/* End Icons */