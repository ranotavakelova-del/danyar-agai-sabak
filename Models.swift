
import Foundation

enum UserRole: String, CaseIterable, Identifiable {
    case student = "Студент"
    case teacher = "Мұғалім"

    var id: String { rawValue }
}

struct CollegeStudent: Identifiable, Hashable {
    let id: String
    let name: String
    let groupID: String
}

struct CollegeGroup: Identifiable {
    let id: String
    let name: String
    let specialty: String
}

struct CollegeLesson: Identifiable {
    let id = UUID()
    let day: String
    let time: String
    let subject: String
    let room: String
    let group: String
}

struct CollegeNews: Identifiable {
    let id = UUID()
    let title: String
    let details: String
    let date: String
    let symbol: String
}

struct CollegeService: Identifiable {
    let id = UUID()
    let title: String
    let details: String
    let symbol: String
}
