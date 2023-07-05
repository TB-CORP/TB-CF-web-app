# TopBrains - Code Fest - Web Application
TopBrains Code Fest web application by TB-CORP LLC. The application follows [monolithic architecture](https://en.wikipedia.org/wiki/Monolithic_application) and build as SPA using [Yii2](https://www.yiiframework.com/) PHP framework. The application is in its prototype stage, which is ready to be used for demostration purposes.

![Name: TopBrains - Code Fest - Web Application](https://img.shields.io/badge/Name-TopBrains%20--%20Code%20Fest%20--%20Web%20Application-green)
![Alt: TB-CF-web-app](https://img.shields.io/badge/Alt-TB--CF--web--app-yellowgreen)
![Code: TB-CF-WA](https://img.shields.io/badge/Code-TB--CF--WA-yellow)

---

## Contents
- [Introduction](#topbrains---code-fest---web-application)
- [Architecture](#architecture)

## Architecture
The project is a [monolithic application](https://en.wikipedia.org/wiki/Monolithic_application), which briefly means that the application is self-contained and do not depend on other applications. The architecture diagram is a conceptual diagram, which shares the idea behind the application structure, but not list it. Install [browser extension](https://chrome.google.com/webstore/detail/markdown-diagrams/pmoglnmodacnbbofbgcagndelmgaclel), if you do not see the diagram.
```plantuml
@startuml Class diagram
' Diagram config
left to right direction
skinparam packageStyle rectangle
skinparam groupInheritance 2
skinparam classAttributeIconSize 0
!define model_stereotype <<Model>>
!define controller_stereotype <<Controller>>
!define action_stereotype  <<Action>>
!define view_stereotype <<(V,#FF7700) View>>
' Class relationships
client.controllers._super.BaseController <|-- client.controllers.ResourceOneController
client.controllers._super.BaseController <|-- client.controllers.ResourceTwoController
client.controllers.ResourceOneController *-- client.actions.resourceOne.OneAction
client.controllers.ResourceOneController *-- client.actions.resourceOne.TwoAction
client.controllers.ResourceTwoController *-- client.actions.resourceTwo.OneAction
client.controllers.ResourceTwoController *-- client.actions.resourceTwo.TwoAction
client.actions.resourceOne.OneAction -- client.views.resourceOne.One
client.actions.resourceOne.TwoAction -- client.views.resourceOne.Two
common.models.ResourceOne --o client.actions.resourceOne.OneAction
common.models.ResourceOne --o client.actions.resourceOne.TwoAction
' Declare classes
class client.controllers._super.BaseController {
    +behaviors()
}
class client.controllers.ResourceOneController controller_stereotype {
    +actions()
}
class client.controllers.ResourceTwoController controller_stereotype {
    +actions()
}
class client.actions.resourceOne.OneAction action_stereotype {
    +run()
}
class client.actions.resourceOne.TwoAction action_stereotype {
    +run()
}
class client.actions.resourceTwo.OneAction action_stereotype {
    +run()
}
class client.actions.resourceTwo.TwoAction action_stereotype {
    +run()
}
class client.views.resourceOne.One view_stereotype {
    model
}
class client.views.resourceOne.Two view_stereotype {
    model
}
class common.models.ResourceOne model_stereotype {
    +rules()
    +[getRESOURCE()]...
    +[getRESOURCES()]...
}
' Notes
note as n1
    Each <i>TB-CF-DB<sup>1</sup></i> resource 
    used has its own controller with 
    composition of actions.
endnote
client.controllers .. n1
note as n2
    Common action files are not allowed 
    to avoid architecture rigidity.
endnote
client.actions .. n2
note as n3
    Name of a view file must match the 
    name of its action file.
endnote
client.views .left. n3
@enduml
```
### References
1. [TB-CF-DB](https://github.com/TB-CORP/TB-CF-database). Database design of the TopBrains Code Fest project.
